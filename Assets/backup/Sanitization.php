<!--Sanitization--------------------------------------------------------------------------------------------------------------------------------------->
<!--Sanitization-------------------------------------------------------------------------------------------------------------------------------->
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <div class="row">    <!--htmlspecialchars()  is used to treat script as a text-->
                <?php
                $fname= '';
                $pass= '' ;
                ?>
                <div class="column column-60 column-offset-20">
                    <?php if(isset($_POST['uname']) && !empty($_POST['uname'])) {

                        //INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, or INPUT_ENV.
//
                        //FILTER_SANITIZE_EMAIL   FILTER_SANITIZE_ENCODED  FILTER_SANITIZE_MAGIC_QUOTES   FILTER_SANITIZE_NUMBER_FLOAT
                        //FILTER_SANITIZE_NUMBER_INT   FILTER_SANITIZE_SPECIAL_CHARS  and so on
                        //  https://www.php.net/manual/en/filter.filters.sanitize.php

//                        $fname = htmlspecialchars($_POST['uname']);   or
//                      $fname = filter_input(INPUT_POST, 'uname',FILTER_SANITIZE_STRING); or
                        $fname = filter_input(INPUT_POST, 'uname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    }?>

                    <?php if(isset($_POST['password']) && !empty($_POST['password'])) :
//                        $pass= htmlspecialchars( $_POST['password'] );  or
//                        $pass= filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);    or
                        $pass= filter_input(INPUT_POST, 'password',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    endif;?>
                </div>

            </div>
            <form method="POST">

                <label for="uname">User Name</label>
                <input type="text" placeholder="username" name="uname" id="uname" value="<?php echo $fname;?>">

                <label for="password">Password</label>
                <input type="password" placeholder="password" name="password" id="password" value="<?php echo $pass;?>">

                <input type="submit">
            </form>
            <div class="row">
                <p>User name: <?php echo $fname;?> <br>
                    Password: <?php echo $pass;?>
                </p>
            </div>
        </div>
    </div>
</div>
