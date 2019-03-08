<?php
	if(isset($_POST["event"])){
		if(file_exists("txt/count_UMUM.txt")){
				$file = file("txt/count_UMUM.txt");
				$file2 = file("txt/antrian_UMUM.txt");
				$p = $file2[0] - $file[0];
					if($p < 0){
						echo 0;
					}else{
						$count =  $file[0]+1;
				// coding di bawah merupakan bentuk penambahan antrian
					$file_open = fopen("txt/count_UMUM.txt", "w");
					fputs($file_open,$count);
					fclose($file_open);
				}	
						
					
			}
	}

?>