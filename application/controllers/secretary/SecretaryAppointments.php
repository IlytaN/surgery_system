<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 *
 * @property  form_validation
 * @extends CI_Controller
 */
class SecretaryAppointments extends CI_Controller

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
        $this->appointments();
    }


    public function appointments()
    {
        //CK: loading in dummy data

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

        $data['patients'] = $patients_long;


        $appts = array(
            array("appointment_date" => "2018-05-15T16:29:51", "patient" => "Beatrice Hughes", "doctor" => "Dr Susan Delgado"),
            array("appointment_date" => "2018-05-04T01:20:14", "patient" => "Noelani Galloway", "doctor" => "Dr Emerson Patrick"),
            array("appointment_date" => "2018-04-27T00:31:45", "patient" => "Mari Oneil", "doctor" => "Dr Chloe Maddox"),
            array("appointment_date" => "2018-04-25T15:11:32", "patient" => "Timon Bartlett", "doctor" => "Dr Melanie King"),
            array("appointment_date" => "2018-05-27T06:23:32", "patient" => "Kenyon Mayo", "doctor" => "Dr Inga Cantu"),
            array("appointment_date" => "2018-04-26T07:56:39", "patient" => "Sylvester Gregory", "doctor" => "Dr Jeanette Carr"),
            array("appointment_date" => "2018-05-18T20:47:15", "patient" => "Xantha Franco", "doctor" => "Dr Wade Colon"),
            array("appointment_date" => "2018-05-12T10:44:40", "patient" => "Holmes Ratliff", "doctor" => "Dr Lara Weber"),
            array("appointment_date" => "2018-05-12T00:26:45", "patient" => "Lael Sexton", "doctor" => "Dr Kenyon Greene"),
            array("appointment_date" => "2018-05-02T02:09:36", "patient" => "Perry French", "doctor" => "Dr Joan Trevino"),
            array("appointment_date" => "2018-05-16T01:59:41", "patient" => "Iliana Morgan", "doctor" => "Dr Griffith Dillon"),
            array("appointment_date" => "2018-05-26T16:39:59", "patient" => "Blake Cantu", "doctor" => "Dr Joelle Acosta"),
            array("appointment_date" => "2018-05-02T15:50:36", "patient" => "Laura Stone", "doctor" => "Dr Rebecca Vinson"),
            array("appointment_date" => "2018-05-29T21:41:48", "patient" => "Idola Snyder", "doctor" => "Dr Allen Weaver"),
            array("appointment_date" => "2018-05-12T05:38:08", "patient" => "William Bishop", "doctor" => "Dr Callum Lamb"),
            array("appointment_date" => "2018-05-27T15:24:22", "patient" => "Eric Sargent", "doctor" => "Dr Ivory Blankenship"),
            array("appointment_date" => "2018-04-27T04:00:59", "patient" => "Lars Knox", "doctor" => "Dr Brady Byers"),
            array("appointment_date" => "2018-05-03T17:55:37", "patient" => "John Frank", "doctor" => "Dr Jakeem Holland"),
            array("appointment_date" => "2018-05-18T17:57:50", "patient" => "Joelle Downs", "doctor" => "Dr Chantale Michael"),
            array("appointment_date" => "2018-05-25T17:49:01", "patient" => "Olivia Brooks", "doctor" => "Dr Chastity Beasley"),
            array("appointment_date" => "2018-04-28T04:31:16", "patient" => "Plato Floyd", "doctor" => "Dr Quamar Weeks"),
            array("appointment_date" => "2018-05-20T17:07:03", "patient" => "Claudia Jordan", "doctor" => "Dr Devin Booth"),
            array("appointment_date" => "2018-05-28T20:42:08", "patient" => "Hammett Young", "doctor" => "Dr Linda Travis"),
            array("appointment_date" => "2018-04-25T16:17:37", "patient" => "Abel Flowers", "doctor" => "Dr Yuri Porter"),
            array("appointment_date" => "2018-05-13T15:46:02", "patient" => "Cassady Delgado", "doctor" => "Dr Rashad Gardner"),
            array("appointment_date" => "2018-04-26T08:21:48", "patient" => "Evelyn Gillespie", "doctor" => "Dr Molly Adkins"),
            array("appointment_date" => "2018-05-13T09:39:56", "patient" => "Yuli Norman", "doctor" => "Dr Summer Mcknight"),
            array("appointment_date" => "2018-04-24T11:14:36", "patient" => "Allistair Ashley", "doctor" => "Dr Priscilla Clemons"),
            array("appointment_date" => "2018-05-16T12:29:31", "patient" => "Ivor Hull", "doctor" => "Dr Oliver Cardenas"),
            array("appointment_date" => "2018-04-25T18:18:34", "patient" => "Madonna Dawson", "doctor" => "Dr Yoshio Johnson"),
            array("appointment_date" => "2018-05-14T05:48:20", "patient" => "Zephr Rodriquez", "doctor" => "Dr Emerald Brock"),
            array("appointment_date" => "2018-05-26T17:14:43", "patient" => "Vladimir Campos", "doctor" => "Dr Rana Hahn"),
            array("appointment_date" => "2018-05-30T17:00:39", "patient" => "Lisandra Miles", "doctor" => "Dr Fritz Nunez"),
            array("appointment_date" => "2018-05-21T16:15:30", "patient" => "Simone Ellis", "doctor" => "Dr Raymond Potts"),
            array("appointment_date" => "2018-05-28T14:50:56", "patient" => "Walter Santos", "doctor" => "Dr Janna Riley"),
            array("appointment_date" => "2018-04-28T13:21:02", "patient" => "Gillian Sellers", "doctor" => "Dr Bertha Atkins"),
            array("appointment_date" => "2018-05-10T02:55:28", "patient" => "Norman Gilliam", "doctor" => "Dr Aspen Sargent"),
            array("appointment_date" => "2018-05-02T00:30:21", "patient" => "Autumn Calderon", "doctor" => "Dr Carly Travis"),
            array("appointment_date" => "2018-04-28T08:57:22", "patient" => "Zena Santana", "doctor" => "Dr Callum Contreras"),
            array("appointment_date" => "2018-05-31T16:36:07", "patient" => "Regina Moreno", "doctor" => "Dr Kevin Best"),
            array("appointment_date" => "2018-05-24T00:01:42", "patient" => "Stuart Guzman", "doctor" => "Dr Forrest Hess"),
            array("appointment_date" => "2018-04-29T02:02:36", "patient" => "Wesley Hopkins", "doctor" => "Dr Solomon Solis"),
            array("appointment_date" => "2018-05-28T22:49:51", "patient" => "Eric Watts", "doctor" => "Dr Ira Hoffman"),
            array("appointment_date" => "2018-05-04T06:09:59", "patient" => "Keefe Flores", "doctor" => "Dr Athena George"),
            array("appointment_date" => "2018-05-10T10:58:12", "patient" => "Rhoda Rose", "doctor" => "Dr Daquan Benson"),
            array("appointment_date" => "2018-04-30T05:26:43", "patient" => "September Leblanc", "doctor" => "Dr Ira Mcbride"),
            array("appointment_date" => "2018-05-04T23:30:40", "patient" => "Tarik Patrick", "doctor" => "Dr Harrison Payne"),
            array("appointment_date" => "2018-04-26T06:24:51", "patient" => "Uriah Schmidt", "doctor" => "Dr Neve Pittman"),
            array("appointment_date" => "2018-05-28T04:49:13", "patient" => "Wallace Cross", "doctor" => "Dr Honorato Bullock"),
            array("appointment_date" => "2018-04-30T04:46:29", "patient" => "Regan Clark", "doctor" => "Dr Deacon Fields"),
            array("appointment_date" => "2018-05-07T10:59:01", "patient" => "Caesar Fletcher", "doctor" => "Dr Nissim Serrano"),
            array("appointment_date" => "2018-05-16T07:09:35", "patient" => "Slade Hoover", "doctor" => "Dr Amethyst Soto"),
            array("appointment_date" => "2018-05-24T00:47:03", "patient" => "Malcolm Baldwin", "doctor" => "Dr Geraldine Browning"),
            array("appointment_date" => "2018-05-31T04:27:56", "patient" => "Candice Gilliam", "doctor" => "Dr Jena Albert"),
            array("appointment_date" => "2018-05-11T05:09:18", "patient" => "Georgia Hester", "doctor" => "Dr Sydnee Compton"),
            array("appointment_date" => "2018-05-10T09:15:56", "patient" => "Tara Vargas", "doctor" => "Dr Cameron Sanchez"),
            array("appointment_date" => "2018-04-30T04:27:10", "patient" => "Levi Foreman", "doctor" => "Dr Constance Cox"),
            array("appointment_date" => "2018-05-12T11:49:35", "patient" => "Carly Berry", "doctor" => "Dr Lucius Ball"),
            array("appointment_date" => "2018-05-28T08:59:44", "patient" => "Kuame Miller", "doctor" => "Dr Mari Dickerson"),
            array("appointment_date" => "2018-05-25T08:05:11", "patient" => "Chancellor Carter", "doctor" => "Dr Glenna Burns"),
            array("appointment_date" => "2018-04-30T12:03:18", "patient" => "Chiquita Haley", "doctor" => "Dr Channing Brock"),
            array("appointment_date" => "2018-05-04T03:28:09", "patient" => "Jermaine Meadows", "doctor" => "Dr Shelley Goff"),
            array("appointment_date" => "2018-05-15T02:25:02", "patient" => "Amy Hooper", "doctor" => "Dr Denise Vincent"),
            array("appointment_date" => "2018-05-29T04:53:29", "patient" => "Jerry Wade", "doctor" => "Dr Colton Huber"),
            array("appointment_date" => "2018-05-05T01:33:32", "patient" => "Cheyenne Mccarthy", "doctor" => "Dr Barbara Horne"),
            array("appointment_date" => "2018-05-27T19:46:03", "patient" => "Sylvester Berry", "doctor" => "Dr Morgan Morrison"),
            array("appointment_date" => "2018-04-30T08:11:49", "patient" => "Marcia Levine", "doctor" => "Dr Tad Murphy"),
            array("appointment_date" => "2018-05-18T14:27:13", "patient" => "Nora Cooley", "doctor" => "Dr Iola Gutierrez"),
            array("appointment_date" => "2018-05-10T05:40:53", "patient" => "Paul Lynch", "doctor" => "Dr Howard Warner"),
            array("appointment_date" => "2018-04-28T05:55:56", "patient" => "Portia Mercado", "doctor" => "Dr William French"),
            array("appointment_date" => "2018-05-26T00:06:38", "patient" => "Eliana Robertson", "doctor" => "Dr Kelly Snyder"),
            array("appointment_date" => "2018-05-11T10:43:50", "patient" => "Stewart King", "doctor" => "Dr Stella Mckay"),
            array("appointment_date" => "2018-04-25T14:00:24", "patient" => "Carissa Ortega", "doctor" => "Dr Cora Cortez"),
            array("appointment_date" => "2018-05-09T12:52:15", "patient" => "Jermaine Howe", "doctor" => "Dr Gavin Parsons"),
            array("appointment_date" => "2018-05-20T06:05:48", "patient" => "Colton Davidson", "doctor" => "Dr Melissa Blackburn"),
            array("appointment_date" => "2018-05-31T20:57:22", "patient" => "Denton Duncan", "doctor" => "Dr Emerson Ray"),
            array("appointment_date" => "2018-05-09T15:18:07", "patient" => "Orson Zamora", "doctor" => "Dr Isabelle Perry"),
            array("appointment_date" => "2018-05-17T03:59:43", "patient" => "Angelica Thornton", "doctor" => "Dr Leslie Lamb"),
            array("appointment_date" => "2018-05-24T17:57:33", "patient" => "Iola Justice", "doctor" => "Dr Palmer Huber"),
            array("appointment_date" => "2018-05-28T02:18:41", "patient" => "Theodore Gregory", "doctor" => "Dr Griffin Thomas"),
            array("appointment_date" => "2018-05-23T22:43:32", "patient" => "Shay Mcleod", "doctor" => "Dr Fuller Abbott"),
            array("appointment_date" => "2018-05-01T19:06:23", "patient" => "Natalie Andrews", "doctor" => "Dr Anastasia Reed"),
            array("appointment_date" => "2018-05-11T12:03:14", "patient" => "Hiram Patton", "doctor" => "Dr Silas Livingston"),
            array("appointment_date" => "2018-05-05T12:27:40", "patient" => "Daria Crawford", "doctor" => "Dr Kato Reyes"),
            array("appointment_date" => "2018-04-24T00:02:48", "patient" => "Yoshio Owens", "doctor" => "Dr Steven Mercer"),
            array("appointment_date" => "2018-05-08T16:52:50", "patient" => "Martin Kim", "doctor" => "Dr Oscar Curry"),
            array("appointment_date" => "2018-04-25T09:13:59", "patient" => "Noah Cardenas", "doctor" => "Dr Gary Larson"),
            array("appointment_date" => "2018-05-22T19:48:03", "patient" => "Jordan Higgins", "doctor" => "Dr Bruno Myers"),
            array("appointment_date" => "2018-05-31T13:27:37", "patient" => "Lacota Fox", "doctor" => "Dr Sara Lowe"),
            array("appointment_date" => "2018-05-12T18:54:25", "patient" => "Michelle Thornton", "doctor" => "Dr Asher Rojas"),
            array("appointment_date" => "2018-05-07T12:43:20", "patient" => "Kasper Osborn", "doctor" => "Dr Veronica Hester"),
            array("appointment_date" => "2018-05-13T21:16:35", "patient" => "Hammett Melton", "doctor" => "Dr Arthur Snider"),
            array("appointment_date" => "2018-04-24T07:08:10", "patient" => "Drew Olsen", "doctor" => "Dr Noble Jefferson"),
            array("appointment_date" => "2018-05-25T11:54:23", "patient" => "Fulton Quinn", "doctor" => "Dr Zeus Patrick"),
            array("appointment_date" => "2018-05-05T07:03:53", "patient" => "Quemby Pace", "doctor" => "Dr Briar Berg"),
            array("appointment_date" => "2018-05-26T04:56:13", "patient" => "Jermaine Weber", "doctor" => "Dr Alexa Sanchez"),
            array("appointment_date" => "2018-04-25T11:43:02", "patient" => "Ezra Mejia", "doctor" => "Dr Irma Bass"),
            array("appointment_date" => "2018-05-08T01:58:47", "patient" => "Fitzgerald Mckenzie", "doctor" => "Dr Gary Richmond"),
            array("appointment_date" => "2018-05-07T06:08:42", "patient" => "Nehru Macdonald", "doctor" => "Dr Basil Christensen"),
            array("appointment_date" => "2018-04-27T09:21:07", "patient" => "Deacon Rice", "doctor" => "Dr Austin Barlow")
        );

        $data['appointments'] = $appts;

        $this->load->view('header');
        $this->load->view('secretary/secretary');
        $this->load->view('secretary/appointments', $data);
        $this->load->view('footer');

    }

    public function newappointment()
    {

        // CK handles all the backend for creating an appointment - dummy so that the AJAX request can be made in teh JS

        echo "ASFHDGJFHKEJRYK";

    }


}