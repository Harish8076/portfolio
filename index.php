<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Harish Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo"></div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Yadla Harish</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/profilepicture.jpeg" alt="John DoYadla Harish profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Yadla Harish</h1>
        <p class="section__text__p2">Full Stack Developer</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/Harish_resume.pdf')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://www.linkedin.com/in/harish-yadla-439823284'"
          />
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/Harish8076'"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      
       



      <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Institution</th>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Course</th>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">Year</th>
                <th style="border: 1px solid #000; padding: 8px; text-align: left;">CGPA/Percentage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">Kkr And Ksr Institute Of Technology And Sciences</td>
                <td style="border: 1px solid #000; padding: 8px;">B-Tech in Computer Science And Engineering</td>
                <td style="border: 1px solid #000; padding: 8px;">2023</td>
                <td style="border: 1px solid #000; padding: 8px;">8.0</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">Sasi Junior College</td>
                <td style="border: 1px solid #000; padding: 8px;">Board of Intermediate Education, Andhra Pradesh</td>
                <td style="border: 1px solid #000; padding: 8px;">2021</td>
                <td style="border: 1px solid #000; padding: 8px;">88.2%</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">Oxford High School</td>
                <td style="border: 1px solid #000; padding: 8px;">Board of Secondary Education, State</td>
                <td style="border: 1px solid #000; padding: 8px;">2019</td>
                <td style="border: 1px solid #000; padding: 8px;">9.5</td>
            </tr>
        </tbody>
    </table>
          </div>
          <div class="text-container">
            <p>Hello! My name is <span class="highlight">Yadla Harish</span>. I am currently pursuing my B-Tech in <span class="highlight">Computer Science And Engineering</span> from <span class="highlight">Kkr And Ksr Institute Of Technology And Sciences</span>, Guntur, with a CGPA of 8.0.</p>
            <p>I completed my intermediate education at <span class="highlight">Sasi Junior College</span>, achieving a percentage of 88.2%. Prior to that, I graduated from <span class="highlight">Oxford High School</span> with a CGPA of 9.5.</p>
            <p>I have a strong passion for <span class="highlight">technology</span> and have developed skills in various programming languages including <span class="highlight">HTML</span>, <span class="highlight">CSS</span>, <span class="highlight">JavaScript</span>, <span class="highlight">PHP</span>, and <span class="highlight">Java</span>. I am also proficient in full stack development using <span class="highlight">PHP</span>  <span class="highlight"></span>.</p>
            <p>Throughout my academic journey, I have worked on several <span class="highlight">personal projects</span> such as designing a <span class="highlight">HTML</span>, <span class="highlight">CSS</span>, and <span class="highlight">JavaScript</span> compiler, creating an <span class="highlight">E-shop website</span>, and developing various other web-based applications.</p>
            <p>I am enthusiastic about <span class="highlight">Full Stack Development</span> and have experience working with <span class="highlight">MySQL</span> and <span class="highlight"></span> databases. Additionally, I have hosted websites live on the internet, showcasing my ability to manage and deploy web applications effectively.</p>
            <p>In addition to my technical skills, I have participated in initiatives like <span class="highlight">Puneeth Sankalp</span> to prevent the spread of plastic pollution, reflecting my commitment to societal causes.</p>
            <p>Feel free to <a href="mailto:21jr1a05j4@gmail.com" class="highlight">contact me</a> or visit my <a href="https://github.com/Harish8076" class="highlight">GitHub</a> and <a href="https://www.linkedin.com/in/harish-yadla-439823284" class="highlight">LinkedIn</a> profiles to know more about my work and interests.</p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Full Stack Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>PHP</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JAVA</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>MYSQL</h3>
                  <p>Experienced</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">CERTIFICATIONS</h2>
            <div class="article-container">

              - I have earned a certificate from Cisco ThingQbator, demonstrating proficiency in HTML and CSS.<br>  
              - I hold a CSS certification from HackerRank, showcasing my expertise in styling web pages.<br>
              - I have been certified in PHP Full Stack Development by IIT Kanpur, reflecting my comprehensive knowledge in full stack technologies.<br>
              - I was awarded first prize in a project expo at Narasaraopet Engineering College, highlighting my project development skills.
              

            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>
<?php include'certification.php'
?>
    <sectioon id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/compiler.jpeg" alt="Project 1" class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">HTML, CSS, JS COMPILER</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://www.linkedin.com/posts/harish-yadla-439823284_webdevelopment-compiler-php-activity-7179122877441462272-O3Tq?utm_source=share&utm_medium=member_desktop'">
                CLICK TO VIEW
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/guest.png" alt="Project 2" class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Guest House Management System</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://youtu.be/ntHxF7i_l-8?si=BzGgC3BgriNRYHn1'">
                CLICK TO VIEW
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/fest.jpeg" alt="Project 3" class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">College Fest Management System</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://youtu.be/Ir_hpXh1uzg?si=DlVoptaRyJIciG_F'">
                CLICK TO VIEW
              </button>
            </div>
          </div>
          <!-- Repeat for additional projects -->
          <div class="fghb-1 project-card">
            <div class="project-image">
              <img src="./assets/e-commerce.png" alt="Project 1">
            </div>
            <div class="project-details">
              <h3 class="project-title">E-Commerce Website</h3>
              <p class="project-description"></p>
              <a href="https://youtu.be/6-ecSHLpFeI?si=fDd8pQKH3aa40Bkk" class="project-link">View Project</a>
            </div>
          </div>
          <div class="fghb-2 project-card">
            <div class="project-image">
              <img src="./assets/mila.png" alt="Project 2">
            </div>
            <div class="project-details">
              <h3 class="project-title">A Website For Milatronics</h3>
              <p class="project-description"></p>
              <a href="https://youtu.be/_mX-VPYWeT8?si=yFF4l0DKAOD-r64g" class="project-link">View Project</a>
            </div>
          </div>
          <div class="fghb-3 project-card">
            <div class="project-image">
              <img src="./assets/hack.png" alt="Project 3">
            </div>
            <div class="project-details">
              <h3 class="project-title">Hackthon Management System</h3>
              <p class="project-description">Brief description of Project 3.</p>
              <a href="https://youtu.be/nOW0Ajmq3Ws?si=f3ejwbExsr7o34m" class="project-link">View Project</a>
            </div>
          </div>
          <div class="fghb-4 project-card">
            <div class="project-image">
              <img src="./assets/facebook.png" alt="Project 4">
            </div>
            <div class="project-details">
              <h3 class="project-title">Old FaceBook Sign Up page</h3>
              <p class="project-description">Brief description of Project 4.</p>
              <a href="#" class="project-link"style="pointer-events: none;
    cursor: default;" >View Project</a>
            </div>
          </div>
          <!--
          <div class="fghb-5 project-card">
            <div class="project-image">
              <img src="./assets/project5.jpg" alt="Project 5">
            </div>
            <div class="project-details">
              <h3 class="project-title">Project Title 5</h3>
              <p class="project-description">Brief description of Project 5.</p>
              <a href="#" class="project-link">View Project</a>
            </div>
          </div>
          <div class="fghb-6 project-card">
            <div class="project-image">
              <img src="./assets/project6.jpg" alt="Project 6">
            </div>
            <div class="project-details">
              <h3 class="project-title">Project Title 6</h3>
              <p class="project-description">Brief description of Project 6.</p>
              <a href="#" class="project-link">View Project</a>
            </div>
          </div>
          <div class="fghb-7 project-card">
            <div class="project-image">
              <img src="./assets/project7.jpg" alt="Project 7">
            </div>
            <div class="project-details">
              <h3 class="project-title">Project Title 7</h3>
              <p class="project-description">Brief description of Project 7.</p>
              <a href="#" class="project-link">View Project</a>
            </div>
          </div>
          <div class="fghb-8 project-card">
            <div class="project-image">
              <img src="./assets/project8.jpg" alt="Project 8">
            </div>
            <div class="project-details">
              <h3 class="project-title">Project Title 8</h3>
              <p class="project-description">Brief description of Project 8.</p>
              <a href="#" class="project-link">View Project</a>
            </div>
          </div>
        -->
        </div>
      </div>
    </sectioon>
    




        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contact'"
      />
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img
            src="./assets/email.png"
            alt="Email icon"
            class="icon contact-icon email-icon"
          />
          <p><a href="mailto:21jr1a05j4@gmail.com">21jr1a05j4@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
          <img
            src="./assets/linkedin.png"
            alt="LinkedIn icon"
            class="icon contact-icon"
          />
          <p><a href="https://www.linkedin.com/in/harish-yadla-439823284">LinkedIn</a></p>
        </div>
      </div>
    </section>
    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2024 Yadla Harish. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
    
  </body>
</html>
