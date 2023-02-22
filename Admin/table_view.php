<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

        <div class="page-wrapper">
       
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Shiko Planin</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Shiko Planin</li>
                    </ol>
                </div>
            </div>
            
            <div class="container-fluid">
               
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="new_entry.php"><button class="btn btn-primary">Shto Antarë</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
          <th>Nr</th>
          <th>Skadimi Antarsimit</th>
          <th>ID Antarsimit</th>
          <th>Validimi</th>
          <th>Kontakti</th>
          <th>Email</th>
          <th>Gjinia</th>
          <th>Data Antarsimit</th>
          <th>Action</th>
        </tr>
      </thead>    
        <tbody>
          <?php
         $query  = "select * from users ORDER BY joining_date";
            
              $result = mysqli_query($con, $query);
              $sno    = 1;

              if (mysqli_affected_rows($con) != 0) {
                  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                      $uid   = $row['userid'];
                      $query1  = "select * from enrolls_to WHERE uid='$uid' AND renewal='yes'";
                      $result1 = mysqli_query($con, $query1);
                      if (mysqli_affected_rows($con) == 1) {
                          while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                ?>  
                  
                  <tr>
                    <td><?php echo $sno ?></td>
                     <td><?php echo $row1['expire']; ?></td>
                     <td><?php echo $row['userid']; ?></td>
                     <td><?php echo $row['username']; ?></td>
                     <td><?php echo $row['mobile']; ?></td>
                     <td><?php echo $row['email'];?> </td>
                     <td><?php echo $row['gender'];?> </td>
                     <td><?php echo $row['joining_date']; ?> </td>
                  
                  
                  
                 <td>
                  <a href="viewall_detail.php?id=<?php echo $row['userid'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-folder-open"></i></button></a>
                 </td></tr>
                  
              <?php 
              $sno++; 
              $msgid = 0;
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

