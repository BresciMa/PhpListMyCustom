<?php
include_once ("inc_config.php");
include_once ("inc_lib.php");
include_once ("inc_conexao.php");

$_email 	= getVar("email");
$_finalentranceurl = getVar("finalentranceurl");
$_redirect	= getVar("redirect");
$_list		= getVar("list");
$_origem	= getVar("origem");
//http://marceloj.com/confirmacao-email/

$sql = "INSERT INTO mb_preconfirmacaoleads (email, entry_date,redirect_url,origem, list_id) VALUES ('$_email', now(), '$_finalentranceurl','$_origem',$_list);";

mysqli_query($con, $sql);
$newId = mysqli_insert_id($con);

if ($newId == 0 || $newId == null){
	$sql = "SELECT id_lead FROM mb_preconfirmacaoleads WHERE email =  '$_email' and redirect_url = '$_finalentranceurl';";
	$result = mysqli_query($con, $sql);
	
	if (!mysqli_connect_errno()) {

		if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$newId = $row['id_lead'];
		}
	}
}

$final_link = $__host . "/emmsrv/fast-opt-in/confirm-and-redirect.php?trk=$newId";

$emailMensagem = file_get_contents('email_template.html', FILE_USE_INCLUDE_PATH);
$emailMensagem = str_replace('*|link|*', $final_link, $emailMensagem);

$headers = 'Content-type: text/html; charset=iso-8859-1' .  "\r\n" .
	'From:Marcelo J Bresciani<marcelo@grupombmidia.com.br>' . "\r\n" . 
	'Return-Path: marcelo@grupombmidia.com.br' . '\r\n'.
	'X-Mailer: PHP/' . phpversion();

$resultado = mail($_email, "Aqui esta o seu conteudo para baixar", $emailMensagem, $headers, '-f'. 'ola@grupombmidia.com.br');

header("Location: $_redirect");