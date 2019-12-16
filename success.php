<?php
    $title = 'Success'; 
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';


    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['fullname'];
        $ocas = $_POST['occassion'];
        $doe = $_POST['doe'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];

        
        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["tmp_name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$destination);
        
        //Call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fullname,  $occas, $doe, $email, $contact,$destination);        
        $specialtyName = $crud->getSpecialtyById($occas);
        
        if($isSuccess){
            SendEmail::SendMail($email, 'Welcome to Zoniz Events', 'You are now will contact you with  soon s possible');
            include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';
        }

    }
?>

    <img src="<?php echo $destination; ?>" class="rounded-circles" style="with: 50%; height: 50% "/>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
               <?php echo $_POST['name'];  ?>
            </h5>
            <p class="card-text">
                Date Of Birth: <?php echo $_POST['doe'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone'];  ?>
            </p>
    
        </div>
    </div>
    

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>