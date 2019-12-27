<?php

class Mhs extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ModelMhs');
    }

    public function index() {
        $data['mhs'] = $this->ModelMhs->get()->result();
        $this->load->view('v_list_mhs', $data);
    }

    public function add() {
        $this->load->view('v_add_mhs');
    }

    public function prosesTambah() {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $data = array(
                'nim' => $this->input->post('nim', TRUE),
                'nama' => $this->input->post('nama', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'telepon' => $this->input->post('telepon', TRUE)
            );

            $this->ModelMhs->insert($data);
            redirect('mhs');
        }
    }

    private function _rules() {
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');

        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
