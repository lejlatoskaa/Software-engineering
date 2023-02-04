
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">

 <?php

include('../constant/connect.php');
  $id=$_GET['id'];
        $sql="Select * from timetable  Where tid=$id";
        $res=mysqli_query($con, $sql);
                     if($res){
                                $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                
                              }
                        
   


?>

        <div class="page-wrapper">
          
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Ndrysho Ushtrimin</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Ndrysho Ushtrimin</li>
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
                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="updateroutine.php?id=<?php echo $_GET['id'];?>" id="form1" name="form1">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Emri Ushtrimit</label>
                                                <div class="col-sm-9">
                                                  
                                                 <input type="text" name='routinename' value='<?php echo $row['tname'] ?>' required class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 1</label>
                                                <div class="col-sm-9">
                                                  <textarea name="day1" id="textarea" class="form-control" ><?php echo $row['day1'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 2</label>
                                                <div class="col-sm-9">
                                               <textarea name="day2" id="textarea" class="form-control" ><?php echo $row['day2'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 3</label>
               
                                                <div class="col-sm-9">
                                                <textarea name="day3" id="textarea" class="form-control" ><?php echo $row['day3'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                      <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 4</label>
                                                <div class="col-sm-9">
                                                <textarea name="day4" id="textarea" class="form-control"><?php echo $row['day4'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 5</label>
                                                <div class="col-sm-9">
                                                <textarea name="day5" id="textarea" class="form-control" ><?php echo $row['day5'] ?></textarea>
                                                </div>
                                            </div>
                                        </div><div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 6</label>
                                                <div class="col-sm-9">
                                                    <textarea name="day6" id="textarea" class="form-control"><?php echo $row['day6'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                         
                                        <button type="submit" name="submit" id="submit" value="Update" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                         <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>

                
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                  
                </div>
                
<?php include('../constant/layout/footer.php');?>
