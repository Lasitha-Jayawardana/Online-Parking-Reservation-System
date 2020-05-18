# Online-Parking-Reservation-System
Web Based Parking Reservation System.

## Guid Lines

	1. Setup your Database using "parking.sql" file.
	
	2. Set Database details in "PHP.php" file.
	
    	$username = "<db username>", //Db username
	  	$password = "<db password>", //Db password
    	$db = "<db name>", $err; //Db name
  
	3. You can setup a cron job using "cron.php" file.
  
		Enter your email here in cron.php file.
		$headers .= 'From: <Email>' . "\r\n";  //Email, shown as From       
			
	
			
## Tips
You can test the system using "Demo.php" as a parking sensor. If you set up a cron job, the customer can receive the email when the reservation has expired.
