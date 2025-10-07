<?php

// Tìm giá trị nhỏ nhất trong mảng
function minDay($mangSo) {
    if (empty($mangSo)) return null;
    return min($mangSo);
}

// Tìm giá trị lớn nhất trong mảng
function maxDay($mangSo) {
    if (empty($mangSo)) return null;
    return max($mangSo);
}

// Tính trung bình cộng
function avgDay($mangSo) {
    if (empty($mangSo)) return null;
    return array_sum($mangSo) / count($mangSo);
}

// Sắp xếp tăng dần
function sortDay($mangSo) {
    $copy = $mangSo;
    sort($copy);
    return $copy;
}

// Đảo ngược dãy
function daoNguocDay($mangSo) {
    return array_reverse($mangSo);
}
?>
