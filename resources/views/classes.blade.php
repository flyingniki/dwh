@extends('layouts.layout')

@section('content')
    <section class="fields">
        <h2 class="fields__title">Фильтры</h2>
        <form class="fields__form fields__form--filter" action="{{ route('show.classes') }}" method="get">
            <div class="fields__item">
                <label class="fields__label" for="id">ID</label>
                <input class="fields__input" type="text" name="id" id="id">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="name">Название</label>
                <input class="fields__input" type="text" name="name" id="name">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="source">Источник</label>
                <select class="fields__input" name="source" id="source">
                    <option value="">Все</option>
                    @foreach ($sources as $source)
                        <option value="{{ $source->source }}">
                            {{ $source->source }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn fields__submit" type="submit">Показать</button>
        </form>
    </section>
    <section class="result">
        <h1 class="result__title">Реестр классов</h1>
        <table class="table result__table">
            <thead class="table__head">
                <tr class="table__tr">
                    <th class="table__th">ID</th>
                    <th class="table__th">Название</th>
                    <th class="table__th">Источник</th>
                    <th class="table__th">Получатель</th>
                    <th class="table__th">DWH(stage)</th>
                    <th class="table__th">DWH(core)</th>
                    <th class="table__th">Описание</th>
                    <th class="table__th">Subsystem</th>
                    <th class="table__th">Wiki</th>
                    <th class="table__th">Метод загрузки</th>
                </tr>
            </thead>
            <tbody class="table__body">
                @foreach ($data as $row)
                    <tr class="table__tr table__tr--body">
                        <td class="table__td">
                            <a class="table__link" target="_blank"
                                href="{{ route('detail.class', ['classesView' => $row->class_id]) }}">{{ $row->class_id }}</a>
                        </td>
                        <td class="table__td">{{ $row->name }}</td>
                        <td class="table__td">{{ $row->source }}</td>
                        <td class="table__td">{{ $row->reciever }}</td>
                        <td class="table__td table__td--wide">{{ $row->stage_table }}</td>
                        <td class="table__td table__td--wide">{{ $row->core_table }}</td>
                        <td class="table__td table__td--wide">{{ $row->description }}</td>
                        <td class="table__td">{{ $row->subsystem }}</td>
                        <td class="table__td">
                            <a class="table__link" target="_blank"
                                href="{{ $row->wiki_link ?? '' }}">{{ $row->wiki_link ? 'C' . $row->class_id : '' }}</a>
                        </td>
                        <td class="table__td">{{ $row->load_method }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
