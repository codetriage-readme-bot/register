<!-- _________________________This navbar will be shown when the user has logged in _________________________ -->

	<!-- Bootstrap drop down box-->
  <div class="container-fluid">
    		<ul class="nav nav-tabs navbar-right">
 
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle big-cog" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <!-- Font awseome cog--> 
      <i class="fa fa-cog " aria-hidden="true"></i> 
    </a>
    <ul class="dropdown-menu">
      
      <!-- Add extra dropdown items here  in format <li> <a href="#">Link Text</a></a></li>-->
      <li><a href="<?php 
                  //Change the destination of dashboard link depending on user type and whether signed in
                      //If user is admin destination is admin_dash.php
                      if($_SESSION['type'] == 'admin'){
                        echo 'admin_dash.php';
                      }
                      //If user has signed in destination is signed_in.php 
                      else if($_SESSION['in'] == 'true'){
                        echo 'signed_in.php';
                      }
                      //If user is not signed in destination is dashboard.php
                      else{
                        echo 'dashboard.php';
                      }
                  ?>">Dashboard</a> </li>

      <?php         //If the user is not admin add meeting.php to dropdown.php
                    if($_SESSION['type'] != 'admin'){
                        echo ' <li><a href="meeting.php">Meetings</a> </li>';
                        echo ' <li><a href="car_request.php">Vehicles</a> </li>';
                      }?>     
    	<li><a href="settings.php">Account Settings</a> </li>
      <li role="separator" class="divider"></li>
      <li><a href="logout.php">Logout</a> </li>

    </ul>
  </li>
 
</ul>
  		</div> <!-- nav bar container fluid-->
	</nav> <!-- nav bar -->