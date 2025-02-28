<?php

$employees = array(
    'Alice',
    'Bob',
    'Charlie',
    'Diana'
);

$shifts = array(
    'Morning' => 8,
    'Afternoon' => 8,
    'Night' => 8
);

$assignments = array();

foreach ($employees as $employee) {
    $shiftKey = array_rand($shifts);
    $assignedShift = $shifts[$shiftKey];

    $assignments[$employee] = array(
        'shift' => $shiftKey,
        'working_hours' => $assignedShift
    );
}
echo " Assigned Shifts: ";
foreach ($assignments as $employee => $details) {
    echo "Employee: " . $employee . " - Shifts: " . $details['shift'] . " - Hours: " . $details['working_hours'] . "\n";
}

?>
