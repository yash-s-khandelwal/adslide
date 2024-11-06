<?php    
    // establish connection
    include("conn.php");
    echo"connection successful<br>";

    $studurn = $_POST['urn'];
    $studname = $_POST['name'];
    $studemail = $_POST['email'];
    $studmobile = $_POST['mobile'];
    $studcourse = $_POST['course'];
    $studyear = $_POST['year'];

    echo "$studname<br>";
    echo "$studemail<br>";
    echo "$studurn<br>";
    echo "$studmobile<br>";
    echo "$studcourse<br>";
    echo "$studyear<br>";

    // check if the student is from sunstone or not
    include("checkstuddetails.php");

    //This code will add data in temporary table
    include("addDatainTempTable.php");
    
    // if student is from sunstone payment gateway will open
    include("paymentGateway.php");    
    exit;
?>