<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE_1</title>
</head>
<body>
  <form action="" method="post">
  <div class="nombre">
    <label for="">Number</label><input type="text" name="number" placeholder="entrer un nombre svp"/>
   <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
 if(isset($_POST['btnok']))
  { 
    $day=$_POST['number'];
    if($day==null){
    echo 'Veillez renseigner une note svp';

    }
    else{
      switch($day){
      case 1:
        echo 'Lundi';
          break;
      case 2:
        echo'Mardi';
          break;
      case 3:
        echo'Mercredi';
          break;
      case 4:
          echo'Jeudi';
          break;
      case 5:
          echo'Vendredi';
          break;
      case 6:
          echo'Samedi';
          break;
      case 7:
          echo'Dimanche';
          break;
      default:
        echo 'ce nombre est invalide';
      }
     
    }
  }
?>
 
</body>
</html>