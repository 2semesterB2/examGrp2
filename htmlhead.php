<!DOCTYPE html>
<html lang="da">

    <head>
        <meta charset="utf-8" />
    
        <!-- Find titlen fra det aktuelle dokument, og echo den i i html head'en -->
        <title>
            <?php echo $title ?>
        </title>
        
        <!-- Find beskrivelsen fra det aktuelle dokument, og echo den i i html head'en -->
        <meta name="Description" content="<?php echo $description ?>">
        
        <!-- Find keywords fra det aktuelle dokument, og echo den i i html head'en -->
        <meta name="Keywords" content="<?php echo $keywords ?>"> 
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Stylingslinks -->
        
        <link href="css/bootstrap.css" rel="stylesheet">    <!-- Vi benytter Bootstrap som vores framework, fra                 https://getbootstrap.com/ og bruger derfor deres stylesheet som det grundlæggende -->
        <link href="css/main.css" rel="stylesheet">         <!-- Vores egen styling tilføjes under så eventuelle ændringer af Bootstrap koden bliver det aktuelle -->            
        
        <!-- Vores font fra Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        
        
        
		<!-- favikon links genereret med følgende side https://realfavicongenerator.net/ -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">


    </head>
<body>
    
    
    