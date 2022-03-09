<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //   将contact@example.com 替换为您的真实接收电子邮件地址
  $receiving_email_address = 'huanggaoshuang@qq.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  //  如果您想使用 SMTP 发送电子邮件，请取消注释下面的代码。您需要输入正确的 SMTP 凭据 kltfsxrfsfmmbhhc  rgydgbtwgbjpbhdj

  $contact->smtp = array(
    'host' => 'smtp.qq.com',
    'username' => '高爽',
    'password' => 'rgydgbtwgbjpbhdj',
    'port' => '587'
  );


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
