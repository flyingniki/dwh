<form class="form form--update visually-hidden" method="post">
    @csrf
    @method('patch')
    <h2 class="popup__title">Редактирование атрибута</h2>
    <input type="hidden" name="class_id" id="class_id">
    <input type="hidden" name="src_attr_id_new" id="src_attr_id_new">
    <input type="hidden" name="dwh_attr_id_new" id="dwh_attr_id_new">
    <h3 class="form__caption">Источник данных</h3>
    <table class="table form__table">
        <tr class="table__tr">
            <td class="table__td">Имя аттрибута</td>
            <td class="table__td" id="src_name"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="src_name_new" id="src_name_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Тип данных</td>
            <td class="table__td" id="src_type"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="src_type_new" id="src_type_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Описание</td>
            <td class="table__td" id="src_descr"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="src_descr_new" id="src_descr_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Комментарии</td>
            <td class="table__td" id="src_comments"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="src_comments_new" id="src_comments_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Пример значения</td>
            <td class="table__td" id="src_sample_value"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="src_sample_value_new" id="src_sample_value_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Сохранять в КХД</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="src_store_in_dwh" id="src_store_in_dwh" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="src_store_in_dwh_new" id="src_store_in_dwh_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Подкласс</td>
            <td class="table__td" id="src_subclass_id"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="src_subclass_id_new" id="src_subclass_id_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Удалить</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="src_is_drop" id="src_is_drop" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="src_is_drop_new" id="src_is_drop_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Системный</td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="src_is_system" id="src_is_system" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="src_is_system_new" id="src_is_system_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Ссылка на класс</td>
            <td class="table__td" id="src_fk_class"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="src_fk_class_new" id="src_fk_class_new">
            </td>
        </tr>
    </table>
    <h3 class="form__caption">Получатель данных</h3>
    <table class="table form__table">
        <tr class="table__tr">
            <td class="table__td">Имя аттрибута</td>
            <td class="table__td" id="dwh_name"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="dwh_name_new" id="dwh_name_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Тип данных</td>
            <td class="table__td" id="dwh_type"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="dwh_type_new" id="dwh_type_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Описание</td>
            <td class="table__td" id="dwh_descr"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="dwh_descr_new" id="dwh_descr_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">PK</td>
            <td class="table__td">
                <input class="table__checkbox" id="dwh_is_pk" type="checkbox" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="dwh_is_pk_new" id="dwh_is_pk_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Mandatory</td>
            <td class="table__td">
                <input class="table__checkbox" id="dwh_is_mandatory" type="checkbox" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="dwh_is_mandatory_new"
                    id="dwh_is_mandatory_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Пример значения</td>
            <td class="table__td" id="dwh_sample_value"></td>
            <td class="table__td">
                <input class="table__input" type="text" name="dwh_sample_value_new" id="dwh_sample_value_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Удалить</td>
            <td class="table__td">
                <input class="table__checkbox" id="dwh_is_drop" type="checkbox" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="dwh_is_drop_new" id="dwh_is_drop_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Системный</td>
            <td class="table__td">
                <input class="table__checkbox" id="dwh_is_system" type="checkbox" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="dwh_is_system_new" id="dwh_is_system_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Auto->ID</td>
            <td class="table__td">
                <input class="table__checkbox" id="dwh_is_auto" type="checkbox" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="dwh_is_auto_new" id="dwh_is_auto_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Уникальное</td>
            <td class="table__td">
                <input class="table__checkbox" id="dwh_is_unique" type="checkbox" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="dwh_is_unique_new" id="dwh_is_unique_new">
            </td>
        </tr>
        <tr class="table__tr">
            <td class="table__td">Индексировать</td>
            <td class="table__td">
                <input class="table__checkbox" id="dwh_is_indexed" type="checkbox" disabled>
            </td>
            <td class="table__td">
                <input class="table__checkbox" type="checkbox" name="dwh_is_indexed_new" id="dwh_is_indexed_new">
            </td>
        </tr>
    </table>
    <button class="btn form__submit form__submit--update" type="submit">Сохранить</button>
</form>
