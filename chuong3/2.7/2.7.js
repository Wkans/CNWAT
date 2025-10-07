
const menuItems = document.querySelectorAll('.menu li');
const titleDisplay = document.getElementById('selected-title');

menuItems.forEach(item => {
    item.addEventListener('click', function () {
        // Bỏ class selected ở tất cả
        menuItems.forEach(i => i.classList.remove('selected'));

        // Thêm class selected cho item hiện tại
        this.classList.add('selected');

        // Hiển thị tiêu đề
        const title = this.getAttribute('data-title');
        titleDisplay.textContent = ` ${title}`;
    });
});

