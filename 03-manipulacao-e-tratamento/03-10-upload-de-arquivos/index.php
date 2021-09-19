<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);


$uploadFolder = __DIR__ . '/upload';

file_exists($uploadFolder) OR is_dir($uploadFolder) ?:
    mkdir($uploadFolder, 0755)
;

include __DIR__ . '/form.php';

$posted = filter_input(INPUT_GET, 'post', FILTER_VALIDATE_BOOLEAN);

if ( $_FILES && !empty($_FILES['file']['name']) ) {

    $fileUploaded = $_FILES['file'];
    $allowedFileTypes = [
        'image/jpg',
        'image/jpeg',
        'image/png',
        'image/pdf'
    ];

    $newNameOfFile = time() . mb_strstr($fileUploaded['name'], '.');

    if ( in_array($fileUploaded['type'], $allowedFileTypes) ) {

        if ( move_uploaded_file($fileUploaded['tmp_name'], $uploadFolder . '/' . $newNameOfFile) ) {
            echo '<p class="trigger accept">Arquivo recebido :)</p>';
        } else {
            echo '<p class="trigger error">Erro inesperado...</p>';
        }

    } else {
        echo '<p class="trigger error">Tipo de arquivo não permitido</p>';
    }
}
elseif ( $posted ) {

    echo '<p class="trigger warning">Whops, parece que seu arquivo é muito grande!</p>';

} else {

    if ( $_FILES ) {
        echo '<p class="trigger warning">Selecione um arquivo antes de enviar</p>';
    }
}

var_dump( scandir($uploadFolder) );