<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        
       
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" href="{{ url('img/dtpsitet.png') }}">
        <link rel="stylesheet" href="fixed.css" type="text/css">
   
        <title>DTP Site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
        </style>
      <!--  <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>  -->

        <style>
             .newfont {
            
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
            
            }
            .fonthere{
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
            }
            /* HOMEPAGESTART*/

            .home-inner{
        background-image: url(img/computer.jpg);
    }
            /* HOMEPAGE START*/





            /* ABOUT US START*/
             #aboutme img{
            width: 100%;
            
            }
            #aboutme p{
                color: black;
            }
            #aboutme h3{
                color: black;
            }
            #aboutme span{
                color: black;
            }
            
                    #aboutme{
                background-color: white;
            }
            .justify{
                text-align: justify;
                text-justify: inter-word;
            }
               /* ABOUT US END*/

               /* CONTACt*/
               input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
                }

                input[type=submit] {
                background-color: #F1C40F;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                }

                input[type=submit]:hover {
                background-color: #D4AC0D;
                }

                .container {
                border-radius: 5px;
                background-color: #f2f2f2;
           
                }
                .but{
                    margin-bottom: 5px;
                }
                
               /* CONTACt*/

               /* START PROFILE*/

   .jumbotron{
       background-color: whitesmoke;
       margin-bottom: 0;
       padding: 20px 20px;
       border-radius: 0;
   }
   .profile h3{
       color: black;
   }
   .heading{
       color: black;
       text-transform: uppercase;
   }
   .profile p{
       color: black;
   }
   .heading-underline{
       background-color: #ffec01;
       height: 5px;
       width: 70px;
       margin: 0 auto 32px;
   }
   .mu-service-icon-box {
	font-size: 15px;
    margin-bottom: 30px;
    margin-top: 0px;
	display: inline-block;
	border-radius: 50%;
	width: 80px;
	height: 80px;
    line-height: 75px;
    border: 2px solid #ffec01;
    
}
.fa-user-alt{
    margin-top: 24px;
}
.fa-laptop-code {
    margin-top: 24px;
}
.fa-briefcase{
    margin-top: 24px;
}
.fontwhite{
    color: black;
}
   /* END PROFILE*/
        </style>
    </head>
    <body data-spy="scroll" data-target="navbarResponsive">
    

    <!--START HOME SECTION-->
    <div id="home">
        <!-- START OF NAVIGATION-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="img/dtpsitet.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"> 
                <span class="navbar-toggler-icon"></span>
            </button>

           
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto newfont">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#aboutme">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dtpclub">DTP Club</a>
                    </li>
             

                  <!--  <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                  
                    <style>
                            <style>


                            li {
                            float: left;
                            }

                            li a, .dropbtn {
                            display: inline-block;
                            color: white;
                            text-align: center;
                            padding: 14px 16px;
                            text-decoration: none;
                            }


                            li.dropdown {
                            display: inline-block;
                            }

                            .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #f9f9f9;
                            min-width: 160px;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                            }

                            .dropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                            text-align: left;
                            }

                            .dropdown-content a:hover {background-color: #f1f1f1;}

                            .dropdown:hover .dropdown-content {
                            display: block;
                            }
                            .log{
                                text-transform: capitalize;
                            }
                            </style>
                    <li class="dropdown nav-item">
                    <a href="javascript:void(0)" class="dropbtn nav-link" >Student <i class="fas fa-caret-down"></i></a>
                    
                    <div class="dropdown-content">
                    <a href="{{ url('login') }}" class="log">Login</a>
                    <a href="{{ url('signup') }}" class="log">Sign Up</a>
                

                </ul>

    
   

</div>


            </div>
        </nav>
        <!--END NAVIGATION-->

        <!--START LANDING PAGE-->
                    <div class="landing">
                            <div class="home-wrap">
                                <div class="home-inner">
                                </div>

                            </div>
                    </div>

                        
                        <div class="caption text-center fonthere">
                            <div class="header-area fonthere">
                                <h1 class="fonthere">Department of Technical Programs</h1>
                                <p> <span class="texttyping"></span></p>
                                <a class="btn btn-outline btn-lg fonthere" href="#aboutme">Get Started</a>
                               
                            </div>
                    
                        </div>
        <!--END LANDING PAGE-->
    </div>

         <!--START ABOUT ME PAGE-->

                        <div id="aboutme">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="heading text-center fonthere ">About Us</h3>
                                        <div class="heading-underline"></div>
                                            <p class="justify">The Department of Technical Program (DTP) Portal is dynamic web portal for 
                                            establishing communications within the IT premises. Providing an access for 
                                            all the information and announcements from the department in just a view away. 
                                            With transparency, valued with honesty and resilience, the portal serves as a 
                                            step-up communication channel for the students about the information regarding 
                                            the events, announcements, accounts, schedules and other departmental matters. 
                                            DTP Portal is a system created by a group of students that works hard to accomplish 
                                            a common goal. However, this site is still developing and we encourage students to 
                                            be part of our team.</p>
                                        
                                            <div class="row">
                                                 <div class="col-md-6">
                                                    
                                                 <div class="container">
                                                            <h2 class="text-center fonthere">Vision</h2>
                                                          
                                                            <div class="card" style="width:430px">
                                                                <img class="card-img-top" src="img/vision.jpg" alt="Card image" style="width:100%">
                                                                <div class="card-body">
                                                               <!--  <h4 class="card-title">John Doe</h4> -->
                                                                <p class="card-text justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper elementum varius. 
                                                                    Praesent in mollis tellus. Aliquam sed lorem eget dolor semper commodo vitae vel ligula.
                                                                     Vivamus auctor tempus ligula eu congue. Nam luctus odio massa, a sodales dolor consectetur tincidunt.
                                                                   </p>
                                                 
                                                                </div>
                                                            </div>
                                                            <br>
                                                            
                                                      
                                                            </div>


                                                </div>
                                                    <div class="col-md-6">
                                                        <div class="container">
                                                            <h2 class="text-center fonthere">Mission</h2>
                                                            
                                                            <div class="card" style="width:430px">
                                                                <img class="card-img-top" src="img/plan.jpg" alt="Card image" style="width:100%">
                                                                <div class="card-body">
                                                             <!--    <h4 class="card-title">John Doe</h4> -->
                                                                <p class="card-text justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper elementum varius. Praesent in mollis tellus.
                                                                     Aliquam sed lorem eget dolor semper commodo vitae vel ligula. Vivamus auctor tempus ligula eu congue. Nam luctus odio massa, 
                                                                    a sodales dolor consectetur tincidunt.
                                                                    </p>
                                                              
                                                                </div>
                                                            </div>
                                                            <br>
                                                            
                                                        
                                                            </div>

                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

        <!--START ABOUT ME PAGE-->



        <!--START PROFILE PAGE-->

                        <div id="dtpclub" class="offset ">
                            
                            <div class="jumbotron">
                                <div class="narrow text-center ">
                                    <div class="col-12 ">
                                        <h3 class="heading fonthere">DTP Club</h3>
                                        <div class="heading-underline">

                                        </div>
                                            <div class="row text-center">

                                                <div class="col-md-4">
                                                <div class="container ">
                                                            <h2 class="text-center fonthere">SOITS</h2>
                                                          
                                                            <div class="card" style="width:430px">
                                                                <img class="card-img-top" src="img/meeting.jpg" alt="Card image" style="width:100%">
                                                                <div class="card-body">
                                                               <!--  <h4 class="card-title">John Doe</h4> -->
                                                                <p class="card-text justify fontwhite">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper elementum varius. 
                                                                 
                                                                   </p>
                                                 
                                                                </div>
                                                            </div>
                                                            <br>
                                                            
                                                      
                                                            </div>
                                                </div>

                                                <div class="col-md-4">
                                                <div class="container ">
                                                            <h2 class="text-center fonthere">PGITS</h2>
                                                          
                                                            <div class="card" style="width:430px">
                                                                <img class="card-img-top" src="img/programming.jfif" alt="Card image" style="width:100%">
                                                                <div class="card-body">
                                                               <!--  <h4 class="card-title">John Doe</h4> -->
                                                                <p class="card-text justify fontwhite">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper elementum varius. 
                                                                 
                                                                   </p>
                                                 
                                                                </div>
                                                            </div>
                                                            <br>
                                                            
                                                      
                                                            </div>

                                                </div>

                                                <div class="col-md-4">
                                                <div class="container ">
                                                            <h2 class="text-center fonthere">GMITS</h2>
                                                          
                                                            <div class="card" style="width:430px">
                                                                <img class="card-img-top" src="img/graphics.jfif" alt="Card image" style="width:100%">
                                                                <div class="card-body">
                                                               <!--  <h4 class="card-title">John Doe</h4> -->
                                                                <p class="card-text justify fontwhite">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper elementum varius. 
                                                                 
                                                                   </p>
                                                 
                                                                </div>
                                                            </div>
                                                            <br>
                                                            
                                                      
                                                            </div>

                                                </div>
                                                
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>

        <!--END PROFILE PAGE-->




        <!--START CONTACT PAGE-->

                        <div class="contact" class="offset">
                            <div class="fixed-background">
                            <div class="row dark text-ceter">
                                <div class="col-12 text-center">
                                    <h3 class="heading fonthere">Contact Us</h3>
                                    <div class="heading-underline">

                                    </div>

                                    <div class="row text-center">
                                        <div class="col-md-4 contact">
                                            <span class="mu-service-icon-box">
                                                <i class="fas fa-map-marker-alt fa-4x" data-fa-transform="shrink-3 up-5"></i> 
                                            </span> 
                                        <p> Digos City, Davao Del Sur, Philippines  </p>
                                        </div>
                                        <div class="col-md-4 contact">
                                            <span class="mu-service-icon-box">
                                                <i class="fas fa-phone-alt fa-4x" data-fa-transform="shrink-3 up-5"></i> 
                                            </span> 
                                        <p> +639484488448</p>
                                        </div>
                                        <div class="col-md-4 contact">
                                            <span class="mu-service-icon-box">
                                                <i class="fas fa-envelope fa-4x" data-fa-transform="shrink-3 up-5"></i> 
                                            </span> 
                                        <p> dtpsite@gmail.com</p>
                                        </div>
                                       
                                       
                                        <div class="container">
                                        <form action="/action_page.php">
                                        <div class="row">
                                        <div class="col-md-6 contact">
                                       
                                            <input type="text" id="fname" name="firstname" placeholder="Your first name..">

                                        </div>
                                        <div class="col-md-6 contact">
                               
                                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                        </div>


                                        </div>
                                           
                                           
                                         
                                            <input type="text" id="lname" name="lastname" placeholder="Subject">


                                        

                                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                                            <input class="but" type="submit" value="Submit">
                                        </form>
                                        </div>


                                        
                                    </div>
                                </div>

                            </div>

                            <div class="fixed-wrap">
                                <div class="fixed">
            
                                </div>
                            </div>

                        </div>

                        </div>

         <!--END CONTACT PAGE-->

                       


   

        <footer id="footer" role="contentinfo">
            <div class="container">
                <div class="footer-area text-center">
                    <p>&copy: <strong>DTP Site</strong> All rights reserved.</p>

                </div>

            </div>

        </footer>
























    <div id="aboutme"></div>
    <div id="profile"></div>
    <div id="contact"></div>





















     <!--- Script Source Files -->
   	<!-- Featured Slider -->
     <script src="js/typed.min.js"></script>
     <script>
         var typed=new Typed('.texttyping',{
             strings: [
                 "Join and be part of our growing team",
                 "Share knowledge with your colleagues",
                 "Be updated with the department's events and activities"
             ],
             typeSpeed: 50,
             backspeed: 10,
             loop: true
         });
     </script>
   
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
<!-- <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script> -->
<script  src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>
