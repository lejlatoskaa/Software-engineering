
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">

 <?php

include('../constant/connect.php');
if (isset($_POST['userID']) && isset($_POST['planID'])) {
    $uid  = $_POST['userID'];
    $planid=$_POST['planID'];
    $query1 = "select * from users WHERE userid='$uid'";
    
    $result1 = mysqli_query($con, $query1);
    
    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            
            $name = $row1['username'];
            $query2="select * from plan where pid='$planid'";

            $result2=mysqli_query($con,$query2);
            if($result2){
               $planValue=mysqli_fetch_array($result2,MYSQLI_ASSOC);
               $planName=$planValue['planName'];
            }
        }
    }
}
?>

        <div class="page-wrapper">
         
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Menaxhimi Pagesës</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Menaxhimi Pagesës</li>
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
                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="submit_payments.php" id="form1" name="form1">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">ID Antarit</label>
                                                <div class="col-sm-9">
                   
                                                 <input type="text" name="m_id" id="boxx" value="<?php echo $uid; ?>" class="form-control" readonly>
                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Validimi</label>
                                                <div class="col-sm-9">
                                                 <input type="text" name="u_name" id="boxx" value="<?php echo $name; ?>" placeholder="Emri Antarit" maxlength="30" readonly class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Plani</label>
                                                <div class="col-sm-9">
                                                <input type="text" name="prevPlan" id="boxx" value="<?php echo $planName; ?>" readonly class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Zgjidh Plan të ri</label>
                                                <div class="col-sm-9">
                                                <select name="plan" id="boxx" required onchange="myplandetail(this.value)" class="form-control">
                            <option value="">-- Please select --</option>
                            <?php
    
                                $query = "select * from plan where active='yes'";
                                
                                //echo $query;
                                $result = mysqli_query($con, $query);
                                
                                if (mysqli_affected_rows($con) != 0) {
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        echo "<option value=" . $row['pid'] . ">" . $row['planName'] . "</option>";
                                        
                                    }
                                }
                                
                            ?>
                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div id="plandetls">
                                            </div>
                                        </div>
                                    </div>
                                        <button type="submit" name="submit" id="submit" value="ADD PAYMENT" class="btn btn-primary btn-flat m-b-30 m-t-30">ADD PAYMENT</button>
                                         <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>

                
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
    
<script>
            function myplandetail(str){

                if(str==""){
                    document.getElementById("plandetls").innerHTML = "";
                    return;
                }else{
                    if (window.XMLHttpRequest) {
              
                     xmlhttp = new XMLHttpRequest();
                     }
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     document.getElementById("plandetls").innerHTML=this.responseText;
                
                        }
                    };
                    
                     xmlhttp.open("GET","plandetail.php?q="+str,true);
                     xmlhttp.send();    
                }
                
            }
        </script>
<?php include('../constant/layout/footer.php');?>
