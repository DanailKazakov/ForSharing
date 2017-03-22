<?php

$limit = $_GET["limit"];
$withdrawals = array();

array_push($withdrawals, $_GET["firstW"], $_GET["secondW"], $_GET["thirdW"]);

$counter = count($withdrawals);

$sum = 0;
$commissions = 0;

for ($i = 0; $i<$counter; $i++){
    $sum += $withdrawals[$i];
    if ($sum > $limit){
        $commissions += 0.003 * $withdrawals[$i];
    }
}

echo "Account limit is set to " . $limit . ". Total money withdrawn is " . $sum . ". Total commissions collected " . $commissions . ".";