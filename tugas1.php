<DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title> BIODATA </title>
	<style type="text/css">

	body{
		background: url(teknologi2.jpg) no-repeat  fixed;
		background-size:100% 100%;
		background-position: center;
		background-size: cover;
		}

    @font-face {
         font-family: digital;
         src: url(nasalization-rg.OTF);
         }
 
    p {
         font-family: digital;
         }
	</style>
	</head>
		<body>
		<?php
		$nama = "Triwin sthil"; 
		$nim = 192520008;
		$alamat = "Desa Plandi";
		$alamat_email = "triwinsthil0@gmail.com";
		$bidang_minat = "Design Grafis";
		$universitas = "Universitas Muhammadiyah Purworejo";
		?>
		
			<table border="4" cellspacing="5" cellpadding="20" align="center" valign="middle" >

		<tr>
            <td colspan="2" align= "center" style="background-color: #000077;">  <b> <font size="10" color ="white"><p> B I O D A T A </p></font> </b> </td> 
		</tr> 
      
		<tr > 
              <td align="left" style="background-color: #cccccf;"><p>nama: <?php echo $nama;?></p></td>
              <td rowspan="10" > <img src="aku.jpg" align="center" width="350"> </td>
		</tr>
      
		<tr>
              <td align="left" style="background-color: #cccccf;" ><p>nim: <?php echo $nim;?></p></td>
		</tr>
      
		<tr>
              <td align="left" style="background-color: #cccccf;"><p>alamat: <?php echo $alamat;?></p></li></td>
		</tr>
      
		<tr>
              <td align="left" style="background-color: #cccccf;"><p>alamat_email: <?php echo $alamat_email;?></p></td>
		</tr>
      
		<tr>
              <td align="left" style="background-color: #cccccf;"><p>bidang_minat: <?php echo $bidang_minat;?></p></td>
		</tr>
      
		<tr>
              <td align="left" style="background-color: #cccccf;"><p>universitas: <?php echo $universitas;?></p></td>
		</tr>
		
		
      
		</table>
		</body>	
</html>