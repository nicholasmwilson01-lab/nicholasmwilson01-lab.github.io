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
    <title>Contact</title>
    
    <!--
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
-->

    <!--Stylesheet-->    
    <link rel="stylesheet" type="text/css" href="https://nicholasmwilson01-lab.github.io/webdevelopment/style.css">
    <link rel="stylesheet" type="text/css" href="https://nicholasmwilson01-lab.github.io/webdevelopment/nav.css">

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<!--Header for logo/title-->
<?php include 'header.php'; ?>

<!--Body for majority of text-->
<body>
    <h1>Contact Us</h1>
    <br>
    <!--Form CSS in style.css-->
    <div class="form">
        <form class="formL">
            <h3>Contact</h3>
            <label for="title">Title</label>
            <br>
                <select id="title" name="title" required>
                    <option value="none">Enter Title</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Dr.">Dr.</option>
                </select>
                <br>
            <label for="name">Full Name</label>
            <br>
                <input type="name" id="name" required placeholder="Enter Name">
                <br>
            <label for="email">Email:</label>
            <br>
                <input type="email" id="email" required placeholder="Enter Email">
                <br>
            <label for="message">Message:</label>
            <br>
                <textarea type="message" id="message" placeholder="Write Message" required></textarea>
                <br>
            <button type="submit">Submit</button>
        </form>
        <form class="formR">
            <h3>Donation</h3>
            <label for="title">Title</label>
            <br>
                <select id="title" name="title" required>
                    <option value="none">Enter Title</option>
                    <option value="Mr.">Mr.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Dr.">Dr.</option>
                </select>
                <br>
            <label for="name">Full Name</label>
            <br>
                <input type="name" id="name" required placeholder="Enter Name">
                <br>
            <label for="email">Email:</label>
            <br>
                <input type="email" id="email" required placeholder="Enter Email">
                <br>
            <label for="message">Message:</label>
            <br>
                <textarea type="message" id="message" placeholder="Write Message" required></textarea>
                <br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <br>
</body>

<!--Footer for widgets/links-->
<?php include 'footer.php'; ?>
