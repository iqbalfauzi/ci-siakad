<script type="text/javascript">
	$(document).ready(function(){


		$("#simpan").click(function(){
			var string=$("#my-form").serialize();
			$.ajax({
				type	:'POST',
				uri		: '<?php echo site_url();?>/Matakuliah/simpan',
				data	: string,
				success : function(data)
				{
					alert(data);
				}
			});
		});
	});

</script>

<form class="form-horizontal" name="my-form" id="my-form">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Pilih Jurusan </label>

		<div class="col-sm-5">
			<select name="jurusan" id="jurusan">
				<option value="">--Pilih--</option>
				<?php
				// $jurusan=$this->db->get('prodi');
				$jurusan = $this->m_model_matkul->getlistjurusan();
				foreach ($jurusan->result() as $row) {
					
					;?>
					<option value="<?php echo $row->kd_prodi;?>"><?php echo $row->prodi;?></option>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Kode MK </label>
			<div class="col-sm-5">
				<input type="text" name="kode" id="kode" placeholder="Kode MK" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama MK </label>
			<div class="col-sm-5">
				<input type="text" name="matkul" id="matkul" placeholder="Nama MK" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> SKS  </label>
			<div class="col-sm-5">
				<input type="text" name="sks" id="sks" placeholder="SKS" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Semester </label>
			<div class="col-sm-5">
				<input type="text" name="smt" id="smt" placeholder="Semester" required>
			</div>
		</div>
		<div class="clearfix form-actions center">
			<button type="button" name="simpan" id="simpan" class="btn btn-primary btn-xs">Simpan</button>
			
		</div>
	</form>