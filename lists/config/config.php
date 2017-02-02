<?php
$default_system_language = "pt_BR";
$database_host = 'localhost';
$database_name = 'local_phplist';
$database_user = 'root';
$database_password = '';

$pageroot = '/emmsrv/lists';

define('EMAILTEXTCREDITS', 1);
define('PAGETEXTCREDITS', 1);
define('NOSTATSCOLLECTION', 1);
define('SEND_ONE_TESTMAIL', 1);
define('CLICKTRACK', 1);

define ("TEST",0);

define('PHPMAILERHOST', '');
#define('PHPMAILERHOST','smtp.sendgrid.net');
#define('PHPMAILERPORT',465);
#define("PHPMAILER_SECURE",'ssl');
#$phpmailer_smtpuser = 'apikey';
#$phpmailer_smtppassword = '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';

$message_envelope = 'ola@grupombmidia.com.br';

##	define("PHPMAILERHOST",'smtp.mydomain.com');
##	define ("MANUALLY_PROCESS_BOUNCES",0);
##	define ("MANUALLY_PROCESS_QUEUE",0);

define('MANUALLY_PROCESS_BOUNCES', 1);
define('DEFAULT_MESSAGEAGE', 15768000);

$bounce_protocol = 'pop';

$bounce_mailbox_host = 'mail.grupombmidia.com.br';
$bounce_mailbox_user = 'ola@grupombmidia.com.br';
$bounce_mailbox_password = 'Gsuper10';
$bounce_mailbox_port = '110/pop3/notls';
$bounce_mailbox = '/var/mail/listbounces';
$bounce_mailbox_purge = 1;
$bounce_mailbox_purge_unprocessed = 1;
$bounce_unsubscribe_threshold = 5;

define('ENCRYPTION_ALGO', 'sha256');


