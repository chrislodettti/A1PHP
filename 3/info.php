<?php
session_start();
if (isset($_POST) &&
    !empty($_SESSION['num']))
    {
        $cajas = 0;
        $datos = array();
        $val = array();
        for($i=0;$i<$_SESSION['num'];$i++)
        {
          array_push($val,$_POST['caja_'.$i]);
          if($_POST['caja_'.$i]=='')
          {
            $cajas++;
          }
        }
        $cajas = $_SESSION['num'] - $cajas;
        sort($val);
        echo '<p>Se han llenado '.$cajas.' cajas</p>';
        echo '<p>Se introdujo los siguientes datos</p>';
        foreach ($val as $key => $value) {
          echo $value.' , ';
        }
       $valor = 1;
       for ($x=0;$x<count($val);$x++)
       {
         if($val[$x]!='')
         {
           if($val[$x]==$val[$x+1])
           {
             while($val[$x]==$val[$x+1])
             {
                $x++;
                $valor++;
             }
             array_push($datos,'<p>El dato '.$val[$x].', '.$valor.' veces se repite.<p>');
             $valor = 1;
           }
         }
       }
       if(count($datos)!=0)
       {
         echo '<p>Se acaba de repetido lo siguiente datos</p>';
         foreach ($datos as $key => $value)
         {
           echo $value;
         }
        }
        else {
          echo '<p>3 nombre repetits</p>';
        }
      };
 ?>
