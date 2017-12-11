<?php 
/* 
Author : SKumar
Version: 14.4.0
Email  : sunnyrajkum@gmail.com
*/

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	public function insert_customer($data)
	{
		$sql = 'SELECT fld_customer_id from tbl_customer WHERE fld_customer_id = ? ';
		
        $its_status = $this->db->query($sql, array($data['fld_customer_id']));
		
		if($its_status->num_rows() == 1) 
		{
               $row = $its_status->row();
               $id=$row->fld_customer_id;	
		}
		else
		{	
			$this->db->insert('tbl_customer', $data);
			$id = $this->db->insert_id();
		}
		return (isset($id)) ? $id : FALSE;		
	}
	
	public function insert_fcustomer($data)
	{
		$sql = 'SELECT fld_customer_id from tbl_customer WHERE fld_customer_id = ? ';
		
        $its_status = $this->db->query($sql, array($this->session->userdata('fid')));
		
		if($its_status->num_rows() == 1) 
		{
               $row = $its_status->row();
               $id=$row->fld_customer_id;	
		}
		else
		{	
			$this->db->insert('tbl_customer', $data);
			$id = $this->db->insert_id();
		}
		return (isset($id)) ? $id : FALSE;		
	}
	
	public function insert_customer_shipping($data)
	{
		$this->db->insert('tbl_shipping', $data);

		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;		
	}
	
	public function insert_order($data)
	{
		$this->db->insert('tbl_order', $data);
		
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_order_detail($data)
	{
		$this->db->insert('tbl_order_detail', $data);
		
		if($data['ground_type']!=32)
		{
			//$this->db->where('fld_product_id', $data['fld_product_id']);
			//$this->db->where('fld_brand_id', $data['timeslot']);
			//$this->db->where_in('fld_brand_id', $ss);
			//$this->db->update('tbl_product_attribute', array('fld_prd_attrib_status' => 1)); 
			
			$sql = 'UPDATE tbl_product_attribute SET fld_prd_attrib_status = 1 WHERE fld_product_id IN ('.$data['fld_product_id'].') AND fld_brand_id IN ('.$data['timeslot'].') ';
			
		}else{
			$sql = 'UPDATE tbl_product_attribute SET fld_prd_attrib_status = 1 WHERE fld_product_id IN ('.$data['fld_product_id'].') AND fld_brand_id IN ('.$data['timeslot'].') ';
			
			$sql1 = 'SELECT  fld_product_name FROM tbl_product where fld_product_id IN ('.$data['fld_product_id'].')';
			$inner=$this->db->query($sql1)->row();
			
			$sql2 = 'SELECT  fld_product_id FROM tbl_product where fld_product_id IN ('.$inner->fld_product_name.')';
			$inner_data=$this->db->query($sql2)->result();
			
			foreach($inner_data as $row)
			{
				$sql3 = 'UPDATE tbl_product_attribute SET fld_prd_attrib_status = 1 WHERE fld_product_id IN ('.$row->fld_product_id.') AND fld_brand_id IN ('.$data['timeslot'].') ';
				$this->db->query($sql3);
			}
			
		}
		$this->db->query($sql);
	}
	
	public function insert_vendor_order($data)
	{
		$this->db->insert('tbl_vendor_order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_vendor_order_detail($data)
	{
		$this->db->insert('tbl_vendor_order_detail', $data);
	}
	
	function UpdateTransaction($id,$trans)
	{
		$this->db->where('fld_order_id', $id);
		$this->db->update('tbl_order', array('fld_transaction_id' => $trans)); 
	}
	
	function getVendorEmail($id)
	{
		$this->db->select('prd.*,vendor.*');
	  	$this->db->from('tbl_book prd');
	  	$this->db->join('tbl_vendor vendor','vendor.fld_vendor_id = prd.fld_vendor_id');
		$this->db->where_in('prd.fld_product_id', $id);
	  	$query = $this->db->get();
	}
	
	function DeleteOrder($id)
	{
		 $this->db->where('fld_order_id', $id);
    	 $this->db->delete('tbl_order'); 
		 
		 $this->db->where('fld_order_id', $id);
    	 $this->db->delete('tbl_order_detail'); 
	}
	
	public function insert_magazine_shipping($data)
	{
		$this->db->insert('tbl_magazine_shipping', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
	public function insert_magazine_order($data)
	{
		$this->db->insert('tbl_magazine_order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	/*public function insert_magazine_order_detail($data)
	{
		$this->db->insert('tbl_magazine_order_detail', $data);
	}*/
	
	function UpdateOrder($trans,$id,$status)

	{

		$data['fld_transaction_id']=$trans;

		$data['fld_transaction_status']=$status;

		$this->db->where('fld_order_id', $id);

		$this->db->update('tbl_order', $data); 

	}
	
	
	function UpdateMagazineOrder($trans,$id,$status)

	{

		$data['fld_transaction_id']=$trans;

		$data['fld_transaction_status']=$status;

		$this->db->where('fld_order_id', $id);

		$this->db->update('tbl_magazine_order', $data); 
		
		if($this->input->post('PaymentID')!='')
		{
			$mdata['fld_membership_status']=1;
			$this->db->where('fld_membership_id', $this->session->userdata('membership_type'));
			$this->db->update('tbl_membership', $mdata); 
		}

	}
	
	function magazine_order($id)
	{
		$this->db->select('memplan.fld_membership_plan_name,memplan.fld_membership_plan_price,mem.fld_customer_start_date,mem.fld_customer_end_date');
	  	$this->db->from('tbl_magazine_order odr');
	  	$this->db->join('tbl_membership mem','mem.fld_customer_membership_type = odr.fld_membership_plan_id');
		$this->db->join('tbl_membership_plan memplan','memplan.fld_membership_plan_id = odr.fld_membership_plan_id');
		$this->db->where_in('odr.fld_order_id', $id);
	  	$query = $this->db->get()->result_array();
		
		return $query;
	}
	
	function template_magazine_order($id)
	{
		$this->db->select('odr.fld_order_id,memplan.fld_membership_plan_name,memplan.fld_membership_plan_price,mem.fld_customer_start_date,mem.fld_customer_end_date,mem.fld_customer_book_start_date,mem.fld_customer_book_end_date');
	  	$this->db->from('tbl_magazine_order odr');
	  	$this->db->join('tbl_membership mem','mem.fld_customer_membership_type = odr.fld_membership_plan_id');
		$this->db->join('tbl_membership_plan memplan','memplan.fld_membership_plan_id = odr.fld_membership_plan_id');
		$this->db->where('odr.fld_order_id', $id);
		//$this->db->where('memplan.fld_membership_plan_id', $this->uri->segment(3));
		//$this->db->group_by('odr.fld_order_id');
		$this->db->limit('1','0');
		$this->db->order_by('mem.fld_customer_start_date','DESC');
	  	$query = $this->db->get()->result_array();
		
		return $query;
	}
	
	function template_book_order($id)
	{
		$this->db->select('odr.fld_order_id,memplan.fld_membership_plan_name,memplan.fld_membership_plan_price,mem.fld_customer_start_date,mem.fld_customer_end_date,mem.fld_customer_book_start_date,mem.fld_customer_book_end_date');
	  	$this->db->from('tbl_magazine_order odr');
	  	$this->db->join('tbl_membership mem','mem.fld_customer_membership_type = odr.fld_membership_plan_id');
		$this->db->join('tbl_membership_plan memplan','memplan.fld_membership_plan_id = odr.fld_membership_plan_id');
		$this->db->where('odr.fld_order_id', $id);
		$this->db->where('memplan.fld_membership_plan_id', $this->uri->segment(3));
		//$this->db->group_by('odr.fld_order_id');
		$this->db->limit('1','0');
		$this->db->order_by('mem.fld_customer_book_start_date','DESC');
	  	$query = $this->db->get()->result_array();
		
		return $query;
	}
	
   function CheckOrder($order_id)
   {
	  	$this->db->select('tbl_customer.*,tbl_shipping.*');
	  	$this->db->from('tbl_order');
		$this->db->join('tbl_customer','tbl_order.fld_customer_id = tbl_customer.fld_customer_id');
		//$this->db->join('tbl_user','tbl_order.fld_customer_id = tbl_user.fld_user_id');
		$this->db->join('tbl_shipping','tbl_order.fld_shipping_id = tbl_shipping.fld_shipping_id');
		$this->db->where('tbl_order.fld_order_id', $order_id);
		$query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
   function CheckOrderProduct($order_id)
   {
	  	$this->db->select('prd.*,tbl_order_detail.fld_order_quantity,tbl_order_detail.fld_order_price');
	  	$this->db->from('tbl_order');
	  	$this->db->join('tbl_order_detail','tbl_order.fld_order_id = tbl_order_detail.fld_order_id');
		$this->db->join('tbl_product prd','prd.fld_product_id = tbl_order_detail.fld_product_id');
		$this->db->where('tbl_order.fld_order_id', $order_id);
		$query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	
}
/* End of file mbilling.php */
/* Location: ./system/application/models/billing.php */
