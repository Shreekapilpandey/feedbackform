<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="navhead">
        <div class="logo">
            <a href="index.php"><img src="./gallery/logo.png"></a>
        </div>
        <div class="contact">
            <div class="mail">
                <i class="fas fa-envelope" style="color: #ffffff;"></i>
                <h4>Mail us</h4>
                <a href="mailto:youremailhere.com.au">youremailhere.com.au</a>
            </div>
            <div class="phone">
                <i class="fas fa-phone" style="color: #ffffff;"></i>
                <h4> Contact Us</h4>
                <a href="tel:000000000">1300 234 5678</a>
            </div>
        </div>
    </div>

    <div class="navbar">
        <div class="nav-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Services <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#">NDIS Support coordination</a>
                        <a href="#">Respite Home </a>
                        <a href="#">Transport </a>
                        <a href="#">Group Activities </a>
                        <a href="#">Supported Independent living (SIL) </a>
                    </div>
                </li>
                <li><a href="#">NDIS</a></li>
                <li><a href="#">Referral</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="enquiries_btn">
            <button>Enquiries</button>
        </div>
    </div>

    <div class="image-body">
        <div class="img-body">
            <h3>Staff Satisfaction</h3>
        </div>
    </div>

    <div class="survey-container">
        <div class="bhado">
            <div class="survey-p">
                <p> <strong><center>We want to hear from our employee! Please share your honest responses to the following questions.</center></strong></p>
            </div>

            <form action="./submit.php" method="post">
                <div class="question">
                    <p>1. Overall, how much do you enjoy working at our company?</p>
                    <div class="answer">
                        <textarea id="question1" name="question1" rows="4" cols="50"></textarea>
                    </div>
                </div>
            
                <div class="question">
                    <p>2. How satisfied are you with career growth opportunities at Infinite Ability?</p>
                    <div class="answer">            
                        <textarea id="question2" name="question2" rows="4" cols="50"></textarea>
                    </div>
                </div>
            
                <div class="question">
                    <p>3. Overall, how much do you enjoy working at our company?</p>
                    <div class="answer">
                        <textarea id="question3" name="question3" rows="4" cols="50"></textarea>
                    </div>
                </div>
          
                <div class="question">
                    <p>4. How well do your job responsibilities match your strengths?</p>
                    <div class="answer">
                        <textarea id="question4" name="question4" rows="4" cols="50"></textarea>
                    </div>
                </div>

                <div class="question">
                    <p>5. How satisfied are you with your current work-life balance?</p>
                    <div class="answer">
                        <textarea id="question5" name="question5" rows="4" cols="50"></textarea>
                    </div>  
                </div>
                <div class="submit">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
