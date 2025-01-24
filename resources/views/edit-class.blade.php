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
                <img class="fields__img" src="{{ Vite::asset('resources/img/back.png') }}" alt="Back">
            </a>
            <h1 class="fields__title">Класс {{ $metaClassesView->class_id }}:
                {{ $metaClassesView->name }}</h1>
        </div>
        <form class="fields__form fields__form--edit" action="{{ route('update.class', $metaClassesView) }}" method="post">
            @csrf
            @method('patch')
            <div class="fields__item">
                <label class="fields__label" for="name">Название</label>
                <input class="fields__input" type="text" name="name" id="name"
                    value="{{ $metaClassesView->name ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="source">Источник</label>
                <select class="fields__input" name="source" id="source">
                    @foreach ($sources as $source)
                        <option value="{{ $source->source }}" @selected($metaClassesView->source === $source->source)>{{ $source->source }}</option>
                    @endforeach
                </select>
            </div>
            <div class="fields__item">
                <label class="fields__label" for="description">Описание</label>
                <textarea class="fields__input fields__input--textarea" name="description" id="description">{{ $metaClassesView->description ?? '' }}</textarea>
            </div>
            <div class="fields__item">
                <label class="fields__label" for="stage_table">DWH(stage)</label>
                <input class="fields__input" type="text" name="stage_table" id="stage_table"
                    value="{{ $metaClassesView->stage_table ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="core_table">DWH(core)</label>
                <input class="fields__input" type="text" name="core_table" id="core_table"
                    value="{{ $metaClassesView->core_table ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="subsystem">Subsystem</label>
                <input class="fields__input" type="text" name="subsystem" id="subsystem"
                    value="{{ $metaClassesView->subsystem ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="wiki_link">Wiki</label>
                <input class="fields__input" type="text" name="wiki_link" id="wiki_link"
                    value="{{ $metaClassesView->wiki_link ?? '' }}">
            </div>
            <button class="fields__submit" type="submit">Изменить</button>
        </form>
    </section>
@endsection
