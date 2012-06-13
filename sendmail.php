<?php
  
  //  Getting the form inputs here and storing them into
  //  local variables for message creation
  $to = 'info@interagrowthpartners.com';  // Target email 
  $name = $_REQUEST['name'] ;
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'] ;
  $resume = $_REQUEST['resume'] ;
  $recruit = ($_REQUEST['recruit'] == 'on') ? 'Yep' : 'Nope' ;
  $talent = ($_REQUEST['talent'] == 'on') ? 'Yep' : 'Nope' ;
  $message = $_REQUEST['message'] ;
  
  
  $subject = '[ICR] Intera Contact Request from '.$name ;
  //  Building the content of the email body
  $content = 'Name: '.$name."\r\n";
  $content .= 'Email: '.$email."\r\n";
  $content .= 'Phone: '.$phone."\r\n";
  $content .= 'Resume Link: '.$resume."\r\n";
  $content .= 'Looking for Job? '.$talent."\r\n";
  $content .= 'Looking for Talent? '.$recruit."\r\n";

  // Specifying headers to send along with email
  $headers  = 'MIME-Version: 1.0' ."\r\n";
  $headers .= 'Content-type: text/plain; charset=iso-8859-1' ."\r\n";

  // Additional headers
  $headers .= 'To: Intera GP <info@interagrowthpartners.com>'. "\r\n";
  $headers .= 'From: '.$name.' <'.$email.'>' . "\r\n";

  //  Sending the email with all the related content
  mail( $to, $subject, $content, $headers );
  
  //  Send user to page again with request parameter as success! 
  header( "Location: http://dev.witandwhim.com/intera?request=success" );
  
?>

