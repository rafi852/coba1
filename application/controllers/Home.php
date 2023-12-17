<?php
class Home extends CI_Controller{
    public function Index()
    {
        $data = array(
            'title'=>'Pemetaan Fasilitas ITERA',
            'isi'=>'layout/v_home'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);

    }
}