<?php namespace Nfq;
class BookingManager {
    public static function bookRoom(Room $room, Reservation $reservation): void {
        $room->addReservation($reservation);
        $guestName = $reservation->getGuestName();
        $roomNumber = $room->getNumber();
        $startDate = $reservation->getStartDate()->format("Y-m-d");
        $endDate = $reservation->getEndDate()->format("Y-m-d");
        echo "Room <strong>" . $roomNumber . "</strong> successfully booked for <strong>" . $guestName . "</strong> from <time>" . $startDate . "</time> to <time>"  . $endDate . "</time>!";
    }
}

?>

