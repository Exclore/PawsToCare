
    <?php 
    include "template/header.php";

   
        if(isLoggedIn()){
            header("Location: /");
            die;
        }
        $loginFail == false;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION = array();
            // Get values submitted from the login form
            $username = $_POST["username"];
            $password = $_POST["password"];
                    
            $result = login($username, $password);
            $loginFail = true;
        }
    ?>


    <div class="container">
    <h2>Paws to Care Login</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" <?php if(isset($_POST["username"])){echo 'value="'.$_POST["username"].'"';}?> id="username" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" <?php if(isset($_POST["password"])){echo 'value="'.$_POST["password"].'"';}?>class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <?php if($loginFail) : ?>
            <span class="text-danger">LOGIN FAILED</span>
        <?php endif; ?>
    </form>
    </div>
    
    <?php include "template/footer.php"; ?>
