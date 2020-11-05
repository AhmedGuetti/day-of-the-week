<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daay of the week</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    



    <?php
    $day = date("w");
    switch ($day){
        case 1 :
            echo '<div class="sad"><p class="day">This is Monday get ready for your job</p></div>';
        break;
        case 2 :
            echo '<div class="sad"><p class="day">This is Tuesday , how was your day</p></div>';
        break;
        case 3 :
            echo '<div class="sad"><p class="day">This is Wednesday ,is it boring today</p></div>';
        break;
        case 4 :
            echo '<div class="happy"><p class="day">This is Thursday , were about to have some fun</p></div>';
        break;
        case 5 :
            echo '<div class="happy"><p class="day">This is Friday , have a nice day</p></div>';
        break;
        case 6 :
            echo '<div class="happy">p class="day">This is Saturday</p></div>';
        break;
        case 0 :
            echo '<div class="happy"><p class="day">This is Sunday you have all the time</p></div>';
        break;
    }
    
    
    
    
    
    ?>
        <!-- Style sheet -->
        <link rel="stylesheet" href="style.css">
</body>
</html>