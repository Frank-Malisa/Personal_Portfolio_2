<?php

require("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- this is my title -->
        <title> Frank Malisa</title>

        <!-- meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Frank Malisa"/>
        
            <!-- meta description -->
        <meta name="description" content="I am a great developer for web devices"/>

            <!-- meta keywords -->
        <meta name="keywords" content="webdev, programmer, coder, freelancer, startup"/>

        <!-- html file links -->
        <link rel="import" href="index.htm"/>

        <!-- css files links -->
            <!-- admin -->
        <link rel="stylesheet" href="CSS-FILES/styles.css"/>
        
            <!-- animated headlines -->
        <link rel="stylesheet" href=""/>

            <!-- main file link -->
        <link rel="stylesheet" href="CSS-FILES/main.css"/>
        
            <!-- magnific popup -->
        <link rel="stylesheet" href=""/>
        
        <!-- font links -->
            <!-- font awesome cdn link --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

            <!-- aos css link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    </head>
    <body>
        <div class="containers" id="blur">


            <!-- NAVIGATION BAR SECTION STARTS -->
                <header class="header">

                    <!-- logo -->
                    <a href="#home" class="logo">Frank.M</a>

                    <!-- navigation buttons -->
                    <nav class="navbar">
                        <div id="menu-btn" class="fas fa-bars"></div>
                        <a href="#home" class="active">home</a>
                        <a href="#about">about</a>
                        <a href="#services">services</a>
                        <a href="#portfolio">portfolio</a>
                        <a href="#contact">contact</a>
                    </nav>

                    <!-- social website navigation icons -->
                    <div class="follow">
                        <a href="https://www.facebook.com/frank.malisa.104/" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/OfficialFrank_M" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/_malisah/" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/in/frank-malisa-752454230/" class="fab fa-linkedin"></a>
                        <a href="https://github.com/Frank-Malisa" class="fab fa-github"></a>
                    </div>

                </header>
            <!-- NAVIGATION BAR SECTION ENDS -->


            <!-- HOME SECTION STARTS         -->
            <section class="home" id="home">

                <!-- my photo -->
                <div class="image">
                    <img src="PHOTOS/33.png">
                </div>


                <!-- my about -->
                <div class="content">
                    <h3>hi, i am frank Malisa</h3>
                    <span>computer engineer & web developer</span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt velit, facilis eius nesciunt repellat pariatur necessitatibus? Ratione cumque eius repellendus nisi praesentium alias vel provident quas! Optio ab mollitia a.</p>
                    <a href="https://fv9-6.failiem.lv/down.php?i=5ve62vmv8" class="btn">Download Cv</a>  
                </div>

            </section>
            <!-- HOME SECTION ENDS         -->


            <!-- ABOUT SECTION STARTS      -->
            <section class="about" id="about">

                <!-- heading -->
                <h1 class="heading"><span>biography</span></h1>

                <!-- my biography -->
                <div class="biography">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam architecto molestiae minus illo repellendus harum rerum nemo adipisci eaque neque, laudantium quis natus perferendis labore nam! Distinctio rerum eos doloribus.</p>
                    
                    <a href="#" class="btn">about me</a>

                </div>

                <!-- my skills -->
                <div class="skills">
                    <h1  class="heading"><span>skills</span></h1>

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
            <!-- ABOUT SECTION ENDS        -->


            <!-- SERVICES SECTION STARTS   -->
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
                        <i class="fab fa-wordpress"></i>
                        <h3>wordpress</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora nam a facilis eius voluptates iusto.</p>
                    </div>
                </div>
            </section>
            <!-- SERVICES SECTION ENDS     -->


            <!-- PORTFOLIO SECTION STARTS  -->
            <section class="portfolio" id="portfolio">
                <h1 class="heading"><span>portfolio</span></h1>

                <div class="box-container">
                    <div class="box">
                        <img src="./PHOTOS/88.jpg" alt="">
                        <h3>web development</h3>
                        <span>(2020-2022)</span>
                    </div>

                    <div class="box">
                        <img src="./PHOTOS/77.png" alt="">
                        <h3>web development</h3>
                        <span>(2020-2022)</span>
                    </div>

                    <div class="box">
                        <img src="./PHOTOS/99.jpg" alt="">
                        <h3>web development</h3>
                        <span>(2020-2022)</span>
                    </div>
                </div>

            </section>
            <!-- PORTFOLIO SECTION ENDS    -->


            <!-- CONTACT SECTION STARTS    -->
            <section class="contact" id="contact">
                <h1 class="heading"><span>contact me</span></h1>

                <form action="" method="post">
                    <div class="flex">
                        <input type="text" name="name" placeholder="enter your name" class="box" required>
                        <input type="email" name="email" placeholder="enter your email" class="box" required>
                    </div>
                    <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>
                    <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
                    <input type="submit" value="send message" name="send" class="btn">
                </form>

                <div class="box-container">
                    <div class="box">
                        <i class="fas fa-phone"></i>
                        <h3>phone</h3>
                        <p>+255-758-893-165</p>
                    </div>
                    
                    <div class="box">
                        <i class="fas fa-envelope"></i>
                        <h3>email</h3>
                        <p>fmalisah02@gmail.com</p>
                    </div>

                    <div class="box">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>address</h3>
                        <p>Arusha, Tanzania</p>
                    </div>
                </div>

            

            </section>
            <!-- CONTACT SECTION ENDS      -->
            

            <!-- ADMIN LOGIN BUTTON STARTS-->
            <section class="adminPage" method="POST">
                <div class="btng">
                    <button type="submit" id="show-login" name="Signin">administrator</button> 
                </div>
            </section>
            <!-- ADMIN LOGIN BUTTON ENDS-->


            <!-- COPYRIGHT SECTION STARTS -->
                <div class="credit">
                    &copy; copyright @ <?php echo date('Y'); ?> by <span>F.Malisa</span>   
                </div> 
            <!-- COPYRIGHT SECTION STARTS -->


        </div>


                <!-- ADMIN POPUP LOGIN FORM STARTS -->
                <form class="popup" method="POST">
                    <div class="close-btn">&times;</div>

                    <div class="form">
                        <h2>log in</h2>

                        <div class="form-element">
                            <label for="admin name">name</label>
                            <input type="text" id="admin name" placeholder="Enter admin name" name="AdminName">
                        </div>

                        <div class="form-element">
                            <label for="password">Password</label>
                            <input type="password" id="password" placeholder="Enter password" name="AdminPassword">
                        </div>

                        <div class="form-element">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Rember Me</label>
                        </div>

                        <div class="form-element">
                        <button type="submit" name="Signin">Sign in</button>
                        </div>

                        <div class="form-element">
                            <a href="#">Forgot Password?</a>
                        </div>

                    </div>
                </form>
                <!-- ADMIN POPUP LOGIN FORM ENDS -->
            
            <!-- custom JS files links     -->
            <script src="JS-FILES/main.js"></script>
            <script src="JS-FILES/me.js"></script>

            <?php
                if(isset($_POST['Signin']))
                {
                    $query="SELECT * FROM `admin_login` WHERE `admin_name`='$_POST[AdminName]' AND `admin_password`='$_POST[AdminPassword]'";
                    $result=mysqli_query($con, $query);

                    if(mysqli_num_rows($result)==1)
                    {
                        session_start();
                        $_SESSION['AdminLoginId']=$_POST['AdminName'];
                        header("location: AdminPanel.php");
                    }

                    else
                    {
                        echo "<script>alert('Incorrect Username or Password');</script>";
                    }
                }

            ?>
        
    </body>
</html>