<?php
?>
<!doctype html>
<html lang="en" xml:lang="en">
  <head>
    <title></title>
  </head>
  <body>


  <form action="" method="post">
      X: <input type="text" name="X"><br>
      Y: <input type="text" name="Y"><br>
      <input type="submit" value="KREIRAJ TABLICU">
  </form>

  <table >
      <link rel="stylesheet" href="stylesheet.css">
      <tbody>
  <?php



  printSpiral($_POST['X']);


function printSpiral($n)
{
    for ($i = 0; $i < $n; $i++)
    {


        for ($j = 0; $j < $n; $j++)
        {




            $x = min(min($i, $j), min($n - 1 - $i,
                $n - 1 - $j));



            if ($i <= $j) {
$var1=(($n*$n)+1)-(($n - 2 * $x) * ($n - 2 * $x) - ($i - $x) - ($j - $x));
                echo "<html><td>$var1</td></html>";
            }

            else {

                $var2=(($n*$n)+1)-(($n - 2 * $x - 2) * ($n - 2 * $x - 2) + ($i - $x) + ($j - $x));
                echo "<html><td>$var2</td></html>";
            }
        }
        echo "<html><tr></tr></html>";
    }
}



  ?>
      </tbody>
  </table>


  </body>
</html>