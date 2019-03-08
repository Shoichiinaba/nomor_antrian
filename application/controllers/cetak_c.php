<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_c extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('list_m');
		$this->load->library('pdf');
		}
		function index()
	{
		
	}		
		 function laptrx(){
        
			if ($this->session->userdata('login') == false){
        
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(45);
        $pdf->Cell(100,0,'Laporan Antrian Pasien',0,0,'C');
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(0,0,150);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(0,200,0);
        $header = array('ID ', 'Jenis Layanan', 'Nama', 'Jenis Kelamin', 'Alamat', 'Tanggal Periksa','Phone');
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
        $w = array(14, 25, 35, 25,30, 30, 25);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = false;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
    foreach ($this->list_m->cetak() as $row):
        $pdf->Cell($w[0],6,$row->ID,'LR',0,'L',$fill); 
        $pdf->Cell($w[1],6,$row->jenis_layanan,'LR',0,'L',$fill);
        $pdf->Cell($w[2],6,$row->nama,'LR',0,'L',$fill);
        $pdf->Cell($w[3],6,$row->jenis_kelamin,'LR',0,'L',$fill);
        $pdf->Cell($w[4],6,$row->alamat,'LR',0,'L',$fill);
        $pdf->Cell($w[5],6,$row->tgl_periksa,'LR',0,'L',$fill);
        $pdf->Cell($w[6],6,$row->notel,'LR',0,'L',$fill);
        $pdf->Ln();
        $fill = !$fill;
    endforeach;
    $pdf->Cell(array_sum($w),0,'','T');
        
        $pdf->Output();
        

    }else { redirect('cetak_c'); }

	}
	
}