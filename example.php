<?php
require_once 'Tecnotch/bootstrap.php';
use \Tecnotch;

/*$mailer = \Tecnotch\Factory::mailer('simple');

 
$mailer
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->setSubject("Simple Email")
	->setBody("This is simple email without template using simple mail function ")
	->send();
	
; 
 */


/*//with one attachment

 $mailer
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->addAttachment(__DIR__ . '/test.pdf', 'Test PDF', 'pdf')
	->setSubject("Email with one attachment sent using simple mail function ")
	->setBody("Please find attachment")
	->send();
	
;*/

//with multiple attachments
//delete previous email data
/*$mailer->reset();

$mailer
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->addAttachment(__DIR__ . '/test1.pdf', 'Test PDF 1', 'pdf')
	->addAttachment(__DIR__ . '/test2.pdf', 'Test PDF 2', 'pdf')
	->addAttachment(__DIR__ . '/test3.pdf', 'Test PDF 3', 'pdf')
	->setSubject("Email with multiple attachments sent using simple mail function ")
	->setBody("Please find attachments")
	->send();
;*/
 



/*//sending email based on template
//keep them in order as they are below
$placeholders = array(
	"[user_name]" => "John Doe"
);

$mailer
	->setPlaceholders($placeholders)
    ->setTemplatePath(__DIR__ . '/html/email/en')
    ->setTemplate("sample.html")
    ->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman"))
    ->setFrom(array("info@tecnotch.com" => "Tecnotch"))
    ->send();
 

*/

//sending mail using smptp 

$mailer = \Tecnotch\Factory::mailer('smtp');

$mailer
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->setSubject("Simple Email using smtp")
	->setBody("This is simple email without template using smtp ")
	->send();
	
; 


//with one attachment

$mailer->reset();

$mailer
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->setReplyTo(array("info@tecnotch.com" => "Tecnotch-Suport"))
	->addAttachment(__DIR__ . '/test.pdf', 'Test PDF', 'pdf')
	->setSubject("Email with one attachment sent using smtp ")
	->setBody("Please find attachment")
	->send();
	
; 
/*
//with multiple attachments
//detele attachments and other data from previous call
$mailer->reset();

$mailer
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->setReplyTo(array("info@tecnotch.com" => "Tecnotch-Suport"))
	->addAttachment(__DIR__ . '/test1.pdf', 'Test PDF 1', 'pdf')
	->addAttachment(__DIR__ . '/test2.pdf', 'Test PDF 2', 'pdf')
	->addAttachment(__DIR__ . '/test3.pdf', 'Test PDF 3', 'pdf')
	->setSubject("Email with multiple attachments sent using smtp")
	->setBody("Please find attachments")
	->send();
;*/
 

/*//sending email based on template using smtp
//keep them in order as they are below


$placeholders = array(
	"[user_name]" => "John Doe"
);

$mailer = \Tecnotch\Factory::mailer('smtp');

$mailer
	->setPlaceholders($placeholders)
    ->setTemplatePath(__DIR__ . '/html/email/en')
    ->setTemplate("sample.html")
    ->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman"))
    ->setFrom(array("info@tecnotch.com" => "Tecnotch"))
    ->send();*/




//Email with template and attachments
$placeholders = array(
	"[user_name]" => "John Doe"
);
$mailer = \Tecnotch\Factory::mailer('smtp');
$mailer
	->setPlaceholders($placeholders)
    ->setTemplatePath(__DIR__ . '/html/email/en')
    ->setTemplate("sample.html")
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->setReplyTo(array("info@tecnotch.com" => "Tecnotch-Suport"))
	->addAttachment(__DIR__ . '/test1.pdf', 'Test PDF 1', 'pdf')
	->addAttachment(__DIR__ . '/test2.pdf', 'Test PDF 2', 'pdf')
	->addAttachment(__DIR__ . '/test3.pdf', 'Test PDF 3', 'pdf')
	->send();
;    