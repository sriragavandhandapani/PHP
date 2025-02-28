<?php

$flights = array(
    101 => array('flight_name' => 'Airline A', 'seats' => 10),
    102 => array('flight_name' => 'Airline B', 'seats' => 5),
    103 => array('flight_name' => 'Airline C', 'seats' => 3),
);

$flightNumber = 101;

if (isset($flights[$flightNumber])) {
    if ($flights[$flightNumber]['seats'] > 0) {
        $flights[$flightNumber]['seats'] -= 1;
        echo "Booking Flight $flightNumber:\n";
        echo "                                                                                                                                                                   ";
        echo "Flight $flightNumber booked successfully\n";
    } else {
        echo "Sorry, no seats available on Flight $flightNumber\n";
    }
} else {
    echo "Invalid Flight Number!\n";
}

?>
