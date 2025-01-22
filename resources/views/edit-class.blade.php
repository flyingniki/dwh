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
                <img class="fields__img" src="{{ Vite::asset('/resources/img/back.png') }}" alt="Back">
            </a>
            <h1 class="fields__title">Изменить свойства класса {{ $metaClassesView->data_class_id }}:
                {{ $metaClassesView->data_class_name }}</h1>
        </div>
        <form class="fields__form" action="{{ route('update.class', $metaClassesView) }}" method="post">
            @csrf
            @method('patch')
            <div class="fields__item">
                <label class="fields__label" for="data_class_name">Название</label>
                <input class="fields__input" type="text" name="data_class_name" id="data_class_name"
                    value="{{ $metaClassesView->data_class_name ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="data_class_direct">Направление</label>
                <input class="fields__input" type="text" name="data_class_direct" id="data_class_direct"
                    value="{{ $metaClassesView->data_class_direct ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="data_class_source">Источник</label>
                <input class="fields__input" type="text" name="data_class_source" id="data_class_source"
                    value="{{ $metaClassesView->data_class_source ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="description">Описание</label>
                <input class="fields__input" type="text" name="description" id="description"
                    value="{{ $metaClassesView->description ?? '' }}">
            </div>
            <button class="fields__submit" type="submit">Изменить</button>
        </form>
    </section>
@endsection
