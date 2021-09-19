<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump([
    date_default_timezone_get(),
    date(DATE_W3C)
]);


var_dump(getdate());
var_dump([
    strtotime('now'),
    time(),
    date('d/m/Y', strtotime('+10days'))
]);

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);