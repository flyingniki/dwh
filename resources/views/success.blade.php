@extends('layouts.layout')

<section class="success visually-hidden">
    <div class="success__wrapper">
        <img class="success__img" src="{{ Vite::asset('resources/img/success.svg') }}" alt="Success">
        <h2 class="success__title">Данные успешно изменены</h2>
        <button class="btn success__close btn--orange" type="button">Ок</button>
        <button class="btn success__toggle"><span class="visually-hidden">Закрыть форму</span></button>
    </div>
</section>
