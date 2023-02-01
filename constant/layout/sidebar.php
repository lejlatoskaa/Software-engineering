 <?php 
 include('../constant/connect.php');
  

 ?>

 <!-- Left Sidebar  -->
        <div class="left-sidebar">
          
            <div class="scroll-sidebar">
              
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Hyrje</a>
                        </li> 
                        
                    
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Antarët</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="new_entry.php">Shto Antarët</a></li>
                                <li><a href="view_mem.php">Menaxho Antarët</a></li>
                            
                            </ul>
                        </li>
                         <li><a href="payments.php" aria-expanded="false"><i class="fa fa-dollar"></i><span class="hide-menu">Pagesat</span></a></li>
                        <li id="health_status"><a href="new_health_status.php"><i class="fa fa-heart"></i><span class="hide-menu">Statusi</span></a>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file-text-o"></i><span class="hide-menu">Planet</a>
                            <ul aria-expanded="false" class="collapse">
                                <a href="new_plan.php">Plan i ri</a></li>
                               <li><a href="view_plan.php">Ndrysho Planin</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-archive"></i><span class="hide-menu">Detajet</span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li>
                <a href="over_members_month.php">Antarët në muaj</a>
            </li>

            <li>
                <a href="over_members_year.php">Antarët në vit </a>
            </li>

            <li>
                <a href="revenue_month.php">Të ardhurat në muaj</a>
            </li>
                            </ul>
                        </li>

                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-wheelchair"></i><span class="hide-menu">Orari i Ushtrimeve</span></a>
                            <ul aria-expanded="false" class="collapse">
                               <li>
                <a href="addroutine.php">Shto Ushtrime</a>
            </li>

            <li>
                <a href="editroutine.php">Ndrysho Ushtrime</a>
            </li>

            <li>
                <a href="viewroutine.php">Shiko Ushtrime</a>
            </li>
                            </ul>
                        </li>
                        

                         <li><a href="profile.php" aria-expanded="false"><i class="fa fa-folder"></i><span class="hide-menu">Profili</span></a></li>

                </nav>
              
            </div>
           
        </div>
     
