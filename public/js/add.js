let typeSwitcher = document.getElementById("type");
let $types = Array.from(document.getElementsByTagName("fieldset"));
typeSwitcher.addEventListener("change", function (e) {
  $types.forEach((type) => {
    if (type.id === e.target.value) {
      type.classList.remove("d-none");
    } else {
      if (!type.classList.contains("d-none")) {
        type.classList.add("d-none");
      }
    }
  });
});
