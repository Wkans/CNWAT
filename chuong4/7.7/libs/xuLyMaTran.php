<?php
// File: libs/xuLyMatran.php

// Tìm phần tử lớn nhất trong ma trận
function maxMatran($mang2Chieu) {
    $max = null;
    foreach ($mang2Chieu as $row) {
        $rowMax = max($row);
        if ($max === null || $rowMax > $max) {
            $max = $rowMax;
        }
    }
    return $max;
}

// Tìm phần tử nhỏ nhất trong ma trận
function minMatran($mang2Chieu) {
    $min = null;
    foreach ($mang2Chieu as $row) {
        $rowMin = min($row);
        if ($min === null || $rowMin < $min) {
            $min = $rowMin;
        }
    }
    return $min;
}

// Tính tổng các phần tử trên đường chéo chính
function tongTrenCheoChinh($mang2Chieu) {
    $tong = 0;
    $n = count($mang2Chieu);
    for ($i = 0; $i < $n; $i++) {
        $tong += $mang2Chieu[$i][$i];
    }
    return $tong;
}

// Tính tổng các phần tử trên đường chéo phụ
function tongTrenCheoPhu($mang2Chieu) {
    $tong = 0;
    $n = count($mang2Chieu);
    for ($i = 0; $i < $n; $i++) {
        $tong += $mang2Chieu[$i][$n - $i - 1];
    }
    return $tong;
}

// Tính ma trận tổng (cộng 2 ma trận cùng kích thước)
function tinhMatranTong($matran1, $matran2) {
    $result = [];
    $rows = count($matran1);
    $cols = count($matran1[0]);
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $matran1[$i][$j] + $matran2[$i][$j];
        }
    }
    return $result;
}
// Tính ma trận tổng (cộng 2 ma trận cùng kích thước)
function tinhMatranHieu($matran1, $matran2) {
    $result = [];
    $rows = count($matran1);
    $cols = count($matran1[0]);
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $matran1[$i][$j] - $matran2[$i][$j];
        }
    }
    return $result;
}

// Tính ma trận tích (matran1 * matran2)
function tinhMatranTich($matran1, $matran2) {
    $result = [];
    $rows1 = count($matran1);
    $cols1 = count($matran1[0]);
    $rows2 = count($matran2);
    $cols2 = count($matran2[0]);

    if ($cols1 != $rows2) {
        return null; // Không nhân được
    }

    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            $sum = 0;
            for ($k = 0; $k < $cols1; $k++) {
                $sum += $matran1[$i][$k] * $matran2[$k][$j];
            }
            $result[$i][$j] = $sum;
        }
    }
    return $result;
}
function printMatrix($m) {
            foreach ($m as $row) {
                foreach ($row as $val) {
                    echo $val . " ";
                }
                echo "<br>";
            }
        }
?>
