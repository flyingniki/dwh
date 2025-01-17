<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    @csrf
    <form action="{{ route('show.classes') }}" method="get">
        <input type="text" name="id" value="{{ $requestData['id'] ?? '' }}" placeholder="ID">
        <input type="text" name="name" value="{{ $requestData['name'] ?? '' }}" placeholder="Название">
        <select name="source" id="source">
            <option value="">Источник</option>
            @foreach ($sources as $source)
                <option value="{{ $source->data_class_source }}"
                    @if (isset($requestData['source'])) @selected($requestData['source'] === $source->data_class_source) @endif>
                    {{ $source->data_class_source }}</option>
            @endforeach
        </select>
        <button type="submit">Показать</button>
    </form>
    <table class="table">
        <caption class="caption">Таблица классов</caption>
        <thead>
            <th>ID</th>
            <th>Название</th>
            <th>Направление</th>
            <th>Источник</th>
            <th>data_class_dr</th>
            <th>data_class_dict</th>
            <th>child_table1</th>
            <th>child_table2</th>
            <th>Описание</th>
            <th>subsystem</th>
            <th>Получатель</th>
            <th>Wiki</th>
            <th>Метод загрузки</th>
            <th>last_updated_dev</th>
        </thead>
        <tbody class="tbody">
            @foreach ($data as $row)
                <tr>
                    <td><a href="attrs/{{ $row['data_class_id'] }}">{{ $row['data_class_id'] }}</a></td>
                    <td>{{ $row['data_class_name'] }}</td>
                    <td>{{ $row['data_class_direct'] }}</td>
                    <td>{{ $row['data_class_source'] }}</td>
                    <td>{{ $row['data_class_dr'] }}</td>
                    <td>{{ $row['data_class_dict'] }}</td>
                    <td>{{ $row['child_table1'] }}</td>
                    <td>{{ $row['child_table2'] }}</td>
                    <td>{{ $row['description'] }}</td>
                    <td>{{ $row['subsystem'] }}</td>
                    <td>{{ $row['reciever'] }}</td>
                    <td>{{ $row['wiki_link'] }}</td>
                    <td>{{ $row['load_method'] }}</td>
                    <td>{{ $row['last_updated_dev'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
