<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {

        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            //Display 404 page.
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

}



?>
