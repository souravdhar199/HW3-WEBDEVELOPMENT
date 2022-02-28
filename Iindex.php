<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3</title>
</head>
<style>


</style>
<body>

    <?php
    print("PART 1");
    echo "<BR>";
    echo "<BR>";

    function isBitten($dayIate, $probability)
    {
        $ans = mt_rand(1, $dayIate)>=$probability;
        if($ans==1)
        {print("Cgarlie ate my launch!");}
        else {
            print("Charlie did not eat my launch!");
        }
      
    }
    isBitten(100, 50);
    echo "<BR>";
    print("PART 2");
    echo "<BR>";
    echo "<BR>";

?>

<table width="300px" cellpadding="1px" border="1px">
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $sum=$row+$col;
          if($sum%2==0)
		  {
          echo "<td height=35px width=35px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=35px width=35px bgcolor=#000000></td>";
          }
          }
    }

?>
</table>

<?php
  echo "<BR>";
  print("PART 3");
  echo "<BR>";
  echo "<BR>";

  $month = array ('January', 'February', 'March', 'April',
 'May', 'June', 'July', 'August',
 'September', 'October', 'November', 'December');
  
  print_r($month);
  echo "<BR>";
  $size = count($month);
 echo"<p> Before sorting (Standard for loop) </p>";
 for($i=0;$i<$size; $i++){
     echo $month[$i];
     echo "<br>";
 }
 echo"<p>After sorting</p>";
 $temp = $month;
 sort($temp);
 for($i=0;$i<$size; $i++){
    echo $temp[$i];
    echo "<br>";
}
echo"<p> Before sorting (foreach) </p>";
foreach($month as $m){
    print($m);
    echo "<br>";
}

sort($month);
echo"<p> After sorting (foreach) </p>";
foreach($month as $m){
    print($m);
    echo "<br>";
}

?>



    
   
 
   


 


    
</body>
</html>