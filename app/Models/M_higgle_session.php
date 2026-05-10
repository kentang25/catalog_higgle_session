<?php

    namespace App\Models;
    use CodeIgniter\Model;
    

    Class M_higgle_session extends Model{

        protected $table            = 'tb_collections';
        protected $primaryKey       = 'id_collection';
        protected $allowedFields    = ['nama_band', 'kategori', 'thumbnail','size','tag'];


        public function getHiggle($id = false)
        {
            if($id === False){
                return $this->findAll();
            }else{
                return $this->where(['id_collection' => $id])->first();
            }
        }

        // public function getAllimage()
        // {
        //     return $this->db->table(('tb_gambar'))
        //     ->join('tb_collections', 'tb_collections.id_collection = tb_gambar.id_collection')
        //     ->get()->getResultArray();
        // }
    }

?>