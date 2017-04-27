<?php
class User_model extends CI_Model {

    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }
    public function getDataById($id) {
        $this->db->select('users.*,users_groups.user_id,users_groups.group_id,groups.name as role');
        $this->db->from('users');
        $this->db->join('users_groups', 'users_groups.user_id = users.id','left');
        $this->db->join('groups','users_groups.group_id = groups.id','left');
        $this->db->where('users.id', $id);
        return $this->db->get()->result();
    }
}