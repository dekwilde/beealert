<script>

<?php
	if($lang == "br") {
?>
	//index
	var ccd_info_causas = "Causa(s) apontadas: ";
	var ccd_info_intensity = "Comeias afetadas:";
	var ccd_incomplet = "Ocorrência não concluída";
	
	
	// AVISOS

	var error_str = "Erro ao gravar informações. Inicie o processo novamente.\nSe o problema persistir entre em contato com o nosso suporte.\nObrigado";
	var error_nome = "Nome incompleto! Digite o nome e sobrenome";
	var error_email = "Email invalido";

	// cadastro
	var error_confirm = "Confirme a senha";
	var error_pass = "Senha não confere";
	var null_senha = "Preencha a senha";
	var null_email = "Preencha o email";
	var null_pais = "Selecione um país";
	var null_estado = "Preencha um Estado";
	var null_cidade = "Preencha uma Cidade";
	var null_cep = "Preencha um CEP";
	var null_escolaridade = "Selecione o seu grau de Escolaridade";
	var null_atividade = "Selecione uma atividade";
	var null_abelhas = "Selecione um tipo";
	var null_exploracao = "Selecione uma exploração";
	var null_aceito = "Por favor, aceite as regras do regulamento.";
	var error_double = "Email já cadastrado. Por favor, escolha outro email ou tente recuperar seu cadastro. Obrigado.";
	var error_recover = "Email não encontrado, verifique o email digitado. Obrigado.";

	// login
	var status_recover = "A senha foi enviada para seu email.";
	var error_recover = "Email não encontrado, verifique o email digitado. Obrigado.";
	var error_login = "Usuário não encontrado";


	// passo 4
	var error_filesize = "Arquivo muito grande, ele deve ser menor que 8Mb";
	var error_fileformat = "O arquivo deve estar em formato ZIP, RAR, PNG ou JPG";
	var null_causas = "Selecione um das causas";
	var null_aplicacao = "Indique se notou a aplicação de defensivos";
	var null_areas = "Indique as principais floradas";
	var null_prop = "Indique se é o proprietário";

	// passo3
	var null_slider = "Dados incompletos! Você precisa preencher o valor baixo, medio e alto";
	var null_total = "Coloque o total de colméias";

	// passo 2
	var status_map = "<div style='color: black'>Procure o local exato pelo CEP ou endereço no campo acima.</div>";
	var error_marker = "Endereço não encontrado, por favor posicione o marcador em um local mais amigável: ";
	var status_drag = "<div style='color: black'>Arraste o marcador até o local exato do apiário.</div>";
	var error_map = "Não foi possível localizar.\n Escreva o CEP corretamente como está indicado:\n Ex.: 99999-999\n";
	var null_map = "Preencha com um endereço ou CEP";
	var null_tipo = "Selecione um dos tipos de apiário";
	var check_map = "O marcador no mapa está no local exato da ocorrência?";
	var error_drag = "O marcador se encontra em um local inviável para ser gravado na base de dados.\nPor favor posisione em um local mais amigável.\n";
	var null_marker = "Você precisa definir o local exato da ocorrência use o campo de busca e arraste o marcador no mapa para o ponto correto";

	// passo 1
	var error_mes = "Você precisa definir o mês exato da ocorrência";
<?php
	}
?>	



<?php
	if($lang == "us") {
?>
	//index
	var ccd_info_causas = "affected beehives";
	var ccd_info_intensity = "affected beehives";
	var ccd_incomplet = "Report not completed";


	// AVISOS

	var error_str = "Error writing information. Start the process again.\n If the problem persists please contact our support.\nThanks";
	var error_nome = "Incomplete name! Enter the first name and last name";
	var error_email = "Invalid email";

	// cadastro
	var error_confirm = "Confirm the password";
	var error_pass = "Password does not match";
	var null_senha = "Fill field password";
	var null_email = "Fill field email";
	var null_pais = "Select a Country";
	var null_estado = "Fill a State";
	var null_cidade = "Fill a City";
	var null_cep = "Fill a zip code";
	var null_escolaridade = "Selecione o seu grau de Escolaridade";
	var null_atividade = "Select an activity";
	var null_abelhas = "Select a type";
	var null_exploracao = "Select a produce";
	var null_aceito = "Please accept the rules.";
	var error_double = "Email already registered. Please choose another email or try to retrieve your registration. Thank you.";
	var error_recover = "Email not found, check the email you entered. Thank you.";

	// login
	var status_recover = "The password has been sent to your email.";
	var error_recover = "Email not found, check the email you entered. Thank you.";
	var error_login = "User not found";


	// passo 4
	var error_filesize = "File too big, it should be less than 8Mb";
	var error_fileformat = "The file must be in ZIP, RAR, PNG or JPG format";
	var null_causas = "Select one of the causes";
	var null_aplicacao = "Indicate if you noticed the application of pesticides";
	var null_areas = "Indicate the main flowering";
	var null_prop = "Indicate whether the owner is";

	// passo3
	var null_slider = "Incomplete data! You need to fill in the low, medium and high value";
	var null_total = "Put total of hives";

	// passo 2
	var status_map = "<div style='color: black'>Search for the exact location by zip code or address in the field above.</div>";
	var error_marker = "Address not found, please place the marker on a friendlier place: ";
	var status_drag = "<div style='color: black'>Drag the marker to the exact location of the apiary.</div>";
	var error_map = "Unable to find \n Enter the postal code correctly as indicated.:\n Ex.: 99999-999\n";
	var null_map = "Fill in an address or postal code";
	var null_tipo = "Select a type of apiary";
	var check_map = "The marker on the map is the exact location of the occurrence?";
	var error_drag = "The marker is in a feasible location to be recorded in the database.\nPlease posisione in a more friendly place.\n";
	var null_marker = "You need to define the exact location of the occurrence use the search field and drag the marker on the map to the correct point";

	// passo 1
	var error_mes = "You need to define the exact month of occurrence";
<?php
	}
?>
	







<?php
	if($lang == "es") {
?>
	//index
	var ccd_info_causas = "colmenas afectadas";
	var ccd_info_intensity = "colmenas afectadas";
	var ccd_incomplet = "El registro no se completa";

	// AVISOS

	var error_str = "Error al grabar la información. Inicie El proceso nuevamente. Si El problema continua entre em contacto com nuestro soporte técnico.\n Gracias";
	var error_nome = "Nombre incompleto. Escriba el nombre y apellido";
	var error_email = "E-mail inválido.";

	// cadastro
	var error_confirm = "Confirme su contraseña";
	var error_pass = "La contraseña no coincide";
	var null_senha = "Complete la contraseña";
	var null_email = "Complete el e-mail";
	var null_pais = "Seleccione um país";
	var null_estado = "Complete una provincia";
	var null_cidade = " Complete una ciudad";
	var null_cep = "Complete el código postal";
	var null_escolaridade = "Selecione o seu grau de Escolaridade";
	var null_atividade = "Seleccione una actividad";
	var null_abelhas = "Seleccione un tipo";
	var null_exploracao = "Seleccione un tipo de explotación";
	var null_aceito = "Por favor, acepte las reglas de regulación.";
	var error_double = " E-mail ya registrado. Por favor, elija otro e-mail o intente recuperar su mail registrado. Gracias";
	var error_recover = "E-mail no encontrado, verifique el e-mail ingresado. Gracias.";

	// login
	var status_recover = "La contraseña fue enviada a su e-mail";
	var error_recover = "E-mail no encontrado, verifique el e-mail ingresado. Gracias. ";
	var error_login = "Usuario no encontrado";


	// passo 4
	var error_filesize = "Archivo muy grande, el mismo debe ser inferior que 10 Mb";
	var error_fileformat = "El archivo debe estar en formato ZIP, RAR, PNG o JPG";
	var null_causas = "Seleccione una de las causas";
	var null_aplicacao = "Indique si notó la aplicación de agroquímicos";
	var null_areas = "Indique las principales floraciones";
	var null_prop = "Indique si es propietario";

	// passo3
	var null_slider = "DATOS INCOMPLETOS!!!! UD DEBE COMPLETAR EL VALOR BAJO, MEDIO Y ALTO";
	var null_total = "INGRESE EL DATO DE TOTAL DE COLMENAS";

	// passo 2
	var status_map = "<div style='color: black'>Busque el lugar exacto por el código postal o la dirección en el campo de arriba.</div>";
	var error_marker = "Dirección no encontrada,por favor posicione el marcador (MOUSE) en un lugar más adecuado:";
	var status_drag = "<div style='color: black'>Arrastre el marcador hasta el local excato del apiario</div>";
	var error_map = "No fue posible ubicarlo.\n Escriba el código postal correctamente como está indicado. Ejemlo: 99999-999\n";
	var null_map = "Complete con una dirección y código postal";
	var null_tipo = "Seleccione uno de los tipos de apiarios";
	var check_map = "El marcador en el mapa está en el lugar exacto del caso a registrar?";
	var error_drag = "El marcador se encuentra en un lugar inviable para ser grabado en la base de datos. Por favor ubíquelo en un lugar màs adecuado. .\n";
	var null_marker = "Ud. necesita definir el lugar exacto del caso a registrar, use el campo de búsqueda e arrastre el marcador en el mapa hacia el lugar correcto";
	// passo 1
	var error_mes = "Ud. necesita definir el mes exacto en que ocurrió el caso.";
<?php
	}
?>	



	
</script>
