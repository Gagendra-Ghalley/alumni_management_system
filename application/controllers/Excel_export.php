<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {

	public function __construct(){
  
   parent::__Construct();
  date_default_timezone_set("Asia/Thimphu");
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->load->model('Staff_model','sm');
  $this->load->model('Agency_model','ag');
  $this->load->model('Holidays','hm');
  $this->load->model('Messages_model','mm');
  $this->load->model('ATD_model','atd');
  $this->load->model('csv_import_model');
  $this->header['messages'] = $this->mm->getMessages();
  $this->header['unreadm']=$this->mm->getCountMessages();
  $this->dataheader['header']=$this->header;
  $this->role=$this->session->userdata('role');
  $this->atd->checkloggedin();
  $this->load->model("excel_export_model");
   

  }
	
	function index()
	{

		 $this->load->view('template/includeheader',$this->dataheader);
		$data["registered_data"] = $this->excel_export_model->fetch_data();
		$this->load->view("excel_export_view", $data);
		$this->load->view('template/includedfooter2');
	}

	function action()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("FirstName", "CID", "Gender", "Department", "Year of Graduation", "Date", "Email");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$registered_data = $this->excel_export_model->fetch_data();

		$excel_row = 2;



		foreach($registered_data as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->FirstName);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->relatedUserId);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->gender);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->department);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->batch);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->email);

			$excel_row++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Registered Data.xls"');
		$object_writer->save('php://output');
	}

	
	
}

















































	