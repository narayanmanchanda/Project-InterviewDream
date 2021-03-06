<?php
include('login.php');
/*if (isset($_SESSION['login_user'])) {
    header("location:profile.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InterviewDream</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/front_style.css" rel="stylesheet">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- css for the login modal-->
      <style type="text/css">
   .modal-header, .h4, .close {
      background-color: #222;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: rgba(96, 125, 139, 0);
  }
 .btn.btn-default.btn-success.btn-block {
    background-color: #222;
}
  </style>
  <!--ends-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation bar starts here   -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">InterviewDream</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#courses">Courses</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#test_platform">Online Test</a>
                    </li>
                </ul>
                <a href="signup.php"><div class="navbar_btn" id="sign_up">Sign Up</div></a>
                <a href="#" id="login2"><div class="navbar_btn" id="login1">Login</div></a>
                <!--
                <ul class="nav navbar-nav" style=" border: 1px solid green; padding: 5px"><!-float right to the above style ->
                    <li class="">
                        <a class="page-scroll navbar_btn_inner"><div style="height: 30px;">Sign Up</div></a>
                    </li>
                    <li class=" ">
                    <a class="page-scroll navbar_btn_inner"><div style="height: 30px;">Login</div></a>
                    </li>
                </ul>
                -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Navigation bar ends here -->

    <!-- Banner Section -->
    <section id="" class="">
        <div class="container-fluid">
            <div class="row banner">
                <img id="banner_image" src="img/jpg/banner1.jpg" />
                <div id="banner_text">
                    <h1>InterviewDream</h1>
                    <h4>Practice soft skill and have the knowledge and confidence to land your dream job more easily.</h4>
                    <p></p>
                    <a href="signup.php" style="color : white;"><div id="banner_login_btn">Sign Up </div></a>
                </div>
                    <a href="#about" class="page-scroll"><div id="more_button">More<br><span style="margin-left: 5px;" class="glyphicon glyphicon-chevron-down"></span></div></a>
            </div>
        <!--
            <div class="row">
                <div class="col-lg-12">
                    <h1>Scrolling Nav</h1>
                    <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                    <a class="btn btn-default page-scroll" href="#contact">Know More</a>
                </div>
            </div>
            -->
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
                <div class="row">
                    <div class="col-md-7 about_heading" id="about_title">
                        What is InterviewDream?
                    </div>
                    <div class="col-md-5 about_heading">
                        <a href="main.html"><div id="about_heading_button"><h2>Get Started</h2></div></a>
                    </div>
                </div>
                <div id="about_discription">
                    InterviewDream gives you both "FAST TRACK" and "BEST WAY" to get you ready by series of questions. InterviewDream also allows you to get familiar with online test section of various companies by providing mock tests available.
                </div>
        </div>
    </section>

    <!-- courses Section -->
    <div id="courses" style="margin-top: -55px;"></div>
    <section style="margin-top: 80px;">
        <div class="container-fluid" style="margin-top: 50px;">
            <div class="row">
                <a href="main.html#nav_panel_c_programming"><div class="col-lg-4 outer_course_icon"><img class="course_icon" src="img/icons/c1.svg" /></div></a>
                <a href="main.html#nav_panel_database_programming"><div class="col-lg-4 outer_course_icon"><img class="course_icon" src="img/icons/sql.svg" /></div></a>
                <a href="main.html#nav_panel_cplusplus_programming"><div class="col-lg-4 outer_course_icon"><img class="course_icon" src="img/icons/c++.svg"/></div></a>
            </div>
            <div class="row">
                <a href="main.html#nav_panel_javascript_programming"><div class="col-lg-4 outer_course_icon"><img class="course_icon" src="img/icons/js.svg"/></div></a>
                <a href="main.html#nav_panel_html_programming"><div class="col-lg-4 outer_course_icon"><img class="course_icon" src="img/icons/html.svg"/></div></a>
                <a href="main.html#nav_panel_java_programming"><div class="col-lg-4 outer_course_icon"><img class="course_icon" src="img/icons/java.svg"/></div></a>
            </div>

        </div>
    </section>

    <!-- Online Test platform Section -->
    <section id="test_platform" class="test_platform_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <img id="students_giving_exam_tablet" src="img/png/tablet.png"/>
                </div>
                <div class="col-lg-7 test_discription">
                    <h1>Online test platform</h1>
                    <div style="background-color: rgba(0,0,0,0.8);width: 100%;height: 1px;"></div>
                    <div id="test_discription_inner">
                        <p>Learn and practice Online Test (for General Aptitude, Competitive Examination, Entrance examination and Campus Interview) to improve your skills in order to face the Interviews with full confidence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row test_ribbon">
            <div class="col-lg-6 test_ribbon_inner" id="test_ribbon_col1"><h2>Test Your Skills and Performance</h2></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 test_ribbon_inner" id="test_ribbon_col2">
                <a href="main.html#nav_panel_c_programming" >
                    <div id="border_checknow"><h2>Check Now</h2></div>
                </a>
            </div>
        </div>
    <!-- Test platform section ends here -->


    <!-- Footer section -->
    <!-- footer starts-->
  <div class="row" style="background-color: #333333; color: #aaaaaa;">
    <div class="col-sm-6">
      <h1 class="text-center">About the page</h1>
      <p class="text-center">Made with lot of efforts and <span class="glyphicon glyphicon-music"></span>.</p>
    </div>
    <div class="col-sm-6">
      <h1 class="text-center">Know more about Us</h1>
      <p class="text-center">
        <!-- Twitter icon by Icons8 -->
<a href="https://twitter.com/Navdeep2510" target="_blank"><img class="icon icons8-Twitter" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAADTklEQVRoQ+1Y3VHbQBD+9kTMZCwGdxB3EFEBTgWBFwxPmAowFQAVxB3gPGH7BaeCKBXEqQDTAYwFCZm528yd+XGwJZ1OAoYZ6VXan+/bb/f2RHjjD73x/FECeO0KlhUoK5CTgVJCOQnMbf6yFTj9XRdC7gNoEBDo7BkYAQhVpXqMTbqcQzSIAmz5+puFTzqA00kDOythXqpE//qQwEdxfhh8SUQHcsvv4oxruL1Z98BtJlyopt9yA3DGNfE3OgfTUG37e64gRC86IUJsEv/5ZYQgNKbV4StV8esLK3NnlFyB00nDE/TdOGN0XUB4g6gFxklW8CZ5ogbeVcf4EwVxKkgEIPqTIwIdPgbnoaz4e0mMPE1U9KJzItSzAgB4CKYaE68ZIDF9kBGAqcRYMe9Z9cUgCjzGz+zJP1pI0Caa1aFbD8xIaN4BD6VaOsDO+3Gcc1f5POg/gfn7mMk9MG3iMYFW41nkoWTRxXb125x85iRoX4s05u0AABC9qEMEPbsTHzMGgZCZQiW8ESCvPD3rHRpYB5KKP9nINP0c0FW4vR4R4UMaiCLfFwOgf73hgVel8n4IkkMifCwyySRfkrCWdAJbSUj0ojYRvrxU0rNxZNNPVweQcqUsYAy6gGfGL7Xtm10p7UlF6fUnIUDraY6KfM/A16T9ZzZWKgC8QhVsR6gGkg4AQJ4DKWtlzA7UXKnZ2lkBMM5MJbjz3HJi8LFqrsSu3U+B2QPQ9wJviQXLDQLatgxl+c6wr5aCpPXEGcD8ZpolNbtvs7Jv3QMmvNVeZJfooq+YcaGWq0GWVT0bgLs+EMxh8nLnBsJ2dXCW0IPh9GJ+RMCuW6rzVi7Sufdi38RP4w6iQCj9d4EbIPrsCibLobUohjuA6aq9D2J97bSe27NJ5E0+ew/cRff60S4D7ft/Oy7s55GN3SqhfyjBe7iJCVYNggrY/JRyY1wHNtOGuWVzWbEhJl5C07GpD6x2EVNHH1IAOqrid7KOyiQg6T2gpw7JDQAtlwuNZtwkvlztFpm42xTS+xAQMJvpU2em+uxVU7NMwIiZRiQwktILs6wFNpLJfw64RHlGm3QJPWPwIlyXAIpgMY+PsgJ52CvCtqxAESzm8VFWIA97Rdj+A7EwUUCG28orAAAAAElFTkSuQmCC" width="48" height="48"></a>
        <!-- LinkedIn icon by Icons8 -->
<a href="https://www.linkedin.com/in/navdeep-singh-4631a9127/" target="_blank"><img class="icon icons8-LinkedIn" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAACQUlEQVRoQ+1Zz0sbQRh9s2JVcrAUqoKYFnKuK0JPHpIm/QO81ovSf0D0orlI9BJzae2tN38c4rFevGnYQHt3kxxEFEqkBz1UBAMqdKdMcEWTnUxWdrM7OHv9Pmbe+977Zpb5CCT/iOT4oQgEraBSIPwK5EqThFqzBCTRSbAU1KBE+4aF0Z1W+7a0kLZ6sA6QmU4Cb9qLYtlK6xkeBj6BXGlSo/RHoODvNreo9gHpd4YTFi4BkjUNQhAPAwFKUaRp3dHCXALaqknDAN7GYC3qjlifHwF9oBdfUsNIRCMwqjXM7/+BeX7tu1ieKVCYiiE+ErkHzEiktk/kIfBvYbQJbFeuJA+BRgWKpzUk8xIpwHrg68fhuo0Y+Lk9yXrAd69wNvCsiaUnIGpiXvxNfzeWJoYwNtiHsYHeeh3YCbZZ/outyoWwLp4p8BQC4+tHYM3/sqfLEejB+TWS+WNc3lhcIoES+H15i7f9L1pWWXSfBEpA6I+7hOT2CYrVmmN64ARWfp3BqF7VbTT7/vWj29xGvFm5wOfd0/ARYOCXf549AtZ4IbIgs1rs+2H4CLxaqzQ1aDwaQeFTrO3fkkAtxPtXEp1oD9kpAnY1RFUTxR9W1U2uUkAp4HA4KgsB/Od13rOKqGqiuGriBiu6fhcSVVgUD1yBdv8svc7z7B7wGli767kmIP3jLmR/XmfSallzAwTT7crsS96TBxw2mmw5QWBlOj0rqM8EoGV4gw0bnppS+mIbF4sqBVwUy5dUpYAvZXWx6H+KpYVA1gC++wAAAABJRU5ErkJggg==" width="48" height="48"></a>
        <!-- GitHub icon by Icons8 -->
<a href="https://github.com/Nav2510" target="_blank"><img class="icon icons8-GitHub" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAFe0lEQVR4Xu2aS3oaRxDHq3q0j30C4xMEnSAokLWkDFkbncA8sjfah4dPILyOiKR1hgifQOQEJicw3jNd/noAaUAzU9UzI4VPMNvpV/36X9XVD4Qd/3DH7Yc9gL0CdpzA3gV2XAD7IPgsLtArXb0ixz8mxCICFYGwAAiFNfURTAFpioBjIpqi79w0xqezp1bokwFYGv0OEGoAWExnCE2AYIC+8+mpYOQOoFe6KugD/R4JaoDwKp3hG7UIZoQwUHP1sTE+nebS5rKRXAH0KsMPRFDPzfBNSwlmiNBveO55XhByAdD75apI5F+kl7qtOTTBuXOahxoyA+j8PKwhQu/JZj2ODcFMA539Pqpe2+ILl88EIDBewUWWAWStSxrOWv+4g7TtpAawDcavjM4CIRWAbTJ+BUETnaZxB2sAQcDT+vbZfZ7TuFkhfHVoGxitAXQrl3dx0R5BHzW838YGkiZ9AkB1BPyBG3vSfwL6BoB9heq68ffppFf5s0SgbqPr0KTpVQ9t+rMC0KkM2wjwIaoDM9CWV11LfEw2qA90PVzHlEPAyaINWqa6GNQjoGIYGAGcq7nqb2aB3cqQ4hcHOG95blsKQQzAZHjk6LsE6X9uem4pqmNT13f8ouM7E06ikrLdynAMAD9FGmnpCmIA3fJlHxDfJ5CNBSCdDWm5RACBkuQqEAFYbGz0FybwbQ0AWKjgrWQDJQLQqQyNH/cSZ4hg1hy5r6WzmKVctzz8yq1C0txABCAp8t8nIxFBMIuRSXU7lcsZv7rIVgQWQCD/A/2VM2a1BHLl8vifvBQ+9IBz9ZpzAxaALOujm6ZXPcnDOGkbXCA07UiyQxaAIPrDc87+CtAf5csThXiVnETxqwEPIGnNXSQvjxIg6SxmLSeIBezKxAMoD83yt36AuT5ytpOshsbVZ92AYNocuW+T+ucBJKSdy4a3FwAAND030cY9AE6eSRuPnVBApzycIsKbJFCczDjIaf9zk0ME/7VGblL84q/G2EADADgP8u5cz+s5KMHu9EB/Ycqx8UkSA+K3nsvepXk3Z5TNf1mCBjkA4LfBJhsYN73qkY0BWct2K5e3ABh5/nDfNtHH5qhaz7QMSjIu08FzZoPSvUAuqbB0MwQQ3NYccZuPrDO/GI9vZp+9cM1lM2QG3CkPJ4jwIz/4p4VgYzwR/NsauTwk3igAYcBZhcQJonNmTnAlbUvLBLIndcGk5Q/uL7wxYlcB0+LidNc3jxdCR9x0QxqvEakEiO82DSGia0Q1aHq/3kiNjCrXrfx1TKRriCjebtts0EQAzMAeb4sfbmiDewCtr+MTJhqblx+A6oZThplpDeo4eEnCRfk4soLov6oqBhCpAnP4qNRRcGERXIb4xtDIixCTlSlfFbkgGfTjaBNzErPPWNuBvqm5U+D6sQYQBMOow1GC6fJKapYUK2ySJdEhbAwBAmi0PLcvdTuxAlYNRqXG4XP4uMEjqkNO/qs+pOt8hJFs5rdZxxpApNQ3zuGNjH3HLyFiQYGewPzA3AhZvfjiNjqPgq6RPjolKeRULnA/Q8GTGH0XHgQRDFoj90wqPa6cLQAbhYX7tlbAqnKUvxNAv+W5Dc44yX8bADbxJbMLhBuIDHomKCIMCNHsIhef1oXmqPpJYngo1sTeAK8pT5jwxPWdWgFhd0ha/lblbA9NOAWYZCeNz+eqgI2YYJae6CtrweHk5sAYAJ8RVd024EWpILMC1lyiMqwDUDsqGcpDAcvXIm2bdZ5zu1wBmM6Wb4TbhFALg8gCIHhVsngz3LZdTp8dQESQrAHRhDuZeeQCi5OoImkYZHkH+L8C4Drfhv+5u8A2GGUzhj0AG1ovsexeAS9xVm1s2ivAhtZLLLvzCvgONXbWX5bVTsIAAAAASUVORK5CYII=" width="50" height="50"></a>
        <!-- Google Plus icon by Icons8 -->
<a href="https://plus.google.com/+navdeepsingh2510" target="_blank"><img class="icon icons8-Google-Plus" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAC30lEQVRoQ+2ZPVATURSFv+2ZkRIqwwzWhp7wU2IjzEhaAWshlqQxabTlp0/SUxgbLEkkPem1oNNOmMF6ncPLG5mwb13ZZ7Jx9jaZgff2nXPvuT9vN2DCLZhw/OQExh3BPAKZj0BYYp2QPQJWRgo2pEPAYXBOO+7cWAmFJZrA1kiBDx8WUg961FwYnARuPQ8fxgreHh6yGvToRGFxE1i8DeFyRgh0g160hOMiEGYC/ABEcB7ds3ICo4pSHgGnp4srsPYS9DtbuL+s34VGDfqRRSRxAP1HYGoa9pswOwfVdfh+CfNFqLZg/incXMHuKnztJwYZ27C8J/G7Niw+h/KcAW9tpgCNPkw9gi99eLWQQQLydOMCbq7h2fR9gK8PYHPP/F1RSCkfPcavhLZrsP3WAFyKqMTKh6Mz8//jN3BykDoK/47AsIQs1M+DPljdgF7sPJaInF8Ca1smgWXNOjQjZi0RkMTKBZPQUWZJRkVxaL1fAnq4EtVVbSzB99vwqeX28FgJqNqoZBaXjYePKvDtEkrrUK5AEumMlYD1qxL2SRFEyFYel6y0x4J2xcUhJ/8SGgZwt/JMJAF15tMfv2lpfGjV4ytMJiSkpqZkloSkf8nJmhJYieyysRLYrMCLPfh5DedtuBgMa4qEklujhOzkEI4rGSqjAnh4Zjzt6rJac9QxkZHtLKQe6vwlsZ1zeh/NFOoykVCvmHlsZBTXDxL0Yn8ETq+MPOIqjQVkZyYPA50/AjbxdFHZ/cO7rv3WoLHFjBMJvK8l/ggIlG5gsjhpqDppIlWepJSPXwLSti4zGiFkurQIoH6tqZwubZjxwsMk6peABamBTUDlaSWqTNOnLi8qqSLlmkITyubuMn8SesDhPrbkBHx4Mc0z/j4C/8HL3cl+va5whyV0HxwU/TQCSLH3oR847JHh4u17+drIvxWEdHWu68OGxZd/pUwhDi9b8wh4cWOKh+QRSOE8L1t/AR5fMUDBTdheAAAAAElFTkSuQmCC" width="48" height="48"></a>
      </p>
    </div>
     <!--Login modal-->
    <div class = "modal fade" id = "mymodal1" role= "dialog">
    <div class = "modal-dialog">
        <div class = " modal-content">
            <div class = "modal-header">
                <button class= " close" data-dismiss="modal">&times;</button>
                <h3 style="color:white"><span class = "glyphicon glyphicon-lock"></span> LOGIN </h3>
            </div>
            <div class= "modal-body">
                <form method="POST" data-toggle="validator" role= "form" id="loginform">
                    <div class="form-group">
                        <label for="usrname" class="control-label" ><span class="glyphicon glyphicon-user">EMAIL</span></label>
                        <div class="form-inline row">
                        <div class="form-group col-sm-6">
                        <input name="user" type="email" id="usrname" class="form-control" placeholder="Enter email" data-error="Invalid email address" required onchange="user_validation(this.value)"><span id="userval"></span>

                    </div>
                    </div>
                     <div class="form-group">
                    <label for="Password" class="control-label"><span class="glyphicon glyphicon-eye-open"></span>  Password</label>
                     <div class="form-inline row">
                      <div class="form-group col-sm-6">
                      <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" name="password" required>

                     </div>
                    <div  class= "checkbox">
                        <label><input type="checkbox" value=" " checked> Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-default btn-success btn-block" name="log"><span class="glyphicon glyphicon-off">LOGIN</span></button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> CLOSE</button>
                <p><a href="signup.php">Not a member?</a></p>
            </div>
        </div>
    </div>
</div>
    <!-- Login modal ends here-->
</div>
    <!-- Footer ends here -->

    <!-- jQuery -->
    <script src="script/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="script/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="script/jquery.easing.min.js"></script>
    <script src="script/scrolling-nav.js"></script>

    <!-- validating username and emailid-->
    <script src="script/validuser.js"></script>

    <!-- Script for the login modal-->
    <script>
$(document).ready(function(){
    $("#login1").click(function(){
        $("#mymodal1").modal();
    });
});
</script>
<!--ends-->
</body>

</html>
