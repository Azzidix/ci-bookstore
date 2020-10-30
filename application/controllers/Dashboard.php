<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Users');
		$this->load->model('Product');
	}

	// Check user login
	public function is_logged_in()
	{
		$is_login = $this->session->userdata('logged_in');

		if (!isset($is_login) || $is_login != true) {
			redirect('login');
		}
	}

	// View dashboard index
	public function index()
	{
		// Check Login
		$this->is_logged_in();
		// Get data subtotal sell
		$totalSell = $this->Product->getTotalSell()[0]->qty;
		// Get data subtotal profit
		$totalProfit = $this->Product->getTotalProfit()[0]->subtotal;
		// Get user info name
		$nameUser = $this->session->userdata('name');

		$data = ['title' => 'Dashboard', 'brand' => 'BookStore', 'nameUser' => $nameUser,  'totalSell' => $totalSell, 'totalProfit' => $totalProfit];
		// check role admin or employees
		if ($this->session->userdata('role') == 1) {
			// load view dashboard admin
			$this->load->view('admin/index', $data);
		} else if ($this->session->userdata('role') == 2) {
			// load view dashboard users
			$this->load->view('users/index', $data);
		}
	}

	// View dashboard product
	public function product()
	{
		$dataProduct = $this->Product->getProduct();
		// Get user info name
		$nameUser = $this->session->userdata('name');
		$data = ['title' => 'Product', 'brand' => 'BookStore', 'dataProduct' => $dataProduct, 'nameUser' => $nameUser];

		// check role admin or employees
		if ($this->session->userdata('role') == 1) {
			// load view dashboard admin
			$this->load->view('admin/product', $data);
		} else if ($this->session->userdata('role') == 2) {
			// load view dashboard users
			$this->load->view('users/index', $data);
		}
	}

	public function formProduct()
	{

		// Get user info name
		$nameUser = $this->session->userdata('name');
		$data = ['title' => 'User', 'brand' => 'BookStore', 'nameUser' => $nameUser];

		// check role admin or employees
		if ($this->session->userdata('role') == 1) {
			// load view dashboard admin
			$this->load->view('admin/form/addproduct', $data);
		} else if ($this->session->userdata('role') == 2) {
			// load view dashboard users
			$this->load->view('users/index', $data);
		}
	}

	// Function Ddlete product
	public function deleteProduct($id)
	{
		$query = $this->Users->deleteProducts($id);
		if ($query != false) {
			$this->session->set_flashdata('success', 'Delete Product Success');
			redirect('dashboard/product');
		} else {
			$this->session->set_flashdata('failed', 'Delete Product Failed');
			redirect('dashboard/product');
		}
	}

	// View dashboard transaction
	public function transaction()
	{
		$dataTransaction = $this->Product->getTransactions();
		// Get user info name
		$nameUser = $this->session->userdata('name');
		$data = ['title' => 'Transaction', 'brand' => 'BookStore', 'dataTransaction' => $dataTransaction, 'nameUser' => $nameUser];

		// check role admin or employees
		if ($this->session->userdata('role') == 1) {
			// load view dashboard admin
			$this->load->view('admin/transaction', $data);
		} else if ($this->session->userdata('role') == 2) {
			// load view dashboard users
			$this->load->view('users/index', $data);
		}
	}

	// View dashboard user
	public function user()
	{
		$dataUser = $this->Users->getUsers();
		// Get user info name
		$nameUser = $this->session->userdata('name');
		$data = ['title' => 'User', 'brand' => 'BookStore', 'dataUser' => $dataUser, 'nameUser' => $nameUser];

		// check role admin or employees
		if ($this->session->userdata('role') == 1) {
			// load view dashboard admin
			$this->load->view('admin/user', $data);
		} else if ($this->session->userdata('role') == 2) {
			// load view dashboard users
			$this->load->view('users/index', $data);
		}
	}

	// Function Delete User
	public function deleteUser($id)
	{
		$query = $this->Users->deleteUsers($id);
		if ($query != false) {
			$this->session->set_flashdata('success', 'Delete User Success');
			redirect('dashboard/user');
		} else {
			$this->session->set_flashdata('failed', 'Delete User Failed');
			redirect('dashboard/user');
		}
	}

	public function formUser()
	{

		// Get user info name
		$nameUser = $this->session->userdata('name');
		$data = ['title' => 'User', 'brand' => 'BookStore', 'nameUser' => $nameUser];

		// check role admin or employees
		if ($this->session->userdata('role') == 1) {
			// load view dashboard admin
			$this->load->view('admin/form/adduser', $data);
		} else if ($this->session->userdata('role') == 2) {
			// load view dashboard users
			$this->load->view('users/index', $data);
		}
	}

	// View dashboard pos
	public function pos()
	{
		$dataChart = array(
			array(
				'id'      => 'sku_123ABC',
				'qty'     => 1,
				'price'   => 39.95,
				'name'    => 'T-Shirt',
				'options' => array('Size' => 'L', 'Color' => 'Red')
			),
			array(
				'id'      => 'sku_567ZYX',
				'qty'     => 1,
				'price'   => 9.95,
				'name'    => 'Coffee Mug'
			),
			array(
				'id'      => 'sku_965QRS',
				'qty'     => 1,
				'price'   => 29.95,
				'name'    => 'Shot Glass'
			)
		);
		$this->cart->insert($dataChart);
		$id = $this->session->userdata('id');
		$totalSell = $this->Product->getTotalSellByUsers($id);
		$nameUser = $this->session->userdata('name');
		$data = ['title' => 'POS', 'brand' => 'BookStore', 'nameUser' => $nameUser, 'totalSell' => $totalSell];

		// check role admin or employees
		if ($this->session->userdata('role') == 1) {
			// load view dashboard admin
			$this->load->view('users/index', $data);
		} else if ($this->session->userdata('role') == 2) {
			// load view dashboard users
			$this->load->view('users/pos', $data);
		}
	}
}
