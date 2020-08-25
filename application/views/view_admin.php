<div class="main">
	<div class="title-heading">
		<div class="page-title head-name-menu" style="min-height: 50px;">
			<h1>MENU ADMINISTRATOR</h1>
		</div>
	</div>
	<div class="content">
		<div class="responsive">
			<div class="panel">
				<div class="panel-body">
					<div id="ADM" class="tipe-identitas">
						<ul class="nav nav-tabs sub-tabs hidden-xs" role="tablist">
							<!--edited by Ahmad 11/03/2019, nambah id untuk tiap tab -->
							<li role="presentation" class="active" id="tab-add-admin"><a id="add-admin-tab" href="#add_admin" aria-controls="add_admin" role="tab" data-toggle="tab">ADD ADMIN</a></li>
							<li role="presentation" id="tab-list-admin"><a id="list-admin-tab" href="#list_admin" aria-controls="list_admin" role="tab" data-toggle="tab">LIST ADMIN</a></li>
							<li role="presentation" id="tab-update-admin"><a id="update-admin-tab" href="#update_admin" aria-controls="update_admin" role="tab" data-toggle="tab">UPDATE ADMIN</a></li>
						</ul>
						<div class="tab-content">
							<select id="perorangan-pekerjaan-opt" class="form-control select-tabs visible-xs">
								<option data-target="#add_admin">TAMBAH</option>
								<option data-target='#list_admin'>DAFTAR</option>
								<option data-target='#update_admin'>UPDATE</option>
							</select>
							<?php
							$this->load->view('view_admin/tab_tambah_admin');
							$this->load->view('view_admin/tab_daftar_admin');
							$this->load->view('view_admin/tab_update_admin');
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>