<?php
        class Hotel{
            private string $enseigne;
            private string $adresse;
            private string $cp;
            private string $ville;
            private int $nbChambre;
            private string $nbEtoile;
            private array $chambresHotel;
            

            public function __construct(string $enseigne, string $adresse, string $cp, string $ville, int $nbChambre, string $nbEtoile){
                    $this->enseigne = $enseigne;
                    $this->adresse = $adresse;
                    $this->cp = $cp;
                    $this->ville = $ville;
                    $this->nbChambre = $nbChambre;
                    $this->nbEtoile = $nbEtoile;
                    $this->chambresHotel = [];
                   

            }

          //  Getters & Setters
            public function getEnseigne(){
                        return $this->enseigne;
            }

            public function setEnseigne($enseigne){
                        return $this->enseigne = $enseigne;
            }
                
            public function getAdresse(){
                        return $this->adresse;
            }

            public function setAdresse($adresse)
            {
                        return $this->adresse = $adresse;
            }   

            public function getNbChambre(){
                        return $this->nbChambre;
            }

            
            public function setNbChambre($nbChambre){
                        return $this->nbChambre = $nbChambre;
            }

          
            public function getNbEtoile(){
                        return $this->nbEtoile;
            }

            public function setNbEtoile($nbEtoile){
                        return $this->nbEtoile = $nbEtoile;

            }

            public function getCp(){
                        return $this->cp;
            }
                
                
            public function setCp($cp){
                        return $this->cp = $cp;
            }
                
                
            public function getVille(){
                        return $this->ville;
            }
                
                
            public function setVille($ville){
                        $this->ville = $ville;
            }
                
            
            
            public function getChambresHotel(){
                    return $this->chambresHotel;
            }
                
                
            public function setChambresHotel($chambresHotel){
                        $this->chambresHotel = $chambresHotel;
            }

            
            public function addChambresHotel(Chambre $chambresHotel){
                $this->chambresHotel[] = $chambresHotel;
           }

          //  Affiche la disponibilité des chambres de l'hotel

           public function getInfoDisponibilite(){
                if($this->nbChambre < $this->chambresHotel){
                        echo "DISPONIBLE";
                }else{
                        echo "COMPLET";
                }
           }

          //  Affiche titre rubrique 

           public function affichageInfoHotel(){
                echo "<b>Réservations de l'hôtel " . $this . "</b><br>";
           }

          //  Affiche nom hotel 

           public function getNomHotel(){
                echo $this;
           }

          //  Affiche détail de l'hotel

           public function getInfoHotel(){
                echo $this . "<br>" . $this->adresse . " " . $this->cp . " " . strtoupper($this->ville) . "<br> Nombre de chambres : " . $this->nbChambre . 
                "<br>" . $this->getStatutChambre() . "<br>";
                
           }

          //  Affiche numéro de chambre 

           public function getNumeroChambre(){
                foreach($this->chambresHotel as $chambreHotel){
                        echo "Chambre " . $chambreHotel;
                }
                
           }

          //  Affiche statut des chambres de l'hotel

           public function getStatutChambre(){
                $result = count($this->chambresHotel);
                return "Nombre chambres réservées : " . $result . "<br> Nombre chambres dispo : " . $this->nbChambre - $result;
           }

          

          //  Affiche état chambre 

           public function afficheNumeroChambre(){
               foreach($this->chambresHotel as $chambreHotel){
                       $chambreHotel;
               }
               
          }

          // Affiche état chambre 

          public function afficheDispoChambre(){
               $dispoChambre = "<table border='1px'>
                                   <thead>
                                   <tr>
                                        <th>CHAMBRE</th>
                                        <th>PRIX</th>
                                        <th>WIFI</th>
                                        <th>ETAT</th>
                                   </tr>
                                   </thead>
                              <tbody>";
               foreach($this->chambresHotel as $chambre){
                    
                   $dispoChambre .= "<tr>
                   
                                        <td>Chambre " . $chambre->getNumChambre() . "</td>
                                        <td>" . $chambre->getPrixChambre() . "</td>
                                        <td>" . $chambre->getOptionChambre() . "</td>
                                        <td>" . $chambre = (count($chambre->getReservationChambres()) > 0
                                        ) ? "<span class ='red'>RESERVEE</span>":"<span class = 'green'>DISPONIBLE</span></td>
                                             
                                    </tr>";
                       
               } 
               $dispoChambre .= "</tbody></table>"; 
               return $dispoChambre;
          }

          
   
          public function __toString(){
                return "<b>" . $this->enseigne . " " . $this->nbEtoile . " " . $this->ville . "</b><br>"; 
                        
          }

        }