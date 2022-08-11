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

            <div class="progress">
                <div class="bar"><h3><span>HTML</span><span>95%</span></h3></div>
                <div class="bar"><h3><span>CSS</span><span>45%</span></h3></div>
                <div class="bar"><h3><span>JavaScript</span><span>35%</span></h3></div>
                <div class="bar"><h3><span>PHP</span><span>25%</span></h3></div>
            </div>
        </div>

        <div class="edu-exp">
            <h1 class="heading"><span>Education and Experience</span></h1>
            <div class="row">
                <div class="box-container">
                    <h3 class="title">Education</h3>
                    <div class="box">
                        <span>(2017 - 2019)</span>
                        <h3>internship</h3>
                        <p>i volunteered to teach physics to form one and form three at sorenyi secondary
                            school and at the same time i vwas a boarding parent of class 6 and 7 students
                            of St Judes primary school.
                        </p>
                    </div>

                    <div class="box">
                        <span>(2019 - 2020)</span>
                        <h3>internship</h3>
                        <p>i volunteered to teach physics to form one and form three at sorenyi secondary
                            school and at the same time i vwas a boarding parent of class 6 and 7 students
                            of St Judes primary school.
                        </p>
                    </div>

                    <div class="box">
                        <span>(2020 - 2022)</span>
                        <h3>internship</h3>
                        <p>i volunteered to teach physics to form one and form three at sorenyi secondary
                            school and at the same time i vwas a boarding parent of class 6 and 7 students
                            of St Judes primary school.
                        </p>
                    </div>
                </div>

                <div class="box-container">
                    <h3 class="title">Experience</h3>
                    <div class="box">
                        <span>(2019 - 2020)</span>
                        <h3>front-end developer</h3>
                        <p>i volunteered to teach physics to form one and form three at sorenyi secondary
                            school and at the same time i vwas a boarding parent of class 6 and 7 students
                            of St Judes primary school.
                        </p>
                    </div>
                    
                    <div class="box">
                        <span>(2019 - 2020)</span>
                        <h3>back-end developer</h3>
                        <p>i volunteered to teach physics to form one and form three at sorenyi secondary
                            school and at the same time i vwas a boarding parent of class 6 and 7 students
                            of St Judes primary school.
                        </p>
                    </div>
                        
                    <div class="box">
                        <span>(2019 - 2020)</span>
                        <h3>full-stack developer</h3>
                        <p>i volunteered to teach physics to form one and form three at sorenyi secondary
                            school and at the same time i vwas a boarding parent of class 6 and 7 students
                            of St Judes primary school.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- services section starts -->
    <section class="services" id="services">
        <h1 class="heading"><span>Services</span></h1>
        <div class="box-container">

            <div class="box">
                <i class="fas fa-code"></i>
                <h3>web development</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, natus explicabo quidem quos dolorum 
                    libero consequuntur qui non praesentium quam sequi enim dolores esse eius eveniet sit odit officia reprehenderit?</p>
            </div>

            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <h3>graphics design</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, natus explicabo quidem quos dolorum 
                    libero consequuntur qui non praesentium quam sequi enim dolores esse eius eveniet sit odit officia reprehenderit?</p>
            </div>

            <div class="box">
                <i class="fab fa-bootstrap"></i>
                <h3>bootstrap</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, natus explicabo quidem quos dolorum 
                    libero consequuntur qui non praesentium quam sequi enim dolores esse eius eveniet sit odit officia reprehenderit?</p>
            </div>

            <div class="box">
                <i class="fas fa-chart-line"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, natus explicabo quidem quos dolorum 
                    libero consequuntur qui non praesentium quam sequi enim dolores esse eius eveniet sit odit officia reprehenderit?</p>
            </div>

            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, natus explicabo quidem quos dolorum 
                    libero consequuntur qui non praesentium quam sequi enim dolores esse eius eveniet sit odit officia reprehenderit?</p>
            </div>

            <div class="box">
                <i class="fab fa-wordpress"></i>
                <h3>wordpress</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, natus explicabo quidem quos dolorum 
                    libero consequuntur qui non praesentium quam sequi enim dolores esse eius eveniet sit odit officia reprehenderit?</p>
            </div>
        </div>
    </section>
    <!-- services section ends -->

    <!-- portfolio section starts -->

    <section class="portfolio" id="portfolio">
        <h1 class="heading"><span>portfolio</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="55.png" alt="">
                <h3>web development</h3>
                <span>(2020-2022)</span>
            </div>

            <div class="box">
                <img src="66.jpg" alt="">
                <h3>web development</h3>
                <span>(2020-2022)</span>
            </div>

            <div class="box">
                <img src="77.png" alt="">
                <h3>web development</h3>
                <span>(2020-2022)</span>
            </div>
        </div>
    </section> 

    <!-- portfolio section ends -->

    <!-- contact section starts -->
    
    <section class="contact" id="contact">
        <h1 class="heading"><span>contact me</span></h1>

        <form action="" method="post">
            <div class="flex">
                <input type="text" name="name" placeholder="enter your name" class="box" required>
                <input type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send Message" name="send" class="btn">
        </form>
    </section>

    <!-- contact section ends -->
    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Frank.M</span></div>













<!----------custom js file link----------->
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>