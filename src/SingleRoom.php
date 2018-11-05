<?php namespace Nfq;

class SingleRoom extends Room {
    private $roomType = "Standard";
    private $hasRestroom = true;
    private $hasBalcony = false;
    private $bedCount = 1;
    private $roomNumber;
    private $extras = Array("TV", "air-conditioner");
    private $price;
}

?>