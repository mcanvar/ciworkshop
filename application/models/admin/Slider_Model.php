<?php
class Slider_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_slides()
    {
        if($query = $this->db->get('slider_settings'))
          return $query->result();
        else
          return false;
    }
}
