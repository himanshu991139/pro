<!DOCTYPE html>
<html>
<head>
<title>FIRST PROJECT</title>
<script>
    function myfunction()
    {
    document.querySelector('.bg-modal').style.display = "flex";
}
function fun()
{
  
document.querySelector('.bg-modal').style.display = "none";
}

  </script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.js">
<link rel="stylesheet" type="text/css" href="css/p2.css">
<link rel="stylesheet" type="text/css" href="css/card.css">
<link rel="stylesheet" type="text/css" href="css/cardhover.css">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



   <!-- CSS reset -->
  <link rel="stylesheet" href="style - Copy.css">
</head>
<header>
  <!--Nav Bar
  -->
  <div>
<nav class="navbar navbar-inverse d-inline">
  <div>
<img src="images/logo.jpg" id="logo"></img>
</div>
  <div class="nav navbar-nav" id="search">
    <li><a href="index.html">HOME</a></li>
    <li><a href="About/about.html">ABOUT</a></li>
    <li><a href="Computer Notes/sa.html">NOTES</a></li>
    <li><a href="#">UPLOAD</a></li>
  </div>
    <form class="navbar-form navbar-left">
          <div class="form-group" style="margin: 0px;">
            <input type="text" class="form-control mr-sm-2" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-info" style="margin-right: 0px;">Submit</button>
      
      
  


        <ul class="js-signin-modal-trigger" style="display: inline;">
        
        <button class="btn btn-warning" id="login"  data-signin="login" style="margin-left: -5px;">Login/sign up</a></button>
        
      </ul>
    </form>
    </nav>



  <div class="cd-signin-modal js-signin-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-signin-modal__container"> <!-- this is the container wrapper -->
      <ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
        <li><a href="#0" data-signin="login" data-type="login">Sign in</a></li>
        <li><a href="#0" data-signin="signup" data-type="signup">New account</a></li>
      </ul>


      <form  methord="post" action="var.php">
      <div class="cd-signin-modal__block js-signin-modal-block" data-type="login"> <!-- log in form -->
        
       <input type="text" name="email" class="jumbo">

  <br><br>
  <input type="text" name="password" placeholder="password" class="jumbo">
  <br><br>


          <p class="cd-signin-modal__fieldset">
            <input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="Login">
          </p>
        </form>
        
        <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="reset">Forgot your password?</a></p>
      </div> <!-- cd-signin-modal__block -->

      
        

          <form method="post" action="signup.php"> 
      <div class="cd-signin-modal__block js-signin-modal-block" data-type="signup">

  <input type="text" name="name" placeholder="Username" class="jumbo">
 
  <br><br>
  <input type="text" name="email" placeholder="Email" class="jumbo">

  <br><br>
  <input type="text" name="password" placeholder="password" class="jumbo">
  <br><br>
    <input type="text" name="secpassword"  placeholder="Retype-password" class="jumbo">
    <p class="cd-signin-modal__fieldset">
    
            <input class="cd-signin-modal__input jumbo"  style=" margin-left: 40px;margin-bottom: 30px;" type="submit" value="Create account">
          </p>


</form>

      <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
        <p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

        <form class="cd-signin-modal__form">
          <p class="cd-signin-modal__fieldset">
            <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
            <span class="cd-signin-modal__error">Error message here!</span>
          </p>

          <p class="cd-signin-modal__fieldset">
            <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
          </p>
        </form>

        <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to log-in</a></p>
      </div> <!-- cd-signin-modal__block -->
      <a href="#0" class="cd-signin-modal__close js-close">Close</a>
    </div> <!-- cd-signin-modal__container -->
  </div> <!-- cd-signin-modal -->
<script src="js/placeholders.min.js"></script> <!-- polyfill for the HTML5 placeholder attribute -->
<script src="js/main.js"></script>
        

</div>
<!--Nav Bar
  -->


  <!--jumbotron
  -->
  <div class="jumbotron container-fluid">
<h1 class="jumbotron-text"><center>Start Learning With Best Online System</center></h1>
    <br>
    <p id="heade">"Never regard study as a duty but as an enviable opportunity to learn to know the liberating influence of beauty in the realm of the spirit for your own personal joy and to the profit of the community to which your later works belong."
    </p>
    
<form method="post" action="signup.php"> 
  <input type="text" name="name" class="jumbo-mail" placeholder="Name" style="margin-left: 170px;">


  <input type="text" name="email" class="jumbo-mail" placeholder="Email">
  
  <input type="submit" value="submit" class="btn btn-danger jump-button">

</form>
</div>
</header>
<div id="space">
  <div class="top-margin">
  <div class="row">
    <div class="col-lg-3 thumbnail">
      <img src="images/001-strategy.png" id="pacman">
      <h3 stye=":10px;">Learn From Lecture Notes</h3>
      <p>“No matter how busy you may think you are, you must find time for reading, or surrender yourself to self-chosen ignorance.”
</p>
<a href="Computer Notes/sa.html">
  <button class="btn btn-success">click here</button></a>
      </div>
        <div class="col-lg-3 thumbnail">
          <img src="images/004-bookcase.png" id="pacman">
          <h3>Books Library & Store</h3>
          <p>“Books are the ultimate Dumpees: put them down and they’ll wait for you forever; pay attention to them and they always love you back.”</p>
          <a href="Books/books.html">
          <button class="btn btn-success">click here</button>
        </a>
        </div>

             <div class="col-lg-3 thumbnail">
              <img src="images/006-school.png" id="pacman">
              <h3>Confuse from where to start?</h3>
              <p>“Which programming language should I learn if I’m new?”.
“Which programming language is most in-demand for jobs?”
             </p>
             <a href="where to start/startingmain.html">
             <button class="btn btn-success">click here</button>
           </a>
           </div> 
        <div class="col-lg-3 thumbnail">
          <img src="images/003-diploma.png" id="pacman">
          <h3>Certified Courses</h3>
          <p>The most important principle for designing lively eLearning is to see eLearning design not as information design but as designing an experience.</p>
<a href="certified courses/certifymain.html">
<button class="btn btn-success">click here</button></a>
        </div>
      </div>
      <!--jumbotron
      -->
        <!--Begin of features courses
        -->


        <div class="feature">
          <h1 id="featured">Featured Courses</h1><br><br>
          <div class="container">
            <a href="https://www.udemy.com/the-web-developer-bootcamp/">
            <div class="col-md-3">
              <div class="card" style="width : 23rem;">
              <img src="images/625204_436a_2.jpg" class="card-img-top" alt="...">
              <span id="cardhead">
              <h4>The Web Developer Bootcamp</h4>
              <p>Colt Steele</p>
            </span>
              <div class="d-inline" id="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br></div>
              <span id="price">
                <h5><strike>Rs 12800Rs</strike></h5>
                <h3><b>RS 770</b></h3>
            </span>
              </div>
            </div>
          </a>
          <a href="https://www.udemy.com/pythonforbeginnersintro/">
              <div class="col-md-3">
                <div class="card" style="width:23rem;">
                  <img src="images/intro to python.jpg" class="card-img-top" alt="python course">
                  <span id="cardhead">
                    <h4>Indroduction to Python Programming</h4>
                    <p>Avinash Jain</p>
                  </span>

              <div class="d-inline" id="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br></div>
                <span id="price">
                  <br>
                  <h3><b>Free</b></h3>
                </span>
              </div>
              </div>
            </a>
              <a href="https://www.udemy.com/introduction-to-oracle-sql/"> 
                  <div class="col-md-3">
                  <div class="card" style="width:23rem;">
                  <img src="images/Oracle Sql.jpg" class="card-img-top" alt="python course">
                  <span id="cardhead">
                    <h4>Oracle SQL-Step by step SQL </h4>
                    <p>Amamath Reddy</p>
                  </span>

              <div class="d-inline" id="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br></div>
                <span id="price">
                  <br>
                  <h3><b>Free</b></h3>
                </span>
                  </div>
            </div>
          </a>
          <a href="https://www.udemy.com/c-programming-made-easy/">
                  <div class="col-md-3"></div>
                <div class="card" style="width:23rem;">
                  <img src="images/c programming.jpg" class="card=img-top" alt="c course">
                  <span id="cardhead">
                    <h4>C Programming made easy</h4>
                    <p>maganadha Reddy</p>
                  </span>
                  

              <div class="d-inline" id="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br></div>
                
                <span id="price">
                  <br>
                  <h3><b>Free</b></h3>
                </span>
            
              </div>
              <br><br>
            </div>
          </div>
        </div>
      </a>

        <!--end of feature courses
-->
<!-- How BrainJam HElps
  -->

<div class="about">
<div class="card"  id="card-about" style="max-width: 2000px;">
  <div class="row no-gutters card-color">
    <div class="col-md-4">
      <img src="images/logo.jpg" id="about-img" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h1 class="card-title" style="color:green;"><b>How BrainJam Helps</b></h1>
        <ul class="card-text">
          <li>
            <h4>There are variety of courses available choose those which you want to study.</h4>
          </li>
          <li>
            <h4>There are different Methods to study you can choose those methods that are suitable for you.</h4>
          </li>
          <li>
            <h4>The student can access lectures from various teachers, compare and refer to the one that suits the requirements.
            </h4>
          </li>
          <li>
            <h4>BrainJam provides you a comfortable enviroment to learn comfortable</h4>
          </li>
          <li>
            <h4>BrainJam provide more interaction and greater ability to concentrate</h4>
          </li>
      </div>
    </div>
  </div>
</div>
</div>
<!-- How BrainJam helps
-->
<div class="offer">
<div class="container">
  <h2 id="featured">What we offer</h2>
<div class="row">
  <a href="Computer Notes/sa.html">
  <div class="col-md-3" id="rite">
    <img src="images/find_notes.png">
    <h2>University Notes</h2>
  </div></a>
  <a href="https://universityacademy.in/">
    <div class="col-md-3" id="rite">
      <img src="images/studyonline.png">
      <h3>Online Lectures</h3>
    </div></a>
    <a href="certified courses/certifymain.html">
           <div class="col-md-3" id="rite">
        <img src="images/certify.png">
        <h3>Certified Courses</h3>
    </div></a>
    <a href="http://placement.freshersworld.com/">
        <div class="col-md-3" id="rite">
          <img src="images/placed.png">
          <h3>Placement Content</h3></div>
      </div>
    </a>
      <br>
</div>
  </div>
<!--BrainJAm Helps
-->
       <div style="margin-top: 80px;" class="feed">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
            <h1 style="margin:0px;"><b>Not Yet Satisfied with our Trend?</b></h1>
        </div>
        <div class="col-md-2">
            <a href="../contact page/prac.html">
            <button type="button" class="btn btn-light" style="float:right; margin-top: 10px;"><h6 style="color: black;"><b>Provide feedback</b></h6></button>
        </a>
        </div>  </div>  
    </div>
</div>

<!--Fotter
  -->
  <div class="fotter">
    <div class="container">
      <div class="row">
      <div class="col-lg-4">
      <h2 style="color:orange; margin:0px;">BRAINJAM</h2>
      <p style="color:green;">It's time to spread out</p>
      <div class="fotter-text">
     <p>BrainJam is free online learning website  that helps you put together a platform for all your valuable courses and training. Start learning knowledge bombs today.</p>
    </div>
         </div>
         <div class="contact">
            <div class="col-lg-4">
              <h3 style="color:white;">Contact Us</h3>
              <div class="fotter-text">
                <h4>Email:
                <span id="mai">himanshu991139@gmail.com</span></h4>
                <h4>Phone No:
                <span id="mai">9910072742</span></h4>
                <h4>Address:
                  <span id="mai">fnjdsfbkjv fnj,vmnkf,cnnnmfcb kjncmbvkn</span></h4>
              </div>
            </div>
            <div class="contact">
            <div class="col-lg-4">
              <h3 style="color:white;">Quick Link</h3>
              <div class="fotter-text">
                <a href="About/about.html"><h4 style="color:grey;">About Us</h4></a>
                  <a href="contact page/prac.html"><h4 style="color:grey;">Report a Bug</h4></a>
                 <h4>Privacy Policy</h4>
                 <h4>Term of Use</h4>
                 </div>
                 </div>
                <div class="follow-us">
                 <div class="col-lg-10">

                 <h3 style="color:white;">Follow Us </h3>
                 <img src="images/facebook.png" class="followus-logo">
                 <img src="images/twitter.png" class="followus-logo">
                 <img src="images/linkedin.png" class="followus-logo">
                 </div> 
               </div>
            </div>
          </div>  
        </div>
          </div>
          <!--
          -->
</div>
</body>
</html>
