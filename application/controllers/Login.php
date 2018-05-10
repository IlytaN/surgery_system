<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class Login extends CI_Controller
{
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    // Each Controller requires a construct to load dependencies
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }
    public function index()
    {
        $this->login();
    }
    /**
     * login function.
     *
     * @access public
     * @return void
     */
    public function login()
    {
        $_SESSION['logged_in'] = false;
        // create the data object
        $data = new stdClass();
        // set validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('userType', 'User Type', 'required');
        if ($this->form_validation->run() == false) {
            // validation not ok, send validation errors to the view
            $this->load->view('menu/header');  // A
            $this->load->view('users/login');
            $this->load->view('menu/footer');
        } else {
            // set variables from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user_type = $this->input->post('userType'); // Possibly redundant as the user type can be checked in the DB easily and redirected
            $test = TRUE; // DEV ONLY
            // ####
            // #### Checks to see if password is correct
            // ####
            //if ($this->User_model->resolve_user_login($username, $password)) {
            if ($test) {
                // ####
                // #### Collects user information
                // ####
                //$user_id = $this->User_model->get_user_id_from_username($username);
                //$user = $this->User_model->get_user($user_id);
                // ####
                // #### Set the Session Data
                // ####
                //$_SESSION['user_id'] = (int)$user->id;
                //$_SESSION['username'] = (string)$user->username;
                $_SESSION['logged_in'] = (bool)true;
                // Compile the page
                $this->load->view('menu/header');
                //TODO: set the redirect on successful login - Determined by the user types ... See line 72
                if ($user_type == 'doctor') {
                    //TODO: There needs to be server side restrictions on these pages
                    redirect('doctor/doctorappointments');
                } else {
                    redirect('secretary/secretarypatients');
                }
                $this->load->view('footer');
            } else {
                // login failed
                $data->error = 'Wrong username or password.';
                // send error to the view
                $this->load->view('menu/header');
                $this->load->view('users/login', $data);
                $this->load->view('menu/footer');
            }
        }
    }
    /**
     * logout function.
     *
     * @access public
     * @return void
     */
    public function logout()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
        }
        $_SESSION['logged_in'] = false;
        // user logout reset to login page (default)
        redirect('/');
    }
}