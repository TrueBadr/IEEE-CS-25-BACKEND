<?php
$friends =
    [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "NG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];
$result =
    [
        [
            strtolower("AG") => $friends["AG"],
            strtolower("OM") => $friends["OM"]
        ],
        [
            strtolower("NG") => $friends["NG"],
            strtolower("AS") => $friends["AS"]
        ],
        [
            strtolower("FA") => $friends["FA"],
            strtolower("SM") => $friends["SM"]
        ]
];
print_r($result);
?>
