<?php


$data = file_get_contents('./input');



$data = explode('
', $data);


// print_r(count($data));


$elves = [];

$i = 0;
foreach ($data as $calorie) {

    if ($calorie == '') {
        $i++;
        continue;
    }

    $elves[$i][] = $calorie;
}

print('# of elves: ' . $i . PHP_EOL);


$highestElf = '';

$secondElf = '';

$thirdElf = '';

$elfTotals = [];

foreach ($elves as $elf => $calories) {

    $total = 0;
    foreach ($calories as $fruit) {
        $total = $total + $fruit;
    }
    $elfTotals[] = $total;

    $highestElf = $total > $highestElf ? $total : $highestElf;

    // logic is wrong
    // $secondElf = ($total > $secondElf && $total < $highestElf) ? $total : $secondElf;
    // $thirdElf = ($total > $thirdElf && $total < $secondElf) ? $total : $thirdElf;
}

print_r('highest elf: ' . $highestElf . PHP_EOL);

// print_r('second elf: ' . $secondElf . PHP_EOL);
// print_r('third elf: ' . $thirdElf . PHP_EOL);
// print('elf total: ' . $highestElf + $secondElf + $thirdElf . PHP_EOL);


// sort array
rsort($elfTotals);

print_r(PHP_EOL);
print_r('highest elf: ' . $elfTotals[0] . PHP_EOL);
print_r('second elf: ' . $elfTotals[1] . PHP_EOL);
print_r('third elf: ' . $elfTotals[2] . PHP_EOL);


print_r('Total of three: ' . $elfTotals[0] + $elfTotals[1] + $elfTotals[2] . PHP_EOL);
