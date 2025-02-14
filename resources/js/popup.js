document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll(".table__link--btn");
  const popup = document.querySelector(".popup");
  const closePopup = document.querySelector(".popup__toggle");
  const success = document.querySelector(".success");
  const okSuccess = document.querySelector(".success__close");

  // const form = document.querySelector(".popup__form");
  const formSubmit = document.querySelector(".form__submit");

  const srcAttrIdNew = document.querySelector("#src_attr_id_new");
  const dwhAttrIdNew = document.querySelector("#dwh_attr_id_new");

  const srcName = document.querySelector("#src_name");
  const srcType = document.querySelector("#src_type");
  const srcDescr = document.querySelector("#src_descr");
  const srcComments = document.querySelector("#src_comments");
  const srcSampleValue = document.querySelector("#src_sample_value");
  const srcStoreInDwh = document.querySelector("#src_store_in_dwh");
  const srcSubclassId = document.querySelector("#src_subclass_id");
  const srcRefTo = document.querySelector("#src_ref_to");
  const srcIsDrop = document.querySelector("#src_is_drop");
  const srcIsSystem = document.querySelector("#src_is_system");
  const srcFkClass = document.querySelector("#src_fk_class");

  const srcNameNew = document.querySelector("#src_name_new");
  const srcTypeNew = document.querySelector("#src_type_new");
  const srcDescrNew = document.querySelector("#src_descr_new");
  const srcCommentsNew = document.querySelector("#src_comments_new");
  const srcSampleValueNew = document.querySelector("#src_sample_value_new");
  const srcStoreInDwhNew = document.querySelector("#src_store_in_dwh_new");
  const srcSubclassIdNew = document.querySelector("#src_subclass_id_new");
  const srcRefToNew = document.querySelector("#src_ref_to_new");
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
          console.log(response);
          if (response.data.length === 1) {
            let data = response.data[0];
            srcAttrIdNew.value = data.src_attr_id_new;
            dwhAttrIdNew.value = data.dwh_attr_id_new;

            srcName.textContent = data.src_name;
            srcType.textContent = data.src_type;
            srcDescr.textContent = data.src_descr;
            srcComments.textContent = data.src_comments;
            srcSampleValue.textContent = data.src_sample_value;
            srcStoreInDwh.checked = data.src_store_in_dwh;
            srcSubclassId.textContent = data.src_subclass_id;
            srcRefTo.textContent = data.src_ref_to;
            srcIsDrop.checked = data.src_is_drop;
            srcIsSystem.checked = data.src_is_system;
            srcFkClass.textContent = data.src_fk_class;

            srcNameNew.value = data.src_name_new;
            srcTypeNew.value = data.src_type_new;
            srcDescrNew.value = data.src_descr_new;
            srcCommentsNew.value = data.src_comments_new;
            srcSampleValueNew.textContent = data.src_sample_value_new;
            srcStoreInDwhNew.checked = data.src_store_in_dwh_new;
            srcSubclassIdNew.textContent = data.src_subclass_id_new;
            srcRefToNew.textContent = data.src_ref_to_new;
            srcIsDropNew.checked = data.src_is_drop_new;
            srcIsSystemNew.checked = data.src_is_system_new;
            srcFkClassNew.textContent = data.src_fk_class_new;

            dwhName.textContent = data.dwh_name;
            dwhType.textContent = data.dwh_type;
            dwhDescr.textContent = data.dwh_descr;
            dwhIsPk.checked = data.dwh_is_pk;
            dwhIsMandatory.checked = data.dwh_is_mandatory;
            dwhSampleValue.textContent = data.dwh_sample_value;
            dwhIsDrop.checked = data.dwh_is_drop;
            dwhIsSystem.checked = data.dwh_is_system;
            dwhIsAuto.checked = data.dwh_is_auto;
            dwhIsUnique.checked = data.dwh_is_unique;
            dwhIsIndexed.checked = data.dwh_is_indexed;

            dwhNameNew.value = data.dwh_name_new;
            dwhTypeNew.value = data.dwh_type_new;
            dwhDescrNew.value = data.dwh_descr_new;
            dwhIsPkNew.checked = data.dwh_is_pk_new;
            dwhIsMandatoryNew.checked = data.dwh_is_mandatory_new;
            dwhSampleValueNew.textContent = data.dwh_sample_value_new;
            dwhIsDropNew.checked = data.dwh_is_drop_new;
            dwhIsSystemNew.checked = data.dwh_is_system_new;
            dwhIsAutoNew.checked = data.dwh_is_auto_new;
            dwhIsUniqueNew.checked = data.dwh_is_unique_new;
            dwhIsIndexedNew.checked = data.dwh_is_indexed_new;

            popup.classList.remove("visually-hidden");
          } else {
            let errMsg = "Data has several values";
          }
        })
        .catch(function (error) {
          console.log(error);
        });
    });
  });

  formSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    axios
      .patch("/attrs/update", {
        src_attr_id_new: srcAttrIdNew.value,
        dwh_attr_id_new: dwhAttrIdNew.value,

        src_name_new: srcNameNew.value,
        src_type_new: srcTypeNew.value,
        src_descr_new: srcDescrNew.value,
        src_comments_new: srcCommentsNew.value,
        src_sample_value_new: srcSampleValueNew.value,
        src_store_in_dwh_new: srcStoreInDwhNew.checked,
        src_subclass_id_new: srcSubclassIdNew.value,
        src_ref_to_new: srcRefToNew.value,
        src_is_drop_new: srcIsDropNew.checked,
        src_is_system_new: srcIsSystemNew.checked,
        src_fk_class_new: srcFkClassNew.value,

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
        console.log(response);
        popup.classList.add("visually-hidden");
        success.classList.remove("visually-hidden");
      })
      .catch(function (error) {
        console.log(error);
      });
  });

  closePopup.addEventListener("click", () => {
    popup.classList.add("visually-hidden");
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" || e.key === "Esc") {
      popup.classList.add("visually-hidden");
      success.classList.add("visually-hidden");
    }
  });

  popup.addEventListener("click", (e) => {
    if (e.target.classList.contains("popup")) {
      popup.classList.add("visually-hidden");
    }
  });

  okSuccess.addEventListener("click", () => {
    success.classList.add("visually-hidden");
  });

  success.addEventListener("click", (e) => {
    if (e.target.classList.contains("success")) {
      success.classList.add("visually-hidden");
    }
  });
});
