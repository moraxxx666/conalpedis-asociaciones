<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Administrador extends CI_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->load->model('administrador_model', '', TRUE);
    }
    public function login()
    {
        $usuario =  $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        if ($this->ion_auth->login($usuario, $contrasena, false) && $this->ion_auth->is_admin()) {
            redirect('Administrador/Asociaciones');
        } else {
            $this->session->set_flashdata('mensaje', 'Usuario o Contraseña incorrecta intentalo de nuevo');
            redirect('/Inicio');
        }
    }
    public function logout()
    {

        $this->ion_auth->logout();
        redirect('/Inicio');
    }
    public function Asociaciones()
    {
        if ($this->ion_auth->logged_in()) {
            $data['usuario'] = $this->ion_auth->user()->row();
            $data['asociaciones'] = $this->administrador_model->ObtenerAsociaciones();
            $this->load->view('administrador/Header', $data);
            $this->load->view('administrador/Styles');
            $this->load->view('administrador/NavBar');
            $this->load->view('administrador/Inicio', $data);
            $this->load->view('publico/Footer');
            $this->load->view('administrador/Scripts');
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
    public function Asociacion($id_asociacion)
    {
        if ($this->ion_auth->logged_in()) {
            $data['usuario'] = $this->ion_auth->user()->row();
            if ($this->administrador_model->ObtenerAsociacion($id_asociacion) === null) {
                $this->session->set_flashdata('mensaje', 'No se encuentra la asociacion');
                redirect('/Administrador/Asociaciones');
            } else {
                $data['asociacion'] = $this->administrador_model->ObtenerAsociacion($id_asociacion);
                $data['antecedente'] = $this->administrador_model->ObtenerAntecedentes($id_asociacion);
                $data['proyectos'] = $this->administrador_model->ObtenerProyectos($id_asociacion);
            }


            $this->load->view('administrador/Header', $data);
            $this->load->view('administrador/Styles');
            $this->load->view('administrador/NavBar');
            $this->load->view('administrador/Asociacion', $data);
            $this->load->view('publico/Footer');
            $this->load->view('administrador/Scripts');
        } else {
            $this->session->set_flashdata('mensaje', 'Necesitas Iniciar Sesion');
            redirect('/Inicio');
        }
    }
}
