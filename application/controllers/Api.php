<?php 

class Api extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        $this->load->model("Product");
    }

    // GET data user
    public function getUser() {
        $data = $this->Users->getUsers();
        if ($data != false) {
            echo json_encode( $data);
        } else {
            echo json_encode([['msg'=> 'data not found']]);
        }

    }

    // GET data user by id
    public function getUserById() {
        $data = $this->Users->getUsersById(3);
        if ($data != false) {
            echo json_encode( $data);
        } else {
            echo json_encode([['msg'=> 'data not found']]);
        }
       
    }

    // PUT data
    public function addUser() {

    }

    // UPDATE data user
    public function updateUser() {

    }

    // DELETE data user
    public function deleteUser() {

    }

    // GET data transaction
    public function getTransaction() {
        $data = $this->Product->getTransactions();
        if ($data != false) {
            echo json_encode( $data);
        } else {
            echo json_encode([['msg'=> 'data not found']]);
        }
    }

    // GET data transaction by id
    public function getTransactionById() {

    }

    // POST data transaction 
    public function addTransaction() {

    }

    // UPDATE data transaction
    public function updateTransaction() {

    }

    // DELETE data transaction
    public function deleteTransaction() {

    }

    // GET data product
    public function getProduct() {
        $data = $this->Product->getProduct();
        if ($data != false) {
            echo json_encode( $data);
        } else {
            echo json_encode([['msg'=> 'data not found']]);
        }
    }

    // GET data product by id
    public function getProductById() {

    }

    // POST data product 
    public function addProduct() {

    }

    // UPDATE data product
    public function updateProduct() {

    }

    // DELETE data product
    public function deleteProduct() {

    }

    // POST data cart 
    public function addCart() {

    }

    // DELETE data cart
    public function deleteCart() {

    }
    // DELETE data cart by id
    public function deleteCartById() {

    }
}