<?php

class Product extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Get data product
    public function getProduct()
    {
        $this->db->from('tb_book');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Get data product by id
    public function getProductById($id)
    {
        $this->db->from('tb_book');
        $this->db->where('id_book', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Delete product
    public function deleteProducts($id)
    {
        $this->db->from('tb_book');
        $this->db->where('id_book', $id);
        $this->db->delete();
        if ($this->db->affected_rows() > 0) {
            return True;
        } else {
            return False;
        }
    }

    // Get data transaction
    public function getTransactions()
    {
        $this->db->from('tb_transaction');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Get data Transaction by id
    public function getTransactionsById($id)
    {
        $this->db->from('tb_trasaction');
        $this->db->where('id_trasaction', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Get data transaction by range date
    public function getTransactionsByRangeDate($data)
    { }

    // Get total profit
    public function getTotalProfit()
    {
        $this->db->from('tb_transaction');
        $this->db->select_sum('subtotal');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Get total product sell
    public function getTotalSell()
    {
        $this->db->from('tb_transaction');
        $this->db->select_sum('qty');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
    }

    // Get total sell by user
    public function getTotalSellByUsers($id)
    {
        $this->db->from('tb_transaction');
        $this->db->where('id_user', $id);
        $this->db->select_sum('qty');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return False;
        }
     }
}