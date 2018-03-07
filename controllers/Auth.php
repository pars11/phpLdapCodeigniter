<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


//EXAMPLE

class Auth extends CI_Controller 
{
	
	public function login()
	{

		//LDAP ONLINE TEST SERVER : https://www.forumsys.com/tutorials/integration-how-to/ldap/online-ldap-test-server/
		$username = 'riemann';
		$password = 'password';
		$server = 'ldap.forumsys.com';

		$this->load->library('ldap_auth');

		// check the login
		if($this->ldap_auth->auth($username, $password,$server))
		{
			echo 'Başarılı giriş';
			// user identity verified
		}
		else
		{
			echo 'Başarısız giriş';
			// user could not be authenticated, whoops.
		}
	}
	
}