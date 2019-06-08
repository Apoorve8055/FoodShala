<?php

class ProductModel extends CI_Model
{
    public function featch_All_products()
    {
        $q = $this->db
            ->select('*')
            ->from('menu')
            ->get();
        return $q->result();
    }

    public function find_restaurant_details($rid)
    {
        $q = $this->db
            ->select('*')
            ->from('restaurant')
            ->where('rid', $rid)
            ->get();
        $result = $q->row();
        return $result;
    }

    public function FoodSearch($cat, $mname)
    {

        if ($cat == 'all') {
            $q = $this->db
                ->select('*')
                ->from('menu')
                ->like('itemName', $mname)
                ->get();

        } else {
            $q = $this->db
                ->select('*')
                ->from('menu')
                ->where('cat', $cat)
                ->like('itemName', $mname)
                ->get();
        }
        $result = $q->result();
        return $result;
    }

    public function FindFoodDetails($id)
    {
        $q = $this->db
            ->select('*')
            ->from('menu')
            ->where('mid', $id)
            ->get();
        //print_r($q->result());
        return $q->row();
    }

    public function foodorder($id, $c)
    {
        if ($c == 'C') {
            $q = $this->db->query("SELECT oid , itemName ,fname,rname,qnty,address,tamt,status FROM `order` as t1, `customer` as t2 , `restaurant` as t3 , `menu` as t4 WHERE t1.cid = t2.cid and t1.rid = t3.rid and t1.mid = t4.mid and t1.cid = '" . $id . "' ");

        }
        if ($c == 'R') {
            $q = $this->db->query("SELECT oid , itemName ,fname,rname,qnty,address,tamt,status FROM `order` as t1, `customer` as t2 , `restaurant` as t3 , `menu` as t4 WHERE t1.cid = t2.cid and t1.rid = t3.rid and t1.mid = t4.mid and t1.rid = '" . $id . "' ");

        }
        return $q->result();
    }

    function placedOrder($id)
    {
        echo $sql = "update `order` set status = 0 where oid = '" . $id . "'";
        $q = $this->db->query($sql);
        return $q;
    }

    public function viewMenu($id)
    {
        $q = $this->db
            ->select('*')
            ->from('menu')
            ->where('rid', $id)
            ->get();
        return $q->result();
    }

    public function addMenu($menuNAme, $menuRate, $menuCat, $menuPic)
    {
        $query = "insert into menu set itemName = '" . $menuNAme . "', cat = '" . $menuCat . "', rate = '" . $menuRate . "', rid = '" . $this->session->id . "', img_path = '" . $menuPic . "' ";
        $q = $this->db->query($query);
        return $q;
    }

    public function addOrder($mid, $cid, $rid, $qnty, $prize, $address)
    {
        # echo $mid." || ".$cid." || ".$rid." || ".$qnty." || ".$prize." || ".$address;
        $query = "insert into `order` set mid = '" . $mid . "', cid = '" . $cid . "', rid = '" . $rid . "', qnty = '" . $qnty . "', address = '" . $address . "', tamt = '" . $prize . "' ";
        $q = $this->db->query($query);
        return $q;
    }
}