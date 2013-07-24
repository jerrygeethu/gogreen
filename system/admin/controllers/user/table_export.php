<?php
class Table_export extends Controller {

	function Table_export()
	{
		parent::Controller();

		// Here you should add some sort of user validation
		// to prevent strangers from pulling your table data
	}

	function index($table_name)
	{
		$query = $this->db->get($table_name);

		if(!$query)
			return false;

		// Starting the PHPExcel library
		$this->load->library('PHPExcel');
		$this->load->library('PHPExcel/IOFactory');

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setTitle("export")->setDescription("none");

		$objPHPExcel->setActiveSheetIndex(0);

		// Field names in the first row
		$fields = $query->list_fields();
		$col = 0;
		foreach ($fields as $field)
		{
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
			$col++;
		}

		// Fetching the table data
		$row = 2;
		foreach($query->result() as $data)
		{
			$col = 0;
			foreach ($fields as $field)
			{
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
				$col++;
			}

			$row++;
		}

		$objPHPExcel->setActiveSheetIndex(0);

		$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');

		// Sending headers to force the user to download the file
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Products_'.date('dMy').'.xls"');
		header('Cache-Control: max-age=0');

		$objWriter->save('php://output');
	}

}
?>
