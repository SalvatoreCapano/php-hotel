<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>

    <h1>PHP Hotel</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to Center</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($hotels as $hotelElement) {
                echo '<tr>';

                foreach ($hotelElement as $dataName => $hotelData) {
                    echo '<td>';
                    
                    // Per il dato 'parcheggio' stampa un icona
                    if ($dataName == 'parking') {
                        if ($hotelData == true) {
                            echo '<i class="bi bi-check"></i>';
                        }
                        else echo '-';
                    }
                    
                    // Stampa dato
                    else {
                        echo $hotelData;
                    }

                    // Stampa '/5' nel voto
                    if ($dataName == 'vote') {
                        echo '/5';
                    }
                    else if ($dataName == 'distance_to_center') {
                        echo ' km';
                    }
                    echo '</td>';
                }

                echo '</tr>';
            }

            ?>
        </tbody>
    </table>

</body>

</html>