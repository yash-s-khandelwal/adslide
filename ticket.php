<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AdSlide</title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="assets/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <meta property="og:title" content="Adslide - Event Registration" />
    <meta property="og:image" content="https://ahrefs.com/assets/img/adslide-logo.jpg" />
    <meta property="og:description" content="Register for the Fresher's 2024" />

</head>
<body>
<?php
    include_once('navbar.php')
?>
<div class="empty-div"></div>

<div class="container justify-content-center align-items-center">
<div class="row flex justify-content-center">
        <div class="ticketbg col-4">
            <img src="assets/bgimage1.jpg" class="img-fluid ticket">
            <img src="" alt="qrcode" border="0" id="qr-image">  
        </div>
        <div class="download-button">
                <!-- <button onclick="createQR()" id="showqr">Show QR</button> -->
                <button class="btn btn-warning m-2" id="downloadButton">Download PDF</button>
        

        </div>
        </div>
    </div>
</div>
<script>
    function QR(){

var add = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=";

var create_qr = (add+qr_urn+"@"+qr_name+"@"+qr_mobile+"@"+qr_course+"@"+qr_year);

var img = document.getElementById('qr-image');
img.src = create_qr;
}



document.getElementById('downloadButton').addEventListener('click', function () {
window.print();
});
</script>
<?php
include_once('footer.php')
?>

</body>

