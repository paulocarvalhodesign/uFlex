<?php	
	include("class.uFlex.php");
	
	$user = new uFlex(false);
	
	$user->db['host'] = "localhost";
	$user->db['user'] = "ptejada";
	$user->db['pass'] = "mspress#1";
	$user->db['name'] = "uflex_demo";
	
	$user->start();
	
	if(!$user->signed){
		$name = "123@live.com";
		$pass = 123;
		$user->login($name, $pass, true);
	}else{
		$user->logout();
	}
	
	
?>
<pre>

<?php
	//print_r($data);
	print_r($user->console);
	print_r($_SESSION);
?>
=========================================================================
<?php
	$newUser = clone $user;

	$newUser->login("pablo", 123);

	print_r($newUser->console);
	print_r($_SESSION);