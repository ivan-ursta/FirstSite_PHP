<h1>Home</h1>
<?php

    if (!isset($_POST['logbtn']) && !isset($_SESSION['registered_user'])){
        ?>
        <h3>Log In Form</h3>

        <form action="index.php?page=1" method="post">
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" name="login">
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <button type="submit" class="btn btn-primary" name="logbtn">Log In</button>
        </form>
        <?php
    }
    else{
        if(logIn($_POST['login'], $_POST['pass']))
        {
            echo "<h3/><span style ='color:green'>Welcome " . $_SESSION['registered_user'] . "</span><h3/>";
        }
    }
?>
