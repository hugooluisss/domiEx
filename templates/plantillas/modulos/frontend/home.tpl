<div class="container">
	<div class="row">
		<div class="col-12 col-sm-7">
			<div class="card card-transparente">
				<div class="card-body">
					<h2>LOGISTICA INTELIGENTE</h2>
					Agil - seguro - confiable - sustentable
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-5">
			<div class="card card-default">
				<div class="card-body">
					<form id="frmRegistroTransportista">
						<div class="row">
							<div class="col-xs-12">
								<h3>Forma parte de nuestro equipo de trabajo</h3>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12">
								<input id="txtRazonSocial" name="txtRazonSocial" class="form-control" placeholder="Razón social" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input id="txtRepresentante" name="txtRepresentante" class="form-control" placeholder="Representante" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Teléfono" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Correo electrónico" />
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<input type="password" id="txtPass2" name="txtPass2" class="form-control" placeholder="Contraseña" />
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-link">Registrarte</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/frontend/winRegistroCarga.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/frontend/winMapa.tpl"}

{include file=$PAGE.rutaModulos|cat:"modulos/frontend/winSigueTuCarga.tpl"}