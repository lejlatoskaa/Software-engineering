
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">
 
 <?php

include('../constant/connect.php');
        $uid=0;
$uname=0;
$udob=0;
$ujoin=0;
$ugender=0;
$cal="";
$hei="";
$wei="";
$fa="";
$remar="";

if(isset($_POST['submit'])){
    $calorie=$_POST['calorie'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $fat=$_POST['fat'];
    $remarks=$_POST['remarks'];
    $userid=$_POST['usrid'];
    
     
    $query="update health_status set calorie='".$calorie."', height='".$height."',weight='".$weight."',fat='".$fat."',remarks='".$remarks."' where uid='".$userid."'";
     
    if(mysqli_query($con,$query)){
        echo "<head><script>alert('Health Status Added ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";

    }
    else{
     echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
     echo "error".mysqli_error($con);
     echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";
        
    }

    
}
else{
    $uid=$_POST['uid'];
    $uname=$_POST['uname'];
    $udob=$_POST['udob'];
    $ujoin=$_POST['ujoin'];
    $ugender=$_POST['ugender'];
    
    $sql="select * from health_status where uid='".$uid."'";
    $result=mysqli_query($con,$sql);
    if($result){
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $cal=$row['calorie'];
        $hei=$row['height'];
        $wei=$row['weight'];
        $fa=$row['fat'];
        $remar=$row['remarks'];
    }
}

?>

  
        <div class="page-wrapper">
       
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Ndrysho të dhënat e Antarit </h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Ndrysho të dhënat e Antarit</li>
                    </ol>
                </div>
            </div>
        
            <div class="container-fluid">
           
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="" id="form1" name="form1">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">ID Antarit</label>
                                                <div class="col-sm-9">
                                                  
                                               <input type="text" id="boxx" readonly value='<?php echo $uid ?>' name="usrid" required class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Validimi</label>
                                                <div class="col-sm-9">
                                                <input type="text" id="boxxe" readonly="" value='<?php echo $uname?>'  required  class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Gjinia</label>
                                                <div class="col-sm-9">
                                               <input type="text" id="boxxe" readonly="" value='<?php echo $ugender?>'  class="form-control" required>
                                                </div>
                                            </div>
                                        </div><div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Data Lindjes</label>
                                                <div class="col-sm-9">
                                                <input type="text" id="boxxe" readonly="" value='<?php echo  $udob ?>'  class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Data Antarsimit</label>
                                                <div class="col-sm-9">
                                               <input type="text" id="boxxe" readonly="" value='<?php echo $ujoin?>' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Kalori</label>
                                                <div class="col-sm-9">
                                              <input type="text" id="boxx" name="calorie" value='<?php echo $cal?>' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Gjatesia</label>
                                                <div class="col-sm-9">
                                                <input type="text" id="boxx" name="height" value='<?php echo $hei?>'placeholder="Gjatësia në cm" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Pesha</label>
                                                <div class="col-sm-9">
                                                <input type="text" id="boxx" name="weight" value='<?php echo $wei?>'placeholder="Pesha në kg" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                    
                                          <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Komente</label>
                                                <div class="col-sm-9">
                                           <textarea id="remarks" rows="5" name="remarks" placeholder="- - -" style="margin: 0px; width: 220px; height: 72px; resize:none;" class="form-control" ><?php echo $remar?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                         
                                       <button type="submit" name="submit" id="submit" value="SUBMIT" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                         <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>

                
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                  
                </div>
                

<?php include('../constant/layout/footer.php');?>
 
