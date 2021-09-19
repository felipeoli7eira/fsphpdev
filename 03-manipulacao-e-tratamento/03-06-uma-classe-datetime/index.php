<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

$date = new DateTime();
$birth = new DateTime('1997-11-16');
$static = DateTime::createFromFormat('d/m/Y', '16/11/1997');

var_dump(
    $date,
    get_class_methods($date),
    $birth,
    $static,
    $date->format('d/m/Y'),
    $date->format('d'),
);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);


/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);


DateTime
DateInterval
DatePeriod