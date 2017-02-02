<?php
$default_system_language = "pt_BR";
$database_host = 'localhost';
$database_name = 'ecommer2_emmsrv';
$database_user = 'ecommer2_phplist';
$database_password = 'JGP^M&dLu&qa';

$pageroot = '/emmsrv/lists';


define('EMAILTEXTCREDITS', 1);
define('PAGETEXTCREDITS', 1);
define('NOSTATSCOLLECTION', 1);
define('PHPMAILERHOST', '');
define('SEND_ONE_TESTMAIL', 1);
define('CLICKTRACK', 1);

define ("TEST",0);
##	define("PHPMAILERHOST",'smtp.mydomain.com');
##	define ("MANUALLY_PROCESS_BOUNCES",0);
##	define ("MANUALLY_PROCESS_QUEUE",0);
define('MANUALLY_PROCESS_BOUNCES', 1);

define('DEFAULT_MESSAGEAGE', 15768000);

$bounce_protocol = 'pop';

$bounce_mailbox_host = 'localhost';
$bounce_mailbox_user = 'popuser';
$bounce_mailbox_password = 'password';
$bounce_mailbox_port = '110/pop3/notls';
$bounce_mailbox = '/var/mail/listbounces';
$bounce_mailbox_purge = 1;
$bounce_mailbox_purge_unprocessed = 1;
$bounce_unsubscribe_threshold = 5;

define('ENCRYPTION_ALGO', 'sha256');
