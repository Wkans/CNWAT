let images = [
    "./img/0.png",
    "./img/1.png",
    "./img/3.png",
    "./img/2.png"
];

let index = 0;
let direction = 1;
let timeoutId = null;
let running = false;

function changeImage() {
    // đổi ảnh
    document.getElementById("image").src = images[index];

    // tăng index theo hướng
    index += direction;

    // nếu tới đầu/cuối thì đảo chiều
    if (index === images.length - 1 || index === 0) {
        direction *= -1;
    }

    // nếu vẫn đang chạy thì hẹn lần tiếp theo
    if (running) {
        timeoutId = setTimeout(changeImage, 500); // 0.5 giây đổi hình
    }
}

function startJump() {
    if (running) return; // tránh chạy nhiều lần
    running = true;
    changeImage();
}

function stopJump() {
    running = false;
    clearTimeout(timeoutId);
    timeoutId = null;
}
