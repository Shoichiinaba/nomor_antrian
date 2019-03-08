<?php 
	if((isset($_POST["event"]) and isset($_POST["now"])) and ($_POST["event"] == "lihat")){
				if(file_exists("txt/antrian_UMUM.txt")){
					$file_antrian = file("txt/antrian_UMUM.txt");
					$nomor_antrian = $_POST["now"];
							$count = $file_antrian[0]-$nomor_antrian;
							echo $count;
					}
				
			}
?>