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
    <table class="table">
        <caption class="caption">Таблица аттрибутов</caption>
        <thead>
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
        <tbody class="tbody">
            @foreach ($attrs as $row)
                <tr>
                    <td>{{ $row['class_id'] }}</td>
                    <td>{{ $row['ord'] }}</td>
                    <td>{{ $row['source_attr'] }}</td>
                    <td>{{ $row['descr'] }}</td>
                    <td>{{ $row['stage_attr'] }}</td>
                    <td>{{ $row['stage_attr_prev'] }}</td>
                    <td>{{ $row['stage_data_type'] }}</td>
                    <td>{{ $row['stage_data_type_prev'] }}</td>
                    <td>{{ $row['is_pk'] }}</td>
                    <td>{{ $row['is_mandatory'] }}</td>
                    <td>{{ $row['core_attr'] }}</td>
                    <td>{{ $row['core_attr_prev'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
