<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_not_login();
		check_user();
	}

	public function index()
	{
		if ($this->fungsi->user_login()->level == 1) {
			redirect('admindashboard');
		}
		$data['tittle'] = "Dashboard";
		$this->template->load('temp_dashboard', 'user/dashboard/index', $data);
	}
}
