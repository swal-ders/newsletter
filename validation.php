<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Newsletter Subscription - Thank You!</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:600" rel="stylesheet"> 

  </head>
  <body>

    <div class="top-content">

        <div class="nav-container" onclick="myFunction(this)">
            <div class="hamburger-button">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
                <nav>
                    <ul>
                        <li><a href="#" class="link" > Home</a></li>
                        <li><a href="#" class="link" > Contact</a></li>
                        <li><a href="#" class="link" >  Blog</a></li>
                        <li class="active" ><a href="index.php" class="link" >Subscribe</a></li>
                    </ul>
                </nav>

        </div>

        <div class="header-image-container">
            <div class="title-quip">
                <p>The Beginning of</p><p>Something Great</p>
            </div>
        </div>
    </div> <!-- End Top Content -->

    <div class="validation-wrapper">
        <?php 

        // Error Warnings:
            $incorrectFirstNameError                =  " You have not correctly processed the required first name";
            $incorrectLastNameError                 =  " You have not correctly processed the required last name";
            $incorrectEmailError                    =  " You have not correctly processed a valid email address";
            $incorrectTitleError                    =  " A preferred title has not been provided";
            $incorrectSubscriptionError             =  " A preferred subscription type has not been provided";

        // Reset variables (before information is processed)
            $firstName                              = "";
            $lastName                               = "";
            $inputTitleSelection                    = "";
            $subscriptionType                       = "";
            $emailAddress                           = "";

        // Check to see if form data has been set
                if(isset($_POST['firstName'   ])     == true
                && isset($_POST['lastName'    ])     == true
                && isset($_POST['title'       ])     == true
                && isset($_POST['emailAddress'])     == true
                ){ //Apply relevent data to their associated variables
                    $firstName                          = ucfirst(strtolower(trim ($_POST["firstName"])));
                    $lastName                           = ucfirst(strtolower(trim ( $_POST["lastName"])));
                    $emailAddress                       = strtolower(trim ($_POST["emailAddress"]));
                    $inputTitleSelection                = $_POST["title"];

                    // Ensure that the client has selected an appropriate subscription type 
                    if(isset($_POST["subscriptionType"]) ){

                        echo "<h2 class='thank-you'>Thank you for signing up for our Newsletter, ";
                                //Thank the client, based on their provided title and name
                                if ($inputTitleSelection == "mr"){
                                    echo "Mr. ". $firstName  ." ". $lastName . "!</h2>";
                                    }
                                    else if ($inputTitleSelection == "mrs"){
                                        echo "Mrs. ". $firstName ." ". $lastName . "!</h2>";
                                    }
                                        else if ($inputTitleSelection == "ms"){
                                            echo "Ms. ". $firstName ." ". $lastName . "!</h2>";
                                        }
                                            else if ($inputTitleSelection == "dr"){
                                                echo "Dr. ". $firstName ." ". $lastName . "!</h2>";
                                            }
                        //Reiterate their subscription type as an array
                        $arraySubscriptionType = $_POST["subscriptionType"];
                        count($arraySubscriptionType);
                        //Echo out as a list
                        echo "<p>You have subcribed to the following Newsletters:</p>";
                        echo "<ul>";
                            foreach($arraySubscriptionType as $oneSubscriptionType){
                                echo "<li>". $oneSubscriptionType . "</li>";
                            }
                        echo "</ul>";
                        //Reiterate the cliets email address
                        echo "<p>We will provide you with quarterly newsletters to \"$emailAddress\". Please note that you are welcome to unsubscribe at any time.</p><br><p> You may return to the previous page at any time by clicking <a href=\"index.php\">here</a></p>";
                    } else{ 
                        //Error: not all of the required information was provided...
                        echo 
                        '<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> 
                            <span class="jb-alert"> <strong>Error: Please ensure that all form fields have been input correctly</strong><br><br><ul>';
                        
                        if( empty($subscriptionType) ){
                            echo "<li>$incorrectSubscriptionError</li>";
                        }
                        if( empty($firstName) ){
                            echo "<li>$incorrectFirstNameError</li>";
                        }
                        if( empty($lastName) ){
                            echo "<li>$incorrectLastNameError</li>";
                        }
                        if( empty($inputTitleSelection) ){
                            echo "<li>$incorrectTitleError</li>";
                        }
                        if( empty($emailAddress) ){
                            echo "<li>$incorrectEmailError</li>";
                        }

                        echo '</ul></span>
                        </div>';

                        echo "<h2 class='thank-you'>ERROR: Not all fields have been submitted correctly...</h2>";
                        echo "<p> You may return to the previous page in order to resubmit this form, at any time by clicking <a href=\"index.php\">here.</a></p>";

                }
            } else {
                //It looks as though the user has skipped the form processing page... Lets send them back to index.php
                header("location: index.php");
                // Incase the header() fails...
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
                <span class="jb-alert"> <strong>Error: Please ensure that all form fields have been input correctly</strong></span>
                </div>';

                echo "<h2 class='thank-you'>ERROR: Not all fields have been submitted correctly...</h2>";
                echo "<p> You may return to the previous page in order to resubmit this form, at any time by clicking <a href=\"index.php\">here.</a></p><br>";
            }
        ?>
        <div class="gallery">
            <div class="large">
                <img src="images/computer-laptop-news-1931441.jpg" alt="Duplex Grey Business Cards with Copper Foil" class="image1">
            </div>
            <div class="column">
                <div class="medium">
                    <img src="images/cellphone-coffee-desk-860379.jpg" alt="Grey and Copper print business cards" class="image2">
                </div>
                <div class="small">
                    <img src="images/ebisu-bridge-emil-karlsson.jpeg" alt="Grey and Black business cards" class="image3">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <nav class="products">
            <p class="title">Our Products</p>
            <ul>
                <li><a href="#">Lorem ipsu</a></li>
                <li><a href="#">Lorem, ipsum.</a></li>
                <li><a href="#">psum dolor</a></li>
                <li><a href="#">consectetur adipisicing</a></li>
                <li><a href="#">vero architecto</a></li>
                <li><a href="#">Quos excepturi</a></li>
                <li><a href="#">Optio a</a></li>
                <li><a href="#">dolores vitae</a></li>
                <li><a href="#">molestiae dolore</a></li>
            </ul>
        </nav>

        <nav class="resources">
            <p class="title">Resources</p>
            <ul>
                <li><a href="#">Knowledge Center</a></li>
                <li><a href="#">Shipping Rates</a></li>
                <li><a href="#">Custom Quotes</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <nav class="company">
            <p class="title">Company</p>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </nav>

        <nav class="social-media">
            <p class="title">Social Media</p>
            <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i> Facebook </a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i> Twitter </a></li>
                <li><a href="#"><i class="fab fa-instagram"></i> Instagram </a></li>
                <li><a href="#"><i class="fab fa-reddit-square"></i> Reddit </a></li>
            </ul>
        </nav>

        <nav class="terms">
            <p><a href="https://shanewalders.com/work.php"> Shane Walders | hello@shanewalders.com</a></p>
        </nav>
    </footer> <!-- End of Footer Content -->
    <script src="js/main.js"></script>
    <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
   
  </body>
</html>
<?php 
    //                           #####
    //                        #######
    //             ######    ########       #####
    //         ###########/#####\#####  #############
    //     ############/##########--#####################
    //   ####         ######################          #####
    //  ##          ####      ##########/@@              ###
    // #          ####        ,-.##/`.#\#####               ##
    //           ###         /  |$/  |,-. ####                 #
    //          ##           \_,'$\_,'|  \  ###
    //          #              \_$$$$$`._/   ##
    //                           $$$$$_/     ##
    //                           $$$$$        #
    //                           $$$$$
    //                           $$$$$
    //                           $$$$$
    //                           $$$$$
    //                          $$$$$
    //                          $$$$$
    //                          $$$$$
    //                          $$$$$        
    //                          $$$$$    _.-------._
    //                         $$$$$   ,'           `.
    //                         $$$$$  /               \
    // ~~~~~~~~~~~~~~~~~~~~~~~$$$$$~~~'~~~~~~~~~~~~~~~~`~~~~~~~~~~~~
    //    ~      ~  ~    ~  ~ $$$$$  ~   ~       ~          ~
    //        ~ ~      .o,    $$$$$     ~    ~  ~        ~
    //   ~            ~ ^   ~ $$$$$~        ______    ~        ~
    // _______________________$$$$$________|\\\\\\\_________________
    //                        $$$$$        |>\\\\\\\
    //     ______             $$$$$        |>>\\\\\\\
    //    \Q%=/\,\            $$$$$       /\>>|#####|
    //     `------`           $$$$$      /=|\>|#####|
    //                        $$$$$        ||\|#####|
    //                       $$$$$$$          ||"""||
    //                       $$$$$$$          ||   ||
    //                      $$$$$$$$$
    // """""""""""""""""""""$$$$$$$$$"""""""""""""""""""""""""""""""
    //                         $$$            
?>