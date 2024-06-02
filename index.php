<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  
    <title>Lara's Portfolio</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>
  
    <header>

        <div class="user">
            <img src="img/me.png" alt="">
            <h3 class="name">Lara Mae Balagtas</h3>
            <p class="post">back end developer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li ><a href="#home"><i class="fas fa-home"></i>home</a></li>
                <li><a href="#about"><i class="fa fa-user-circle"></i>about</a></li>
                <li><a href="#education"><i class="fas fa-graduation-cap"></i>projects</a></li>
                <li><a href="#portfolio"><i class="fa fa-certificate"></i>certificates</a></li>
                <li><a href="#contact"><i class="fa fa-address-book"></i>contact</a></li>
                
            </ul>
        </nav>
    </header>



<!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

<!-- home section starts -->

<section class="home" id="home">

    <h3>HELLO !</h3>
    <h1>I'M <span>LARA MAE S. BALAGTAS</span></h1>
    <p>A passionate web developer and software developer focused on exceptional website and software experiences. 
        Graduating from Bataan Peninsula State University with a Computer Science degree, 
        I excel in front-end, back-end, and software development. Proficient in Python, JavaScript, and frameworks 
        like Node.js, I craft responsive interfaces and manage complex databases. 
        The endless potential of web and software development to inspire and connect globally drives me. Discover 
        my transformative projects in my portfolio. Let's collaborate to bring your digital aspirations to life!!</p>

    <a href="filepdf/Balagtas_Lara_Mae_Resume.pdf" download="Balagtas_Lara_Mae_Resume.pdf" ><button class="btn">My Resume<i class="fas fa-user"></i></button></a>



</section>


<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">

<h1 class="heading"><span>About</span> Me</h1>

<div class="row">

    <div class="info">

        <h3><span>name: </span>Lara Mae Balagtas</h3>
        <h3><span>age: </span>22</h3>
        <h3><span>Education: </span>Computer Science</h3>
        <h3><span>qualification: </span>Junior Developer</h3>
        <h3><span>post: </span>back end developer</h3>
        <h3><span>language: </span>Filipino/English</h3>
        <a href="filepdf/BALAGTAS, Lara Mae_S._CV.pdf" download="BALAGTAS, Lara Mae_S._CV.pdf" ><button class="btn">Download CV <i class="fas fa-download"></i></button></a>

    </div>

    <div class="counter">

        <div class="box">
            <span>4</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>10+</span>
            <h3>project completed</h3>
        </div>

        <div class="box">
            <span>20+</span>
            <h3>attended seminars</h3>
        </div>

        
 


    </div>

</div>

</section>



<!-- about section ends -->

<!-- education section starts -->

<section class="education" id="education">

    <h1 class="heading"> My <span>Projects</span> </h1>

    <div class="box-container">

        <div class="box">
        <i class="far fa-edit"></i>
            <span>2020-2024</span>
            <h3>OTG: Online Food Ordering System with Healthcare Features</h3>
            <p>Online Food Ordering Website</p>
            <p>   • Programmed the backend of the system and website using PHP, JavaScript, MySQL, and phpMyAdmin. <br>
    • Evaluated the system through unit testing and user feedback via evaluation forms.<br>
    • Researched and documented the system's planning, basis, process, and programming.<br>
    • Wrote and defended the research article about the system. </p>
        </div>

        <div class="box">
            <i class="far fa-edit"></i>
            <span>2020-2024</span>
            <h3>SanaOl: A Virtual Mental Health Provider through AI Chatbot</h3>
            <p>Online AI Chatbot Website</p>
            <p>     • Developed the full stack of the system using Python and HTML/CSS <br>
    • Integrated an AI Chatbot into the system. <br>
    • Researched and documented the system's planning, process, and development. </p>
        </div>

        <div class="box">
            <i class="far fa-edit"></i>
            <span>2020-2024</span>
            <h3>QuizMaster: Trivia Quiz Android Application</h3>
            <p>Android Game Application</p>
            <p>    • Programmed the system and its database using Android Studio and SQLite. <br>
    • Documented the planning, process, and development of the system. </p>
        </div>

    </div>



</section>


<!-- education section ends -->




<!-- portfolio section starts -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>certificates</span></h1>

<div class="box-container">

    <div class="box">
        <img id="box" src="img/367768097_267759249378755_8238203914703288478_n.png" alt="" >
       
        <div id="myModal" class="myModal">

            <!-- The Close Button -->
            <span class="close">&times;</span>
          
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="modal-content">
          
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>  
    </div>

    <div class="box">
        <img id="box1" src="img/aws1.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 

    <div class="box">
        <img id="box3" src="img/mos1.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 

    <div class="box">
        <img id="box4" src="img/bpsu2.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 

<div class="box">
        <img id="box5" src="img/cert1.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 
    <div class="box">
        <img id="box6" src="img/hac1.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 

    <div class="box">
        <img id="box7" src="img/cybe1.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 

    <div class="box">
        <img id="box8" src="img/cybe2.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 

    <div class="box">
        <img id="box9" src="img/cisco1.png" alt="" >

        <div id="myModal" class="myModal">

            <span class="close">&times;</span>
          
            <img class="modal-content" id="modal-content">
        
            <div id="caption"></div>
        </div>  
    </div> 
</div>

</section>

<!-- portfolio section ends -->


<!-- contact section starts -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">
    <div class="content">
            <h3 class="title">contact info</h3>

            <div class="info">
                <h3> <i class="fas fa-envelope"></i> lmsbalagtas@gmail.com </h3>
                <h3> <i class="fas fa-phone"></i> (+63)9983789921 </h3>
                <h3> <i class="fas fa-phone"></i> (+63)9947559468 </h3>
                <h3> <i class="fas fa-map-marker-alt"></i> Dinalupihan, Bataan </h3>
            </div>
    </div>

    <form action="thanks.php" method="POST">

        <input type="text" placeholder="name" class="box" name="txtname">
       
        <input type="text" placeholder="email" class="box"  name="txtemail">
       
        <input type="text" placeholder="project" class="box"  name="txtproject">
       
        <textarea name="txtmessage" id="" cols="30" rows="10" class="box message" placeholder="message" ></textarea>

        <button type="submit" class="btn" name="sendd"> send <i class="fas fa-paper-plane"></i> </button>
        
    </form>


</div>

</section>



<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="img/R (1).png" alt="" width="50" height="50">
</a>









    <!-- jquery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<!-- file script -->
<script src="script.js"></script>

</body>
</html>