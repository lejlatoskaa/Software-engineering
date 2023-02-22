<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 


        <div class="page-wrapper">
          
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Shiko Ushtrime</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Shiko Ushtrime</li>
                    </ol>
                </div>
            </div>
           
            <div class="container-fluid">
          
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="addroutine.php"><button class="btn btn-primary">Shto Ushtrime</button></a> 
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
          <th>Nr:</th>
          <th>Emri Ushtrimit</th>
          <th>Detajet Ushtrimit</th>
        </tr>
      </thead>    
        <tbody>
          <?php
          $query  = "select * from timetable";
 
          $result = mysqli_query($con, $query);
          $sno    = 1;

          if (mysqli_affected_rows($con) != 0) 
          {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
            {

                ?>  
                  
                  <tr>
                    <td><?php echo $sno ?></td>
                     <td><?php echo $row['tname']; ?></td>
                  
                  
                  
                 <td>
                  <a href="viewdetailroutine.php?id=<?php echo $row['tid'];?>"><button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30" value="View Routine">View Routine</button></a></td>
                 
                </tr>
                  
              <?php 
              $sno++; 
               $uid = 0;
                      
                  
              }
          }

          ?>  

        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
               
   

<?php include('../constant/layout/footer.php');?>
