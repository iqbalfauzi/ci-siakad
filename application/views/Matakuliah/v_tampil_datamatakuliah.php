<p><a href="<?php echo base_url(); ?>Matakuliah/tambah" class="btn btn-primary btn-xs">Tambah</a></p>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th>No</th>
			<th>Kode Jurusan</th>
			<th>Kode MK</th>
			<th>Nama MK</th>
			<th>SKS</th>
			<th>Semester</th>
			<th>Aktif</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no=1;
			foreach ($data->result()
				as $key) 
			{
				$jurusan =$this->m_model_matkul->tampildatamatkul($key->kd_prodi);

				?>
			<td><?php echo $no++;?></td>

			<!-- <td><?php echo $key->prodi ;?></td> -->

			<td><?php echo $jurusan ;?></td>
			<td><?php echo $key->kd_mk ;?></td>
			<td><?php echo $key->nama_mk ;?></td>
			<td><?php echo $key->sks ;?></td>
			<td><?php echo $key->smt ;?></td>
			<td><?php echo $key->aktif ;?></td>
			<!-- <td>
				<a href="<?php echo base_url();?>Jurusan/edit/<?php echo $key->kd_prodi;?>">Edit</a>
				<a href="<?php echo base_url();?>Jurusan/delete/<?php echo $key->kd_prodi;?>" onclick="return confirm('Anda Yakin ingin menghapus data ini bro???');">Delete</a>
			</td> -->
		</tr>
		<?php }?>		
	</tbody>
</table>