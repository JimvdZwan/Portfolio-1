<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thisis a sample webpage demonstratingthe useof meta tags in HTML5."></metaname>
    <meta name="keywords" content="HTML5, meta tags, web development">
    <meta name="author"content="Jane Doe">
    <meta name="robots"content="index, follow">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<?php
require 'views/nav.php';
?>
<section>
    <div class="contact-wrap">
        <div class="contact-in">
            <h1>Contact Info</h1>
            <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
            <p>123-456-789</p>
            <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
            <p>info@democompany.com</p>
            <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
            <p>Vasant Vihar, Delhi, India</p>
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="contact-in">
            <h1>Send a Message</h1>
            <form>
                <input type="text" placeholder="Full Name" class="contact-in-input">
                <input type="text" placeholder="Email" class="contact-in-input">
                <input type="text" placeholder="Subject" class="contact-in-input">
                <textarea placeholder="Message" class="contact-in-textarea"></textarea>
                <input type="submit" value="SUBMIT" class="contact-in-btn">
            </form>
        </div>
        <div class="contact-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.9335460957027!2d5.2166557765887855!3d52.371624972022744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c617fb7563a475%3A0xf0dd02fb37cb486!2sWindesheim%20in%20Almere%20locatie%20Circus!5e0!3m2!1snl!2snl!4v1727187425154!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
</body>
<?php 
require 'views/footer.php';
?>
</html>
