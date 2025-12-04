<?php
function CalculateVehicles(int $countOfPassengers): int
{
    $capacityPerVehicle = 5;
    return (int) ceil($countOfPassengers / $capacityPerVehicle);
}

echo CalculateVehicles(1).'<br>';   // Output: 1
echo CalculateVehicles(5).'<br>';   // Output: 1
echo CalculateVehicles(6).'<br>';   // Output: 2
echo CalculateVehicles(13).'<br>';  // Output: 3
echo CalculateVehicles(14).'<br>';  // Output: 3
echo CalculateVehicles(15).'<br>';  // Output: 3
echo CalculateVehicles(16).'<br>';  // Output: 4
echo CalculateVehicles(17).'<br>';  // Output: 4
echo CalculateVehicles(18).'<br>';  // Output: 4
echo CalculateVehicles(19).'<br>';  // Output: 4
echo CalculateVehicles(20).'<br>';  // Output: 4
echo CalculateVehicles(21).'<br>';  // Output: 5
echo CalculateVehicles(22).'<br>';  // Output: 5
