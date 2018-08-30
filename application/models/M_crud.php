<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_crud extends CI_Model
	{
		function data()
		{
			return $this->db->get('mahasiswa')->result();
		}

		function simpan($table,$data)
		{
			$this->db->insert($table,$data);
		}

		function update($table,$where,$data)
		{
			$this->db->where('no_induk', $where);
			$this->db->update($table,$data);
		}

		function delete($table,$where)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		function autoNim()
		{
			$this->db->select('Right(mahasiswa.no_induk,2) as kode ',false);
            $this->db->order_by('no_induk', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('mahasiswa');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = date('ym').$kodemax;
            return $kodejadi;

		}
	}
?>