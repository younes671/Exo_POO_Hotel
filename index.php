<?php

        spl_autoload_register(function ($class){
            require $class . '.php';
        });

        
        $h1 = new Hotel ("Hilton", "10 rue de la gare", "67200", "Stasbourg", 30, "****");
        $h2 = new Hotel ("Regent", "10 rue de la gare", "67200", "STRASBOURG", 30, "****");
        $h3 = new Hotel ("Ibis", "10 rue de la gare", "67200", "STRASBOURG", 30, "****");
        $ch3 = new Chambre (1, 250, 2, true, false, $h3);   
        $ch1 = new Chambre (15, 250, 2, true, true, $h1);   
        $ch2 = new Chambre (17, 250, 2, true, true, $h1);   
        $ch4 = new Chambre (24, 250, 2, true, true, $h2);   
        $ch5 = new Chambre (21, 250, 2, true, true, $h2);   
        $ch6 = new Chambre (20, 250, 2, true, true, $h2);   
        $ch7 = new Chambre (27, 250, 2, true, true, $h2);   
        $ch8 = new Chambre (22, 250, 2, true, true, $h2);   
        $ch9 = new Chambre (2, 250, 2, true, true, $h2);   

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

        echo $h3->afficheDispoChambre() . "<br>";
        // echo "<pre>";  
        // print_r ($h2->afficheDispoChambre());
        // print_r ($h1->afficheDispoChambre());

        


       



        

      