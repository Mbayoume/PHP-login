<?php
    if(!isset($user_name)){
        $user_name = '';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form_style.css">
    <title>first PHP form</title>
</head>
<body>
    <div class="container">
        <!-- container card style for the form -->
        <div class="card" >

        <div class="img_container"> 
            <img src="man.png" alt="avater"/>
        </div>

        <!--form block  must be inside the card class-->
        <form action="home.php" method="POST">
            <input  type="text" name="user_name" method="POST" placeholder="E-mail or username" value="<?php echo htmlspecialchars($user_name)?>"> <br/>

            <?php
            if(isset($name_error)){?>

            <p><?php echo $name_error?></p>

        <?php  }?>
            

            <input type="password" name="user_password" method="POST" placeholder="Password"><br/>
            <?php
            if(isset($password_error)){?>

            <p><?php echo $password_error?></p>

        <?php  }?>

            <input  class="reg_btn" type="submit" value="login" method="POST">
        </form>
        </div>


    </div>
</body>
</html>