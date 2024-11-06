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
    <link rel="stylesheet" href="css/bookticket.css">    
    <link rel="stylesheet" href="css/style.css">

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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // this function is used for options in course year
      function updateYearOptions() {
            // Get the selected course and year elements
            var selectedCourse = document.getElementById("studcourse");
            var yearSelect = document.getElementById("studyear");

            // Clear existing options in the year select
            yearSelect.innerHTML = "";

            // Add options based on the selected course
            if (selectedCourse.value === "BCA" || selectedCourse.value === "BBA") {
                // Options for BCA and BBA(up to 3rd year)
                for (var i = 1; i <= 3; i++) {
                    var option = document.createElement("option");
                    if(i==1){
                        option.text = i + "st Year";
                    }
                    if(i==2){
                        option.text = i + "nd Year";
                    }
                    if(i==3){
                        option.text = i + "rd Year";
                    }
                    option.value = i;
                    yearSelect.add(option);
                }
            } 
            else if (selectedCourse.value === "B.Tech") {
                // Options for B.Tech first year only
                for (var i = 1; i <= 1; i++) {
                    var option = document.createElement("option");
                    option.text = i + "st Year";
                    option.value = i;
                    yearSelect.add(option);
                }
            }
            else if (selectedCourse.value === "MBA" || selectedCourse.value === "MCA") {
                // Options for MBA and MCA
                for (var i = 1; i <= 2; i++) {
                    var option = document.createElement("option");
                    if(i==1){
                        option.text = i + "st Year";
                    }
                    if(i==2){
                        option.text = i + "nd Year";
                    }
                    option.value = i;
                    yearSelect.add(option);
                }
            }
        }
    </script>
</head>

<body>
    <?php
    include_once('navbar.php');
    ?>
    <div class="empty-div"></div>

    <div class="container">

        <div class="event-text">
            <h4 class="section-heading text-uppercase">About this event:</h4>
            <p>This is our upcoming fresher's event for students of Sunstone 2024.
                We have an evening planned full of games, music, dance and above all, the competition for Mr & Mrs
                Freshers, all to boost your spirits!
            </p>
            <p><strong>Price: ₹300/-</strong>(including taxes)</p>
        </div>
        <form class="form-group d-flex justify-content-center" method="post" action="payment/paymentprocess.php">

            <div>
                <div class="input-group" id="sample">

                    <input required="" id="studname" type="text" name="name" autocomplete="off" class="input rounded">
                    <label class="user-label">Name</label>
                </div>
                <div class="input-group">
                    <input required="" id="studemail" type="email" name="email" autocomplete="off"
                        class="input rounded">
                    <label class="user-label">Email</label>
                </div>
                <div class="input-group">
                    <input required="" id="studurn" type="text" name="urn" autocomplete="off" class="input rounded">
                    <label class="user-label">URN</label>
                </div>
                <div class="input-group">
                    <input required="" id="studmobile" type="tel" onkeypress="return onlyNumberKey(event)"
                        maxlength="10" name="mobile" autocomplete="off" class="input rounded">
                    <label class="user-label">Mobile No.</label>
                </div>
                <div class="user-box" id="course-year">
                    <center>
                        <select id="studcourse" name="course" onchange="updateYearOptions()" required="">
                            <option value="">Select Course</option>
                            <option value="BCA">BCA</option>
                            <option value="BBA">BBA</option>
                            <option value="MBA">MBA</option>
                            <option value="MCA">MCA</option>
                            <option value="B.Tech">B.Tech</option>
                        </select>
                        <select id="studyear" name="year" required="">
                            <option value="">Select Year</option>
                        </select>  
                    </center>
                </div>


                <div class="row">
                    <span class="col"><strong>Price:</strong></span>
                    <span class="col"><strong>₹300</strong></span>
                </div>
                    

                <button class="btn btn-outline-warning btn-lg">Pay Now</button>
            </div>

        </form>
    </div>
    <!-- URN incorrect Message-->
    <div class="error" id="hidden-alert">
        <div class="error__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                <path fill="#393a37"
                    d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z">
                </path>
            </svg>
        </div>
        <div class="error__title">
            <strong>Alert: </strong>Incorrect URN...
        </div>
        <div class="error__close"><svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20">
                <path fill="#393a37"
                    d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z">
                </path>
            </svg></div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
    function onlyNumberKey(evt) {
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
    const namecheck = document.getElementById("studname");
    namecheck.addEventListener("namecheck", function() {
        const regex = /^[a-zA-Z ]*$/;
        if (!regex.test(namecheck.value)) {
            namecheck.value = namecheck.value.replace(/[^a-zA-Z ]/g, "");
        }
    });

    // if incoorect URN this message will be shown
    const urlParams = new URLSearchParams(window.location.search);
    const successParam = urlParams.get('error');
    if (successParam === 'true') {
        giveAlertforError();
    }
    </script>
    <?php
        include_once('footer.php');
    ?>
</body>

</html>