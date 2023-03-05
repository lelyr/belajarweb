<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{
    public function getOrder($id)
    {
        // ambil data dari table order all
        $this->db->select('orders.*');
        // ambil data dari table stores hanya UserID
        $this->db->select('stores.UserID');
        // ambil data dari table products hanya ProductName
        $this->db->select('products.ProductName');
        // memilih table parent untuk join
        $this->db->from('orders');
        // sorting order berdasarkan CreatedAt
        $this->db->order_by("CreatedAt", "desc");
        // join ke table lain
        $this->db->join('products', 'products.ProductID = orders.ProductID');
        $this->db->join('stores', 'products.StoreID = stores.StoreID');
        // kondisi untuk persyaratan khusus data yang ingin diambil
        $this->db->where('stores.UserID', $id);
        // mengambil data dari query
        $q = $this->db->get();
        // ambil data dalam bentuk array
        return $q->result_array();
    }

    public function confirmPayment($checkId, $status)
    {
        $data = array('Status' => $status);
        return $this->db->update('Orders', $data, ['OrderID' => $checkId]);
    }
}
