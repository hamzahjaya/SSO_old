<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>SSO KPU RI</title>
	<a href="<?=base_url('member/user')?>">
</head>
<style media="screen">
	.ui.center.header{
		padding-top: 50px;
	}
</style>

<body>
	<div class="ui container">
		<h1 class="ui center aligned header">SSO KPU RI | Aplikasi</h1>

		<?php echo $this->session->flashdata('message'); ?>
		<div class="ui two column grid">
			<div class="column">
				<div class="ui attached message">
					<h4>Input Aplikasi</h4>
				</div>
				<form class="ui form attached fluid segment"method="post" action="<?= base_url('member/user/add')  ?>">
					<div class="field">
						<label>Name</label>
						<input type="text" name="name" placeholder="Name">
					</div>
					<div class="ui field">
						<label>Description</label>
						<input type="text" name="description" placeholder="Description">
					</div>
					<div class="ui field">
						<div class="inline field">
							<div class="ui toggle checkbox">
								<input type="checkbox" tabindex="0" class="hidden">
								<label>CSRF Aktif</label>
							</div>
						</div>
					</div>
					<button class="ui button primary" type="submit">Submit</button>
					<div class="ui error message"></div>

					<!-- aktifkan jika ingin mengaktifkan keamanan csrf -->
					 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"> -->
				</form>
			</div>
			<div class="column">
				<div class="ui top attached tabular menu">
					<a class="item active" data-tab="first">Data CSRF</a>
					<a class="item" data-tab="second">Lainnya</a>
				</div>
				<div class="ui bottom attached tab segment active" data-tab="first">
					<table class="ui celled table" style="width:100%" id="table_id">
						<thead>
							<tr>
								<th style="text-align:center">No</th>
								<th>Name</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<?php
                $no=1;
                foreach ($dataCsrf as $row): ?>
							<tr>
								<td style="text-align:center">
									<?=$no++?>
								</td>
								<td>
									<?=$row->name?>
								</td>
								<td>
									<?=$row->description?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="ui bottom attached tab segment" data-tab="second">
					<div class="ui attached message">
						<h4>Keterangan</h4>
					</div>
					<div class="ui attached fluid segment">

						<ol class="ui list">
							<li>Unduh dan cara penggunaan <a href="https://github.com/Susantokun/ci_csrf" target="_blank">ci_csrf</a></li>
							<li>Unduh dan cara penggunaan <a href="https://github.com/Susantokun/ci_csrf_attack" target="_blank">ci_csrf_attack</a></li>
							<li>Demo cek di Youtube Channel Susantokun</li>
							<li>Informasi Susantokun :
								<ol>
									<li><a href="http://bit.ly/susantokun" target="_blank">Susantokun</a></li>
									<li><a href="http://bit.ly/susantokun_paypal" target="_blank">Paypal</a></li>
									<li><a href="http://bit.ly/susantokun_youtube" target="_blank">Youtube</a></li>
									<li><a href="http://bit.ly/susantokun_youtube_gaming" target="_blank">Youtube Gaming</a></li>
								</ol>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?=base_url('assets')?>/vendor/semantic/dist/semantic.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.semanticui.min.js"></script>
	<script type="text/javascript">
		$('.ui.form')
			.form({
				fields: {
					name: 'empty',
					description: 'empty'
				}
			});

		$(document).ready(function() {
			$('#table_id').DataTable({
				"order": []
			});
		});

		$('.message .close')
			.on('click', function() {
				$(this)
					.closest('.message')
					.transition('fade');
			});

		$('.ui.checkbox')
			.checkbox();
		$('.menu .item')
			.tab();
	</script>
</body>

</html>