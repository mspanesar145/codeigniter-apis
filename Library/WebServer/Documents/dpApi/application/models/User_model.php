<?php 
class User_model extends CI_Model {

        public function __construct(){
                parent::__construct();
                $this->load->database();
        }
        public function get_last_ten_entries($tablename)
        {
                $query = $this->db->get($tablename, 10);
                return $query->result();
        }

        public function insert_entry($tablename,$dataArray)
        {

                $this->db->insert($tablename, $dataArray);
                $insertId = $this->db->insert_id();
                return  $insertId;
        }

        public function update_entry($tablename,$dataArray,$whereArray)
        {
                $this->db->update($tablename, $dataArray, $whereArray);
        }
        public function delete_entry($tablename,$dataArray){
            $this->db->delete($tablename, $dataArray);
        }
        public function getMaxRow($tablename,$fieldname){
                $this->db->select_max($fieldname);
              return $this->db->get($tablename)->row_array();
        }
        public function getResult($tablename,$whereArray=array()){
                return $this->db->get_where($tablename,$whereArray)->result_array();

        }
        public function getRow($tablename,$whereArray=array()){
                return $this->db->get_where($tablename,$whereArray)->row_array();

        }

}