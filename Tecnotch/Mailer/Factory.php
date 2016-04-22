<?php
namespace Tecnotch\Mailer;

class Factory {

	public static function smtp() 
	{
		switch (\Tecnotch\Config::SMTP_MAILER) {
			case 'phpmailer':
				return new Smtp\PhpMailer();
				break;
			
			default:
				return new Smtp\Swift();
				break;
		}
		
	}
}
