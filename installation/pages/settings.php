<?php
/**
 * 	OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence 
 * @link      http://www.opensource-socialnetwork.com/licence
 */
 
echo '<div><div class="layout-installation">';
echo '<h2>'.ossn_installation_print('site:settings').'</h2>';
?>
<form action="<?php echo ossn_installation_paths()->url;?>?action=install" method="post">

<div>
<label> Database Settings: </label>

<input type="text" name="dbuser" placeholder="Database User"/>
<input type="password" name="dbpwd" placeholder="Database Password"/>
<input type="text" name="dbname" placeholder="Database Name"/>
<input type="text" name="dbhost" placeholder="Database Host"/>
</div>

<div>

<label> Site Settings:  </label>

<input type="text" name="sitename" placeholder="Website Name"/>

<input type="text" name="owner_email" placeholder="Site Owner Email"/>
<input type="text" name="notification_email" placeholder="Notification Email (noreply@domain.com)"/>
</div>

<label> Main Settings: </label>
<br />
<div>
<label> Site Url </label>
<input type="text" name="url" value="<?php echo OssnInstallation::url();?>" />
</div>

<div>
<label> Data directory </label>
<input type="text" name="datadir" value="<?php echo OssnInstallation::DefaultDataDir();?>" />
</div>

<input type="submit" value="Install" class="button-blue primary">

</form>


</div>