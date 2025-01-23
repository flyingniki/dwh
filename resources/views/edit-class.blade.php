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
            <h1 class="fields__title">Форма редактирования класса {{ $metaClassesView->class_id }}:
                {{ $metaClassesView->name }}</h1>
        </div>
        <form class="fields__form" action="{{ route('update.class', $metaClassesView) }}" method="post">
            @csrf
            @method('patch')
            <div class="fields__item">
                <label class="fields__label" for="name">Название</label>
                <input class="fields__input" type="text" name="name" id="name"
                    value="{{ $metaClassesView->name ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="in_out">Направление</label>
                <input class="fields__input" type="text" name="in_out" id="in_out"
                    value="{{ $metaClassesView->in_out ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="source">Источник</label>
                <input class="fields__input" type="text" name="source" id="source"
                    value="{{ $metaClassesView->source ?? '' }}">
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
