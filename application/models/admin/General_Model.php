<?php
class General_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_general_settings()
    {
        if($query = $this->db->get('general_settings'))
          return $query->result();
        else
          return false;
    }

    function get_setting($setting_name)
    {
        $query = $this->db->get_where('general_settings', array('setting_name' => $setting_name));

        return $query->result();
    }

    function update($settings)
    {
      foreach ($settings as $key => $value) {
        $this->db->where('setting_name', $key);
        $this->db->update('general_settings', array('setting_value' => $value));
      }
    }

    function update_site_name($site_name)
    {
      $this->db->where('setting_name', 'site_name');
      $this->db->update('general_settings', array('setting_value' => $site_name));
    }

}
