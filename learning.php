<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="мой сайт, тестирование веба">
    <title> $$$ ТАЙТЛ $$$ </title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <table>
       <!-- This is declating what parts do what -->
      <thead>
        <tr>
          <th>PHP</th>
          <th>HTML, no code</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td class="code-part">
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
            } while ($counting_var < 6);
            echo "counting_var is equal to $counting_var at the end of the loop";

             ?>

          </td>


      <td class ="no-code-part">
        <h1> Это заголовок 1 </h1>
        <p id="defaultid"><em><b>Это абзац текста</b> и он написан <br> под </em>заголовком 1</p>

        <h2>Это заголовок 2</h2>
        <p style="color:red">Это уже абзац текста, написанный под вторым заголовком, и содержащий
        <a href="https://www.google.com" target="_blanks">ссылку</a>
        </P>
        <ul class="list-of-things">
        <li>Первый объект</li>
        <li><b><em><a href="https://plarium.com/ru/game/raid-shadow-legends/" target="_blank">
          Это улучшенный объект, являющийся также вторым в списке
        </em></b></li></a>
        <li>
          <ul>
            <li>Элемент второго уровня</li>
            <li>Второй элемент второго уровня</li>
          </ul>
        </ul>ы


        <a href="https://trollface.dk/">
        <img src="https://i.redd.it/udt0nfc0gtb71.jpg" width="400" alt="rainbow 2 image" border="5">
        </a>

        <table border="5" class="prime-table">
        <tbody>
          <tr>
            <td>
              Ваше впечатление от увиденного на этой странице:
              <input type="text" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <em>поскольку автор и единоличный владелец сайта еще
              не освоил технологии сохранения данных на сервере, или какие либо
              другие техники работы с данными, вводимые вами данные полностью защищены</em>
            </td>
          </tr>
        </tbody>
        </table>
        <hr>
        <table border="2" class="prime-table">
        <thead>
          <tr>
            <th>
              Название фрукта
            </th>
            <th>
              Количество
            </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              Fruit
            </td>
            <td>
              "{pro_english_number}"
          </tr>
          <tr>
            <td>
              Апельсин
            </td>
            <td>
              2
            </td>
          </tr>
        </tbody>

        <tfoot>

          <tr>
            <td colspan="2" class="doubleCell">
              Итого 5
            </td>
        </tfoor>
        </table>
        <hr>
        <table border="2" class="list-table" id="first-list-table">
        <thead>
          <th colspan="3">Первая таблица</th>
          <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Класс</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Байэл</td>
            <td>Ашырбаев</td>
            <td>11-Е</td>
          </tr>
          <tr class="creators-cell">
            <td>Марат</td>
            <td>Бакасов</td>
            <td>11-Е</td>
          </tr>
          <tr class="fem">
            <td>Жизагуль</td>
            <td>Омурбековна</td>
            <td>1-Ы</td>
          </tr>
          <tr>
            <td>Гатс</td>
            <td>Берсеркович</td>
            <td>64-Вайфу</td>
          </tr>
        </tbody>
        </table>
        <hr>
        <table border="2" class="list-table">
        <thead>
          <tr>
            <th colspan="3">Вторая таблица</th>
          </tr>
          <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Класс</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Байэл</td>
            <td>Ашырбаев</td>
            <td>11-Е</td>
          </tr>
          <tr class="creators-cell">
            <td>Марат</td>
            <td>Бакасов</td>
            <td>11-Е</td>
          </tr>
          <tr class="fem">
            <td>Жизагуль</td>
            <td>Омурбековна</td>
            <td>1-Ы</td>
          </tr>
          <tr class="fem">
            <td>Гатс</td>
            <td>Берсерковна</td>
            <td>64-Вайфу</td>
          </tr>
        </tbody>
        </table>
        <hr>
      <table border="2" class="list-table women-table">
        <thead>
          <tr>
            <th colspan="3">
              Вайфу-лист
            </th>
          </tr>
          <tr>
            <th>Имя</th>
            <th>Тип</th>
            <th>Баллы</th>
          </tr>
        </thead>
        <tbody class="women-tbody">
          <tr class="fem">
            <td>Айназик</td>
            <td>Пассив</td>
            <td>15</td>
          </tr>
          <tr class="fem">
            <td>Амина</td>
            <td>Актив</td>
            <td>17</td>
          </tr>
          <tr class="fem">
            <td>Аделина</td>
            <td>Актив</td>
            <td>14</td>
          </tr>
          <tr class="fem">
            <td>Руслана</td>
            <td>Пассив</td>
            <td>13</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tbody>
  </table>
  </body>
</html>
