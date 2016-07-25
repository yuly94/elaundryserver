<?php 
/**
 * Configuration page
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */

//Basic Settings
$GLOBALS['ep_base_url'] = "/authscript/"; //Base URL Ex: http://www.yourdomain.com/authscript/
//Dynamic URL changs as per seourl set value (Its Same)
$GLOBALS['ep_dynamic_url'] = "/authscript/"; //Dynamic URL Ex: http://www.yourdomain.com/authscript/
$GLOBALS['seourl'] = "false"; //Set true if your server supports .htaccess, else if your developing in local environment set it false. 
$GLOBALS['ep_first_page'] = "login"; //Default landing page 
$GLOBALS['website_name'] = "Tutbuzz"; //Default landing page 

//Database Settings
$GLOBALS['ep_hostname'] = "localhost"; //Database Hostname
$GLOBALS['ep_username'] = "root"; //Database Username
$GLOBALS['ep_password'] = "rahasia"; //Database Password
$GLOBALS['ep_database'] = "auth"; //Database Name

//Mailer Settings (In case if you integrate email library)
$GLOBALS['ep_smpt_server'] = "smtp.gmail.com"; //SMPT Server Name Ex: smtp.gmail.com for Gmail
$GLOBALS['ep_smpt_port'] = "465"; //SMPT Port
$GLOBALS['ep_smpt_username'] = "wachid.sst@gmail.com"; //SMPT Username
$GLOBALS['ep_smpt_password'] = "gmail@password"; //SMPT Password
$GLOBALS['SMTPSecure'] = "tls"; //SMPT Secure
$GLOBALS['Mailer'] = "smtp"; //SMPT Secure
 
//Comman Views
$GLOBALS['ep_header'] = "header.php"; //Header Template
$GLOBALS['ep_footer'] = "footer.php"; // Footer Template

