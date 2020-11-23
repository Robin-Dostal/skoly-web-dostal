<?php

class mesto_model extends CI_Model {

    function vloz_data($data) {
        $this->db->insert("mesto", $data);
    }
}