<script src="<?php echo URL_BASE."assets/js/compomentes/geral.js" ?>"></script>
<section class="caixa">
				<div class="thead"><i class="ico cad"></i>Formulario de cadastro</div>
				<div class="base-form">
					<div class="caixa-form">
						<div class="thead">Inserir novo cadastro</div>
						<form action="<?php echo URL_BASE."contato/salvar" ?>" method="POST" enctype="multipart/form-data">
							<div class="rows">
								 <?php $this->verMSG(); 
								       $this->verERRO();
								  ?>
							<div class="rows">
							  <div class="col-3 position-relative">		
							  <?php $image = isset($contato->foto) ? $contato->foto : "img-usuario.png" ?>							
									<img src="<?php echo URL_IMAGEM .$image ?>" class="img-fluido foto" id="imgUp">
									<div  class="foto-file">
										<input type="file" id="arquivo"  name="arquivo" onchange="pegaArquivo(this.files)"><label for="arquivo" >
										<span>Editar foto</span></label>
									</div>
									
								</div>
								
								<div class="col-9">
								<div class="rows">
									<div class="col-12">
										<label>Nome</label>
										<input name="contato" value="<?php echo isset($contato->contato) ? $contato->contato : null?>" type="text" placeholder="Insira um nome" class="form-campo">
									</div>
									<div class="col-4">
										<label>Cep</label>
										<input name="cep" value="<?php echo isset($contato->cep) ? $contato->cep : null?>" type="text" placeholder="Insira seu CEP" class="form-campo">
									</div>
									
									<div class="col-8">				
										<label>Endereço</label>
										<input name="endereco" value="<?php echo isset($contato->endereco) ? $contato->endereco : null?>" type="text" placeholder="Insira seu endereço" class="form-campo">
									</div>
								</div>
								</div>
								<div class="col-4">
									<label>Complemento</label>
									<input name="complemento" value="<?php echo isset($contato->complemento) ? $contato->complemento : null?>" type="text" placeholder="Insira um Número" class="form-campo">	
								</div>			
								<div class="col-2">
									<label>Número</label>
									<input name="numero" value="<?php echo isset($contato->numero) ? $contato->numero : null?>" type="text" placeholder="Insira um Número" class="form-campo">	
								</div>									
								<div class="col-6">
									<label>Bairro</label>
									<input name="bairro" value="<?php echo isset($contato->bairro) ? $contato->bairro : null?>" type="text" placeholder="Insira seu bairro" class="form-campo">
								</div>
								<div class="col-4">
									<label>Cidade</label>
									<input name="cidade" value="<?php echo isset($contato->cidade) ? $contato->cidade : null?>" type="text" placeholder="Insira sua cidade" class="form-campo">	
								</div>	
							
								<div class="col-4">
									<label>UF</label>
									<input name="uf" value="<?php echo isset($contato->uf) ? $contato->uf : null?>" type="text" placeholder="Insira seu estado" class="form-campo">	
								</div>									
													
								<div class="col-4">
									<label>Celular</label>
									<input name="celular" value="<?php echo isset($contato->celular) ? $contato->celular : null?>" type="text" placeholder="Insira seu celular" class="form-campo">
								</div>
								<div class="col-4">
									<label>CPF</label>
									<input name="cpf" value="<?php echo isset($contato->cpf) ? $contato->cpf : null?>" type="text" placeholder="Insira seu CPF" class="form-campo">
								</div>
								<div class="col-4">
									<label>SEXO</label>
									<input name="sexo" value="<?php echo isset($contato->sexo) ? $contato->sexo : null?>" type="text" placeholder="Insira seu sexo" class="form-campo">
								</div>
								<div class="col-4">
									<label>Data de cadastro</label>
									<input name="data_cadastro" value="<?php echo isset($contato->data_cadastro) ? $contato->data_cadastro : null?>" type="date" placeholder="Insira sua data" class="form-campo">
								</div>
							
							
								<div class="col-6">
									<label>Email</label>
									<input name="email" value="<?php echo isset($contato->email) ? $contato->email : null?>" type="text" placeholder="Insira um email" class="form-campo">
								</div>
								<div class="col-6">
									<label>Site</label>
									<input name="site" value="<?php echo isset($contato->site) ? $contato->site : null?>" type="text" placeholder="Insira seu Site" class="form-campo">
								</div>
								<div class="col-6">
									<label>LOGIN</label>
									<input name="login" value="<?php echo isset($contato->login) ? $contato->login : null?>" type="text" placeholder="Insira um email" class="form-campo">
								</div>
								<div class="col-6">
									<label>SENHA</label>
									<input type="password" name="senha" value="<?php echo isset($contato->senha) ? $contato->senha : null?>" type="text" placeholder="Insira seu Site" class="form-campo">
								</div>
								<div class="col-12">
									<label>Observação</label>
									<textarea rows="10" name="observacao" class="form-campo"></textarea>
								</div>
								<input type="hidden" name="id_contato" value="<?php echo isset($contato->id_contato) ? $contato->id_contato : null?>" />
								<input type="submit" value="Cadastrar" class="btn">
						</form>
					</div>
				</div>
				</section>