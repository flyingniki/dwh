<form class="form form--create visually-hidden" action="{{ route('create.attr') }}" method="post">
    @csrf
    <h2 class="popup__title">Добавление атрибута</h2>
    <h3 class="form__caption">Источник данных</h3>
    <table class="table form__table">
        <tr class="table__tr">
            <td class="table__td">Имя аттрибута</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_src_name_new" id="cr_src_name_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Тип данных</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_src_type" id="cr_src_type">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Описание</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_src_descr" id="cr_src_descr">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Комментарии</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_src_comments" id="cr_src_comments">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Пример значения</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_src_sample_value" id="cr_src_sample_value">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Сохранять в КХД</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_src_store_in_dwh"
                    id="cr_src_store_in_dwh">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Подкласс</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_src_subclass_id" id="cr_src_subclass_id">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Удалить</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_src_is_drop" id="cr_src_is_drop">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Системный</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_src_is_system" id="cr_src_is_system">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Ссылка на класс</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_src_fk_class" id="cr_src_fk_class">
            </td>
        </tr>
    </table>
    <h3 class="form__caption">Получатель данных</h3>
    <table class="table form__table">
        <tr class="table__tr">
            <td class="table__td">Имя аттрибута</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_dwh_name" id="cr_dwh_name">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Тип данных</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_dwh_type" id="cr_dwh_type">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Описание</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_dwh_descr" id="cr_dwh_descr">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">PK</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_dwh_is_pk" id="cr_dwh_is_pk">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Mandatory</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_dwh_is_mandatory"
                    id="cr_dwh_is_mandatory">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Пример значения</td>
            <td class="table__td">
                <input class="table__input" type="text" name="cr_dwh_sample_value"
                    id="cr_dwh_sample_value">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Удалить</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_dwh_is_drop" id="cr_dwh_is_drop">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Системный</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_dwh_is_system"
                    id="cr_dwh_is_system">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Auto->ID</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_dwh_is_auto" id="cr_dwh_is_auto">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Уникальное</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_dwh_is_unique"
                    id="cr_dwh_is_unique">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Индексировать</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="cr_dwh_is_indexed"
                    id="cr_dwh_is_indexed">
            </td>
        </tr>
    </table>
    <button class="btn form__submit form__submit--create" type="submit">Сохранить</button>
</form>
