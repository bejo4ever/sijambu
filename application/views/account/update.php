<html>
<body>
<div id="main">


<div id="modulmenu">
	<?php if( $this->session->userdata('current_modulmenu') == 'REGISTER' ) $type = 'current_modulmenu'; else $type = 'modulmenu';?>
	<div class="<?php echo $type?>"><a href="<?=base_url()?>index.php/account/add_controller"> TAMBAH</a></div> 
	<?php if( $this->session->userdata('current_modulmenu') == 'PROFILE' ) $type = 'current_modulmenu'; else $type = 'modulmenu';?>
	<div class="<?php echo $type?>"><a href="<?=base_url()?>index.php/account/search_controller"> CARI</a></div>
	<!--<?php if( $this->session->userdata('current_modulmenu') == 'PROFILE' ) $type = 'current_modulmenu'; else $type = 'modulmenu';?>
	<div class="<?php echo $type?>"><a href="<?=base_url()?>index.php/account/update_controller"> UBAH</a></div>-->
	<?php if( $this->session->userdata('current_modulmenu') == 'PROFILE' ) $type = 'current_modulmenu'; else $type = 'modulmenu';?>
	<div class="<?php echo $type?>"><a href="<?=base_url()?>index.php/account/delete_controller"> HAPUS</a></div>
</div>
	
<div class="modulheader">
UBAH
</div>
<div class="content">
<div class="notification">
<?php echo $notification_message;?>
</div>

<?php if ($content==""){?>
<fieldset>
<legend>Account Detail</legend> 


<?php 
	$attributes = array('id' => 'search_form');
	$field1 = array( 
	'type' => 'text',  
	'name' => 'username',
	'id' => 'username',
	'rules' => 'required',
	);

echo form_open('account/update_controller/searchAccount',$attributes);?>
<table id="form">
	<tr>
	<td>Username</td><td>: <?php echo form_input($field1); ?></td>
	</tr>
	<tr>
	<td><?php echo form_submit('cari', 'Cari');?></td>
	</tr>
</table>
<?php echo form_close();?>
</fieldset>
<?php } else {?>


<fieldset>
<legend>Account Information</legend>

<?php 
	$attributes = array('id' => 'register_form');
	$field1 = array( 
	'type' => 'text',  
	'name' => 'username',
	'id' => 'username',
	'readonly' => 'readonly',
	'value' => $content['username'],
	'rules' => 'required',
	);
	$field3 = array(
	'type' => 'text',  
	'name' => 'name',
	'value' => $content['nama'],
	'id' => 'name',
	);
	$field4 = array(
	'type' => 'text',  
	'name' => 'address',
	'value' => $content['alamat'],
	'id' => 'address',
	);
	$field5 = array(
	'pegawai_toko' => 'Pegawai',  
	'pemilik_toko' => 'Pemilik',
	'pengelola_toko' => 'Pengelola',
	);
	$field6 = array(
	'type' => 'text',  
	'name' => 'telp',
	'value' => $content['nohp'],
	'id' => 'telp',
	);

echo form_open('account/update_controller/updateAccount',$attributes);?>
<table id="form">
	<tr>
	<td>Username</td><td>: <?php echo form_input($field1); ?></td>
	</tr>
	
	<tr>
	<td>Nama</td><td>: <?php echo form_input($field3); ?></td>
	</tr>
	<tr>
	<td>Alamat</td><td>: <?php echo form_input($field4); ?></td>
	</tr>
	<tr>
	<td>Jabatan</td><td>: <?php echo form_dropdown('jabatan',$field5,$content['role_name']); ?></td>
	</tr>
	<tr>
	<td>No telp</td><td>: <?php echo form_input($field6); ?></td>
	</tr>
	<tr>
	<td><?php echo form_submit('ubah', 'Ubah');?></td>
	</tr>
</table>
<?php echo form_close();?>
</div>

</fieldset>

<?php } ?>
</div>
</div>
</body>
</html>
