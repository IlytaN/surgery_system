<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User_model class.
 *
 * @extends CI_Model
 */
class User_model extends CI_Model
{
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     * resolve_user_login function.
     *
     * @access public
     * @param mixed $username
     * @param mixed $password
     * @return bool true on success, false on failure
     */
    public function resolve_user_login($username, $password)
    {
		$con = mysqli_connect("localhost", "root", "", "surgery");
		$sql = "SELECT UserId FROM users WHERE username Like '$username' AND password Like '$password'";
		$result = mysqli_query($con, $sql);
		$UserCount=mysqli_num_rows($result);
		
		if($UserCount > 0)
		{
			$this->db->select('password');
			$this->db->from('users');
			$this->db->where('username', $username);
			$hash = $this->db->get('users')->row('password');
			return $this->verify_password_hash($password, $hash);
		}
		else{
			echo"User does not exist";
			return 0;
		}
    }
    /**
     * get_user_id_from_username function.
     *
     * @access public
     * @param mixed $username
     *
     * @return int the user id
     */
    public function get_user_id_from_username($username)
    {
		$con = mysqli_connect("localhost", "root", "", "surgery");
		$sql = "SELECT UserId FROM users WHERE username Like '$username'";
		$result = mysqli_query($con, $sql);
		$UserCount=mysqli_num_rows($result);
		
		if($UserCount > 0)
		{
			$q = $this->db->select('id')->from('users')->where('username', $username);
			echo $q;
			var_dump(get_object_vars($this->db));
			return $q->get()->row('id');
		}
		else
		{
			echo"Does not exist";
			return 0;
		}
    }
    /**
     * get_user function.
     *
     * @access public
     * @param mixed $user_id
     * @return object the user object
     */
    public function get_user($user_id)
    {
		$con = mysqli_connect("localhost", "root", "", "surgery");
		$sql = "SELECT username FROM users WHERE UserId Like '$user_id'";
		$result = mysqli_query($con, $sql);
		$UserCount=mysqli_num_rows($result);
		
		if($UserCount > 0)
		{
			$this->db->from('users');
			$this->db->where('id', $user_id);
			return $this->db->get()->row();
		}
		else{
			echo"Doesnt exist";
			return 0;
		}
    }
    /**
     * verify_password_hash function.
     *
     * @access private
     * @param mixed $password
     * @param mixed $hash
     * @return bool
     */
    private function verify_password_hash($password, $hash)
    {
        return password_verify($password, $hash);
    }
}