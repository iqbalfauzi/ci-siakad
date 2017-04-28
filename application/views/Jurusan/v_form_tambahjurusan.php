<?php 
$info=$this->session->flashdata('info');
if(!empty($info))
{
	echo($info);
}
;?>

<form class="form-horizontal" method="post" onsubmit="return cekform();" action="<?php echo base_url(); ?>Jurusan/simpan">
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Jurusan </label>

		<div class="col-sm-5">
			<input type="text" id="kode" placeholder="Kode Jurusann" name="kode" class="col-xs-10 col-sm-5"  value="<?php echo $kode;?>" />
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Jurusan </label>

		<div class="col-sm-9">
			<input type="text" id="jurusan" placeholder="Jurusan" name="jurusan" class="col-xs-10 col-sm-5"  value="<?php echo $jurusan;?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Singkatan </label>

		<div class="col-sm-9">
			<input type="text" id="singkatan" placeholder="Singkatan" name="singkatan" class="col-xs-10 col-sm-5" value="<?php echo $singkatan;?>"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Ketua Jurusan </label>

		<div class="col-sm-9">
			<input type="text" id="ketua" placeholder="Ketua Jurusan" name="ketua" class="col-xs-10 col-sm-5" value="<?php echo $ketua;?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> NIK</label>

		<div class="col-sm-9">
			<input type="text" id="nik" placeholder="NIK" name="nik" class="col-xs-10 col-sm-5" value="<?php echo $nik;?>"/>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Akreditasi </label>

		<div class="col-sm-9">
			<input type="text" id="akreditasi" placeholder="Akreditasi" name="akreditasi" class="col-xs-10 col-sm-5" value="<?php echo $akreditasi;?>"/>
		</div>
	</div>

	<div class="clearfix form-actions">
		<div class="col-md-offset-1 col-md-9">
			<button type="Submit" class="btn btn-info">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
			</button>

			&nbsp; &nbsp; &nbsp;
			<button type="reset" class="btn" value="Reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>

			&nbsp; &nbsp; &nbsp;
			<a href="<?php echo base_url(); ?>index.php/jurusan" class="btn btn-inverse glyphicon glyphicon-file"> Kembali</a>
			
		</div>
	</div>
</form>
<script type="text/javascript">
	function cekform() {
		if(!$("#kode").val())
		{
			alert('kode tidak boleh kosong');
			$("#kode").focus()
			return false;
		}
		if(!$("#jurusan").val())
		{
			alert('jurusan tidak boleh kosong');
			$("#jurusan").focus()
			return false;
		}
		if(!$("#singkatan").val())
		{
			alert('singkatan tidak boleh kosong');
			$("#singkatan").focus()
			return false;
		}
		if(!$("#ketua").val())
		{
			alert('ketua tidak boleh kosong');
			$("#ketua").focus()
			return false;
		}
		if(!$("#nik").val())
		{
			alert('nik tidak boleh kosong');
			$("#nik").focus()
			return false;
		}
		if(!$("#akreditasi").val())
		{
			alert('akreditasi tidak boleh kosong');
			$("#akreditasi").focus()
			return false;
		}
	}
</script>