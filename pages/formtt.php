<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<link rel="shortcut icon" href="logoc.jpg">

	<!-- Bootstrap Core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="../vendor/morrisjs/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<link href="../css/bootstrap-datepicker.min.css" rel="stylesheet">

	<link href="../js/datepicker.js" rel="stylesheet">

	<link href="../js/bootstrap-datepicker.min.js" rel="stylesheet">

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />

	<script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <script type="text/javascript">

  </script>
  <style type="text/css">
  	#abc{
  		padding-top: 10px;
  		padding-left: 100px;
  		padding-right: 100px;
  		}
  	#header{
  		margin: auto;
  	}
  	#header a{
  		margin-left: 50px;
  	}
  	#map{
  		float: left;
  		margin: auto;
  		padding: auto;

  	}
  	#info{
  		
  		
  		padding-left: 0px;
  		float: left;
  	}

  	#info p{
  		padding-left: 30px;
  	}
  	
  </style>
  <script type="text/javascript">
  	function validateform(){
  		var tencongty = document.getElementById('tencongty').value;
  		var tennguoidk = document.getElementById('tennguoidk').value;
  		var sdt = document.getElementById('sdt').value;
  		var email = document.getElementById('email').value;
  		var day = document.getElementById('day').value;
  		var start = document.getElementById('start').value;
  		var end = document.getElementById('end').value;
  		if(tencongty =="")
  			{alert('Bạn chưa nhập tên công ty');}
  		else if(tennguoidk=="")
  			{alert('Bạn chưa nhập tên người đăng ký');
  				}
  		else if(sdt =="")
  		{
  			alert('Bạn chưa nhập số điện thoại');
  		}
  		else if(email =="")
  		{
  			alert('Bạn chưa nhập email');
  		}
  		else if(day =="")
  		{
  			alert('Bạn chưa nhập ngày họp');
  		}
  		else if(start =="")
  		{
  			alert('Bạn chưa nhập giờ bắt đầu họp');
  		}
  		else if(end=="")
  			{
  				alert('Bạn chưa nhập giờ kết thúc');
  				}
  				else
  				{
  					return true;
  				}
  		return false;
  	}
  </script>
</head>
<body >
	 
	 <!-- <div id="page-wrapper"> -->
	 	<div id="abc" >
	 		<div id="header">
	 			<a href="http://openworldvietnam.com"><img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t31.0-8/23467104_1811787959121267_593812383519605313_o.jpg?oh=40fd9dac7ddd15b6f2d151b7169c934d&oe=5AF0C102" width="auto"></a>
	 		</div>
 		 <!-- <div class="container-fluid"> -->
    		<div class="row">
      		<div class="col-lg-12">
				<h1 align="center" >Đăng ký phòng họp</h1>
				
	<form method="POST" class = "form-group" action="adddk.php" onsubmit="return validateform()">
		
		<table  class="table table-striped table-bordered table-hover" id="dataTables-example">
	
		<tr>
				<td>Tên công ty:</td> 
				<td><input type="text" style="width: 600px;" class = "form-control" name="tencongty" id="tencongty" value=""></br></td>
				
				
		</tr>
		<tr>
				<td>Tên người đăng ký:</td>
				<td><input type="text" style="width: 600px;" class = "form-control" name="tennguoidk" id="tennguoidk" value=""></br></td>
		</tr>
		<tr>
				<td>SĐT liên hệ:</td>
				<td><input type="text" style="width: 600px;" class = "form-control" name="sdt" id="sdt" value=""></br></td>
		</tr>
		<tr>
				<td>Email liên hệ:</td> 
				<td><input type="text"style="width: 600px;" class = "form-control" name="email" id="email" value=""></br></td>
		</tr>
		<tr>
				<td>Chọn ngày họp:</td> 
				<td><input type="date" name="day" id="day"></br></td>
		</tr>
		<tr>
				<td>Thời gian bắt đầu:</td>
				<td><input type="text" name="start" id="start"></td>
		</tr>
		<tr>			
				<td>Thời gian kết thúc:</td> 
				<td><input type="text" name="end" id="end"></br></td></td>
		</tr>
		
		<tr>
				<td>Ghi chú</td> 
		<td><input type="text"style="width: 600px;" class = "form-control" name="email" value=""></br></td>
	</tr>
	
	</table>
	<input type="submit" name="submit" value="Book Now" >
	</form>
	<div id="map">
		<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCKPjQgQ1pSzkgIIuJPNzl7f3s86QD6a7M&callback=initMap' ></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="embedgooglemaps.com/">https://embedgooglemaps.com/en/</a></small></div><div><small><a href=""></a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(21.0236937,105.84191859999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(21.0236937,105.84191859999999)});infowindow = new google.maps.InfoWindow({content:'<strong>OpenWorldVietNam</strong><br>109 Trần Hưng Đạo, Hoàn Kiếm, Hà Nội<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	</div>
	
	
	<div id="info">
		<p>Công ty OpenWorld Việt Nam</p> 
		<p>Tầng 21, Tòa nhà Capital Tower, 109 Trần Hưng Đạo</p>
		<p>Phường Cửa Nam, Quận Hoàn Kiếm, Hà Nội</p>
		<p></p>
		<p></p>
		<p>Liên hệ: 0968.426.426</p>
		<p>Website: <a href="http://openworldvietnam.com">http://openworldvietnam.com</a></p>

	</div>

</div>
</div>
</div>
</div>
	

</body>
</html>