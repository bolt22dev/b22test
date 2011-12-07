<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_model extends CI_Model {
   
   function __contruct() {
      parent::__construct();
   }
   
   public function getAllSuppliers($paramArr) {
      $start = isset($paramArr['start'])?$paramArr['start']:NULL;
      $limit = isset($paramArr['limit'])?$paramArr['start']:NULL;
      $sortField = isset($paramArr['sortField'])?$paramArr['sortField']:'supname';
      $sortOrder = isset($paramArr['sortOrder'])?$paramArr['sortOrder']:'desc';
      $whereParam = isset($paramArr['whereParam'])?$paramArr['whereParam']:NULL;
      
      if(!empty($start) && !empty($limit)) $optLimit = "limit $start,$limit";
      else $optLimit = NULL;
      
      if(!empty($whereParam)) $whereParam = "and (".$whereParam.")";
      $whereClause = "where true ".$whereParam;
      
      $SQL = "SELECT supid, supname, supadd, supcontact_name, supmobileno, suplandlineno, supfax FROM tblsupplier $whereClause order by $sortField $sortOrder $optLimit ";
      $result = $this->db->query($SQL);
      if($result->num_rows() > 0) {
         $supplierList = $result->result();
         return $supplierList;
      } else {
         return null;
      }
   }
   
   public function createSupplierInfo($aSupplier) {
      $supplier_id = $this->newPrimaryKeySequence('supid');
      $SQL = "INSERT INTO tblsupplier VALUES (?,?,?,?,?,?,?);";
      $values = array(
                  $supplier_id,
                  $aSupplier['supplier_name'],
                  $aSupplier['address'],
                  $aSupplier['contact_name'],
                  $aSupplier['mobile_no'],
                  $aSupplier['landline_no'],
                  $aSupplier['fax']
      );
      $this->db->query($SQL,$values);
      if($this->db->affected_rows() > 0) return $supplier_id;
      else return null;
   }
   
   public function updateSupplierInfo($aSupplier) {
      $SQL = "UPDATE tblsupplier SET supname=?,supadd=?,supcontact_name=?,supmobileno=?,suplandlineno=?,supfax=? where supid=?";
      $values = array($aSupplier['supplier_name'],$aSupplier['address'],$aSupplier['contact_name'],$aSupplier['mobile_no'],$aSupplier['landline_no'],$aSupplier['fax'],$aSupplier['supplier_id']);
      $this->db->query($SQL,$values);
      if($this->db->affected_rows() > 0) return TRUE;
      else return FALSE;
   }
   
   public function getSupplierInfoById($supplier_id) {
      $SQL = "SELECT supid, supname, supadd, supcontact_name, supmobileno, suplandlineno, supfax FROM tblsupplier WHERE supid=?";
      $values = array($supplier_id);
      $result = $this->db->query($SQL,$values);
      if($result->num_rows() > 0) return $result->result();
      else return NULL;
   }
   
   public function deleteSupplierInfo($supplier_id) {
      $SQL = "delete from tblsupplier where supid = ?";
      $values = array($supplier_id);
      $this->db->query($SQL,$values);
      if($this->db->affected_rows() > 0) return TRUE;
      else return FALSE;
   }
   
   private function newPrimaryKeySequence($key=null) {
        if(empty($key)) return FALSE;
        $CI =& get_instance();
        $SQL = "update tblsequence set $key=$key+1";
        $CI->db->query($SQL);
        $SQL = "Select $key from tblsequence limit 1;";
        $result = $CI->db->query($SQL);
        $row = $result->row();
        return str_pad($row->$key,8,0,STR_PAD_LEFT);
    }
   
}
