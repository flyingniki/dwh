@extends('layouts.layout')

@section('content')
    <section class="result">
        <h1 class="result__title">Аттрибуты классов</h1>
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
                @foreach ($attrs as $row)
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
