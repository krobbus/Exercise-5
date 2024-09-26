<?php
    $query = $_GET['query'];

    $animals = json_decode(file_get_contents('animals.json'), true);

    $found = false;
    $animal = null;

    foreach ($animals as $animalData) {
        if (strtolower($animalData['name']) === strtolower($query)) {
            $found = true;
            $animal = $animalData;
            break;
        }
    }

    $response = array('found' => $found);

    if ($found) {
        $response['animal'] = $animal;
    }

    echo json_encode($response);
?>