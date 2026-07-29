<!DOCTYPE html>
<html lang="en">

<!--
  Name: Nick
  Date: 5/18/26
  Course: 7355
  Description: Web Dev Template
-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Services</title>
    
   <!--
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
    -->
    
    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="https://nicholasmwilson01-lab.github.io/webdevelopment/style.css">
    <link rel="stylesheet" type="text/css" href="https://nicholasmwilson01-lab.github.io/webdevelopment/nav.css">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<!--Header for logo/title-->
<?php include 'header.php'; ?>

<!--Body for majority of text-->
<body>
    <h1>Anchorage Herald Services</h1>
    <div class="fbox">
        <div class="tl">
            <p>
                The Anchorage Herald Archives holds over 2,000 linear feet of materials. This includes newspaper clippings, interview transcripts,
                advertising materials, corporate records, and locally relevant materials. Material formats include the following:
                paper (clippings, maps, contracts), negatives, microfilm, audiocassettes, and VHS tapes.
            </p>
            <p>
                For more information on the Anchorage Herald Archive, including access guidelines and donation options, please see below.
            </p>
        </div>
        <div class="tr">    
            <img src="anchoragecoast.jpg" alt="anchorage panorama" height="800" width="800">
        </div>
    </div>

    <div id="bottomgrid">
        <div class="left">
            <img src="access.jpg" alt="unlocked door" width="400" height="400">
            <button class="btnl"><a href="">Access</a></button>
            <p>View access guidelines.</p>
        </div>
        <div class="middle">
            <img src="holdings.jpg" alt="folders" width="400" height="400">
            <button class="btnm"><a href="">Holdings</a></button>
            <p>Access the collections database.</p>
        </div>
        <div class="right">
            <img src="donate.jpg" alt="donation" width="400" height="400">
            <button class="btnr"><a href="">Donate</a></button>
            <p>Make a donation.</p>
        </div>
    </div>
</body>

<!--Footer for widgets/links-->
<?php include 'footer.php'; ?>
