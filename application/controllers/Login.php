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

    /*
    * The index function handles the get and post requests
    * for the login function
    * It's better practice to separate concerns and have login / index
    * in two different functions
    */

    public function index()
    {
        $this->login();
    }


    /**
     * Login function.
     *
     * @access public
     * @return void
     */
    public function login()
    {
        //setting the state of session variable 
        $_SESSION['logged_in'] = false;
        // create the data object
        $data = new stdClass();

        // set validation rules
        //1st argument relates to Users DB, 2nd Description For User, 3rd Rule
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('position', 'User Type', 'required');


        if ($this->form_validation->run() == false) {
            //This is the GET Request
            // validation not okay, send validation errors to the view
            $this->load->view('header');  // Contains all scripts
            $this->load->view('users/login'); //Actual view itself
            $this->load->view('footer'); //Typical footer and end tags etc.

        } else {

            // set variables from the form
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //userType was defined as position in ERD
            $user_type = $this->input->post('userType'); // Possibly redundant as the user type can be checked in the DB easily and redirected

            $test = TRUE; // TODO: DEV ONLY, this is used temporarily as User_model isn't currently working

            // ####
            // #### Checks to see if password is correct
            // ####
            //if ($this->User_model->resolve_user_login($username, $password)) {
            if ($test) {

                // ####
                // #### Collects user information
                // ####
                //$user_id = $this->User_model->get_user_id_from_username($username);
                //$user = $this->User_model->get_user($user_id); TODO: This wont work until User_model is fixed


                // ####
                // #### Set the Session Data
                // ####

                //$_SESSION['user_id'] = (int)$user->id;
                //$_SESSION['username'] = (string)$user->username;
                $_SESSION['logged_in'] = (bool)true;

                // Compile the page
                $this->load->view('header');

                //TODO: set the redirect on successful login - Determined by the user types ... See line 72

                if ($user_type == 'doctor') {
                    //TODO: There needs to be server side restrictions on these pages
                    redirect('doctor/doctorappointments');
                } else {
                    redirect('secretary');
                }

                $this->load->view('footer');

            } else {

                // login failed
                $data->error = 'Wrong username or password.';

                // send error to the view
                $this->load->view('header');
                $this->load->view('users/login', $data); //This is passing data from server to view
                $this->load->view('footer');

            }

        }

    }

    /**
     * Logout function.
     * @access public
     * @return void
     */
    public function logout()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

            //This parses through the session variables and wipes them clean
            //for next login
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
        }
        $_SESSION['logged_in'] = false;
        //return to homepage / login
        redirect('/');
    }
}
