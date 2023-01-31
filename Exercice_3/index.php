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
    <label for="">Note</label><input type="text" name="marks" placeholder="entrer votre note svp"/>
   <input type="submit" value="OK" name="btnok">
  </div>
  <br>
  <br>
  </form>
  
<?php
 if(isset($_POST['btnok']))
  { 
    $mark=$_POST['marks'];
    if($mark==null){
    echo 'Veillez renseigner une note svp';

    }
    elseif( $mark >= 60 ){
    echo 'Grade will be first Division';
    }elseif(( $mark >=45 ) && ( $mark <= 59 )){
    echo 'Grade will be second Division';
    }elseif(($mark >= 33) &&  ($mark <= 44)){
    echo 'Grade will be Third Division';
    }elseif($mark < 33){
      echo 'Student will be fail';
    }else
    {
    echo 'ce nombre n\'existe pas';
    }
     
  }
?>
 
</body>
</html>