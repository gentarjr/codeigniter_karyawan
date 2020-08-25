<div role="tabpanel" class="form-horizontal tab-pane active" id="add_admin">
	<div class="panel">
		<div class="col-md-12">
			<div class="form-group">
				<div class="button-group">
					<div class="col-md-12 col-xs-12">
						<button type="submit" id="btn-add-data-admin" class="btn btn-info col-md-12">TAMBAH DATA ADMIN</button>
					</div>
				</div>
				<div class="button-group">
					<div class="col-md-12 col-xs-12">
						<button type="submit" id="btn-hide-data-admin" class="btn btn-warning col-md-12">HIDE DATA ADMIN</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-title-data-admin mt-0 type-input-adm">
		<h2><span>MASUKKAN DATA ADMIN</span></h2>
	</div>
	<div class="form-horizontal-data-admin">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<div class="col-sm-10 col-xs-12" id="input-type-adm">
						<div class="col-sm-2" id="div-label-nik-adm">
							<label for="">NIK : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group col-sm-8" id="div-inp-nik-adm">
									<input type="text" class="form-control input-sm" id="inp-nik-adm" maxlength="10">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-name">
						<div class="col-sm-2" id="div-label-name-adm">
							<label for="">NAMA : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group col-sm-8" id="div-inp-name-adm">
									<input type="text" class="form-control input-sm" id="inp-name-adm">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-alamat">
						<div class="col-sm-2" id="div-label-alamat-adm">
							<label for="">ALAMAT : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group col-sm-8" id="div-inp-alamat-adm">
									<textarea class="form-control input-sm" id="inp-alamat-adm"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-email">
						<div class="col-sm-2" id="div-label-email-adm">
							<label for="">EMAIL : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group col-sm-8" id="div-inp-email-adm">
									<input type="email" class="form-control input-sm" id="inp-email-adm">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-periode">
						<div class="col-sm-2" id="div-label-periode">
							<label for="">PERIODE AKTIF : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group" id="div-inp-periode">
									<input type="date" class="form-control input-sm inp-tanggal" id="inp-periode-adm">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-password">
						<div class="col-sm-2" id="div-label-password-adm">
							<label for="">PASSWORD : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group col-sm-8" id="div-inp-password-adm">
									<input type="password" class="form-control input-sm" id="inp-password-adm">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-created-date">
						<div class="col-sm-2" id="div-label-created-date">
							<label for="">CREATED DATE : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group" id="div-inp-created-date">
									<input type="date" class="form-control input-sm inp-tanggal" id="inp-created-date-adm">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-created-by">
						<div class="col-sm-2" id="div-label-created-by-adm">
							<label for="">CREATED BY : </label>
						</div>
						<div class="row">
							<div class="col-xs-7">
								<div class="input-group col-sm-8" id="div-inp-created-by-adm">
									<input type="text" class="form-control input-sm" id="inp-created-by-adm" maxlength="10" disabled="true">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-status">
						<div class="col-sm-2" id="div-label-status">
							<label for="">Print Status : </label>
						</div>
						<div class="col-sm-10 col-xs-12" id="inp-status-adm">
							<div class="row">
								<div class="col-xs-6">
									<select id="slc-status-adm" class="form-control">
										<option value="">--SILAHKAN PILIH--</option>
										<option value="0">TIDAK AKTIF</option>
										<option value="1">AKTIF</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-10 col-xs-12" id="input-type-akses">
						<div class="col-sm-2" id="div-label-akses">
							<label for="">Print Status : </label>
						</div>
						<div class="col-sm-10 col-xs-12" id="inp-akses-adm">
							<div class="row">
								<div class="col-xs-6">
									<select id="slc-akses-adm" class="form-control">
										<option value="">--SILAHKAN PILIH--</option>
										<option value="admin">ADMIN</option>
										<option value="user">USER</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="button-group">
						<div class="col-md-12 col-xs-12">
							<button type="submit" id="btn-add-adm" class="btn btn-primary btn-search">TAMBAH</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>