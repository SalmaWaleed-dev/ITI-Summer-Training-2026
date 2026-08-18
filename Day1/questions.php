<!-- // QU 1

<!-- <?php

echo "Welcome to php";

?> -->

<!-- // QU 2 -->

 <!-- <?php

$x = 5;
$y = "Welcome";
$z = true;

?> -->

<!-- // QU 3 -->

<!-- <?php

$x = 5;
$y = "Welcome";
$z = true;

echo gettype($x);
echo "<br>";

echo gettype($y);
echo "<br>";

echo gettype($z);

?> -->

<!-- // QU 4 -->

<!-- ---------------------- for--- -------------->

<!-- <?php

for ($i = 0; $i <= 15; $i++) {
    echo $i . "<br>";
}

?> -->

<!-- ---------------------- while --------------- -->
<!-- <?php

$i = 0;

while ($i <= 15) {
    echo $i . "<br>";
    $i++;
}

?> -->

<!-- // QU 5 -->

<!-- <?php

define("ITI", "ITI");

echo ITI;

?> -->

<!-- // QU 6 -->

<!-- <?php

$x = 5;
$y = "Welcome";
$z = true;

echo "Type of x: " . gettype($x) . "<br>";
echo "Type of y: " . gettype($y) . "<br>";
echo "Type of z: " . gettype($z) . "<br>";

?> -->

<!-- // QU 7 -->

<!-- <?php

$x = 5;
$y = "Welcome";
$z = true;

var_dump(isset($x));
var_dump(isset($y));
var_dump(isset($z));

?> -->

<!-- // QU 8 -->

<!-- <?php

$x = 5;
$y = "Welcome";
$z = true;

var_dump(empty($x));
var_dump(empty($y));
var_dump(empty($z));

?> -->

<!-- // QU 9 -->

<!-- <?php

$m = 30;
$n = 25;

$result = $m + $n;

if ($result > 50) {
    echo "Accepted";
} else {
    echo "Not accepted";
}

?> -->

<!-- // QU 10 -->

<!-- <?php

$name = "Basmala";
$age = 20;
$city = "Menofia";

echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>City</th>";
echo "</tr>";

echo "<tr>";
echo "<td>$name</td>";
echo "<td>$age</td>";
echo "<td>$city</td>";
echo "</tr>";

echo "</table>";

?> -->

<!-- // QU 11 -->
<!-- 
<?php

$num = 123;

$str = (string)$num;

echo $str;

?>  -->