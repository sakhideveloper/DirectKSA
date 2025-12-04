<?php
$arrayOfObjects = [
    [
        "id" => 1,
        "name" => "John",
        "age" => "20",
    ],
    [
        "id" => 2,
        "name" => "Jane",
        "age" => "21",
    ],
    [
        "id" => 3,
        "name" => "Jim",
        "age" => "22",
    ],
];

//Sort by age descending
function sortByAgeDesc(array $arrayOfObjects): array
{
    usort($arrayOfObjects, function ($a, $b) {
        return (int)$b['age'] <=> (int)$a['age']; // descending
    });
    return $arrayOfObjects;
}

$sorted = sortByAgeDesc($arrayOfObjects);
print_r($sorted).'<br>';

//Return array of ages
function getAges(array $arrayOfObjects): array
{
    return array_map(fn($item) => (int)$item['age'], $arrayOfObjects);
}

// Usage
$ages = getAges($arrayOfObjects);
print_r($ages).'<br>';

//Convert ages of $arrayOfObjects into array key
function convertToArrayWithAgeKey(array $arrayOfObjects): array
{
    $result = [];
    foreach ($arrayOfObjects as $item) {
        $result[$item['age']] = $item;
    }
    return $result;
}

// Usage
$arrayByAge = convertToArrayWithAgeKey($arrayOfObjects);
print_r($arrayByAge).'<br>';