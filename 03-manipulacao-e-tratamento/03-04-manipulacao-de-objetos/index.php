<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    'name' => 'Felipe',
    'company' => 'localhost',
    'email' => 'felipe.oliveira@wapstore.com.br'
];

$objProf = (object) $arrProfile;

unset( $objProf->company );

var_dump($arrProfile, $objProf);

$company = new stdClass();


/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);