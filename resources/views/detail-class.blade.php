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
            {{-- <div class="fields__item">
                <label class="fields__label" for="in_out">Направление</label>
                <input class="fields__input" type="text" name="in_out" id="in_out"
                    value="{{ $metaClassesView->in_out ?? '' }}">
            </div> --}}
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
                <th class="table__th">class_id</th>
                <th class="table__th">ord</th>
                <th class="table__th">source_attr</th>
                <th class="table__th">descr</th>
                <th class="table__th">stage_attr</th>
                <th class="table__th">stage_attr_prev</th>
                <th class="table__th">stage_data_type</th>
                <th class="table__th">stage_data_type_prev</th>
                <th class="table__th">is_pk</th>
                <th class="table__th">is_mandatory</th>
                <th class="table__th">core_attr</th>
                <th class="table__th">core_attr_prev</th>
            </thead>
            <tbody class="table__body">
                @foreach ($classAttrs as $row)
                    <tr class="table__tr">
                        <td class="table__td">{{ $row->class_id }}</td>
                        <td class="table__td">{{ $row->ord }}</td>
                        <td class="table__td">{{ $row->source_attr }}</td>
                        <td class="table__td">{{ $row->descr }}</td>
                        <td class="table__td">{{ $row->stage_attr }}</td>
                        <td class="table__td">{{ $row->stage_attr_prev }}</td>
                        <td class="table__td">{{ $row->stage_data_type }}</td>
                        <td class="table__td">{{ $row->stage_data_type_prev }}</td>
                        <td class="table__td">{{ $row->is_pk }}</td>
                        <td class="table__td">{{ $row->is_mandatory }}</td>
                        <td class="table__td">{{ $row->core_attr }}</td>
                        <td class="table__td">{{ $row->core_attr_prev }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
