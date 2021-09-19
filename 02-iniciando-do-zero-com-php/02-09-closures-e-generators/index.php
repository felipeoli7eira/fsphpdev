<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

function generateDate(int $days) {
    for ($i = 0; $i < $days ; $i++) {
        yield date('d/m/Y', strtotime("+{$i}days"));
    }
}

// echo '<div style="text-align: center">';
//     foreach( generateDate(500000) as $date) {
//         echo '<small class="tag">'. $date .'</small>';
//     }
// echo '</div>';
