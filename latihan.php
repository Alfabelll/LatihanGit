//nama Alfabel
<?php
echo "<br>silahkan pilih opsi\n";
echo "<br>[1] menampilkan rata - rata\n";
echo "<br>[2] menampilkan penjumlahan\n";
echo "<br>[3] menampilkan rata - rata dan penjumlahan<br>";



$pilihan = 3;
$angka1 = -1;
$angka2 = 2;
$angka3 = 3;
$angka4 = 4;

$rata_rata = $angka1 + $angka2 + $angka3 + $angka4 / 4;
$penjumlahan = $angka1 + $angka2 + $angka3 + $angka4;

// if ($angka1 < 0 && $angka2 < 0 && $angka3 < 0 && $angka4 < 0) {
//     echo "angka harus positif ";

    
// }
// else {
//     echo "angka tidak valid";
// }
if ($pilihan == 1) {
    if ($angka1 < 0 && $angka2 < 0 && $angka3 < 0 && $angka4 < 0) {
        echo "angka harus positif";
    }



else {
    echo "rata-rata :". $rata_rata; 
    
} 
}

if ($pilihan == 2) {
    if ($angka1 < 0 && $angka2 < 0 && $angka3 < 0 && $angka4 < 0) {
        echo "angka harus positif";
    }


else {
     
    echo "<br>penjumlahan :".$penjumlahan;
} 
}
if ($pilihan == 3) {
    if ($angka1 < 0 && $angka2 < 0 && $angka3 < 0 && $angka4 < 0) {
        echo "angka harus positif";
    }


else {
    echo "rata-rata dan penjumlahan :".$rata_rata."dan".$penjumlahan;

}

if ($angka1 > 0 && $angka2 < 0 && $angka3 < 0 && $angka4 < 0) {
    echo "angka harus positif";
}


else {
echo "angka harus valid";
}
}