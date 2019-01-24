<?php
?>
<!doctype html>
<html lang="en" xml:lang="en">
  <head>
    <title>3. Zadaća</title>
  </head>
  <body>

<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>-->
<!---->
<br>
<br>
<br>
<div>
      <form action="" method="post">
          Broj redaka:<br> <input type="text" name="X"><br>
          Broj stupaca: <br><input type="text" name="Y"><br>
          <input type="submit" value="KREIRAJ TABLICU" class="btn btn-success">
      </form>
</div>




  <table>
      <link rel="stylesheet" href="stylesheet.css">
      <tbody>

  <?php

if(($_POST['X'])<=10)
{
  printSpiral($_POST['X']);
}
elseif(($_POST['X'])>10){
    echo "<script type='text/javascript'>alert('Unesite broj manji ili jednak 10')</script>";

    printSpiral(5);
}


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