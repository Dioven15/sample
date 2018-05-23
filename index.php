<?php
// $Header$

/**
 * @package phpLDAPadmin
 */
/* Prevent XSS input */
//$_GET   = filter_input_array(ldap_escape(INPUT_GET,null,LDAP_ESCAPE_FILTER), FILTER_SANITIZE_STRING);
//$_POST  = filter_input_array(ldap_escape(INPUT_POST,null,LDAP_ESCAPE_FILTER), FILTER_SANITIZE_STRING);

/* I prefer not to use $_REQUEST...but for those who do: */
//$_REQUEST = (array)$_POST + (array)$_GET + (array)$_REQUEST;

# You should secure your PLA by making the htdocs/ your docroot.
header('Location: htdocs/index.php');
die();
?>
