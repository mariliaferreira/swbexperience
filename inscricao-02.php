<?php
require ("db.php");
require ("functions.php");
echo date("d/m/Y H:i:s");

/* */
echo '<HR>';
print_r($dd);
if (strlen(trim($dd[1])) == 0) { $dd[1] = $_SESSION['scf_nome']; }
if (strlen(trim($dd[2])) == 0) { $dd[2] = $_SESSION['scf_email']; }
if (strlen(trim($dd[3])) == 0) { $dd[3] = $_SESSION['scf_curso']; }

if (strlen(trim($dd[4])) == 0) { $dd[4] = $_SESSION['scf_pais']; }
if (strlen(trim($dd[5])) == 0) { $dd[5] = $_SESSION['scf_UES']; }
?>
<div class="colunas">
	<div class="coluna-1">
		<label for="cpf" class="label-esp"><b>Nome</b></label>
		<br />
		<input class="input-inscricao preencher" id="dd1" name="dd1" value="<?php echo $dd[1];?>">
		</input>
		<br />
		<br />
		<label for="cpf" class="label-esp" ><b>Email</b></label>
		<br />
		<input class="input-inscricao preencher" id="dd2" name="dd2" value="<?php echo $dd[2];?>">
		</input>
		<br />
		<br />
		<label for="cpf"><b>Curso da PUCPR</b></label>
		<br />
		<input class="input-inscricao preencher" id="dd3" name="dd3" value="<?php echo $dd[3];?>">
		</input>
		<br />
		<br />
		<label for="cpf"><b>Universidade de destino</b></label>
		<br />
		<input class="input-inscricao preencher" id="dd4" name="dd4" value="<?php echo $dd[5];?>">
		</input>
		<br />
		<br />
		<label for="cpf"><b>País de Destino</b></label>
		<br />
		<input class="input-inscricao preencher" id="dd4" name="dd4"  value="<?php echo $dd[4];?>">
		</input>
		<br />
		<br />
		<label for="cpf"><b>Início e Término da vigência da bolsa</b></label>
		<br />
		Início
		<select class="selecionar">
			<option value="janeiro">janeiro</option>
			<option value="fevereiro">fevereiro</option>
			<option value="marco">março</option>
			<option value="abril">abril</option>
			<option value="maio">maio</option>
			<option value="junho">junho</option>
			<option value="julho">julho</option>
			<option value="agosto">agosto</option>
			<option value="setembro">setembro</option>
			<option value="outubro">outubro</option>
			<option value="novembro">novembro</option>
			<option value="dezembro">dezembro</option>
		</select>
		<select>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
		</select>
		<br />
		Término
		<select>
			<option value="janeiro">janeiro</option>
			<option value="fevereiro">fevereiro</option>
			<option value="marco">março</option>
			<option value="abril">abril</option>
			<option value="maio">maio</option>
			<option value="junho">junho</option>
			<option value="julho">julho</option>
			<option value="agosto">agosto</option>
			<option value="setembro">setembro</option>
			<option value="outubro">outubro</option>
			<option value="novembro">novembro</option>
			<option value="dezembro">dezembro</option>
		</select>
		<select>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
		</select>
		<br />
		<br />
		<label for="cpf"><b>Mês e ano de retorno à PUCPR</b></label>
		<br />
		<select>
			<option value="janeiro">janeiro</option>
			<option value="fevereiro">fevereiro</option>
			<option value="marco">março</option>
			<option value="abril">abril</option>
			<option value="maio">maio</option>
			<option value="junho">junho</option>
			<option value="julho">julho</option>
			<option value="agosto">agosto</option>
			<option value="setembro">setembro</option>
			<option value="outubro">outubro</option>
			<option value="novembro">novembro</option>
			<option value="dezembro">dezembro</option>
		</select>
		<select>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
		</select>
		<br />
	</div>
	<div class="coluna-2">
		<label for="cpf"><b>Você fez estágio durante o intercâmbio?</b></label>
		<br />
		<input type="radio" name="sim" value="sim" >
		Sim. Onde?
		<input class="input-inscricao">
		</input>
		<br />
		<input type="radio" name="sim" value="sim" >
		Não
		<br />
		<br />
		<label for="cpf"><b>Você fez pesquisa durante o intercâmbio?</b></label>
		<br />
		<input type="radio" name="sim" value="sim" >
		Sim. Onde?
		<input class="input-inscricao">
		</input>
		<br />
		<input type="radio" name="sim" value="sim" >
		Não
		<br />
		<br />
		<label for="cpf"><b>Você está trabalhando?</b></label>
		<br />
		<input type="radio" name="sim" value="sim" >
		Sim. Onde?
		<input class="input-inscricao">
		</input>
		<br />
		<input type="radio" name="sim" value="sim" >
		Não
		<br />
		<br />
		<label for="cpf"><b>Vocês está em algum programa de mestrado?</b></label>
		<br />
		<input type="radio" name="sim" value="sim" >
		Sim. Onde?
		<input class="input-inscricao">
		</input>
		<br />
		<input type="radio" name="sim" value="sim" >
		Em processo de seleção. Onde?
		<input class="input-inscricao">
		</input>
		<br />
		<input type="radio" name="sim" value="sim" >
		Não
		<br />
		<br />
		<label for="cpf"><b>Vocês está em algum programa de doutorado?</b></label>
		<br />
		<input type="radio" name="sim" value="sim" >
		Sim. Onde?
		<input class="input-inscricao">
		</input>
		<br />
		<input type="radio" name="sim" value="sim" >
		Em processo de seleção. Onde?
		<input class="input-inscricao">
		</input>
		<br />
		<input type="radio" name="sim" value="sim" >
		Não
		<br />
		<br />
		<button class="botao-enviar">
			Finalizar minha inscrição
		</button>
	</div>
</div>
