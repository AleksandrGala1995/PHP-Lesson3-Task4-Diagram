<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть цілі числа від 1 до 100 через кому: <input type="text" name="str"><br>
    <input type="submit">
</form>
    

    
<?php
if (!empty($_POST['str'])) {
    $str = $_POST['str'];
    $str = str_replace(" ", '', $str);
   $integers = explode(",", $str);
   
     echo "<div></div>";
      foreach ($integers as $key => $value) {
         if (!is_numeric($value)) {
              echo "Помилка! Введені неправильні дані";
              exit;
         }
         
      }
     foreach ($integers as $key => $value) {
         
         $value = (int)$value;
        
        if (!is_int($value) or ($value<1) or ($value>100)) {
        echo "Помилка! Введені неправильні дані";
        exit;
    
    }   
         
     }
foreach ($integers as $key => $value) {
    
    $value = (int)$value;
    
     $width=7*$value;  
    echo "<div style='clear: left'>";
    echo "<div style='width: $width; height: 17px; background:red; float: left; margin-bottom: 7px; '></div>";
    $left=$width+30;
    
   echo "<div  style='float: left; margin-left: 5px'>$value</div>";
   
    
   
     echo "</div>";
    
}
}
?>


</body>
</html>