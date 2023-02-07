<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 


        <div class="page-wrapper">
        
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Të dhënat e Antarit</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Të dhënat e Antarit</li>
                    </ol>
                </div>
            </div>
          
            <div class="container-fluid">
          
                 <div class="card">
                            <div class="card-body">
                              <h1>Të dhënat e Antarit</h1>
                            <h3>
                              Detajet e : - <?php
      $id     = $_GET['id'];;
      $query  = "select * from users WHERE userid='$id'";
      //echo $query;
      $result = mysqli_query($con, $query);

      if (mysqli_affected_rows($con) != 0) {
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $name = $row['username'];
              $memid=$row['userid'];
              $gender=$row['gender'];
              $mobile=$row['mobile'];
              $email=$row['email'];
              $joinon=$row['joining_date'];
              echo $name;
          }
      }
      ?></h3>
                                <div class="table-responsive m-t-40">
                                    <table class="table table-bordered table-striped">
                                        <thead>
        <tr>
         <th>ID Antarit</th>
          <th>Validimi</th>
          <th>Gjinia</th>
            <th>Kontakti</th>
            <th>Email</th>
          <th>Data Antarsimit</th>
        </tr>
      </thead>    
        <tbody>
         
                  <tr>
                    <td><?php  echo $memid; ?></td>
                     <td><?php echo $name; ?></td>
                     <td><?php echo $gender; ?></td>
                     <td><?php echo $mobile; ?></td>
                     <td><?php echo $email; ?></td>
                     <td><?php echo $joinon; ?> </td>
                 </tr>
                  
             

        </tbody>
                                      
                                    </table>
                                    <br>
                                    <br>
                                    <h3>Historia e pagesës : - <?php echo $name;?></h3>
                                               <table class="table table-bordered table-striped">
                                        <thead>
        <tr>
         <th>Nr</th>
          <th>Emri Planit</th>
          <th>Përshkrimi Planit</th>
          <th>Validimi</th>
          <th>Çmimi</th>
          <th>Data Pagesës</th>
          <th>Data Skadimit</th>
        </tr>
      </thead>    
        <tbody>
          <?php
            
            $query1  = "select * from enrolls_to WHERE uid='$memid'";
      
            $result = mysqli_query($con, $query1);
            $sno    = 1;

            if (mysqli_affected_rows($con) != 0) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  $pid=$row['pid'];
                  $query2="select * from plan where pid='$pid'";
                  $result2=mysqli_query($con,$query2);
                  if($result2){
                    $row1=mysqli_fetch_array($result2,MYSQLI_ASSOC);?>
         
                  <tr>
                    <td><?php  echo  $sno; ?></td>
                     <td><?php echo$row1['planName']; ?></td>
                    
                     <td width='380'><?php echo $row1['description']; ?></td>
                     <td><?php echo $row1['validity']; ?></td>
                     <td><?php echo $row1['amount']; ?> </td>
                     <td><?php echo $row['paid_date']; ?> </td>
                     <td><?php echo $row['expire']; ?> </td>
                 </tr>
                 <?php 
                 $sno++;
                }  
              $memid = 0;
                }
                
            }

          ?>      

        </tbody>
                                      
                                    </table>

                                </div>
                            </div>
                        </div>
       

<?php include('../constant/layout/footer.php');?>


