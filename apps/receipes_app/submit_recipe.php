<?php 
$dataut = $_POST ;

if (
    !isset($dataut['email'])
    || empty($dataut['email'])
    ||!filter_var($dataut['email'], FILTER_VALIDATE_EMAIL)
    ||!isset($dataut['message'])
    || empty($dataut['message'])
    )

{ echo 'désolé mais ça ne vas pas du tout !' ;


if($_FILES['imgrecette']['size'] > 1000)
{
    echo 'Déso ton fichier est trop lourd !';
}

$pathimgs = __DIR__ . '/images';

if(!is_dir($pathimgs)){
    echo "L'envoie du fichier n'a pas pu être effectué. Dossier de récupération absent." ;
    return ;
}

move_uploaded_file($_FILES['imgrecette']['tmp_name'], $pathimgs . basename($_FILES['imgrecette']['name']));
};