<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attributes</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="container">
        <section class="filters">
            <h2 class="filters__title">Фильтры</h2>
            <form class="filters__form" action="{{ route('update.attr', request('class')) }}">
                @csrf
                @method('patch')
                <input class="filters__input" type="text" name="name" value="{{ $requestData['name'] ?? '' }}"
                    placeholder="Название">
                <input class="filters__input" type="text" name="direct" value="{{ $requestData['direct'] ?? '' }}"
                    placeholder="Направление">
                <input class="filters__input" type="text" name="source" value="{{ $requestData['source'] ?? '' }}"
                    placeholder="Источник">
                <input class="filters__input" type="text" name="description"
                    value="{{ $requestData['description'] ?? '' }}" placeholder="Описание">
                <button class="filters__submit" type="submit">Изменить</button>
            </form>
        </section>
        <section class="result">
            <h1 class="result__title">Аттрибуты класса</h1>
            <table class="table result__table">
                <thead class="table__head">
                    <th>class_id</th>
                    <th>ord</th>
                    <th>source_attr</th>
                    <th>descr</th>
                    <th>stage_attr</th>
                    <th>stage_attr_prev</th>
                    <th>stage_data_type</th>
                    <th>stage_data_type_prev</th>
                    <th>is_pk</th>
                    <th>is_mandatory</th>
                    <th>core_attr</th>
                    <th>core_attr_prev</th>
                </thead>
                <tbody class="table__body">
                    @foreach ($attrs as $row)
                        <tr>
                            <td>{{ $row->class_id }}</td>
                            <td>{{ $row->ord }}</td>
                            <td>{{ $row->source_attr }}</td>
                            <td>{{ $row->descr }}</td>
                            <td>{{ $row->stage_attr }}</td>
                            <td>{{ $row->stage_attr_prev }}</td>
                            <td>{{ $row->stage_data_type }}</td>
                            <td>{{ $row->stage_data_type_prev }}</td>
                            <td>{{ $row->is_pk }}</td>
                            <td>{{ $row->is_mandatory }}</td>
                            <td>{{ $row->core_attr }}</td>
                            <td>{{ $row->core_attr_prev }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>
