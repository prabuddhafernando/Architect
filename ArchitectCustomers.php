<?php
require_once './db/dbConnection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Architect</title>
<link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
<link rel="stylesheet" type="text/css" href="profcss/style_theme.css">
<link rel="stylesheet" type="text/css" href="profcss/style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profcss/opensans.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body bgcolor="grey" class="theme-15">

<!--Navbar-->
<div class="top">
	<ul class="navbar theme-d2 left-align large">

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Architect</a></li>
		
	</ul>
</div>

<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
            <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
            <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="activeEdit" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>


        <div style="margin-left:18%;padding:1px 16px;height:1000px;">
            <h2><center>Customers</center></h2><br><br>
                <div id="saltbl" style="text-align: center ;  overflow: scroll ; height: 60vh;width: 200px;">
                    <ul style="list-style: none">
                    
                            <?php
                                $sql = "SELECT * FROM customer;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<li><a id="editItem" href="ArchitectCustomers1.php?id=' . $row["id"] . '">' . $row["fname"] . '</a></li><br>';
                                    }
                                }
                            ?>
                    
                    </ul>                      
                </div>
        
                <div style="margin-left: 300px;margin-top: -400px;">
                    <form>
               <!--Right Column-->
                    <div class="row">
                        <div class="col m12">
			     <!--Profile-->
			    <div class="card-2 round white">
                                <div class="col m4">
				    <div class="container">
					<h4>Profile</h4>
					<p><img src="profcss/prof.jpg" class="circle" style="height:106px;width:106px" alt="Profile"></p>
                                    </div>
				</div>
			    </div>
			    <br><br>
                        <div class="col m8">        
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
                                First name:<br>
                                <input type="text" size="15" name="firstname" value="" disabled>
                                </div>
                            <div style="display:inline-block;">
                                Middle name:<br>
                                <input type="text" size="15" name="middlename" value="" disabled>
                            </div>
                            <div style="display:inline-block;">
                                Last name:<br>
                                <input type="text" size="15" name="lastname" value="" disabled>
                            </div>
                        </div>  
                        <br>
                        <div style="text-align: left;">
                            <div style="display:inline-block;">
                                Age:<br><input type="text" name="age" size="4" value="" disabled>
                            </div>
                            <div style="display:inline-block;">
                                NIC:<br><input type="text" name="nic" size="15" value=" " disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                    <div class="col m4">
                        <br><br><br>
                        Address:<br>
                        <div style=" padding-left: 2em;">
                        No:
                        <br>
                        <input type="text" size="10" name="no" value="" disabled>
                        <br>
                        Street:
                        <br>
                        <input type="text" name="street" value="" disabled>
                        <br>
                        City:
                        <br>
                        <input type="text" name="city" value="" disabled>
                        </div>
                    </div>
                    <div class="col m8">
                            <br><br><br>
                            Email:<br>
                            <div style="text-align: left;">
                                <input type="text" name="email" size="35" value="" disabled>
                                <br><br>
                            </div>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
                                    Mobile No:
                                    <br>
                                    <input type="text" name="mobile" size="10" value="" disabled>
                                </div>
                                <div style="display:inline-block;">
                                    Land No:
                                    <br>
                                    <input type="text" name="land" size="10" value="" disabled>
                                </div>
                            </div>
                            Account created date:<br>
                            <div style="text-align: left;">
                                <input type="date" name="created" value=" " disabled>
                            </div>
                    </div>
                </div>
            </div><br><br>
             <div class="accordion white">
					<div class="dropdown">
					
						
	   					<button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button" data-toggle="dropdown"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Projects
	    				<span class="caret"></span></button>
	    				<ul class="dropdown-menu">
	      				<li><a href="ArchitectCustomers3.php">Project 1</a></li>
	      				<li><a href="ArchitectCustomers3.php">Project 2</a></li>
	      				<li><a href="ArchitectCustomers3.php">Project 3</a></li>
	    				</ul>
	  					</div>
					</div>
				<br><br>   
            </form>
            </div>
            </div>
    <?php mysqli_close($conn); ?>
    </body>
</html> 