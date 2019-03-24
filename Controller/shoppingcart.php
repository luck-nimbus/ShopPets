<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoppingcart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_product');
    }

    public function buy($id)
    {
        $product =  $this->m_product->find($id);
        $data = array(
            'id'      => $product->PRO_ID,
            'qty'     => 1,
            'price'   => $product->PRO_PRICE,
            'name'    => $product->PRO_NAME,
            
    );
    
    $this->cart->insert($data);
    $this->load->view('cart');
    }

    public function delete($rowid)
    {
        $this->cart->update(array('rowid'=> $rowid, 'qty' => 0));
        $this->load->view('cart');
    }

    public function update()
    {
        $i = 1;
        foreach($this->cart->contents() as $items)
        {
            $this->cart->update(array('rowid'=>$items['rowid'], 'qty' => $_POST['qty'.$i]));
            $i++;
        }
        $this->load->view('cart');
    }

}
?>