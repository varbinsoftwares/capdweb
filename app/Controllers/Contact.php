<?php

namespace App\Controllers;

class Contact extends BaseController {

    public function index() {
        $session = session();

        $postdata = $this->request->getPost();
        $db = db_connect();
        $query = $db->query("select * from conf_site where conf_description = 'email'");
        $confdataarray = $query->getResultArray();
        $configurationdict = array();
        foreach ($confdataarray as $key => $value) {
            $configurationdict[$value["conf_attr"]] = $value["conf_value"];
        }
        $email = \Config\Services::email();


//        $config = array(
//            'protocol' => 'smtp',
//            'SMTPHost' => $configurationdict["email_server"],
//            'SMTPPort' => $configurationdict["email_port"],
//            'SMTPUser' => $configurationdict["email_sender"],
//            'SMTPPass' => $configurationdict["email_password"],
//            'smtp_timeout' => 30,
//            'mailType' => "html",
//        );
        $config = array(
            'protocol' => 'smtp',
            'SMTPHost' => "smtp.gmail.com",
            'SMTPPort' => "587",
            'SMTPUser' => "pankajmanpreet0@gmail.com",
            'SMTPPass' => "P@ssw0rd*#!",
            'smtp_timeout' => 30,
            'mailType' => "html",
        );

        $config['charset'] = 'iso-8859-1';
        $config['wordWrap'] = true;
        $config["mailPath"] = "";


        $email->initialize($config);
        $data["message"] = "";
        if (isset($postdata["submitdata"])) {
//            echo "enter to check post";
            $captchacode = $session->get("captchacode");
            if ($postdata["captcha"] == $captchacode) {
//                echo "enter to send email";
                $email->setNewline("\r\n");

                $email->clear();
                $email->setFrom('noreply@christianappdevelopers.com', 'Christian App Developers');
                $email->setTo('noreply@christianappdevelopers.com');
                $email->setCC('contact@evansfrancis.org');
                $email->setBCC('pankaj21pathak@gmail.com');
                $email->setSubject('Enquiry From Website For ' . $postdata["subject"]);
                $emailmessage = view("web_enquiry", array("web_enquiry" => $postdata));
                $email->setMessage($emailmessage);

                $email->send();
                echo $email->printDebugger();
                return view("thanks");
            } else {
                $data["message"] = "Wrong Captcha Entered...";
            }
        }

        return view('contact', $data);
    }

    public function thankyou() {
        return view("thanks");
    }

    public function sendMail() {
        $email = \Config\Services::email();

        $db = db_connect();
        $query = $db->query("select * from conf_site where conf_description = 'email'");
        $confdataarray = $query->getResultArray();
        $configurationdict = array();
        foreach ($confdataarray as $key => $value) {
            $configurationdict[$value["conf_attr"]] = $value["conf_value"];
        }
//        $config = array(
//            'protocol' => 'smtp',
//            'SMTPHost' => $configurationdict["email_server"],
//            'SMTPPort' => $configurationdict["email_port"],
//            'SMTPUser' => $configurationdict["email_sender"],
//            'SMTPPass' => $configurationdict["email_password"],
//            'smtp_timeout' => 30,
//            'mailType' => "text",
//        );

        $config = array(
            'protocol' => 'smtp',
            'SMTPHost' => "smtp.gmail.com",
            'SMTPPort' => "587",
            'SMTPUser' => "pankajmanpreet0@gmail.com",
            'SMTPPass' => "P@ssw0rd*#!",
            'smtp_timeout' => 30,
            'mailType' => "text",
        );

        $config['charset'] = 'iso-8859-1';
        $config['wordWrap'] = true;
//        $config["mailPath"] = "/usr/bin/sendmai";


        $email->initialize($config);
        $email->setNewline("\r\n");


        print_r($email);

        $email->clear();
        $email->setFrom('noreply@christianappdevelopers.com', 'Christian App Developers');
        $email->setTo('pankaj21pathak@gmail.com');
        $email->setCC('contact@evansfrancis.org');
        $email->setSubject('Enquiry From Website For ');
        $email->setMessage("this is test message");
//        echo $email->send();
//        echo $email->printDebugger();
    }

    function hexrgb($hexstr) {
        $int = hexdec($hexstr);
        return array("red" => 0xFF & ($int >> 0x10),
            "green" => 0xFF & ($int >> 0x8),
            "blue" => 0xFF & $int);
    }

    function createCaptha() {
        $session = session();
        //Settings: You can customize the captcha here
        $image_width = 120;
        $image_height = 40;
        $characters_on_image = 6;
        $font = APPPATH . '../public/assets/monofont.ttf';
        $possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
        $random_dots = 0;
        $random_lines = 20;
        $captcha_text_color = "0x142864";
        $captcha_noice_color = "0x142864";
        $code = '';
        $i = 0;
        while ($i < $characters_on_image) {
            $code .= substr($possible_letters, mt_rand(0, strlen($possible_letters) - 1), 1);
            $i++;
        }
        $font_size = $image_height * 0.75;
        $image = @imagecreate($image_width, $image_height);
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $arr_text_color = $this->hexrgb($captcha_text_color);
        $text_color = imagecolorallocate($image, $arr_text_color['red'],
                $arr_text_color['green'], $arr_text_color['blue']);
        $textbox = imagettfbbox($font_size, 0, $font, $code);
        $x = ($image_width - $textbox[4]) / 2;
        $y = ($image_height - $textbox[5]) / 2;
        imagettftext($image, $font_size, 0, $x, $y, $text_color, $font, $code);
        $session->set("captchacode", $code);
        $this->response->setHeader('Content-Type', 'image/jpeg');
        imagejpeg($image);
    }

}
