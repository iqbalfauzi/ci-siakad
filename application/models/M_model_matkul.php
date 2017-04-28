<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model_matkul extends CI_Model {
	public function tampildatamatkul($key)
	{
		/*return $this->db->get('mata_kuliah');*/ //ini adalah untuk menammpilkan 1 table

		/*$data="SELECT
		mata_kuliah.aktif,
		mata_kuliah.smt,
		mata_kuliah.sks,
		mata_kuliah.nama_mk,
		mata_kuliah.kd_prodi,
		mata_kuliah.kd_mk
		FROM
		mata_kuliah
		";*/ //ini adalah untuk menammpilkan 1 table

		/*$data="SELECT
		mata_kuliah.kd_mk,
		mata_kuliah.nama_mk,
		mata_kuliah.sks,
		mata_kuliah.smt,
		mata_kuliah.aktif,
		prodi.prodi
		FROM
		mata_kuliah
		INNER JOIN prodi ON prodi.kd_prodi = mata_kuliah.kd_prodi
		";*/ //ini adalah untuk menammpilkan 2 table


		/*$data="SELECT
		mata_kuliah.kd_mk,
		mata_kuliah.nama_mk,
		mata_kuliah.sks,
		mata_kuliah.smt,
		mata_kuliah.aktif,
		prodi.prodi
		FROM
		mata_kuliah ,
		prodi
		WHERE
		prodi.kd_prodi = mata_kuliah.kd_prodi";*/  //ini adalah untuk menammpilkan 2 table

		/*return $this->db->query($data);*/ //parameter yang wajib ditambahkan ketika kita akan membuat source code diatas


		

		################menampilkan dengan PHP################
		$this->db->where('kd_prodi',$key);
		$query= $this->db->get('prodi');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$hasil=$row->prodi;
			}
		}
		else{
			$hasil='';
		}
		return $hasil;

	}
	public function getlistjurusan()
	{
		return $this->db->get('prodi');
	}
}
