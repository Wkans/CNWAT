
function runClickHandler(){
  let isValid = true;
  const dateCurr = new Date();

  const full_name = document.getElementById("name").value;
  const date = document.getElementById("date").value;
  const add = document.getElementById("address").value;
  const phone = document.getElementById("phone").value;
  const dateConvert = Date.parse(date);
  const toan = document.getElementById("toan").value;
  const ly = document.getElementById("ly").value;
  const hoa = document.getElementById("hoa").value;

  const gender = window.document.querySelector("input[name='gender']:checked")?.value;

  if (full_name === "" || date === "" || phone === "" || add === "" || toan === "" || ly ==="" || hoa ==="") {
    alert("Nhập thiếu rồi! ");
    isValid = false;
    return;
  }
  if (dateCurr <= dateConvert) {
    alert("Nhập sai ngày sinh");
    isValid = false;
    return;
  }
  if (full_name.length < 2 ) {
    alert("Tên không hợp lệ");
    isValid = false;
    return;
  }
  if (isNaN(phone) || phone.length !== 10) {
    alert("Sai định dạng số điện thoại");
    isValid = false;
    return;
  }
  if (isNaN(toan)|| isNaN(ly)|| isNaN(hoa)){
    alert("Kiểm tra lại điểm");
    isValid = flase
  }
  if (isValid) {
    let infor = full_name + '\n' + date + '\n' + add + '\n' + gender + '\n' + phone+ '\n' + toan+ '\n' + ly+ '\n' + hoa;
    alert("Đã ghi nhập thông tin !");
    alert(infor);
  }
};

function resetClickHandler() {
  document.getElementById("name").value = "";
  document.getElementById("phone").value = "";
  document.getElementById("address").value = "";
  document.getElementById("date").value = "";
  document.getElementById("nam").checked = true;
  document.getElementById("toan").value = "";
  document.getElementById("ly").value = "";
  document.getElementById("hoa").value = "";
  alert("Đã reset về mặc định rồi ! ...");
};

