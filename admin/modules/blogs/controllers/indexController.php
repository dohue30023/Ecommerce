<?php

function construct() {
	load_model('index');

}



function addAction() {

	$title;
	$user;
	$content;
	$create_date;
	$description;
	$image="";
	$errors = array();

	if(!empty($_POST['btn_submit'])){

		if(!empty($_POST['title'])){
			$title = $_POST['title'];
		}else{
			$errors[] = 'title không được rỗng';
		}

		if(!empty($_POST['user'])){
			$user = $_POST['user'];
		}else{
			$errors[] = 'user không được rỗng';
		}

		if(!empty($_POST['content'])){
			$content = $_POST['content'];
		}else{
			$errors[] = 'content không được rỗng';
		}

		if(!empty($_POST['description'])){
			$description = $_POST['description'];
		}else{
			$errors[] = 'description không được rỗng';
		}

		// check ảnh (image upload validation)
			$target_dir = "C:/xampp/htdocs/Test/STORE/public/uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {
				$errors[] = 'Vui lòng chọn ảnh.';
				$uploadOk = 0;
			} else {
				$check = getimagesize($_FILES["image"]["tmp_name"]);
				if ($check === false) {
					$errors[] = 'Tập tin không phải là ảnh.';
					$uploadOk = 0;
				}

				if (file_exists($target_file)) {
					$errors[] = 'Ảnh đã tồn tại trên server.';
					$uploadOk = 0;
				}

				if ($_FILES["image"]["size"] > 200000000) {
					$errors[] = 'Kích thước ảnh quá lớn.';
					$uploadOk = 0;
				}

				$allowed = array('jpg', 'png', 'jpeg', 'gif');
				if (!in_array($imageFileType, $allowed)) {
					$errors[] = 'Chỉ chấp nhận định dạng JPG, JPEG, PNG, GIF.';
					$uploadOk = 0;
				}
			}

			if ($uploadOk == 0) {
				// do nothing here; errors collected
			} else {
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					$image = "public/uploads/" . basename($_FILES["image"]["name"]);
				} else {
					$errors[] = 'Không thể lưu ảnh lên server.';
				}
			}

			if (empty($image)) {
				$errors[] = 'image không được rỗng';
			}

			if (!empty($errors)) {
				echo "<script type='text/javascript'> alert(" . json_encode(implode("\\n", $errors)) . "); </script>";
			}

		if (empty($errors)) {
		$create_date = date("d/m/Y",time());
		$data = [
			'title' =>$title,
			'content' =>$content,
			'user' =>$user,
			'create_date' =>$create_date,
			'description' => $description,
			'image' => $image
		];
			if(insert_blog($data)){
				
	        	echo " <script type='text/javascript'> alert('Thêm mới bài viết thành công');</script>";
			}else{
				
	        	echo " <script type='text/javascript'> alert('Thêm mới bài viết thất bại');</script>";
			}

		}
		else{
			
	        echo " <script type='text/javascript'> alert('Thêm mới bài viết thất bại haha');</script>";
		}

	}
	load_view('add');
	

}

function deleteAction() {
	$id = $_GET['id'];
	if(delete_blog_by_id($id)){
		echo "<script type='text/javascript'> alert('Xóa bài viết thành công'); window.location.href='?modules=blogs&controllers=index&action=list';</script>";
	}else{
		echo "<script type='text/javascript'> alert('Xóa bài viết thất bại'); window.location.href='?modules=blogs&controllers=index&action=list';</script>";
	}
}

function editAction() {

}

function listAction(){
	$keyword = '';
	if(!empty($_GET['s'])){
		$keyword = trim($_GET['s']);
		$data_tmp = searchBlogByTitle($keyword);
	} else {
		$data_tmp = getAll();
	}

// phan trang
	$page;
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page =1;
	}
	
	$numProduct = count($data_tmp);
	$productOnPage = 5;
	$num = ceil($numProduct/$productOnPage);
	if(!empty($_GET['page']) && $_GET['page']>$num){
		$page =$num;
	}
	$start = ($page - 1) * $productOnPage;
	$res =[];
	for ($i=$start; $i < $start+$productOnPage; $i++) { 
		if(isset($data_tmp[$i]))
        $res[] = $data_tmp[$i];
	};

	$data = [$res, $num, $page, $keyword];
	load_view('list',$data);
}
