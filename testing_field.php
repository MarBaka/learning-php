<!DOCTYPE html>
<!-- path for after localhost
/www/testing_field.php?name=Marat -->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="мой сайт, тестирование веба">
  <title> testing field </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php
        echo "Hello! <br> 
        My name is " . $_GET['name'] . ", and this is my <u>testing field</u> for different aspects of PHP, HTML and CSS<br>
        The file will update often and have things deleted or moving around <br>
        <em>Might also include JS in the future, who knows?)</em>";
         ?>
    </header>
<br>
<br>
<br>
<?php
  // an initially-supposed-to-be-little exercise to sort an array
  $sorting_array = [1, 2, -1, -2, 3,412, -256,2.23, -32,0];
  echo "<br> Array before sorting: ";
  print_r($sorting_array);
  echo "<br>";

  for ($iteration=0; $iteration < count($sorting_array); $iteration++) {
    for ($i=0; $i < count($sorting_array); $i++) {
      if ($i < count($sorting_array)-1) {
        if ($sorting_array[$i] > $sorting_array[$i+1]) {
          $data_holder = $sorting_array[$i+1];
          $sorting_array[$i+1] = $sorting_array[$i];
          $sorting_array[$i] = $data_holder;

        }
      }
    }
  }


  //fun with functions
  function swapvalue ($key_a, $a, $key_b, $b){
    return [$key_a => $b, $key_b => $a];
  }

  function magictrick (&$a) {
    $a = "jij";
  }

  $result_of_many_calcs = 12.3;
  magictrick($result_of_many_calcs);
  echo $result_of_many_calcs;
  //fun is over

  echo "<br>";

  $md_arr = array(["Marat", "#dbdad3", "JoJo"], ["Bayel", "black", "Naruto"], ["Isken", "#dbdad3", "One piece"]);
  for ($i=0; $i < count($md_arr); $i++) {
    echo "<p style=color:".strval($md_arr[$i][1]).">Name: ".strval($md_arr[$i][0]).", favorite anime: ".strval($md_arr[$i][2])."</p><br>";
  }

  //an using sorting function

  $list_of_names = "Enter name #1: Jason; Enter name #2: Mark; Enter name #3: Alex; Enter name #4: Chris; Enter name #5: John";
  $lines = explode(";", $list_of_names);
  $names = [];
  for ($i=0; $i < count($lines); $i++) {
    $names[] = explode(":", $lines[$i])[1];
  }
  asort($names);
  $names = array_values($names);
  print_r ($names);
  echo "<br>";
  echo "Input: $list_of_names <br>";
  for ($i=0; $i < count($names); $i++) {
    echo "name #" . strval($i+1) . ": " . $names[$i] . "<br>";
  }



  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
?>
</body>
</html>
