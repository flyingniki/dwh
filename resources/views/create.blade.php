@extends('layouts.layout')

<section class="popup popup__create visually-hidden">
    <div class="popup__wrapper">
        <h2 class="popup__title">Редактирование атрибута</h2>
        <form class="form popup__form" action="{{ route('update.attr') }}" method="post">
            @csrf
            <input type="hidden" name="cr_src_attr_id_new" id="cr_src_attr_id_new">
            <input type="hidden" name="cr_dwh_attr_id_new" id="cr_dwh_attr_id_new">
            <h3 class="form__caption">Источник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">src_name</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_name_new" id="cr_src_name_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_type</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_type_new" id="cr_src_type_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_descr</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_descr_new" id="cr_src_descr_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_comments</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_comments_new" id="cr_src_comments_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_sample_value</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_sample_value_new"
                            id="cr_src_sample_value_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_store_in_dwh</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_src_store_in_dwh_new"
                            id="cr_src_store_in_dwh_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_subclass_id</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_subclass_id_new" id="cr_src_subclass_id_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_ref_to</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_ref_to_new" id="cr_src_ref_to_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_is_drop</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_src_is_drop_new" id="cr_src_is_drop_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_is_system</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_src_is_system_new" id="cr_src_is_system_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_fk_class</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_fk_class_new" id="cr_src_fk_class_new">
                    </td>
                </tr>
            </table>
            <h3 class="form__caption">Приемник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">dwh_name</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_dwh_name_new" id="cr_dwh_name_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_type</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_dwh_type_new" id="cr_dwh_type_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_descr</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_dwh_descr_new" id="cr_dwh_descr_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_pk</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_pk_new" id="cr_dwh_is_pk_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_mandatory</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_mandatory_new"
                            id="cr_dwh_is_mandatory_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_sample_value</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_dwh_sample_value_new"
                            id="cr_dwh_sample_value_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_drop</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_drop_new" id="cr_dwh_is_drop_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_system</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_system_new"
                            id="cr_dwh_is_system_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_auto</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_auto_new" id="cr_dwh_is_auto_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_unique</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_unique_new"
                            id="cr_dwh_is_unique_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_indexed</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_indexed_new"
                            id="cr_dwh_is_indexed_new">
                    </td>
                </tr>
            </table>
            <button class="btn form__update" type="submit">Изменить</button>
        </form>
        <button class="popup__toggle"><span class="visually-hidden">Закрыть форму</span></button>
    </div>
</section>
