<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sanpham_check extends CI_Controller {

	
	public function index()
	{
		$this->load->model('model_sanphamcheck');
		$datasp = $this->model_sanphamcheck->getSP_sql();
		$datasp = array('mangsp' => $datasp);


		$this->load->view('sanpham_check',$datasp);
	}

	public function editSP($idnhanduoc)
	{
		$this->load->model('model_sanphamcheck');
		$ketquaid = $this->model_sanphamcheck->getID($idnhanduoc);
		$ketquaid = array('ketqua_id' => $ketquaid);

		//đưa dữ liệu và view
		$this->load->view('check_sanpham', $ketquaid, FALSE);
	}

	public function updateSP()
	{	
		$id = $this->input->post('id_sanpham');
		$loai = $this->input->post('loai_sanpham');
		$ten = $this->input->post('ten_sanpham');	
		$gia = $this->input->post('gia_sanpham');
		$mota = $this->input->post('mota_sanpham');
		$sl = $this->input->post('sl_sanpham');

		/*code xử lý ảnh*/

		$target_dir = "File_upload/";
		$target_file = $target_dir . basename($_FILES["hinh_sanpham"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
    		$check = getimagesize($_FILES["hinh_sanpham"]["tmp_name"]);
   			if($check !== false) {
     	 		echo "File is an image - " . $check["mime"] . ".";
      	  		$uploadOk = 1;
    		} 
    		else {
        		echo "File is not an image.";
        		$uploadOk = 0;
    		}
		}
		// Check file size
		if ($_FILES["hinh_sanpham"]["size"] > 5000000) {
    		echo "Tệp ảnh quá lớn";
    		$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
    		// echo "Chỉ chấp nhận JPG, JPEG, PNG & GIF files";
    		$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
    	echo "";
		// if everything is ok, try to upload file
		} else {
    		if (move_uploaded_file($_FILES["hinh_sanpham"]["tmp_name"], $target_file)) {
      	 		//echo "File ảnh". basename( $_FILES["avatar"]["name"]). " đã cập nhật";
    		} else {
        		echo "Có lỗi trong việc upload ảnh";
    		}
		}
		$avatar = basename($_FILES["hinh_sanpham"]["name"]);

		if($avatar) // nếu có ảnh
		{
			echo $avatar = base_url()."File_upload/". basename($_FILES["hinh_sanpham"]["name"]) ;
		}
		else // nếu ko thì lấy ảnh cũ hidden avatar_old
		{
			$avatar = $this->input->post('avatar_old');
		}
		
		$active = $this->input->post('active');

		//gọi hàm model
		$this->load->model('model_sanphamcheck');
		if($this->model_sanphamcheck->updateSP_sql($id,$loai,$ten,$gia,$mota,$sl,$avatar,$active))
		{
			$this->load->view('success_view');
		}
		else
		{
			echo "UPDATE THẤT BẠI";
		}
	}
}