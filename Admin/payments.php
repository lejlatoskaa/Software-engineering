<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

        <div class="page-wrapper">

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Pagesa</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Pagesa</li>
                    </ol>
                </div>
            </div>
           
            <div class="container-fluid">
          
                 <div class="card">
                            <div class="card-body">
                              
                            
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
          <th>Nr:</th>
          <th>Afati Antarsimit</th>
          <th>Validimi</th>
          <th>ID e antarit</th>
          <th>Kontakti</th>
          <th>Email</th>
          <th>Gjinia</th>
          <th>Action</th>
        </tr>
      </thead>    
        <tbody>
          <?php
             
          $query  = "select * from enrolls_to where renewal='yes' ORDER BY expire";
         
          $result = mysqli_query($con, $query);
          $sno    = 1;

          if (mysqli_affected_rows($con) != 0) {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                  $uid   = $row['uid'];
                  $planid=$row['pid'];
                  $query1  = "select * from users WHERE userid='$uid'";
                  $result1 = mysqli_query($con, $query1);
                  if (mysqli_affected_rows($con) == 1) {
                      while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                  
                ?>  
                  
                  <tr>
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $row['expire']; ?></td>
                    <td><?php echo $row1['username']; ?></td>
                     <td><?php echo  $row1['userid']; ?></td>
                      <td><?php echo  $row1['mobile']; ?></td>
                     <td><?php echo  $row1['email']; ?> </td>
                      <td><?php echo  $row1['gender']; ?> </td>
                     
                  
                  
                  
                 <td>
                  <form action='make_payments.php' method='post'><input type='hidden' name='userID' value='<?php echo $uid; ?>'/>
                          <input type='hidden' name='planID' value='<?php echo $planid; ?>'/><input type='submit'  value='Add Payment ' class="btn btn-primary btn-flat m-b-30 m-t-30"/></form>
                 </td></tr>
                  
              <?php 
              $sno++; 
              
             $uid = 0;
                      }
                  }
              }
          }

          ?>  

        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
               
              
           

<?php include('../constant/layout/footer.php');?>

