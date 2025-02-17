// document.addEventListener("DOMContentLoaded", () => {
//   const popup = document.querySelector(".popup");
//   const closePopup = document.querySelector(".popup__toggle");
//   const success = document.querySelector(".success");
//   const okSuccess = document.querySelector(".success__close");
//   const addAttr = document.querySelector(".result__create");
//   const formCreate = document.querySelector(".popup__create");

//   const srcAttrIdNew = document.querySelector("#src_attr_id_new");
//   const dwhAttrIdNew = document.querySelector("#dwh_attr_id_new");

//   const srcNameNew = document.querySelector("#src_name_new");
//   const srcTypeNew = document.querySelector("#src_type_new");
//   const srcDescrNew = document.querySelector("#src_descr_new");
//   const srcCommentsNew = document.querySelector("#src_comments_new");
//   const srcSampleValueNew = document.querySelector("#src_sample_value_new");
//   const srcStoreInDwhNew = document.querySelector("#src_store_in_dwh_new");
//   const srcSubclassIdNew = document.querySelector("#src_subclass_id_new");
//   const srcRefToNew = document.querySelector("#src_ref_to_new");
//   const srcIsDropNew = document.querySelector("#src_is_drop_new");
//   const srcIsSystemNew = document.querySelector("#src_is_system_new");
//   const srcFkClassNew = document.querySelector("#src_fk_class_new");

//   const dwhNameNew = document.querySelector("#dwh_name_new");
//   const dwhTypeNew = document.querySelector("#dwh_type_new");
//   const dwhDescrNew = document.querySelector("#dwh_descr_new");
//   const dwhIsPkNew = document.querySelector("#dwh_is_pk_new");
//   const dwhIsMandatoryNew = document.querySelector("#dwh_is_mandatory_new");
//   const dwhSampleValueNew = document.querySelector("#dwh_sample_value_new");
//   const dwhIsDropNew = document.querySelector("#dwh_is_drop_new");
//   const dwhIsSystemNew = document.querySelector("#dwh_is_system_new");
//   const dwhIsAutoNew = document.querySelector("#dwh_is_auto_new");
//   const dwhIsUniqueNew = document.querySelector("#dwh_is_unique_new");
//   const dwhIsIndexedNew = document.querySelector("#dwh_is_indexed_new");

//   formCreate.addEventListener("click", (e) => {
//     e.preventDefault();
//     axios
//       .patch("/attrs/create", {
//         src_attr_id_new: srcAttrIdNew.value,
//         dwh_attr_id_new: dwhAttrIdNew.value,

//         src_name_new: srcNameNew.value,
//         src_type_new: srcTypeNew.value,
//         src_descr_new: srcDescrNew.value,
//         src_comments_new: srcCommentsNew.value,
//         src_sample_value_new: srcSampleValueNew.value,
//         src_store_in_dwh_new: srcStoreInDwhNew.checked,
//         src_subclass_id_new: srcSubclassIdNew.value,
//         src_ref_to_new: srcRefToNew.value,
//         src_is_drop_new: srcIsDropNew.checked,
//         src_is_system_new: srcIsSystemNew.checked,
//         src_fk_class_new: srcFkClassNew.value,

//         dwh_name_new: dwhNameNew.value,
//         dwh_type_new: dwhTypeNew.value,
//         dwh_descr_new: dwhDescrNew.value,
//         dwh_is_pk_new: dwhIsPkNew.checked,
//         dwh_is_mandatory_new: dwhIsMandatoryNew.checked,
//         dwh_sample_value_new: dwhSampleValueNew.value,
//         dwh_is_drop_new: dwhIsDropNew.checked,
//         dwh_is_system_new: dwhIsSystemNew.checked,
//         dwh_is_auto_new: dwhIsAutoNew.checked,
//         dwh_is_unique_new: dwhIsUniqueNew.checked,
//         dwh_is_indexed_new: dwhIsIndexedNew.checked,
//       })
//       .then(function (response) {
//         console.log(response);
//         popup.classList.add("visually-hidden");
//         success.classList.remove("visually-hidden");
//       })
//       .catch(function (error) {
//         console.log(error);
//       });
//   });

//   addAttr.addEventListener("click", () => {
//     formCreate.classList.toggle("visually-hidden");
//   });

//   closePopup.addEventListener("click", () => {
//     popup.classList.add("visually-hidden");
//   });

//   document.addEventListener("keydown", (e) => {
//     if (e.key === "Escape" || e.key === "Esc") {
//       popup.classList.add("visually-hidden");
//       success.classList.add("visually-hidden");
//     }
//   });

//   popup.addEventListener("click", (e) => {
//     if (e.target.classList.contains("popup")) {
//       popup.classList.add("visually-hidden");
//     }
//   });

//   okSuccess.addEventListener("click", () => {
//     success.classList.add("visually-hidden");
//   });

//   success.addEventListener("click", (e) => {
//     if (e.target.classList.contains("success")) {
//       success.classList.add("visually-hidden");
//     }
//   });
// });
