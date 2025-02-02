@extends('layouts.layout')

@section('content')
    @if (session('status'))
        <div class="alert">
            {{ session('status') }}
        </div>
    @endif
    <section class="fields">
        <div class="fields__header">
            <a class="fields__link" href="{{ route('show.classes') }}">
                <img class="fields__img" src="{{ Vite::asset('resources/img/back.png') }}" alt="Back">
            </a>
            <h1 class="fields__title">Класс {{ $metaClassesView->class_id }}:
                {{ $metaClassesView->name }}</h1>
        </div>
        <form class="fields__form" action="{{ route('update.class', $metaClassesView) }}" method="post">
            @csrf
            @method('patch')
            <div class="fields__container">
                <div class="fields__col">
                    <div class="fields__item">
                        <label class="fields__label" for="name">Название</label>
                        <input class="fields__input" type="text" name="name" id="name"
                            value="{{ $metaClassesView->name ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="source">Источник</label>
                        <select class="fields__input" name="source" id="source">
                            @foreach ($sources as $source)
                                <option value="{{ $source->source }}" @selected($metaClassesView->source === $source->source)>{{ $source->source }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="description">Описание</label>
                        <textarea class="fields__input fields__input--textarea" name="description" id="description">{{ $metaClassesView->description ?? '' }}</textarea>
                    </div>
                </div>
                <div class="fields__col">
                    <div class="fields__item">
                        <label class="fields__label" for="stage_table">DWH(stage)</label>
                        <input class="fields__input" type="text" name="stage_table" id="stage_table"
                            value="{{ $metaClassesView->stage_table ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="core_table">DWH(core)</label>
                        <input class="fields__input" type="text" name="core_table" id="core_table"
                            value="{{ $metaClassesView->core_table ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="subsystem">Subsystem</label>
                        <input class="fields__input" type="text" name="subsystem" id="subsystem"
                            value="{{ $metaClassesView->subsystem ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="wiki_link">Wiki</label>
                        <input class="fields__input" type="text" name="wiki_link" id="wiki_link"
                            value="{{ $metaClassesView->wiki_link ?? '' }}">
                    </div>
                </div>
            </div>
            <button class="fields__submit" type="submit">Изменить</button>
        </form>
    </section>
    <section class="result">
        <h1 class="result__title">Аттрибуты класса</h1>
        <table class="table result__table">
            <thead class="table__head">
                <tr class="table__tr">
                    <th class="table__th" title="src_name">Аттрибут</th>
                    <th class="table__th" title="src_type">Тип</th>
                    <th class="table__th" title="src_descr">Описание</th>
                    <th class="table__th" title="src_comments">Комментарии</th>
                    <th class="table__th" title="dwh_name">Attr</th>
                    <th class="table__th" title="dwh_type">Type</th>
                    <th class="table__th" title="dwh_descr">Descr</th>
                    <th class="table__th" title="dwh_is_pk">PK</th>
                    <th class="table__th" title="dwh_is_mandatory">NN</th>
                    <th class="table__th"></th>
                </tr>
            </thead>
            <tbody class="table__body">
                @foreach ($classAttrs as $row)
                    <tr class="table__tr table__tr--body">
                        {{-- TODO href --}}
                        <td class="table__td">
                            <a class="table__link" target="_blank"
                                href="{{ $row->subclass_id ? 'link' : 'no_link' }}">{{ $row->src_name }}</a>
                        </td>
                        {{-- TODO href --}}
                        <td class="table__td">{{ $row->src_type }}</td>
                        <td class="table__td">{{ $row->src_descr }}</td>
                        <td class="table__td">{{ $row->src_comments }}</td>
                        <td class="table__td table__td--filled">{{ $row->dwh_name }}</td>
                        <td class="table__td table__td--filled">{{ $row->dwh_type }}</td>
                        <td class="table__td table__td--filled">{{ $row->dwh_descr }}</td>
                        <td class="table__td table__td--filled">
                            <input class="table__checkbox" type="checkbox" @checked($row->dwh_is_pk === true) disabled>
                        </td>
                        <td class="table__td table__td--filled">
                            <input class="table__checkbox" type="checkbox" @checked($row->dwh_is_mandatory === true) disabled>
                        </td>
                        <td class="table__td">
                            <button class="btn table__btn btn--edit" data-row="{{ $row->toJson() }}">Edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <section class="popup">
        <div class="popup__wrapper">
            <h2 class="popup__title">Редактирование атрибута</h2>
            <form class="form popup__form" action="#" method="post">
                <div class="form__wrapper">
                    <h3 class="form__caption">Источник данных</h3>
                    <div class="form__container">
                        <div class="form__fields">
                            <h4 class="form__subtitle">Src</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">Src</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">Src</h4>
                            <span class="form__value">Value</span>
                        </div>
                        <div class="form__fields">
                            <h4 class="form__subtitle">SrcNew</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">SrcNew</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">SrcNew</h4>
                            <span class="form__value">Value</span>
                        </div>
                    </div>
                    <h3 class="form__caption">Приемник данных</h3>
                    <div class="form__container">
                        <div class="form__fields">
                            <h4 class="form__subtitle">DWH</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">DWH</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">DWH</h4>
                            <span class="form__value">Value</span>
                        </div>
                        <div class="form__fields">
                            <h4 class="form__subtitle">DWHNew</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">DWHNew</h4>
                            <span class="form__value">Value</span>
                            <h4 class="form__subtitle">DWHNew</h4>
                            <span class="form__value">Value</span>
                        </div>
                    </div>
                </div>
                <button class="btn form__submit" type="submit">Изменить</button>
            </form>
            <button class="btn popup__toggle"><span class="visually-hidden">Закрыть форму</span></button>
        </div>
    </section>
@endsection
