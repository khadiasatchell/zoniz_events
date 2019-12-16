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