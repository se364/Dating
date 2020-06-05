<?php
/**
 * Controller class
 */
class Controller
{
    private $_f3; //router
    private $_validator; //validation object

    /**
     * Controller constructor.
     * @param $f3
     * @param $validator
     */
    public function __construct($f3, $validator)
    {
        $this->_f3 = $f3;
        $this->_validator = $validator;
    }

    /**
     * Display the home page
     */
    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Personal Information route
     */
    public function person()
    {
        $genders = getGender();

        //If the form is submitted
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);

            //valid first name
            if(!$this->_validator->validName($_POST['fname'])) {
                $this->_f3->set('errors["fname"]', "Invalid First Name");
            }
            //valid last name
            if(!$this->_validator->validName($_POST['lname'])) {
                $this->_f3->set('errors["lname"]', "Invalid Last Name");
            }
            //valid age
            if(!$this->_validator->validAge($_POST['age'])) {
                $this->_f3->set('errors["age"]', "Invalid Age");
            }
            //valid phone
            if(!$this->_validator->validPhone($_POST['phone'])) {
                $this->_f3->set('errors["phone"]', "Invalid Phone Number");
            }


            //If Data is valid then do this
            if(empty($this->_f3->get('errors'))) {

                if(isset($_POST['premium'])){
                    $member = new PremiumMember();
                }
                else {
                    $member = new Member();
                }

                $member->setFname($_POST['fname']);
                $member->setLname($_POST['lname']);
                $member->setAge($_POST['age']);
                $member->setGender($_POST['gender']);
                $member->setPhone($_POST['phone']);


                $_SESSION['member'] = $member;

                //Redirect to profile page
                $this->_f3->reroute('profile');
            }
        }

        $this->_f3->set('gender', $genders);
        $this->_f3->set('fname', $_POST['fname']);
        $this->_f3->set('lname', $_POST['lname']);
        $this->_f3->set('age', $_POST['age']);
        $this->_f3->set('gender', $_POST['gender']);
        $this->_f3->set('phone', $_POST['phone']);
        $view = new Template();
        echo $view->render('views/PersonInfo.html');
    }

    /**
     * Process the profile route
     */
    public function profile()
    {

        $seeks = getSeek();

        //If the form is submitted
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // valid email
            if(!$this->_validator->validEmail($_POST['email'])) {
                $this->_f3->set('errors["email"]', "Invalid Email");
            }

            if (empty($this->_f3->get('errors'))) {
                //Store the data in the session array
                $_SESSION['member']->setEmail($_POST['email']);
                $_SESSION['member']->setState($_POST['state']);
                $_SESSION['member']->setSeeking($_POST['seek']);
                $_SESSION['member']->setBio($_POST['bio']);


                // redirect premium member to the interest page
                if(get_class($_SESSION['member']) == 'PremiumMember') {


                    //Redirect to interests page
                    $this->_f3->reroute('interests');

                } else {

                    //Redirect to summary page
                    $this->_f3->reroute('summary');
                }
            }
        }

        $this->_f3->set('seek', $seeks);
        $this->_f3->set('email', $_POST['email']);
        $this->_f3->set('state', $_POST['state']);
        $this->_f3->set('seek', $_POST['seek']);
        $this->_f3->set('bio', $_POST['bio']);
        $view = new Template();
        echo $view->render('views/ProfileInfo.html');
    }

    /**
     * Display interests route
     */
    public function interests()
    {
        $outdoor = getOutdoor();
        $indoor =  getIndoor();

        //If the form is submitted
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //validate  indoor activity
            if(!$this->_validator->validIndoor($_POST['indoor'])) {
                $this->_f3->set('errors["indoor"]', "Choose an indoor activity)");
            }
            // validate outdoor activity
            if(!$this->_validator->validOutdoor($_POST['outdoor'])) {
                $this->_f3->set('errors["outdoor"]', "Choose an outdoor activity");
            }

            if (empty($this->_f3->get('errors'))) {
                //Store the data in the session array
                $_SESSION['user']->setIndoorInterests($_POST['indoor']);
                $_SESSION['user']->setOutdoorInterests($_POST['outdoor']);

                //Redirect to summary page
                $this->_f3->reroute('summary');
            }
        }


        $this->_f3->set('indoor', $indoor);
        $this->_f3->set('outdoor', $outdoor);
        $this->_f3->set('selectIndoor', $_POST['indoor']);
        $this->_f3->set('selectOutdoor', $_POST['outdoor']);

        $view = new Template();
        echo $view->render('views/Interests.html');
    }

    /**
     * Display the summary route
     */
    public function summary()
    {
        //var_dump($_SESSION);

        $view = new Template();
        echo $view->render('views/ProfileSummary.html');
        session_destroy();
    }
}
