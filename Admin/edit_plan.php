
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">
  
 <?php

include('../constant/connect.php');

       
       

?>
<?php
        $id=$_GET['id'];
  
        $sql="Select * from plan  Where pid='".$_GET['id']."'";
        $res=mysqli_query($con, $sql);
       
                     if($res){
                                $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
   
                              }
                        
        ?>

        <div class="page-wrapper">
        
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Ndrysho Planin</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Ndrysho Planin</li>
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

                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="updateplan.php" id="form1" name="form1">

                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">ID Plan</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="planid" id="planID" readonly value='<?php echo $row['pid'] ?>' class="form-control">

                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Emri Planit</label>
                                                <div class="col-sm-9">
                                                 <input name="planname" id="planName" type="text" value='<?php echo $row['planName'] ?>' class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Përshkrimi Planit</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="desc" id="planDesc"  value='<?php echo $row['description'] ?>' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Validimi Planit</label>
                                                <div class="col-sm-9">
                                                 <input type="number" name="planval" id="planVal" value='<?php echo $row['validity'] ?>' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                      <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Çmimi Planit</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="amount" id="planAmnt" value='<?php echo $row['amount'] ?>' class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" id="submit" value="UPDATE PLAN" class="btn btn-primary btn-flat m-b-30 m-t-30">UPDATE PLAN</button>
                                         <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>

                
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               
 

<?php include('../constant/layout/footer.php');?>


