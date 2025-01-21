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
    <div class="container">
        <section class="filters">
            <h2 class="filters__title">Изменить аттрибут</h2>
            <form class="filters__form" action="{{ route('update.attr', request('class')) }}">
                @csrf
                @method('patch')
                <input class="filters__input" type="text" name="name" value="{{ $requestData['name'] ?? '' }}"
                    placeholder="Название">
                <input class="filters__input" type="text" name="direct" value="{{ $requestData['direct'] ?? '' }}"
                    placeholder="Направление">
                <input class="filters__input" type="text" name="source" value="{{ $requestData['source'] ?? '' }}"
                    placeholder="Источник">
                <input class="filters__input" type="text" name="description"
                    value="{{ $requestData['description'] ?? '' }}" placeholder="Описание">
                <button class="filters__submit" type="submit">Изменить</button>
            </form>
        </section>
    </div>
</body>

</html>
