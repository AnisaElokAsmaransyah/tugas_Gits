<?php
    function isBalancedBracket($str) {
        $stack = [];
        $bracketPairs = [
            ')' => '(',
            '}' => '{',
            ']' => '[' ];
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if ($char == '(' || $char == '{' || $char == '[') {
                // Tanda kurung buka, masukkan ke dalam stack
                array_push($stack, $char);
            } elseif ($char == ')' || $char == '}' || $char == ']') {
                // Tanda kurung tutup, periksa dengan tanda kurung terakhir dalam stack
                if (empty($stack) || $stack[count($stack) - 1] != $bracketPairs[$char]) {
                    return "NO";
                } else {
                    // Tanda kurung cocok, keluarkan tanda kurung terakhir dari stack
                    array_pop($stack);
                }
            }
        }
        // Jika stack kosong, semua tanda kurung cocok
        return empty($stack) ? "YES" : "NO"; }
    // Contoh penggunaan
    echo isBalancedBracket("{[()]}"); // Output: YES
    echo isBalancedBracket("{[(])}"); // Output: NO
    echo isBalancedBracket("{(([])[])[]}"); // Output: YES
?>