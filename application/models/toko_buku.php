<?php

    class Toko_buku extends CI_Model
    {
        public function get_data()
        {
            $query = $this->db->get('buku');
            return $query->result();
        }
        public function insert($data)
        {
            $this->db->insert('buku',$data);
        }

        //mengambil data berdasar id 
        public function getbyid($id)
         {
            $this->db->where('id', $id);
            $query = $this->db->get('buku');
            return $query->row();
        }
         //update
         public function update($id,$data)
         {
            $this->db->where('id', $id);
            $this->db->update('buku',$data);
        }

        //delete
        public function delete($id)
         {
            $this->db->where('id', $id);
            $this->db->delete('buku');
        }
    }
    

?>