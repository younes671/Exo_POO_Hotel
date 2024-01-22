<?php
        class Reservation {
            private DateTime $dateReservationDebut;
            private DateTime $dateReservationFin;
            private Client $client;
            private Chambre $chambre;

            public function __construct(string $dateReservationDebut, string $dateReservationFin, Client $client, Chambre $chambre) {
                $this->dateReservationDebut = new DateTime($dateReservationDebut);
                $this->dateReservationFin = new DateTime($dateReservationFin);
                $this->client = $client;
                $this->chambre = $chambre;
                $this->client->addClient($this);
                $this->chambre->addReservationChambre($this);

            }

            public function getDateReservationDebut(): DateTime {return $this->dateReservationDebut;}
            public function getDateReservationFin(): DateTime {return $this->dateReservationFin;}
            public function getClient(): Client {return $this->client;}
            public function getChambre(): Chambre {return $this->chambre;}

            public function setDateReservationDebut($dateReservationDebut) {return $this->dateReservationDebut = $dateReservationDebut;}
            public function setDateReservationFin($dateReservationFin) {return $this->dateReservationFin = $dateReservationFin;}
            public function setClient($client) {return $this->client= $client;}
            public function setChambre($chambre) {return $this->chambre = $chambre;}

            public function getDateReservation(){
                return $this;
            }

            public function __toString(){
                return " du " . $this->dateReservationDebut->format('d-m-Y') . " au " . $this->dateReservationFin->format('d-m-Y'); 
            }


        }





?>