<?php
        $urn_name = "";
        // This Query will fetch name form verify table with respect to given urn.
        $getstudnamefromverify = "SELECT * FROM verify where URN='$studurn'";
        $result = $conn->query($getstudnamefromverify);
        echo"Entered Student Name : $studname <br>";

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            // Fetched name will be stored in urn_name variable
            $urn_name = $row["Name"];
          }
        } 
        echo "Database Name : $urn_name <br>";

        // Query will check whether the user has already attempted to pay or not
        $chechurnintemptable = "SELECT * FROM payattempts where URN='$studurn'";
        $result = $conn->query($chechurnintemptable);
        if ($result->num_rows > 0) {
            echo "Record already exist now you can update it.<br>";

            // Query for Update existing Record
            $updatestudintemp = "UPDATE payattempts SET FormName='$studname', URNName='$urn_name', Email='$studemail', MobileNo=$studmobile, Course='$studcourse', Year=$studyear WHERE URN='$studurn'; ";
            if ($conn->query($updatestudintemp) === TRUE) {
              echo "Record Updated.<br>";
            }
            
        } 
        else {
          echo "No record Found.<br>";
          // This query will insert data in payattempts Table
          $addstudintemp = "INSERT INTO payattempts (URN,FormName,URNName,Email,MobileNo,Course,Year) VALUES ('$studurn','$studname','$urn_name','$studemail',$studmobile,'$studcourse',$studyear)";
  
          if ($conn->query($addstudintemp) === TRUE) {
            echo "New record created successfully.<br>";
          }        
        }
?>