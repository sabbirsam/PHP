
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- You should properly set the path from the main file. -->
    <title>Document</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <div class="row">
                <?php
                $fname= '';
                $pass= '' ;
                $checked='';
                ?>
                <div class="column column-60 column-offset-20">
                    <?php if(isset($_POST['uname']) && !empty($_POST['uname'])) {
                        $fname = filter_input(INPUT_POST, 'uname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    }?>

                    <?php if(isset($_POST['password']) && !empty($_POST['password'])) :
                        $pass= filter_input(INPUT_POST, 'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    endif;?>

                    <?php if(isset($_POST['accept']) && ($_POST['accept'] == 1)) {
                        $checked = 'checked';
                    } ?>

                </div>

            </div>
            <form method="POST">

                <label for="uname">User Name</label>
                <input type="text" placeholder="username" name="uname" id="uname" value="<?php echo $fname;?>">

                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" id="password" value="<?php echo $pass;?>">


                <div>
                    <input type="checkbox" id="accept" name="accept" value="1" <?php echo $checked;?> >
                    <label for="accept" class="label-inline">Accept </label>
                </div>

                <input type="submit">
            </form>
            <div class="row">
                <p>
                    User name: <?php echo $fname;?> <br>
                    Password: <?php echo $pass;?>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
