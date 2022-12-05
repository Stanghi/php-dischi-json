<?php
$string = file_get_contents('dischi.json');
$diskList = json_decode($string, true);

if (isset($_POST['diskTitle'])) {
    $disk = [
        'title' => $_POST['diskTitle'],
        'author' => $_POST['diskAuthor'],
        'year' => $_POST['diskYear'],
        'poster' => $_POST['diskPoster'],
        'genre' => $_POST['diskGenre'],
    ];
    $diskList[] = $disk;

    file_put_contents('db.json', json_encode($diskList));
}

if (isset($_POST['deleteDisk'])) {
    array_splice($diskList, $_POST['deleteDisk'], 1);
    file_put_contents('db.json', json_encode($diskList));
}

header('Content-Type: application/json');
echo json_encode($diskList);
