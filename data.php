<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MENU 2</title>
<style>
	body {
    background:url(image19.jpg);
    font-family: Arial, Helvetica, sans-serif;}
  input[type=text], select{
  width: 500px;
  margin: 15px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-top: 6px;
  margin-bottom: 16px;
  
}

select{
  width: 525px;
  margin: 15px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-top: 6px;
  margin-bottom: 16px;
  
}

label {
  color: white;
}
tr,td{
  width: auto;
}

input[type=submit] {
  background-color: green;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: white;
}
fieldset{
	width: 50%;
  padding: 10px;
	margin: 0 auto;
	border: none;

  opacity: 0.7;
}
form {
  width: 500px;
}
</style>
</head>
<body>
<fieldset>
  <h1 style="color: white; text-align: center;">Data Pasien Virus Covid-19</h1>
  <table>
      <form method="post">
  <tr>
   <td><label for="cars">Nama Wilayah</label></td>
   <td>
    <select name="wilayah">
    <option value="">--Pilih Wilayah--</option>
    <option value="DKI Jakarta">DKI Jakarta</option>
    <option value="Jawa Barat">Jawa Barat</option>
    <option value="Banten">Banten</option>
    <option value="Jawa Tengah">Jawa Tengah</option>
   </td> 
  </tr>

</select>
<tr>
    <td><label>Jumlah Positif</label></td>
    <td><input type="text" name="jmlpositif"></td>
</tr>
<tr>
    <td><label>Jumlah Dirawat</label></td>
    <td><input type="text" name="jmldirawat"></td>
</tr>
<tr>
    <td><label>Jumlah Sembuh</label></td>
    <td><input type="text" name="jmlsembuh"></td>
</tr>
<tr>
    <td><label>Jumlah Meninggal</label></td>
    <td><input type="text" name="jmlmeninggal"></td>
</tr>
<tr>
    <td><label>Nama Operator</label></td>
    <td><input type="text" name="nmoperator"></td>
</tr>
<tr>
    <td><label>NIM Mahasiswa</label></td>
    <td><input type="text" name="nim_mahasiswa"></td>
</tr>
<tr>
    <td><input type="submit" name="tambah" value="INPUT DATA" class="btn"></td>
</tr>
</form>
</table>
</fieldset>

<?php 
        if(isset($_POST["tambah"])){
          $myFile = fopen("datapasien.txt", "w") ;
          fwrite($myFile, implode("|", $_POST));
       	   fclose($myFile);

          $content = file_get_contents("datapasien.txt");
          $datas = explode("|", $content);
          
          $wilayah = $datas[0];
          $positif = $datas[1];
          $dirawat = $datas[2];
          $sembuh = $datas[3];
          $meninggal = $datas[4];
          $operator = $datas[5];
          $nim = $datas[6];
        
      ?>
      <style type="text/css">
          tr {
            color: white; 
          }
          table {
            width: 50%;
          }
      </style>
      <body style="background-size: cover; background-image: url('image19.jpg');" >
      
      
      <div style="text-align:center; color: white">
        <?php 
          echo "Data Pemantauan Covid19 Wilayah  ".$wilayah."<br>";
          echo "<td> Per ".date('d F Y h:i:s', time()). "<br>";
          echo $operator."/".$nim."<br>";
        ?>

        <table border=1 align="center" style="text-align:center">
        <thead>
          <tr>
            <th>POSITIF</th>
            <th>DIRAWAT</th>
            <th>SEMBUH</th>
            <th>MENINGGAL</th>
          </tr>
          </thead>

          <tbody>
            <tr>
              <td><?= $positif; ?></td>
              <td><?= $dirawat; ?></td>
              <td><?= $sembuh; ?></td>
              <td><?= $meninggal; ?></td>
            </tr>
          </tbody>
        </table>

      <?php } ?>
      </div>
</body>
</html>
