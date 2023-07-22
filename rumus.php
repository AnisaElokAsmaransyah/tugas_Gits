<?php
function A000124($n) {
    $output = "";
    $current = 1;
    for ($i = 1; $i <= $n; $i++) {
        $output .= $current . "-";
        $current += $i;
    }
    // Menghapus tanda "-" di akhir string
    $output = rtrim($output, "-");
    return $output;
}

// Memasukkan input
$input = 7;
$output = A000124($input);
echo "Input: " . $input . "\n";
echo "Output: " . $output . "\n";
?>
