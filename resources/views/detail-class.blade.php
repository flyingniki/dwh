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
        <form class="fields__form fields__form--edit" action="{{ route('update.class', $metaClassesView) }}" method="post">
            @csrf
            @method('patch')
            <div class="fields__item">
                <label class="fields__label" for="name">Название</label>
                <input class="fields__input" type="text" name="name" id="name"
                    value="{{ $metaClassesView->name ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="source">Источник</label>
                <select class="fields__input" name="source" id="source">
                    @foreach ($sources as $source)
                        <option value="{{ $source->source }}" @selected($metaClassesView->source === $source->source)>{{ $source->source }}</option>
                    @endforeach
                </select>
            </div>
            <div class="fields__item">
                <label class="fields__label" for="description">Описание</label>
                <textarea class="fields__input fields__input--textarea" name="description" id="description">{{ $metaClassesView->description ?? '' }}</textarea>
            </div>
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
            <button class="fields__submit" type="submit">Изменить</button>
        </form>
    </section>
    <section class="result">
        <h1 class="result__title">Аттрибуты класса</h1>
        <table class="table result__table">
            <thead class="table__head">
                {{-- <th class="table__th">class_id</th> --}}
                {{-- <th class="table__th">subclass_id</th> --}}
                {{-- <th class="table__th">subclass_ord</th> --}}
                {{-- <th class="table__th">from_ord</th> --}}
                {{-- <th class="table__th">to_ord</th> --}}
                {{-- <th class="table__th">row_ord</th> --}}
                {{-- <th class="table__th">from_id</th> --}}
                <th class="table__th" title="from_name">Аттрибут</th>
                <th class="table__th" title="from_type">Тип</th>
                <th class="table__th" title="from_descr">Описание</th>
                <th class="table__th" title="from_comments">Комментарии</th>
                {{-- <th class="table__th">from_is_subclass</th> --}}
                {{-- <th class="table__th">to_id</th> --}}
                <th class="table__th" title="to_name">Attr</th>
                <th class="table__th" title="to_type">Type</th>
                <th class="table__th" title="to_descr">Descr</th>
                <th class="table__th" title="to_is_pk">PK</th>
                <th class="table__th" title="to_is_mandatory">NN</th>
            </thead>
            <tbody class="table__body">
                @foreach ($classAttrs as $row)
                    <tr class="table__tr">
                        {{-- <td class="table__td">{{ $row->class_id }}</td> --}}
                        {{-- <td class="table__td">{{ $row->subclass_id }}</td> --}}
                        {{-- <td class="table__td">{{ $row->subclass_ord }}</td> --}}
                        {{-- <td class="table__td">{{ $row->from_ord }}</td>
                        <td class="table__td">{{ $row->to_ord }}</td>
                        <td class="table__td">{{ $row->row_ord }}</td> --}}
                        {{-- <td class="table__td">{{ $row->from_id }}</td> --}}
                        {{-- TODO href --}}
                        <td class="table__td">
                            <a class="table__link" target="_blank"
                                href="{{ $row->subclass_id ? 'link' : 'no_link' }}">{{ $row->from_name }}</a>
                        </td>
                        <td class="table__td">{{ $row->from_type }}</td>
                        <td class="table__td">{{ $row->from_descr }}</td>
                        <td class="table__td">{{ $row->from_comments }}</td>
                        {{-- <td class="table__td">{{ $row->from_is_subclass }}</td> --}}
                        {{-- <td class="table__td">{{ $row->to_id }}</td> --}}
                        <td class="table__td table__td--filled">{{ $row->to_name }}</td>
                        <td class="table__td table__td--filled">{{ $row->to_type }}</td>
                        <td class="table__td table__td--filled">{{ $row->to_descr }}</td>
                        <td class="table__td table__td--filled">
                            <input class="table__checkbox" type="checkbox" @checked($row->to_is_pk === true) disabled>
                        </td>
                        <td class="table__td table__td--filled">
                            <input class="table__checkbox" type="checkbox" @checked($row->to_is_mandatory === true) disabled>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
