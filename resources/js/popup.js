document.addEventListener("DOMContentLoaded", () => {
  const popup = document.querySelector(".popup");
  const closePopup = document.querySelector(".popup__toggle");
  const formCreate = document.querySelector(".form--create");
  const formUpdate = document.querySelector(".form--update");
  const links = document.querySelectorAll(".table__link--btn");
  const info = document.querySelector(".info");
  const infoTitle = document.querySelector(".info__title");
  const okInfo = document.querySelector(".info__close");
  const createAttr = document.querySelector(".result__create");
  const submitCreate = document.querySelector(".form__submit--create");
  const submitUpdate = document.querySelector(".form__submit--update");

  const srcName = document.querySelector("#src_name");
  const srcType = document.querySelector("#src_type");
  const srcDescr = document.querySelector("#src_descr");
  const srcComments = document.querySelector("#src_comments");
  const srcSampleValue = document.querySelector("#src_sample_value");
  const srcStoreInDwh = document.querySelector("#src_store_in_dwh");
  const srcSubclassId = document.querySelector("#src_subclass_id");
  const srcIsDrop = document.querySelector("#src_is_drop");
  const srcIsSystem = document.querySelector("#src_is_system");
  const srcFkClass = document.querySelector("#src_fk_class");

  const srcAttrIdNew = document.querySelector("#src_attr_id_new");
  const srcNameNew = document.querySelector("#src_name_new");
  const srcTypeNew = document.querySelector("#src_type_new");
  const srcDescrNew = document.querySelector("#src_descr_new");
  const srcCommentsNew = document.querySelector("#src_comments_new");
  const srcSampleValueNew = document.querySelector("#src_sample_value_new");
  const srcStoreInDwhNew = document.querySelector("#src_store_in_dwh_new");
  const srcSubclassIdNew = document.querySelector("#src_subclass_id_new");
  const srcIsDropNew = document.querySelector("#src_is_drop_new");
  const srcIsSystemNew = document.querySelector("#src_is_system_new");
  const srcFkClassNew = document.querySelector("#src_fk_class_new");

  const dwhName = document.querySelector("#dwh_name");
  const dwhType = document.querySelector("#dwh_type");
  const dwhDescr = document.querySelector("#dwh_descr");
  const dwhIsPk = document.querySelector("#dwh_is_pk");
  const dwhIsMandatory = document.querySelector("#dwh_is_mandatory");
  const dwhSampleValue = document.querySelector("#dwh_sample_value");
  const dwhIsDrop = document.querySelector("#dwh_is_drop");
  const dwhIsSystem = document.querySelector("#dwh_is_system");
  const dwhIsAuto = document.querySelector("#dwh_is_auto");
  const dwhIsUnique = document.querySelector("#dwh_is_unique");
  const dwhIsIndexed = document.querySelector("#dwh_is_indexed");

  const dwhAttrIdNew = document.querySelector("#dwh_attr_id_new");
  const dwhNameNew = document.querySelector("#dwh_name_new");
  const dwhTypeNew = document.querySelector("#dwh_type_new");
  const dwhDescrNew = document.querySelector("#dwh_descr_new");
  const dwhIsPkNew = document.querySelector("#dwh_is_pk_new");
  const dwhIsMandatoryNew = document.querySelector("#dwh_is_mandatory_new");
  const dwhSampleValueNew = document.querySelector("#dwh_sample_value_new");
  const dwhIsDropNew = document.querySelector("#dwh_is_drop_new");
  const dwhIsSystemNew = document.querySelector("#dwh_is_system_new");
  const dwhIsAutoNew = document.querySelector("#dwh_is_auto_new");
  const dwhIsUniqueNew = document.querySelector("#dwh_is_unique_new");
  const dwhIsIndexedNew = document.querySelector("#dwh_is_indexed_new");

  const crSrcNameNew = document.querySelector("#cr_src_name_new");
  const crSrcType = document.querySelector("#cr_src_type");
  const crSrcDescr = document.querySelector("#cr_src_descr");
  const crSrcComments = document.querySelector("#cr_src_comments");
  const crSrcSampleValue = document.querySelector("#cr_src_sample_value");
  const crSrcStoreInDwh = document.querySelector("#cr_src_store_in_dwh");
  const crSrcSubclassId = document.querySelector("#cr_src_subclass_id");
  const crSrcIsDrop = document.querySelector("#cr_src_is_drop");
  const crSrcIsSystem = document.querySelector("#cr_src_is_system");
  const crSrcFkClass = document.querySelector("#cr_src_fk_class");

  const crDwhName = document.querySelector("#cr_dwh_name");
  const crDwhType = document.querySelector("#cr_dwh_type");
  const crDwhDescr = document.querySelector("#cr_dwh_descr");
  const crDwhIsPk = document.querySelector("#cr_dwh_is_pk");
  const crDwhIsMandatory = document.querySelector("#cr_dwh_is_mandatory");
  const crDwhSampleValue = document.querySelector("#cr_dwh_sample_value");
  const crDwhIsDrop = document.querySelector("#cr_dwh_is_drop");
  const crDwhIsSystem = document.querySelector("#cr_dwh_is_system");
  const crDwhIsAuto = document.querySelector("#cr_dwh_is_auto");
  const crDwhIsUnique = document.querySelector("#cr_dwh_is_unique");
  const crDwhIsIndexed = document.querySelector("#cr_dwh_is_indexed");

  createAttr.addEventListener("click", () => {
    popup.classList.remove("visually-hidden");
    formUpdate.classList.add("visually-hidden");
    formCreate.classList.remove("visually-hidden");
  });

  submitCreate.addEventListener("click", (e) => {
    e.preventDefault();
    axios
      .post("/attrs/create", {
        class_id: createAttr.dataset.classId,

        src_name_new: crSrcNameNew.value,
        src_type: crSrcType.value,
        src_descr: crSrcDescr.value,
        src_comments: crSrcComments.value,
        src_sample_value: crSrcSampleValue.value,
        src_store_in_dwh: crSrcStoreInDwh.checked,
        src_subclass_id: crSrcSubclassId.value,
        src_is_drop: crSrcIsDrop.checked,
        src_is_system: crSrcIsSystem.checked,
        src_fk_class: crSrcFkClass.value,

        dwh_name: crDwhName.value,
        dwh_type: crDwhType.value,
        dwh_descr: crDwhDescr.value,
        dwh_is_pk: crDwhIsPk.checked,
        dwh_is_mandatory: crDwhIsMandatory.checked,
        dwh_sample_value: crDwhSampleValue.value,
        dwh_is_drop: crDwhIsDrop.checked,
        dwh_is_system: crDwhIsSystem.checked,
        dwh_is_auto: crDwhIsAuto.checked,
        dwh_is_unique: crDwhIsUnique.checked,
        dwh_is_indexed: crDwhIsIndexed.checked,
      })
      .then(function (response) {
        console.log("create response", response);
        popup.classList.add("visually-hidden");
        formCreate.classList.add("visually-hidden");
        info.classList.remove("visually-hidden");
        infoTitle.textContent = "Аттрибут создан";
      })
      .catch(function (error) {
        console.log("create error", error);
        popup.classList.add("visually-hidden");
        formCreate.classList.add("visually-hidden");
        info.classList.remove("visually-hidden");
        infoTitle.textContent = error.response.data.message;
      });
  });

  links.forEach((link) => {
    link.addEventListener("click", () => {
      let arParam = [link.dataset.srcId, link.dataset.dwhId];
      let [srcId, dwhId] = arParam;
      axios
        .post("/attrs", {
          srcId: srcId,
          dwhId: dwhId,
        })
        .then(function (response) {
          console.log("response", response);
          if (response.data.length === 1) {
            let data = response.data[0];
            console.log("data", data);

            srcName.textContent = data.src_name;
            srcType.textContent = data.src_type;
            srcDescr.textContent = data.src_descr;
            srcComments.textContent = data.src_comments;
            srcSampleValue.textContent = data.src_sample_value;
            srcStoreInDwh.checked = data.src_store_in_dwh;
            if (data.src_store_in_dwh === null) {
              srcStoreInDwh.classList.add("table__checkbox--disabled");
            }
            srcSubclassId.textContent = data.src_subclass_id;
            srcIsDrop.checked = data.src_is_drop;
            if (data.src_is_drop === null) {
              srcIsDrop.classList.add("table__checkbox--disabled");
            }
            srcIsSystem.checked = data.src_is_system;
            if (data.src_is_system === null) {
              srcIsSystem.classList.add("table__checkbox--disabled");
            }
            srcFkClass.textContent = data.src_fk_class;

            srcAttrIdNew.value = data.src_attr_id_new;
            srcNameNew.value = data.src_name_new;
            srcTypeNew.value = data.src_type_new;
            srcDescrNew.value = data.src_descr_new;
            srcCommentsNew.value = data.src_comments_new;
            srcSampleValueNew.value = data.src_sample_value_new;
            srcStoreInDwhNew.checked = data.src_store_in_dwh_new;
            srcSubclassIdNew.value = data.src_subclass_id_new;
            srcIsDropNew.checked = data.src_is_drop_new;
            srcIsSystemNew.checked = data.src_is_system_new;
            srcFkClassNew.value = data.src_fk_class_new;

            dwhName.textContent = data.dwh_name;
            dwhType.textContent = data.dwh_type;
            dwhDescr.textContent = data.dwh_descr;
            dwhIsPk.checked = data.dwh_is_pk;
            if (data.dwh_is_pk === null) {
              dwhIsPk.classList.add("table__checkbox--disabled");
            }
            dwhIsMandatory.checked = data.dwh_is_mandatory;
            if (data.dwh_is_mandatory === null) {
              dwhIsMandatory.classList.add("table__checkbox--disabled");
            }
            dwhSampleValue.textContent = data.dwh_sample_value;
            dwhIsDrop.checked = data.dwh_is_drop;
            if (data.dwh_is_drop === null) {
              dwhIsDrop.classList.add("table__checkbox--disabled");
            }
            dwhIsSystem.checked = data.dwh_is_system;
            if (data.dwh_is_system === null) {
              dwhIsSystem.classList.add("table__checkbox--disabled");
            }
            dwhIsAuto.checked = data.dwh_is_auto;
            if (data.dwh_is_auto === null) {
              dwhIsAuto.classList.add("table__checkbox--disabled");
            }
            dwhIsUnique.checked = data.dwh_is_unique;
            if (data.dwh_is_unique === null) {
              dwhIsUnique.classList.add("table__checkbox--disabled");
            }
            dwhIsIndexed.checked = data.dwh_is_indexed;
            if (data.dwh_is_indexed === null) {
              dwhIsIndexed.classList.add("table__checkbox--disabled");
            }

            dwhAttrIdNew.value = data.dwh_attr_id_new;
            dwhNameNew.value = data.dwh_name_new;
            dwhTypeNew.value = data.dwh_type_new;
            dwhDescrNew.value = data.dwh_descr_new;
            dwhIsPkNew.checked = data.dwh_is_pk_new;
            dwhIsMandatoryNew.checked = data.dwh_is_mandatory_new;
            dwhSampleValueNew.value = data.dwh_sample_value_new;
            dwhIsDropNew.checked = data.dwh_is_drop_new;
            dwhIsSystemNew.checked = data.dwh_is_system_new;
            dwhIsAutoNew.checked = data.dwh_is_auto_new;
            dwhIsUniqueNew.checked = data.dwh_is_unique_new;
            dwhIsIndexedNew.checked = data.dwh_is_indexed_new;

            popup.classList.remove("visually-hidden");
            formCreate.classList.add("visually-hidden");
            formUpdate.classList.remove("visually-hidden");
          } else {
            let errMsg = "Data has several values";
          }
        })
        .catch(function (error) {
          console.log("error", error);
        });
    });
  });

  submitUpdate.addEventListener("click", (e) => {
    e.preventDefault();
    axios
      .patch("/attrs/update", {
        src_attr_id_new: srcAttrIdNew.value,
        src_name_new: srcNameNew.value,
        src_type_new: srcTypeNew.value,
        src_descr_new: srcDescrNew.value,
        src_comments_new: srcCommentsNew.value,
        src_sample_value_new: srcSampleValueNew.value,
        src_store_in_dwh_new: srcStoreInDwhNew.checked,
        src_subclass_id_new: srcSubclassIdNew.value,
        src_is_drop_new: srcIsDropNew.checked,
        src_is_system_new: srcIsSystemNew.checked,
        src_fk_class_new: srcFkClassNew.value,

        dwh_attr_id_new: dwhAttrIdNew.value,
        dwh_name_new: dwhNameNew.value,
        dwh_type_new: dwhTypeNew.value,
        dwh_descr_new: dwhDescrNew.value,
        dwh_is_pk_new: dwhIsPkNew.checked,
        dwh_is_mandatory_new: dwhIsMandatoryNew.checked,
        dwh_sample_value_new: dwhSampleValueNew.value,
        dwh_is_drop_new: dwhIsDropNew.checked,
        dwh_is_system_new: dwhIsSystemNew.checked,
        dwh_is_auto_new: dwhIsAutoNew.checked,
        dwh_is_unique_new: dwhIsUniqueNew.checked,
        dwh_is_indexed_new: dwhIsIndexedNew.checked,
      })
      .then(function (response) {
        console.log("update response", response);
        popup.classList.add("visually-hidden");
        formUpdate.classList.add("visually-hidden");
        info.classList.remove("visually-hidden");
        infoTitle.textContent = "Данные успешно обновлены";
      })
      .catch(function (error) {
        console.log("update error", error);
        popup.classList.add("visually-hidden");
        formUpdate.classList.add("visually-hidden");
        info.classList.remove("visually-hidden");
        infoTitle.textContent = error.response.data.message;
      });
  });

  closePopup.addEventListener("click", () => {
    popup.classList.add("visually-hidden");
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" || e.key === "Esc") {
      popup.classList.add("visually-hidden");
      info.classList.add("visually-hidden");
    }
  });

  popup.addEventListener("click", (e) => {
    if (e.target.classList.contains("popup")) {
      popup.classList.add("visually-hidden");
    }
  });

  okInfo.addEventListener("click", () => {
    info.classList.add("visually-hidden");
  });

  info.addEventListener("click", (e) => {
    if (e.target.classList.contains("info")) {
      info.classList.add("visually-hidden");
    }
  });
});
