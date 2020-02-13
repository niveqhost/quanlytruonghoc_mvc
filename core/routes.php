<?php
	define("PATH", "http://localhost/crud_mvc_quanlytruonghoc/");
	//Tạo ra một mảng các controller sẽ được khai báo trong website
	$controllers = array(
		'home'	=>	['index','login'],
		'teacher'	=>	['editteacher', 'teacherlist', 'addteacher', 'removeteacher', 'sortteacher'],
		'student' => ['studentlist', 'removestudent', 'editstudent', 'addstudent',
			'sortstudent', 'search']
	);

	if(isset($_GET['controller'])) {
		$controller = $_GET['controller'];
		if(isset($_GET['action'])){
			$action = $_GET['action'];
		}else{
			$action = 'index';
		}
	}else{
		$controller = 'home';
		$action = 'index';
	}
	
	//Kiểm tra sự tồn tại của controller và action do người dùng gửi yêu cầu
	if(!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){

		$controller = 'page';
		$action = 'error';
	}

	//Nhúng file định nghĩa controller
	include_once("controllers/C_". $controller. ".php");

	//Tạo tên lớp trong controller tương ứng
	$class = str_replace("_", "", ucwords($controller,"_"));

	//Khởi tạo đối tượng có kiểu $class
	$controller = new $class();
	//Truy cập tới phương thức $action trong $controller
	$controller->$action();
?>












