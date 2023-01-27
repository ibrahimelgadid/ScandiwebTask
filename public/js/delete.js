///////////////////////////////////////////
let $massDelete = document.querySelector(".massDelete");
let $checkBox = document.querySelectorAll(".delete-checkbox");
let $deletedIDs = document.querySelector(".deletedIDs");

$massDelete.addEventListener("click", (e) => {
  let $checkBoxes = [];

  $checkBox.forEach((check) => {
    if (check.checked) {
      $checkBoxes.push(check.id);
    }
  });
  if (!$checkBoxes.length) {
    e.preventDefault();
    alert("Please select at least one item");
  }

  $deletedIDs.value = $checkBoxes;
});
