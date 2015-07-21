<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html data-savefrom-tab-data="{&quot;module&quot;:&quot;lm&quot;,&quot;tooltip&quot;:&quot;Links found: 0&quot;}" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title><?php
			include ('adm/db_connect.php');
			$result=mysql_query( "SELECT * FROM all_rights_reserved" );
			while ($row=mysql_fetch_array($result))
				{
					echo $row['details'];
					}
            ?></title>
<link href="include/style.css" rel="stylesheet" type="text/css">

<body data-savefrom-link-count="13">
    
    <div class="page">
    <div class="header">
            <div class="title">
                <h1>
                  <?php
			include ('adm/db_connect.php');
			
			$result=mysql_query( "SELECT * FROM heading" );
			while ($row=mysql_fetch_array($result))
				{
					echo $row['heading'];
					}
            ?>
            </h1>
               
            </div>
            <div class="loginDisplay">&quot;Quality Education&quot;</div>
            <div class="clear hideSkiplink">
                <a href="#NavigationMenu_SkipLink"><img alt="Skip Navigation Links" src="include/WebResource.gif" style="border-width:0px;" height="0" width="0"></a><div style="float: left;" class="menu" id="NavigationMenu">
                	<ul role="menubar" style="position: relative; width: auto; float: left;" tabindex="0" class="level1 static">
                		<li style="position: relative; float: left;" class="static" role="menuitem"><a tabindex="-1" class="level1 static" href="index.php">Home</a></li>
                		<li style="position: relative; float: left;" role="menuitem" aria-haspopup="NavigationMenu:submenu:3" class="has-popup static"><a tabindex="-1" class="popout level1 static" href="services.php">Services</a>
                		  </li>
                		<li style="position: relative; float: left;" class="static" role="menuitem"><a tabindex="-1" class="level1 static" href="contactus.php">Contact us</a></li>
                		<li style="position: relative; float: left;" class="static" role="menuitem"><a tabindex="-1" class="level1 static" href="portal.php">Portal</a></li>
                	</ul>
                </div><div style="clear: left;"></div><a id="NavigationMenu_SkipLink">
                </a>
            </div>
</div>
      <table width="100%">
  <tr>
    <th width="80%" height="232" scope="col"><div class="banner:active"><img src="images/sarah3.jpg" alt="" width="712" height="186" class="banner" /></div></th>
    <th width="20%" scope="col"><div class="banner2">
      <h2>News &amp; Events</h2>
      <div>
        <p><a href="http://www.google.com/"><strong>Students Activities</strong></a><br />
- on 22nd Dec, 2013<br />
<a href="http://www.google.com/"><strong>Teachers Meeting</strong></a><br />
- on 13th Nov, 2013<br />
<a href="http://www.google.com/"><strong>Sports</strong></a><br />
          - Coming soon</p>
      </div>
    </div>&nbsp;</th>
  </tr>
</table>
<table width="100%">
  <tr>
    <th width="66%" scope="col"><div class="main">
      
      <h2>Welcome to Chianda Admission Online . . .</h2>
      <p>Chianda Online was started a long time ago with the intension of starting a customer centred system,</p>
      <p>Over the years the chianda Online has grown from a shy small system to an efficient system which keeps the with presence in all the counties, like . . .</p>
      <ul>
        <li>Bungoma</li>
        <li>Kisumu</li>
        Migori
      </ul>
          We have been blessed with our students trust.</div>&nbsp;</th>
    <th width="22%" scope="col" bgcolor=""><div><img src="images/sarah4.jpg" width="365" height="188" />&nbsp;</div></th>
  </tr>
</table>

        
        
        <div class="footer">
          <div align="left">
            <div class="clear"></div>
            <div class="footer"><?php
      			include ('adm/db_connect.php');
      			
      			$result=mysql_query( "SELECT * FROM all_rights_reserved" );
      			while ($row=mysql_fetch_array($result))
      				{
      					echo $row['details'];
      					}
                  ?>
            </div>
          </div>
      </div>

    </div>
    
    
</body></html>