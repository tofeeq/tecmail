# Tecmail
This is most easiest way to send html template based emails using either by simple mail function or using smtp (swiftmailer or phpmailer etc)

Tecmail is php library created for sending emails with an ease using html templates and placeholders:

 * You can create html templates and placeholders to send email
 * Supports attachments
 * You can choose to send email by core php mail function or smtp
 * For smtp it has PHPMailer and SwiftMailer as backend, you can choose any of these by simple config option, default is SwiftMailer


It is very easy to use, just create a mailer object and start sending emails.

Create mailer which uses core php mail() function
```php
$mailer = \Tecnotch\Factory::mailer('simple');
```

Create SMTP mailer
```php
$mailer = \Tecnotch\Factory::mailer('smtp');
```

# Examples


Sending a template based html email using core mail() function of php 

```php
*$mailer = \Tecnotch\Factory::mailer('simple');
 
$mailer
	->setTo(array("tofeeq3@gmail.com" => "Tofeeq Rehman", "tof33q@gmail.com" => "Tof33q"))
	->setCc(array("testing.tofeeq@gmail.com" => "Tofeeq Testing", "developer.tofeeq@gmail.com" => "Dev Tofeeq"))
	->setFrom(array("info@tecnotch.com" => "Tecnotch"))
	->setSubject("Simple Email")
	->setBody("This is simple email without template using simple mail function ")
	->send();
```



