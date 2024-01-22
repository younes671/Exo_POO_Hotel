<?php

        spl_autoload_register(function ($class){
            require $class . '.php';
        });

        
        $h1 = new Hotel ("Hilton", "10 rue de la gare", "67200", "Stasbourg", 30, "****");
        $h2 = new Hotel ("Regent", "10 rue de la gare", "67200", "STRASBOURG", 30, "****");
        $h3 = new Hotel ("Ibis", "10 rue de la gare", "67200", "STRASBOURG", 30, "****");
        $ch3 = new Chambre (1, 250, 2, true, "disponible", $h3);   
        $ch1 = new Chambre (15, 250, 2, true, "disponible", $h1);   
        $ch2 = new Chambre (15, 250, 2, true, "disponible", $h1);   
        $ch3 = new Chambre (29, 250, 2, true, "disponible", $h2);   

        $c1 = new Client ("GIBELLO", "Virgile");
        $c2 = new Client ("micka", "JEAN");
        $r1 = new Reservation("10/10/2023", "10/10/2023", $c1, $ch1 );
        // $r2 = new Reservation("15/01/2023", "15/01/2023", $c2, $ch2 );

        echo $h1->getInfoHotel() . "<br><br>";
        echo $h2->getInfoHotel() . "<br><br>";
        echo $h3->getInfoHotel() . "<br><br>";

        echo $h1->affichageInfoHotel();

        echo $c1->afficherInfoClient();
        echo $ch1->getInfoReservation();
        echo $r1->getDateReservation() . "<br>";
        echo $c2->afficherInfoClient();
        echo $ch2->getInfoReservation();
        echo $r1->getDateReservation() . "<br>";


        // var_dump($ch2->getVerificationStatutChambre(15));



        

      