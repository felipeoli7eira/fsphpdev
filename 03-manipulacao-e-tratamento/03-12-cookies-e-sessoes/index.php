<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);

setcookie('fsphp', 'development...', time() + 60);
// setcookie('fsphp', 'development...', time() - 60);

$cookie = filter_input_array(INPUT_COOKIE, FILTER_SANITIZE_STRING);

var_dump($_COOKIE, $cookie);


/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);
