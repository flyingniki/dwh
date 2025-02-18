@extends('layouts.layout')

@vite(['resources/js/class.js'])
@vite(['resources/js/popup.js'])

@section('content')
    <section class="fields">
        <div class="fields__header">
            <a class="fields__link" href="{{ route('show.classes') }}">
                <img class="fields__img" src="{{ Vite::asset('resources/img/back.png') }}" alt="Back">
            </a>
            <h1 class="fields__title">Класс {{ $classesView->class_id }}:
                {{ $classesView->name }}</h1>
        </div>
        @include('forms.classes.update')
    </section>
    <section class="result">
        <h1 class="result__title">Аттрибуты класса</h1>
        <table class="table result__table">
            <thead class="table__head">
                <tr class="table__tr">
                    <th class="table__th" title="src_name_new">Новый</th>
                    <th class="table__th" title="src_name">Аттрибут</th>
                    <th class="table__th" title="src_type">Тип</th>
                    <th class="table__th" title="src_descr">Описание</th>
                    <th class="table__th" title="src_comments">Комментарии</th>
                    <th class="table__th" title="dwh_name">Attr</th>
                    <th class="table__th" title="dwh_type">Type</th>
                    <th class="table__th" title="dwh_descr">Descr</th>
                    <th class="table__th" title="dwh_is_pk">PK</th>
                    <th class="table__th" title="dwh_is_mandatory">NN</th>
                </tr>
            </thead>
            <tbody class="table__body">
                @foreach ($classAttrs as $row)
                    <tr class="table__tr table__tr--body">
                        <td class="table__td">
                            <a class="table__link table__link--btn" data-class-id={{ $classesView->class_id }}
                                data-src-id={{ $row->src_attr_id_new }}
                                data-dwh-id={{ $row->dwh_attr_id_new }}>{{ $row->src_name_new }}</a>
                        </td>
                        <td class="table__td">{{ $row->src_name }}</td>
                        <td class="table__td">{{ $row->src_type }}</td>
                        <td class="table__td">{{ $row->src_descr }}</td>
                        <td class="table__td">{{ $row->src_comments }}</td>
                        <td class="table__td table__td--filled">{{ $row->dwh_name }}</td>
                        <td class="table__td table__td--filled">{{ $row->dwh_type }}</td>
                        <td class="table__td table__td--filled">{{ $row->dwh_descr }}</td>
                        <td class="table__td table__td--filled">
                            <input class="table__checkbox" type="checkbox" @checked($row->dwh_is_pk === true) disabled>
                        </td>
                        <td class="table__td table__td--filled">
                            <input class="table__checkbox" type="checkbox" @checked($row->dwh_is_mandatory === true) disabled>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn result__create" data-class-id="{{ $classesView->class_id }}">Добавить аттрибут</button>
    </section>
    @include('popup')
    @include('info')
@endsection
