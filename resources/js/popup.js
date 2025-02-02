document.addEventListener("DOMContentLoaded", () => {
  const btnEdit = document.querySelector(".btn--edit");
  const popup = document.querySelector(".popup");
  // const success = document.querySelector(".success");
  const closePopup = document.querySelector(".popup__toggle");
  // const closeSuccess = document.querySelector(".success__toggle");
  // const okSuccess = document.querySelector(".success__close");

  function sendForm(form, success, popup) {
    let formData = new FormData(form);
    let xhr = new XMLHttpRequest();

    xhr.open("POST", form.action);
    xhr.onreadystatechange = () => {
      if (xhr.status == 200 && xhr.readyState == 4) {
        success.classList.remove("visually-hidden");
        popup.classList.add("visually-hidden");
      }
    };
    xhr.send(formData);
  }

  btnEdit.addEventListener("click", () => {
    console.log(JSON.parse(btnEdit.dataset.row));
    // popup.classList.remove("visually-hidden");
  });
  // if (calculatorForm) {
  //   checkBox(calculatorForm);
  //   calculatorForm.addEventListener("submit", (e) => {
  //     e.preventDefault();
  //     e.stopPropagation();
  //     sendForm(calculatorForm, success, popup);
  //   });
  // }

  // closePopup.addEventListener("click", () => {
  //   popup.classList.add("visually-hidden");
  // });

  // closeSuccess.addEventListener("click", () => {
  //   success.classList.add("visually-hidden");
  // });

  // okSuccess.addEventListener("click", () => {
  //   success.classList.add("visually-hidden");
  // });

  // document.addEventListener("keydown", (e) => {
  //   if (e.key === "Escape" || e.key === "Esc") {
  //     popup.classList.add("visually-hidden");
  //     success.classList.add("visually-hidden");
  //   }
  // });

  // popup.addEventListener("click", (e) => {
  //   if (e.target.classList.contains("popup")) {
  //     popup.classList.add("visually-hidden");
  //   }
  // });

  // success.addEventListener("click", (e) => {
  //   if (e.target.classList.contains("success")) {
  //     success.classList.add("visually-hidden");
  //   }
  // });
});
