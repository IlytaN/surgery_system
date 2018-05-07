<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class DoctorPatients extends CI_Controller

{
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */

    // Just made the dummy data global for ease of use
    public $patients = array(
        array("patient" => "Elijah Perez", "age" => 66, "dob" => "06/17/2017", "gp" => "Dr Lisandra Daniel"),
        array("patient" => "Dillon Chase", "age" => 75, "dob" => "05/04/2018", "gp" => "Dr Brett Christian"),
        array("patient" => "Dustin Long", "age" => 4, "dob" => "04/18/2019", "gp" => "Dr Rogan Berger"),
        array("patient" => "Cecilia Shelton", "age" => 29, "dob" => "02/01/2018", "gp" => "Dr Xerxes Palmer"),
        array("patient" => "Darius Houston", "age" => 57, "dob" => "10/25/2018", "gp" => "Dr Jermaine Workman"),
        array("patient" => "Harding Atkins", "age" => 28, "dob" => "09/29/2018", "gp" => "Dr Slade Bates"),
    );

    // Each Controller requires a construct to load dependencies
    public function __construct()
    {

        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
    }


    public function index()
    {

        $this->patients();

    }

    public function patients()
    {
        // create the data object
        //        $patients = array(
        //            array("patient" => "Elijah Perez", "age" => 66, "dob" => "06/17/2017", "gp" => "Dr Lisandra Daniel"),
        //            array("patient" => "Dillon Chase", "age" => 75, "dob" => "05/04/2018", "gp" => "Dr Brett Christian"),
        //            array("patient" => "Dustin Long", "age" => 4, "dob" => "04/18/2019", "gp" => "Dr Rogan Berger"),
        //            array("patient" => "Cecilia Shelton", "age" => 29, "dob" => "02/01/2018", "gp" => "Dr Xerxes Palmer"),
        //            array("patient" => "Darius Houston", "age" => 57, "dob" => "10/25/2018", "gp" => "Dr Jermaine Workman"),
        //            array("patient" => "Harding Atkins", "age" => 28, "dob" => "09/29/2018", "gp" => "Dr Slade Bates"),
        //        );
        $patients_long = array(
            array("patient" => "Sloane Walter", "age" => 23, "dob" => "02/08/2019", "gp" => "Dr Aquila Bryan"),
            array("patient" => "April Petersen", "age" => 35, "dob" => "11/25/2017", "gp" => "Dr Bell Stanton"),
            array("patient" => "Maite Camacho", "age" => 88, "dob" => "05/09/2017", "gp" => "Dr Mannix Mack"),
            array("patient" => "Rigel Sheppard", "age" => 20, "dob" => "09/14/2018", "gp" => "Dr Ebony Best"),
            array("patient" => "Shafira Rivas", "age" => 62, "dob" => "02/22/2019", "gp" => "Dr Jenna Dean"),
            array("patient" => "Serena Franks", "age" => 27, "dob" => "03/31/2019", "gp" => "Dr Berk Cleveland"),
            array("patient" => "Vincent Booth", "age" => 55, "dob" => "04/27/2017", "gp" => "Dr Graiden Tucker"),
            array("patient" => "Carter Torres", "age" => 71, "dob" => "02/14/2018", "gp" => "Dr Christine Valdez"),
            array("patient" => "Amelia Horton", "age" => 2, "dob" => "05/02/2018", "gp" => "Dr Jermaine Herman"),
            array("patient" => "Dominic Chaney", "age" => 66, "dob" => "09/02/2017", "gp" => "Dr Jaquelyn Calderon"),
            array("patient" => "Carson Wyatt", "age" => 52, "dob" => "06/30/2018", "gp" => "Dr Nolan Fowler"),
            array("patient" => "Fiona Crosby", "age" => 33, "dob" => "07/14/2017", "gp" => "Dr Amity Morton"),
            array("patient" => "Joshua House", "age" => 58, "dob" => "05/25/2018", "gp" => "Dr Dennis Terrell"),
            array("patient" => "Inez Hurst", "age" => 4, "dob" => "12/13/2017", "gp" => "Dr Willow Salas"),
            array("patient" => "Charles Barrett", "age" => 67, "dob" => "11/15/2018", "gp" => "Dr Lyle Owens"),
            array("patient" => "Shad Lester", "age" => 65, "dob" => "11/04/2018", "gp" => "Dr Priscilla Gillespie"),
            array("patient" => "Ocean Carrillo", "age" => 57, "dob" => "08/19/2017", "gp" => "Dr Brent Osborne"),
            array("patient" => "Marcia Pittman", "age" => 75, "dob" => "01/24/2018", "gp" => "Dr Quail Conway"),
            array("patient" => "William English", "age" => 59, "dob" => "12/05/2017", "gp" => "Dr Casey Bird"),
            array("patient" => "Kimberly Brady", "age" => 31, "dob" => "05/01/2018", "gp" => "Dr Serina Pope"),
            array("patient" => "Rama Miranda", "age" => 25, "dob" => "11/16/2017", "gp" => "Dr Nita Anthony"),
            array("patient" => "Nash Walker", "age" => 60, "dob" => "05/04/2017", "gp" => "Dr Tyler Jimenez"),
            array("patient" => "Keiko Bauer", "age" => 53, "dob" => "06/21/2017", "gp" => "Dr Bruce Dixon"),
            array("patient" => "Aiko Shields", "age" => 19, "dob" => "05/28/2017", "gp" => "Dr Scarlett Nguyen"),
            array("patient" => "Yasir Mccarty", "age" => 58, "dob" => "01/14/2019", "gp" => "Dr Thaddeus Carpenter"),
            array("patient" => "Keane Pratt", "age" => 2, "dob" => "09/08/2017", "gp" => "Dr Ava Bryan"),
            array("patient" => "Ivory Fuller", "age" => 79, "dob" => "08/26/2017", "gp" => "Dr Luke Nash"),
            array("patient" => "Venus Frost", "age" => 17, "dob" => "05/31/2017", "gp" => "Dr Brianna Hanson"),
            array("patient" => "Karleigh Curtis", "age" => 66, "dob" => "11/09/2017", "gp" => "Dr Germaine Barker"),
            array("patient" => "Shannon Harmon", "age" => 90, "dob" => "02/19/2019", "gp" => "Dr Donna Harrison"),
            array("patient" => "Mark Dale", "age" => 14, "dob" => "01/04/2019", "gp" => "Dr Indigo Hutchinson"),
            array("patient" => "Ethan Harrison", "age" => 50, "dob" => "04/06/2019", "gp" => "Dr Isadora Lane"),
            array("patient" => "Hamish Sargent", "age" => 49, "dob" => "05/08/2018", "gp" => "Dr Ethan Ryan"),
            array("patient" => "Lance Abbott", "age" => 39, "dob" => "07/07/2017", "gp" => "Dr Gannon Kemp"),
            array("patient" => "Barrett Calhoun", "age" => 77, "dob" => "09/06/2017", "gp" => "Dr Travis Morin"),
            array("patient" => "Evangeline Osborn", "age" => 60, "dob" => "03/31/2018", "gp" => "Dr Malachi Campos"),
            array("patient" => "Cheryl Flynn", "age" => 9, "dob" => "10/27/2018", "gp" => "Dr Jarrod Fuller"),
            array("patient" => "Elijah Sparks", "age" => 14, "dob" => "01/15/2018", "gp" => "Dr Hyatt Walsh"),
            array("patient" => "Damian Wolf", "age" => 90, "dob" => "05/01/2017", "gp" => "Dr Harriet Fitzpatrick"),
            array("patient" => "Kasimir Hinton", "age" => 71, "dob" => "08/10/2017", "gp" => "Dr Stuart Powell"),
            array("patient" => "Adena Rios", "age" => 83, "dob" => "08/08/2017", "gp" => "Dr Oprah Mcgee"),
            array("patient" => "Malachi Hughes", "age" => 51, "dob" => "03/10/2019", "gp" => "Dr Yen Livingston"),
            array("patient" => "Leonard Tanner", "age" => 43, "dob" => "01/13/2019", "gp" => "Dr Carla Carter"),
            array("patient" => "Lucian Smith", "age" => 18, "dob" => "04/29/2018", "gp" => "Dr Graham Mccoy"),
            array("patient" => "Miriam Herman", "age" => 64, "dob" => "08/24/2017", "gp" => "Dr Hiram Fuller"),
            array("patient" => "Bruce Irwin", "age" => 50, "dob" => "01/23/2019", "gp" => "Dr Lawrence Hanson"),
            array("patient" => "Karyn Ray", "age" => 11, "dob" => "09/17/2017", "gp" => "Dr Caesar Patrick"),
            array("patient" => "Lael Pennington", "age" => 81, "dob" => "10/02/2018", "gp" => "Dr Galvin Daniels"),
            array("patient" => "Eagan Hall", "age" => 71, "dob" => "07/21/2018", "gp" => "Dr Sloane Richards"),
            array("patient" => "Denise Roth", "age" => 66, "dob" => "03/04/2018", "gp" => "Dr Addison Mcmillan"),
            array("patient" => "Cassandra Maynard", "age" => 13, "dob" => "09/07/2018", "gp" => "Dr Addison Vasquez"),
            array("patient" => "Emmanuel Washington", "age" => 15, "dob" => "06/14/2018", "gp" => "Dr Kelsey Pickett"),
            array("patient" => "Ulla Rodriguez", "age" => 20, "dob" => "09/23/2017", "gp" => "Dr Indigo Combs"),
            array("patient" => "Ethan Shannon", "age" => 45, "dob" => "09/28/2018", "gp" => "Dr Gray Faulkner"),
            array("patient" => "Halee Avery", "age" => 26, "dob" => "05/22/2018", "gp" => "Dr Aaron Manning"),
            array("patient" => "Megan Campos", "age" => 19, "dob" => "12/03/2018", "gp" => "Dr Callie Sargent"),
            array("patient" => "Isaac Berger", "age" => 30, "dob" => "05/16/2018", "gp" => "Dr Stephen Burks"),
            array("patient" => "Ulric Santos", "age" => 69, "dob" => "09/10/2017", "gp" => "Dr Robin Perry"),
            array("patient" => "Jermaine Mcclain", "age" => 2, "dob" => "06/29/2017", "gp" => "Dr Kuame Pope"),
            array("patient" => "Hayley Clements", "age" => 86, "dob" => "09/07/2018", "gp" => "Dr Plato Skinner"),
            array("patient" => "Signe Richard", "age" => 86, "dob" => "07/20/2017", "gp" => "Dr Acton Rich"),
            array("patient" => "Jessamine Adkins", "age" => 26, "dob" => "10/21/2017", "gp" => "Dr Dorian Allison"),
            array("patient" => "Sean Young", "age" => 27, "dob" => "01/10/2018", "gp" => "Dr Honorato Willis"),
            array("patient" => "Kevyn Noel", "age" => 56, "dob" => "05/26/2017", "gp" => "Dr Bianca Howard"),
            array("patient" => "Hilary Abbott", "age" => 71, "dob" => "05/29/2017", "gp" => "Dr Asher Henson"),
            array("patient" => "Jasmine Bolton", "age" => 27, "dob" => "11/25/2018", "gp" => "Dr Len Crawford"),
            array("patient" => "Jael Travis", "age" => 27, "dob" => "05/15/2017", "gp" => "Dr Boris Vinson"),
            array("patient" => "Latifah Riggs", "age" => 82, "dob" => "04/08/2018", "gp" => "Dr Nehru Galloway"),
            array("patient" => "Leonard Stuart", "age" => 56, "dob" => "12/17/2018", "gp" => "Dr Cheryl Bridges"),
            array("patient" => "Venus Beard", "age" => 1, "dob" => "03/01/2018", "gp" => "Dr Lacy Sawyer"),
            array("patient" => "Brett Velazquez", "age" => 85, "dob" => "09/30/2018", "gp" => "Dr Whilemina Monroe"),
            array("patient" => "Gretchen Vance", "age" => 80, "dob" => "09/06/2017", "gp" => "Dr Cailin Miller"),
            array("patient" => "Maite Giles", "age" => 14, "dob" => "06/19/2018", "gp" => "Dr Martha Acosta"),
            array("patient" => "Justin Rowland", "age" => 13, "dob" => "02/24/2019", "gp" => "Dr Hashim Nunez"),
            array("patient" => "Jessica Duke", "age" => 39, "dob" => "06/02/2017", "gp" => "Dr Rina Kramer"),
            array("patient" => "Kane Shannon", "age" => 61, "dob" => "11/26/2017", "gp" => "Dr Denise Mann"),
            array("patient" => "Jarrod Hull", "age" => 41, "dob" => "11/27/2018", "gp" => "Dr Hanae Mcdaniel"),
            array("patient" => "Adele Dickerson", "age" => 73, "dob" => "10/25/2018", "gp" => "Dr Omar Hunt"),
            array("patient" => "Ferdinand Pacheco", "age" => 20, "dob" => "09/06/2017", "gp" => "Dr Dieter Good"),
            array("patient" => "Tallulah Mueller", "age" => 90, "dob" => "04/25/2018", "gp" => "Dr Indigo Curry"),
            array("patient" => "Gail Delacruz", "age" => 78, "dob" => "12/09/2018", "gp" => "Dr Sonya Conley"),
            array("patient" => "Jermaine Gutierrez", "age" => 9, "dob" => "03/23/2018", "gp" => "Dr September Barnett"),
            array("patient" => "Kirby Camacho", "age" => 14, "dob" => "10/11/2018", "gp" => "Dr Jaden Benjamin"),
            array("patient" => "Karleigh Young", "age" => 54, "dob" => "07/06/2018", "gp" => "Dr Hector Rosales"),
            array("patient" => "Anthony Rosa", "age" => 71, "dob" => "04/30/2018", "gp" => "Dr Amethyst Newton"),
            array("patient" => "Amos Burks", "age" => 13, "dob" => "05/26/2018", "gp" => "Dr Glenna Patton"),
            array("patient" => "Caleb Garrett", "age" => 4, "dob" => "03/16/2019", "gp" => "Dr Chester Ayers"),
            array("patient" => "Signe Lara", "age" => 56, "dob" => "10/16/2017", "gp" => "Dr Ruth Cardenas"),
            array("patient" => "Ferdinand Larson", "age" => 77, "dob" => "01/25/2019", "gp" => "Dr Quamar Castro"),
            array("patient" => "Carolyn Cook", "age" => 73, "dob" => "11/09/2018", "gp" => "Dr Brady Dillard"),
            array("patient" => "Aspen Stuart", "age" => 80, "dob" => "03/09/2019", "gp" => "Dr Athena Woodard"),
            array("patient" => "Nevada Calhoun", "age" => 83, "dob" => "01/31/2018", "gp" => "Dr Phyllis Durham"),
            array("patient" => "Garrett Mccarthy", "age" => 49, "dob" => "06/11/2018", "gp" => "Dr Steel Browning"),
            array("patient" => "Victoria Jennings", "age" => 41, "dob" => "04/11/2018", "gp" => "Dr Guy Gomez"));
        $data['patients'] = $this->patients;

        $this->load->view('menu/header');
        $this->load->view('doctor/doctor');
        $this->load->view('doctor/patients', $data);  // contains table data
        $this->load->view('menu/footer');
    }

    public function add_new_patient()
    {


        //TODO: add new patient properly


        $data['new_p_details'] = $this->input->post();
        $return = array('data' => $data['new_p_details']);
        $this->output->set_content_type("application/json")->set_output(json_encode($return));


    }


    public function get_patient_details($p_id)
    {

        //
        //  CK: I've just put the 'show_patients_details' functions from the patients.php files here as
        //      I was unsure if we want to just do a get request here to pull the data??
        //      might be better if we handle it in a popup modal ???
        //

        //        $this->load->model('Patients_model');
        //        // create the data object
        //        $data['details'] = $this->Patients_model->getPatientDetails($p_id);


        $data['p_details'] = $this->patients[0];
        $return = array('data' => $data['p_details']);
        $this->output->set_content_type("application/json")->set_output(json_encode($return));

    }
}