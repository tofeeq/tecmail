<?php
namespace Tecnotch;

class Config {

	const SMTP_HOST = 'smtp.gmail.com';
	const SMTP_PORT = 465;
	//const SMTP_PORT = 587;

	const SMTP_USER = 'your gmail id';
 	const SMTP_PASS = 'your gmail password';

 	const SMTP_MAILER = 'swiftmailer';

 	//or you can use phpmailer as below
 	//const SMTP_MAILER = 'phpmailer';
}
