<?php

$judul = "FORMULIR PERKAWINAN";
require('boot/fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();

foreach($dicoba as $dicoba_tampil){
    $pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10, $judul, '1', 1, 'C');
$pdf->Ln();
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(0 , 0, 'warga negara : '.$dicoba_tampil->warga , 0 , 1 , 'L' , false);
    $pdf->Cell(90 , 10, 'pada tanggal : '.$dicoba_tampil->tanggal , 0 , 0 , 'L' , false);
    $pdf->Cell(75 , 10, 'hari : '.$dicoba_tampil->hari , 0 , 0 , 'L' , false);
    $pdf->Cell(40 , 10, 'jam : '.$dicoba_tampil->jam , 0 , 1 , 'L' , false);
    $pdf->SetFont('Arial','B',11);
    $pdf->Ln();
    $pdf->Cell(100 , 5, 'mempelai pria' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'mempelai wanita' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    $pdf->Cell(40 , 5, 'nama keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakel , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakelw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'nama kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakec , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakecilw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'tempat/tgl lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->tempatlahir.'/'.$dicoba_tampil->tanggallahir , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->tempatlahirw.'/'.$dicoba_tampil->tanggallahirw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'umur', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->umur , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->umurw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->agama , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->agamaw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->pekerjaan , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->pekerjaanw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'alamat sekarang', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->alamatsek , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->alamatsekw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'alamat dahulu', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->alamatdul , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->alamatdulw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'sudah/belum', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->kawin , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->kawinw , 0 , 1 , 'L' , false);
    $pdf->Cell(40 , 5, 'pernah kawin', 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'nama istri/suami', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namaistri , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namasuamiw , 0 , 1 , 'L' , false);
    $pdf->Cell(40 , 5, 'sebelumnya', 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'anak-anak yang', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->anak , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->anakw , 0 , 1 , 'L' , false);
    $pdf->Cell(40 , 5, 'akan disahkan', 0 , 1 , 'L' , false);
    
    $pdf->SetFont('Arial','B',11);
    
    $pdf->Cell(100 , 5, 'Bapak' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'Bapak' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    
    $pdf->Cell(40 , 5, 'nama keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakel_bapak , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakel_bapakw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'nama kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakec_bapak , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakec_bapakw, 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'tempat/tgl lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->tempatlahir_bapak.'/'.$dicoba_tampil->tanggallahir_bapak , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->tempatlahir_bapakw.'/'.$dicoba_tampil->tanggallahir_bapakw , 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'umur', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->umur_bapak, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->umur_bapakw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->agama_bapak, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->agama_bapakw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->pekerjaan_bapak, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->pekerjaan_bapakw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'alamat', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->alamat_bapak , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->alamat_bapakw , 0 , 1 , 'L' , false);
    
     $pdf->SetFont('Arial','B',11);
     $pdf->Ln();
    $pdf->Cell(100 , 5, 'Ibu' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'Ibu' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    
     $pdf->Cell(40 , 5, 'nama keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakel_ibu , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakel_ibuw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'nama kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakec_ibu , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakec_ibuw, 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'tempat/tgl lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->tempatlahir_ibu.'/'.$dicoba_tampil->tanggallahir_ibu , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->tempatlahir_ibuw.'/'.$dicoba_tampil->tanggallahir_ibuw , 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'umur', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->umur_ibu, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->umur_ibuw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->agama_ibu, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->agama_ibuw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->pekerjaan_ibu, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->pekerjaan_ibuw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'alamat', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->alamat_ibu , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->alamat_ibuw , 0 , 1 , 'L' , false);
    
    $pdf->SetFont('Arial','B',11);
     $pdf->Ln();
    $pdf->Cell(100 , 5, 'Saksi Satu' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'Saksi Dua' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    
     $pdf->Cell(40 , 5, 'nama keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakel_saksi , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakel_saksituw , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'nama kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->namakec_saksi , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->namakec_saksituw, 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'tempat/tgl lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->tempatlahir_saksi.'/'.$dicoba_tampil->tanggallahir_saksi , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->tempatlahir_saksituw.'/'.$dicoba_tampil->tanggallahir_saksituw , 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'umur', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->umur_saksi, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->umur_saksituw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->agama_saksi, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->agama_saksituw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->pekerjaan_saksi, 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->pekerjaan_saksituw, 0 , 1 , 'L' , false);
    
     $pdf->Cell(40 , 5, 'alamat', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil->alamat_saksi , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil->alamat_saksituw , 0 , 1 , 'L' , false);
    
    
    
     
        
    
}

$pdf->Output();
?>