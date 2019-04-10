<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Newsletter Subscription</title>

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
                        <li><a href="index.php" class="link" >Subscribe</a></li>
                    </ul>
                </nav>

        </div>
         
        <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span class="jb-alert"> <strong>Heads Up!</strong> Please ensure that all form fields have been input correctly. </span>
        </div><br>

        <div class="header-image-container">
            <div class="title-quip">
                <p>The Beginning of</p><p>Something Great</p>
            </div>
        </div>
    </div> <!-- End Top Content -->
    <div class="content-wrapper">

        <h2>Subscribe to our Newsletter!</h2>

        <form class="needs-validation" method="POST" action="validation.php">
            <div class="form-group">

                <label for="firstName" class="formTitle">First Name:</label>
                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter first name" required>

                <label for="lastName" class="formTitle">Last Name:</label>
                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter last name" required>

                <div class="title-select">
                    <label for="preferredTitle" class="formTitle">Please select your preferred title:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="mr" name="title" value="mr">
                        <label class="form-check-label" for="titleRadio">Mr.</label>
                   
                        <input class="form-check-input" type="radio" id="mrs" name="title" value="mrs">
                        <label class="form-check-label" for="titleRadio">Mrs.</label>
                   
                        <input class="form-check-input" type="radio" id="ms" name="title" value="ms">
                        <label class="form-check-label" for="titleRadio">Ms.</label>
                   
                        <input class="form-check-input" type="radio" id="dr" name="title" value="dr">
                        <label class="form-check-label" for="titleRadio">Dr.</label>
                    </div>
                </div>

                <label for="emailAddress" class="formTitle">Email address</label>
                <input type="email" name="emailAddress" id="emailAddress" class="form-control" placeholder="Enter email" required>

                <div class="newsletter-select">
                    <label for="preferredTitle" class="formTitle">Please select your preferred Newsletter Subscription:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="mr" name="subscriptionType[]" value="Monthly Sales">
                        <label class="form-check-label" for="subType">Monthly Sales</label>
                        <br>
                        <input class="form-check-input" type="checkbox" id="mrs" name="subscriptionType[]" value="Job Postings">
                        <label class="form-check-label" for="subType">Job Postings</label>
                        <br>
                        <input class="form-check-input" type="checkbox" id="ms" name="subscriptionType[]" value="Product Updates">
                        <label class="form-check-label" for="subType">Product Updates</label>
                        <br>
                        <input class="form-check-input" type="checkbox" id="dr" name="subscriptionType[]" value="Blog Posts">
                        <label class="form-check-label" for="subType">Blog Posts</label>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button><br><br>
        </form>

        <div class="summary-content">
            <p><strong>Keep up to date by signing up for our monthly Newsletters.</strong></p><br>
            <p>You will recieve quarterly updates of exclusive business news, relating to our Monthly Sales, Product Updates, and Blog Posts! Keeping up to date with our newsletter will ensure that you are never left out of the moment! Sign up now and imediatley recieve a promotional code for 10% off of your next order.</p><br>
            <p>All information remains confidential. We will not share any of your information with any other organization, and you may unsubscribe at any time.</p>
        </div>

        <div class="gallery">
            <div class="large">
                <img src="images/cellphone-coffee-desk-860379.jpg" alt="Grey Business Cards with Copper Foil" class="image1">
            </div>
            <div class="column">
                <div class="medium">
                    <img src="images/adult-banking-blur-935979.jpg" alt="Grey Business Cards with Rose Gold Foil" class="image2">
                </div>
                    <div class="small">
                    <img src="images/computer-drink-iphone-586339.jpg" alt="Grey Pulp Business Cards" class="image3">
                </div>
            </div>

        </div>


    </div> <!-- End Content Wrapper -->
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
    //                             ==(W{==========-      /===-                        
    //                                 ||  (.--.)         /===-_---~~~~~~~~~------____  
    //                                 | \_,|**|,__      |===-~___                _,-' `
    //                    -==\\        `\ ' `--'   ),    `//~\\   ~~~~`---.___.-~~      
    //                ______-==|        /`\_. .__/\ \    | |  \\           _-~`         
    //          __--~~~  ,-/-==\\      (   | .  |~~~~|   | |   `\        ,'             
    //       _-~       /'    |  \\     )__/==0==-\<>/   / /      \      /               
    //     .'        /       |   \\      /~\___/~~\/  /' /        \   /'                
    //    /  ____  /         |    \`\.__/-~~   \  |_/'  /          \/'                  
    //   /-'~    ~~~~~---__  |     ~-/~         ( )   /'        _--~`                   
    //                     \_|      /        _) | ;  ),   __--~~                        
    //                       '~~--_/      _-~/- |/ \   '-~ \                            
    //                      {\__--_/}    / \\_>-|)<__\      \                           
    //                      /'   (_/  _-~  | |__>--<__|      |                          
    //                     |   _/) )-~     | |__>--<__|      |                          
    //                     / /~ ,_/       / /__>---<__/      |                          
    //                    o-o _//        /-~_>---<__-~      /                           
    //                    (^(~          /~_>---<__-      _-~                            
    //                   ,/|           /__>--<__/     _-~                               
    //                ,//('(          |__>--<__|     /                   .----_          
    //               ( ( '))          |__>--<__|    |                 /' _---_~\        
    //            `-)) )) (           |__>--<__|    |               /'  /     ~\`\      
    //           ,/,'//( (             \__>--<__\    \            /'  //        ||      
    //         ,( ( ((, ))              ~-__>--<_~-_  ~--____---~' _/'/        /'       
    //       `~/  )` ) ,/|                 ~-_~>--<_/-__       __-~ _/                  
    //     ._-~//( )/ )) `                    ~~-'_/_/ /~~~~~~~__--~                    
    //      ;'( ')/ ,)(                              ~~~~~~~~~~                         
    //     ' ') '( (/                                                                   
    //       '   '  ` 
?>