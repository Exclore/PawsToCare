<?php
    include "template/header.php"; 
    require_once("models/cats.model.php");
    require_once("models/dogs.model.php");
    require_once("models/exotics.model.php");

   // loginRequired();

    session_start();
    //$ownerId = $_SESSION['userId'];
    $ownerId = 1;

    $cats = Cats::getByOwner($ownerId);
    $dogs = Dogs::getByOwner($ownerId);
    $exotics = Exotics::getByOwner($ownerId);


    $catHeaders = Cats::$headers;
    $dogHeaders = Dogs::$headers;
    $exoticHeaders = Exotics::$headers;
?>

    <div class="container">

    <?php if(count($cats) == 0 && count($dogs) == 0 && count($exotics) == 0): ?>
        <p>You don't have any pets.</p>
    <?php endif; ?>

    <?php if(count($cats) != 0): ?>
    <!-- Cats Table -->
    <h2>Cats</h2>
    <table>
        <thead class="thead-dark">
            <?php foreach($catHeaders as $field): ?>
                <th scope="col" class="text-capitalize pointer" data-key="<?php echo $field; ?>" data-toggle="tooltip" data-placement="top">
                    <?php echo $field; ?>
                    <span id="asc" class="d-none"> △</span>
                    <span id="desc" class="d-none"> ▽</span>
                </th>          
            <?php endforeach; ?>
        </thead>
        <tbody>
         <?php foreach($cats as $cat): ?>
         <?php error_log(print_r($cat,true)); ?>
            <tr>
                <td><?php echo $cat[0]; ?></td>
                <td><?php echo $cat[1]; ?></td>
                <td><?php echo $cat[2]; ?></td>
                <td><?php echo $cat[3]; ?></td>
                <td><?php echo $cat[4]; ?></td>
                <td><?php echo $cat[5]; ?></td>
                <td><?php echo $cat[6]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<?php if(count($dogs) != 0): ?>
        <!-- Dogs Table -->
        <h2>Dogs</h2>
    <table>
        <thead class="thead-dark">
            <?php foreach($dogHeaders as $field): ?>
                <th scope="col" class="text-capitalize pointer" data-key="<?php echo $field; ?>" data-toggle="tooltip" data-placement="top">
                    <?php echo $field; ?>
                    <span id="asc" class="d-none"> △</span>
                    <span id="desc" class="d-none"> ▽</span>
                </th>          
            <?php endforeach; ?>
        </thead>
        <tbody>
         <?php foreach($dogs as $dog): ?>
            <tr>
                <td><?php echo $dog[0]; ?></td>
                <td><?php echo $dog[1]; ?></td>
                <td><?php echo $dog[2]; ?></td>
                <td><?php echo $dog[3]; ?></td>
                <td><?php echo $dog[4]; ?></td>
                <td><?php echo $dog[5]; ?></td>
                <td><?php echo $dog[6]; ?></td>
                <td><?php echo $dog[7]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<?php if(count($exotics) != 0): ?>
    <!-- Exotics Table -->
    <h2>Exotics</h2>
    <table>
        <thead class="thead-dark">
            <?php foreach($exoticHeaders as $field): ?>
                <th scope="col" class="text-capitalize pointer" data-key="<?php echo $field; ?>" data-toggle="tooltip" data-placement="top">
                    <?php echo $field; ?>
                    <span id="asc" class="d-none"> △</span>
                    <span id="desc" class="d-none"> ▽</span>
                </th>          
            <?php endforeach; ?>
        </thead>
        <tbody>
         <?php foreach($exotics as $exotic): ?>
            <tr>
                <td><?php echo $exotic[0]; ?></td>
                <td><?php echo $exotic[1]; ?></td>
                <td><?php echo $exotic[2]; ?></td>
                <td><?php echo $exotic[3]; ?></td>
                <td><?php echo $exotic[4]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
<?php endif;?>
</div>
<?php
    include "template/footer.php"; 
?>
