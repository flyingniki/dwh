document.addEventListener("DOMContentLoaded", () => {
  const info = document.querySelector(".info");
  const infoTitle = document.querySelector(".info__title");
  const okInfo = document.querySelector(".info__close");

  const id = document.querySelector("#id");
  const name = document.querySelector("#name");
  const source = document.querySelector("#source");
  const description = document.querySelector("#description");
  const stageTable = document.querySelector("#stage_table");
  const coreTable = document.querySelector("#core_table");
  const subsystem = document.querySelector("#subsystem");
  const wikiLink = document.querySelector("#wiki_link");

  const classUpdate = document.querySelector("#class_update");

  classUpdate.addEventListener("click", (e) => {
    e.preventDefault();
    axios
      .patch(`/classes/${id.value}/update`, {
        name: name.value,
        source: source.value,
        description: description.value,
        stage_table: stageTable.value,
        core_table: coreTable.value,
        subsystem: subsystem.value,
        wiki_link: wikiLink.value,
      })
      .then(function (response) {
        console.log("update response", response);
        info.classList.remove("visually-hidden");
        infoTitle.textContent = "Класс обновлен";
      })
      .catch(function (error) {
        console.log("update error", error);
        info.classList.remove("visually-hidden");
        infoTitle.textContent = error.response.data.errors
          ? JSON.stringify(error.response.data.errors)
          : error.response.data.message;
      });
  });
});
