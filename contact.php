<?php
    $title = 'Contact'; 

    require_once 'includes/header.php'; 
    //require_once 'db/conn.php';
?>

<h1 class="text - center">We would like to hear from you!</h1>
    
    <form method="post" action=success.php>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input required type="text" class="form-control" id="name"name="name">
        </div>

        <div class="form-group">
            <label for="event">Occassion</label>
            <select class="form-control" id=" occassion" name=" occassion ">
           <?php while($r=$results->fetch(PDO::FETCH_ASSOC)) {?>
                <option value="<?php echo $r[' occasion_id']?>"><?php echo $r ['name'] ?></option>
           <?php }?>
            </select>
        </div>

        <div class="form-group">
            <label for="doe">Date of event</label>
            <input type="text" class="form-control" id="doe" name="doe">
        </div>

        <div class="form-group">
            <label required for="email">Email Address</label>
            <input type="text" class="form-control" id="email"aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your 
            email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your 
            email with anyone else.</small>
        </div>
        
        <br>
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose Image (optional)</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php';?>
