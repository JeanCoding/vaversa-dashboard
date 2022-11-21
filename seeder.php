<?php

require_once 'vendor/autoload.php';

use RedBeanPHP\R as R;

$userData = [
    [
        'username' => 'test-user',
        'password' => 'wachtwoord',
    ], 
];

$plantsData = [
    [
        'name' => 'peterselie',
        'description' => 'Dit is een description van peterselie',
        'identifier' => 12345,
    ], 
];

$refillData = [
    [
        'plants_id' => 1,
        'start_time' => date("Y/m/d/h:i:s"),
        'end_time' => date("Y/m/d/h:i:s"),
        'identiefier' => 12345,
    ], 
];


R::setup('mysql:host=localhost;dbname=vaversa', 'bit_academy', 'bit_academy');

$userRecords = 0;
$plantRecords = 0;
$refillRecords = 0;

foreach ($userData as $users) {
    $user = R::dispense('users');
    $user->username = $users['username'];
    $user->password = password_hash($users['password'], PASSWORD_BCRYPT);
    R::store($user);
    $userRecords++;
} 

echo "$userRecords users inserted!\n";


foreach ($plantsData as $plants) {
    $plant = R::dispense('plants');
    $plant->name = $plants['name'];
    $plant->description = $plants['description'];
    $plant->identifier = $plants['identifier'];
    R::store($plant);
    $plantRecords++; 
}

echo "$plantRecords match records inserted!\n";

foreach ($refillData as $refills) {
    $refill = R::dispense('refills');
    $refill->plants_id = $refills['plants_id'];
    $refill->start_time = $refills['start_time'];
    $refill->end_time = $refills['end_time'];
    R::store($refill);
    $refillRecords++; 
}

echo "$refillRecords match records inserted!\n";


