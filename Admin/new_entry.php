
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
                    <h3 class="text-primary">Menaxhimi i Antarëve</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Shto Antarët</li>
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
                                    <form class="form-horizontal" method="POST"  name="userform" enctype="multipart/form-data" action="new_submit.php" id="form1" name="form1">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">ID e Antarit</label>
                                                <div class="col-sm-9">
                                                  
                                                 <input type="text" id="boxx" name="m_id" value="<?php echo time(); ?>" readonly required class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                  

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Validimi</label>
                                                <div class="col-sm-9">
                                                 <input name="u_name" id="boxx"  required  class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Rruga</label>
                                                <div class="col-sm-9">
                                                <input  name="street_name" id="boxx" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Qyteti:</label>
               
                                                <div class="col-sm-9">
                                                 <input type="text" name="city" id="boxx" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                      <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Zip-Kodi:</label>
                                                <div class="col-sm-9">
                                                <input type="number" name="zipcode" id="boxx" maxlength="6" class="form-control" required pattern="^[0-9]+$" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Shteti</label>
                                                <div class="col-sm-9">
                                                <input type="text"  name="state" id="boxx" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div><div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Gjinia</label>
                                                <div class="col-sm-9">
                                               <select name="gender" id="boxx" required class="form-control">

                    <option value="">--Zgjidh Gjini--</option>
                    <option value="Male">Mashkull</option>
                    <option value="Female">Femër</option>
                </select>
                                                </div>
                                            </div>
                                        </div><div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Data Lindjes</label>
                                                <div class="col-sm-9">
                                                <input type="date"  name="dob" id="boxx"  class="form-control" required/>
                                                </div>
                                            </div>
                                        </div><div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Numri TEL:</label>
                                                <div class="col-sm-9">
                                                <input type="number" name="mobile" id="boxx" maxlength="10" class="form-control" required pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$">
                                                </div>
                                            </div>
                                        </div><div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                <input type="email" name="email" id="boxx" class="form-control" required  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Data Antarsimit</label>
                                                <div class="col-sm-9">
                                                <input type="date" name="jdate" id="boxx" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Plani</label>
                                                <div class="col-sm-9">
                                               <select name="plan" id="boxx" required onchange="myplandetail(this.value)" class="form-control">
                    <option value="">--Zgjidh Planin--</option>
                    <?php
                        $query="select * from plan where active='yes'";
                        $result=mysqli_query($con,$query);
                        if(mysqli_affected_rows($con)!=0){
                            while($row=mysqli_fetch_row($result)){
                                echo "<option value=".$row[0].">".$row[1]."</option>";
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
                                         
                                        <button type="submit" name="submit" id="submit" value="CREATE PLAN" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
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
