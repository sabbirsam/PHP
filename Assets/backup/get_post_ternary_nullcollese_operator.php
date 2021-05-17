
<!--start   GET and POST method then using ternary operator to show data and null collease operator ------------------------------------------------------------------------------------------------>
<!--start-----------isset / ternary operator to show data and null collease operator---------------------------------------------------------------------------->
<!--start----------------- null collease operator--------------------------------------------------------------->
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



<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <!--          GET:   http://localhost:63342/Php/Assets/form.php?                 uname=sabbir&password=12        -->
            <!--          POST:  http://localhost:63342/Php/Assets/form.php                                                    -->

            <form method="GET"> <!--method: Get means submit in URL and value can be seen but POST means internally by using HEADER  and value can not be seen-->
                <label for="uname">User Name</label>
                <input type="text" placeholder="username" name="uname" id="uname">

                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" id="password">

                <input type="submit">
            </form>



            <form method="POST"> <!--method: Get means submit in URL and value can be seen but POST means internally by using HEADER  and value can not be seen-->
                <label for="uname">User Name</label>
                <input type="text" placeholder="username" name="uname" id="uname">

                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" id="password">

                <input type="submit">
            </form>


        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php
            $uname = '';
            $pass = '';
            ?>
            <h4>User name: <?php echo isset($_GET['uname']) ? $_GET['uname'] : $uname;?></h4>   <!--name="uname" and use ternary operator-->
            <h4>Password: <?php echo $_GET['password'] ?? $pass ;?> </h4>  <!--name="password" and used null collease operator-->
        </div>
        <h2>===========================or===============================</h2>

        <div class="column column-60 column-offset-20">
            <?php if(isset($_GET['uname']) && !empty($_GET['uname'])) {  ?>
                <h4>User name: <?php echo $_GET['uname']; ?></h4>   <!--name="uname" and use ternary operator-->

            <?php }?>


            <h2>===========================or===============================</h2>

            <?php if(isset($_GET['password']) && !empty($_GET['password'])) :  ?>
                <h4>Password: <?php echo $_GET['password']; ?> </h4>  <!--name="password" and used null collease operator-->

            <?php endif;?>
        </div>


        <!--        post -->

        <div class="column column-60 column-offset-20">
            <?php if(isset($_POST['uname']) && !empty($_POST['uname'])) {  ?>
                <h4>User name: <?php echo $_GET['uname']; ?></h4>   <!--name="uname" and use ternary operator-->

            <?php }?>


            <h2>===========================or===============================</h2>

            <?php if(isset($_POST['password']) && !empty($_POST['password'])) :  ?>
                <h4>Password: <?php echo $_POST['password']; ?> </h4>  <!--name="password" and used null collease operator-->

            <?php endif;?>
        </div>

        <!--        request-->


        <div class="column column-60 column-offset-20">
            <?php if(isset($_REQUEST['uname']) && !empty($_REQUEST['uname'])) {  ?>
                <h4>User name: <?php echo $_REQUEST['uname']; ?></h4>   <!--name="uname" and use ternary operator-->

            <?php }?>


            <h2>===========================or===============================</h2>

            <?php if(isset($_REQUEST['password']) && !empty($_REQUEST['password'])) :  ?>
                <h4>Password: <?php echo $_REQUEST['password']; ?> </h4>  <!--name="password" and used null collease operator-->

            <?php endif;?>
        </div>




    </div>

</div>
