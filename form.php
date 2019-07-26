<?php

$jk=$_POST['jk'];

//    data suami atau istri
    $warga_negara=$_POST['warganegara'];
    $namakeluarga=$_POST['namakeluarga'];
    $namakecil=$_POST['namakecil'];
    $tempatlahir=$_POST['tempatlahir'];
    $tanggallahir=$_POST['tanggallahir'];
    $agama=$_POST['agama'];
    $pekerjaan=$_POST['pekerjaan'];
    $alamat=$_POST['alamat'];
    $alamatdulu=$_POST['alamatdulu'];
    $status=$_POST['status'];
    $namaistri=$_POST['namaistri'];
    $namaanak=$_POST['namaanak'];
    
//    data bapak
    $namakeluarga2=$_POST['namakeluarga2'];
    $namakecil2=$_POST['namakecil2'];
    $tempatlahir2=$_POST['tempatlahir2'];
    $tanggallahir2=$_POST['tanggallahir2'];
    $agama2=$_POST['agama2'];
    $pekerjaan2=$_POST['pekerjaan2'];
    $alamat2=$_POST['alamat2'];
    
    //    data ibu
    $namakeluarga3=$_POST['namakeluarga3'];
    $namakecil3=$_POST['namakecil3'];
    $tempatlahir3=$_POST['tempatlahir3'];
    $tanggallahir3=$_POST['tanggallahir3'];
    $agama3=$_POST['agama3'];
    $pekerjaan3=$_POST['pekerjaan3'];
    $alamat3=$_POST['alamat3'];
    
//    data wali satu
    $namakeluarga4=$_POST['namakeluarga4'];
    $namakecil4=$_POST['namakecil4'];
    $tempatlahir4=$_POST['tempatlahir4'];
    $tanggallahir4=$_POST['tanggallahir4'];
    $agama4=$_POST['agama4'];
    $pekerjaan4=$_POST['pekerjaan4'];
    $alamat4=$_POST['alamat4'];


session_start();

if($jk == 'lk'){
    $data_suami_suami = array(
        'warga_negara' => $warga_negara,
        'namakeluarga'=>$namakeluarga,
        'namakecil'=>$namakecil,
        'tempatlahir'=>$tempatlahir,
        'tanggallahir'=>$tanggallahir,
        'agama'=>$agama,
        'pekerjaan'=>$pekerjaan,
        'alamat'=>$alamat,
        'alamatdulu'=>$alamatdulu,
        'status'=>$status,
        'namaistri'=>$namaistri,
        'namaanak'=>$namaanak
    );
    
    $data_suami_bapak = array(
        'namakeluarga2' => $namakeluarga2,
        'namakecil2' => $namakecil2, 
        'tempatlahir2' => $tempatlahir2,
        'tanggallahir2' => $tanggallahir2,
        'agama2' => $agama2, 
        'pekerjaan2'=>$pekerjaan2,
        'alamat2' => $alamat2,
    );
    
    $data_suami_ibu = array(
        'namakeluarga3' => $namakeluarga3,
        'namakecil3' => $namakecil3, 
        'tempatlahir3' => $tempatlahir3,
        'tanggallahir3' => $tanggallahir3,
        'agama3' => $agama3,
        'pekerjaan3'=>$pekerjaan3,
        'alamat3' => $alamat3,
    );
    
    $data_suami_wali = array(
        'namakeluarga4' => $namakeluarga4,
        'namakecil4' => $namakecil4, 
        'tempatlahir4' => $tempatlahir4,
        'tanggallahir4' => $tanggallahir4,
        'agama4' => $agama4, 
        'pekerjaan4'=>$pekerjaan4,
        'alamat4' => $alamat4,
    );

    $_SESSION['data_suami_suami'] = $data_suami_suami;
    $_SESSION['data_suami_bapak'] = $data_suami_bapak;
    $_SESSION['data_suami_ibu'] = $data_suami_ibu;
    $_SESSION['data_suami_wali'] = $data_suami_wali;
    
}

if($jk == 'pr'){
    $data_istri_istri = array(
        'warga_negara' => $warga_negara,
        'namakeluarga'=>$namakeluarga,
        'namakecil'=>$namakecil,
        'tempatlahir'=>$tempatlahir,
        'tanggallahir'=>$tanggallahir,
        'agama'=>$agama,
        'pekerjaan'=>$pekerjaan,
        'alamat'=>$alamat,
        'alamatdulu'=>$alamatdulu,
        'status'=>$status,
        'namaistri'=>$namaistri,
        'namaanak'=>$namaanak
    );
    
    $data_istri_bapak = array(
        'namakeluarga2' => $namakeluarga2,
        'namakecil2' => $namakecil2, 
        'tempatlahir2' => $tempatlahir2,
        'tanggallahir2' => $tanggallahir2,
        'agama2' => $agama2, 
        'pekerjaan2'=>$pekerjaan2,
        'alamat2' => $alamat2,
    );
    
    $data_istri_ibu = array(
        'namakeluarga3' => $namakeluarga3,
        'namakecil3' => $namakecil3, 
        'tempatlahir3' => $tempatlahir3,
        'tanggallahir3' => $tanggallahir3,
        'agama3' => $agama3, 
        'pekerjaan3'=>$pekerjaan3,
        'alamat3' => $alamat3,
    );
    
    $data_istri_wali = array(
        'namakeluarga4' => $namakeluarga4,
        'namakecil4' => $namakecil4, 
        'tempatlahir4' => $tempatlahir4,
        'tanggallahir4' => $tanggallahir4,
        'agama4' => $agama4, 
        'pekerjaan4'=>$pekerjaan4,
        'alamat4' => $alamat4,
    );

    $_SESSION['data_istri_istri'] = $data_istri_istri;
    $_SESSION['data_istri_bapak'] = $data_istri_bapak;
    $_SESSION['data_istri_ibu'] = $data_istri_ibu;
    $_SESSION['data_istri_wali'] = $data_istri_wali;
    
}






//var_dump($_SESSION['data_suami']);

require('fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0,5, $_SESSION['data_suami_suami']['warga_negara'], 0, 1, 'L');
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(0,5,'FORMULIR UNTUK', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(0,5,'PENCATATAN PERNIKAHAN', 0, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0,5,'Tatacara Perkawinan Dilangsungkan', 0, 0, 'C');

$pdf->SetFont('Times','B',11);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0 , 1, '' , 0 , 0 , 'L' , true);
$pdf->Ln();
$pdf->Cell(5, 5, 'NO' , 0 , 0 , 'C' , false);
$pdf->Cell(50, 5, 'PERTANYAAN' , 0 , 0 , 'C' , false);
$pdf->Cell(70, 5, 'MEMPELAI PRIA' , 0 , 0 , 'C' , false);
$pdf->Cell(0 , 5, 'MEMPELAI WANITA' , 0 , 1 , 'C' , false);
$pdf->Ln();
$pdf->Cell(0 , 0, '' , 0 , 0 , 'L' , true);
$pdf->Ln();

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '1. Nama Keluarga', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['namakeluarga']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['namakeluarga']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '2. Nama Kecil', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['namakecil']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_suami_suami']['namakecil']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '3. Tempat Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['tempatlahir']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['tempatlahir']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '4. Tanggal Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['tanggallahir']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['tanggallahir']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '5. Agama', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['agama']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['agama']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '6. Pekerjaan/Pangkat', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['pekerjaan']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['pekerjaan']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '7. Alamat/ Tempat', 0 , 0 , 'L' , false);
$pdf->Ln();
$pdf->Cell(50 , 5, '    Kediaman Sekarang', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['alamat']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['alamat']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '8. Alamat/ Tempat', 0 , 0 , 'L' , false);
$pdf->Ln();
$pdf->Cell(50 , 5, '    Kediaman Dahulu', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['alamatdulu']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['alamatdulu']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '9. Status Kawin', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['status']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['status']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '10. Nama Bekas', 0 , 0 , 'L' , false);
$pdf->Ln();
$pdf->Cell(50 , 5, '    Istri/Suami', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['namaistri']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['namaistri']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '11. Anak yang disahkan', 0 , 0 , 'L' , false);
$pdf->Ln();
$pdf->Cell(50 , 5, '     dalam perkawinan', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_suami']['namaanak']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_istri']['namaanak']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Times','B',11);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(5, 5, '' , 0 , 0 , 'C' , false);
$pdf->Cell(50, 5, '' , 0 , 0 , 'C' , false);
$pdf->Cell(70, 5, 'BAPAK' , 0 , 0 , 'C' , false);
$pdf->Cell(0 , 5, 'BAPAK' , 0 , 1 , 'C' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '1. Nama Keluarga', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_bapak']['namakeluarga2']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_bapak']['namakeluarga2']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '2. Nama Kecil', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_bapak']['namakecil2']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_bapak']['namakecil2']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '3. Tempat Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_bapak']['tempatlahir2']}" , 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_istri_bapak']['tempatlahir2']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '4. Tanggal Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_bapak']['tanggallahir2']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_bapak']['tanggallahir2']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '5. Agama', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_bapak']['agama2']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_bapak']['agama2']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '6. Pekerjaan/Pangkat', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_bapak']['pekerjaan2']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_bapak']['pekerjaan2']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '7. Alamat/ Tempat Tinggal', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_bapak']['alamat2']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_bapak']['alamat2']}" , 0 , 0 , 'L' , false);

//----------------------------------------------------------------------------------------------//

$pdf->SetFont('Times','B',11);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(5, 5, '' , 0 , 0 , 'C' , false);
$pdf->Cell(50, 5, '' , 0 , 0 , 'C' , false);
$pdf->Cell(70, 5, 'IBU' , 0 , 0 , 'C' , false);
$pdf->Cell(0 , 5, 'IBU' , 0 , 1 , 'C' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '1. Nama Keluarga', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_ibu']['namakeluarga3']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_ibu']['namakeluarga3']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '2. Nama Kecil', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_ibu']['namakecil3']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_ibu']['namakecil3']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '3. Tempat Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_ibu']['tempatlahir3']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_ibu']['tempatlahir3']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '4. Tanggal Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_ibu']['tanggallahir3']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_ibu']['tanggallahir3']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '5. Agama', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_ibu']['agama3']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_ibu']['agama3']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '6. Pekerjaan/Pangkat', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_ibu']['pekerjaan3']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_ibu']['pekerjaan3']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '7. Alamat/ Tempat Tinggal', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_ibu']['alamat3']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_ibu']['alamat3']}" , 0 , 0 , 'L' , false);

//-----------------------------------------------------------------------------------------------//

$pdf->SetFont('Times','B', 11);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(5, 5, '' , 0 , 0 , 'C' , false);
$pdf->Cell(50, 5, '' , 0 , 0 , 'C' , false);
$pdf->Cell(70, 5, 'SAKSI PERTAMA' , 0 , 0 , 'C' , false);
$pdf->Cell(0 , 5, 'SAKSI KEDUA' , 0 , 1 , 'C' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '1. Nama Keluarga', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_wali']['namakeluarga4']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_wali']['namakeluarga4']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '2. Nama Kecil', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_wali']['namakecil4']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_wali']['namakecil4']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '3. Tempat Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_wali']['tempatlahir4']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_wali']['tempatlahir4']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '4. Tanggal Lahir', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_wali']['tanggallahir4']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_wali']['tanggallahir4']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '5. Agama', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_wali']['agama4']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_wali']['agama4']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '6. Pekerjaan/Pangkat', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_wali']['pekerjaan4']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_wali']['pekerjaan4']}" , 0 , 0 , 'L' , false);

$pdf->SetFont('Arial','',11);
$pdf->Ln();
$pdf->Cell(50 , 5, '7. Alamat/ Tempat Tinggal', 0 , 0 , 'L' , false);
$pdf->Cell(10 , 5, ':', 0 , 0 , 'L' , false);
$pdf->Cell(75 , 5, "{$_SESSION['data_suami_wali']['alamat4']}" , 0 , 0 , 'L' , false);
$pdf->Cell(0 , 5, "{$_SESSION['data_istri_wali']['alamat4']}" , 0 , 1 , 'L' , false);

//--------------------------------------------------------------------------------------------------//

$pdf->Ln();
$pdf->Cell(0 , 0, '' , 0 , 0 , 'L' , true);

$pdf->Output();

?>   