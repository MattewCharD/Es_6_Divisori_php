<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisori</title>
</head>
<body>
    <?php 
        $str="<ul>";
        $num = 24;
        for ($i=1; $i < $num; $i++) { 
            if($num%$i==0){
                $str = $str . "<li>" . $i."</li>";
            } 
        }  
        $str = $str . "</ul>";
        echo "<p>I divisori del numero {$num} sono :</p>" .$str;
    ?>
    


</body>
</html>