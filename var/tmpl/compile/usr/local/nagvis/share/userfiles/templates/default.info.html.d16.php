<?php
ob_start(); /* template body */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title><?php echo $this->scope["pageTitle"];?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->scope["htmlTemplates"];?>default.css" />
        <link rel="shortcut icon" href="<?php echo $this->scope["htmlBase"];?>/frontend/nagvis-js/images/internal/favicon.png" />
    </head>
    <body class="main">
        <div class="infopage">
            <h2>Support Information</h2>
            <table class="instinfo">
                <tr><th colspan="2">Version Information</th></tr>
                <tr><td>NagVis Version</td><td><?php echo $this->scope["nagvisVersion"];?></td></tr>
                <tr><td>PHP Version</td><td><?php echo $this->scope["phpVersion"];?></td></tr>
                <tr><td>MySQL Version</td><td><?php echo $this->scope["mysqlVersion"];?></td></tr>
                <tr><td>OS</td><td><?php echo $this->scope["os"];?></td></tr>
                <tr><th colspan="2">Webserver Information</th></tr>
                <tr><td>SERVER_SOFTWARE</td><td><?php echo $this->scope["serverSoftware"];?></td></tr>
                <tr><td>SCRIPT_FILENAME</td><td><?php echo $this->scope["scriptFilename"];?></td></tr>
                <tr><td>SCRIPT_NAME</td><td><?php echo $this->scope["scriptName"];?></td></tr>
                <tr><td>REQUEST_TIME</td><td><?php echo $this->scope["requestTime"];?></td></tr>
                <tr><th colspan="2">PHP Information</th></tr>
                <tr><td>error_reporting</td><td><?php echo $this->scope["phpErrorReporting"];?></td></tr>
                <tr><td>safe_mode</td><td><?php echo $this->scope["phpSafeMode"];?></td></tr>
                <tr><td>max_execution_time</td><td><?php echo $this->scope["phpMaxExecTime"];?> seconds</td></tr>
                <tr><td>memory_limit</td><td><?php echo $this->scope["phpMemoryLimit"];?></td></tr>
                <tr><td>loaded modules</td><td><?php echo $this->scope["phpLoadedExtensions"];?></td></tr>
                <tr><td>json_encode</td><td><?php echo $this->scope["compatJsonEncode"];?></td></tr>
                <tr><td>json_decode</td><td><?php echo $this->scope["compatJsonDecode"];?></td></tr>
                <tr><th colspan="2">Client Information</th></tr>
                <tr><td>USER_AGENT</td><td><?php echo $this->scope["userAgent"];?></td></tr>
                <tr><th colspan="2">Logon Information</th></tr>
                <tr><td>Logon Module</td><td><?php echo $this->scope["logonModule"];?></td></tr>
                <tr><td>Auth Module</td><td><?php echo $this->scope["authModule"];?></td></tr>
                <tr><td>Authorization Module</td><td><?php echo $this->scope["authorisationModule"];?></td></tr>
                <tr><td>Logon Var</td><td><?php echo $this->scope["logonEnvVar"];?></td></tr>
                <tr><td><?php echo $this->scope["logonEnvVar"];?></td><td><?php echo $this->scope["logonEnvVal"];?></td></tr>
                <tr><td>Logon Create User?</td><td><?php echo $this->scope["logonEnvCreateUser"];?></td></tr>
                <tr><td>Logon Create User Role?</td><td><?php echo $this->scope["logonEnvCreateRole"];?></td></tr>
                <tr><th colspan="2">Current User Information</th></tr>
                <tr><td>User Logged In</td><td><?php echo $this->scope["loggedIn"];?></td></tr>
                <tr><td>User Auth Module</td><td><?php echo $this->scope["userAuthModule"];?></td></tr>
                <tr><td>User Logon Module</td><td><?php echo $this->scope["userLogonModule"];?></td></tr>
                <tr><td>User Trusted Auth</td><td><?php echo $this->scope["userAuthTrusted"];?></td></tr>
                <tr><td>User Roles</td><td><?php echo $this->scope["userRoles"];?></td></tr>
                <tr><td>User Permissions</td><td><?php echo $this->scope["userPerms"];?></td></tr>
            </table>
        </div>
    </body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>