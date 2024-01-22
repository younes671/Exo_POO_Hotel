<?php
        class Client {
            private string $nom;
            private string $prenom;
            // private DateTime $dateReservation;
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
             

            
         
             



              public function addClient(Reservation $reservationClients){
                  $this->reservationClients[] = $reservationClients;
             }

             public function afficherInfoClient(){
               return  $this . " - ";
     
             }


             public function __toString(){
               return $this->prenom . " " . $this->nom;
             }

             public function afficherreservclient(){
               $result = "<h1>Information client : " . $this . " ans</h1><br><ul>";

               foreach($this->reservationClients as $reservationClient){
                   $result .= "<li><b>" . $reservationClient . "</b></li><br>";
               }
               $result .= "</ul>";
               return $result;
          }
               

             
        }


