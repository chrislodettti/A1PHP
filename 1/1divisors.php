<?php
//isset Determina si está definida y no es null.
//empty Determina si una variable está vacía o no.
if(isset($_POST)&& !empty($_POST['numero']))
    {
      $divisor = array();
      $num=1;
      //round redondea un float .....
      //Sera 1 porque todos los numeros son divisores de 1
      for($i=1;$i != round($_POST['numero'] / 2 +1);$i++)
      {
        if($_POST['numero'] % $i == 0)
        {
          $divisor[$num] = $i;
          $num++;
        }
      }
      $divisor[$num] = $_POST['numero'];
      echo "El divisor de ".$_POST['numero']." son: ";

      foreach ($divisor as $key => $value) {
        echo $value."<br>";
      }
    }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>1 divisores</title>
   </head>
   <body>
     <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
       <p>Introduce el numero para ver los diviores y luego pulsa intro :</p>
      <p><input type="text" name="numero" placeholder="Introduce el numero a calcular"></p>
     </form>
   </body>
</html>
