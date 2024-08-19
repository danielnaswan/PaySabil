<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*****************************************************************************************
Class name 		: LDAP 
Author			: rais
Company			: UPA Online, PTM, UTHM
Website			: http://www.uthm.edu.my
Modified by 	: maini
Date			: 22-Sep-08
Last Modified 	: 26-Sep-08
CI DIR			: system/application/libraries/
*****************************************************************************************/

class Ldap 
{
	function ldap()
	{
		$this->binddn 	= "dc=uthm,dc=edu,dc=my";
		$this->base		= "DC=uthm,DC=edu,DC=my";
		$this->host		= "ldap.uthm.edu.my";
	}
	
	//boolean
	function connect()
	{
		$conn = ldap_connect($this->host) 
				or die("Could not connect to server. " . ldap_error($conn));  
		return $conn;
	}
	
	function bind($conn,$user,$pswd,$levl)
	{
		//$this->binddn = "uid=$user,ou=siswa,dc=uthm,dc=edu,dc=my";//utk student
		//$this->binddn = "uid=$user,ou=staff,dc=uthm,dc=edu,dc=my";
		$this->binddn 	= "uid=$user,ou=$levl," . $this->binddn;		
		$ldapbind       = @ldap_bind($conn, $this->binddn, $pswd);
		                  //or die("Can't bind to server.");
		return $ldapbind;
	}
	
	function search($conn,$user)
	{
		$ldapSearch 	= ldap_search($conn, $this->base, "(uid=$user)");
		$ldapResults 	= ldap_get_entries($conn, $ldapSearch);
		return $ldapResults;
	}
	
	function results($result)
	{
		if($result['count']==0)
		{
			return NULL;
		}
		else
		{
			for ($item = 0; $item < $result['count']; $item++)
			{
				for ($attribute = 0; $attribute < $result[$item]['count']; $attribute++)
				{
					$data = $result[$item][$attribute];
					echo '<strong>'.$data.'</strong> : '.$result[$item][$data][0]."<br>";
				}
			}	
		}
	}
	
	function fields($result,$atr)
	{
		if($result['count']==0)
		{
			return NULL;
		}
		else
		{
			return $result[0][$atr][0];
		}
	}
}
?>