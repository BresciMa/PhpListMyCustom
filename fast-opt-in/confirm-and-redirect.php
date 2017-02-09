<?php
include_once ("inc_config.php");
include_once ("inc_lib.php");
include_once ("inc_conexao.php");

$__trk  = getVar("trk");
$__redirect_url = "";

$sql = "SELECT email, list_id, entry_date,redirect_url,origem FROM mb_preconfirmacaoleads WHERE id_lead =  '$__trk';";
$result = mysqli_query($con, $sql);

if (!mysqli_connect_errno()) {

	if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		
		$__email 		= $row['email'];
		$__list_id 		= $row['list_id'];
		$__redirect_url = $row['redirect_url'];
		$__origem		= $row['origem'];

		$sql = "UPDATE mb_preconfirmacaoleads SET is_confirmed = 1, confirmed_date = now() WHERE id_lead =  '$__trk';";
		mysqli_query($con, $sql);
		
		//INSERIR O CARA NO PHPLIST
		$sql = "INSERT INTO phplist_user_user (email,confirmed,modified,entered,uniqid,htmlemail) VALUES ('$__email', 1,now(),now(),'FAST-$__trk',1);";
		mysqli_query($con, $sql);
		$newId = mysqli_insert_id($con);
	
		if ($newId == 0 || $newId == null){
			$sql = "SELECT id FROM phplist_user_user WHERE email =  '$__email';";
			$result = mysqli_query($con, $sql);
			
			if (!mysqli_connect_errno()) {
				if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$newId = $row['id'];
				}
			}
		}
		if ($newId > 0){
			$sql = "INSERT INTO phplist_listuser (userid, listid, entered, modified) VALUES ($newId, $__list_id, now(), now());";
			mysqli_query($con, $sql);
		}
	}
}

//MANDANDO PARA UMA PÁGINA PADRAO...
if($__redirect_url == ""){
	$__redirect_url = "http://marceloj.com/prosperidade";
}

header("Location: $__redirect_url");

?>