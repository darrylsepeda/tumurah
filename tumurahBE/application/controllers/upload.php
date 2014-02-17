<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {
	
    public function test(){
        echo $printitem['B'] = $this->oneline_item($this->tumurah_model->product_category(),'product_category_id','description');
    }
    
    public function oneline_item($result,$id,$value){
        $item = $result;
        $printitem = "";
        foreach($item->result_array() as $eachitem){
            $printitem.=",".$eachitem[$id]." - ".$eachitem[$value];
        }
        $printitem = substr($printitem,1);
        return $printitem;
    }
    
    public function upload_page(){
        $this->load->view('backend/page/upload_page');
    }
    
    public function dld_pdt()
    {
        //DOWNLOAD TEMPLATE
        ob_clean();
		require_once APPPATH.'libraries/PHPExcel/PHPExcel.php';
		$objPHPExcel = new PHPExcel();
									 
		$objPHPExcel->setActiveSheetIndex(0);
		$excel=$objPHPExcel->getActiveSheet();
        
		$excel->getColumnDimension('A')->setWidth(20);
		$excel->getColumnDimension('B')->setWidth(20);
		$excel->getColumnDimension('C')->setWidth(20);
		$excel->getColumnDimension('D')->setWidth(15);
        $excel->getColumnDimension('E')->setWidth(20);
		$excel->getColumnDimension('F')->setWidth(15);
        $excel->getColumnDimension('G')->setWidth(15);
        $excel->getColumnDimension('H')->setWidth(15);
        $excel->getColumnDimension('I')->setWidth(15);
        $excel->getColumnDimension('J')->setWidth(15);
        $excel->getColumnDimension('K')->setWidth(15);
        $excel->getColumnDimension('L')->setWidth(15);
        $excel->getColumnDimension('M')->setWidth(15);
		
		$excel->setCellValue('A1','product_manufacture_id');
        $excel->setCellValue('B1','product_category_id');
        $excel->setCellValue('C1','product_status_id');
        $excel->setCellValue('D1','parent_id');
        $excel->setCellValue('E1','name');
        $excel->setCellValue('F1','description');
        $excel->setCellValue('G1','stock_level');
        $excel->setCellValue('H1','weight_kg');
        $excel->setCellValue('I1','colour');
        $excel->setCellValue('J1','size_cm');
        $excel->setCellValue('K1','price_old');
        $excel->setCellValue('L1','price_current');
        $excel->setCellValue('M1','currency');
        
        $printitem['A'] = $this->oneline_item($this->tumurah_model->product_manufacture(),'product_manufacture_id','description');
        $printitem['B'] = $this->oneline_item($this->tumurah_model->product_category(),'product_category_id','description');
        $printitem['C'] = $this->oneline_item($this->tumurah_model->product_status(),'product_status_id','description');
        
        for($row=2;$row<=257;$row++){
            $alpha1 = array('A','B','C');
            foreach($alpha1 as $eachalpha1){
            $objValidation = $objPHPExcel->getActiveSheet()->getCell($eachalpha1.$row)->getDataValidation();
            $objValidation->setType( PHPExcel_Cell_DataValidation::TYPE_LIST );
            $objValidation->setErrorStyle( PHPExcel_Cell_DataValidation::STYLE_INFORMATION );
            $objValidation->setAllowBlank(false);
            $objValidation->setShowInputMessage(true);
            $objValidation->setShowErrorMessage(true);
            $objValidation->setShowDropDown(true);
            $objValidation->setErrorTitle('Input error');
            $objValidation->setError('Value is not in list.');
            $objValidation->setPromptTitle('Pick from list');
            $objValidation->setPrompt('Please pick a value from the drop-down list.');
            $objValidation->setFormula1('"'.$printitem[$eachalpha1].'"');
            }
            
            $alpha = array('G','H','J','K','L');
            foreach($alpha as $eachalpha){
            $objValidation2 = $objPHPExcel->getActiveSheet()->getCell($eachalpha.$row)->getDataValidation();
            $objValidation2->setType( PHPExcel_Cell_DataValidation::TYPE_WHOLE );
            $objValidation2->setErrorStyle( PHPExcel_Cell_DataValidation::STYLE_STOP );
            $objValidation2->setAllowBlank(true);
            $objValidation2->setShowInputMessage(true);
            $objValidation2->setShowErrorMessage(true);
            $objValidation2->setErrorTitle('Input error');
            $objValidation2->setError('Only numbers are allowed!');
            $objValidation2->setPromptTitle('Allowed input');
            $objValidation2->setPrompt('Only numbers are allowed.');
            $objValidation2->setFormula1(0);
            $objValidation2->setFormula2(1000000000);
            }
        }	
        
        $row=10;
		
		$format = 'xlsx'; 
		$engine = 'Excel2007'; 
		$content_type = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'; 
		$filename = 'Product'.date('dmYHis');
		
		$filename = preg_replace('/[^0-9a-z\_\-\(\) ]+/is', ' ', $filename) . '.' . $format; 
		
		header('Content-Type: ' . $content_type); 
		header('Content-Disposition: attachment;filename="' . $filename . '"'); 
		header('Cache-Control: max-age=0'); 
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $engine); 
		$objWriter->save('php://output');
    }
    
    function uld_exl(){
        $file_parts=pathinfo($_FILES['file_excel']['name']);
        $filename=$_FILES['file_excel']['name'];
        require_once APPPATH.'libraries/PHPExcel/PHPExcel.php';
        $file = $_FILES['file_excel']['tmp_name'];
        
        if($file_parts['extension']=='xlsx'){
            $reader = 'Excel2007'; 
        }else if($file_parts['extension']=='xls'){
            $reader = 'Excel5'; 
        }else{
            $this->session->set_flashdata('errors','Check Your File Type');
            redirect('ujiannasional/entry_examscore');
        }
         
        $objReader = PHPExcel_IOFactory::createReader($reader); 
         
        if (method_exists($objReader, 'setReadDataOnly')) { 
            $objReader->setReadDataOnly(true); 
        } 
 
        $objPHPExcel = $objReader->load($file); 
        $objWorksheet = $objPHPExcel->getActiveSheet(); 
        $numrows = $objWorksheet->getHighestRow(); 
        $numcolumns = ord($objWorksheet->getHighestColumn());
 
        //GET DATA Excel /row
        for($i=2;$i<$numrows+1;$i++){
            echo $objWorksheet->getCellByColumnAndRow(0, $i)->getValue();
        }
        
//        $data['academicyear'] = explode('.',$this->security->xss_clean(strip_image_tags($this->input->post('academicyear'))));
//        $data['idtrmatapelajaranun'] = $this->security->xss_clean(strip_image_tags($this->input->post('idtrmatapelajaranun')));
//        $data['idruang'] = $this->security->xss_clean(strip_image_tags($this->input->post('idruang')));
//        
//        $student_table = $this->ujiannasional_model->get_allocated_student_list($data);
//        $student_table = $student_table->result_array();
//        $input['idtrjadwalujianun'] = $student_table[0]['idtrjadwalujianun'];
//        
//        for($i=0;$i<count($tmp_nis);$i++){
//            if($tmp_nis[$i]!=''){
//                $input['nis']=$tmp_nis[$i];
//                $input['nilai']=$tmp_nilai[$i];
//                $this->ujiannasional_model->update_statushadir_pesertaun($input);
//            }
//        }
//        
//        if($input['idtrjadwalujianun']!=''){
//            $this->ujiannasional_model->insert_trentrinilaiun($input['idtrjadwalujianun']);
//        }
        
//        echo "<script type='text/javascript'>";
//        echo "window.close();";
//        echo "</script>";
    }
}