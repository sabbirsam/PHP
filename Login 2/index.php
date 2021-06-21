<?php

session_name('anyName');
session_start([
    'cookie_lifetime'=>300
]);

$error = false;

// session_destroy();

// pass check and loggin 
if(isset($_POST['uname']) && isset($_POST['password'])){
    if('admin' == $_POST['uname'] &&  '8b9ddb14103d13348b3122642e2d87e8' == md5($_POST['password'])){  //pass: sabbir 
        $_SESSION['loggedin'] = true;
    }else{
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

// logout 
if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false; //use to logout by 1 click 
    session_destroy();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

<!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

<!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <title>Document</title>
    <style>
    body{
        margin-top: 30px;
    }

    blockquote {
    border-left: 0.3rem solid #ff0c0c;
    color: red;
    box-shadow: 3px 2px 12px 0px
}
    
    </style>
</head>
<body>
        <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">

                <h2>
                        <?php 
                            if(true == $_SESSION['loggedin']){
                                echo "Hello Admin, Welcome to Dashboard."; 
                            }else{
                               echo "Hello Guest, Welcome. Please Loggin here.";
                            }
                        ?>
                       
                </h2>
            </div>
        </div>


        <div class="row">
                <div class="column column-60 column-offset-20">
                <?php 

                echo "\nmd5:";
                echo md5("sabbir");
                echo "\n";

                echo "\nsha1:";
                echo sha1("sabbir");
                echo "\n";

                echo "\nsha256:";
                echo hash("sha256","sabbir");
                echo "\n";

                echo "\nsha512:";
                echo hash("sha512","sabbir");
                echo "\n";
                

                if($error){
                    echo "<blockquote>Username and password didn't match </blockquote>";
                }


                if (false == $_SESSION['loggedin'] ):
                
                ?>
                    <form  action="" method="POST">

                            <label for="uname">Username:</label>
                            <input type="text" placeholder="Enter User Name" id="uname" name="uname" >

                            <label for="password">Password</label>
                            <input type="password" placeholder="Enter password" id="password" name="password">
                        
                            <button type="submit" class="button-primary" name="submit">Logged In</button>

                    </form>
                    <?php else:
                        ?>

                        <form  action="./index.php" method="POST">
                            <input type="hidden" name="logout" value="1">
                            <button type="submit" class="button-primary" name="submit">Logout</button>

                        </form>


                    <?php endif?>
                </div>


            </div>
        </div>
            
</body>


</html>