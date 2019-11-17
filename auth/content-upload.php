<?php
// include_once '../php/db.php';
$conn = mysqli_connect('134.209.40.0', 'root', 'testpass','registration');
// $conn->"SET ingres_charset( UTF-8)";
// Check connection


ini_set('display_errors','On');
error_reporting(E_ALL | E_STRICT);
//Обработка
	 if(isset($_POST['upload'])){
	 		$name = $_POST['name'];
	 		$email = $_POST['email'];
	 			
	 		$dob = $_POST['dob'];
	 		$phone = $_POST['phone'];
	 		$price = $_POST['price'];
	 		$faculty = $_POST['faculty'];
	 			$subjects = $_POST['subjects'];
	 				$gpa = $_POST['gpa'];
	 				
	 				$info = $_POST['info'];
	 						



	 		
			$name=$conn->real_escape_string($name);
			$email=$conn->real_escape_string($email);
				
			$dob=$conn->real_escape_string($dob);
            $phone=$conn->real_escape_string($phone);
            $price=$conn->real_escape_string($price);
			$faculty=$conn->real_escape_string($faculty);
			$subjects=$conn->real_escape_string($subjects);
			$gpa=$conn->real_escape_string($gpa);
						

				$info=$conn->real_escape_string($info);
					
	 	//Запрещенные к загрузке файлы. Подтягивает из тхт файла и создаем массив
		$data = file_get_contents('data.txt'); 
		$blacklist = explode("\r\n", $data); 
				
		//Проверка соответствия загруженного аудиофайла и блэклиста
		foreach($blacklist as $item):
			if(preg_match("/$item$/", $_FILES['file_name']['name'])) exit('Расширение файла не подходит!'); 
		endforeach; 
		//Проверка загружаемого файла через тип MIME
		$type = getimagesize($_FILES['file_name']['tmp_name']);
	
		//Проверка. Если есть тип и он равен одному из разрешенных для загрузки типов, то идем дальше
		if($type && ($type['mime'] == 'image/png' || $type['mime'] == 'image/jpg' || $type['mime'] == 'image/jpeg')){
			
			//Проверка на соответствие определенного размера
			if($_FILES['file_name']['size'] < 1000000 * 1024){
				
				$upload = 'images/'.$_FILES['file_name']['name'];
				
				//Если директория для загрузки существуем - грузим, если нет - то создаем и грузим. 
				if(file_exists('images/')){
											
			          if(move_uploaded_file($_FILES['file_name']['tmp_name'], $upload)) { 
			          
			          $img_save = "INSERT INTO `candidates`(`name`, `email`, `dob`,`phone`,`price`, `faculty`, `subjects`, `gpa`, `info`, `photo`) VALUES ('$name','$email','$dob','$phone','$price','$faculty','$subjects','$gpa','$info','$upload')";
			         $s=  $conn->query($img_save);
			         	if ($s) {
			         	 	header('Location: index.php');
			         		# code...
			         	}else{
			         		echo "error";
			         	}
			      }
				          else {echo 'Ошибка при загрузке'; } 
				}
				else { 
					mkdir("images/");
					//Перемещаем
				          if(move_uploaded_file($_FILES['file_name']['tmp_name'], $upload))  echo 'Файл успешно загружен!'; 
				          else echo 'Ошибка при загрузке';  
				}
			}

			else echo 'Файл большого объема'.'<br>'; 
		}

		else exit('Тип файла не подходит'.'<br>'); 

}
else {
	    
			          $img_save = "INSERT INTO `candidates`(`name`, `email`, `dob`,`phone`,`price`, `faculty`, `subjects`, `gpa`, `info`, `photo`) VALUES ('$name','$email','$dob','$phone','$price','$faculty','$subjects','$gpa','$info','$upload')";
			         $s =  $conn->query($img_save);
			         	if ($s) {
			         	 	header('Location: index.php');

			         		# code...
			         	}else{
			         		echo "error";
			         	}
}

	

?>
