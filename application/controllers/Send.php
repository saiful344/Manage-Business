<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends CI_Controller {

    /**
     * Kirim email de
     ngan SMTP Gmail.
     *
     */
    public function index()
    {
      // Konfigurasi email
        $from_email = "thingshop121@gmail.com"; 
          $to_email = "saifulmuhammad414@gmail.com"; 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'thingshop12345',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Thing_Baby~'); 
         $this->email->to($to_email);
         $this->email->subject('Pemberitahuan pembayaran'); 
         $this->email->message('Pembayaran yang lakukan sukses,Terima kasih suah berblanja di Thing~ semoga anda menikmati pelayanan kami '); 

         //Send mail 
         if($this->email->send()){
               echo "Email berhasil terkirim.";
         }else {
               echo $this->email->print_debugger();
         } 
  }
  function kirim(){
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "thingshop121@gmail.com";
        $config['smtp_pass'] = "thingshop12345";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from('thingshop121@gmail.com', 'thingshop');
        $list = array('saifulmuhammad414@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('judul email');
        $ci->email->message('isi email');
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

    }
