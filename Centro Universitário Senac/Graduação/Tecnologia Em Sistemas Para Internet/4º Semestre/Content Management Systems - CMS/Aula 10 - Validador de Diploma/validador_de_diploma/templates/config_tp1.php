<br><br>
<strong>
	<?php 

		if(isset($msg)){
			echo $msg;
		}
		
	?>
</strong>
<br><br>
<form method="post">
	Nome do Aluno no Diploma: <input type="text" name="nome"><br><br>
	<input type="submit" value="Gravar e Gerar Código do Diploma">
</form>