<!-- 2. Define a PHP function called "calculateCircleArea" that takes the radius of a circle
as a parameter and returns its area. Test this function with various radius values. -->

<?php
function calculateCircleArea($radius,$pie) {
    $area = $pie*$radius*2;
    return $area;
}
echo "Area of Circle =". calculateCircleArea(2,3.14) . "<br>";
echo "Area of Circle =". calculateCircleArea(3,3.14) . "<br>";
echo "Area of Circle =". calculateCircleArea(4,3.14) . "<br>";
echo "Area of Circle =". calculateCircleArea(5,3.14) . "<br>";
echo "Area of Circle =". calculateCircleArea(6,3.14) . "<br>";
echo "Area of Circle =". calculateCircleArea(7,3.14) . "<br>";
echo "Area of Circle =". calculateCircleArea(8,3.14) . "<br>";
echo "Area of Circle =". calculateCircleArea(3,3.14);
?>