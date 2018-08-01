
<?php 
    include "../template/header.php"; 
    require_once("../models/owners.model.php");
    //loginRequired(); 
    //adminRequired();    
    $headers = Owners::$headers;
    $allOwners = Owners::getAll();
?>
<div class="container">

    <table>
        <thead class="thead-dark">
            <?php foreach($headers as $field): ?>
                <th scope="col" class="text-capitalize pointer" data-key="<?php echo $field; ?>" data-toggle="tooltip" data-placement="top">
                    <?php echo $field; ?>
                    <span id="asc" class="d-none"> △</span>
                    <span id="desc" class="d-none"> ▽</span>
                </th>          
            <?php endforeach; ?>
        </thead>
        <tbody>
         <?php foreach($allOwners as $owner): ?>
            <tr>
                <td><?php echo $owner[0]; ?></td>
                <td><?php echo $owner[1]; ?></td>
                <td><?php echo $owner[2]; ?></td>
                <td><?php echo $owner[3]; ?></td>
                <td><?php echo $owner[4]; ?></td>
                <td><?php echo $owner[5]; ?></td>
                <td><?php echo $owner[6]; ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include "../template/footer.php"; ?>