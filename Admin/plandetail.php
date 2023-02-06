<?php
include('../constant/connect.php');

$pid=$_GET['q'];
$query="select * from plan where pid='".$pid."'";
$res=mysqli_query($con,$query);
if($res){
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

	echo "
	      <div class='form-group'>
           <div class='row'>
       <label class='col-sm-6 control-label'>Shuma</label>
        <div class='col-sm-4' style='width:330px;'>
          <input type='text' name='u_name' id='boxx' value='$".$row['amount']."' maxlength='30' readonly class='form-control' style='width:550px;'>
          </div>
          </div>
          </div>
		 <div class='form-group'>
           <div class='row'>
       <label class='col-sm-6 control-label'>Validimi</label>
        <div class='col-sm-4' style='width:330px;'>
          <input type='text' name='u_name' id='boxx' value='".$row['validity']." Month' maxlength='30' readonly class='form-control' style='width:550px;'>
          </div>
          </div>
          </div>
		
	";
	       

}

?>
