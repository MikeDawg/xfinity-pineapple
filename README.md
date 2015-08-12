#Xfinity-Pineapple
Steal xfinity-comcast subscriber credentials.

- This is a weaponized version of the Comcast shared WiFi interface, to steal users Xfinity/Comcast account credentials.

###Setup:

    1. Read through the writeup for help http://blog.logrhythm.com/security/xfinity-pineapple/

    2. Depending on whether you would like to store the source code on your WiFi Pineapple or an internet-accessible server,
       these steps may vary.

    3. Change the name of your wireless access point's SSID to 'xfinitywifi'.

    4. There are two options for the phishing site. Regardless, the back-end functionality for both is the same.
		a. 'login-page-option1' - The full web HTML version of the landing page.
		b. 'login-page-option2' - The mobile version of the landing page.

    5. Navigate to one of these folders and copy the contents to a new web directory on the server / pineapple.

    6. Configure either DNSSpoof or the Evil Portal within the Pineapple to display the false Xfinity logon pages.
       Details included in the writeup.

    7. Enable the Pineapple's wireless access point.

    8. Wait, then check in on the auth.log file / tail it / configure alarms to monitor this file.

    9. Profit.
