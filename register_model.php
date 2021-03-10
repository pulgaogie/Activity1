<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class register_model extends CI_Model
{
	public function get_register(){

		$result = $this->db->get('register');

		return $result;
	}
	public function get_student(){

		$result = $this->db->get('entrance');

		return $result;
	}


	public function registration_submit()
	{


		$studentnum =	(string)	$this->input->post('studentnum');
		$fullname =		(string)	$this->input->post('fullname');
		$username =		(string)	$this->input->post('username');
		$password =		(string)	$this->input->post('password');
		$course =		(string)	$this->input->post('course');
		$yrlevel =		(string)	$this->input->post('yrlevel');
		$contact =		(string)	$this->input->post('contact');
		$image =		(string)	$this->input->post('image');
		$guardian =		(string)	$this->input->post('guardian');
		

		$data = array(
			        'student_num' => $studentnum,
			        'fullname' => $fullname,
			        'username' => $username,
			        'password' => $password,
			        'course' => $course,
			        'yrlevel' => $yrlevel,
			        'contact' => $contact,
			        'image' => $image,
			        'guardian' => $guardian

			);

		 $response1=$this->db->insert('register', $data);

			if($response1)
			{
				$save="<script>confirm('Sucessfully save!')";
				if($save==true){

					redirect('account/index');
				}
				
				
			}
			else
			{

				echo "<h1><script type='text/javascript'> confirm('There was an error')</script></h1>";
			}

}
public function user_admin()
	{


		$username =	    (string)	$this->input->post('username');
		$password=		(string)	$this->input->post('password');
		$fullname =		(string)	$this->input->post('fullname');
		$address=		(string)	$this->input->post('address');
		$contact =		(string)	$this->input->post('contact');
		$profile =		(string)	$this->input->post('profil_pic');
		

		$data = array(
			        'username' => $username,
			        'password' => $password,
			        'fullname' => $fullname,
			        'address' => $address,
			        'contact' => $contact,
			        'profile' => $profile

			);

		 $response2=$this->db->insert('admin_info', $data);

			if($response2)
			{
				$save="<script>confirm('Sucessfully save!')";
				if($save==true){

					redirect('account/login');
				}
				
				
			}
			else
			{

				echo "<h1><script type='text/javascript'> confirm('There was an error')</script></h1>";
			}

}
	public function enter()
	{


		$studentnum =	(string)	$this->input->post('studentnum');
		$signed_in =	(string)	$this->input->post('In');
		$data = array(
			        'student_num' => $studentnum,
			        'signed' => $signed_in,
			        
			);

			$responce2 = $this->db->insert('entrance', $data);

			if($responce2)
			{
				echo "<script type='text/javascript'> confirm('The data successfully save!!')</script>";
				}else{

				echo "<script type='text/javascript'> confirm('There was an error!!')</script>";
				
			}


	 }

 	public function exit()
	{


			$studentnum =	(string)	$this->input->post('studentnum');
			$signed_out =	(string)	$this->input->post('Out');
		

			$data = array(
			        'student_num' => $studentnum,
			        'signed' => $signed_out,
			        
			);

			$responce3 = $this->db->insert('entrance', $data);

			if($responce3)
			{
				echo "<script type='text/javascript'> confirm('The data successfully save!!')</script>";
				
			}
			else
			{

				echo "<script type='text/javascript'> confirm('There was an error')</script>";
				
			}


	 }
	 public function search_student()
	{


			$studentnum =	(string) $this->input->post('studentnum');
		

			$data = array(
			        'student_num' => $studentnum
			);

			$responce3 = $this->db->get('entrance', $data);

			if($responce4)
			{
				echo "<script type='text/javascript'> confirm('The data successfully save!!')</script>";
				
			}
			else
			{

				echo "<script type='text/javascript'> confirm('There was an error')</script>";
				
			}


	 }
	 public function user_login()
	{


			$username=	(string)	$this->input->post('username');
			$password =	(string)	$this->input->post('password');
		
			$data=array(
			'username'=>$username,
			'password'=>$password
		
		);
			
			$this->db->select('*');
			
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$response=$this->db->get('register',$data);

			if($response)
			{
				

				redirect('account/student_entrance');
			}
			else
			{

				echo "<script type='text/javascript'> confirm('There was an error')</script>";
				
			}

}
	 
	 }