<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
        <meta name="description" content="" >
        <meta name="author" content="" >
        <title>TLOJ(test site) - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" >
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" >
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Test Site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="members.autismman.php">TLOJ members</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="assets/legion.jpg" alt="..." >
                <h1 class="text-white fs-3 fw-bolder">TLOJ</h1>
                <p class="text-white-50 mb-0">Nicholas Beard</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>update TLOJ database</h2>
                       
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "test";
                             
                            // Create connection
                            $conn = new mysqli($servername,
                                $username, $password, $dbname);
                             
                            // Check connection
                            if ($conn == FALSE) {
                                die("Connection failed: "
                                    . $conn == FALSE);
                            }
                            // insert into database
                            $sql = "INSERT INTO tloj VALUES";
                            
                            // if connection to database is successful, tell the user, otherwise return an error
                            if ($conn>$sql === TRUE) {
                                echo "record inserted successfully" ;
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn == FALSE;
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                             
                                // collect value of input field
                                $data = $_POST['val1'];
                             
                                if (empty($data)) {
                                    echo "data is empty";
                                } else {
                                    echo $data;
                                }
                            }
                                                     
                            // Closing the connection.
                            // $conn > close();

                        ?>
                        <!-- enter the hero's name, alias, powers and role to append the SQLMyAdmin database-->
                        <p>Storing Form data in Database</p>

                        <form action="insert.php" method="post">
                            <!-- enter name -->
                            <p>
                               <label for="name">name: </label>
                               <input type="text" name="name" id="name">
                            </p>
                 
                            <!-- enter superhero name (alias) -->
                            <p>
                               <label for="alias">alias: </label>
                               <input type="text" name="alias" id="alias">
                            </p>
                 
                            <!-- enter powers -->
                            <p>
                               <label for="powers">powers: </label>
                               <input type="text" name="powers" id="powers">
                            </p>
                 
                            <!-- enter team role (leader, medic E.T.C.) -->
                            <p>
                               <label for="role">role:</label>
                               <input type="text" name="role" id="role">
                            </p>
                 
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Forecast</h2>
                        
                        <!-- live forecast -->
                        <div id="ww_f968e5855fb8e" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl8655"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#303F9F","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_bradford_2977/" id="ww_f968e5855fb8e_u" target="_blank">forecast for Bradford</a>
                        </div>
                        <!-- source for weather information -->
                        <script async src="https://app1.weatherwidget.org/js/?id=ww_f968e5855fb8e"></script>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <!-- copyright section -->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Test site 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
