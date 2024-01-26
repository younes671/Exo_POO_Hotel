<?php
        class Client {
            private string $nom;
            private string $prenom;
            private array $reservationClients;
            
           

            public function __construct(string $nom, string $prenom) {
                $this->nom = $nom;
                $this->prenom = $prenom;
                
                $this->reservationClients = [];
                
               
            }

            public function getNom(): string {
                 return $this->nom;
            }
            public function getPrenom(): string {
                 return $this->prenom;
             }
           
           
             public function setNom($nom): string {
               return $this->nom = $nom;
              }
              public function setPrenom($prenom): string {
                return $this->prenom = $prenom;
              }
              public function getReservationClients(){
                          return $this->reservationClients;
              }
  
             
              public function setReservationClients($reservationClients){
                          $this->reservationClients = $reservationClients;
              }
  
              public function addClient(Reservation $reservationClients){
                  $this->reservationClients[] = $reservationClients;
              }

              // Affiche Info Client 

             public function afficherInfoClient(){
               return  $this;
     
             }

            //  Affiche Titre rubrique  

            public function afficherTitreRubriqueClient(){
              return "<b>Réservation de " . $this . "</b>";
    
            }

            // Affiche reservation client 

            public function afficherReservationClient(){
              $result = "<b>Réservation de " . $this . "</b><br>" . $this->getNbReservation();
              foreach($this->reservationClients as $reservationClient){
                   
                    $result .= 
                    "<br><b>Hotel : </b>" . $reservationClient->getChambre()->getHotel() 
                    . $reservationClient->getChambre()->afficherInfoChambreReservee() 
                    . $reservationClient->getDateReservation() . " <br> "; 
                  } 

                  $result .= $reservationClient->getClient()->afficherTotaleReservation();
                    
                    
                    return $result;
            }
                          
                          

            // Affiche nb reservation 

            public function getNbReservation(){
              foreach($this->reservationClients  as $nbReservation){
                $nbReservation = count($this->reservationClients);
              }
              return "<span class='text-bg-success'>" . $nbReservation . " RESERVATIONS</span>";
            }

            public function afficherTotaleReservation(){
                $total = 0;
                foreach($this->reservationClients  as $reservation){
                    $total += $reservation->getNbJourReserve() * $reservation->getChambre()->getPrixChambre(); 
                }
              
                return "Total : " . $total . " € ";
            }

           
             public function __toString(){
               return $this->prenom . " " . $this->nom;
             }


           
        }


