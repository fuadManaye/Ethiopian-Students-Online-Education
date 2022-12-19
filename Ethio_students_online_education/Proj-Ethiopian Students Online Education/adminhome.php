<!DOCTYPE html>
<html>
  <head>
    <title>Ethiopian Students online education</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="adminhome.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
      /* JavaScript for about section*/
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
      
        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read More"; 
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less"; 
          moreText.style.display = "inline";
        }
      }
      /* end of JavaScript for about section*/

      /* JavaScript for home section*/
      $(document).ready(function(){
        $('#icon').click(function(){
          $('ul').toggleClass('show');
        });
      });
      /* end of JavaScript for home section*/
      </script>
  </head>
  <body>
    <!-- home section-->
    <section class="back"  id="home">
      <nav>
        <div class="logo">
          <img src="img/Ethiopia.png">
        </div>
        <ul>
          <li><a href="#home">Home</a></li> 
          <li><a href="learn_more.html">LearnMore</a></li>
          <li><a href="take_quiz.html">TakeQuiz</a></li>
          <li><a href="./Student Discussion/index.php">Discussion</a></li>    <!-- i will make this part latter-->
          <li><a href="#about">About</a></li>
          <li><a href="#footer">Contact</a></li> 
          <li><a href="../admin_main.php" style="color:rgb(162, 255, 11);">Admin Home</a></li>
        </ul>
        <label id="icon">
          <i class="fas fa-bars"></i>
        </label>
      </nav>
      <div class="title">
        <h1>Ethiopian Students online education<span></span></h1>
        <h2>Educate Your Self</h2>
    </div>
    <div class="button">
      <a href="learn.html" class="btn">Start Learning</a>
    </div>
    </section>
        <!-- end of home section-->

    <!-- about section-->
    <section id=about>
      <div class="section">
        <div class="container">
          <div class="title-2">
            <h1>About Us</h1>
          </div>
          <div class="content">
            <div class="article">
                <h3>As third-year computer science students at Debre Tabor University, 
                    we focus on programming, especially web programming. 
                </h3>
                <p>This website is designed for students in grades 7 through 12, 
                   and the purpose of this website is to enable students to easily 
                   learn the subject they want at home and to grow themselves by 
                   taking different questions in the subject they want.<span id="dots"></span><span id="more"><br>
                   This website allows students to learn online lessons and make questions 
                   and become competent students by downloading the books they want. On the other hand, 
                   students on this website can learn other subjects such as C ++, Python, Networking, Database , 
                   To enable you to become a network designer,Database Designe and others.</span>
                </p>
                    <button onclick="myFunction()" id="myBtn" class="form">Read More</button>
            </div>
          </div>
          <div class="image-section">
            <img src="img/aboutImg.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

<!-- end of about section-->


<!--footer section-->
<section class="footer" id="footer">
  <div class="social">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-snapchat"></i></a>
  </div> 
  <p class="copyright">
    Copyright © 2021 All rights reserved
  </p>
</section>
<!-- end of footer section-->
  </body>
</html>