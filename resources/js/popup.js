document.addEventListener("DOMContentLoaded", () => {
  const btnEdit = document.querySelector(".btn--edit");
  const popup = document.querySelector(".popup");
  // const success = document.querySelector(".success");
  const closePopup = document.querySelector(".popup__toggle");
  // const closeSuccess = document.querySelector(".success__toggle");
  // const okSuccess = document.querySelector(".success__close");
  const form = document.querySelector(".popup__form");
  const formSubmit = document.querySelector(".form__submit");
  const srcName = document.querySelector("#src_name");
  const srcType = document.querySelector("#src_type");
  const srcDescr = document.querySelector("#src_descr");
  const srcComments = document.querySelector("#src_comments");
  const dwhName = document.querySelector("#dwh_name");
  const dwhType = document.querySelector("#dwh_type");
  const dwhDescr = document.querySelector("#dwh_descr");
  const dwhPk = document.querySelector("#dwh_is_pk");
  const dwhMD = document.querySelector("#dwh_is_mandatory");

  function sendForm(form, success = null, popup = null) {
    let formData = new FormData(form);
    for (let value of formData.values()) {
      console.log(value);
    }
    // let token = form.querySelector('input[name="_token"]').value;
    let xhr = new XMLHttpRequest();

    xhr.open("POST", form.action);
    // xhr.setRequestHeader("X-CSRF-TOKEN", token);
    xhr.send(formData);
    xhr.onreadystatechange = () => {
      if (xhr.status == 200 && xhr.readyState == 4) {
        // success.classList.remove("visually-hidden");
        // popup.classList.add("visually-hidden");
      }
      console.log(xhr.status)
    };
  }

  btnEdit.addEventListener("click", (e) => {
    let data = JSON.parse(btnEdit.dataset.row);
    console.log(data);
    popup.classList.remove("visually-hidden");
    srcName.textContent = data.src_name;
    srcType.textContent = data.src_type;
    srcDescr.textContent = data.src_descr;
    srcComments.textContent = data.src_comments;

    dwhName.textContent = data.dwh_name;
    dwhType.textContent = data.dwh_type;
    dwhDescr.textContent = data.dwh_descr;
    dwhPk.checked =
      data.dwh_is_pk !== null && data.dwh_is_pk === true ? true : false;
    dwhMD.checked =
      data.dwh_is_mandatory !== null && data.dwh_is_mandatory === true
        ? true
        : false;
    // sendForm(form);
  });

  // formSubmit.addEventListener("click", (e) => {
  //   e.preventDefault();
  //   sendForm(form);
  // });
  // if (calculatorForm) {
  //   checkBox(calculatorForm);
  //   calculatorForm.addEventListener("submit", (e) => {
  //     e.preventDefault();
  //     e.stopPropagation();
  //     sendForm(calculatorForm, success, popup);
  //   });
  // }

  closePopup.addEventListener("click", () => {
    popup.classList.add("visually-hidden");
  });

  // closeSuccess.addEventListener("click", () => {
  //   success.classList.add("visually-hidden");
  // });

  // okSuccess.addEventListener("click", () => {
  //   success.classList.add("visually-hidden");
  // });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" || e.key === "Esc") {
      popup.classList.add("visually-hidden");
      // success.classList.add("visually-hidden");
    }
  });

  popup.addEventListener("click", (e) => {
    if (e.target.classList.contains("popup")) {
      popup.classList.add("visually-hidden");
    }
  });

  // success.addEventListener("click", (e) => {
  //   if (e.target.classList.contains("success")) {
  //     success.classList.add("visually-hidden");
  //   }
  // });
});
