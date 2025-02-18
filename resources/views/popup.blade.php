@extends('layouts.layout')

<section class="popup visually-hidden">
    <div class="popup__wrapper">
        <form class="form form--update visually-hidden" action="{{ route('update.attr') }}" method="post">
            @csrf
            @method('patch')
            <h2 class="popup__title">Редактирование атрибута</h2>
            <input type="hidden" name="src_attr_id_new" id="src_attr_id_new">
            <input type="hidden" name="dwh_attr_id_new" id="dwh_attr_id_new">
            <h3 class="form__caption">Источник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">src_name</td>
                    <td class="table__td" id="src_name"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_name_new" id="src_name_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_type</td>
                    <td class="table__td" id="src_type"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_type_new" id="src_type_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_descr</td>
                    <td class="table__td" id="src_descr"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_descr_new" id="src_descr_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_comments</td>
                    <td class="table__td" id="src_comments"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_comments_new" id="src_comments_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_sample_value</td>
                    <td class="table__td" id="src_sample_value"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_sample_value_new"
                            id="src_sample_value_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_store_in_dwh</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="src_store_in_dwh" id="src_store_in_dwh"
                            disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="src_store_in_dwh_new"
                            id="src_store_in_dwh_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_subclass_id</td>
                    <td class="table__td" id="src_subclass_id"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_subclass_id_new" id="src_subclass_id_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_ref_to</td>
                    <td class="table__td" id="src_ref_to"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_ref_to_new" id="src_ref_to_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_is_drop</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="src_is_drop" id="src_is_drop" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="src_is_drop_new" id="src_is_drop_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_is_system</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="src_is_system" id="src_is_system"
                            disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="src_is_system_new"
                            id="src_is_system_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_fk_class</td>
                    <td class="table__td" id="src_fk_class"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="src_fk_class_new" id="src_fk_class_new">
                    </td>
                </tr>
            </table>
            <h3 class="form__caption">Приемник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">dwh_name</td>
                    <td class="table__td" id="dwh_name"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="dwh_name_new" id="dwh_name_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_type</td>
                    <td class="table__td" id="dwh_type"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="dwh_type_new" id="dwh_type_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_descr</td>
                    <td class="table__td" id="dwh_descr"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="dwh_descr_new" id="dwh_descr_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_pk</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_pk" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_pk_new" id="dwh_is_pk_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_mandatory</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_mandatory" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_mandatory_new"
                            id="dwh_is_mandatory_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_sample_value</td>
                    <td class="table__td" id="dwh_sample_value"></td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="dwh_sample_value_new"
                            id="dwh_sample_value_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_drop</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_drop" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_drop_new" id="dwh_is_drop_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_system</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_system" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_system_new"
                            id="dwh_is_system_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_auto</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_auto" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_auto_new" id="dwh_is_auto_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_unique</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_unique" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_unique_new"
                            id="dwh_is_unique_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">dwh_is_indexed</td>
                    <td class="table__td">
                        <input class="table__checkbox" id="dwh_is_indexed" type="checkbox" disabled>
                    </td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="dwh_is_indexed_new"
                            id="dwh_is_indexed_new">
                    </td>
                </tr>
            </table>
            <button class="btn form__submit form__submit--update" type="submit">Изменить</button>
        </form>
        <form class="form form--create visually-hidden" action="{{ route('create.attr') }}" method="post">
            @csrf
            <h2 class="popup__title">Добавление атрибута</h2>
            <h3 class="form__caption">Источник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">src_attr_id</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_attr_id_new"
                            id="cr_src_attr_id_new">
                    </td>
                </tr>
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
                        <input class="table__input" type="text" name="cr_src_comments_new"
                            id="cr_src_comments_new">
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
                        <input class="table__input" type="text" name="cr_src_subclass_id_new"
                            id="cr_src_subclass_id_new">
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
                        <input class="table__checkbox" type="checkbox" name="cr_src_is_drop_new"
                            id="cr_src_is_drop_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_is_system</td>
                    <td class="table__td">
                        <input class="table__checkbox" type="checkbox" name="cr_src_is_system_new"
                            id="cr_src_is_system_new">
                    </td>
                </tr>
                <tr class="table__tr">
                    <td class="table__td">src_fk_class</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_src_fk_class_new"
                            id="cr_src_fk_class_new">
                    </td>
                </tr>
            </table>
            <h3 class="form__caption">Приемник данных</h3>
            <table class="table form__table">
                <tr class="table__tr">
                    <td class="table__td">dwh_attr_id</td>
                    <td class="table__td">
                        <input class="table__input" type="text" name="cr_dwh_attr_id_new"
                            id="cr_dwh_attr_id_new">
                    </td>
                </tr>
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
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_pk_new"
                            id="cr_dwh_is_pk_new">
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
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_drop_new"
                            id="cr_dwh_is_drop_new">
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
                        <input class="table__checkbox" type="checkbox" name="cr_dwh_is_auto_new"
                            id="cr_dwh_is_auto_new">
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
            <button class="btn form__submit form__submit--create" type="submit">Добавить</button>
        </form>
        <button class="popup__toggle"><span class="visually-hidden">Закрыть форму</span></button>
    </div>
</section>
