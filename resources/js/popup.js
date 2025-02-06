document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll(".table__link--btn");
  const popup = document.querySelector(".popup");
  const closePopup = document.querySelector(".popup__toggle");

  // const form = document.querySelector(".popup__form");
  const formSubmit = document.querySelector(".form__submit");

  const srcAttrIdNew = document.querySelector("#src_attr_id_new");
  const dwhAttrIdNew = document.querySelector("#dwh_attr_id_new");
  const srcName = document.querySelector("#src_name");
  const srcType = document.querySelector("#src_type");
  const srcDescr = document.querySelector("#src_descr");
  const srcComments = document.querySelector("#src_comments");
  const dwhName = document.querySelector("#dwh_name");
  const dwhType = document.querySelector("#dwh_type");
  const dwhDescr = document.querySelector("#dwh_descr");
  const dwhPk = document.querySelector("#dwh_is_pk");
  const dwhMD = document.querySelector("#dwh_is_mandatory");

  const srcNameNew = document.querySelector("#src_name_new");
  const srcTypeNew = document.querySelector("#src_type_new");
  const srcDescrNew = document.querySelector("#src_descr_new");
  const srcCommentsNew = document.querySelector("#src_comments_new");
  const dwhNameNew = document.querySelector("#dwh_name_new");
  const dwhTypeNew = document.querySelector("#dwh_type_new");
  const dwhDescrNew = document.querySelector("#dwh_descr_new");
  const dwhPkNew = document.querySelector("#dwh_is_pk_new");
  const dwhMDNew = document.querySelector("#dwh_is_mandatory_new");

  const success = document.querySelector(".success");
  const okSuccess = document.querySelector(".success__close");

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
            dwhName.textContent = data.dwh_name;
            dwhType.textContent = data.dwh_type;
            dwhDescr.textContent = data.dwh_descr;
            dwhPk.checked = data.dwh_is_pk;
            dwhMD.checked = data.dwh_is_mandatory;

            srcNameNew.value = data.src_name_new;
            srcTypeNew.value = data.src_type_new;
            srcDescrNew.value = data.src_descr_new;
            srcCommentsNew.value = data.src_comments_new;
            dwhNameNew.value = data.dwh_name_new;
            dwhTypeNew.value = data.dwh_type_new;
            dwhDescrNew.value = data.dwh_descr_new;
            dwhPkNew.checked = data.dwh_is_pk_new;
            dwhMDNew.checked = data.dwh_is_mandatory_new;
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
        dwh_name_new: dwhNameNew.value,
        dwh_type_new: dwhTypeNew.value,
        dwh_descr_new: dwhDescrNew.value,
        dwh_is_pk_new: dwhPkNew.checked,
        dwh_is_mandatory_new: dwhMDNew.checked,
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
