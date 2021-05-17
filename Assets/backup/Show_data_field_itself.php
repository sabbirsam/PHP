<h2>==========================================Another Techniqu to show data on the field itself===============================</h2>

<!--end-----------------------------------------------Another Techniqu to show data on the field itself---------------------------------------------------------------------------------------->

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <div class="row">
                <?php
                $fname= '';
                $pass= '' ;
                ?>
                <div class="column column-60 column-offset-20">
                    <?php if(isset($_POST['uname']) && !empty($_POST['uname'])) {
                        $fname = $_POST['uname'];
                    }?>

                    <?php if(isset($_POST['password']) && !empty($_POST['password'])) :
                        $pass= $_POST['password'];

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
