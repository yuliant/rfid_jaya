<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginView extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->library('form_validation');
        $this->load->config('foto');
    }

    public function index()
    {
        $data['tittle'] = "Atur Tampilan Login";
        $this->template->load('temp_dashboard', 'admin/env/loginView/index', $data);
    }
}

/* End of file Agenda.php */
