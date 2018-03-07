# phpLdapCodeigniter

LDAP Auth for the CodeIgniter Framework for PHP This is a simple one file library for CodeIgniter so that application users can authenticate against a Microsoft LDAP server (or OpenLDAP). While this library does provide the ability to query user information from the LDAP server.

### Usage:
Load the library by calling:

```$this->load->library('ldap_auth');```

somewhere in your controller of your CodeIgniter app before trying to call these functions:

```$this->ldap_auth->auth($user, $pass,$server);```
