<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="morgen.css">
<link rel="icon" type="image/png" href="clock.png">
<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet"> 
<title>De tijd</title>
</head>
<body>
	
<?php
        date_default_timezone_set("Europe/Amsterdam");
        $tijd = date("H:i:s");
        
        if ($tijd < "06:00") {
            $message = "Goede nacht!";
            $imageURL = "night.png";
        } 
        elseif ($tijd < "12:00") {
            $message = "Goede morgen!";
            $imageURL = "morning.png";
        } 
        elseif ($tijd < "18:00") {
            $message = "Goede middag!";
            $imageURL = "afternoon.png";
        } 
        else {
            $message = "Goede avond!";
            $imageURL = "evening.png";
}
        $tekst = "Het is nu";
    ?>


<body style="background-image: url(<?php echo $imageURL; ?>); background-size: cover;">
    <?php echo "<p>".$message .  "</p>"; ?>
    <?php echo "<p>".$tekst. " " .$tijd . "</p>"; ?>

</body>


</html>