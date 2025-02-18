@extends('layouts.layout')

@vite(['resources/js/popup.js'])

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
            <h1 class="fields__title">Класс {{ $classesView->class_id }}:
                {{ $classesView->name }}</h1>
        </div>
        <form class="fields__form" action="{{ route('update.class', $classesView) }}" method="post">
            @csrf
            @method('patch')
            <div class="fields__container">
                <div class="fields__col">
                    <div class="fields__item">
                        <label class="fields__label" for="name">Название</label>
                        <input class="fields__input" type="text" name="name" id="name"
                            value="{{ $classesView->name ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="source">Источник</label>
                        <select class="fields__input" name="source" id="source">
                            @foreach ($sources as $source)
                                <option value="{{ $source->source }}" @selected($classesView->source === $source->source)>{{ $source->source }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="description">Описание</label>
                        <textarea class="fields__input fields__input--textarea" name="description" id="description">{{ $classesView->description ?? '' }}</textarea>
                    </div>
                </div>
                <div class="fields__col">
                    <div class="fields__item">
                        <label class="fields__label" for="stage_table">DWH(stage)</label>
                        <input class="fields__input" type="text" name="stage_table" id="stage_table"
                            value="{{ $classesView->stage_table ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="core_table">DWH(core)</label>
                        <input class="fields__input" type="text" name="core_table" id="core_table"
                            value="{{ $classesView->core_table ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="subsystem">Subsystem</label>
                        <input class="fields__input" type="text" name="subsystem" id="subsystem"
                            value="{{ $classesView->subsystem ?? '' }}">
                    </div>
                    <div class="fields__item">
                        <label class="fields__label" for="wiki_link">Wiki</label>
                        <input class="fields__input" type="text" name="wiki_link" id="wiki_link"
                            value="{{ $classesView->wiki_link ?? '' }}">
                    </div>
                </div>
            </div>
            <button class="btn fields__submit" type="submit">Изменить</button>
        </form>
    </section>
    <section class="result">
        <h1 class="result__title">Аттрибуты класса</h1>
        <table class="table result__table">
            <thead class="table__head">
                <tr class="table__tr">
                    <th class="table__th" title="src_name_new">Новый</th>
                    <th class="table__th" title="src_name">Аттрибут</th>
                    <th class="table__th" title="src_type">Тип</th>
                    <th class="table__th" title="src_descr">Описание</th>
                    <th class="table__th" title="src_comments">Комментарии</th>
                    <th class="table__th" title="dwh_name">Attr</th>
                    <th class="table__th" title="dwh_type">Type</th>
                    <th class="table__th" title="dwh_descr">Descr</th>
                    <th class="table__th" title="dwh_is_pk">PK</th>
                    <th class="table__th" title="dwh_is_mandatory">NN</th>
                </tr>
            </thead>
            <tbody class="table__body">
                @foreach ($classAttrs as $row)
                    <tr class="table__tr table__tr--body">
                        @php
                            $class = '';
                        @endphp
                        @if ($row->src_is_drop)
                            @php
                                $class = 'table__td--delete';
                            @endphp
                        @endif
                        @if ($row->src_is_system)
                            @php
                                $class = 'table__td--system';
                            @endphp
                        @endif
                        @if ($row->src_subclass_id || $row->src_fk_class)
                            @php
                                $class = 'table__td--subclass';
                            @endphp
                        @endif
                        <td class="table__td {{ $class }}">
                            <a class="table__link table__link--btn" data-class-id={{ $classesView->class_id }}
                                data-src-id={{ $row->src_attr_id_new }}
                                data-dwh-id={{ $row->dwh_attr_id_new }}>{{ $row->src_name_new }}</a>
                        </td>
                        <td class="table__td">{{ $row->src_name }}</td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn result__create" data-class-id="{{ $classesView->class_id }}">Добавить аттрибут</button>
    </section>
    @include('popup')
    @include('info')
@endsection
