<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->library('cart');
    }

    public function index()
    {
        $this->load->view('pages/main/index');
    }

    public function FetchAllFood()
    {
        if ($this->input->post('mode') == 'fetchAll') {
            $data = $this->ProductModel->featch_All_products();
            $this->renderList($data);
        }
    }

    private function renderList($data)
    {
        $output = '';
        foreach ($data as $list) {
            $rdetails = $this->ProductModel->find_restaurant_details($list->rid);
            if ($list->cat == 'N') {
                $label = '<span class="badge-new"> NON VEG </span>';
            } else if ($list->cat == 'V') {
                $label = '<span class="badge-new" style="background-color:green"> PURE VEG </span>';
            } else {
                $label = '<span class="badge-new" style="background-color:blue"> OTHER </span>';
            }
            $output .= '
            <div class="col-md-3 col-sm-6">
                    <figure class="card card-product">
                    ' . $label . '
                        <div class="img-wrap"><img style="width:100%;height:100%" class="img-rounded" src="' . $list->img_path . ' "></div>
                        <figcaption class="info-wrap ">
                            <h3 class="title text-center">' . $list->itemName . '</h3>
                            <p class="text-wrap"> <b>' . $rdetails->rname . '</b>   <br>  
                            ' . $rdetails->location . '</p>
                           </figcaption>
                            <div class="bottom-wrap">
                            <a href="#" class="btn btn-sm  btn-outline-primary float-right" onclick="addFood(' . $list->mid . ');"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
                            <div class="price-wrap h5">
                            <span class="price-new">Thali </span> <span class="price-new"> ' . $list->rate . '  <i class="fas fa-rupee-sign"></i></span>
                            </div> <!-- price-wrap.// -->
                            </div> <!-- bottom-wrap.// -->
                            </figure> <!-- card // -->
                            </div> <!-- col // --> ';
        }
        echo $output;
    }

    public function FetchSearchFood()
    {

        if ($this->input->post('mode') == 'SearchFood') {
            $cat = $this->input->post('cat');
            $mname = $this->input->post('food');
            $data = $this->ProductModel->FoodSearch($cat, $mname);
            $this->renderList($data);
        }
    }

    #####################################  Food Cart Api ##################################
    public function addFoodToCart()
    {
        if ($this->input->post('mode') == 'addTocart') {
            $pid = $this->input->post('id');
            $product = $this->ProductModel->FindFoodDetails($pid);
            $this->load->library('cart');
            $data = array(
                'id' => $product->mid,
                'itemName' => $product->itemName,
                'qty' => 1,
                'price' => $product->rate,
                'name' => $product->itemName,
                'cat' => $product->cat,
                'rid' => $product->rid
            );
            $this->cart->insert($data);
            print_r($this->cart->contents());
        }

    }

    public function FetchCartFood()
    {

        if ($this->input->post('mode') == 'FetchCartFood') {
            $output = '';
            foreach ($this->cart->contents() as $food) {

                $rmove = ' onclick=removeItems("' . $food['rowid'] . '");';
                $output .= '
            
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">' . $food['itemName'] . '</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-right">' . $food['qty'] . '</span>
                            <span class="text-muted">
                         <!--
                                <button class="btn btn-sm btn-success">
                                    <i class="fa fa-plus"></i></button>
                         
                                    <button class="btn btn-sm btn-primary">
                                    <i class="fa fa-minus"></i></button>
                         -->
                                        <button class="btn btn-sm btn-danger" ' . $rmove . '>
                                    <i class="fa fa-trash"></i> </button></span>
                        </li>
            ';
            }

            $output .= '
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total Balance (in Rupee)</span>
                            <strong>' . $this->cart->total() . ' <i class="fas fa-rupee-sign"></i></strong>
                        </li>';
            echo $output;

        }

    }

    public function CountCart()
    {
        if ($this->input->post('mode') == "CountCart") {
            echo count($this->cart->contents());
        } else {
            echo '0';
        }
    }

    public function RemoveItems()
    {

        if ($this->input->post('mode') == "RemoveItems") {
            $id = $this->input->post('id');
            $data = array(
                'rowid' => $id,
                'qty' => 0
            );
            $this->cart->update($data);
        }
    }

    public function viewOrder()
    {

        if ($this->input->post('mode') == "viewOrder") {
            if ($this->session->type == "Customer") {
                $data = $this->ProductModel->foodorder($this->session->id, 'C');
            }

            if ($this->session->type == "restaurant") {
                $data = $this->ProductModel->foodorder($this->session->id, 'R');
            }

            $count = 0;
            $output = '';
            foreach ($data as $d) {
                $count = $count + 1;
                $output .= '
                        <tr>
                           <th scope="row">' . $count . '</th>
                           <td>' . $d->itemName . '</td>
                           <td>' . $d->fname . '</td>                    
                           <td>' . $d->rname . '</td>                    
                           <td>' . $d->qnty . '</td>                    
                           <td>' . $d->address . '</td>                    
                           <td>' . $d->tamt . '</td>   ';


                if ($this->session->type == "restaurant") {
                    if ($d->status == 0) {
                        $output .= '<td><button class="brn btn-success" >Delivered</button></td>';
                    } else {
                        $output .= '<td><button class="brn btn-primary" onclick="placedOrder(' . $d->oid . ')">  Placed Order</button></td>';
                    }
                }

                if ($this->session->type == "Customer") {
                    if ($d->status == 0) {
                        $output .= '<td><button class="brn btn-success" >Delivered</button></td>';
                    } else {
                        $output .= '<td><button class="brn btn-primary" >Pending</button></td>';
                    }

                }


                $output .= '</tr>';


            }
            echo $output;
        }
    }

    public function placedOrder()
    {

        if ($this->input->post('mode') == "Oplaced") {
            $id = $this->input->post('id');
            if ($this->session->type == "restaurant") {
                if ($this->ProductModel->placedOrder($id)) {
                    echo "true";
                }
            }


        }
    }

    function AddPlacedOrder()
    {

        if ($this->input->post('mode') == "AddPlacedOrder") {
            $address = $this->input->post('add');
            foreach ($this->cart->contents() as $food) {

                if ($this->ProductModel->addOrder($food['id'], $this->session->id, $food['rid'], $food['qty'], $food['price'], $address)) {
                    echo "true";
                }
            }


        }

    }
    public function viewMenu()
    {

        if ($this->input->post('mode') == "viewMenu") {
            $data = $this->ProductModel->viewMenu($this->session->id);

            $count = 0;
            $output = '';
            foreach ($data as $d) {
                $count = $count + 1;
                $output .= '
                        <tr>
                           <th scope="row">' . $count . '</th>
                           <td>' . $d->itemName . '</td>
                           <td>' . $d->cat . '</td>                    
                           <td> 1 Thali </td>                    
                           <td>' . $d->rate . '</td>                    
            
                       </tr>';

            }
            echo $output;
        }
    }


    public function addMenu()
    {

        if ($this->input->post('mode') == "addMenu") {
            $menuNAme = $this->input->post('menuNAme');
            $menuRate = $this->input->post('menuRate');
            $menuCat = $this->input->post('menuCat');
            $menuPic = $this->input->post('menuPic');
            if ($this->ProductModel->addMenu($menuNAme, $menuRate, $menuCat, $menuPic)) {
                echo "Add successfully";
            }

        }
    }


}
