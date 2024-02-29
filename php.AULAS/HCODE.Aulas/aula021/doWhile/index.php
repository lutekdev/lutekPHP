<?php

// $totalVendas = 100;
// $desconto = 0.9;

// do {
//     $totalVendas *= $desconto;
// } while ($totalVendas > 100);

// echo $totalVendas;

$minhaIdade = 0;

do {
    $minhaIdade++;
    echo $minhaIdade . PHP_EOL;

    if ($minhaIdade === 5) {
        echo "=============" . PHP_EOL;
        echo "Bebe, Bebe, Bebe!" . PHP_EOL;
        echo "=============" . PHP_EOL;
    }

    if ($minhaIdade == 10) {
        echo "=============" . PHP_EOL;
        echo "Jovem, Jovem, Jovem!!" . PHP_EOL;
        echo "=============" . PHP_EOL;
    }

    if ($minhaIdade == 12) {
        echo "=============" . PHP_EOL;
        echo "Uall, você agora eh um adolecente!" . PHP_EOL;
        echo "=============" . PHP_EOL;
    }

    if ($minhaIdade == 18) {
        echo "=============" . PHP_EOL;
        echo "Parabéns, você atingiu a fase adulta!" . PHP_EOL;
        echo "=============" . PHP_EOL;
    }
} while ($minhaIdade < 22);
