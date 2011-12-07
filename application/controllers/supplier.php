<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller {
   
   public function __construct()
   {
        parent::__construct();
        $this->load->helper('grid'); 
        $this->load->model('supplier_model');
   }
   
   public function index( $id = null ){
      $data = array();
      if( $this->session->flashdata( 'message' ) ){
          $data['system_message'] = $this->session->flashdata( 'message' );
      }
      if( !empty( $id ) ){
          $aList = $this->supplier_model->getSupplierInfoById($id);
          foreach( $aList as $sList ){
             $data['supplier_id']   = $sList->supid;
             $data['supplier_name'] = $sList->supname;
             $data['address']       = $sList->supadd;
             $data['contact_name']  = $sList->supcontact_name;
             $data['mobile_no']     = $sList->supmobileno;
             $data['landline_no']   = $sList->suplandlineno;
             $data['fax']           = $sList->supfax;
          }
       }
      $this->load->view( 'supplier/form', $data );
   }
   
   public function viewAll(){
      $aData = array(
            'set_columns' => array( 
                                 array(
                                    'label'  => 'Supplier ID',
                                    'name'   => 'supid',
                                    'width'  => 100,
                                    'size'   => 10
                                 ),
                                 array(
                                    'label'  => 'Supplier Name',
                                    'name'   => 'supname',
                                    'width'  => 220,
                                    'size'   => 10
                                 ),
                                 array(
                                    'label'  => 'Supplier Address',
                                    'name'   => 'supnadd',
                                    'width'  => 220,
                                    'size'   => 10
                                 )
            ),
            'div_name'     => 'grid',
            'source'       => 'supplier/supplierList/',
            'sort_name'    => 'supname',
            'add_url'      => 'supplier/index/',
            'edit_url'     => 'supplier/index/',
            'delete_url'   => 'supplier/exec/del',
            'caption'      => 'Supplier Maintenance',
            'primary_key'  => 'supid',
            'grid_height'  => 230
      );
      $data['supplierGrid'] = buildGrid($aData);
      $this->load->view('supplier/supplierlist',$data);
   }
   
   public function supplierList() {
      buildGridData(
         array(
            'model'   => 'supplier_model',
            'method'  => 'getAllSuppliers',
            'pkid'    => 'supid',
            'columns' => array( 'supid','supname','supadd' )
         )
      );
   }
                                                                     
   public function exec( $action, $id = null ) { 
      switch( $action ){
         case 'add' :
            $this->form_validation->set_rules('supplier_name','Supplier Name','required|xss_clean');
            $this->form_validation->set_rules('address','Address','required|xss_clean');
            $this->form_validation->set_rules('contact_name','Contact Name','required|xss_clean');
            $this->form_validation->set_rules('mobile_no','Mobile #','required|xss_clean');
            $this->form_validation->set_rules('landline_no','Landline #','required|xss_clean');
            $this->form_validation->set_rules('fax','Fax','required|xss_clean');
            
            $data = array();
            $data['supplier_name'] = $this->input->post( 'supplier_name', TRUE );
            $data['address']       = $this->input->post( 'address', TRUE );
            $data['contact_name']  = $this->input->post( 'contact_name', TRUE );
            $data['mobile_no']     = $this->input->post( 'mobile_no', TRUE );
            $data['landline_no']   = $this->input->post( 'landline_no', TRUE );
            $data['fax']           = $this->input->post( 'fax', TRUE );
            if($this->form_validation->run()) {
               $aSupplier['supplier_name'] = $this->input->post( 'supplier_name', TRUE );   
               $aSupplier['address']       = $this->input->post( 'address', TRUE );   
               $aSupplier['contact_name']  = $this->input->post( 'contact_name', TRUE );   
               $aSupplier['mobile_no']     = $this->input->post( 'mobile_no', TRUE );   
               $aSupplier['landline_no']   = $this->input->post( 'landline_no', TRUE );   
               $aSupplier['fax']           = $this->input->post( 'fax', TRUE );   
               $supplier_id = $this->supplier_model->createSupplierInfo($aSupplier);
               if( !empty( $supplier_id ) ){
                  $this->session->set_flashdata( 'message', lang('successAdd') ); 
                  redirect(base_url() . 'supplier/index/' . $supplier_id); 
               } else {
                  $this->session->set_flashdata( 'message', 'There was an error inserting the data.' ); 
               }
            } else {
               $this->session->set_flashdata( 'message', validation_errors() );                 
               $this->load->view( 'supplier/form', $data );
            }
         break;
         case 'edit' :
            $this->form_validation->set_rules('supplier_name','Supplier Name','required|xss_clean');
            $this->form_validation->set_rules('address','Address','required|xss_clean');
            $this->form_validation->set_rules('contact_name','Contact Name','required|xss_clean');
            $this->form_validation->set_rules('mobile_no','Mobile #','required|xss_clean');
            $this->form_validation->set_rules('landline_no','Landline #','required|xss_clean');
            $this->form_validation->set_rules('fax','Fax','required|xss_clean');
            
            $data = array();
            $data['supplier_id']   = $this->input->post( 'id', TRUE );
            $data['supplier_name'] = $this->input->post( 'supplier_name', TRUE );
            $data['address']       = $this->input->post( 'address', TRUE );
            $data['contact_name']  = $this->input->post( 'contact_name', TRUE );
            $data['mobile_no']     = $this->input->post( 'mobile_no', TRUE );
            $data['landline_no']   = $this->input->post( 'landline_no', TRUE );
            $data['fax']           = $this->input->post( 'fax', TRUE );
            if($this->form_validation->run()) {
               $aSupplier['supplier_id']   = $this->input->post( 'id', TRUE );
               $aSupplier['supplier_name'] = $this->input->post( 'supplier_name', TRUE );   
               $aSupplier['address']       = $this->input->post( 'address', TRUE );   
               $aSupplier['contact_name']  = $this->input->post( 'contact_name', TRUE );   
               $aSupplier['mobile_no']     = $this->input->post( 'mobile_no', TRUE );   
               $aSupplier['landline_no']   = $this->input->post( 'landline_no', TRUE );   
               $aSupplier['fax']           = $this->input->post( 'fax', TRUE );   
               $this->supplier_model->updateSupplierInfo($aSupplier);
               $this->session->set_flashdata( 'message', lang('successAdd') ); 
               redirect(base_url() . 'supplier/index/' . $id);
            } else {
               $this->session->set_flashdata( 'message', validation_errors() );                 
               $this->load->view( 'supplier/form', $data );
            }
         break;
         case 'del' :
            $supplier_id = $this->input->post('recid',TRUE);
            $this->supplier_model->deleteSupplierInfo($supplier_id);
         break;
      }   
   }
   
}
