<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die ('connection failed');

if(isset($_POST['send']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM contact_form WHERE name = '$name' AND email = '$email' AND number  = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0)
    {
        $message[] = 'message sent already!';
    }
    else
    {
        mysqli_query($conn, "INSERT INTO contact_form(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <!-- font awesome cdn link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- aos css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

if(isset($message))
{
    foreach($message as $message)
    {
        echo'
        <div class="message" id="message" data-aos="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}

?>




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
    <div class="image" data-aos="fade-right">
        <img src="33.png" alt="">
    </div>

    <div class="content" data-aos="fade-up">
        <h3 data-aos="fade-up">hi, i am frank Malisa</h3>
        <span data-aos="fade-up">computer engineer & web developer</span>
        <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt velit, facilis eius nesciunt repellat pariatur necessitatibus? Ratione cumque eius repellendus nisi praesentium alias vel provident quas! Optio ab mollitia a.</p>
        <a data-aos="fade-up" href="https://fv9-6.failiem.lv/down.php?i=5ve62vmv8" class="btn">Download Cv</a>
    </div>


</section>

<!-- home section ends -->

<!-- about section starts -->
<section class="about" id="about">
    <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
    <div class="biography">
        <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam architecto molestiae minus illo repellendus harum rerum nemo adipisci eaque neque, laudantium quis natus perferendis labore nam! Distinctio rerum eos doloribus.</p>

        <a data-aos="fade-up" href="#" class="btn">about me</a>

    </div>

    <div class="skills">
        <h1  data-aos="fade-up" class="heading"><span>skills</span></h1>

        <div class="progress">
            <div class="bar" data-aos="fade-left"><h3><span>HTML</span><span>95%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>css</span><span>65%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span><span>35%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>php</span><span>20%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>MySQL</span><span>45%</span></h3></div>
        </div>

    </div>

    <div class="edu-exp">
        <h1 class="heading" data-aos="fade-up"><span>Education and Experience</span></h1>
        
        <div class="row">
            <div class="box-container">
                <h3 class="title" data-aos="fade-right">education</h3>

                <div class="box" data-aos="fade-right">
                    <span>(2019 - 2020)</span>
                    <h3>web designer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                </div>

                
                <div class="box" data-aos="fade-right">
                    <span>(2020 - 2021)</span>
                    <h3>web developer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                </div>

                
                <div class="box" data-aos="fade-right">
                    <span>(2021 - 2022)</span>
                    <h3>logo designer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                </div>
            </div>
        
            <div class="box-container">
                <h3 class="title" data-aos="fade-left">experience</h3>

                <div class="box" data-aos="fade-left">
                    <span>(2019 - 2020)</span>
                    <h3>front-end developer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                </div>

                
                <div class="box" data-aos="fade-left">
                    <span>(2020 - 2021)</span>
                    <h3>back-end developer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptas, fugiat eveniet dignissimos vitae totam.</p>
                </div>

                
                <div class="box" data-aos="fade-left">
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
        <h1 class="heading" data-aos="fade-up"><span>services</span></h1>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <h3>web development</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>graphic design</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fab fa-bootstrap"></i>
                <h3>bootstrap</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-chart-line"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-bullhorn"></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fab fa-wordpress"></i>
                <h3>wordpress</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
            </div>
        </div>
    </section>

<!-- services section ends -->


<!-- portfolio section starts  -->
<section class="portfolio" id="portfolio">
    <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>

    <div class="box-container" data-aos="zoom-in">
        <div class="box">
            <img src="88.jpg" alt="">
            <h3>web development</h3>
            <span>(2020-2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="77.png" alt="">
            <h3>web development</h3>
            <span>(2020-2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="99.jpg" alt="">
            <h3>web development</h3>
            <span>(2020-2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="77.png" alt="">
            <h3>web development</h3>
            <span>(2020-2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="77.png" alt="">
            <h3>web development</h3>
            <span>(2020-2022)</span>
        </div>

        <div class="box" data-aos="zoom-in">
            <img src="77.png" alt="">
            <h3>web development</h3>
            <span>(2020-2022)</span>
        </div>

    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts -->
    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+255-758-893-165</p>
            </div>
            
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>fmalisah02@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Arusha, Tanzania</p>
            </div>
        </div>

    </section>

<!-- contact section ends -->

<div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>F.Malisa</span></div>



<!-- custom js file link -->
<script src="script.js"></script>
<script src="me.js"></script>

<!-- aos js link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
    AOS.init({
        duration:800,
        delay:150
    })
</script>

<script>
    const message = document.getElementById('message');
    const bodi = document.getElementById('bodi');
    const toggle = document.getElementById('toggle');
    toggle.onclick = function ()
    {
        toggle.classList.toggle('active')
        bodi.classList.toggle('active')
        message.classList.toggle('active')
    }
</script>

</body>
</html>