<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

        <div class="page-wrapper">
    
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Menaxhimi Planit</h3> </div>
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
                              
                            <a href="new_plan.php"><button class="btn btn-primary">Shto Plan</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
          <th>Nr:</th>
          <th>ID e Planit</th>
          <th>Emri Planit</th>
          <th>Detajet e Planit</th>
          <th>Muajt</th>
          <th>Çmimi</th>
          <th>Action</th>
        </tr>
      </thead>    
        <tbody>
          <?php
          $query  = "select * from plan where active='yes' ORDER BY amount DESC";
     
          $result = mysqli_query($con, $query);
          $sno    = 1;

          if (mysqli_affected_rows($con) != 0) {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  $msgid = $row['pid'];
                ?>  
                  
                  <tr>
                    <td><?php echo $sno ?></td>
                     <td><?php echo$row ['pid']; ?></td>
                     <td><?php echo $row['planName'] ?></td>
                     <td width='380'><?php echo $row['description'] ?></td>
                     <td><?php echo$row['validity'] ?></td>
                     <td> $<?php echo $row['amount']?> </td>
                  
                  
                  
                 <td>
                  <a href="edit_plan.php?id=<?php echo $row['pid'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                 
                  <a href="del_plan.php?id=<?php echo $row['pid'];?>"><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a></td></tr>
                  
              <?php 
              $sno++; 
              $msgid = 0;
              }
              
          }

          ?>  

        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
  
<?php include('../constant/layout/footer.php');?>
