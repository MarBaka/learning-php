<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="мой сайт, тестирование веба">
  <title> testing field </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <br>
  <br>
  <br>
  <!-- Testing if it is possible to use php inside html blocks -->
  <table border="2">

    <thead>
      <tr>
        <th colspan="2">
          <?php
          echo "<h1>some random txt</h1>";
          ?>
        </th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>
          <?php
          echo strtolower("THIS IS PHP!!!!");
          ?>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- Trying out actual php in it's simplest forms -->

  <?php

  //this is a constant and it is used after the rand() section
  define("THREE_NAMES", ["Marat", "Bayel", "Iskender"]);
  define("FIVE_NUMS", [1, 2, 3, 4, 5]);

  $phrase_mike = "Mike is a capitan of KR Teyvat guild which is located in Genshin Impact fictional world";
  echo $phrase_mike;

  echo strtoupper($phrase_mike), "The length of the phrase is: ", strlen($phrase_mike), "<br>",
  "And the first letter of the phrase is ", $phrase_mike[0], "<br>";

  // flex
  echo "Now let's make something interesting: <br>
  1) this is our string - ", $phrase_mike, "<br>
  2) this is version B of our sting - ", str_replace("g","jij",$phrase_mike), "<br>
  3) this is version C of our string - ", str_ireplace("g","jij",$phrase_mike), "<br>
  4) this is the word count of our original string - ", str_word_count($phrase_mike), "<br>
  5) ", strrev("this is our string - " . $phrase_mike), "<br>";

  //using substr

  echo "You want more data? <br>
  Fine. <br>";

  echo "Mike's gf is also a ", substr($phrase_mike, 9), "<br>";
  echo "I even know which character does your location mentioned in the string begin with. <br>
  It is: ", strpos($phrase_mike, "Teyvat")+1, "<br>";

  echo "btw, the length of the original phrase is: ".strlen($phrase_mike)." stay nice and positive UwU<br>";

  echo "<br>";
  $a = var_dump($phrase_mike);
  echo $a."<br>";

  //checking the is_numeric function
  $aNumericValue = "124";
  $aNotNumericValue = "Guten Tag";

  if (is_numeric($aNumericValue)) {
    echo "This is a Success <br>";
  }
  if (is_numeric($aNotNumericValue) == false) {
    echo "This is a second success <br>";
  }

  echo "<br>";

  //trying out min() and max() functions
  $array_with_nums = [1, 353, 6565, -214, 43, 235, -345, 452];
  echo json_encode($array_with_nums)."<br>";
  // echo "showing range of this array " . $array_with_nums_to_string . ": ";

  if (min($array_with_nums) != 0) {
    echo (max($array_with_nums)-min($array_with_nums)), "<br>";
  } else {
    echo "WRONG DATA INPUT <br>";
  }
  echo "<br>";

  //turns out rand() function needs exaclty 2 arguments and here is an example of getting a random array element
  echo "testing the random function: " . $array_with_nums [rand(0, count($array_with_nums))] . "<br>";

  //checking the difference between (int) and round()
  $float_num1 = 24.1;
  $float_num2 = 0.9;
  echo "We have these numbers: " . $float_num1 . ", " . $float_num2 . "<br>";
  echo "Rounding them using round(): " . round($float_num1) . ", " . round($float_num2) . "<br>";
  echo "Rounding them using (int): " . (int)$float_num1 . ", " . (int)$float_num2 . "<br>";

  //using the constant

  echo "The creator of this whole thing is " . THREE_NAMES[0] . "<br>";

  //Testing == and ===

  $three_int = 3;
  $three_float = 3.0;

  if ($three_int == $three_float) {
    echo "the == says they're equal";
  }
  echo "<br>";

  if ($three_int === $three_float) {
    echo "the === says they're identical";
  } elseif ($three_int !== $three_float) {
    echo "the !== says they're not identical";
  }
  echo "<br>";

  //Trying the switch operator

  switch ($three_int) {
    case $three_float:
    echo "The switch/case operator says 3 == 3.0";
    break;

    default:
    echo "urpp2smol";
    break;
  }
  echo "<br>";

  //Using loops

  $counting_var = 1;

  while ($counting_var < 5) {
    echo "counting_var equals to $counting_var and is lower than 5 <br>";
    $counting_var++;
  }

  do {
    $counting_var--;
    echo "jij <br>";
  } while ($counting_var > 6);
  echo "counting_var is equal to $counting_var at the end of the loop <br>";

  for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }
  echo "end of for loop <br>";



  function swapvalue ($key_a, $a, $key_b, $b){
    return [$key_a => $b, $key_b => $a];
  }


  // an initially-supposed-to-be-little exercise to sort an array
  $sorting_array = [1, 2, -1, -2, 3, -3];
  echo "<br> Array before sorting: ";
  print_r($sorting_array);
  echo "<br>";
  foreach ($sorting_array as $key => $value) {
    foreach ($sorting_array as $k => $v) {
      if ($v > $sorting_array[$k+1]) {
        $data_holder = swapvalue($k, $v, $k+1, $sorting_array[$k+1]);
        unset($sorting_array[$k]);
        unset($sorting_array[$k+1]);
        array_push($sorting_array, $data_holder);
      }
    }
  }
  echo "Array after sorting: ";
  print_r($sorting_array);
  echo "<br>";






  // $correct_solves = 0;
  //
  // foreach ($sorting_array as $key => $value) {
  //
  //   if ($correct_solves == 0) {
  //     echo "<br> Hi!, this is the first loop! <br> ";
  //     $correct_solves ++;
  //     continue;
  //   }
  //
  //   $element_key = 0; // key used for value after sorting
  //
  //   //s_ stands for sorted_
  //   foreach (array_slice($sorting_array, 0, $correct_solves) as $s_key => $s_value) {
  //
  //     if ($value == null){
  //       echo"wtf";
  //     } else {
  //       echo "the value is equal to " . $value;
  //     }
  //
  //     if ($value > $s_value or $element_key == 0) {
  //       $element_key++;
  //     } elseif ($value <= $s_value) {
  //       $data_holder1 = array_slice($sorting_array, $s_key);
  //       unset($data_holder, $value);
  //       unset($sorting_array, $data_holder);
  //       $sorting_array[] = $value;
  //       $sorting_array += $data_holder1;
  //       break;
  //     }
  //
  //     echo "<br> next iteration after comleting the first half of nested foreach is: ";
  //     print_r($sorting_array);
  //
  //     if ($value > $sorting_array[$element_key-1] && $value <= $sorting_array[$element_key]) {
  //       $data_holder = array_slice($sorting_array, $element_key);
  //       $sorting_array = array_slice($sorting_array, 0, $element_key-1);
  //
  //       $sorting_array[] = $value;
  //       $sorting_array += $data_holder;
  //       $correct_solves++;
  //       break;
  //     }
  //
  //   }
  // }

  echo"<br>";
  print_r($sorting_array);

  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";

  ?>
</body>
</html>
