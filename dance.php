<?php
function denseRanking($scores, $gitsScores) {
    // Menghapus elemen duplikat dari array skor dan melakukan pengurutan secara descending
    $uniqueScores = array_unique($scores);
    rsort($uniqueScores);

    $results = array();

    foreach ($gitsScores as $gitsScore) {
        // Memeriksa apakah skor GITS lebih besar dari skor tertinggi di permainan
        if ($gitsScore >= $uniqueScores[0]) {
            $results[] = 1;
        } else {
            $rank = 1;
            foreach ($uniqueScores as $score) {
                // Memeriksa skor GITS pada posisi peringkat tertentu
                if ($gitsScore >= $score) {
                    $results[] = $rank;
                    break;
                }
                $rank++;
            }
        }
    }

    return $results;
}

// Contoh input
$players = 7;
$playerScores = array(100, 100, 50, 40, 40, 20, 10);
$games = 4;
$gitsScores = array(5, 25, 50, 120);

// Mendapatkan output
$output = denseRanking($playerScores, $gitsScores);

// Menampilkan output
echo implode(' ', $output);
?>