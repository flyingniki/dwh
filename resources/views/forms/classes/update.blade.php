<form class="fields__form" method="post">
    @csrf
    @method('patch')
    <input type="hidden" name="id" id="id" value="{{ $classesView->class_id }}">
    <div class="fields__container">
        <div class="fields__col">
            <div class="fields__item">
                <label class="fields__label" for="name">Название</label>
                <input class="fields__input" type="text" name="name" id="name"
                    value="{{ $classesView->name ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="source">Источник</label>
                <select class="fields__input" name="source" id="source">
                    @foreach ($sources as $source)
                        <option value="{{ $source->source }}" @selected($classesView->source === $source->source)>{{ $source->source }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="fields__item">
                <label class="fields__label" for="description">Описание</label>
                <textarea class="fields__input fields__input--textarea" name="description" id="description">{{ $classesView->description ?? '' }}</textarea>
            </div>
        </div>
        <div class="fields__col">
            <div class="fields__item">
                <label class="fields__label" for="stage_table">DWH(stage)</label>
                <input class="fields__input" type="text" name="stage_table" id="stage_table"
                    value="{{ $classesView->stage_table ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="core_table">DWH(core)</label>
                <input class="fields__input" type="text" name="core_table" id="core_table"
                    value="{{ $classesView->core_table ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="subsystem">Subsystem</label>
                <input class="fields__input" type="text" name="subsystem" id="subsystem"
                    value="{{ $classesView->subsystem ?? '' }}">
            </div>
            <div class="fields__item">
                <label class="fields__label" for="wiki_link">Wiki</label>
                <input class="fields__input" type="text" name="wiki_link" id="wiki_link"
                    value="{{ $classesView->wiki_link ?? '' }}">
            </div>
        </div>
    </div>
    <button class="btn fields__submit" id="class_update" type="submit">Изменить</button>
</form>
