<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <!-- font awesome cdn link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts -->
    <header class="header">
        <a href="#home" class="logo">Frank.M</a>
        <nav class="navbar">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="follow">
            <a href="https://www.facebook.com/frank.malisa.104/" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/OfficialFrank_M" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/_malisah/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/frank-malisa-752454230/" class="fab fa-linkedin"></a>
            <a href="https://github.com/Frank-Malisa" class="fab fa-github"></a>
        </div>


    </header>
<!-- header section ends -->

<!-- home section starts -->
    <section class="home" id="home">
    <div class="image">
        <img src="33.png" alt="">
    </div>

    <div class="content">
        <h3>hi, i am Frank Malisa</h3>
        <span>computer engineer & web developer</span>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt velit, facilis eius nesciunt repellat pariatur necessitatibus? Ratione cumque eius repellendus nisi praesentium alias vel provident quas! Optio ab mollitia a.</p>
        <a href="#about" class="btn">Download Cv</a>
    </div>

    </section>

<!-- home section ends -->

<!-- about section starts -->
    <section class="about" id="about">
        <h1 class="heading"><span>biography</span></h1>
        <div class="biography">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam architecto molestiae minus illo repellendus harum rerum nemo adipisci eaque neque, laudantium quis natus perferendis labore nam! Distinctio rerum eos doloribus.</p>
            
            <div class="bio">
                <h3><span>name: </span> Frank Malisa</h3>
                <h3><span>email: </span> fmalisah02@gmail.com</h3>
                <h3><span>address: </span> kijitonyama, Dar-es-salaam</h3>
                <h3><span>phone: </span> +255-758-893-165</h3>
                <h3><span>age: </span> 23 years</h3>
            </div>

            <a href="#" class="btn">about me</a>

        </div>

        <div class="skills">
            <h1 class="heading"><span>skills</span></h1>

            <div class="progress">
                <div class="bar"><h3><span>HTML</span><span>95%</span></h3></div>
                <div class="bar"><h3><span>css</span><span>65%</span></h3></div>
                <div class="bar"><h3><span>JavaScript</span><span>35%</span></h3></div>
                <div class="bar"><h3><span>php</span><span>20%</span></h3></div>
                <div class="bar"><h3><span>MySQL</span><span>45%</span></h3></div>
            </div>

        </div>

        <div class="edu-exp">
            <h1 class="heading"><span>Education and Experience</span></h1>
            
            <div class="row">
                <div class="box-container">
                    <h3 class="title">education</h3>

                    <div class="box">
                        <span>(2019 - 2020)</span>
                        <h3>web designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                    </div>

                    
                    <div class="box">
                        <span>(2020 - 2021)</span>
                        <h3>web developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                    </div>

                    
                    <div class="box">
                        <span>(2021 - 2022)</span>
                        <h3>logo designer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                    </div>
                </div>
            
                <div class="box-container">
                    <h3 class="title">experience</h3>

                    <div class="box">
                        <span>(2019 - 2020)</span>
                        <h3>front-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                    </div>

                    
                    <div class="box">
                        <span>(2020 - 2021)</span>
                        <h3>back-end developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                    </div>

                    
                    <div class="box">
                        <span>(2021 - 2022)</span>
                        <h3>full-stack web developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

<!-- about section ends -->

<!-- services section starts -->
<section class="services" id="services">
    <h1 class="heading"><span>services</span></h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
        </div>

        <div class="box">
            <i class="fas fa-bootstrap"></i>
            <h3>bootstrap</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
        </div>

        <div class="box">
            <i class="fas fa-chart-line"></i>
            <h3>seo marketing</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
        </div>

        <div class="box">
            <i class="fas fa-wordpress"></i>
            <h3>wordpress</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
        </div>
    </div>
</section>

<!-- services section ends -->

































<!-- custom js file link -->
<script src="script.js"></script>
   
</body>
</html>