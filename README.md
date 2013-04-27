MDD
===

Mobile Device Deployment 04/2013

Class Start



04/16/2013
OK so a ton of work has been done so far.
CakePHP installed

All files written and uploaded to dummy server.

Currently working on Facebook login api integration.

dummy site is up at http://mdd.simplydone.org

admin access will allow you more control including creating more admins
for admin access login with

user:   admin
pass:   admin


for regular user access just create a new user!

next update will have facebook login working then after that
I will begin the jquery mobile conversion.


04/18/2013
Facebook Login is now properly functioning.
next update will be facebook share
As their is no real profile info, I am currently not coding an edit profile section.

Due to the setup of the facebook API you will have to test it out on the dummy server as 
it will only work from there.   http://mdd.simplydone.org
feel free to login and post something!
currently only have dummy text up.
once final updates are made then I will begin the mobile layout

04/27/2013

For those trying to install locally, 
- FB integration WILL NOT WORK without you setting up an api and changing quite a bit of the code as this has been setup for a real live environment.
- after you DL the files, point Mamp to where ever you have placed the file then to the Cake folder example: if its on your desktop like on mine it would be /Users/Jason/Desktop/MDD-master 2/Cake
- next open your SQL and create a database and upload SQL dump in folder root. Then update database settings in Cake/apps/config/database.php
- 


