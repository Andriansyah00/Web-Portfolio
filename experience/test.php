<?php
// Fungsi untuk melakukan Bubble Sort Terbalik (dari terbesar ke terkecil)
function bubbleSortDescending($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Membandingkan dua elemen berturut-turut
            if ($array[$j] < $array[$j + 1]) {
                // Menukar elemen jika elemen pertama lebih kecil
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

// Membaca input dari pengguna
echo "Masukkan jumlah elemen array: ";
$size = trim(fgets(STDIN));  

$array = [];
echo "Masukkan elemen array (dipisahkan spasi): ";
$input = trim(fgets(STDIN));  
$array = explode(" ", $input);  

// Mengurutkan array dari terbesar ke terkecil
$sortedArray = bubbleSortDescending($array);

// Menampilkan hasil pengurutan
echo "Array setelah diurutkan (terbesar ke terkecil): " . implode(", ", $sortedArray) . "\n";
?>
