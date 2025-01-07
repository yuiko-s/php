<?php
$people = [
  [
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];
foreach($people as $person => $name){
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'.  '<br />';
}
