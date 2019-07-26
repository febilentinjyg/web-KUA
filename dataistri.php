<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<html>
<head>
    <style>
@import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
/*  padding-top: 20px;*/
  padding-bottom: 20px;
}
        
.judul {
    text-align: center;
    font-family: fantasy;
    font-size: 35px;
    color: bisque;
}
.content {
     width: 80%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     
     padding: 30px;
     text-align: left;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
/*opacity: 0.5px;*/
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
.bg {
     width: 100%;
/*     height: 100%;*/
     position: fixed;
     z-index: 0;
     float: left;
     left: 0;
}

        </style>
</head>
<body>
<img src="image/o.jpg" alt="gambar" class="bg"/>
<div class="content">
<h1 class="judul">FORMULIR UNTUK PENCATATAN PERKAWINAN</h1>
<form action="form.php" method="post">
<div class="container">
    <h1 class="well">DATA ISTRI</h1>
	<div class="col-lg-12 well">
	<div class="row">
        <input type="hidden" placeholder="Enter First Name Here.." class="form-control" value="pr" name="jk">
					<div class="col-sm-12">
                        <div class="form-group">
						  <label>Warga Negara</label>
                            <select name="warganegara" class="form-control">  
                                <option value="WNI">Warga Negara Indonesia</option>  
                                <option value="WNA">Warga Negara Asing</option>  
                                <option value="TK">Tanpa Kewarganegaraan</option>    
                            </select>
					   </div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Name Keluarga</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="namakeluarga">
							</div>
							<div class="col-sm-6 form-group">
								<label>Nama Kecil</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="namakecil">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Tempat Lahir</label>
								<input type="text" placeholder="" class="form-control" name="tempatlahir">
							</div>
							<div class="col-sm-6 form-group">
								<label>Tanggal Lahir</label>
								<input type="date" placeholder="" class="form-control" name="tanggallahir">
							</div>
						</div>
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Agama</label>
                                <select name="agama" class="form-control">  
                                    <option value="Islam">Islam</option>  
                                    <option value="Kristen">Kristen</option>  
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>  
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
							</div>
							<div class="col-sm-6 form-group">
								<label>Pekerjaan/Pangkat</label>
								<input type="text" placeholder="Enter Your Job Here.." class="form-control" name="pekerjaan">
							</div>
						</div>	
						<div class="form-group">
							<label>Alamat (Sekarang) </label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="alamat"></textarea>
						</div>
                        <div class="form-group">
							<label>Alamat (Dahulu) </label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="alamatdulu"></textarea>
						</div>
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Sudah/Belum Pernah Kawin?</label>
								<select name="status" class="form-control">  
                                    <option value="Pernah">Pernah</option>  
                                    <option value="Belum">Belum Pernah</option>  
                                </select>
							</div>
							<div class="col-sm-6 form-group">
								<label>Nama Istri/ Suami Dahulu</label>
								<input type="text" placeholder="" class="form-control" name="namaistri">
							</div>
						</div>
                        <div class="form-group">
						<label>Anak-anak yang akan disahkan dalam perkawinan</label>
						<input type="text" placeholder="" class="form-control" name="namaanak">
					</div>				
					</div>
                    
				</div>
	</div>
	</div>
    
    <div class="container">
    <h1 class="well">DATA BAPAK</h1>
	<div class="col-lg-12 well">
	<div class="row">
				
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nama Keluarga</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="namakeluarga2">
							</div>
							<div class="col-sm-6 form-group">
								<label>Nama Kecil</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="namakecil2">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Tempat Lahir</label>
								<input type="text" placeholder="" class="form-control" name="tempatlahir2">
							</div>
							<div class="col-sm-6 form-group">
								<label>Tanggal Lahir</label>
								<input type="date" placeholder="" class="form-control" name="tanggallahir2">
							</div>
						</div>
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Agama</label>
								<select name="agama2" class="form-control">  
                                    <option value="Islam">Islam</option>  
                                    <option value="Kristen">Kristen</option>  
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>  
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
							</div>
							<div class="col-sm-6 form-group">
								<label>Pekerjaan/Pangkat</label>
								<input type="text" placeholder="Enter Your Job Here.." class="form-control" name="pekerjaan2">
							</div>
						</div>	
						<div class="form-group">
							<label>Alamat/ Tempat Tinggal </label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="alamat2"></textarea>
                        </div>                   
		
					</div>
			
				</div>
	</div>
	</div>

    <div class="container">
    <h1 class="well">DATA IBU</h1>
	<div class="col-lg-12 well">
	<div class="row">
				
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nama Keluarga</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="namakeluarga3">
							</div>
							<div class="col-sm-6 form-group">
								<label>Nama Kecil</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="namakecil3">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Tempat Lahir</label>
								<input type="text" placeholder="" class="form-control" name="tempatlahir3">
							</div>
							<div class="col-sm-6 form-group">
								<label>Tanggal Lahir</label>
								<input type="date" placeholder="" class="form-control" name="tanggallahir3">
							</div>
						</div>
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Agama</label>
								<select name="agama3" class="form-control">  
                                    <option value="Islam">Islam</option>  
                                    <option value="Kristen">Kristen</option>  
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>  
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
							</div>
							<div class="col-sm-6 form-group">
								<label>Pekerjaan/Pangkat</label>
								<input type="text" placeholder="Enter Your Job Here.." class="form-control" name="pekerjaan3">
							</div>
						</div>	
						<div class="form-group">
							<label>Alamat/ Tempat Tinggal </label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="alamat3"></textarea>
                        </div>                   
		
					</div>
					
			 
				</div>
	</div>
	</div>
    
    
    <div class="container">
    <h1 class="well">DATA WALI PERTAMA</h1>
	<div class="col-lg-12 well">
	<div class="row">
				
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nama Keluarga</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="namakeluarga4">
							</div>
							<div class="col-sm-6 form-group">
								<label>Nama Kecil</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control" name="namakecil4">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Tempat Lahir</label>
								<input type="text" placeholder="" class="form-control" name="tempatlahir4">
							</div>
							<div class="col-sm-6 form-group">
								<label>Tanggal Lahir</label>
								<input type="date" placeholder="" class="form-control" name="tanggallahir4">
							</div>
						</div>
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Agama</label>
								<select name="agama4" class="form-control">  
                                    <option value="Islam">Islam</option>  
                                    <option value="Kristen">Kristen</option>  
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>  
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
							</div>
							<div class="col-sm-6 form-group">
								<label>Pekerjaan/Pangkat</label>
								<input type="text" placeholder="Enter Your Job Here.." class="form-control" name="pekerjaan4">
							</div>
						</div>	
						<div class="form-group">
							<label>Alamat/ Tempat Tinggal </label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="alamat4"></textarea>
                        </div>                   
		
					</div>
					
				
				</div>
	</div>
	</div>
    
    <center>
    <button type="submit" class="btn btn-lg btn-info">Submit</button>					
        <br>
        <br>
    <input type="button" class="btn2 btn-lg btn-info" value="BACK TO HOME" onclick="window.location = 'index.html';"/>
    <br>
    </center>
 </form>
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript">

		if($('body').scrollTop() >= 400){
			$(".navbar").css({"background-color":"#66D4FF","padding":"0px 40px","border-bottom":"1px solid #00AFE1"});
		} else {							// jika scroll ke atas
			$(".navbar").css({"background-color":"transparent","padding":"20px 40px","border-bottom":"none"});
		}
		
		$(document).ready(function(){

			$(window).scroll(function () {
			    var currentScroll = $('body').scrollTop();


			    if (currentScroll >= 400) {			// jika scroll ke bawah
			    	$(".navbar").css({"background-color":"#66D4FF","padding":"0px 40px","border-bottom":"1px solid #00AFE1"});
			    } else {							// jika scroll ke atas
			    	$(".navbar").css({"background-color":"transparent","padding":"20px 40px","border-bottom":"none"});
			    }
			});

		})
	</script>
    </div>
</body>
</html>

