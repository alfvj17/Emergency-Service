<html>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="signUp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <style>

        body {
            background-image: url("hospital.jpg");
            height: 100%;
            background-position: center;
            background-size:  1400px 825px;
            background-repeat: no-repeat;

        }

    </style>

    <body>
        <div class="container-fluid">
            <div class="outterbox">
                <form method="post" action="index.php" class="form">
                    <p class="text-info form-text">Name:&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;<input type="text" class="innerbox" name="Name" required></p>
                    <p class="text-info form-text">User Name:&emsp;&emsp;&ensp;&ensp; <input type="text" class="innerbox" name="username" required></p>
                    <p class="text-info form-text">Password:&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<input type="password" class="innerbox" name="password" required></p>
                    <p class="text-info form-text">Confirm Password: <input type="password" class="innerbox" name="confirmpassword" required></p>
                    <p class="text-info form-text">Email: &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<input type="text" class="innerbox" name="email" required></p>
                    <p class="text-info form-text">Mobile: &emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" class="innerbox" name="mobile" required></p>
                    </br>
                    <center><input type="submit" class="btn btn-primary" name="submit" value="Submit"></center>
                </form>
            </div>
        </div>
    </body>
</html>
