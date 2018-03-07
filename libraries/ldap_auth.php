<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
| Methods:
|    *  authenticate - authenticate user name and pass word
| 
| Usage:
|    load the library by calling:
|       $this->load->library('ldap_auth');
|    somewhere in your controller of your CodeIgniter app before trying to call these functions:
|       $this->ldap_auth->auth($user, $pass);
*/
class LDAP_auth{
            //takes username and password, returns:
            //true if user could bind to ldap server
            //false if not.
	   public function auth($username, $password)
           {
                $server = 'ldap.forumsys.com'; //using domain, If the DC is down DNS will route to another DC.
                $ldap_dn = "uid=".$username.",dc=example,dc=com";
                
                $ldap_con = ldap_connect($server);

                ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

                // Have to turn off errors or ldap_bind issues stack trace
                $bind = @ldap_bind($ldap_con,$ldap_dn,$password);

                //if we can bind we can grind.
                if ($bind){
                    return TRUE;
                    }
                else{
                    return FALSE;
                    }

	    }//END authenticate
   }//END ldap_auth.php