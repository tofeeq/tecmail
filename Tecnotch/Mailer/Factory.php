<?php
namespace Tecnotch\Mailer;

class Factory {

	public static function smtp() 
	{
		switch (\Tecnotch\Config::SMTP_MAILER) {
			case 'phpmailer':
				echo "returning phpmailer"; die;
				return new Smtp\PhpMailer();
				break;
			
			default:
				echo "returning default swiftmailer"; die;
				return new Smtp\Swift();
				break;
		}
		
	}
}
