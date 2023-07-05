<!DOCTYPE html>
<html>

<head>
    <title>Signup Page</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
    <div class="signup-box">
        <h2><q> Sign up </q></h2>
        <form action="signup.php" method="post">
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter Name">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="Signup" value="Signup">
            <a href="login.php">Already have an account? Log in</a>
        </form>
    </div>

    <?php
    if(isset($_POST['Signup']))
    {
        include 'connect.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $x = "insert into users(name,email,password) values('$name','$email','$password')";
        $x2 = mysqli_query($conn,$x);

        // if($x2)
        // {
        //     echo "new user inserted";
        // }
        // else
        // {
        //     echo "try again";
        // }
    }
    ?>
</body>

</html>