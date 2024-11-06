<?php
    // This file will check whether the student is from sunstone or not(Check URN).
    try{
        // This Query will check whether the studetn has already registered or not.
        $alreadyregisteredornot = "SELECT * FROM registeredstudents where URN='$studurn'";
        $result = $conn->query($alreadyregisteredornot);
        if ($result->num_rows > 0) {
            echo "Student already Registered.";
            // header("Location: paymentSuccess.php");
            exit;
        }
        else{
            // IF student is not registered this query will be executed
            $sql = "SELECT EXISTS (SELECT 1 FROM verify WHERE URN = '$studurn' ) AS urn_exists;";
            $result = mysqli_query($conn, $sql); 
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if ($row['urn_exists'] == 1) {
                    echo "URN found <br>";
                    echo "Now Payment Gateway page will open <br>";
                } 
                else {
                    echo "No URN found";
                    header("Location: ../bookticket.php?error=true");
                    exit;
                }
            }
        }
    }
    catch(Exception $e){
        echo "query not executed.";
    }
?>