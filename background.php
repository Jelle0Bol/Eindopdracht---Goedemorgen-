<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <link rel="stylesheet" href="Site.css">
   <title>PHP time based page</title>
</head>
<?php
    $time = date("H");
    $minutes = date("H:i");

    if( $time >= 07 && $time < 12 )
    $img_name = 'morning.png';
    if( $time >= 13 && $time < 18 )
    $img_name = 'afternoon.png';
    if( $time >= 19 && $time < 23 )
    $img_name = 'evening.png';
    if( $time >= 0 && $time < 6 )
    $img_name = 'night.png';


    ?>
    <?php
    $time = date("H");

    if( $time >= 7 && $time < 12 )
    $titel = 'Goede morgen!';
    if( $time >= 13 && $time < 18 )
    $titel = 'Goede middag!';
    if( $time >= 19 && $time < 23 )
    $titel = 'Goede avond!';
    if( $time >= 0 && $time < 6 )
    $titel = 'Goede nacht!';


    ?>

    <div id="tekst-div">
        <h2><?php echo $titel?></h2>
        <h2><?php echo $minutes?></h2>
    </div>
    <style>
        h2 {
            color: white;
            font-size: 30px;
            text-align: center;
            
        }
    body{background-image:url('images/<?php echo $img_name;?>');}
    </style>
<body>


 </body>
</html>