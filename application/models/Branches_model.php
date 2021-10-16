<?php

class Branches_model extends CI_Model {

    public function get_branches() {
        // $query = $this->db->query("SELECT * FROM `tbl_branches` INNER JOIN `tbl_banks` WHERE `tbl_branches`.bank_id = `tbl_banks`.bank_id");
        // return $query->result_array();
        $this->db->select('*')->from('tbl_branches')->join('tbl_banks','tbl_branches.bank_id = tbl_banks.bank_id'); 
        return $this->db->get()->result_array();  
    }

    public function get_banks() {
        $this->db->select('*')->from('tbl_banks');   
        return $this->db->get()->result_array();
    }
    
    public function get_branch($id) {    
        $this->db->where('branch_id',$id);
        return $this->db->select('*')->from('tbl_branches')->join('tbl_banks','tbl_branches.bank_id = tbl_banks.bank_id');
        return $this->db->get()->row();
        // return $this->db->get_where('tbl_branches', array('branch_id' => $id))->row();
    }

    public function store_branch() {    
        $data = array(
            'branch_name' => $this->input->post('branch_name'),
            'branch_code' => $this->input->post('branch_code'),
            'bank_id' => $this->input->post('bank_id')
        );
        return $this->db->insert('tbl_branches', $data);
    }

    public function update_branch($id){
        $data = array(
            'branch_name' => $this->input->post('branch_name'),
            'branch_code' => $this->input->post('branch_code'),
            'bank_id' => $this->input->post('bank_id')
        );

            $this->db->where('branch_id',$id);
            return $this->db->update('tbl_branches',$data);  
    }

    public function delete_branch($id) {    
        $this->db->where('branch_id',$id);
        return $this->db->delete('tbl_branches');
    }

}
