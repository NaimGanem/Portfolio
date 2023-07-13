<?php
include "config.php";
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <div class="header">
    <div class="slider">
      <div class="container">
        <div class="intro">
          <h2>Naim Ghanim</h2>
        </div>
      </div>
    </div>
    <div class="navbar">
      <div class="container">
        <h2>Na<span>im</span></h2>
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#info">About</a></li>
          <li><a href="#Res">Resume</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact Me</a></li>
        </ul>
      </div>
    </div>
  </div>

  
  <div class="features">
    <div class="container">
      <div class="feat">
        <h2>Values</h2>
        <p>Integrity, dedication, and continuous learning drive me as a software engineer. I value collaboration, open communication, and maintaining high ethical standards.</p>
      </div>
      <div class="feat">
        <h2>Goals</h2>
        <p>I aim to excel as a software engineer, contributing to impactful projects and staying up-to-date with emerging technologies.</p>
      </div>
      <div class="feat">
        <h2>Hobbies</h2>
        <p>Apart from coding, I enjoy reading, traveling, playing musical instruments, and engaging in physical activities like hiking and Tennis. These hobbies inspire creativity and provide a balanced perspective.</p>
      </div>
    </div>
  </div>

  

  <div class="about-me">
    <div class="containerB">
      <div class="image">
        <img src="images/naim.jpg" alt="Test">
      </div>
      <div class="info" id="info">
        <h2>About Me</h2>
        <p>Welcome to my portfolio! I'm a second-year software engineering student with experience in C++, assembly, C, and JavaScript. I'm passionate about problem-solving and have a strong foundation in coding principles. In addition, I'm an avid fan of FC Barcelona, a team I love supporting both on and off the field. Let's connect and discuss potential opportunities or projects!</p>
        <div class="hobbies">
         
          <div class="content">
           
            <div class="icon">
              <i class="fa fa-users  fa-2x"></i>
            </div>
            
          </div>
         
          <div class="content">
           
            <div class="icon">
              <i class="fa fa-magic fa-2x"></i>
            </div>
          
          </div>
         
          <div class="content">
            
            <div class="icon">
              <i class="fa fa-line-chart fa-2x"></i>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <div class="my-skills">
    <div class="container">
      <div class="skills">
        <h2>My skills</h2>
        <p>I have developed strong coding skills in multiple programming languages, including C++, assembly, C, and JavaScript. With proficiency in C++, I am adept at writing efficient and robust code using object-oriented principles, data structures, and algorithms. Additionally, my knowledge of assembly language has provided me with a deep understanding of low-level architecture and the ability to optimize code for performance.

In C, I have a solid foundation in fundamental programming concepts, enabling me to create console applications and delve into system-level programming. Moreover, I have honed my JavaScript skills, using frameworks like React and libraries such as jQuery to build interactive web applications and dynamic user interfaces.

With a passion for problem-solving, I consistently apply my coding skills to tackle complex challenges and develop innovative solutions. Continuously learning and adapting to new technologies, I strive to stay updated with the latest advancements in the field of software development.</p>
      </div>
      <div class="progress">
        <div class="technique">
          <h3>Html / CSS</h3>
          <div><span style="width:83%">83% &nbsp;</span></div>
        </div>
        <div class="technique">
          <h3>MySql</h3>
          <div><span style="width:88%">88% &nbsp;</span></div>
        </div>
        <div class="technique">
          <h3>Cpp</h3>
          <div><span style="width:90%">90% &nbsp;</span></div>
        </div>
        <div class="technique">
          <h3>Assembly</h3>
          <div><span style="width:90%">90% &nbsp;</span></div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="resume" id="Res">
  <div class="container">
  <h2>Resume</h2>
  <a href="pdf/resume.pdf" class="my-button" download>Download Resume</a>
</div>
  </div>
  
  <div class="testimonials">
    <div class="container">
      <q>Success in life is not merely a product of luck or circumstance, but a reflection of the unwavering dedication and relentless hard work that propels individuals towards their goals</q>
      <h3 class="he">Leonel Messi</h3>
    </div>
  </div>
  

  

  

      </div>
    </div>
  </div> 
  <div class="portfolio">
  <div class="container">
    <h2 class="he" id="projects">Life-Work</h2>
    <p class="paragrph">MyProjects</p>
    <div class="our-work">
      <?php
     
      $query = "SELECT * FROM portfolio_naim";
      $result = mysqli_query($connection, $query);

      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $imgUrl = $row['img_url'];
            $id = $row['id'];
            $Link = $row['Ex-Link'];
            $GLink = $row['github_link'];
            
            echo '<div>';
            echo 'Ex: ' . $id . '';
            
            if (!empty($GLink)) {
                echo '<br>';
                echo 'GitHub Link: <a href="' . $GLink . '">' . $GLink . '</a>';
            }
            
            echo '<a href="' . $Link . '">';
            echo '<img src="' . $imgUrl . '" alt="Test">';
            echo '</a>';
            echo '</div>';
        }
        
        
        
      } else {
          echo "No projects found.";
      }

      mysqli_free_result($result);

      mysqli_close($connection);
      ?>
    </div>
  </div>
</div>
  <div class="contact-me">
    <div class="container">
      <div class="info">
        <h2>Contact Me</h2>
        <p class="paragrph">
  <strong>Email:</strong>&nbsp;naimreem1@gmail.com<br>
  <strong>Phone:</strong> +972-542577541<br>
  <strong>GitHub:</strong>&nbsp;<a href="https://github.com/NaimGanem" style="color: inherit; text-decoration: inherit;">GitHub Profile</a><br>
  <strong>LinkedIn:</strong>&nbsp;<a href="https://www.linkedin.com/in/naim-ghanim-1b19a7258/" style="color: inherit; text-decoration: inherit;">LinkedIn Profile</a>
</p>

      </div>
      <form class="form" id="contact">
        <label>Name *</label>
        <input type="text" name="Name" value="Your Name">
        <label>Email Adress *</label>
        <input type="email" name="Email Adress" value="Your Email Adress">
        <label>Message *</label>
        <textarea name="Message" rows="10" cols="80">Your Message</textarea>
        <input type="submit" name="Contact Me" value="Contact Me">
      </form>
    </div>
  </div>

  <div class="footer">
  <div class="container">
    <div class="footer-float">
    <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">
        <span class="he">תואר ראשון בהנדסת תוכנה בשנקר</span>
      </a>
    </div>
    <div class="footer-float">
      <div class="bigThink">
        <h4 class="he">Big thanks to</h4>
        <a href="http://elzero.org/">Elzero Web School</a>
      </div>
    </div>
  </div>
</div>


</body>
</html>
