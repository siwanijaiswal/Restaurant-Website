<?php
session_start();
include "./db.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25">
        <div class="m-4">
            <h3>LOGIN </h3>
            <div class="">
                <form action="" method="POST" name="form1">
                    <div class="form-group">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" placeholder="email" title="Please enter you username" required="" value="" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit1" class="btn btn-success btn-flat m-b-30 m-t-30">Login
                        </button>
                    </div>
                    <div class="register-link text-center">
                        <p>
                            Don't have account ?
                            <a href="register.php"> Sign Up Here</a>
                        </p>
                    </div>
                    <div class="alert alert-danger " id="failure" style="display: none;">
                        <strong>Invalid</strong> Username Or Password.
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["submit1"])) {
        $count = 0;
        $res = mysqli_query($link, "select * from registration where email='$_POST[email]' && password='$_POST[password]'") or die(mysqli_error($link));
        $count = mysqli_num_rows($res);
        if ($count == 0) {
    ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display = "block";
            </script>
        <?php
        } else {
            $_SESSION["email"] = $_POST["email"];
        ?>
            <script type="text/javascript">
                window.location = "index.php";
            </script>
    <?php
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>