---
<h1>Signal 100 Roleplay Read ME</h1>
---
This website has been created by DAG. If you have any questions comments or concerns in regards to the site PM him via GitHub (Unless Directed Otherwise). Use of this website is under the <a hreff="https://www.gnu.org/licenses/gpl-3.0.en.html">GPL</a>. All credit must go to all contributors which will be included within the credit location (TBA Later). This website is the intellectual property (IP) of the Owner/developer of the code used within the application. This site has been created for Signal 100 Roleplay and will remain theirs. 

---
<h2> Setting Up the space</h2>

---
<ul>
	**One of these software is Required**
	<li><a href="https://www.apachefriends.org/index.html">XAMPP</a></li> <----- I USE THIS
	<li><a href="https://www.mamp.info/en/">MAMP/MAMP PRO</a></li>
	<li><a href="http://www.wampserver.com/en/">WAMP</a></li>
	<li><a href="http://www.ampps.com/tour">AMPPS</a></li>
	<li><a href="http://www.easyphp.org/">EasyPHP</a></li>
	<li><a href="https://sourceforge.net/projects/wnmp-env/">WNMP</a></li>
</ul>

You can use any one of the programs listed above. I personaly perfer XAMPP

---
<h2> Setting up the application</h2>

---
<ol>
	<li>First Download the Files of the Application</li>
	<li>Now Unzip it in to the software file you downloaded --> htdocs --> place the signal100 foler here</li>
		<ul>
			<li>Your folder path should look like this now:  XAMPP --> htdocs --> Signal100</li>
		</ul>
	<li>Locate the includes folder and find db.php</li>
		
				`
					<?php
						/////////////////////////////////////////////////////////////////////////////
						////					PHP DATABASE CONFIGURATIONAS					////
						////				USE THIS TO PUT YOU DATA BASE DETAILS 				////
						////				  THIS USES THE MYSQLI CONFIGUATIONS 				////
						////////////////////////////////////////////////////////////////////////////
							
							$host		= "127.0.0.1";
							$username	= "root";
							$password	= "";
							$database   = "s100"; 	
						/////////////////////////////////////////////////////////////////////////////
						////					PHP DATABASE CONFIGURATIONAS					////
						////				USE THIS TO PUT YOU DATA BASE DETAILS 				////
						////				  THIS USES THE MYSQLI CONFIGUATIONS 				////
						////////////////////////////////////////////////////////////////////////////
							$connection = mysqli_connect($host, $username, $password, $database);
							if(!$connection) {
							  die("Connection Failed: " . mysqli_connect_error());
							} 
					?>
				`
<li>You will only need to worry about step 3 if you do not have the .sql file</li>
<li><a href="localhost/phpmyadmin">Go Here</a> Click import and import the .sql file</li>
<li><a href="localhost/signal00">Go Here</a></li>
</ol>

Additional note.... If you get Site cant be reached and your software is not running then you must turn on the sofware that you downloaded 

IE. windows key XAMPP Control Panal and run it

Note on testing registration. Email does not send yet as of update 1.1vB to get you verifiecation code go into the database and copy the user_verification code.