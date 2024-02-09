<?php 
defined('BASEPATH') OR exit('No kenemerut');

/* DOCU: This function loads the Player model beforehand which will be usable inside the extended controller class. The players session is being initialized here too.
*/
class Players extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Player');
        if(!$this->session->userdata('players')) {
            $this->session->set_userdata('players', $this->Player->get_players());
        }
    }

    /* DOCU: This is the root function that passes the players data to the view.
    Owner: Chris, Updated by: Chris
    */
    public function index() {
        $view_data = array(
            'players' => $this->session->userdata('players')
        );
        $this->load->view('players/index', $view_data);
    }

    /*  DOCU: This the function that passess the parameters from the client side to the model. It then set the filetered data as a new players data to be passed on to the view.
    Owner: Chris, Updated: Chris
    */
    public function search() {
        if($this->input->post()) {
            $inputs = $this->input->post(NULL, TRUE);
            var_dump($inputs);
            $name = $inputs['search'];
            $gender = $inputs['gender'];
            $sport = $inputs['sport'];
            $this->session->set_userdata('players', $this->Player->filter_players($name, $gender, $sport));
            redirect('/');
        } else {
            redirect('/');
        }
    }
}
?>