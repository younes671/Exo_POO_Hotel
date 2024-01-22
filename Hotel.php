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

           public function getInfoDisponibilite(){
                if($this->nbChambre < $this->chambresHotel){
                        echo "DISPONIBLE";
                }else{
                        echo "COMPLET";
                }
           }

           public function affichageInfoHotel(){
                echo "<b>Réservations de l'hôtel " . $this . "</b><br>";
           }

           public function getNomHotel(){
                echo $this;
           }

           public function getInfoHotel(){
                echo $this . "<br>" . $this->adresse . " " . $this->cp . " " . strtoupper($this->ville) . "<br> Nombre de chambres : " . $this->nbChambre . 
                "<br>" . $this->getStatutChambre() . "<br>";
                
           }

           public function getNumeroChambre(){
                foreach($this->chambresHotel as $chambreHotel){
                        echo "Chambre " . $chambreHotel;
                }
                
           }

           public function getStatutChambre(){
                $result = count($this->chambresHotel);
                return "Nombre chambres réservées : " . $result . "<br> Nombre chambres dispo : " . $this->nbChambre - $result;
           }
      
            public function __toString(){
                        return "<b>" . $this->enseigne . " " . $this->nbEtoile . " " . $this->ville . "</b><br>"; 
                        
            }

        }