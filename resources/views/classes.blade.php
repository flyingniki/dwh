@extends('layouts.layout')

@section('content')
    <section class="fields">
        <h2 class="fields__title">Фильтры</h2>
        <form class="fields__form" action="{{ route('show.classes') }}" method="get">
            <div class="fields__item">
                <label class="fields__label" for="id">ID</label>
                <input class="fields__input" type="text" name="id" id="id"
                    value="{{ $requestData['id'] ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="name">Название</label>
                <input class="fields__input" type="text" name="name" id="name"
                    value="{{ $requestData['name'] ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="source">Источник</label>
                <select class="fields__input" name="source" id="source">
                    <option value="">Все</option>
                    @foreach ($sources as $source)
                        <option value="{{ $source->source }}"
                            @if (isset($requestData['source'])) @selected($requestData['source'] === $source->source) @endif>
                            {{ $source->source }}</option>
                    @endforeach
                </select>
            </div>

            <button class="fields__submit" type="submit">Показать</button>
        </form>
    </section>
    <section class="result">
        <h1 class="result__title">Список классов</h1>
        <table class="table result__table">
            <thead class="thead">
                <th>ID</th>
                <th>Название</th>
                <th>Направление</th>
                <th>Источник</th>
                <th>stage_table</th>
                <th>core_table</th>
                <th>child_table1</th>
                <th>child_table2</th>
                <th>Описание</th>
                <th>subsystem</th>
                <th>Получатель</th>
                <th>Wiki</th>
                <th>Метод загрузки</th>
                <th>last_updated_dev</th>
                <th>Controls</th>
            </thead>
            <tbody class="tbody">
                @foreach ($data as $row)
                    <tr>
                        <td>
                            <a target="_blank"
                                href="{{ route('detail.class', ['metaClassesView' => $row->class_id]) }}">{{ $row->class_id }}</a>
                        </td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->in_out }}</td>
                        <td>{{ $row->source }}</td>
                        <td>{{ $row->stage_table }}</td>
                        <td>{{ $row->core_table }}</td>
                        <td>{{ $row->child_table1 }}</td>
                        <td>{{ $row->child_table2 }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->subsystem }}</td>
                        <td>{{ $row->reciever }}</td>
                        <td>{{ $row->wiki_link }}</td>
                        <td>{{ $row->load_method }}</td>
                        <td>{{ $row->last_updated_dev }}</td>
                        <td>
                            <a class="btn btn--edit" href="{{ route('edit.class', $row->class_id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
