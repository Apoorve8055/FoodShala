<?php

class UsersModel extends CI_Model
{
    public function CustomerAuthFun($user, $pass)
    {
        $q = $this->db->query("select * from customer where email='" . $user . "' and pass='$pass'");
        // print_r($q->row());
        $this->session->id = $q->row()->cid;
        $this->session->name = $q->row()->fname;
        $this->session->email = $q->row()->email;
        $this->session->pref = $q->row()->pref;
        $this->session->type = $q->row()->type;
        return $q->num_rows();
    }

    public function restaurantAuthFun($user, $pass)
    {
        $q = $this->db->query("select * from restaurant where email='" . $user . "' and pass='$pass'");
        // print_r($q->row());
        $this->session->id = $q->row()->rid;
        $this->session->name = $q->row()->rname;
        $this->session->email = $q->row()->email;
        $this->session->pref = $q->row()->pref;
        $this->session->type = $q->row()->type;
        return $q->num_rows();
    }


    public function Cregistration($signupfname, $signupemail, $signuppass, $pref)
    {
        $qu = "insert into customer set fname = '" . $signupfname . "', email = '" . $signupemail . "', pass = '" . $signuppass . "', pref = '" . $pref . "' ";
        $q = $this->db->query($qu);
        return $q->row();
    }

    public function Rregistration($signupfname, $signupemail, $signuppass, $pref)
    {
        $query = "insert into restaurant set rname = '" . $signupfname . "', email = '" . $signupemail . "', pass = '" . $signuppass . "', pref = '" . $pref . "' ";
        $q = $this->db->query($query);
        return $q->row();
    }
}