<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3</title>
</head>
<body>
    <?php
    print("PART 1");
    echo "<BR>";
    echo "<BR>";
    echo "<BR>";
    print("");

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

 
   


 

    ?>
    
</body>
</html>