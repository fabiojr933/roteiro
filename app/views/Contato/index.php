<?php $this->verMSG();
$this->verERRO();
?>
<section class="caixa">
	<div class="thead"><i class="ico lista"></i> Lista de contatos</div>
	<div class="base-lista">
		<div>
			<div class="text-end d-flex">
				<a href="<?php echo URL_BASE . "contato/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar cliente</a>
				<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
			</div>
		</div>
				<div class="lst mostraFiltro">
						<form action="<?php echo URL_BASE."Contato/filtro" ?>" method="GET">
						<div class="rows">
								<div class="col-4">
									<select name="campo">
										<option selected>Selecione o valor...</option>
										<option value="id_contato">Id</option>
										<option value="contato">Nome</option>
										<option value="endereco">Endereco</option>
										<option value="cidade">Cidade</option>
										<option value="site">Site</option>
										<option value="celular">Fone</option>
									</select>
								</div>
								<div class="col-6">
									<input type="text"  name="valor" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn" value="pesquisar">
								</div>
						</div>
						</form>
					</div> 


		<div class="tabela-responsiva">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
				<thead>
					<tr>
						<th align="left">Nome</th>
						<th align="left">Email</th>
						<th align="center">Telefone</th>
						<th align="center">Ação</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($lista as $contato) { ?>
						<tr>
							<td><?php echo $contato->contato ?></td>
							<td><?php echo $contato->email ?></td>
							<td align="center"><?php echo $contato->celular ?></td>
							<td align="center">
								<a href="<?php echo URL_BASE . "Contato/edit/" . $contato->id_contato ?>" class="btn alterar">Editar</a>
								<a href="<?php echo URL_BASE . "Contato/excluir/" . $contato->id_contato ?>" class="btn excluir">Excluir</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<p class="nao-encontrado"></p>

	</div>
	</div>
</section>