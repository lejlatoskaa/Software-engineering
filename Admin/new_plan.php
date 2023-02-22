
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
                    <h3 class="text-primary">Menaxhimi planit të ri</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Shto Plan të ri</li>
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
                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="submit_plan_new.php" id="form1" name="form1">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Plan ID</label>
                                                <div class="col-sm-9">
                                                  <?php
              function getRandomWord($len = 6)
              {
                  $word = array_merge(range('A', 'Z'));
                  shuffle($word);
                  return substr(implode($word), 0, $len);
              }

            ?>
                                                  <input type="text" name="planid" id="planID" readonly value="<?php echo getRandomWord(); ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Emri Planit</label>
                                                <div class="col-sm-9">
                                                 <input name="planname" id="planName" type="text" placeholder="- - -"class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Përshkrimi Planit</label>
                                                <div class="col-sm-9">
                                                 <input type="text" name="desc" id="planDesc" placeholder="- - - " class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Validimi Planit</label>
                                                <div class="col-sm-9">
                                                 <input type="number" name="planval" id="planVal" placeholder="- - - Validimi ne Muaj " class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                      <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Sasia e Planit</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="amount" id="planAmnt" placeholder=" - - -" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" id="submit" value="CREATE PLAN" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                         <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>

                
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                


<?php include('../constant/layout/footer.php');?>
