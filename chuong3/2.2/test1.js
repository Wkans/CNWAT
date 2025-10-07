
function run() {
    const cauHoi = ["cau1", "cau2", "cau3"];
    let diem = 0;
    
    // Kiểm tra và tính điểm trong 1 vòng lặp
    for (let i = 0; i < cauHoi.length; i++) {
        const dapAn = document.querySelector(`input[name="${cauHoi[i]}"]:checked`)?.value;
        
        if (!dapAn) {
            alert("Còn đáp án chưa điền kìa");
            return;
        }
        
        if (dapAn === "true") diem++;
    }
    
    alert('Điểm của bạn là' + diem);
    
}