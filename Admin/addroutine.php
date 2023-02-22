
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">

 <?php
include('../constant/connect.php');

?>

        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Menaxhimi Ushtrimeve</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Shto Ushtrime</li>
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
                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="saveroutine.php" id="form1" name="form1">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Emri Ushtrimit:</label>
                                                <div class="col-sm-9">
                                                  
                                                 <input name="rname" required class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 1</label>
                                                <div class="col-sm-9">
                                                  <textarea name="day1" id="textarea" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 2</label>
                                                <div class="col-sm-9">
                                               <textarea name="day2" id="textarea" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 3</label>
               
                                                <div class="col-sm-9">
                                                <textarea name="day3" id="textarea" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                        </div>

                                      <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 4</label>
                                                <div class="col-sm-9">
                                                <textarea name="day4" id="textarea" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 5</label>
                                                <div class="col-sm-9">
                                                <textarea name="day5" id="textarea" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                        </div><div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">DAY 6</label>
                                                <div class="col-sm-9">
                                                    <textarea name="day6" id="textarea" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                         
                                        <button type="submit" name="submit" id="submit" value="Add Routine" class="btn btn-primary btn-flat m-b-30 m-t-30">Add Routine</button>
                                         <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>

                
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                  
                </div>
                
               
           
<?php include('../constant/layout/footer.php');?>
