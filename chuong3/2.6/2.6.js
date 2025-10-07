 document.addEventListener("DOMContentLoaded", function () {
  const table = document.getElementById("tbl");
  const checkAll = document.getElementById("checkall");
  const checkboxes = table.querySelectorAll("tbody input[type='checkbox']");

  // Cập nhật trạng thái "check all"
  function updateCheckAll() {
    const allChecked = [...checkboxes].every(cb => cb.checked);
    checkAll.checked = allChecked;
  }

  // Khi tick vào "check all"
  checkAll.addEventListener("change", function () {
    checkboxes.forEach(cb => {
      cb.checked = checkAll.checked;
      cb.closest("tr").classList.toggle("selected", cb.checked);
    });
  });

  // Xử lý cho từng checkbox dòng
  checkboxes.forEach(cb => {
    cb.addEventListener("change", function () {
      cb.closest("tr").classList.toggle("selected", cb.checked);
      updateCheckAll();
    });

    // Khi click vào dòng (trừ tiêu đề) thì toggle checkbox
    cb.closest("tr").addEventListener("click", function (e) {
      if (e.target.tagName !== "INPUT") {
        cb.checked = !cb.checked;
        cb.closest("tr").classList.toggle("selected", cb.checked);
        updateCheckAll();
      }
    });
  });
});
