---
#Signal 100 Roleplay Read ME
---
This website has been created by DAG. If you have any questions comments or concerns in regards to the site PM him via GitHub (Unless Directed Otherwise). Use of this website is under the <a hreff="https://www.gnu.org/licenses/gpl-3.0.en.html">GPL</a>. All credit must go to all contributors which will be included within the credit location (TBA Later). This website is the intellectual property (IP) of the Owner/developer of the code used within the application. This site has been created for Signal 100 Roleplay and will remain theirs. 

---
##Setting Up the space
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
##Setting up the application
---
<ol>
	<li>First Download the Files of the Application</li>
	<li>Now Unzip it in to the software file you downloaded --> htdocs --> place the signal100 foler here</li>
		<ul>
			<li>Your folder path should look like this now:  XAMPP --> htdocs --> Signal100</li>
		</ul>
	<li>Locate the includes folder and find db.php</li>
		<ul>
			<li>
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
			</li>
		</ul>
	<li></li>
</ol>