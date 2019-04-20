<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
    }

    public function index()
    {
        $this->load->view('pages/main/index');
    }

    public function CustomerAuth()
    {
        if ($this->input->post('mode') == 'clog') {
            $user = $this->input->post('user');
            $pass = $this->input->post('pass');
            @$result = $this->UsersModel->CustomerAuthFun($user, $pass);
            if ($result) {
                echo "status^1";
            } else {
                echo "status^0";
            }
        }
    }

    public function restaurantAuth()
    {
        if ($this->input->post('mode') == 'rlog') {
            $user = $this->input->post('user');
            $pass = $this->input->post('pass');
            @$result = $this->UsersModel->restaurantAuthFun($user, $pass);
            if ($result) {
                echo "status^1";
            } else {
                echo "status^0";
            }
        }
    }

    public function Reg()
    {

        $signupCata = $this->input->post('signupCata');
        $signupfname = $this->input->post('signupfname');
        $signuplname = $this->input->post('signuplname');
        $signupemail = $this->input->post('signupemail');
        $signuppass = $this->input->post('signuppass');
        $pref = $this->input->post('pref');

        if ($signupCata == "restaurant") {
            $result = @$this->UsersModel->Rregistration($signupfname, $signupemail, $signuppass, $pref);

        }
        if ($signupCata == "Customer") {
            $result = @$this->UsersModel->Cregistration($signupfname, $signupemail, $signuppass, $pref);

        }

    }

    public function Logmeout()
    {
        $this->session->sess_destroy();
    }
}