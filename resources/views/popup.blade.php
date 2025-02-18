@extends('layouts.layout')

<section class="popup visually-hidden">
    <div class="popup__wrapper">
        @include('forms.attributes.create')
        @include('forms.attributes.update')
        <button class="popup__toggle"><span class="visually-hidden">Закрыть форму</span></button>
    </div>
</section>
