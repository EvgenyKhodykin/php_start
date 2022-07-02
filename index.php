<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практика PHP</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>

    <?php  // Объявим переменные // ?>

   <?php
   $var1 = 1;
   $var2 = 0;
   $varTrue = true;
   $varFalse = false;
   $varOne = 1;
   $varZero = 0;
   $varMinusOne = -1;
   $varStringOne = "1";
   $varNull = null;
   $varStringPhp = "php";
   ?>
         
    <?php  // Таблица истинности // ?>

    <p>Таблица истинности PHP</p>

    <table>
        <tr class="header">
         <td>A</td>
         <td>B</td>
         <td>!A</td>
         <td>A || B</td>
         <td>A && B</td>
         <td>A xor B</td>
        </tr>
        <tr>
         <td> <?php echo $var2 ?> </td>
         <td> <?php echo $var2 ?> </td>
         <td> <?php echo var_dump(!$var2) ?></td>
         <td> <?php echo var_dump($var2 || $var2)?> </td>
         <td> <?php echo var_dump($var2 && $var2)?> </td>
         <td> <?php echo var_dump($var2 xor $var2)?> </td>
       </tr>
       <tr>
        <td> <?php echo $var2 ?> </td>
        <td> <?php echo $var1 ?> </td>
        <td> <?php echo var_dump(!$var2) ?> </td>
        <td> <?php echo var_dump($var2 || $var1)?> </td>
        <td> <?php echo var_dump($var2 && $var1)?> </td>
        <td> <?php echo var_dump($var2 xor $var1)?> </td>
      </tr>
      <tr>
        <td> <?php echo $var1 ?> </td>
        <td> <?php echo $var2 ?> </td>
        <td> <?php echo var_dump(!$var1) ?> </td>
        <td> <?php echo var_dump($var1 || $var2)?> </td>
        <td> <?php echo var_dump($var1 && $var2)?> </td>
        <td> <?php echo var_dump($var1 xor $var2)?> </td>
      </tr>
      <tr>
        <td> <?php echo $var1 ?> </td>
        <td> <?php echo $var1 ?> </td>
        <td> <?php echo var_dump(!$var1) ?></td>
        <td> <?php echo var_dump($var1 || $var1)?> </td>
        <td> <?php echo var_dump($var1 && $var1)?> </td>
        <td> <?php echo var_dump($var1 xor $var1)?> </td>
      </tr>
    </table>

    <?php  // Таблица гибкого сравнения // ?>

    <br/>
    <p>Таблица гибкого сравнения PHP</p>
   
    <table>
        <tr class="header">
         <td></td>
         <td>true</td>
         <td>false</td>
         <td>1</td>
         <td>0</td>
         <td>-1</td>
         <td>"1"</td>
         <td>null</td>
         <td>"php"</td>
        </tr>
        <tr>
         <td class="header">true</td>
         <td> <?php echo var_dump($varTrue==$varTrue)?> </td>
         <td> <?php echo var_dump($varTrue==$varFalse)?> </td>
         <td> <?php echo var_dump($varTrue==$varOne)?> </td>
         <td> <?php echo var_dump($varTrue==$varZero)?> </td>
         <td> <?php echo var_dump($varTrue==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varTrue==$varStringOne)?> </td>
         <td> <?php echo var_dump($varTrue==$varNull)?> </td>
         <td> <?php echo var_dump($varTrue==$varStringPhp)?> </td>
         </tr>
        <td class="header">false</td>
         <td> <?php echo var_dump($varFalse==$varTrue)?> </td>
         <td> <?php echo var_dump($varFalse==$varFalse)?> </td>
         <td> <?php echo var_dump($varFalse==$varOne)?> </td>
         <td> <?php echo var_dump($varFalse==$varZero)?> </td>
         <td> <?php echo var_dump($varFalse==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varFalse==$varStringOne)?> </td>
         <td> <?php echo var_dump($varFalse==$varNull)?> </td>
         <td> <?php echo var_dump($varFalse==$varStringPhp)?> </td>
        </tr>
        <td class="header">1</td>
         <td> <?php echo var_dump($varOne==$varTrue)?> </td>
         <td> <?php echo var_dump($varOne==$varFalse)?> </td>
         <td> <?php echo var_dump($varOne==$varOne)?> </td>
         <td> <?php echo var_dump($varOne==$varZero)?> </td>
         <td> <?php echo var_dump($varOne==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varOne==$varStringOne)?> </td>
         <td> <?php echo var_dump($varOne==$varNull)?> </td>
         <td> <?php echo var_dump($varOne==$varStringPhp)?> </td>
        </tr>
        <td class="header">0</td>
         <td> <?php echo var_dump($varZero==$varTrue)?> </td>
         <td> <?php echo var_dump($varZero==$varFalse)?> </td>
         <td> <?php echo var_dump($varZero==$varOne)?> </td>
         <td> <?php echo var_dump($varZero==$varZero)?> </td>
         <td> <?php echo var_dump($varZero==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varZero==$varStringOne)?> </td>
         <td> <?php echo var_dump($varZero==$varNull)?> </td>
         <td> <?php echo var_dump($varZero==$varStringPhp)?> </td>
        </tr>
        <td class="header">-1</td>
         <td> <?php echo var_dump($varMinusOne==$varTrue)?> </td>
         <td> <?php echo var_dump($varMinusOne==$varFalse)?> </td>
         <td> <?php echo var_dump($varMinusOne==$varOne)?> </td>
         <td> <?php echo var_dump($varMinusOne==$varZero)?> </td>
         <td> <?php echo var_dump($varMinusOne==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varMinusOne==$varStringOne)?> </td>
         <td> <?php echo var_dump($varMinusOne==$varNull)?> </td>
         <td> <?php echo var_dump($varMinusOne==$varStringPhp)?> </td>
        </tr>
        <td class="header">"1"</td>
         <td> <?php echo var_dump($varStringOne==$varTrue)?> </td>
         <td> <?php echo var_dump($varStringOne==$varFalse)?> </td>
         <td> <?php echo var_dump($varStringOne==$varOne)?> </td>
         <td> <?php echo var_dump($varStringOne==$varZero)?> </td>
         <td> <?php echo var_dump($varStringOne==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varStringOne==$varStringOne)?> </td>
         <td> <?php echo var_dump($varStringOne==$varNull)?> </td>
         <td> <?php echo var_dump($varStringOne==$varStringPhp)?> </td>
        </tr>
        <td class="header">null</td>
         <td> <?php echo var_dump($varNull==$varTrue)?> </td>
         <td> <?php echo var_dump($varNull==$varFalse)?> </td>
         <td> <?php echo var_dump($varNull==$varOne)?> </td>
         <td> <?php echo var_dump($varNull==$varZero)?> </td>
         <td> <?php echo var_dump($varNull==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varNull==$varStringOne)?> </td>
         <td> <?php echo var_dump($varNull==$varNull)?> </td>
         <td> <?php echo var_dump($varNull==$varStringPhp)?> </td>
        </tr>
        <td class="header">"php"</td>
         <td> <?php echo var_dump($varStringPhp==$varTrue)?> </td>
         <td> <?php echo var_dump($varStringPhp==$varFalse)?> </td>
         <td> <?php echo var_dump($varStringPhp==$varOne)?> </td>
         <td> <?php echo var_dump($varStringPhp==$varZero)?> </td>
         <td> <?php echo var_dump($varStringPhp==$varMinusOne)?> </td>
         <td> <?php echo var_dump($varStringPhp==$varStringOne)?> </td>
         <td> <?php echo var_dump($varStringPhp==$varNull)?> </td>
         <td> <?php echo var_dump($varStringPhp==$varStringPhp)?> </td>
        </tr>
    </table>

    <?php  // Таблица жёсткого сравнения // ?>

    <br/>
    <p>Таблица жёсткого сравнения PHP</p>

    <table>
        <tr class="header">
         <td></td>
         <td>true</td>
         <td>false</td>
         <td>1</td>
         <td>0</td>
         <td>-1</td>
         <td>"1"</td>
         <td>null</td>
         <td>"php"</td>
        </tr>
        <tr>
         <td class="header">true</td>
         <td> <?php echo var_dump($varTrue===$varTrue)?> </td>
         <td> <?php echo var_dump($varTrue===$varFalse)?> </td>
         <td> <?php echo var_dump($varTrue===$varOne)?> </td>
         <td> <?php echo var_dump($varTrue===$varZero)?> </td>
         <td> <?php echo var_dump($varTrue===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varTrue===$varStringOne)?> </td>
         <td> <?php echo var_dump($varTrue===$varNull)?> </td>
         <td> <?php echo var_dump($varTrue===$varStringPhp)?> </td>
         </tr>
        <td class="header">false</td>
         <td> <?php echo var_dump($varFalse===$varTrue)?> </td>
         <td> <?php echo var_dump($varFalse===$varFalse)?> </td>
         <td> <?php echo var_dump($varFalse===$varOne)?> </td>
         <td> <?php echo var_dump($varFalse===$varZero)?> </td>
         <td> <?php echo var_dump($varFalse===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varFalse===$varStringOne)?> </td>
         <td> <?php echo var_dump($varFalse===$varNull)?> </td>
         <td> <?php echo var_dump($varFalse===$varStringPhp)?> </td>
        </tr>
        <td class="header">1</td>
         <td> <?php echo var_dump($varOne===$varTrue)?> </td>
         <td> <?php echo var_dump($varOne===$varFalse)?> </td>
         <td> <?php echo var_dump($varOne===$varOne)?> </td>
         <td> <?php echo var_dump($varOne===$varZero)?> </td>
         <td> <?php echo var_dump($varOne===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varOne===$varStringOne)?> </td>
         <td> <?php echo var_dump($varOne===$varNull)?> </td>
         <td> <?php echo var_dump($varOne===$varStringPhp)?> </td>
        </tr>
        <td class="header">0</td>
         <td> <?php echo var_dump($varZero===$varTrue)?> </td>
         <td> <?php echo var_dump($varZero===$varFalse)?> </td>
         <td> <?php echo var_dump($varZero===$varOne)?> </td>
         <td> <?php echo var_dump($varZero===$varZero)?> </td>
         <td> <?php echo var_dump($varZero===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varZero===$varStringOne)?> </td>
         <td> <?php echo var_dump($varZero===$varNull)?> </td>
         <td> <?php echo var_dump($varZero===$varStringPhp)?> </td>
        </tr>
        <td class="header">-1</td>
         <td> <?php echo var_dump($varMinusOne===$varTrue)?> </td>
         <td> <?php echo var_dump($varMinusOne===$varFalse)?> </td>
         <td> <?php echo var_dump($varMinusOne===$varOne)?> </td>
         <td> <?php echo var_dump($varMinusOne===$varZero)?> </td>
         <td> <?php echo var_dump($varMinusOne===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varMinusOne===$varStringOne)?> </td>
         <td> <?php echo var_dump($varMinusOne===$varNull)?> </td>
         <td> <?php echo var_dump($varMinusOne===$varStringPhp)?> </td>
        </tr>
        <td class="header">"1"</td>
         <td> <?php echo var_dump($varStringOne===$varTrue)?> </td>
         <td> <?php echo var_dump($varStringOne===$varFalse)?> </td>
         <td> <?php echo var_dump($varStringOne===$varOne)?> </td>
         <td> <?php echo var_dump($varStringOne===$varZero)?> </td>
         <td> <?php echo var_dump($varStringOne===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varStringOne===$varStringOne)?> </td>
         <td> <?php echo var_dump($varStringOne===$varNull)?> </td>
         <td> <?php echo var_dump($varStringOne===$varStringPhp)?> </td>
        </tr>
        <td class="header">null</td>
         <td> <?php echo var_dump($varNull===$varTrue)?> </td>
         <td> <?php echo var_dump($varNull===$varFalse)?> </td>
         <td> <?php echo var_dump($varNull===$varOne)?> </td>
         <td> <?php echo var_dump($varNull===$varZero)?> </td>
         <td> <?php echo var_dump($varNull===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varNull===$varStringOne)?> </td>
         <td> <?php echo var_dump($varNull===$varNull)?> </td>
         <td> <?php echo var_dump($varNull===$varStringPhp)?> </td>
        </tr>
        <td class="header">"php"</td>
         <td> <?php echo var_dump($varStringPhp===$varTrue)?> </td>
         <td> <?php echo var_dump($varStringPhp===$varFalse)?> </td>
         <td> <?php echo var_dump($varStringPhp===$varOne)?> </td>
         <td> <?php echo var_dump($varStringPhp===$varZero)?> </td>
         <td> <?php echo var_dump($varStringPhp===$varMinusOne)?> </td>
         <td> <?php echo var_dump($varStringPhp===$varStringOne)?> </td>
         <td> <?php echo var_dump($varStringPhp===$varNull)?> </td>
         <td> <?php echo var_dump($varStringPhp===$varStringPhp)?> </td>
        </tr>
    </table>
    <br>

    <p>Вывод: Налицо неявная типизация языка PHP. Таблица "мягкого" сравнения наглядно демонстрирует факт сравнения переменных разных типов. </p>

</body>
</html>