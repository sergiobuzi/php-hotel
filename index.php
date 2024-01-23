<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotels</title>
    <!-- link foglio di stile -->
    <link rel="stylesheet" href="style.css">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-secondary">

   
    <h1>hotel</h1>

    <?php
        // array degli hotel
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

    <div class="container d-flex flex-wrap">

        <?php foreach ( $hotels as $hotel) : ?>

            <div class="col-sm-4 d-flex mb-3 flex-wrap">
                
                <div class="card  bg-light" style = "width: 20rem; " >

                    <div class="card-body ">
                        <h2 class="card-title"><?php echo $hotel["name"] ?></h2>
                        <p class="card-text"><b>Descrizione:</b> <?php echo $hotel["description"] ?></p>
                        <div class="card-text"><b>Voto:</b> <?php echo $hotel["vote"] ?></div>
                        <div class="card-text"><b>Distanza dal centro:</b> <?php echo $hotel["distance_to_center"] ?> Km</div>
                    </div>

                </div>
                
            </div>

        <?php endforeach; ?>

    </div>

    


    <!-- script bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>