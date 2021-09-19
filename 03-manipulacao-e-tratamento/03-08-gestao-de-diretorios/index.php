<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);
$folter = __DIR__ . '/upload';

if ( !file_exists($folter) || !is_dir($folter) )
{
    mkdir($folter, 0755);
}
else
{
    var_dump(
        scandir($folter)
    );
}

/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);

$file = __DIR__ . '/example.txt';

var_dump(
    pathinfo($file),
    scandir($folter),
    scandir(__DIR__)
);

if ( !file_exists($file) || !is_file($file) )
{
    fopen($file, 'w');
}
else
{
    copy($file, $folter . '/' . basename($file));

    // rename(
    //     __DIR__ . '/upload/example.txt',
    //     __DIR__ . '/upload/' . time() . '.' . pathinfo($file)['extension'],
    // );

    rename($file, __DIR__ . '/upload/' . time() . '.' . pathinfo($file)['extension']);

    // var_dump( filemtime($file), filemtime(__DIR__ . '/upload/example.txt') );
}

/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);

rmdir(__DIR__ . '/remove');

$remove = __DIR__ . '/remove';

$excludeDotFolders = array_diff( scandir($remove), ['.', '..'] );

$countFilesInFolder = count($excludeDotFolders);



if ( $countFilesInFolder > 0 )
{
    foreach( scandir($remove) as $file )
    {
        $file = __DIR__ . '/remove/' . $file;

        if ( file_exists($file) AND is_file($file) )
        {
            unlink($file);
        }
    }
}
else
{
    rmdir($remove);
}

