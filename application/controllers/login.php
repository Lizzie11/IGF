<?php defined('BASEPATH') OR exit('NO idrect script access allowed');

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model("post_model");
        //$this->load->library('session');
    }

    function index(){
        $this->load->view(login);

    }

    function validar(){

        $data["posts"] = $this->post_model->getPosts();


        $iduser = $this->input->post('user');
        $password = $this->input->post('password');

        $sesion_data = array(
            'idusuario' => $iduser,
            'contra' => $password
        );

        //$this->session->userdata($sesion_data);
        $this->session->set_userdata($sesion_data);

        $data2['name_user'] = $iduser;

        if($iduser != "" && $password != ""){
            if($iduser == "tecnico"){
                if($password == "12345"){
                    //$this->load->view('welcome_message',$data);
                    $this->load->view('plantilla/header');
                    $this->load->view('plantilla/menu_nav',$data2);
                    $this->load->view('plantilla/sidebar',$data2);
                    $this->load->view('plantilla/content',$data);
                    $this->load->view('plantilla/footer');
                    $this->load->view('plantilla/sidebar2');
                    $this->load->view('plantilla/scripts');
                }
                else{
                    $this->load->view('login');
                }
            }else{
                //alert('Usuario incorrecto');
                $this->load->view('login');
            }
        }

    }

}

?>