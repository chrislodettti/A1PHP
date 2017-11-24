<?php
session_start();
  if(isset($_POST)  &&
      $_POST['cajas']>0 &&
      $_POST['cajas']<10)
      {
        echo '<form action="info.php" method="post"><table>';
        $_SESSION['num'] = $_POST['cajas'];
        for ($i=0; $i < $_SESSION['num'] ; $i++)
        {
          echo "<tr><td><input type='text' name='caja_".$i."' placeholder='Introduce los datos'></td></tr>";
        }
        echo '</table><input autocomplete="off" type="submit" name="" value="Enviar"></form>';
      }
      else
      {
        header("Location:/A1/3");
      }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>3 nombre repetits </title>
   </head>
   <body>



   </body>
</html>
