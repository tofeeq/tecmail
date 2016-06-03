<?php
namespace Tecnotch;

class Config {

	const SMTP_HOST = 'smtp.gmail.com'; //provide your smtp host here 
	const SMTP_PORT = 465;		//provide smtp port
	//const SMTP_PORT = 587;

	const SMTP_USER = 'your gmail id'; //provide your smpt username
 	const SMTP_PASS = 'your gmail password'; //provide your smtp password

 	const SMTP_MAILER = 'swiftmailer';  //configure smtp backend 

 	//or you can use phpmailer as below
 	//const SMTP_MAILER = 'phpmailer';
}
