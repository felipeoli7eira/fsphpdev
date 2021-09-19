<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new stdClass;
$form->name = 'Felipe Oliveira';
$form->mail = 'felipe@gmail.com';

var_dump($_REQUEST);

$form->method = 'GET';
$form->method = 'POST';

include __DIR__ . '/form.php';


/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

var_dump($_POST);

$post = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);


var_dump(
    [
        $post, $postArray
    ]
);

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);


/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);
