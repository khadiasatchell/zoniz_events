<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("zonizevents@gmail.com", "Zonix Events");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
            $email->addContent("text/html", $content);

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>