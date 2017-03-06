<?php
	error_reporting(0);	
	session_start();
	
	
	if($_SESSION['lang'] == "") {
		$lang = $_GET["lang"];	
	} else {
		$lang = $_SESSION['lang'];
	}
			
	if($lang == "") {
		$_SESSION['lang'] = "br";
		$lang = $_SESSION['lang'];	
	} else {
		$_SESSION['lang'] = $lang;
	}
	
	if($lang == "br") {
		
		// GLOBAL
		$descricao = "Para que apicultores, meliponicultores e a comunidade científica possa registrar as ocorrências de desaparecimento, morte ou perda de abelhas em apiários, contribuindo para a identificação de suas causas e a formação de um senso. Os dados são sigilosos, e serão utilizados para estudos científicos. Participe! Comunicar é proteger!";
			
		$sobre = "Sobre";
		$menu = "Menu";
		$menu = "Menu";
		$chamada = "Comunicar é proteger";
		$bt_select = "Selecinar...";
		$bt_next = "Próximo";
		$opt_sim = "Sim";
		$opt_nao = "Não";
		
		// MENU - Painel
		$menu_sair = "Sair";
		$menu_home = "Início";
		$menu_perfil = "Editar Perfil";
		$menu_lang = "Idioma";
		
		//INDEX
		$index_total = "Total de colmeias afetadas";
		$index_mapa = "O declínio de polinizadores no mundo é real. Veja no mapa as ocorrências geolocalizadas de mortes ou perdas expressivas de abelhas em apiários.";
		$index_desc = "Bem vindo ao aplicativo Bee Alert, uma plataforma para que apicultores, meliponicultores e a comunidade científica registrem ocorrências de desaparecimento ou mortes de abelhas em seus apiários, contribuindo para a identificação de suas causas e a formação de um senso. Os dados são sigilosos, e serão utilizados para estudos científicos. E você pode ainda decidir se quer ou não que o local de seu apiário apareça neste mapa.<br>Participe! É rápido. É fácil. É seguro. É importante!";
		$index_cadastro = "É seu primeiro acesso?";
		$index_bt_cadastro_tit = "Faça seu Cadastro<br>de USUÁRIO<br>";
		$index_bt_cadastro_desc = "É gratuito";
		
		$index_login = "Já é Cadastrado?"; 
		$index_login_pass = "Senha";
		$index_login_bt = "Entrar";
		
		//RECOVER
		$forget_link = "esqueceu sua senha?";
		$forget_tit = "Insira o email cadastrado";
		$forget_desc = "para podermos ajudar você a recuperar sua senha";
		$forget_bt = "Enviar";
		
		//SOBRE
		$sobre_header = "Informações";
		$sobre_tit = "Sobre";
		$sobre_desc = "<p align='justify'>O aplicativo Bee Alert foi lançado em Agosto de 2014,  e é a primeira plataforma de identificação por geolocalização das ocorrências de desaparecimento e mortes de abelhas. Os dados coletados são  fornecidos por apicultores, meliponicultores e pela comunidade científica, numa atividade colaborativa ( crowdsourcing). Os dados de quem informa são mantidos em sigilo, e apenas a informação sobre a quantidade de colmeias afetadas será compartilhada, mediante autorização do informante diretamente na plataforma. Ele também pode optar se deseja, ou não, compartilhar publicamente a informação sobre o local da ocorrência.</p>
		<p align='justify'>Os dados serão validados pela equipe do CETAPIS, liderada pelo pesquisador e organizador da campanha &quot;Sem Abelha, Sem Alimento” , Prof. Lionel Segui Gonçalves. Estas informações serão exclusivamente utilizadas para estudos e publicações científicas.</p>
		<p align='justify'>Esta iniciativa está inserida no contexto da campanha em proteção às abelhas, com o objetivo de ilustrar e tangibilizar o problema do desaparecimento e morte de abelhas. Daí a grande importância em se realizar os registros.</p>
		<p align='justify'>O aplicativo Bee Alert foi reconhecido com a  medalha de prata no Concurso de Inovação Apícola do XI Congresso Ibero Latino Americano de Apicultura 2014, e sua utilização passou a ser oficialmente indicada pela FILAPI para todas as confederações dos  países que a compõem. Os dados especificamente coletados pelo aplicativo nestes países serão compartilhados com as respectivas lideranças apícolas e científicas de cada país.</p>
		<p align='justify'>Em Janeiro de 2015 o  aplicativo Bee Alert também recebeu o apoio do Projeto Polinizadores do Brasil, permitindo seu desenvolvimento para as plataformas Google e Android.</p>
		<p align='justify'>Caso você tenha dúvidas, dificuldades ou sugestões sobre o aplicativo Bee Alert, mande um e-mail para a equipe de organizadores, pelo endereço:</p>";
		$sobre_dev = "Desenvolvido por ";
		$sobre_embed_tit = "Código incorporador";
		$sobre_embed_desc = "Você pode ajudar inserindo a aplicação no seu site ou blog, basta copiar e colar o código abaixo para disponibilizar o acesso direto do aplicativo.";
		$sobre_embed_copy = "Copie e cole";
		$sobre_sup_tit = "Suporte";
		$sobre_desc_tit = "
		<p>
			A aplicação tem suporte para os seguintes navegadores e sistemas operacionais:
			<ul>
				<li>Safari iOS4+</li>
				<li>Android 3.2+</li>
				<li>Windows Phone 7.5+</li>
				<li>Blackberry 6+</li>
				<li>Chrome Desktop 18+</li>
				<li>safari Desktop 5+</li>
				<li>internet Explorer 9+</li>
				<li>Firefox Desktop 15+</li>
			</ul>
			<br>
            Para facilitar a usabilidade é importante o aparelho possuir GPS para habilitar a auto-localização do usuário.
			Caso o sistema não esteja funcionando de acordo, por favor entre em contato: <a  href='suporte@semabelhasemalimento.com.br'>suporte@semabelhasemalimento.com.br</a> e descreva em detalhes o problema para podermos solucionar o mais breve possível. Obrigado
        </p>";

		//SIGN
		$sign_header = "Cadastro de Usuário";
		$sign_tit =  "Importante!<br>Apenas com seu cadastro de usuário você poderá registrar uma ocorrência.";
		$sign_desc = "Por favor, preencha corretamente todos os campos";
		$sign_info = "*Campos obrigatórios";
		$sign_nome_label = "*Nome Completo";
		$sign_nome_holder = "Nome Sobrenome";
		$sign_empresa_label = "Nome da Empresa, Organização Pública ou Associação Apícola vinculado";
		$sign_pass_label = "*Senha:";
		$sign_confirm_label = "*Confirmar senha";
		$sign_pais = "*Pais";
		$sign_estado = "*Estado";
		$sign_cidade = "*Cidade";
		$sign_cep = "*CEP";
		$sign_fone_label = "Telefone";
		$sign_fone_holder = "+99 999 9090 9090";
		$sign_cel_label = "Celular";
		$sign_cel_holder = "+99 999 99090 9090";
		
		$sign_atividade_label = "*Como exerce sua atividade com as abelhas?";
		$sign_atividade_profissional = "Produtor Profissional";
		$sign_atividade_hobby = "Produtor Amador ou Hobby";
		$sign_atividade_pesquisador = "Pesquisador";
		$sign_atividade_organizacao = "Organização Pública ou Associação";
		
		$sign_abelhas_label = "*Com que tipo de abelhas você trabalha?";
		$sign_abelhas_apis = "Apis";
		$sign_abelhas_meliponineos = "Meliponíneos";
		$sign_abelhas_mamangavas = "Mamangavas (Bombus)";
		$sign_abelhas_solitarias = "Abelhas solitárias";
		
		$sign_exploracao_label = "*Indique os produtos ou atividades de exploração";
		$sign_exploracao_mel = "Mel";
		$sign_exploracao_geleia = "Geleia Real";
		$sign_exploracao_polem = "Pólen";
		$sign_exploracao_propolis = "Própolis";
		$sign_exploracao_rainhas = "Produção de rainhas";
		$sign_exploracao_enxames = "Produção de enxames";
		$sign_exploracao_aluguel = "Aluguel de colmeias para polinização";
		$sign_exploracao_pesquisa = "Realização de Pesquisas";
		
		$sign_aceito_label = "Autorizo o uso e a divulgação das ocorrências do CCD";
		$sign_aceito_bt = "Clique aqui para ACEITAR";
		$sign_cadastrar = "Cadastrar USUÁRIO";
		$sign_atualizar = "Atualizar";
		
		//CONFIRM
		$confirm_header = "Obrigado!";
		$confirm_tit = "Cadastro efetuado com sucesso.<br>Obrigado!";
		$confirm_desc = "Você já pode acessar o sistema com seu e-mail e senha cadastrados, e reportar as ocorrências";
		$confirm_bt = "Entrar";
		
		//HOME
		$home_header = "Início";
		$home_desc = "Registrar as ocorrências de desaparecimento, morte ou perdas de abelhas em seu apiário é uma das melhores formas de  protegê-las. Os dados fornecidos serão utilizados exclusivamente para fins estatísticos e científicos.<br>Obrigado por participar.";
		$home_bt_new = "REGISTRAR OCORRÊNCIA";
		$home_bt_edit = "Novo Registro";
		$home_list_null = "Nenhuma ocorrência registrada";
		$home_list_edit = "Minhas ocorrências registradas";
		$home_bt_delete = "Excluir";
		
		//P1
		$p1_header = " 1º Passo";
		$p1_desc = "As respostas a seguir devem se referir ao apiário ou meliponário no momento da ocorrência do desaparecimento, morte ou perda de abelhas.";
		$p1_label_mes = "*Data da ocorrência";
		$p1_span_mes = "O aplicativo permite o registro de ocorrências retroativas a partir de 01/01/2013";
		
		//P2
		$p2_header = "2º Passo";
		$p2_block = "Você não pode editar os dados da localização do CCD, caso tenha que alterar a localização por algum erro, você terá que criar uma ocorrência e apagar esta.";
		$p2_desc = "Indique o local exato de seu apiário no momento da ocorrência do desaparecimento, morte ou perda de abelhas";
		$p2_label_search = "Procurar:";
		$p2_holder_search = "CEP ou Endereço.";
		$p2_bt_search = "Localizar";
		$p2_tipo_legend = "Quanto à localização do apiário, indique se é um:";
		$p2_tipo_label_fixo = "Apiário Fixo";
		$p2_tipo_label_movel = "Apiário Itinerante ou Migratório";
		
		//P3
		$p3_header = "3º Passo";
		$p3_label_total = "*Total de Colmeias no Apiário ou Meliponário";
		$p3_desc = "Indique abaixo a <strong>quantidade</strong> de colmeias afetadas, pelo grau de intensidade de perda de abelhas.";
		$p3_list_baixa = "Perda até 30%";
		$p3_label_baixa = "Quantidade de colmeias com baixa perda de abelhas";
		$p3_list_media = "Perda de +30% a 60%";
		$p3_label_media = "Quantidade de colmeias com perda parcial das abelhas.";
		$p3_list_alta = "Perda de +60% a 100%";
		$p3_label_alta = "Quantidade de colmeias com perda alta ou total.";
		$p3_List_resultado = "Colmeias afetadas";
		
		//P4
		$p4_header = "Passo";
		$p4_causas = "*Identifique as causas mais prováveis do desaparecimento ou perda de abelhas em seu apiário:";
		$p4_causas_acaros = "Ácaros ou parasitas (Ex.: Varroa)";
		$p4_causas_doencas = "Doenças (vírus, bactérias, fungos)";
		$p4_causas_manejo = "Manejo, clima, desnutrição";
		$p4_causas_defensivos = "Pesticidas e inseticidas (defensivos agrícolas)";
		$p4_causas_outros = "Outros ou desconhecido";
		
		$p4_mencao = "Se mencionou defensivos agrícolas acima, indique:";
		$p4_aplicacao = "*Notou a aplicação de defensivos em culturas próximas ao apiário?";
		
		$p4_culturas = "Em quais culturas:";
		
		$p4_pesticidas_label = "Indique o defensivo utilizado:";
		$p4_pesticidas_holder = "Nome comum ou comercial";
		
		$p4_abelhas = " *Indique o tipo de abelha afetada";
		$p4_abelhas_apis = "Apis";
		$p4_abelhas_meliponineos = "Meliponíneos";
		$p4_abelhas_mamangava = "Mamangava (Bombus)";
		$p4_abelhas_solitarias = "Abelhas solitárias";
		
		$p4_area_label = "*Indique as principais floradas visitadas pelas abelhas de seu apiário ou meliponário na época da ocorrência:";
		$p4_area_holder = "Ex.: Laranja, eucalipto, maçã flores de jardim";
		
		$p4_prop = "*Você é o proprietário ou responsável pelo apiário onde houve o desaparecimento de abelhas?";
		$p4_propdados_label = "Se “não”, indique o NOME e DADOS DE CONTATO do proprietário do apiário para fins de validação das informações por nossa equipe:";
		$p4_propdados_holder = "Nome, telefone, email, endereço";
		
		$p4_prejuizo_label = "Informe o valor estimado de seu prejuízo com a perda de enxames (opte se R$ ou US$):";
		$p4_prejuizo_holder = "nº. de colônias perdidas x valor comercial";
		
		$p4_arquivo_label = "Adicione aqui seus arquivos de foto ou vídeo que demonstram a ocorrência do fenômeno do CCD:";
		$p4_arquivo_span = "Somente arquivos: JPG, PNG, ZIP ou RAR com no máximo até 10Mb";
		$p4_arquivo_holder = "jpg, zip, rar";
		
		$p4_obs = "Anote outras informações que julgar relevante";
		$p4_refer = "Indique se houve divulgação pública da ocorrência e especifique o meio (jornal/TV/internet, etc):";
		
		$p4_bt = "FINALIZAR";
		
		//CONCLUIDO
		$concluido_header = "Obrigado!";
		$concluido_desc = "Registro efetuado com sucesso.";
		$concluido_bt_facebook = "Divulgue o Bee Alert";
		$concluido_bt_new = "Adicionar novo registro";
		$concluido_bt_home = "ENCERRAR";
		$concluido_bt_link = "Faça parte da Comunidade";
		$concluido_bt_link_span = "Bee or not to be";
		$concluido_email = "Caso tenha dúvidas ou sugestões, envie um e-mail para";
		?>
		
		<script type="text/javascript" charset="utf-8">
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
		</script>
		
		
		
		<?php
		
	}
	
	
	
	
	
	
	
	
	
	
	

	if($lang == "us" || $lang == "en") {
	
		// GLOBAL
		$descricao = "Developed so that beekeepers and researchers can register incidents of CCD and other types of bee losses in their apiaries, contributing to efforts to develop strategies against its causes.";
		
		$sobre = "About";
		$menu = "Menu";
		$chamada = "Communicate to protect";
		$bt_select = "Select...";
		$bt_next = "Next";
		$opt_sim = "Yes";
		$opt_nao = "No";
		
		// MENU - Painel
		$menu_sair = "Sign Out";
		$menu_home = "Begin";
		$menu_perfil = "Edit Profile";
		$menu_lang = "Language";
				
		//INDEX
		$index_total = "Total affected hives";
		$index_mapa = "Disappearance of bees is a real phenomenon occurring worldwide. The map shows locations and the number of cases.";
		$index_desc = "Welcome to Bee Alert Geolocator, a platform for beekeepers and scientists to register cases of bee disappearance and losses throughout the world, contributing to the identification of the causes and making authorities aware of the extent of the problem. Participate! It’s fast. It’s easy. It’s safe. It’s important!";
		$index_cadastro = "First access?";
		$index_bt_cadastro_tit = "Register as<br>an USER<br>";
		$index_bt_cadastro_desc = "It’s free";
		
		$index_login = "Already signed?"; 
		$index_login_pass = "Password";
		$index_login_bt = "Enter";
		
		//RECOVER
		$forget_link = "forgot your password?";
		$forget_tit = "Insert your registered email";
		$forget_desc = "so that we can help you recover your password";
		$forget_bt = "Send";
		
		//SOBRE
		$sobre_header = "Informations";
		$sobre_tit = "About";
		$sobre_desc = "The app Bee Alert Geolocator is the first worldwide platform for identification with geolocation of the loss and disappearance of bees. Data is being provided by beekeepers and by the scientific community in a crowdsourcing activity. The data that is inserted will be validated by the organizational committee of the “Bee or not to Be?” campaign, and will be compiled and presented in reports and scientific publications. This initiative is part of the campaign “Bee or not to be?” for bee protection, coordinated by the Brazilian beekeeping entity CETAPIS and by 6P Marketing & Propaganda.";
		$sobre_dev = "Developed by ";
		$sobre_embed_tit = "Embed Code";
		$sobre_embed_desc = "You can help by inserting this application in your site or blog; just copy and paste the code below to give direct access to this app.";
		$sobre_embed_copy = "Copy and paste";
		$sobre_sup_tit = "Support";
		$sobre_desc_tit = "
		<p>
			This application has support for the following navigators and operating systems:
			<ul>
				<li>Safari iOS4+</li>
				<li>Android 3.2+</li>
				<li>Windows Phone 7.5+</li>
				<li>Blackberry 6+</li>
				<li>Chrome Desktop 18+</li>
				<li>safari Desktop 5+</li>
				<li>internet Explorer 9+</li>
				<li>Firefox Desktop 15+</li>
			</ul>
			<br>
            In order to facilitate the usefulness of this app, it is important for your device to have gps to habilitate auto-localization of the user. If this system is not working correctly, please contact: <a  href='suporte@semabelhasemalimento.com.br'>suporte@semabelhasemalimento.com.br</a> and describe the problem in detail so that we can resolve it as quickly as possible. Thanks.
        </p>";

		//SIGN
		$sign_header = "User Registration";
		$sign_tit =  "Important!<br>You can only document bee loss incidents if you register as a user.";
		$sign_desc = "Please fill out all fields correctly";
		$sign_info = "*Required fields";
		$sign_nome_label = "*Complete Name";
		$sign_nome_holder = "First and Last name";
		$sign_empresa_label = "Nome da Empresa, Organização Pública ou Associação Apícola vinculado";
		$sign_pass_label = "*Password";
		$sign_confirm_label = "*Confirm password";
		$sign_pais = "*Country";
		$sign_estado = "*State or province";
		$sign_cidade = "*City";
		$sign_cep = "*Zip code";
		$sign_fone_label = "Telephone";
		$sign_fone_holder = "+99 999 9090 9090";
		$sign_cel_label = "Cell phone";
		$sign_cel_holder = "+99 999 99090 9090";
		
		$sign_atividade_label = "*What kind of beekeeper are you?";
		$sign_atividade_profissional = "Professional beekeeper";
		$sign_atividade_hobby = "Hobbyist";
		$sign_atividade_pesquisador = "Researcher";
		$sign_atividade_organizacao = "Organização Pública ou Associação";
		
		$sign_abelhas_label = "*What kind of bees do you have?";
		$sign_abelhas_apis = "Apis";
		$sign_abelhas_meliponineos = "Meliponids (social stingless bees)";
		$sign_abelhas_mamangavas = "Bumble bees (Bombus)";
		$sign_abelhas_solitarias = "Solitary bees";
		
		$sign_exploracao_label = "*Bee products that you produce or other uses of bees";
		$sign_exploracao_mel = "Honey";
		$sign_exploracao_geleia = "Royal jelly";
		$sign_exploracao_polem = "Pollen";
		$sign_exploracao_propolis = "Propolis";
		$sign_exploracao_rainhas = "PQueen production";
		$sign_exploracao_enxames = "Colony or package production";
		$sign_exploracao_aluguel = "Colony rental for pollination";
		$sign_exploracao_pesquisa = "Research";
		
		$sign_aceito_label = "I authorize the use and publication of my data concerning CCD occurrences and other types of bee losses. ";
		$sign_aceito_bt = "Click here to ACCEPT";
		$sign_cadastrar = "Register USER";
		$sign_atualizar = "Update";
		
		//CONFIRM
		$confirm_header = "Thanks!";
		$confirm_tit = "User successfully registered.<br> Thanks!";
		$confirm_desc = "You can now access the system with your email address and password registered, and report occurrences";
		$confirm_bt = "Enter";
		
		//HOME
		$home_header = "Home";
		$home_desc = "Registering the occurrences of bee disappearance, death and losses in your apiary is one of the best ways to protect them.  The information will be used exclusively for statistical and scientific purposes. Thanks for participating.";
		$home_bt_new = "REGISTER REPORT";
		$home_bt_edit = "New Report";
		$home_list_null = "No reports registered";
		$home_list_edit = "Your reports";
		$home_bt_delete = "Delete";
		
		//P1
		$p1_header = " 1º Step";
		$p1_desc = "The information that follows should refer to the honey bee or stingless bee apiary at the time of the occurrence of loss, death or disappearance of the bees.";
		$p1_label_mes = "*Date when it happened";
		$p1_span_mes = "This app permits registration of occurrences retroactive to 01/01/2013";
		
		//P2
		$p2_header = "2º Step";
		$p2_block = "You can not edit the location data of the CCD, if you have to change the location for any errors, you will have to create an instance and Delete.";
		$p2_desc = "Indicate the exact location of your apiary when the bee losses occurred.";
		$p2_label_search = "Search:";
		$p2_holder_search = "Zip code or address";
		$p2_bt_search = "Locate";
		$p2_tipo_legend = "Concerning the apiary location, indicate whether it is a:";
		$p2_tipo_label_fixo = "Fixed apiary";
		$p2_tipo_label_movel = "Temporary or migratory apiary";
		
		//P3
		$p3_header = "3º Step";
		$p3_label_total = "*Number of colonies in the apiary";
		$p3_desc = "Indicate below the <strong>number</strong> of colonies affected, according to the reduction in colony strength.";
		$p3_list_baixa = "Loss until 30%";
		$p3_label_baixa = "Number of colonies with a relatively low loss of bees.";
		$p3_list_media = "Loss of +30% to 60%";
		$p3_label_media = "Number of colonies with moderate loss of bees.";
		$p3_list_alta = "Loss of +60% to 100%";
		$p3_label_alta = "Number of colonies with high or total loss of bees.";
		$p3_List_resultado = "Colonies affected";
		
		//P4
		$p4_header = "Step";
		$p4_causas = "*Identify the most probable causes of the bee losses in your apiary:";
		$p4_causas_acaros = "Mites or other parasites (Ex.: Varroa)";
		$p4_causas_doencas = "Diseases (viral, bacterial & fungal)";
		$p4_causas_manejo = "Management, climate, starvation";
		$p4_causas_defensivos = "Pesticides and insecticides (agricultural chemicals)";
		$p4_causas_outros = "Others or unknown";
		
		$p4_mencao = "If you mentioned agricultural pesticides, indicate:";
		$p4_aplicacao = "*Did you note pesticide applications on crops close to your apiary?";
		
		$p4_culturas = "On what crop?:";
		
		$p4_pesticidas_label = "Indicate the pesticide that was used:";
		$p4_pesticidas_holder = "Common or commercial name";
		
		$p4_abelhas = " *What kind of bee was affected";
		$p4_abelhas_apis = "Apis (honey bees)";
		$p4_abelhas_meliponineos = "Meliponids (social stingless bees)";
		$p4_abelhas_mamangava = "Bumble bees (Bombus)";
		$p4_abelhas_solitarias = "Solitary bees";
		
		$p4_area_label = "*Indicate the main types of flowers that your bees were foraging on at the time of the bee losses:";
		$p4_area_holder = "Ex.: Orange, eucalyptus, apple, flowers garden";
		
		$p4_prop = "*Are you the owner or manager of the apiary where bee losses occurred? ";
		$p4_propdados_label = "In you indicated “NO”, provide the NAME OF THE OWNER or give CONTACT INFORMATION for the owner:";
		$p4_propdados_holder = "Name, phone, email, address";
		
		$p4_prejuizo_label = "Inform the estimated value of your losses  (in US$):";
		$p4_prejuizo_holder = "nº. of colonies lost X commercial value";
		
		$p4_arquivo_label = "Upload your photo or video files that document the CCD/ bee losses:";
		$p4_arquivo_span = "Only files: JPG, PNG, ZIP or RAR with a maximum of 10Mb";
		$p4_arquivo_holder = "jpg, zip, rar";
		
		$p4_obs = "Note other relevant information";
		$p4_refer = "Indicate if the bee losses were made public and specify the type and name of the media: (news paper /TV/internet, etc):";
		
		$p4_bt = "FINISH";
		
		//CONCLUIDO
		$concluido_header = "Thanks!";
		$concluido_desc = "Event registered successfully.";
		$concluido_bt_facebook = "Share the Bee Alert";
		$concluido_bt_new = "Add new occurrence";
		$concluido_bt_home = "FINISH";
		$concluido_bt_link = "Sign the Petition";
		$concluido_bt_link_span = "for bee protection";
		$concluido_email = "If you have any questions or suggestions, send an email, send an e-mail to";
		?>
		
		<script type="text/javascript" charset="utf-8">
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
		</script>
		
		
		<?php
		
		
		
	}

















	
	if($lang == "es") {
		
		// GLOBAL
		$descricao = "Desarrollado para que los productores e investigadores registren los casos de desaparición de abejas en sus apiarios, contribuyendo para combatir sus causas.";
			
		$sobre = "Sobre";
		$menu = "Menu";
		$menu = "Menu";
		$chamada = "Comunicar es proteger";
		$bt_select = "Seleccionar...";
		$bt_next = "Próximo";
		$opt_sim = "Si";
		$opt_nao = "No";
		
		// MENU - Painel
		$menu_sair = "Salir";
		$menu_home = "Inicio";
		$menu_perfil = "Editar Perfil";
		$menu_lang = "Idioma";
		
		//INDEX
		$index_total = "Total de colmenas afectadas";
		$index_mapa = "La desaparición de las abejas en el mundo es real. Vea en el mapa los lugares y cantidades de casos ya informados.";
		$index_desc = "Bienvenido a Bee Alert Geolocator, una plataforma para que los apicultores y la comunidad científica registren los casos de desaparición y pérdida de abejas en todo el mundo, contribuyendo para la identificación de las causas.<br>Participe!!!! Es rápido. Es fácil. Es seguro. Es importante.";
		$index_cadastro = "Es su primer acceso?";
		$index_bt_cadastro_tit = "Haga su registro<br>de USUARIO<br>";
		$index_bt_cadastro_desc = "Es gratuito";
		
		$index_login = "Ya está registrado?"; 
		$index_login_pass = "Contraseña";
		$index_login_bt = "Entrar";
		
		//RECOVER
		$forget_link = "olvidó su contraseña?";
		$forget_tit = "Ingrese el email registrado";
		$forget_desc = "para poder ayudarlo a resuperar su contraseña";
		$forget_bt = "Enviar";
		
		//SOBRE
		$sobre_header = "Información";
		$sobre_tit = "Sobre";
		$sobre_desc = "La aplicación  Bee Alert Geolocator es la primera plataforma mundial de identificación por geolocalización de los casos de Desaparicion y Pérdidas de abejas. Los datos recolectados deben ser aportados por los propios productores o por la comunidad científica, en una actividad de crowdsourcing. Los datos ingresados serán validados por el equipo de organizadores de la campaña Bee or not to Be?”, y serán posteriormente reunidos  y compartidos en publicaciones científicas. Esta iniciativa está incluida en el contexto d la campaña Bee or not to Be?”, en protección de las abejas lideradas por CETAPIS y por 6P Marketing & Propaganda.";
		$sobre_dev = "Desarrollado por la ";
		$sobre_embed_tit = "Código";
		$sobre_embed_desc = "Ud. puede ayudar insertando la aplicación en su site o blog, solo es necesario copiar y pegar el código de abajo para disponer del acceso directo a la aplicación.";
		$sobre_embed_copy = "Copie y pegue";
		$sobre_sup_tit = "Soporte";
		$sobre_desc_tit = "
		<p>
			La aplicación tiene soporte en los siguientes navegadores y sistemas operativos:
			<ul>
				<li>Safari iOS4+</li>
				<li>Android 3.2+</li>
				<li>Windows Phone 7.5+</li>
				<li>Blackberry 6+</li>
				<li>Chrome Desktop 18+</li>
				<li>safari Desktop 5+</li>
				<li>internet Explorer 9+</li>
				<li>Firefox Desktop 15+</li>
			</ul>
			<br>
            Para facilitar el uso es importante que el equipo posea GPS para habilitar la autolocalización del usuario. En el caso que el sistema no esté funcionando correctamente, por favor entre en contacto con: <a  href='suporte@semabelhasemalimento.com.br'>suporte@semabelhasemalimento.com.br</a> y describa en detalle el problema para poder solucionarlo a la mayor brevedad posible. Gracias.
        </p>";

		//SIGN
		$sign_header = "Registro de Usuario";
		$sign_tit =  "Importante!<br>Solo Podrá registrar un caso solo si se ha registrado como usuario.";
		$sign_desc = "Por favor, complete correctamente todos los campos.";
		$sign_info = "*Campos obligatorios";
		$sign_nome_label = "*Nombre Completo";
		$sign_nome_holder = "Nombre Apellidos";
		$sign_empresa_label = "Nome da Empresa, Organização Pública ou Associação Apícola vinculado";
		$sign_pass_label = "*Contraseña";
		$sign_confirm_label = "*Confirmar contraseña";
		$sign_pais = "*Pais";
		$sign_estado = "*Estado";
		$sign_cidade = "*Ciudad";
		$sign_cep = "*Código Postal";
		$sign_fone_label = "Teléfono";
		$sign_fone_holder = "+99 999 9090 9090";
		$sign_cel_label = "Celular";
		$sign_cel_holder = "+99 999 99090 9090";
		
		$sign_atividade_label = "*Cómo realiza  su actividad  con las abejas?";
		$sign_atividade_profissional = "Productor Profesional";
		$sign_atividade_hobby = "Productor Hobbista";
		$sign_atividade_pesquisador = "Investigador o Tecnico Apicola";
		$sign_atividade_organizacao = "Organização Pública ou Associação";
		
		$sign_abelhas_label = "*Con que tipo de abejas trabaja?";
		$sign_abelhas_apis = "Apis";
		$sign_abelhas_meliponineos = "Meliponineos";
		$sign_abelhas_mamangavas = "Abejorros (Bombus)";
		$sign_abelhas_solitarias = "Abejas solitarias";
		
		$sign_exploracao_label = "*Indique los productos o actividades de su explotación";
		$sign_exploracao_mel = "Miel";
		$sign_exploracao_geleia = "Jalea Real";
		$sign_exploracao_polem = "Polen";
		$sign_exploracao_propolis = "Propóleos";
		$sign_exploracao_rainhas = "Producción de reinas";
		$sign_exploracao_enxames = "Producción de núcleos/paquetes";
		$sign_exploracao_aluguel = "Alquiler de colmenas para polinización";
		$sign_exploracao_pesquisa = "Realización de investgaciones";
		
		$sign_aceito_label = "Autorizo el uso e la divulgación de los casos de desaparición de abejas";
		$sign_aceito_bt = "Cliquee aqui para ACEPTAR";
		$sign_cadastrar = "Registrar USUARIO";
		$sign_atualizar = "Actualización";
		
		//CONFIRM
		$confirm_header = "Gracias!";
		$confirm_tit = "Regístrate efectuado con éxito.<br>Gracias!";
		$confirm_desc = "Ahora puede acceder al sistema con su correo electrónico y contraseña registrada, y reportar las ocurrencias";
		$confirm_bt = "Entrar";
		
		//HOME
		$home_header = "Inicio";
		$home_desc = "Registrarlos casos de desaparición, muerte o pérdidas de abejas en su apiario es una de las mejores formas de protegerlas. Los datos aportados serán utilizados exclusivamente para fines estadísticos y científicos.<br>Gracias por participar.";
		$home_bt_new = "REGISTRE EL CASO";
		$home_bt_edit = "Nuevo Registro";
		$home_list_null = "Ningún caso registrado";
		$home_list_edit = "Sus casos";
		$home_bt_delete = "Borrar";
		
		//P1
		$p1_header = " 1º Paso";
		$p1_desc = "Las respuestas siguientes deben referirse al apiario o meliponiario en el momento de manifestarse el caso de desaparición, muerte o pérdida de abejas.";
		$p1_label_mes = "*Dato del caso";
		$p1_span_mes = "La aplicación permite el registro de casos retroactivos a partir del 01/01/2013";
		
		//P2
		$p2_header = "2º Paso";
		$p2_block = "No puede editar los datos de localización del CCD, si tiene que cambiar la ubicación de los errores, usted tendrá que crear una instancia y Eliminar.";
		$p2_desc = "Indique el lugar exacto de su apiario en el momento de ocurrencia de desaparición, muerte o pérdida de abejas";
		$p2_label_search = "Buscar:";
		$p2_holder_search = "Código Postal o Dirección";
		$p2_bt_search = "Localizar";
		$p2_tipo_legend = "En relación a la localización del apiario indique si es un:";
		$p2_tipo_label_fixo = "Apiario Fijo";
		$p2_tipo_label_movel = "Apiario Migratorio o Transhumante";
		
		//P3
		$p3_header = "3º Paso";
		$p3_label_total = "*Total de Colmenas en el Apiario ou Meliponario";
		$p3_desc = "Indique abajo la <strong>cantidad</strong> de colmenas afectadas,  según el grado de la intensidad de la pérdida de abejas.";
		$p3_list_baixa = "Pérdida de hasta 30 %";
		$p3_label_baixa = "Cantidad de colmenas con baja pérdida de abejas";
		$p3_list_media = "Pérdida entre +30% a 60%";
		$p3_label_media = "Cantidad de colmenas con pérdida parcial de abejas";
		$p3_list_alta = "Pérdida entre +60% a 100%";
		$p3_label_alta = "Cantidad de colmenas con pérdida alta o total de abejas";
		$p3_List_resultado = "Colmenas afectadas";
		
		//P4
		$p4_header = "Paso";
		$p4_causas = "*Identifique las causas más probables de la desaparición o pérdida de abejas en su apiario:";
		$p4_causas_acaros = "Ácaros o parásitos (Ej.: Varroa)";
		$p4_causas_doencas = "Enfermedades (virus, bacterias, hongos)";
		$p4_causas_manejo = "Manejo, clima, desnutrición";
		$p4_causas_defensivos = "Pesticidas e insecticidas (agroquímicos)";
		$p4_causas_outros = "Otros o desconocido";
		
		$p4_mencao = "Se mencionó agroquímicos arriba, indique:";
		$p4_aplicacao = "*Notó la aplicación de agroquímicos en cultivos próximos al apiario?";
		
		$p4_culturas = "En que cultivos:";
		
		$p4_pesticidas_label = "Indique el agroquímico utilizado:";
		$p4_pesticidas_holder = "Nombre común o comercial";
		
		$p4_abelhas = " *Indique el tipo de abeja afectada";
		$p4_abelhas_apis = "Apis";
		$p4_abelhas_meliponineos = "Meliponineos";
		$p4_abelhas_mamangava = "Abejorros (Bombus)";
		$p4_abelhas_solitarias = "Abejas solitarias";
		
		$p4_area_label = "*Indique las principales floraciones visitadas por las abejas de su apiario o meliponário en la época que detecto el caso de desaparición o pérdida de abejas:";
		$p4_area_holder = "Ex.: Naranja, eucalipto, jardín flores de manzana";
		
		$p4_prop = "*¿Ud. es el propietario o responsable del apiario donde se registró la desaparición o pérdida de abejas?";
		$p4_propdados_label = "Si respondió “NO”, indique el NOMBRE y DATOS DE CONTACTO del propietario del apiario para que nuestro equipo pueda validar la información:";
		$p4_propdados_holder = "Nombre, teléfono, correo electrónico, dirección";
		
		$p4_prejuizo_label = "Informe el valor estimado de su prejuicio con la pérdida de colmenas o abejas (expréselo en US$):";
		$p4_prejuizo_holder = "Nº de colmenas perdidas x valor comercial";
		
		$p4_arquivo_label = "Anexe aquí sus archivos de foto o videos que demuestran el caso del fenómeno de CCD:";
		$p4_arquivo_span = "Solamente archivos: JPG, PNG, ZIP o RAR con un tamaño máximo de 10Mb";
		$p4_arquivo_holder = "jpg, zip, rar";
		
		$p4_obs = "Anote otras informaciones que considere relevante";
		$p4_refer = "Indique se ha habido divulgación pública del caso descripto y especifique en que medio (diario/TV/internet, etc):";
		
		$p4_bt = "FINALIZAR";
		
		//CONCLUIDO
		$concluido_header = "Muchas gracias!";
		$concluido_desc = "Registro realizado con éxito.";
		$concluido_bt_facebook = "Divulgue el Bee Alert";
		$concluido_bt_new = "Agregar nuevo  registro";
		$concluido_bt_home = "TERMINAR";
		$concluido_bt_link = "Firma la petición";
		$concluido_bt_link_span = "para la protección de las abejas";
		$concluido_email = "En el caso que tenga dudas o sugerencias, envíe un e-mail a";
		
		
		?>
		
		<script type="text/javascript" charset="utf-8">
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
		</script>
		
		
		<?php
		
	}
	
	
	
	
	





?>
