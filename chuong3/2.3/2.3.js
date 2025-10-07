function submitClickHandler() {
    let id_class = document.getElementById("id").value;
    let name_class = document.getElementById("name").value;
    let year = document.getElementById("year").value;
    let teacher = document.getElementById("teacher").value;

    if (isEmpty(id_class, name_class, year, teacher) == true) {
        alert('Vui lòng nhập đầy đủ ô nhập liệu');
    }
    else if (checkYear(year)==false){
        alert("Không phải số!");
    }else {
        alert(id_class + ' ' + name_class + ' ' + year + ' ' + teacher);
        
    }
}

function resetClickHandler() {
    document.getElementById("id").value = "";
    document.getElementById("name").value = "";
    document.getElementById("year").value = "";
    document.getElementById("teacher").value = "";
    alert("Reset mặc đinh xong !...");
    return;

}

function isEmpty(id_class, name_class, year, teacher) {
    if (id_class === "" || name_class === "" || year === "" || teacher === "") {
        return true;
    }
    return false;
}
function checkYear(year){
    if (isNaN(year)) {
        return false;
    }
    return true;
}