<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       function armstrong($n)
        {
            $num=$n;$sum=0;$div=100;
             while($div>=1)
             {
                $d=floor($n/$div);
                $sum+=$d*$d*$d;                
                //echo $sum."<br>";
                $n=$n%$div;
                $div=$div/10;
                //echo $n."<br>";
                // put your code here
             }
             if($num==$sum)
                 echo "armstrong number";
             else {
                echo "not a armstrong number"; 
             }
        }
        echo armstrong(153)."<br>";
        echo armstrong(134)."<br>";
        // put your code here
        ?>
    </body>
</html>
