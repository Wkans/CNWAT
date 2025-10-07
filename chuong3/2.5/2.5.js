
function chay() {
    const a = window.document.question;
    let flag = 1;
    let isValid = true;
    const dateCurr = new Date();

    console.log(a);
    const gender = window.document.querySelector("input[type='radio'][name='gender']:checked")?.value;
    const name = document.getElementById("name").value;
    const date = document.getElementById("date").value;
    const add = document.getElementById("add").value;
    const phone = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
    console.log(name, date, add, phone, gender);
    const dateConvert = Date.parse(date);
    console.log(dateConvert);

    if (name == "" || date == "" || phone == "" || add == "" || email =="") {
        alert("Nhập thiếu trường rồi! ");
        isValid = false;
        return;
    }
    if (dateCurr <= dateConvert) {
        alert("Nhập sai ngày sinh");
        isValid = false;
        return;
    }
    if (name.length < 2) {
        alert("Tên quá ngắn");
        isValid = false;
        return;
    }
    if (isNaN(phone)) {
        alert("Sai định dạng số điện thoại");
        isValid = false;
        return;
    }
    if (phone.length !== 10) {
        alert("Nhập sai số điện thoại");
        isValid = false;
        return;
    }
    alert("Đã ghi nhận thông tin");
};
function reset() {
    document.querySelectorAll("form").reset();
};
function handleEnter(event) {
    if (event.key === "Enter") {
        const form = document.getElementById("form");
        const index = [...form].indexOf(event.target);
        form.elements[index + 1].focus();

    }
}
function validateName() {
    var x = document.getElementById("name");
    x.value = x.value.trim();
    x.value = x.value.toLowerCase();
    let temp = "";
    temp += x.value[0].toUpperCase();
    for (let i = 1; i < x.value.length; i++) {
        if (x.value[i - 1] === " ") {
            temp += x.value[i].toUpperCase();
        } else {
            temp += x.value[i];
        }
    }
    x.value = temp;

    console.log(temp);
}
function handlePass() {
    const pass = document.getElementById("password").value;
    const confirmpassword = document.getElementById("confirmPassword").value;
    if (pass !== confirmpassword) {
        document.getElementById("passError").textContent = "Mật khẩu gõ lại không đúng";
        return;
    }
    document.getElementById("passError").textContent = "";
    return ;
}

function validateEmail() {
  const email = document.getElementById("email").value;

  // Regex theo yêu cầu: ten[.ten]*@ten[.ten]*
  const regexEmail = /^[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)+$/;

  if (!regexEmail.test(email)) {
    document.getElementById("emailError").textContent = "Email không đúng định dạng";
    return;
  }
  document.getElementById("emailError").textContent = "";
  return;
}