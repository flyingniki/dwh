@extends('layouts.layout')

@section('content')
    <section class="result">
        <h1 class="result__title">Аттрибуты классов</h1>
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
@endsection
