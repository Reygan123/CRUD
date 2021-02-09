  <?php
  $koneksi=mysqli_connect("localhost","root","","program_sederhana");
  //check connetion
  if(mysqli_connect_errno()){
  	echo "koneksi database gagal:".mysqli_connect_error();
  }
  ?>