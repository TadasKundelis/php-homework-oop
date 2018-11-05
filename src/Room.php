<?php namespace Nfq;

interface ReservableInterface {
    public function addReservation($reservation): void;
    public function removeReservation(): void;
}


class Room implements ReservableInterface {
    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras = [];
    private $price;
    private $reservations = Array();

    public function __construct(int $roomNumber, int $price) {
       $this->roomNumber = $roomNumber;
       $this->price = $price;
    }

    public function getNumber(): int {
        return $this->roomNumber;
    }

    public function addReservation($reservation): void {
        array_push($this->reservations, $reservation);
    }

    public function removeReservation(): void {
        echo "reservation removed";
    }
}

?>