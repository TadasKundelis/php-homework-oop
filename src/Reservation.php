<?php namespace Nfq;

class Reservation {
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct($startDate, $endDate, Guest $guest) {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    public function getGuestName(): string {
        return $this->guest->getFirstName() . " " . $this->guest->getLastName();
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }
}

?>