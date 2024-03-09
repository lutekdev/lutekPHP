<?php

/** NOVOS RECURSOS: https://www.php.net/manual/pt_BR/migration70.new-features.php */

$break_line = (function () {
    return PHP_EOL;
});


function soma (int ...$valores) : int {
    $texto  = array_sum($valores);
    return $texto;
}

// function soma (int ...$valores) : float {
//     return array_sum($valores) . PHP_EOL;
// }

print soma(20, 20) . $break_line();
print soma(50, 20) . $break_line();
print soma(100, 20);

// echo "\u{aa}";
// echo "\u{0000aa}";
// echo "\u{9999}";
