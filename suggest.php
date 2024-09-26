<?php
    $query = $_GET['query'];

    $animals = json_decode(file_get_contents('animals.json'), true);

    $suggestions = array();

    foreach ($animals as $animalData) {
        if (strpos(strtolower($animalData['name']), strtolower($query)) !== false) {
            $suggestions[] = $animalData['name'];
        }
    }

    echo json_encode($suggestions);
?>