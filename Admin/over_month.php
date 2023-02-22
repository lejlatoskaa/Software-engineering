
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
                    <h3 class="text-primary">Antarët në vit</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Antarët në vit</li>
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
                                    <form class="form-horizontal">
                                        <h3>Antarët në vit</h3>
                                        <form>
        <?php
       
        $yearArray = range(2000, date('Y'));
        ?>
       
        <select name="year" id="syear">
            <option value="0">Zgjidh Vitin</option>
            <?php
            foreach ($yearArray as $year) {
              
                $selected = ($year == date('Y')) ? 'selected' : '';
                echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
            }
            ?>
        </select>
    <input type="button" class="btn btn-primary btn-flat m-b-30 m-t-30"  style="margin-bottom:5px;" name="search" onclick="showMember();" value="Search">

    </form>

    
    <table id="meyear" border=1 class="table table-bordered table-striped"></table>


<script>

  function showMember(){
    var year=document.getElementById("syear");
    var iyear=year.selectedIndex;
    var ynumber=year.options[iyear].value;
    if(ynumber=="0"){
      document.getElementById("meyear").innerHTML="";
      return;
    }
    else{
        if(window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status ==200){
                document.getElementById("meyear").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET","over_month.php?mm=0&flag=1&yy="+ynumber,true);
        xmlhttp.send();
    }

  }

</script>
                                </div>
                            </div>

                        </div>
                    </div>
                  
                </div>
                
               


<?php include('../constant/layout/footer.php');?>


 
