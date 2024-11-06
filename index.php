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

<body id="page-top">
    <!-- Navigation-->
    <?php
    include_once('navbar.php')
    ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">Welcome To AdSlide!</div>
            <div class="masthead-subheading">We Are An Event Handling Agency</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- coming soon -->
    <a href="#comingsoonmodal" class="comingsoonlink" data-bs-toggle="modal">
        <section class="page-section" id="coming-soon">
            <div class="container coming-soon-div">
                <div class="text-center coming-soon-text">
                    <h3 class="section-heading">Coming Soon</h3>
                    <h1 class="section-subheading">Sunstone 2024 Fresher's</h1>
                    <h3 class="section-subheading">Click here to know more</h3>
                </div>
            </div>
        </section>
    </a>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">We provide the following services for your event</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Registration</h4>
                    <p class="text-muted">We create a website for your event, which allows your users to know all about
                        the event and register, paying any applicable fees.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-ticket fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Ticketing</h4>
                    <p class="text-muted">We provide a unique ticket for your users</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-ban fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Verification</h4>
                    <p class="text-muted">We validate each ticket at the event venue, so as to prevent any bogus or
                        duplicate entries.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Here are our past projects</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Venturous</div>
                            <div class="portfolio-caption-subheading text-muted">Planned Fresher's for 2023 Sunstone
                                Batch</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Fresher's 24</div>
                            <div class="portfolio-caption-subheading text-muted">Upcoming Fresher's for Sunstone 2024
                                batch</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Founding Team</h2>
                <h3 class="section-subheading text-muted">Meet Our Brilliant Team Members</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Devendra Singh</h4>
                        <p class="text-muted">Co-Founder</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_devendra_singh_09/"
                            aria-label="Devendra Singh Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2"
                            href="https://www.linkedin.com/in/devendra-singh-ds7465/"
                            aria-label="Devendra Singh LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Yash Khandelwal</h4>
                        <p class="text-muted">Co-Founder</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_.yash.k/"
                            aria-label="Yash Khandelwal Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/khandelwal-yash/"
                            aria-label="Yash Khandelwal LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Our founding members have burnt the midnight oil to run this agency,
                        dividing amongst them various tasks such as - Client outreach, Backend and Frontend Development,
                        etc. They coordinated with their customers to achieve complete customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
            </div>

            <!-- CONTACT US FORM  -->
            <form id="contactForm" method="post" action="contact.php">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">

                        <!-- Name input-->
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" type="text" required
                                placeholder="Your Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>


                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" name="email" type="email" required
                                placeholder="Your Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" name="phone" type="tel" minlength="10" maxlength="10"
                                required placeholder="Your Phone *" onkeypress="return onlyNumberKey(event)"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" name="message" required
                                placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button-->
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send
                        Message</button>
                </div>

            </form>

        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <?php
            include_once('footer.php')
            ?>
    </footer>

    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Venturous 2023</h2>
                                <p class="item-intro text-muted">Planned Fresher's for Sunstone 2023 Batch</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>Created a platform for user registration, ticketing and verification of ticket entry.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Sunstone
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Fresher's Party
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Fresher's 24</h2>
                                <p class="item-intro text-muted">Upcoming Fresher's for Sunstone 2024 Batch</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                <p>Added Payment Gateway for paid tickets.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Sunstone
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Fresher's Party
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Sent Successfully-->
    <div class="success" id="hidden-alert">
        <div class="success__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                <path fill-rule="evenodd" fill="#393a37"
                    d="m12 1c-6.075 0-11 4.925-11 11s4.925 11 11 11 11-4.925 11-11-4.925-11-11-11zm4.768 9.14c.0878-.1004.1546-.21726.1966-.34383.0419-.12657.0581-.26026.0477-.39319-.0105-.13293-.0475-.26242-.1087-.38085-.0613-.11844-.1456-.22342-.2481-.30879-.1024-.08536-.2209-.14938-.3484-.18828s-.2616-.0519-.3942-.03823c-.1327.01366-.2612.05372-.3782.1178-.1169.06409-.2198.15091-.3027.25537l-4.3 5.159-2.225-2.226c-.1886-.1822-.4412-.283-.7034-.2807s-.51301.1075-.69842.2929-.29058.4362-.29285.6984c-.00228.2622.09851.5148.28067.7034l3 3c.0983.0982.2159.1748.3454.2251.1295.0502.2681.0729.4069.0665.1387-.0063.2747-.0414.3991-.1032.1244-.0617.2347-.1487.3236-.2554z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="success__title">
            <strong>Success: </strong>Message Sent Successfully.
        </div>
        <div class="success__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20">
                <path fill="#393a37"
                    d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z">
                </path>
            </svg>
        </div>
    </div>

    <!-- Message not sent successfully-->
    <div class="error" id="hide-error-msg">
        <div class="error__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                <path fill="#393a37"
                    d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z">
                </path>
            </svg>
        </div>
        <div class="error__title">
            <strong>Alert: </strong>Message not Sent.
        </div>
        <div class="error__close"><svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20">
                <path fill="#393a37"
                    d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z">
                </path>
            </svg></div>
    </div>

    <!-- coming soon modal -->
    <div class="modal fade" id="comingsoonmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row" data-bs-dismiss="modal" id="close-modal-btn">
                    <button type="button" class="close close-modal btn-close col" data-dismiss="modal"></button>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Fresher's 2024</h2>
                                <p class="item-intro">We are excited to announce that the registration for Fresher's
                                    2024 will begin soon on our platform</p>

                                <img class="img-fluid d-block mx-auto" src="assets/img/coming-soon.jpg" alt="..." />

                                <div class="portfolio-caption">
                                    <p class="portfolio-caption-heading">Please note</p>
                                    <p class="portfolio-caption-subheading">You need to be a student of Sunstone in
                                        order to be eligible to register for the event.</p>
                                </div>
                                <a href="bookticket.php"><button class="btn btn-warning">Book Ticket</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
    // for checking whether the message has been sent successfully or not
    const urlParams = new URLSearchParams(window.location.search);
    const successParam = urlParams.get('success');
    const errorParam = urlParams.get('error');
    // if message sent succesfully then this message
    if (successParam === 'true') {
        giveAlertforSuccess();
    }
    // if message not sent successfully then this messsage
    if (errorParam === 'true') {
        giveAlertforError()
    }
    </script>
</body>

</html>