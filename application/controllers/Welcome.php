<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->library('email');

		$this->email->from('nandenmonaiya898@gmail.com', 'Your Name'); // Ganti dengan alamat email dan nama pengirim
		$this->email->to('fakhriansyahnugroho007@gmail.com'); // Ganti dengan alamat email penerima
		$this->email->subject('Hello World Email');
		$this->email->message('Hello World! This is a test email from CodeIgniter.');
	
		if ($this->email->send()) {
			echo 'Email berhasil dikirim.';
		} else {
			show_error($this->email->print_debugger());
		}
	}
}
