<html>
    <head>
        <title>Feedback Form</title>
        <link href="../css/style.css" rel="stylesheet" text="text/css" />
    </head>
    <body >
        <nav>
            <a href="index.php">HOME</a>
            <a href="menu.php">MENU</a>
            <a href="howItWorks.php">HOW IT WORKS</a>
            <a href="contactUs.php">CONTACT US</a>
        </nav>
        
        <div class = "Hello There">
            <br><br><br><br><br><br><br>
            <center><h1>SYROS PIZZA</h1></center>
            <br><br>
        </div>
        
        <br><br><br><br><br>
        
    <div id="feedbackform"><center>

        <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback</h2> 
                    <p><b>Please provide your feedback below: </b></p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-20 form-group">
                                <label><b>How do you rate your overall experience?</b></label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                       <b>Bad</b>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        <b>Average</b> 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        <b>Good</b>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"><b>Comments:</b></label>
                                <center></center><textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <center><label for="name"> <b>Your Name:</b></label></center>
</center>
                                <center><input type="text" class="form-control" id="name" name="name" required>
                            </div></center>
                            <div class="col-sm-6 form-group">
                                <center><label for="email"> <b>Email:</b></label></center>
                                <center><input type="email" class="form-control" id="email" name="email" required>
                            </div></center>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <center><button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button></center>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </center></div>
    </div>
    <br><br><br><br><br><br><br><br><br>
		<div class = "#">
            <br><br><center>
            <p class = "imageHead">Connect with us on social media:</p><br>
            <a href = "https://www.facebook.com/"><img src = "../resources/social/facebook.jpg" class = "social" /></a> &nbsp;
            <a href = "https://twitter.com/"><img src = "../resources/social/twitter.png" class = "social" /></a> &nbsp;
            <a href = "https://www.instagram.com/"><img src = "../resources/social/instagram.jpg" class = "social" /></a> &nbsp;
            <a href = "https://m.youtube.com/"><img src = "../resources/social/youtube.jpg" class = "social" /></a> &nbsp;
            <br><br><br><br>
            <p class = "imageHead"><a class = "terms" href = "termsofuse.php">Terms of Use</a><br><br><a class = "terms" href = "privacystatements.php">Privacy Statement</a><br><br><a class = "terms" href = "feedbackform.php">Leave Feedback</a><br><br><a class = "terms" href = "aboutus.php">About Us</a></p>
            </center>
            
        </div>
    </body>
</html>