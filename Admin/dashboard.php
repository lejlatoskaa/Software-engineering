 <div class="page-wrapper">

            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <marquee direction="left" behavior="alternate" scrollamount=3 >
   <h3 style="color:red"><b>Welcome to Shark Gym    | made by: Blend Rexhepi , Lejla Toska , Ridon Ramadani</b></h3>
</marquee></div>
                
            </div>

            <div class="container-fluid">

                      <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-money f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                  <?php
                            date_default_timezone_set("Europe/Lisbon"); 
                            $date  = date('Y-m');
                            $query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";
                            
                            $result  = mysqli_query($con, $query);
                            $revenue = 0;
                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $query1="select * from plan where pid='".$row['pid']."'";
                                    $result1=mysqli_query($con,$query1);
                                    if($result1){
                                        $value=mysqli_fetch_row($result1);
                                    $revenue = $value[4] + $revenue;
                                    }
                                }
                            }
                           
                            ?>
                                    <h2 class="color-white"><?php echo "$".$revenue; ?></h2>
                                    <a href="revenue_month.php"> <h2 class="color-white">Llogaria</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-id-badge f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                 
                                    <h2 class="color-white"><?php
                            $query = "select COUNT(*) from users";

                            $result = mysqli_query($con, $query);
                            $i      = 1;
                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?></h2>
                                     <a href="table_view.php"><h2 class="color-white">Antarët Total</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-crown f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    

                            <h2 class="color-white"><?php
                            date_default_timezone_set("Europe/Lisbon"); 
                            $date  = date('Y-m');
                            $query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

                            //echo $query;
                            $result = mysqli_query($con, $query);
                            $i      = 1;
                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?></h2>
                                    <a href="over_members_month.php"><h2 class="color-white">Antarët e rinj</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-notepad f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                  
                                    <h2 class="color-white"><?php
                            $query = "select COUNT(*) from plan where active='yes'";

                            
                            $result  = mysqli_query($con, $query);
                            $i = 1;
                            if (mysqli_affected_rows($con) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?></h2>
                                    <a href="view_plan.php"><h2 class="color-white">Planet Gjithsej</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div id="barchart_material" style="width: 900px; height: 500px"></div>

                     <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
          <th>Nr</th>
          <th>Skadimi Antarsimit</th>
          <th>ID Antarsimit</th>
          <th>Emri</th>
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
        </div>
            
