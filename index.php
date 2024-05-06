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

    // var_dump($_GET);
    $park = $_GET["park"];
    // var_dump($park);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c473752e7c.js" crossorigin="anonymous"></script>
    <title>php-hotel</title>
</head>
<body>

    <div class="container">
        <div class="row pt-5">
            <form>
                <label>Parking</label>
                <select name="park" id="parking">
                    <option value="both">BOTH</option>
                    <option value="yes">YES</option>
                    <option value="no">NO</option>
                </select>
                <button class="btn btn-primary">SEARCH HOTEL</button>
            </form>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th class="text-center" scope="col">Parking</th>
                        <th class="text-center" scope="col">Vote</th>
                        <th class="text-center" scope="col">Distance</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    for($i = 0; $i < count($hotels); $i++){
                        $hotel = $hotels[$i];
                        $name = $hotel["name"];
                        $description = $hotel["description"];
                        $parking = $hotel["parking"];
                        $vote = $hotel["vote"];
                        $distance = $hotel["distance_to_center"];
                    ?>

                   
                        <tr class="
                            <?php 
                            if($park === 'yes' && $parking === false){echo "d-none";};
                            if($park === 'no' && $parking === true){echo "d-none";};
                            ?>">
                            <td><?php echo $name?></td>
                            <td><?php echo $description?></td>
                            <td class="text-center">
                                <?php 
                                    if($parking === true){
                                    echo '<i class="fa-solid fa-check text-success"></i>';
                                    }
                                    else{
                                        echo '<i class="fa-solid fa-x text-danger"></i>';
                                    }
                                ?>
                            </td>
                            <td class="text-center"><?php echo $vote?></td>
                            <td class="text-center"><?php echo $distance?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
