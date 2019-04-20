<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
        if ($this->session->type == "restaurant") {
        } else {
            redirect('/home');
        }
    }


    public function Order()
    {
        $this->load->view('pages/main/Order');

    }

    public function AddFood()
    {
        $this->load->view('pages/main/addFood');

    }
}