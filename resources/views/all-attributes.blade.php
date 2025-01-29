@extends('layouts.layout')

@section('content')
    <section class="result">
        <h1 class="result__title">Аттрибуты классов</h1>
        <table class="table result__table">
            <thead class="table__head">
                <tr class="table__tr">
                    <th class="table__th">class_id</th>
                    <th class="table__th">subclass_id</th>
                    <th class="table__th">subclass_ord</th>
                    <th class="table__th">from_ord</th>
                    <th class="table__th">to_ord</th>
                    <th class="table__th">row_ord</th>
                    <th class="table__th">from_id</th>
                    <th class="table__th">from_name</th>
                    <th class="table__th">from_type</th>
                    <th class="table__th">from_descr</th>
                    <th class="table__th">from_is_subclass</th>
                    <th class="table__th">to_id</th>
                    <th class="table__th">to_name</th>
                    <th class="table__th">to_type</th>
                    <th class="table__th">to_descr</th>
                    <th class="table__th">to_is_pk</th>
                    <th class="table__th">to_is_mandatory</th>
                </tr>
            </thead>
            <tbody class="table__body">
                @foreach ($attrs as $row)
                    <tr class="table__tr table__tr--body">
                        <td class="table__td">{{ $row->class_id }}</td>
                        <td class="table__td">{{ $row->subclass_id }}</td>
                        <td class="table__td">{{ $row->subclass_ord }}</td>
                        <td class="table__td">{{ $row->from_ord }}</td>
                        <td class="table__td">{{ $row->to_ord }}</td>
                        <td class="table__td">{{ $row->row_ord }}</td>
                        <td class="table__td">{{ $row->from_id }}</td>
                        <td class="table__td">{{ $row->from_name }}</td>
                        <td class="table__td">{{ $row->from_type }}</td>
                        <td class="table__td">{{ $row->from_descr }}</td>
                        <td class="table__td">{{ $row->from_is_subclass }}</td>
                        <td class="table__td">{{ $row->to_id }}</td>
                        <td class="table__td">{{ $row->to_name }}</td>
                        <td class="table__td">{{ $row->to_type }}</td>
                        <td class="table__td">{{ $row->to_descr }}</td>
                        <td class="table__td">{{ $row->to_is_pk }}</td>
                        <td class="table__td">{{ $row->to_is_mandatory }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
