<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->type == "restaurant") {
            redirect('/Restaurant/Order');
        }

    }

    public function index()
    {
        $this->load->view('pages/main/index');
    }

    public function Food()
    {
        $this->load->view('pages/main/product');

    }

    public function Order()
    {
        if ($this->session->type != "Customer") {
            redirect('/home');
        }
        $this->load->view('pages/main/Order');

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */