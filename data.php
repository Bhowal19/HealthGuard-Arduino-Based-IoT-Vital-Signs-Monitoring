<?php
$serial_port = '/dev/ttyACM0'; // Change to the serial port of your Arduino
$serial_baudrate = 9600;

$handle = fopen($serial_port, 'r');
if (!$handle) {
  die('Cannot open serial port');
}

$data = fgets($handle);
fclose($handle);

$data = explode(',', $data);

echo '<tr><td>Timestamp</td><td>' . date('Y-m-d H:i:s') . '</td></tr>';
echo '<tr><td>Data</td><td>' . $data[0] . '</td></tr>';
?>
