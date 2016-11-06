<style type="text/css">
	#home_info_div {
		margin-top: 100px;
	}
	#home_info_div h2 {
		text-align: center;
		font-size: 20px;
		padding: 10px 0;
	}
	#home_info_div table {
		margin: 0px auto;
	}
	#home_info_div table td {
		padding: 7px;
	}
</style>
<script type="text/javascript">
	$(function() {
		console.log('ddd');
		alert(1);
		$('.progress', parent.document).hide();
	})
</script>
<div id="home_info_div">
	<h2>Welcome</h2>
	<table>
		<tr>
			<td class="c1"><?php echo __('Name, Surname'); ?></td>
			<td class="c2"><?php echo $user_data->name_surname; ?></td>
		</tr>
		<tr>
			<td class="c1"><?php echo __('E-mail'); ?></td>
			<td class="c2"><?php echo $user_data->email; ?></td>
		</tr>
		<tr>
			<td class="c1"><?php echo __('Type'); ?></td>
			<td class="c2"><?php echo $user_data->type; ?></td>
		</tr>
		<tr>
			<td class="c1"><?php echo __('Last login'); ?></td>
			<td class="c2"><?php echo date('d.m.Y H:i', strtotime($user_data->last_login)); ?></td>
		</tr>
		
		<tr>
			<td class="c1"><?php echo __('System language'); ?></td>
			<td class="c2"><?php echo $user_data->sys_lang; ?></td>
		</tr>
		<tr>
			<td class="c1"><?php echo __('Content language'); ?></td>
			<td class="c2"><?php echo $user_data->content_lang; ?></td>
		</tr>
		
	</table>
</div>
<?php
//print_r($user_data);
?>