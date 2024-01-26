<?php
            class Chambre {
                private int $numChambre;
                private float $prixChambre;
                private int $nbLit;
                private bool $optionChambre;
                private bool $statutChambre;
                private Hotel $hotel;
                private array $reservationChambres;
                

                public function __construct(int $numChambre, float $prixChambre, int $nbLit, bool $optionChambre, bool $statutChambre, Hotel $hotel){
                    $this->numChambre = $numChambre;
                    $this->prixChambre = $prixChambre;
                    $this->nbLit = $nbLit;
                    $this->optionChambre = $optionChambre;
                    $this->statutChambre = $statutChambre;
                    $this->hotel = $hotel;
                    $this->hotel->addChambresHotel($this);
                    $this->reservationChambres = [];
                   
                }

                public function getNumChambre(): int {
                    return $this->numChambre;
                }

                public function getPrixChambre(): float {
                    return $this->prixChambre;
                }
                
                public function getOptionChambre(): bool {
                    return $this->optionChambre;
                }
                
                public function getStatutChambre(): bool {
                    return $this->statutChambre;
                }
                
                
                public function getReservationChambres()
                {
                                return $this->reservationChambres;
                }
     
                
                public function setReservationChambres($reservationChambres){
                                $this->reservationChambres = $reservationChambres;
                }

                public function setNumChambre($numChambre): int {
                    return $this->numChambre = $numChambre;
                }

                public function setPrixChambre($prixChambre): float {
                    return $this->prixChambre = $prixChambre;
                }

                public function setOptionChambre($optionChambre): bool {
                    return $this->optionChambre = $optionChambre;
                }

                public function setStatutChambre($statutChambre): string {
                    return $this->statutChambre = $statutChambre;
                }

                public function getHotel() {
                    return $this->hotel;
                }

                public function getNbLit(){
                    return $this->nbLit;
                }
 
               
                public function setNbLit($nbLit){
                    return $this->nbLit = $nbLit;
                }
                public function setHotel($hotel) {
                                $this->hotel = $hotel;
                }

                public function addReservationChambre(Reservation $reservationChambres){
                    $this->reservationChambres[] = $reservationChambres;
               }

               public function getDateReservation(){
                foreach($this->reservationChambres as $reservationChambre){
                    return $reservationChambre;
                }
               }

               public function getInfoWifi(){
                  return $this->optionChambre ? "oui" : "non";
               }

               public function getInfoReservation(){
                      
                      return  $this ;
                           
              }

               
               public function afficherInfoChambre(){
                     return $this;
                     
                }
            
                
               public function afficherInfoChambreReservee(){
                    return  $this . " (" . $this->nbLit . " lits - " . $this->prixChambre . " € - Wifi : " . $this->getInfoWifi() . ")";
                }

        
               public function __toString(){
                    return " / Chambre : " . $this->numChambre . " (" . $this->nbLit . " lits - " . $this->prixChambre . " € - Wifi : " . $this->optionChambre;
                }
                
               



                

                



            }


