<!-- index is main in html, php -->
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <title>Document</title>
</head>  
<body>

</body>
</html>
<?php
  echo "Hello ";
  $name = 'Davie';
  $hand_cash = [1,3,22,63,13];
  $fruits = array('hand', 'fingers', 'nuckes' , 'nales');

  //asossiate array = key value pair
  $colors = [
    1=>'yellow',
    2=>'blue',
    3=>'red'
  ];

  $person = [
    [
      'fname' => 'Kway',
      'lname' => 'ever',
      'email' => 'da@g.com',
    ],
    [
      'fname' => 'ever',
      'lname' => 'Kway',
      'email' => 'ad@g.com',
    ],
    [
      'fname' => 'Karo',
      'lname' => 'ev',
      'email' => 'd@g.com',
    ],
  ];

  echo $person[0]['fname'];
  //return count string and preson list 
  var_dump(json_encode($person));
  // echo " I have $hand_cash left"
  // var_dump($hand_cash);



