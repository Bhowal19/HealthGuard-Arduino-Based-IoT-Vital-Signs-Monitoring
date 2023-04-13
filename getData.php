<?php
// Open the serial port
$port = fopen("COM5", "r");

// Wait for data to become available on the serial port
while (!flock($port, LOCK_SH | LOCK_NB)) {
  usleep(100000); // Wait for 100ms
}

// Read the data from the serial port
$data = fgets($port);

// Unlock the file
flock($port, LOCK_UN);

// Close the serial port
fclose($port);

// Generate the table row
$row = "<tr>";
$row .= "<td>" . date('Y-m-d H:i:s') . "</td>";
$row .= "<td>" . $data . "</td>";
$row .= "</tr>";

// Output the table row
echo $row;
?>
