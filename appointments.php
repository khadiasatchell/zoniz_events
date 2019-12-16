
<?php
    $title = 'Appointments'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get all attendees
    $results = $crud->getCustomer();
?>


    <table class="table">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>occassion</th>
            <th>event date</th>
            <th>actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['customer_id'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['customer_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['customer_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php 
                    echo $r['customer_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
           </tr> 
        <?php }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>