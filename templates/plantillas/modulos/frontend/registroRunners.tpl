<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6 offset-sm-3">
			<img src="{$PAGE.iconos}logo.png" class="img-fluid" />
			<div class="card card-default">
				<div class="card-body">
					<form id="frmRegistro" class="registroFrontEnd">
						<div class="row">
							<div class="col-xs-12">
								<h3>¿Quieres ser un Runner?</h3>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12">
								<input id="txtNombre" name="txtNombre" class="form-control" placeholder="Tu nombre" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Correo electrónico" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="tel" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Teléfono" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="password" id="txtPass2" name="txtPass2" class="form-control" placeholder="Confirma" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary">Registrar</button>
								<br /><br />
								<a href="login">¿Ya tienes una cuenta? inicia sesión</a>
							</div>
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
