<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Applyhep extends MY_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		
	  //if($this->session->userdata('group_id')!=1) redirect('profails/profail');
	}
	
		
	function crud_contoh()
	{
		//if($this->session->userdata('logged_in')==FALSE) redirect('profails/profail'); // nanti onkan bahagian ni
		
			  if (isset($_POST['submit'])) {//insert rekord
				    $first_name = $_POST['firstname'];			
				    $last_name = $_POST['lastname'];
				    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";			
				    $result = $conn->query($sql);			
				    if ($result == TRUE) {			
				      echo "New record created successfully.";			
				    }else{
				      echo "Error:". $sql . "<br>". $conn->error;			
				    } 			
				    $conn->close(); 			
				  }
		 		if (isset($_POST['update'])) {//update rekod
				        $firstname = $_POST['firstname'];				
				        $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'"; 
				        $result = $conn->query($sql); 				
				        if ($result == TRUE) {				
				            echo "Record updated successfully.";				
				        }else{				
				            echo "Error:" . $sql . "<br>" . $conn->error;				
				        }				
				    }
				if (isset($_GET['id'])) {//view rekod			
				    $user_id = $_GET['id']; 				
				    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";				
				    $result = $conn->query($sql); 				
				    if ($result->num_rows > 0) {  
				        while ($row = $result->fetch_assoc()) {				
				            $first_name = $row['firstname'];				
				            $lastname = $row['lastname'];				
				            $email = $row['email'];				
				            $password  = $row['password'];				
				            $gender = $row['gender'];				
				            $id = $row['id'];				
				        }
				       }
				     }
				if (isset($_GET['id'])) {//delete rekod				
				    $user_id = $_GET['id'];				
				    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";				
				     $result = $conn->query($sql);				
				     if ($result == TRUE) {				
				        echo "Record deleted successfully.";				
				    }else{				
				        echo "Error:" . $sql . "<br>" . $conn->error;				
				    }				
				} 		
			else		
			$data['content']		= 'applyhep/skimpinjamanpelajar';
			$this->load->view('template/index',$data);
		}
	
		function skimpinjamanpelajar()
	{
		//if($this->session->userdata('logged_in')==FALSE) redirect('profails/profail'); // nanti onkan bahagian ni
		
			  if (isset($_POST['submit'])) {//insert rekord
				    $first_name = $_POST['firstname'];			
				    $last_name = $_POST['lastname'];
				    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";			
				    $result = $conn->query($sql);			
				    if ($result == TRUE) {			
				      echo "New record created successfully.";			
				    }else{
				      echo "Error:". $sql . "<br>". $conn->error;			
				    } 			
				    $conn->close(); 			
				  }
		 		if (isset($_POST['update'])) {//update rekod
				        $firstname = $_POST['firstname'];				
				        $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'"; 
				        $result = $conn->query($sql); 				
				        if ($result == TRUE) {				
				            echo "Record updated successfully.";				
				        }else{				
				            echo "Error:" . $sql . "<br>" . $conn->error;				
				        }				
				    }
				if (isset($_GET['id'])) {//view rekod			
				    $user_id = $_GET['id']; 				
				    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";				
				    $result = $conn->query($sql); 				
				    if ($result->num_rows > 0) {  
				        while ($row = $result->fetch_assoc()) {				
				            $first_name = $row['firstname'];				
				            $lastname = $row['lastname'];				
				            $email = $row['email'];				
				            $password  = $row['password'];				
				            $gender = $row['gender'];				
				            $id = $row['id'];				
				        }
				       }
				     }
				if (isset($_GET['id'])) {//delete rekod				
				    $user_id = $_GET['id'];				
				    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";				
				     $result = $conn->query($sql);				
				     if ($result == TRUE) {				
				        echo "Record deleted successfully.";				
				    }else{				
				        echo "Error:" . $sql . "<br>" . $conn->error;				
				    }				
				} 		
			else		
			$data['content']		= 'applyhep/skimpinjamanpelajar';
			$this->load->view('template/index',$data);
		}
	
	function f_01spp(){
		
		$data['content']		= 'applyhep/f_01spp';
		$this->load->view('template/index',$data);
		
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */