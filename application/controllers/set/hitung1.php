<?php 
	// ini adalah program untuk membaca nomor antian
		if((isset($_POST["event"])) and ($_POST["event"] == "lihat")){
			if(file_exists("txt/count_BPJS.txt")){
				$file = file("txt/count_BPJS.txt");
						echo ($file[0] == 1)?0:$file[0]-1;
			}
		}
		
		
?> 