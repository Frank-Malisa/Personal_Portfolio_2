<!DOCTYPE html>
<html lang="en">
<head>
    <!-- this is my title -->
    <title> Messages</title>

    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Frank Malisa"/>

        <!-- meta description -->
        <meta name="description" content="I am a great developer for web devices"/>

        <!-- meta keywords -->
        <meta name="keywords" content="webdev, programmer, coder, freelancer, startup"/>

    <!-- CSS file link -->
    <link rel="stylesheet" href="CSS-FILES/Admin.css"/>

    <!-- font links -->
        <!-- font awesome cdn link --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- aos css link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <div class="main-div">
        <h1>All messages</h1>

        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Message</th>
                            <th colspan="2">Operation</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                        <?php
                            $con=mysqli_connect("localhost", "root", "", "contact_db");

                            if($con)
                            {
                        ?>
                                <script>
                                    alert('Login Successful!');
                                </script>

                        <?php
                            }
                            else
                            {
                                die("Connection error" . mysqli_connect_error());
                            }

                            $selectquery = "SELECT * FROM  contact_form ";
                            $query = mysqli_query($con,$selectquery);
                            $nums = mysqli_num_rows($query);
                            
                            while($res = mysqli_fetch_array($query))
                            {
                                
                        ?>
                                
                                <tr>
                                    <td><?php echo $res['id']; ?></td>
                                    <td><?php echo $res['name']; ?></td>
                                    <td><span class="email-style"><?php echo $res['email']; ?></span></td>
                                    <td><?php echo $res['number']; ?></td>
                                    <td><?php echo $res['message']; ?></td>
                                    <td><i class="fas fa-edit"></i></td>
                                    <td><i class="fas fa-trash"></i></td>
                                </tr>

                        <?php
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <button><a href="index.php">Logout</a></button>
    </div>
</body>
</html>