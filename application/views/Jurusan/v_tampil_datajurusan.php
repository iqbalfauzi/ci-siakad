<p><a href="<?php echo base_url(); ?>Jurusan/tambah" class="btn btn-primary btn-xs">Tambah</a></p>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">

	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Jurusan</th>
			<th>Singkatan</th>
			<th>Ketua Jurusan</th>
			<th>NIK</th>
			<th>Akreditasi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php
			$no=1;
			foreach ($data->result()
				as $key) 
			{?>
			<td><?php echo $no++;?></td>
			<td><?php echo $key->kd_prodi ;?></td>
			<td><?php echo $key->prodi ;?></td>
			<td><?php echo $key->singkat ;?></td>
			<td><?php echo $key->ketua_prodi ;?></td>
			<td><?php echo $key->nik ;?></td>
			<td><?php echo $key->akreditasi ;?></td>
			<td>
				<a href="<?php echo base_url();?>Jurusan/edit/<?php echo $key->kd_prodi;?>">Edit</a>
				<a href="<?php echo base_url();?>Jurusan/delete/<?php echo $key->kd_prodi;?>" onclick="return confirm('Anda Yakin ingin menghapus data ini bro???');">Delete</a>
			</td>
		</tr>
		<?php }?>		
	</tbody>
</table>