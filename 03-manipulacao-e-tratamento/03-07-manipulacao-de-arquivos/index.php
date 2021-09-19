<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__ . '/file.txt';

if ( file_exists($file) && is_file($file) ) {
    echo '<p>Existe</p>';
}
else
{
    echo '<p>Não Existe</p>';
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if ( !file_exists($file) || !is_file($file) ) {
    $fileOpen = fopen($file, 'w', true);
    fwrite($fileOpen, 'Linha 1' . PHP_EOL);
    fwrite($fileOpen, 'Linha 2' . PHP_EOL);
    fwrite($fileOpen, 'Linha 3' . PHP_EOL);
    fclose($fileOpen);
}
else
{
    var_dump( file( $file ), pathinfo($file) );
}

$op = fopen($file, 'r');

while( !feof($op) ) {

    echo "<p>".fgets($op)."</p>";
}


/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . '/test2.txt';

if( file_exists($getContents) AND is_file($getContents) ) {
    $content = file_get_contents($getContents);

    echo "<p>{$contcontenten}</p>";
}
else
{
    $data = "teste@webart";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}