<?php
if (isset($_GET['length']) && isset($_GET['width'])) {
  $length = $_GET['length'];
  $width = $_GET['width'];

  $area = $length * $width;
  $perimeter = 2 * ($length + $width);

  echo "<p>The area is: $area</p>";
  echo "<p>The perimeter is: $perimeter</p>";
} else {
  echo "<p>Please enter valid values.</p>";
}
