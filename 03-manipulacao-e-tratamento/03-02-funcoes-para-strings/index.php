<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);


/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);


/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$queryParamsExample = "name=Felipe&age=23&course=fsphpdev";

$queryParamsToPHPArray = mb_parse_str($queryParamsExample, $result);

var_dump( $result );