const table = document.getElementById("productTable");
const headers = table.querySelectorAll("th.sortable");
let sortDirection = {}; // nhớ chiều sắp xếp cho từng cột

// --- Sắp xếp ---
headers.forEach((header, index) => {
    header.dataset.col = index; // gán col index chính xác
    header.addEventListener("click", () => {
        const colIndex = parseInt(header.dataset.col);

        // reset trạng thái các cột
        headers.forEach(h => h.classList.remove("sorted-asc", "sorted-desc"));

        // đảo chiều sắp xếp
        sortDirection[colIndex] = !sortDirection[colIndex];

        // lấy tbody (nếu chưa có thì tạo)
        let tbody = table.tBodies[0];
        if (!tbody) {
            tbody = document.createElement("tbody");
            // chuyển tất cả row (trừ header) vào tbody
            while (table.rows.length > 1) {
                tbody.appendChild(table.rows[1]);
            }
            table.appendChild(tbody);
        }

        // lấy tất cả hàng trong tbody
        const rows = Array.from(tbody.rows);

        rows.sort((a, b) => {
            const cellA = a.cells[colIndex].textContent.trim().toLowerCase();
            const cellB = b.cells[colIndex].textContent.trim().toLowerCase();
            return sortDirection[colIndex]
                ? cellA.localeCompare(cellB)
                : cellB.localeCompare(cellA);
        });

        // gắn lại hàng theo thứ tự mới
        tbody.innerHTML = "";
        rows.forEach((row, i) => {
            tbody.appendChild(row);
        });

        // hiển thị mũi tên
        header.classList.add(sortDirection[colIndex] ? "sorted-asc" : "sorted-desc");
    });
});

// --- Tìm kiếm ---
document.getElementById("searchInput").addEventListener("input", function () {
    const keyword = this.value.trim().toLowerCase();
    const rows = Array.from(table.rows).slice(1);
    let count = 0;

    rows.forEach(row => {
        let found = false;

        // reset nội dung cell (bỏ highlight cũ)
        for (let i = 1; i < row.cells.length; i++) {
            row.cells[i].innerHTML = row.cells[i].textContent;
        }

        if (keyword !== "") {
            for (let i = 1; i < row.cells.length; i++) {
                const cell = row.cells[i];
                const text = cell.textContent;
                if (text.toLowerCase().includes(keyword)) {
                    found = true;
                    const regex = new RegExp(`(${keyword})`, "gi");
                    cell.innerHTML = text.replace(regex, "<mark>$1</mark>");
                }
            }
        } else {
            found = true; // nếu ô tìm kiếm rỗng thì hiển thị tất cả
        }

        row.style.display = found ? "" : "none";

        // cập nhật lại số thứ tự cho những hàng hiển thị
        if (found) {
            count++;
            row.cells[0].textContent = count;
        }
    });
});
