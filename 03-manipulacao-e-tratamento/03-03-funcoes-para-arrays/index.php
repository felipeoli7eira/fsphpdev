<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    'Linkin Park',
    'BMTH',
    'Bullet For My Valentine'
];

$assoc = [
    'band_1' => 'Linkin Park',
    'band_2' => 'BMTH',
    'band_3' => 'Bullet For My Valentine'
];

array_unshift($index, 'Veil Of Maya');
$assoc = $assoc + ['band_4' => 'Papa Roach'];

array_push($index, 'Nirvana');

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

array_unshift($index, "");
$index = array_filter($index);

var_dump($index, $assoc);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

ksort($index);
krsort($index);

sort($index);
rsort($index);

var_dump($index, $assoc);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);


var_dump($index, $assoc);

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);
