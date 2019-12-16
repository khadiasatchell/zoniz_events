<?php
    $title = 'Appointment'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // Get attendee by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    } else{
        $id = $_GET['id'];
        $result = $crud->getOccasionDetails($id);
    
?>

<img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.jpg" : $result['avatar_path']; ?>
" class="rounded-circles" style="with: 50%; height: 50% "/>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $result['name'] ; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $result['name']; ?>    
        </h6>
        <p class="card-text">
            Date Of events: <?php echo $result['dateofevent']; ?>
        </p>
        <p class="card-text">
            Email Adress: <?php echo $result['emailsaddress']; ?>
        </p>
        <p class="card-text">
            Contact Number: <?php echo $result['contactnumber']; ?>
        </p>

    </div>
</div>
<br/>
<br/>
        <a href="viewrecords.php" class="btn btn-info">Back to List</a>
        <a href="edit.php?id=<?php echo $result['customer_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['customer_id'] 
        ?>" class="btn btn-danger">Delete</a>
    <?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>