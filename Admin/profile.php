
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 

 <?php
 include('../constant/connect.php');
if(isset($_POST["btn_update"]))
{
  extract($_POST);

  
   $q1="UPDATE `admin` SET `fname`='$fname',`lname`='$lname',`email`='$email',`contact`='$contact',`dob`='$dob',`gender`='$gender' where id = '".$_SESSION["id"]."'";
  

    if ($con->query($q1) === TRUE) {
   
      $_SESSION['success']='Record Successfully Updated';
      ?>
      <script type="text/javascript">
        window.location = "profile.php";
      </script>
      <?php

} else {
   
      $_SESSION['error']='Something Went Wrong';
}


  ?>
 
  <?php
}

?>

<?php
$que="select * from  admin where id = '".$_SESSION["id"]."'";
$query=$con->query($que);
while($row=mysqli_fetch_array($query))
{
  
  extract($row);
  $fname = $row['fname'];
  $lname = $row['lname'];
  $email = $row['email'];
  $contact = $row['contact'];
  $dob1 = $row['dob'];
  $gender = $row['gender'];
}

?> 
   

        <div class="page-wrapper">
       
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Profili</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Profili</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
           
                <div class="row">
                    <div class="col-lg-8" style="margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Emri</label>
                                                <div class="col-sm-9">
                                                    <input type="text"  value="<?php echo $fname;?>"  name="fname" class="form-control" id="event" onkeydown="return alphaOnly(event);" required>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mbiemri</label>
                                                <div class="col-sm-9">
                                                    <input type="text"  value="<?php echo $lname;?>"  name="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" required>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?php echo $email;?>"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"   class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Gjinia</label>
                                                <div class="col-sm-9">
                                                   <select name="gender" class="form-control" required>
                                                     <option value="Male"  <?php if($gender=="Male"){ echo "selected";}?>>Mashkull</option>
                                                      <option value="Female" <?php if($gender=="Female"){ echo "selected";}?>>Femër</option>
                                                   </select>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Data Lindjes</label>
                                                <div class="col-sm-9">
                                                    <input type="date" value="<?php echo $dob1;?>" name="dob" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Kontakti</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?php echo $contact;?>"  name="contact" class="form-control" id="tbNumbers" minlength="10" maxlength="10" onkeypress="javascript:return isNumber(event)" required>
                                                </div>
                                            </div>
                                        </div>

                                     

                                        <button type="submit" name="btn_update" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
           

<?php include('../constant/layout/footer.php');?>


<link rel="stylesheet" href="popup_style.css">

<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
