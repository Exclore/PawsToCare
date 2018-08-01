<!DOCTYPE html>
<html>
<head>
    <?php include "defaulthead.php"; ?>
    <?php //loginRequired(); ?>
    <?php //adminRequired(); ?>
</head>

<body>
    <?php include "navbar.php"; ?>
    <?php include "generateTable.php"; ?>

    <?php generateTable("cats"); ?>


    <?php include "defaultscripts.php"; ?>
</body>
</html>