<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dogs</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" 
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/8913a5c2b2.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">

        <style>

            .nav-style {
                font-family: 'Scope One', serif;
                background-color: black;
                color: white; 
                text-align: left;
                font-size: 20px;
                font-weight: 900; 
            }

            .nav-style2 {
                font-size: 44px !important;
                color: white;
            }

            .nav-style3 {
                font-size: 20px !important; 
                color: white;
            }

            .green-btn {
                background-color:#FFFFFF !important;
                color: black !important;
                font-size: 14px !important;
                padding: 4px 8px;
                border: none;
                border-radius: 5px;
                text-align: center !important;
            }

            .first {
                background-image: linear-gradient(20deg,#000000, #FFFFFF ); 
                font-size: 21px;  
                color: black;
                padding: 30px 0px 0px 0px;
                font-family: 'Big Shoulders Display', cursive;
            }

            .main-page {
               padding: 30px 0px 0px 0px;
               background-image: linear-gradient(4deg, #FFFFFF  ,#000000); 
               font-size: 20px;
            }
            
            .main-page2 {
               padding: 50px 0px 0px 0px;
               background-image: linear-gradient(4deg,#000000,#FFFFFF ); 
               font-size: 20px;
           }

           .foot-font {
                text-align: left;
                font-size: 14px;
                background-color: #000000;
                border-top: 1px solid  #000000;
                padding-top: 18px;
                padding-bottom: 18px;
                color: #FFFFFF;
                font-family: 'Work Sans', sans-serif;
                line-height: 14px;
            }

        </style>
    </head>

    <body style="background-image: linear-gradient(2deg,#5E1914,#5E1914);">

        <!-- Navigation -->

        <div class="container">
            <div class="row  nav-style">
                <div class="col-md-3">
                    <a href="#" class="nav-style2" style="font-family: 'Freckle Face', cursive;"> DOGS</a> 
                </div>
                <div class="col-md-9" style="padding: 20px 0px 0px 210px;">
                    <a href="#" class="nav-style3">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="nav-style3">CONTACT US</a>&nbsp;&nbsp;&nbsp;&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="nav-style3">HELP</a>&nbsp;&nbsp;&nbsp;&nbsp;<b>|</b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="Search" style="font-size: 12px; padding: 0px 20px 0px 0px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;<button class="green-btn">SEARCH</button>
                </div>   
            </div>
        </div>

        <!-- End Navigation -->


        <!-- Photo of the day-->

        <div class="container">
            <div class="row first">
                <div class="col-md-5">
                    <p style="font-size:51px; text-align: center; padding-top: 30px;font-family: 'Freckle Face', cursive;">
                    Photo of the day!</p><br>
                    <p style="font-size:22px; text-align: center;"><q>Milo is 3 years old. She likes to walk, 
                    play with her toys and belly rubs. She can roll over, sit, stay and even shake your hands!</q>
                    <br><br> Owner: Lisa Ray</p>
                </div> 
                <div class="col-md-4" style="padding: 30px 0px 0px 40px;">
                    <img src="images/dog1.jpeg" alt="dog photo of the day" style="height: 300px; width: 300px;">
                </div>
                <div class="col-md-3">
                    <p style="font-size: 28px;">Upload your photo</p><br><br><form action="form.php" method="POST">
                    <input type="submit"  value="upload image" name ="submit"></form><br><hr>
                    <p style="font-size: 24px;"><strong>Sign up</strong> and get photo of the day<br><br> 
                    and newsletter!<br><br>
                    <input style="font-size: 16px; padding-right: 66px;" 
                    type="email" placeholder="example@gmail.com">&nbsp;&nbsp;
                    <button class="green-btn">Sign Up</button><br><br></p>
                </div>  
            </div>
        </div>

        <!-- End Photo of the day-->


        <!-- Main page  -->

        <div class="container main-page">
            <div class="row">
                <div class="col-md-3">
                    <img src="images/dog2.jpg" alt="dog photo number 2" style="height: 200px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>

                    <img src="images/dog4.jpg" alt="dog photo number 4" style="height: 400px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>

                    <img src="images/dog10.jpg" alt="dog photo number 10" style="height: 250px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a><br><br>

                    <img src="images/dog11.jpg" alt="dog photo number 11" style="height: 300px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a>                   
                </div>

                <div class="col-md-3">
                    <img src="images/dog5.jpg" alt="dog photo number 5" style="height: 300px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>

                    <img src="images/dog3.jpg" alt="dog photo number 3" style="height: 300px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>


                    <img src="images/dog8.jpg" alt="dog photo number 8" style="height: 320px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a><br><br>


                    <img src="images/dog7.jpg" alt="dog photo number 7" style="height: 234px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a>
                </div>

                <div class="col-md-3">
                    <img src="images/dog12.jpg" alt="dog photo number 12" style="height: 300px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>

                    <img src="images/dog13.jpg" alt="dog photo number 13" style="height: 300px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>

                    <img src="images/dog14.jpg" alt="dog photo number 14" style="height: 300px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a><br><br>

                    <img src="images/dog9.jpg" alt="dog photo number 9" style="height: 250px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a>
                    
                 </div>

                 <div class="col-md-3">
                    <img src="images/dog15.jpg" alt="dog photo number 15" style="height: 350px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>

                    <img src="images/dog16.jpg" alt="dog photo number 16" style="height: 250px; width: 250px;">
                    <br><a href="#" style="color: white;">VIEW PHOTO</a><br><br>


                    <img src="images/dog17.jpg" alt="dog photo number 17" style="height: 300px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a><br><br>


                    <img src="images/dog6.jpg" alt="dog photo number 6" style="height: 250px; width: 250px;">
                    <br><a href="#" style="color: black;">VIEW PHOTO</a><br><br>

                </div>
            </div>
        </div>

        <!-- footer -->
            
        <div class="container">
            <div class="row foot-font">
                <div class="col-md-4" style="font-size:14px; line-height: 14px;">copyright 
                    <i class="fa fa-copyright" aria-hidden="true"> 2020</i>
                </div>
                <div class="col-md-8" style="text-align: right !important;"><p>Privacy Policy&nbsp;&nbsp;|&nbsp;&nbsp;Terms of Use
                    |&nbsp;&nbsp;<i class="fa fa-globe" aria-hidden="true"></i> United States</p>
                </div>
            </div>
        </div>

        <!-- End footer section -->


    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    </body>
</html>