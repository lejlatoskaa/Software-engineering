<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 


        <div class="page-wrapper">

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Statusi Shëndetësis</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Shiko Statusin e Shëndetësis</li>
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
          <th>ID e antarit</th>
          <th>Validimi</th>
          <th>Kontakti</th>
          <th>Email</th>
          <th>Gjinia</th>
          <th>Data Lindjes</th>
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
                      $uname;
                      $udob;
                      $ujoing;
                      $ugender;
                      $query1  = "select * from enrolls_to WHERE uid='$uid' AND renewal='yes'";
                      $result1 = mysqli_query($con, $query1);
                      if (mysqli_affected_rows($con) == 1) {
                          while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                
                ?>  
                  
                  <tr>
                    <td><?php echo $sno; ?></td>
                     <td><?php echo $row['userid']; ?></td>
                     <td><?php echo$row['username']; ?></td>
                     <td><?php echo $row['mobile']; ?></td>
                     <td><?php echo $row['email']; ?> </td>
                      <td><?php echo $row['gender']; ?> </td>
                       <td><?php echo $row['dob']; ?> </td>
                       <td><?php echo $row['joining_date']; ?> </td>
                  
                  <?php
                  $uname=$row['username'];
                          $udob=$row['dob'];
                          $ujoing=$row['joining_date'];
                          $ugender=$row['gender'];
                   ?>
                  
                 <td>
                  <form action='health_status_entry.php' method='post'><input type='hidden' name='uid' value='<?php echo $uid;?>'/>
                  <input type='hidden' name='uname' value='<?php echo $uname;?>'/>
                              <input type='hidden' name='udob' value='<?php echo $udob;?>'/>
                      
                              <input type='hidden' name='ujoin' value='<?php echo $ujoing;?>'/>
                              <input type='hidden' name='ugender' value='<?php echo $ugender ?>'/>
                              
                  <input type='submit' id='button1' value='Health Status' class="btn btn-primary btn-flat m-b-30 m-t-30"/></form>
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
