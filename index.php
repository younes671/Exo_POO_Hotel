<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    


<?php

        spl_autoload_register(function ($class){
            require $class . '.php';
        });

        
        $h1 = new Hotel ("Hilton", "10 rue de la gare", "67200", "Stasbourg", 30, "****");
        $h2 = new Hotel ("Regent", "10 rue de la gare", "67200", "STRASBOURG", 30, "****");
        $h3 = new Hotel ("Ibis", "10 rue de la gare", "67200", "STRASBOURG", 30, "****");
        $ch1 = new Chambre (15, 250, 2, true, true, $h1);   
        $ch2 = new Chambre (17, 250, 2, true, true, $h1);   
        $ch3 = new Chambre (1, 250, 2, true, false, $h3);   
        $ch4 = new Chambre (24, 140, 2, true, true, $h2);   
        $ch5 = new Chambre (21, 180, 2, true, true, $h2);   
        $ch6 = new Chambre (20, 125, 2, true, true, $h2);   
        $ch7 = new Chambre (27, 120, 2, true, true, $h2);   
        $ch8 = new Chambre (22, 99, 2, true, true, $h2);   
        $ch9 = new Chambre (2, 250, 2, true, true, $h2);   

        $c1 = new Client ("GIBELLO", "Virgile");
        $c2 = new Client ("MATHIEU", "Quentin");
        $r1 = new Reservation("2023-10-10", "2023-10-11", $c1, $ch1 );
        // $r2 = new Reservation("2023-10-13", "2023-10-18", $c1, $ch2 );
        $r3 = new Reservation("2023-11-01", "2023-11-18", $c2, $ch1 );
        // $r4 = new Reservation("2023-11-20", "2023-12-01", $c2, $ch2 );
        $r5 = new Reservation("2024-01-10", "2024-01-12", $c2, $ch3 );
        

        
        echo $h1->getInfoHotel() . "<br><br>";

       
        echo $h1->afficherReservationHotel() . "<br><br>";
        
        
        echo $c1->afficherReservationClient() . "<br><br>";
        echo $c2->afficherReservationClient() . "<br><br>";
        

        echo $h3->afficheDispoChambre() . "<br>";


        

        
        
        ?>

</body>
</html>
       

      



       



        

      