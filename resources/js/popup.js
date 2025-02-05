document.addEventListener("DOMContentLoaded", () => {
  const link = document.querySelector(".table__link--btn");
  const popup = document.querySelector(".popup");
  const closePopup = document.querySelector(".popup__toggle");
  const form = document.querySelector(".popup__form");
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
  const success = document.querySelector(".success");
  const closeSuccess = document.querySelector(".success__toggle");
  const okSuccess = document.querySelector(".success__close");

  link.addEventListener("click", () => {
    let arParam = [link.dataset.srcId, link.dataset.dwhId];
    let [srcId, dwhId] = arParam;
    // console.log(arParam);
    axios
      .post("/attrs", {
        srcId: srcId,
        dwhId: dwhId,
      })
      .then(function (response) {
        // console.log(response);
        if (response.data.length === 1) {
          let data = response.data[0];
          console.log(data);
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
          popup.classList.remove("visually-hidden");
        } else {
          let errMsg = "Data has several values";
        }
      })
      .catch(function (error) {
        console.log(error);
      });
  });

  formSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    let formData = new FormData(form);
    for (let [key, value] of formData.entries()) {
      console.log(`${key}: ${value}`);
    }
    axios
      .patch("/attrs/update", {
        data: formData,
      })
      .then(function (response) {
        console.log(response);
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

  closeSuccess.addEventListener("click", () => {
    success.classList.add("visually-hidden");
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
