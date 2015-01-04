<?php require_once('auth/user.php'); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><!-- InstanceBegin template="Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- Get me some jquery-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/js/iijslib.js" type="text/javascript"></script>
<script src="/js/cupidjslib.js" type="text/javascript"></script>

<!--Record auth level-->
<script type="text/javascript">
var sessiondata = {}
sessiondata.username = "<?php if (!empty($_SESSION['user']['name'])) { echo $_SESSION['user']['name'];} ?>";
sessiondata.sessionid = "<?php if (!empty($_SESSION['user']['sessionid'])) {echo $_SESSION['user']['sessionid'];} ?>";
sessiondata.appip =  "<?php if (!empty($_SESSION['user']['appip'])) {echo $_SESSION['user']['appip'];} ?>";
sessiondata.realip =  "<?php if (!empty($_SESSION['user']['realip'])) {echo $_SESSION['user']['realip'];} ?>";
sessiondata.authlevel =  "<?php if (!empty($_SESSION['user']['authlevel'])) {echo $_SESSION['user']['authlevel'];} ?>";

// <!--Log access-->
logUserAuths(sessiondata)
</script>

<!-- InstanceBeginEditable name="doctitle" -->
<title>CuPID Home</title>
<!-- InstanceEndEditable -->
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<style media="all" type="text/css">
@import "css/all.css";
</style>
<!-- InstanceBeginEditable name="head" -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48449692-4', 'auto');
      ga('send', 'pageview');
    </script>
<!-- InstanceEndEditable -->\
</head>
<body>
<div id="main">
<!-- InstanceBeginEditable name="NavBar" -->
  <div id="header"> <a href="http://www.interfaceinnovations.org" class="logo"><img src="images/cmstemplate/logo.png"alt="" /></a> 
    <ul id="top-navigation">
      <li class="active"><span><span>Home</span></span></li>
      <li><span><span><a href="controlpanel.html">Panel</a></span></span></li>
      <li><span><span><a href="smallpanel.html">SmPanel</a></span></span></li>
      <li><span><span><a href="inputs.html">Sensors</a></span></span></li>
      <li><span><span><a href="datalogs.html">Datalogs</a></span></span></li>
      <li><span><span><a href="settings.html">Settings</a></span></span></li>
      <li><span><span><a href="admin.html">Admin</a></span></span></li>
      <li><span><span><a href="help.html">Help</a></span></span></li>
    </ul>
  	<div id="login"><?php 
    	if($user->logged_in()): 
		?> 
        	<p>You are logged in as <?php echo $_SESSION['user']['name']; ?>. <a href="auth/logout">Log out</a></p> 
        	<?php 
		endif; 
    	if(!$user->logged_in()): 
		?> 
        	<p>You are not logged in. <a href="auth/login">Log in</a> 
		<?php 
    		endif; 
		?> 
  	</div><!-- login -->
  </div><!-- header -->
  <!-- InstanceEndEditable -->
  <!-- InstanceBeginEditable name="MainBody" -->
  
<div id="middle">
    <div id="center-column">
      <div class="top-bar"> 
        <h1>CuPID Controls :: Love at First Pi</h1>
        <div class="breadcrumbs"><a href="http://www.free-css.com/">Welcome to your control home</a></div>
      </div> <!-- top-bar -->
      <br />
      
      <br />
      <br />
      <div class="content">
      	<h2>Welcome to the Cupid Control Base on Pi</h2>
        <p>What you see here is being served by an Apache webserver running on a pint-sized, $35 computer running Debian linux. Check out the links at right and the Help tab for reference on the features of the device and how to use it. Also check out the <a href="mobile/index.html">Mobile Version</a> for your handheld or fluffy GUI viewing pleasure.</p>
        <h2>Users and Authentication</h2>
        <p>Users, access control, and sessions are controlled by a nice little piece of php and a sqlite database. Out of the box, there are three levels of access (technically four, if you include guest access): <strong>Viewer</strong>, <strong>Controller</strong>, and <strong>Administrator</strong>. Viewer is capable of monitoring process variables. Controller is able to change process variables and many settings. Administrator has full control, including modification of recipes and profiles.</p>
        <p>To view the control, panel and settings tabs,<strong> login as 'viewer' with password 'viewer'</strong> by clicking 'login' at the upper right. You won't be able to change anything, but you'll get the idea.</p>
        <p>We also keep track of active user sessions. You can limit the number of sessions per user, and we suppose you could even control where they logged in from. </p>
        <h2>Where is your data?</h2>
        <p>Your data lives in a <a href="http://www.sqlite.org/">Sqlite</a> database on an SDCard on your Fermostat/CuPID Control. Sqlite is a very popular, lightweight binary database program that stores your data in neat little files and is easy on your system resources. It responds to pretty ordinary SQL syntax. If you've ever used phpmyadmin for MySQL, than the phpliteadmin interface set up at <a href="http://thefermostat.com//data/phpliteadmin.php">/data/phpliteadmin.php</a> should be completely familiar to you. Dump it, sync it, whatever. give a data export a try over on the datalogs tab.. </p>
        <h2>View and Control Tabs:</h2>
        <div class="multibox"><h3>Home</h3>
<p>You are here. You can do whatever you want with this page. Advertise your site, a service. List instructions for use for visitors. Add a list of links. It's your canvas.</p>
</div>
<div class="multibox"><h3>Panel</h3>

<p>This is the main control panel, where you can monitor and control your Fermostat. Enable and disable outputs, channels, and view control and sensor read statuses and connectivity. View your channels on an attractive plot over the selected timeframe.</p>
</div>
<div class="multibox"><h3>SmPanel</h3>

<p>A specially formatted verion of your Control Panel designed for view on small screens with low resolution, such as the one on the front panel of a Cupid Control Fermostat. Or, you might just like the look of it. This is the screen you want when you mount your Fermostat to the wall above your fermenters so you can view it at a glance from afar.</p>
</div>
<div class="multibox"><h3>Sensors</h3>

<p>Here you view the sensors attached to your RPi, their measured temperatures, type, name alias, and control assignment. Sensor names are adjustable, so that your plots show you your sensors in a language that you understand. Connect your sensors, give them names. As many as you like. Thank you, 1wire network!</p>
</div>
<div class="multibox"><h3>Datalogs</h3>

<p>This page will give you a complete picture of what logs are still stored in the control database. This includes channels (control variables, setpoints, controller action, and more), as well as sensor data logs. You may view any of these as a tabular output in the page table, and we'll add a plot to this page soon enough.</p>
</div>

<div class="multibox"><h3>Settings</h3>
<p>Here you can control every aspect of your Cupid Control. Everything to what you call your outputs and what GPIO they're controlling to what control recipes are in the programs and what they are. Set PID parameters, deadband, and duty cycle parameters. Set system status and sensor poll times, and set output enable at system, channel, and output levels, just to be sure. In the future, set custom alarms and updates for your channels, sensors and other parameters (like when the system goes offline, which of course never happens)</p>
</div>

         <div class="multibox"><h3>Admin</h3>
<p>Control more complex settings here. All the nitty gritty. Add email addresses for notifications, customize user interface features, base control and operations of the pi itself. All sorts of things to divorce you from any need for - gasp - using a typical user interface, or - groan - a command line.</p>
        </div><!--multibox -->
	  </div> <!-- content -->
    </div> <!-- center column -->
    <div id="right-column"> 
      <h3 class="tall"><div style="width:100"><a href="mobile/index.html" style="color:#fff;">Mobile Site</a></div></h3>
      <br />
      <h3>Useful Links</h3>
      <ul class="nav">
        <li><a href="help.html">Online Help</a></li>
        <li><a href="http://www.interfaceinnovations.org/cupidcontrols.html">Cupid Controls</a></li>
        <li><a href="http://www.interfaceinnovations.org/">II Home Page</a></li>
        <li><a href="http://forums.interfaceinnovations.org">Cupid Controls Forum</a></li>
        <li class="last"><a href="http://www.interfaceinnovations.org/cupidcontrolsproducts.html">Controls Accessories</a></li>
      </ul>
      <br />
    <strong class="h">INFO</strong>
      <div class="box">See the <a href="help.html">Help</a> page to get up and running! It has basic connectivity and configuration information to get you started quickly.</div>
    </div><!--right column-->
</div><!--  middle -->
<!-- InstanceEndEditable -->
  <div id="footer"></div>
</div>
</body>
<!-- InstanceEnd --></html>
