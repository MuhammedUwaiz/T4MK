<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t4mk.com</title>
    <link rel="icon" type="image/x-icon" href="IMG_20231124_170848_845.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">




  <style>


body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .bg-hero-image {
    position: relative;
    height: 95vh; /* Sets the height of the container to 95% of the viewport height */
    width: 100%; /* Ensures the container fills the viewport width */
    overflow: hidden; /* Prevents content from overflowing the container */
    display: flex; /* Use Flexbox layout */
    justify-content: center; /* Centers items horizontally */
    align-items: center; /* Centers items vertically */
    --bs-gutter-x: 0rem; /* Custom Bootstrap gutter */
}

.bg-hero-image video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
    transform: translate(-50%, -50%);
    object-fit: cover; /* Ensures the video covers the entire container */
}

.hero-content {
    position: sticky;
    color: white; /* Text color for visibility */
    text-align: center; /* Centers the text */
    padding: 1em;
}

.hero-content button {
    margin-top: 1em;
    padding: 0.5em 2em;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 1em;
    cursor: pointer;
}

.hero-content button:hover {
    background-color: #0056b3;
}








.text-white {
      color: white;
    }

.text-center {
      text-align: center;
    }

.hero-content {
        max-width: 1000px;
    margin: auto;
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 10px;
    }

.hero-content h1 {
        font-weight: 600;
        font-size: 3em;
        margin-bottom: 0.5em;
    }

.hero-content h2 {
        font-weight: 600;
      font-size: 2em;
      margin-bottom: 1em;
    }

.hero-content p {
        font-weight: 600;
      font-size: 1.2em;
      margin-bottom: 2em;
    }

.hero-content button {
      background-color: #FFA500;
      border: none;
      padding: 0.75em 1.5em;
      color: white;
      font-size: 1em;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
    }

.hero-content button:hover {
      background-color: #e59400;
    }
    
.content-section {
    padding: 40px 20px;
    text-align: center;
    font-weight: 400;
    background-color: aliceblue;
    width: auto;
   
}

.WHYT4MK{
    text-align: center;
    margin-bottom: 20px;
    font-weight: 500;
}


.header {
  background-color: white;
  width: auto;
}

.box-sizing
{
  border:none;
}



.footer {
    background-color: #004080;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    width: auto;
}

.footer .cta {
    font-size: 1.2em;
    margin-top: 2em;
}

.footer .cta a {
    color: #ffa500;
    text-decoration: none;
}

.footer .mission-statement {
    font-size: 1.5em;
    margin-top: 2em;
    font-weight: bold;
}

.contact{
    font-weight: 800;
    text-align: center;
    padding-top: 0.5rem;
    width: auto;
   
}

.img-custom {
        width: 180px;
    }

    #Experience-Section {
    background-color: #f0f0f0 !important;
   
}

.card {
    text-align: center;
    padding: 1rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width:auto;
    height: 480px;
    margin-top: 0rem;
}

.card:hover {
    transform: scale(1.05); 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-img-top {
    height: 21em;
}

.card-title {
    font-weight: bold; 
}

.custom-padding-top {
    padding-top: 3rem; 
}


@media only screen and (max-width: 400px) {

    .card-text {
        font-size: 12px;
    }

    .card-title {
        font-size: 18px;
    }

    .card {
    text-align: center;
    padding: 0rem;
    margin-left: -25px;
    margin-top: 50px;
    width: 119%;
    height: 340px;
    
}



}



@media only screen and (max-width: 767px) {

    .card {
   
   margin-top: 50px;
   
}



.card {
    margin-top: 2rem;
}

.custom-padding-top {
    padding-top: 0.1rem; 
}

.WHYT4MK{
    margin-bottom: -15px;
}

.FooterText-2 {
    font-size: 12px;
}

}



@media only screen and (max-width: 990px) {

    .img-custom {
        width: 110px;
        margin-left: -20px;
    }

    .bg-hero-image {
        position: relative;
        top: -15px;
    }

    .content-section {
     margin-top: -15px;
}

    .hero-content h1 {
        font-weight: 500;
        font-size: 2em;
        
    }
    .hero-content h2 {
        font-weight: 500;
      font-size: 1.3em;
    
    }
    .hero-content p {
        font-weight: 500;
      font-size: 0.8em;
      
    }
    .hero-content button {
      
      
      font-size: 0.8em;
      border-radius: 2px;
      font-weight: 500;
    }

    .footer .cta {
    font-size: 0.8em;
   
}


.footer .mission-statement {
    font-size: 1em;
   
}


.header {
   
    width: auto;
   
}

.navbar {
    top: 26px; 
  }


}

@media (min-width: 991px) {
  .navbar {
    top: 24px;
  }

  .menus {
  top: 64px;
}

}


    



.menus-icon {
    display: none;
    flex-direction: column;
    cursor: pointer;
    position: absolute;
    right: 0px;
}

.bar {
    width: 30px;
    height: 3px;
    background-color: black;
    margin: 4px 0;
    transition: 0.4s;
    
}

.menus {
    display: flex;
}


@media screen and (max-width: 900px) {

    .menus {
        display: none;
        flex-direction: column;
        width: 100%;
    }

    .menus.active {
        display: flex;
    }

    .menus-icon {
        display: flex;
    }


    .Home {
  top: 10px;
  left: 46px;
}


.Mission {
  top: 50px;
  left: 42px;
}

.Contact {
  top: 90px;
  left: 42px;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
   position: absolute;
   right: 20px;
   
    
}

.texts {
        top: 39px;
        background-color: #eefbff;
        position: absolute;
        bottom: 21px;
        right: -20px;
        width: 134px;
        height: 135px;
    }


}



.menus-icon.active #bar1 {
  transform: rotate(45deg) translate(6px, 7px);
}

.menus-icon.active #bar2 {
  opacity: 0;
}

.menus-icon.active #bar3 {
  transform: rotate(-45deg) translate(8px, -10px);
}



.Home {
  color: black;
  text-decoration: none;
  position: absolute;
  bottom: 21px;
  right: 240px;
  font-weight: 500;
}

.Mission {
  color: black;
  text-decoration: none;
  position: absolute;
  bottom: 21px;
  right: 140px;
  font-weight: 500;
}

.Contact {
  color: black;
  text-decoration: none;
  position: absolute;
  bottom: 21px;
  right: 40px;
  font-weight: 500;
}


.Footer-2 {
    background-color: white;
    padding: 1rem;
    height: 66px;
}

.FooterText-2 {
    text-align: center;
    color: black;
    font-size: 20px;
    font-weight: 600;
}

/* Media query for smaller screens */
@media screen and (max-width: 540px) {
    .FooterText-2 {
     font-size: 14px;
    }

    .Footer-2 {
    padding: 1rem;
    height: 57px;
}

}

@media screen and (max-width: 480px) {
    .FooterText-2 {
     font-size: 12px;
    }

    .Footer-2 {
    padding: 1rem;
    height: 54px;
}

}

@media screen and (max-width: 418px) {
    .FooterText-2 {
     font-size: 10px;
    }

    .Footer-2 {
    padding: 1rem;
    height: 51px;
}

}







  </style>


</head>


<body> 
    <header class="bg-white" style="width: 100%; position:fixed; z-index: 1;">
        <div class="row header">
            <div class="col-9 col-md-6 p-3 ps-5">
                
            <img src="{{ asset('T4MK-LOGO-ORIGINAL.png') }}" class="img-fluid img-custom">

            </div>

            <div class="col-3 col-md-6 my-auto">








                
            <div class="navbar">
    <div class="menus-icon" id="menus-icon" onclick="toggleMenu()">
        <div class="bar" id="bar1"></div>
        <div class="bar" id="bar2"></div>
        <div class="bar" id="bar3"></div>
    </div>
    <div class="menus" id="menus">
        <div class="texts">
            <a href="#Home-Section" class="Home">Home</a>
            <a href="#Experience-Section" class="Mission">Mission</a>
            <a href="#Contact me-Section" class="Contact">Contact</a>
        </div>
    </div>
</div>

                



<script>
 // Function to toggle menu and menu icon
function toggleMenu() {
    var menuIcon = document.getElementById("menus-icon");
    var menu = document.getElementById("menus");

    // Toggle the "active" class on the menu and menu icon
    menu.classList.toggle("active");
    menuIcon.classList.toggle("active");

}

// Smooth scroll function
function scrollToSection(id) {
    var section = document.getElementById(id);
    if (section) {
        // Scroll to the section smoothly
        section.scrollIntoView({
            behavior: 'smooth'
        });
    }
}

window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;

    // Determine which section is currently visible
    var sections = document.querySelectorAll('section');
    sections.forEach(function(section) {
        var top = section.offsetTop - 100; // Adjust 100 as needed
        var bottom = top + section.offsetHeight;
        var id = section.id;

        setTimeout(function() {
                var menuIcon = document.getElementById("menus-icon");
                var menu = document.getElementById("menus");
                menuIcon.classList.remove("active");
                menu.classList.remove("active");
            },);
    });
});



  </script>






 <!--  <nav class="navbar navbar-expand-lg bg-aliceblue">
                <div class="container-fluid">
                    <button class="navbar-toggler navbar  ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
    <a class="nav-link active" style="color: black;" aria-current="page" href="#Home-Section">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" style="color:  black;" href="#Experience-Section">Mission</a>
</li>
<li class="nav-item">
    <a class="nav-link" style="color:  black;" href="#Contact me-Section">Contact</a>
</li>

                        </ul>
                    </div>
                </div>
              </nav>   -->

                
              










              
            </div>
        </div>
    </header>

    <section id="Home-Section" style="padding-top: 5em;">
    <div class="bg-hero-image">
        <video autoplay muted loop>
            <source src="{{ asset('background.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <h1>Welcome to T4MK</h1>
            <h2>Transforming Lives Through Technology</h2>
            <p>At T4MK, we believe in the power of technology to make life easier and better for everyone. Our mission is to harness existing technologies and innovate new solutions that simplify daily tasks, enhance productivity, and improve the overall quality of life.</p>
            <button onclick="scrollToSection()">Join Our Mission</button>
        </div>
    </div>
</section>

  

  <script>
   
    function scrollToSection() {
      const section = document.getElementById('Experience-Section');
      const sectionPosition = section.getBoundingClientRect().top;
      const offset = window.pageYOffset;
      const scrollPosition = sectionPosition + offset;
      
      window.scrollTo({
        top: scrollPosition,
        behavior: 'smooth'
      });
    }
  </script>



  <section id="mission" class="content-section">

<div class="container">

<h3>Join Us in Our Mission</h3>

<p>
Are you passionate about making a real difference through technology? Do you thrive in a dynamic, innovative environment? We are always on the lookout for talented individuals who share our vision. If you're ready to be part of something bigger, we want to hear from you!
</p>

</div>

</section>








    <section class="bg-white p-5 " id="Experience-Section"  >
     
        <h1 class="WHYT4MK">Why T4MK?</h1>

        
<div class="row">


  <div class="col-md-6">
    <div class="card">
    <img src="{{ asset('Innovate for Good.jpeg') }}" 
       class="card-img-top" alt="">
      <div class="card-body">
        <h4 class="card-title">Innovate for Good</h4>
        <p class="card-text">Work on meaningful projects that have a tangible impact on people's lives.</p>   
      </div>
    </div>
  </div>



  <div class="col-md-6">
    <div class="card">
    <img src="{{ asset('Collaborative Culture.jpg') }}" 
       class="card-img-top" alt="" >
      <div class="card-body">
        <h4 class="card-title">Collaborative Culture</h4>
        <p class="card-text">Join a team that values creativity, collaboration, and continuous learning.</p>     
      </div>
    </div>
  </div>


</div>



<div class="row custom-padding-top">




<div class="col-md-6">
    <div class="card">
    <img src="{{ asset('Cutting-Edge Technology.png') }}" 
       class="card-img-top" alt="" >
      <div class="card-body">
        <h4 class="card-title ">Cutting-Edge Technology</h4>
        <p class="card-text">Utilize the latest tools and technologies in your work.</p>   
      </div>
    </div>
  </div>



  <div class="col-md-6">
    <div class="card">
      
      <img src="{{ asset('Growth Opportunities.jpeg') }}" 
       class="card-img-top" alt="" >
      <div class="card-body">
        <h4 class="card-title">Growth Opportunities</h4>
        <p class="card-text">Enjoy professional development and career advancement in a supportive environment.</p>
        
      </div>
    </div>
  </div>



</div>

<div class="row custom-padding-top">



<div class="col-md-6 ">
    <div class="card">
    <img src="{{ asset('Inclusive Workplace.jpeg') }}" 
       class="card-img-top" alt="" >
      <div class="card-body">
        <h4 class="card-title ">Inclusive Workplace</h4>
        <p class="card-text">Join our diverse, inclusive team where every voice is valued.</p>
      </div>
    </div>
  </div>





  <div class="col-md-6">
    <div class="card">
    <img src="{{ asset('good environment.png') }}"
       class="card-img-top" alt="" >
      <div class="card-body">
        <h4 class="card-title">Team Environment</h4>
        <p class="card-text">Join a supportive community where teamwork and personal growth go hand in hand.</p>    
      </div>
    </div>
  </div>



  </div>





    </section>
      <section class="contact" id="Contact me-Section">

  <h1 class="text-center ">Contact us</h1>
  <div class="row">
    <div class="col-md-12">

    
  </div>
  </div>
      </section>

      <footer class="footer" id="contact">
        <div class="container">
            <p class="cta">
                <strong>Are You Ready to Change the World with Technology?</strong><br>
                If you have a passion for harnessing technology to create impactful solutions, we want to meet you! 
                Share your story with us by sending your resume and a cover letter detailing your experience and why you’re 
                excited to join T4MK. Reach out to us at <a href="mailto:info@t4mk.com">info@t4mk.com</a>.
            </p>
            <p class="mission-statement">Join us in our mission to make life easier through technology!</p>
        </div>
    </footer>



    <footer class="Footer-2">
        <div class="container">
          <div class="row ">
            <div class="FooterText-2"  >
              <p>Copyright 2024 © Technology For Mankind. All Rights Reserved </p>
            </div>
          </div>
        </div>
      </footer>
        
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>
