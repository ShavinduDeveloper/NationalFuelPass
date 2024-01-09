<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="Shavindu Thushara Sampath">
        <meta name="keywords" content=" FuelPass, FUELPASS, FUEL PASS, Fuel Pass, fuelpass, fuel pass, Fuelpass, Fuel pass ">
        <title>National Fuel Pass - Printable file Generator.</title>

        <!--Title bar icon-->
        <link rel ="icon" href ="src/Icon.png" type ="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

        <link href="Style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        require_once 'config.php';

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $OwnerName = $_POST['ownername'];
            $PlateNumber = $_POST['platenumber'];
            $QRFile = $_POST['qrcode'];

            // SQL to insert data into the database
            $sql = "INSERT INTO `carddetails` (owner_name, plate_no, qr_file) VALUES ('$OwnerName', '$PlateNumber', '$QRFile')";

            if ($conn->query($sql) === TRUE) {
                $mesg = "<script>window.alert('A Record entered Successful...');</script>";
                echo $mesg;
            } else {
                $errorMesg = "<script>window.alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
                echo $errorMesg;
            }
        }
        // Close the database connection
        $conn->close();
        ?>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a id="navbar-brand" class="navbar-brand" href="index.php">STS Developement</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#ho">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#About">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#Steps">Steps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Generate">Generate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Body Content -->

        <!-- COVER -->
        <div id="Cover" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <p>National Fuel Pass</p>
                <img src="src/Fuel Pass.png" class="img-responsive center-block" alt=""/>
                <h1>Printable file Generator</h1>
                <br>
                <a class="bi bi-arrow-down-circle-fill" aria-hidden="true" href="#About"></a>
            </div>
        </div>

        <!-- ABOUT -->
        <div id="About" class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <h1>About Us</h1>
                <h1 class="und">_&nbsp;&nbsp;&nbsp;&nbsp;_</h1>
                <br>
                <div class="container">
                    <p id="about-p">
                        Hi, 
                        <br>
                        <br>
                        My name is <b>Shavindu Thushara Sampath.</b>
                        <br>
                        <br>
                        This is a Web Application to Download the Printable File of the National Fuel Pass. 
                        Here is Web application to Do that task automatically there for no need to payment procedure this is totally free and No Copyright issue's.
                        <br>
                        <br>
                    </p>
                    <center>
                        <a class="bi bi-arrow-down-circle-fill center-block" href="#Steps"></a>
                    </center>
                </div>
            </div>
        </div>

        <!-- Steps -->
        <div id="Steps" class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <h1>Steps</h1>
                <h1 class="und">_&nbsp;&nbsp;&nbsp;&nbsp;_</h1>
                <br>
                <div>
                    <div class="container-fluid">
                        <div class="row p-5">
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="p-3">
                                    <center>
                                        <i class="bi bi-mouse"></i>
                                        <br><br>
                                        Locate
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="p-3">
                                    <center>
                                        <i class="bi bi-qr-code"></i>
                                        <br><br>
                                        Upload
                                        <br>
                                        <b>QR Code</b>
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="p-3">
                                    <center>
                                        <i class="bi bi-arrow-repeat"></i>
                                        <br><br>
                                        Click 
                                        <br>
                                        <b>' Generate '</b>
                                    </center>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                <div class="p-3">
                                    <center>
                                        <i class="bi bi-download"></i>
                                        <br><br>
                                        Click 
                                        <br>
                                        <b>' Download '</b>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <a class="bi bi-arrow-down-circle-fill center-block" href="#Generate"></a>
            </center>
        </div>

        <!-- Generate -->
        <div id="Generate" class="top col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <h1>Card Generator</h1>
                <h1 class="und">_&nbsp;&nbsp;&nbsp;&nbsp;_</h1>
                <br>
                <div class="container-fluid">
                    <div class="row p-1">
                        <div id="re" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="p-3">
                                <center>
                                    <h5>Preview</h5>
                                    <br><br>
                                    <img class="img-responsive center-block" src="src/National Fuel Pass - Template.png" alt=""/>
                                </center>
                            </div>
                        </div>
                        <div id="bl" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="p-3">
                                <form action="index.php" method="POST" class="php-email-form">
                                    <center>
                                        <div class="container headding">
                                            <h5>Fonts Insert Form</h5>
                                        </div>
                                    </center>
                                    <div class="container">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="formGroupExampleInput" class="form-label">Name of Fuel Pass Owner :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" name="ownername" placeholder="Enter the name of Fuel Pass Owner  . . ." required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="formGroupExampleInput2" class="form-label">Vehicle Plate Number :</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" name="platenumber" placeholder="Enter the Plate Number . . ." required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label for="font" id="fol">QR Code Image : </label>
                                            <input type="file" id="upqr" name="qrcode" required>
                                        </div>
                                        <div id="btn-save" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button class="btn btn-success" type="submit">Save</button>
                                            <button class="btn btn-danger" type="reset">Clear</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact -->
        <div id="contact" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Contact Us</h5>
                        <a type="button" class="bi bi-x-circle-fill" data-bs-dismiss="offcanvas" aria-label="Close"></a>
                    </div>
                    <div class="offcanvas-body">
                        <section id="contact" class="contact">
                            <div class="row con">
                                <div class="col-lg-5 d-flex align-items-stretch">
                                    <div class="info">
                                        <div class="col-lg-12 col-md-5 col-sm-5 col-xs-12">
                                            <div class="address">
                                                <i class="bi bi-geo-alt"></i>
                                                <h4>Location:</h4>
                                                <p>73 / A / 4,<br>Badanagodagama,<br>Beruwala,<br>Sri Lanka.</p>
                                            </div>
                                            <div class="email">
                                                <i class="bi bi-envelope"></i>
                                                <h4>Email:</h4>
                                                <p>shavindusampath@gmail.com</p>
                                            </div>

                                            <div class="phone">
                                                <i class="bi bi-phone"></i>
                                                <h4>Call:</h4>
                                                <p>+94 76 129 6058</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-7 col-sm-7 col-xs-12">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d855.5837209547004!2d80.02032682916433!3d6.4793623322458185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjgnNDUuNyJOIDgwwrAwMScxNS4yIkU!5e1!3m2!1sen!2slk!4v1629371321296!5m2!1sen!2slk" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"></iframe>                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 mt-lg-0 d-flex  align-items-stretch">
                                    <form action="https://formspree.io/f/xvonzyrg" method="POST" class="php-email-form">
                                        <div class="headding">
                                            <h4>Your Message</h4>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="Name" class="form-control" id="name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="name">Your Email</label>
                                                <input type="email" class="form-control" name="Email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Subject</label>
                                            <input type="text" class="form-control" name="Subject" id="subject" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Message</label>
                                            <textarea class="form-control" name="Message" rows="10" required></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div id="footers">
            <div>
                <a class="bi bi-arrow-up-circle-fill" href="#Cover"></a>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <p>&copy; 2023 <i class="company"> STS Development.</i> All rights reserved.</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>