<?php

class Testing extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_booking($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('booking');
            return $query->result_array();
        }

        $query = $this->db->get_where('booking', array('slug' => $slug));
        return $query->row_array();
    }
}

?>
