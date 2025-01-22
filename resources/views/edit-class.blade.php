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
        <section class="fields">
            <h2 class="fields__title">Изменить свойства класса {{ $metaClassesView->data_class_id }}:
                {{ $metaClassesView->data_class_name }}</h2>
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
    </div>
</body>

</html>
