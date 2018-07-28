<!DOCTYPE html>
<html>
    <?php include "defaulthead.php"; ?>
<head>
</head>

<body>
    <div class="container">
    <h2>Paws to Care Login</h2>
    <form action="/action_page.php" method="post">
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    
    <?php include "defaultscripts.php"; ?>
</body>

</html>