<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <!--------font awesome cdn link------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-------custom css file link--------->
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div> 
        <a href="#home" class="logo">Frank.M</a>

        <nav class="navbar">
            <a href="#Home" class="active">Home</a>
            <a href="#About">About</a>
            <a href="#Services">Services</a>
            <a href="#Portfolio">Portfolio</a>
            <a href="#Contact">Contact</a>
        </nav>

        <div class="follow">
            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon name="logo-github"></ion-icon></a>
        </div>

    </header>
    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="image">
            <img src="33.png" alt="">
        </div>

        <div class="content">
            <h3>Hi, i am Frank Malisa</h3>
            <span>Computer engineer and developer</span>
            <p>Welcome to my online portfolio.I am an enthusiastic and eager to learn 
                individual who is ready to use my knowledge to solve real life problems
            </p>
            <a href="#about" class="btn">Download CV</a>
        </div>
    </section>

    <!-- home section ends-->

    <!-- about section starts--> 

    <section class="about" id="about">

        <h1 class="heading"> <span>Biography</span></h1>
        <div class="biography">
            <p>I am a full stack web developer who can actively engage in website development. 
                Currently, i am in my third year pursuing a bachelors degree in computer engineering
                and information technology at the university of Dar Es Salaam.
            </p>

            <div class="bio">
                <h3> <span>Name: </span>Frank Malisa</h3>
                <h3> <span>Email: </span>fmalisah02@gmail.com</h3>
                <h3> <span>Address: </span>Arusha,Tanzania</h3>
                <h3> <span>Phone: </span>+255-758-893-165</h3>
                <h3> <span>Phone: </span>+255-626-874-607</h3>
            </div>
        </div>

        <div class="skills">
            <h1 class="heading"><span>Skills</span></h1>
        </div>

        <div class="progress">
            <div class="bar"><span>HTML</span><span>95%</span></div>
            <div class="bar"><span>CSS</span><span>45%</span></div>
            <div class="bar"><span>JavaScript</span><span>15%</span></div>
            <div class="bar"><span>PHP</span><span>5%</span></div>
        </div>
    </section>















<!----------custom js file link----------->
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>