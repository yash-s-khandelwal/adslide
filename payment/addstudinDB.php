<?php
    try{
        $studname = "";
        $urn_name = "";
        $studemail = "";
        $studmobile = "";
        $studcourse = "";
        $studyear = "";

        // This Query will fetch name form verify table with respect to given urn.
        $studentdata = "SELECT * FROM payattempts where URN='$studurn'";
        $result = $conn->query($studentdata);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            // Fetched name will be stored in urn_name variable
            $studname = $row["FormName"];
            $urn_name = $row["URNName"];
            $studemail = $row["Email"];
            $studmobile = $row["MobileNo"];
            $studcourse = $row["Course"];
            $studyear = $row["Year"];
          }
        } 
        else{
            echo "If Details are not shown, Please Report this bug.";
        }
        echo "$studname <br>";
        echo "$urn_name <br>";
        echo "$studemail <br>";
        echo "$studmobile <br>";
        echo "$studcourse <br>";
        echo "$studyear <br>";

        // // This query will insert data in payattempts Table
        $addstudintemp = "INSERT INTO registeredstudents (URN,FormName,URNName,Email,MobileNo,Course,Year) VALUES ('$studurn','$studname','$urn_name','$studemail',$studmobile,'$studcourse',$studyear)";

        if ($conn->query($addstudintemp) === TRUE) {
          echo "New record created successfully";
        } 
    }
    catch(Exception $e){
        echo "query not executed.";
    }

?>