<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * @extends CI_Model
 * CI_Model is built-in model in CodeIgnitor
 */
class User_model extends CI_Model {
  // TODO: This isn't currently working, as password hashing isn't working on database side, so it's not "salting" verify_password_hash
  //TODO: This is an issue for Backend Team to fix
  
    /**
     * __construct function.
     * Every class in CodeIgnitor has to use __construct which helps define libraries
     *
     * @access public
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    /**
     * check_user_login function.
     *
     * @access public
     * @param mixed $username
     * @param mixed $password
     * @return bool true on success, false on failure
     */
    public function check_user_login($username, $password) {

        $this->db->select('password');
        $this->db->from('Users');
        $this->db->where('username', $username);
        $hash = $this->db->get('users')->row('password');

        return $this->verify_password_hash($password, $hash);

    }

    /**
     * get_user_id_from_username function.
     *
     * @access public
     * @param mixed $username
     *
     * @return int the user id
     */
    public function get_user_id_from_username($username) {
        $userQ = $this->db->select('UserId')->from('Users')->where('username', $username);
       return $userQ->get()->row('UserId');
    }

    /**
     * get_user function.
     *
     * @access public
     * @param mixed $user_id
     * @return object the user object
     */
    public function get_user($user_id) {
        $this->db->from('users');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();
    }

    /**
     * verify_password_hash function.
     *
     * @access private
     * @param mixed $password
     * @param mixed $hash
     * @return bool
     */
    private function verify_password_hash($password, $hash) {
        return password_verify($password, $hash);
    }

}
