<?php
$tipoPlano = $_GET['tipo'];
$planoAssinatura = $_GET['plano'];
?>
<!DOCTYPE html>
<html data-wf-site="556474ad0112f01b4ff314c5" data-wf-page="556474ad0112f01b4ff314c6">
<head>
	<meta charset="utf-8">
	<title>Assinar o Software | LAHAR</title>
	<meta name="description" content="Assine um de nossos planos e comece agora a mesmo a utilizar a LAHAR.">
	<meta name="keywords" content="Automação de Marketing, Landing Pages, E-mail Marketing, Ferramentas para mídias sociais e muito mais.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Webflow">

	<meta property='og:title' content='Software de Automação de Marketing e Vendas | LAHAR' />
	<meta property='og:description' content='Assine um de nossos planos e comece agora a mesmo a utilizar a LAHAR.' />
	<meta property='og:url' content='https://www.lahar.com.br/assinar' />
	<meta property='og:image' content='https://www.lahar.com.br/images/lahar.jpg'/>
	<meta property="og:image:type" content="image/jpeg">

	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/webflow.css">
	<link rel="stylesheet" type="text/css" href="css/lahar.webflow.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","PT Sans:400,400italic,700,700italic"]
			}
		});
	</script>
	<script type="text/javascript" src="js/modernizr.js"></script>
	<script src="https://assets.pagar.me/checkout/checkout.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
	<?php include('includes/header.php'); ?>
</head>
<body class="page-trial">
  <div class="w-section" id="trial" data-ix="jasou-e-experimente-aparece">
    <div class="menu_top">
      <div class="w-nav nav_cinza" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
        <div class="w-row">
          <div class="w-col w-col-1 w-col-small-1 coluna_1"></div>
          <div class="w-col w-col-10 w-col-small-10 w-clearfix coluna_navmenu txt-ajuda">
            <div class="w-nav-button menu_button">
              <div class="w-icon-nav-menu icon_navbar" style="display: none!important;"></div>
            </div>
            <a class="w-nav-brand logo_menu" href="#"><img src="images/logo-header.png" width="159" style="padding-bottom: 15px;">
            </a>
            <span class="telefone_top" style="float: right">Dúvidas? Ligue para nossa Central de Vendas: <strong>(14) 3010-3330 ou (11) 3230-1825</strong></span>
          </div>
          <div class="w-col w-col-1 w-col-small-1 coluna_1"></div>
        </div>
      </div>
    </div>
  </div>

	<div class="w-section">
		<div class="w-container" data-ix="fade-scroll">

			<div class="w-row" style="padding-bottom: 30px; padding-top: 70px; text-align: center;">
				<div class="w-col w-col-12">
					<h1 class="escuro big cinza">Comece agora mesmo a utilizar o<br>nosso software!</h1>
					<p class="escuro line case"></p>
				</div>
			</div>

			<div class="etapa-assinatura" id="todas-etapas">
				<div class="w-col w-col-3 etapa etapa1 active">
					<span class="ico-etapa">1</span>
					<span class="tit-etapa">Seus Dados</span>
				</div>
				<div class="w-col w-col-3 etapa etapa2">
					<span class="ico-etapa">2</span>
					<span class="tit-etapa">Seu Plano</span>
				</div>
				<div class="w-col w-col-3 etapa etapa3">
					<span class="ico-etapa">3</span>
					<span class="tit-etapa">Pagamento</span>
				</div>
				<div class="w-col w-col-3 etapa etapa4">
					<span class="ico-etapa">4</span>
					<span class="tit-etapa">Confirmação</span>
				</div>
			</div>


			<form id="assinatura-email-form" data-name="Assinatura Form" name="assinatura-email-form" method="post" data-ix="pump">
				<div id="etapa1" class="w-row box-etapa" style="display: block;">
					<fieldset class="w-col w-col-12 center">
						<h4 class="tituloContainer">Responsável pelo contrato</h4>
					</fieldset>

					<div class="radio-plano center padding-top-40">
						<a href="javascript:" rel="fisica" class="muda-plano muda-pessoa">Pessoa Física<span></span></a>
						<a href="javascript:" rel="juridica" id="pessoa-juridica" class="muda-plano muda-pessoa">Pessoa Jurídica<span></span></a>
					</div>

					<fieldset class="w-col w-col-12 center" style="display: none;">
						<div class="mt-radio-inline">
							<label class="mt-radio mt-radio-line">
								<input class="tipopessoa" name="tipopessoa" value="fisica" type="radio"> Pessoa Física
								<span></span>
							</label>
							<label class="mt-radio mt-radio-line">
								<input class="tipopessoa" name="tipopessoa" value="juridica" type="radio"> Pessoa Jurídica
								<span></span>
							</label>
						</div>
					</fieldset>

					<div id="fisica" class="form-content">
						<fieldset class="w-col w-col-12">
							<h4 class="tituloContainer">Dados Pessoais</h4>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="cpf">CPF*</label>
							<input type="text" class="w-input input cpf" id="cpf" name="cpf" data-name="cpf" id="cpf" placeholder="CPF" maxlength="14" required="required">
							<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_cpf_invalido">O CPF informado não é válido.</p>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="nome">Nome Completo*</label>
							<input type="text" class="w-input input" id="nome" name="nome" data-name="nome" id="nome" placeholder="Nome completo" required="required">
						</fieldset>
					</div>

					<div id="juridica" class="form-content">
						<fieldset class="w-col w-col-12">
							<h4 class="tituloContainer">Dados Empresariais</h4>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="cnpj">CNPJ*</label>
							<input type="text" class="w-input input cnpj" id="cnpj" name="cnpj" data-name="cnpj" id="cnpj" placeholder="CNPJ" maxlength="18" required="required">
							<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_cnpj_invalido">O CNPJ informado não é válido.</p>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="razao">Razão Social*</label>
							<input type="text" class="w-input input" id="razao" name="razao" data-name="razao" id="razao" placeholder="Razão Social" required="required">
						</fieldset>
					</div>

					<div id="geral" class="form-content">
						<fieldset class="w-col w-col-12">
							<h4 class="tituloContainer">Endereço</h4>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="cep">CEP*</label>
							<input type="text" class="w-input input" name="cep" data-name="cep" id="cep" placeholder="CEP" maxlength="9" required="required">
							<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_cep_invalido">O CEP informado não é válido.</p>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="endereco">Endereço*</label>
							<input type="text" class="w-input input" name="endereco" data-name="endereco" id="endereco" placeholder="Endereço" required="required">
						</fieldset>

						<fieldset class="w-col w-col-6" style="clear:both;">
							<label for="numero">Número / Complemento*</label>
							<input type="text" class="w-input input" name="numero" data-name="numero" id="numero" placeholder="Número" required="required">
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="bairro">Bairro*</label>
							<input type="text" class="w-input input" name="bairro" data-name="bairro" id="bairro" placeholder="Bairro" required="required">
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="cidade">Cidade*</label>
							<input type="text" class="w-input input" name="cidade" data-name="cidade" id="cidade" placeholder="Cidade" maxlength="100" required="required">
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="uf">UF*</label>
							<select class="w-input input" name="uf" data-name="uf" id="uf" required="required">
								<option value="" selected="selected">Selecione</option>
								<option value="AC">AC</option>
								<option value="AL">AL</option>
								<option value="AM">AM</option>
								<option value="AP">AP</option>
								<option value="BA">BA</option>
								<option value="CE">CE</option>
								<option value="DF">DF</option>
								<option value="ES">ES</option>
								<option value="GO">GO</option>
								<option value="MA">MA</option>
								<option value="MG">MG</option>
								<option value="MS">MS</option>
								<option value="MT">MT</option>
								<option value="PA">PA</option>
								<option value="PB">PB</option>
								<option value="PE">PE</option>
								<option value="PI">PI</option>
								<option value="PR">PR</option>
								<option value="RJ">RJ</option>
								<option value="RN">RN</option>
								<option value="RS">RS</option>
								<option value="RO">RO</option>
								<option value="RR">RR</option>
								<option value="SC">SC</option>
								<option value="SE">SE</option>
								<option value="SP">SP</option>
								<option value="TO">TO</option>
							</select>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="tel">Telefone*</label>
							<input type="text" class="w-input input telefone" name="tel" data-name="tel" id="tel" placeholder="Seu telefone de contato" required="required">
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="contato_financeiro">Contato Financeiro*</label>
							<input type="email" class="w-input input" name="contato_financeiro" data-name="contato_financeiro" id="contato_financeiro" placeholder="E-mail financeiro" required="required">
							<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_contato_financeiro_invalido">O e-mail informado não é válido.</p>
						</fieldset>

						<fieldset class="w-col w-col-12">
							<h4 class="tituloContainer">Dados Conta</h4>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="mail">E-mail*</label>
							<input type="email" class="w-input input" name="mail" data-name="mail" id="mail" placeholder="E-mail de login" required="required">
							<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_email">O e-mail informado já possui conta cadastrada, favor informar outro e-mail.</p>
							<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_email_invalido">O e-mail informado não é válido.</p>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="empresa">Nome Empresa*</label>
							<input type="text" class="w-input input" name="empresa" data-name="empresa" id="empresa" placeholder="Nome Empresa" required="required" maxlength="44">
							<p class="center" style="font-size:12px; color:red;">&nbsp;</p>
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="numero">Website*</label>
							<input type="text" class="w-input input" name="site" data-name="site" id="site" onblur="normalizaLink(this.value,this);" placeholder="http://www.seusite.com.br" required="required">
						</fieldset>

						<fieldset class="w-col w-col-6">
							<label for="tags">Qual o seu objetivo com a LAHAR?*</label>
							<select class="w-input input" name="tags" data-name="tags" id="tags" required="required">
								<option value="" selected="selected">Selecione</option>
			                    <option value="empreendedor">Possuo um negócio e desejo ter resultados com a internet</option>
			                    <option value="concorrente">Já utilizei/utilizo outra ferramenta e desejo saber mais sobre a LAHAR</option>
			                    <option value="agencia">Sou uma agência e desejo entender como utilizar para meus clientes</option>
			                    <option value="estudante">Sou estudante e interessado em conhecer esse tipo de software</option>
							</select>
						</fieldset>

						<fieldset class="w-col w-col-12 center action">
							<button type="submit" class="w-button button verde big btn-continuar" rel="2" data-wait="Por favor aguarde..." data-ix=''>
							    Continuar <i class="fa fa-arrow-right" aria-hidden="true"></i>
							</button>
						</fieldset>
					</div>
				</div>
				<!-- FIM - ETAPA 1 -->

				<!-- ETAPA 2 -->
				<div id="etapa2" class="w-row box-etapa">
					<fieldset class="w-col w-col-12 center">
						<h4 class="tituloContainer" style="margin-bottom:10px;" id="seu-plano">Seu Plano</h4>
						<p>Escolha um de nosso planos e a forma de pagamento, sendo mensal ou anual:</p>
					</fieldset>
					<fieldset class="w-col w-col-12 center">
						<div class="radio-plano">
							<a href="javascript:" id="plano-mensal" class="muda-plano">Plano Mensal <span>sem desconto</span></a>
							<a href="javascript:" id="plano-anual" class="muda-plano">Plano anual <span>economize 2 meses</span></a>
						</div>

						<div class="mt-radio-inline" style="display: none;">
							<label class="mt-radio mt-radio-line">
								<input class="tipoPlano" name="tipoPlano" value="planoMensal" type="radio"> Plano Mensal
								<span></span>
							</label>
							<label class="mt-radio mt-radio-line">
								<input class="tipoPlano" name="tipoPlano" value="planoAnual" type="radio"> Plano Anual (economize 2 meses)
								<span></span>
							</label>
						</div>
					</fieldset>

					<fieldset class="w-col w-col-12">
						<div class="w-row box-tipoPlano" id="planoMensal">
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-1">
								<div class="div_title_plano">
									<h1 class="nome_plano">Basic</h1>
								</div>
								<div class="faixa_popular off">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802811_user.png">
									<h3 class="h3_preco">R$229<span class="mes">/mês</span></h3>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="m_basic">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="1">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="22900">
								</div>
								<div class="div_planos_features">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">5 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">10.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Suporte via Email</h2>
										</li>
									</ul>
								</div>
							</div>
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-2">
								<div class="div_title_plano">
									<h1 class="nome_plano">Professional I</h1>
								</div>
								<div class="faixa_popular">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802799_users.png">
									<h3 class="h3_preco">R$349<span class="mes">/mês</span></h3>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="m_pro1">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="2">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="34900">
								</div>
								<div class="div_planos_features featured">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">10 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">25.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Automação de Marketing</h2>
										</li>
										<li>
								            <h2 class="escuro line features">SMS Marketing</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Tracking</h2>
								        </li>
										<li>
											<h2 class="escuro line features">Suporte via Email</h2>
										</li>
									</ul>
								</div>
							</div>
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-3">
								<div class="div_title_plano">
									<h1 class="nome_plano">Professional II</h1>
								</div>
								<div class="faixa_popular off">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802811_users.png">
									<h3 class="h3_preco">R$549<span class="mes">/mês</span></h3>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="m_pro2">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="3">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="54900">
								</div>
								<div class="div_planos_features">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">20 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">50.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Automação de Marketing</h2>
										</li>
										<li>
								            <h2 class="escuro line features">SMS Marketing</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Tracking</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Scoring</h2>
								        </li>
										<li>
											<h2 class="escuro line features">Suporte via Email/Skype</h2>
										</li>
									</ul>
								</div>
							</div>
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-4">
								<div class="div_title_plano">
									<h1 class="nome_plano">Enterprise</h1>
								</div>
								<div class="faixa_popular off">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802758_city.png">
									<!-- <h3 class="h3_preco"><span class="mes"><a class="link_consulte" href="contato" target="_blank">Consulte-nos</a></span></h3> -->
									<h3 class="h3_preco">R$1.499<span class="mes">/mês</span></h3>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="m_enterprise">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="4">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="149900">
								</div>
								<div class="div_planos_features">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">50 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">100.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Automação de Marketing</h2>
										</li>
										<li>
								            <h2 class="escuro line features">SMS Marketing</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Tracking</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Scoring</h2>
								        </li>
										<li>
											<h2 class="escuro line features">Suporte via Email/Skype <br>ou Telefone</h2>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="w-row box-tipoPlano" id="planoAnual">
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-1">
								<div class="div_title_plano">
									<h1 class="nome_plano">Basic</h1>
								</div>
								<div class="faixa_popular off">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802811_user.png">
									<h3 class="h3_preco">R$191<span class="mes">/mês</span></h3>
									<h2 class="escuro line features" style="text-align:center; font-size:13px;"><b>cobrado anualmente</b> equivalente a <br>R$ 2.290,00/ano</h2>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="a_basic">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="5">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="229000">
								</div>
								<div class="div_planos_features">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">5 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">10.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Suporte via Email</h2>
										</li>
									</ul>
								</div>
							</div>
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-2">
								<div class="div_title_plano">
									<h1 class="nome_plano">Professional I</h1>
								</div>
								<div class="faixa_popular">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802799_users.png">
									<h3 class="h3_preco">R$291<span class="mes">/mês</span></h3>
									<h2 class="escuro line features" style="text-align:center; font-size:13px;"><b>cobrado anualmente</b> equivalente a <br>R$ 3.490,00/ano</h2>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="a_pro1">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="6">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="349000">
								</div>
								<div class="div_planos_features featured">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">10 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">25.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Automação de Marketing</h2>
										</li>
										<li>
								            <h2 class="escuro line features">SMS Marketing</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Tracking</h2>
								        </li>
										<li>
											<h2 class="escuro line features">Suporte via Email</h2>
										</li>
									</ul>
								</div>
							</div>
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-3">
								<div class="div_title_plano">
									<h1 class="nome_plano">Professional II</h1>
								</div>
								<div class="faixa_popular off">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802811_users.png">
									<h3 class="h3_preco">R$458<span class="mes">/mês</span></h3>
									<h2 class="escuro line features" style="text-align:center; font-size:13px;"><b>cobrado anualmente</b> equivalente a <br>R$ 5.490,00/ano</h2>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="a_pro2">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="7">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="549000">
								</div>
								<div class="div_planos_features">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">20 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">50.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Automação de Marketing</h2>
										</li>
										<li>
								            <h2 class="escuro line features">SMS Marketing</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Tracking</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Scoring</h2>
								        </li>
										<li>
											<h2 class="escuro line features">Suporte via Email/Skype</h2>
										</li>
									</ul>
								</div>
							</div>
							<div class="w-col w-col-3 coluna_branca_plano" data-ix="slide-bottom-to-top-4">
								<div class="div_title_plano">
									<h1 class="nome_plano">Enterprise</h1>
								</div>
								<div class="faixa_popular off">
									<h2 class="escuro line branco sempadding">+&nbsp;utilizado</h2>
								</div>
								<div class="desc_plano"><img src="images/1438802758_city.png">
									<!-- <h3 class="h3_preco"><span class="mes"><a class="link_consulte" href="contato" target="_blank">Consulte-nos</a></span></h3> -->
									<h3 class="h3_preco">R$1.249<span class="mes">/mês</span></h3>
									<h2 class="escuro line features" style="text-align:center; font-size:13px;"><b>cobrado anualmente</b> equivalente a <br>R$ 14.990,00/ano</h2>
									<a href="javascript:" class="w-button button verde set-plano" rel="3" id="a_enterprise">Escolher</a>
									<input type="radio" class="planoAssinatura" name="planoAssinatura" value="8">
									<input type="radio" class="planoAssinatura" name="valorAssinatura" value="1499000">
								</div>
								<!-- <div class="div_planos_features" style="margin-top:53px;"> -->
								<div class="div_planos_features">
									<ul>
										<li class="item_lista">
											<h2 class="escuro line features">50 usuários</h2>
										</li>
										<li>
											<h2 class="escuro line features">100.000 contatos</h2>
										</li>
										<li>
											<h2 class="escuro line features">Automação de Marketing</h2>
										</li>
										<li>
								            <h2 class="escuro line features">SMS Marketing</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Tracking</h2>
								        </li>
								        <li>
								            <h2 class="escuro line features">Lead Scoring</h2>
								        </li>
										<li>
											<h2 class="escuro line features">Suporte via Email/Skype <br>ou Telefone</h2>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset class="w-col w-col-12 left">
						<p style="font-size:13px; color:red; margin-bottom:20px; display:none;" id="aviso_plano">Por favor escolha um dos planos acima para continuar.</p>
					</fieldset>

					<fieldset class="w-col w-col-6">
						<label for="email_contrato">Cupom de Desconto</label>
						<input type="text" class="w-input input" name="codigo_cupom" data-name="codigo_cupom" id="codigo_cupom" placeholder="Código do cupom">
						<input type="hidden" name="id_plano_cupom" id="id_plano_cupom" value="">
						<input type="hidden" name="valor_plano_cupom" id="valor_plano_cupom" value="">
					</fieldset>
					<fieldset class="w-col w-col-6">
						<a href="javascript:" class="w-button button verde btn-validar-cupom" style="margin-top:28px;">Validar Cupom</a>
						<p style="font-size:13px; color:#053c50; margin-top:10px; display:none; font-weight:600;" id="aviso_cupom_sucesso">O cupom de desconto foi aplicado com sucesso!</p>
						<p style="font-size:13px; color:red; margin-top:10px; display:none; font-weight:600;" id="aviso_cupom_erro">O cupom de desconto informado não é válido. Nenhum desconto será aplicado ao plano escolhido!</p>
						<p style="font-size:13px; color:red; margin-top:10px; display:none; font-weight:600;" id="aviso_cupom_vazio">Favor informar o código do cupom de desconto.</p>
						<p style="font-size:13px; color:red; margin-top:10px; display:none; font-weight:600;" id="aviso_plano_vazio">Favor escolher um dos planos antes de aplicar seu cupom de desconto.</p>
					</fieldset>

					<fieldset class="w-col w-col-12">
						<h4 class="tituloContainer">Implementação Orientada do Software*</h4>
					</fieldset>
					<fieldset class="w-col w-col-6">
						<select class="w-input input" name="implementacao" data-name="implementacao" id="implementacao" required="required">
							<option value="" selected="selected">Selecione</option>
							<option value="gratuita">Implementação Gratuita em 7 dias - R$ 0,00</option>
							<option value="rapida">Implementação Rápida em 30 dias - 2x R$ 350,00</option>
							<option value="padrao">Implementação Padrão em 90 dias - 3x R$ 600,00</option>
						</select>
						<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_implementacao">Por favor selecione uma das opções.</p>
					</fieldset>
					<fieldset class="w-col w-col-6">
						<p class="destaque">A escolha de um dos planos de implementação é obrigatória e essencial para guiar você no alcance de seus resultados.<br>Os planos foram criados para que você escolha aquele que atende melhor a sua necessidade.</p>
					</fieldset>
					<fieldset class="w-col w-col-12">
						<p>Deseja conhecer melhor nossos planos de implementação?</p>
						<a href="implementacao-lahar" class="w-button button azul" target="_blank">Quero saber mais!</a>
					</fieldset>

					<fieldset class="w-col w-col-12">
						<h4 class="tituloContainer">Contrato</h4>
					</fieldset>
					<fieldset class="w-col w-col-6">
						<label for="email_contrato">E-mail</label>
						<input type="email" class="w-input input" name="email_contrato" data-name="email_contrato" id="email_contrato" placeholder="E-mail" required="required">
						<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:left;" id="aviso_email_contrato_invalido">O e-mail informado não é válido.</p>
					</fieldset>
					<fieldset class="w-col w-col-6">
						<p class="destaque label" style="margin-top: 28px;">Neste e-mail, você receberá os dados deste formulário e a cópia do contrato.</p>
					</fieldset>
					<fieldset class="w-col w-col-12 center top-50">
						<div class="mt-checkbox-inline">
							<label class="mt-checkbox mt-checkbox-line">
								<input type="checkbox" name="contrato" data-name="contrato" id="contrato" required="required">Declaro que li e aceito os termos de uso deste contrato.
								<span></span>
							</label>
						</div>
						<p class="destaque">Acesse os termos de uso deste contrato <a href="contrato-prestacao-servicos" target="_blank">clicando aqui.</a></p>
						<p class="center" style="font-size:12px; color:red; display:none; font-weight:600; text-align:center;" id="aviso_aceite_contrato">Antes de continuar é preciso aceitar os termos do contrato.</p>
					</fieldset>
					<fieldset class="w-col w-col-12 center action">
						<a href="javascript:" class="w-button button verde big btn-voltar" rel="2"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
						<button type="submit" class="w-button button verde big btn-salvar-efetuar-pagamento" rel="3" data-wait="Por favor aguarde..." data-ix=''>
						    Salvar e efetuar o pagamento <i class="fa fa-arrow-right" aria-hidden="true"></i>
						</button>
					</fieldset>
				</div>
				<!-- FIM - ETAPA 2 -->
			</form>

			<!-- ETAPA 3 -->
			<div id="etapa3" class="w-row box-etapa" style="display: none;">
					<fieldset class="w-col w-col-12 center" id="mensagem_sucesso">
						<h2 class="sucesso"><i class="fa fa-check-square-o" aria-hidden="true"></i> Informações registradas com sucesso!</h2>
						<p>Clique no botão abaixo para realizar seu pagamento. Após a confirmação a ferramenta será liberada imediatamente.</p>
					</fieldset>
					<fieldset class="w-col w-col-12 center" id="mensagem_erro" style="display: none;">
						<h2 class="erro"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="font-size:60px;"></i> Erro ao processar seu pagamento!</h2>
						<p>Infelizmente não conseguimos processar seu pagamento. Por favor, tente novamente.</p>
					</fieldset>
					<fieldset class="w-col w-col-12 center action">
						 <button id="pay-button" class="w-button button verde big" rel="4">
						    Efetuar pagamento <i class="fa fa-arrow-right" aria-hidden="true"></i>
						</button>
					</fieldset>
				</button>
			</div>
			<!-- FIM - ETAPA 3 -->

			<!-- ETAPA 4 -->
			<div id="etapa4" class="w-row box-etapa" style="display: none;">
				<fieldset class="w-col w-col-12 center">
					<h2 class="sucesso"><i class="fa fa-check-square-o" aria-hidden="true"></i> Pagamento realizado com sucesso!</h2>
					<p>Registramos o seu pagamento, agora você já pode acessar a nossa ferramenta e começar a gerar resultado para a sua empresa.</p>
					<br>
					<p><b>Você receberá um e-mail com as orientações e a senha de acesso!<b></p>
				</fieldset>
				<fieldset class="w-col w-col-12 center action" style="margin-top:30px;">
					<a href="https://app.lahar.com.br/" class="w-button button verde big">Acessar Ferramenta <i class="fa fa-sign-in" aria-hidden="true"></i></a>
				</fieldset>
			</div>
			<!-- FIM - ETAPA 4 -->

			<div class="w-row" style="padding-top: 35px; text-align: center;">
				<div class="w-col w-col-12">
					<div class="linha"></div>
				</div>
			</div>
			<input type="hidden" name="hash_empresa_criada" id="hash_empresa_criada" value="">

			<!-- DEPOIMENTOS -->
			<div class="w-row" style="padding-bottom: 107px;  padding-top: 35px;">
				<div class="w-col w-col-14" style="text-align: center;">
					<img src="images/fotoMocelim.png" style="width: 26%;"><br><br>
					<p style="text-align: center; color: #555555;">
						“Realizamos webinars em uma média de 3 vezes por semana, o que leva a um processo constante da utilização do e-mail marketing com o objetivo de divulgar esses eventos. Com a LAHAR, conseguimos aumentar em muito o número de pessoas participando de webinars, o que levou a um maior engajamento de nossos leads.”
						<br>
						<br><strong>Antonio Mocelim - M3Corp</strong>
					</p>
				</div>
				<div class="w-col w-col-14 depoimento-last" style="text-align: center; float: right;">
					<img src="images/fotoMarina.png" style="width: 26%;"><br><br>
					<p style="text-align: center; color: #555555;">
						“Hoje temos tudo automatizado em nosso site, todas as áreas de conversão são integrados na plataforma. Com a LAHAR, intensificamos a nossa atuação em marketing digital. A plataforma nos garante gestão e mensuração dos resultados e visão dos processos de marketing digital de ponta a ponta.”
						<br>
						<br><strong>Marina Oliveira - Lecom</strong>
					</p>
				</div>
			</div>
			<!-- END-DEPOIMENTOS -->
		</div>
	</div>
	<?php $rodapeMini = true; ?>
	<?php include('includes/rodape.php'); ?>

	<script type="text/javascript">

		$('#cpf').blur(function(){

			var cpf = $('#cpf').val();

			cpf = cpf.replace('.','');
			cpf = cpf.replace('.','');
			cpf = cpf.replace('-','');

			var retorno = isCpf(cpf);

			if (retorno) {
				$('#aviso_cpf_invalido').hide();
				$('.btn-continuar').removeClass('disabled');
			}
			else {
				$('#aviso_cpf_invalido').show();
				$('.btn-continuar').addClass('disabled');
			}
		});

		$('#cnpj').blur(function(){

			var cnpj = $('#cnpj').val();

			cnpj = cnpj.replace('.','');
			cnpj = cnpj.replace('.','');
			cnpj = cnpj.replace('/','');
			cnpj = cnpj.replace('-','');

			var retorno = isCnpj(cnpj);

			if (retorno) {
				$('#aviso_cnpj_invalido').hide();
				$('.btn-continuar').removeClass('disabled');
			}
			else {
				$('#aviso_cnpj_invalido').show();
				$('.btn-continuar').addClass('disabled');
			}
		});

		function isCpf(cpf) {
			var soma;
			var resto;
			var i;

			if ( (cpf.length != 11) ||
			(cpf == "00000000000") || (cpf == "11111111111") ||
			(cpf == "22222222222") || (cpf == "33333333333") ||
			(cpf == "44444444444") || (cpf == "55555555555") ||
			(cpf == "66666666666") || (cpf == "77777777777") ||
			(cpf == "88888888888") || (cpf == "99999999999") ) {
				return false;
			}

			soma = 0;

			for (i = 1; i <= 9; i++) {
			soma += Math.floor(cpf.charAt(i-1)) * (11 - i);
			}

			resto = 11 - (soma - (Math.floor(soma / 11) * 11));

			if ( (resto == 10) || (resto == 11) ) {
			resto = 0;
			}

			if ( resto != Math.floor(cpf.charAt(9)) ) {
			return false;
			}

			soma = 0;

			for (i = 1; i<=10; i++) {
			soma += cpf.charAt(i-1) * (12 - i);
			}

			resto = 11 - (soma - (Math.floor(soma / 11) * 11));

			if ( (resto == 10) || (resto == 11) ) {
			resto = 0;
			}

			if (resto != Math.floor(cpf.charAt(10)) ) {
			return false;
			}

			return true;
		}

		function isCnpj(cnpj){
		    var i;
		    var c = cnpj.substr(0,12);
		    var dv = cnpj.substr(12,2);
		    var d1 = 0;

		    for (i = 0; i < 12; i++){
		        d1 += c.charAt(11-i)*(2+(i % 8));
		    }

		    if (d1 == 0) {
		        return false;
		    }

		    d1 = 11 - (d1 % 11);

		    if (d1 > 9) {
		        d1 = 0;
		    }

		    if (dv.charAt(0) != d1){
		        return false;
		    }

		    d1 *= 2;

		    for (i = 0; i < 12; i++){
		        d1 += c.charAt(11-i)*(2+((i+1) % 8));
		    }

		    d1 = 11 - (d1 % 11);

		    if (d1 > 9) {
		        d1 = 0;
		    }

		    if (dv.charAt(1) != d1){
		        return false;
		    }

		    return true;
		}

		/* SELECIONA O TIPO DE PESSOA */
		$('.muda-pessoa').click(function(){
			$('.muda-pessoa').removeClass('active');
			$(this).addClass('active');
			var input = $(this).attr('rel');
			$('input[value="'+input+'"]').prop( "checked", true );

			var tipoPessoa = '#'+input;
			$('.form-content').hide();
			$(tipoPessoa).show();
			$('#geral').show();

			if(tipoPessoa == '#fisica'){
				$('#cpf').attr("required", "required");
				$('#nome').attr("required", "required");
				$('#cnpj').removeAttr("required");
				$('#razao').removeAttr("required");
			}else{
				$('#cpf').removeAttr("required");
				$('#nome').removeAttr("required");
				$('#cnpj').attr("required", "true");
				$('#razao').attr("required", "true");
			}

			$('#implementacao').removeAttr("required");
			$('#email_contrato').removeAttr("required");
			$('#contrato').removeAttr("required");
		});

		/* MUDA PLANO */

		/* SELECIONA O TIPO DE PLANO */
		$('#plano-mensal').click(function(){
			$('input[value="planoMensal"]').prop( "checked", true );
			$('#plano-anual').removeClass('active');
			$(this).addClass('active');
			$('#planoAnual').hide();
			$('#planoMensal').show();
		});

		$('#plano-anual').click(function(){
			$('input[value="planoAnual"]').prop( "checked", true );
			$('#plano-mensal').removeClass('active');
			$(this).addClass('active');
			$('#planoMensal').hide();
			$('#planoAnual').show();
		});

		<?php if($tipoPlano == 'mensal'){ ?>
			$('input[value="planoMensal"]').prop( "checked", true );
			$('#plano-anual').removeClass('active');
			$('#plano-mensal').addClass('active');
			$('#planoAnual').hide();
			$('#planoMensal').show();
		<?php
		}else if($tipoPlano == 'anual'){ ?>
			$('input[value="planoAnual"]').prop( "checked", true );
			$('#plano-mensal').removeClass('active');
			$('#plano-anual').addClass('active');
			$('#planoMensal').hide();
			$('#planoAnual').show();
		<?php
		}else{ ?>
			$('input[value="planoMensal"]').prop( "checked", true );
			$('#plano-anual').removeClass('active');
			$('#plano-mensal').addClass('active');
			$('#planoAnual').hide();
			$('#planoMensal').show();
		<?php
		} ?>
	</script>

	<script type="text/javascript">

	/* MUDA DE ETAPA */
	$('.btn-continuar').click(function(event){

		var prevEtapa 			= 'etapa'+($(this).attr('rel')-1);
		var nextEtapa 			= 'etapa'+$(this).attr('rel');

		var cpf   			   			= document.getElementById("cpf").value;
		var nome      		   		= document.getElementById("nome").value;
		var cnpj     		   			= document.getElementById("cnpj").value;
		var razao   		   			= document.getElementById("razao").value;
		var endereco    	   		= document.getElementById("endereco").value;
		var numero    		   		= document.getElementById("numero").value;
		var bairro    		   		= document.getElementById("bairro").value;
		var cep    			   			= document.getElementById("cep").value;
		var cidade    		   		= document.getElementById("cidade").value;
		var uf    			   			= document.getElementById("uf").value;
		var tel    			   			= document.getElementById("tel").value;
		var contato_financeiro 	= document.getElementById("contato_financeiro").value;
		var email     					= document.getElementById("mail").value;
		var empresa   					= document.getElementById("empresa").value;
		var site      					= document.getElementById("site").value;
		var objetivo    				= document.getElementById("tags").value;

		if(!validateEmail(contato_financeiro)){
			document.getElementById("aviso_contato_financeiro_invalido").style.display = "block";
			return false;
		}else{
			document.getElementById("aviso_contato_financeiro_invalido").style.display = "none";
		}

		if(!validateEmail(email)){
			document.getElementById("aviso_email_invalido").style.display = "block";
			return false;
		}else{
			document.getElementById("aviso_email_invalido").style.display = "none";
		}

		// Testa se estão vindo dados gerais da primeira etapa
		if(endereco && numero && bairro && cep && cidade && uf && tel && contato_financeiro && email && empresa && site && objetivo){

			// Se for pessoa física verifica se estão vindo os campos
			if(cpf && nome){

				// @author: Hugo Cicarelli
				$.ajax({
					url:'https://app.lahar.com.br/verificar-email',
					method: "POST",
					data: {
						email: email
					},
					beforeSend: function() {
						$('.btn-continuar').addClass('disabled').html('<svg width="30px"  height="30px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#00aeef" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(138 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>');
					},
					success: function( retorno ) {
						if(retorno == 'erro'){
							document.getElementById("aviso_email_invalido").style.display = "none";
							document.getElementById("aviso_email").style.display = "block";
							return false;
						}else{
							$('#todas-etapas').goTo();
							$('#'+prevEtapa).slideUp('slow');
							$('.'+prevEtapa).addClass('etapa-ok');
							$('.'+prevEtapa).removeClass('active');
							$('.'+nextEtapa).addClass('active');
							$('#'+nextEtapa).slideDown('slow');

							$('#implementacao').attr("required", "required");
							$('#email_contrato').attr("required", "required");
							$('#contrato').attr("required", "required");

							document.getElementById("email_contrato").value = email;
						}
					},
					complete: function() {
						$('.btn-continuar').removeClass('disabled').html('Continuar <i class="fa fa-arrow-right" aria-hidden="true"></i>');
					}
				});

			}else if(cnpj && razao){ // Se for pessoa jurídica verifica se estão vindo os campos

				$.ajax({
					url: 'https://app.lahar.com.br/verificar-email',
					method: 'POST',
					data: {
						email: email
					},
					beforeSend: function() {
						$('.btn-continuar').addClass('disabled').html('<svg width="30px"  height="30px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#00aeef" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(138 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>');
					},
					success: function( retorno ) {
						if (retorno == 'erro' ) {
								$("#aviso_email_invalido").hide();
								$("#aviso_email").show();
								return false;
						} else {
							$('#todas-etapas').goTo();
							$('#'+prevEtapa).slideUp('slow');
							$('.'+prevEtapa).addClass('etapa-ok');
							$('.'+prevEtapa).removeClass('active');
							$('.'+nextEtapa).addClass('active');
							$('#'+nextEtapa).slideDown('slow');

							$('#implementacao').attr("required", "required");
							$('#email_contrato').attr("required", "required");
							$('#contrato').attr("required", "required");

							$("#email_contrato").val(email);
						}
					},
					complete: function() {
						$('.btn-continuar').removeClass('disabled').html('Continuar <i class="fa fa-arrow-right" aria-hidden="true"></i>');
					}
				});

			}

			return false;

		}

	});

	/* SALVAR E IR PARA O PAGAMENTO */
	$('.btn-salvar-efetuar-pagamento').click(function(event){

	  	var prevEtapa 			= 'etapa'+($(this).attr('rel')-1);
		var nextEtapa 			= 'etapa'+$(this).attr('rel');

	  	var cpf   			   	= document.getElementById("cpf").value;
	  	var nome      		    = document.getElementById("nome").value;
		var cnpj     		   	= document.getElementById("cnpj").value;
	  	var razao   		   	= document.getElementById("razao").value;
	  	var endereco    	    = document.getElementById("endereco").value;
	  	var numero    		    = document.getElementById("numero").value;
	  	var bairro    		    = document.getElementById("bairro").value;
	  	var cep    			   	= document.getElementById("cep").value;
	  	var cidade    		    = document.getElementById("cidade").value;
	  	var uf    			   	= document.getElementById("uf").value;
	  	var tel    			   	= document.getElementById("tel").value;
	  	var contato_financeiro 	= document.getElementById("contato_financeiro").value;
		var email     			= document.getElementById("mail").value;
	  	var empresa   			= document.getElementById("empresa").value;
	  	var site      			= document.getElementById("site").value;
	  	var objetivo    		= document.getElementById("tags").value;
	  	var codigo_cupom        = document.getElementById("codigo_cupom").value;
	  	var implementacao       = document.getElementById("implementacao").value;
	  	var email_contrato      = document.getElementById("email_contrato").value;
	  	var tipoplano 			= document.getElementsByName('tipoPlano');
	    var plano 				= document.getElementsByName('planoAssinatura');
	    var valorplano 			= document.getElementsByName('valorAssinatura');
		var tipoplano_assinatura;
		var plano_assinatura;
		var valor_plano_assinatura;
		var hash;

		// Remove máscara do cpf/cnpj para não gerar erro quando for mandar os dados para o Pagar.me
		cpf = (cpf.replace('.', '')).replace('-', '');
		cnpj = ((cnpj.replace('/', '')).replace('-', '')).replace('.', '');

		// Separa o DDD e o Telefone para enviar ao Pagar.me
		tel = tel.replace("(", "");
		tel = tel.replace(")", "");
		tel = tel.replace("-", "");
		var ddd = tel.substr(0, 2);
		var telfinal = tel.substr(2, 11);

		if(codigo_cupom){

			plano_assinatura 	   = document.getElementById("id_plano_cupom").value;
			valor_plano_assinatura = document.getElementById("valor_plano_cupom").value;

		}else{

			for(var i = 0; i < plano.length; i++){
			    if(plano[i].checked){
			        plano_assinatura = plano[i].value;
			    }
			}

			for(var i = 0; i < valorplano.length; i++){
			    if(valorplano[i].checked){
			        valor_plano_assinatura = valorplano[i].value;
			    }
			}

		}

  		// COMENTAR DEPOIS
		for(var i = 0; i < tipoplano.length; i++){
		    if(tipoplano[i].checked){
		        tipoplano_assinatura = tipoplano[i].value;
		    }
		}

		// Verifica se algum dos planso foi escolhido
  		if(!plano_assinatura){
  			document.getElementById("aviso_plano").style.display = "block";
  			$('#planoMensal').goTo();
  			return false;
  		}

  		if(!implementacao){
  			document.getElementById("aviso_implementacao").style.display = "block";
			return false;
  		}else{
  			document.getElementById("aviso_implementacao").style.display = "none";
  		}

  		if(!validateEmail(email_contrato)){
  			document.getElementById("aviso_email_contrato_invalido").style.display = "block";
  			return false;
  		}else{
  			document.getElementById("aviso_email_contrato_invalido").style.display = "none";
  		}

		var assinatura_contrato = document.getElementById('contrato').checked;
		if(assinatura_contrato == true){
			var contrato = 'checked';
			document.getElementById("aviso_aceite_contrato").style.display = "none";
		}else{
			var contrato = null;
			document.getElementById("aviso_aceite_contrato").style.display = "block";
			return false;
		}

		// Testa se estão vindo dados gerais da primeira etapa
		if(endereco && numero && bairro && cep && cidade && uf && tel && contato_financeiro && email && empresa && site && objetivo){

			// Se for pessoa física verifica se estão vindo os campos
			if(cpf && nome && implementacao && email_contrato && contrato){

				$.ajax({
					url: 'https://app.lahar.com.br/cadastro',
					method: 'POST',
					data: { cpf: cpf, nome: nome, endereco: endereco, numero: numero, bairro: bairro, cep: cep, cidade: cidade, uf: uf, telefone: tel, contato_financeiro: contato_financeiro, email: email, nome_empresa: empresa, site_empresa: site, objetivo: objetivo, implementacao: implementacao, email_contrato: email_contrato, codigo_cupom: codigo_cupom },
					beforeSend: function() {
						$('.btn-salvar-efetuar-pagamento').addClass('disabled').html('<svg width="30px"  height="30px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#00aeef" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(138 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>');
					},
					success: function( retorno ) {
						if ( retorno == 'erro_criar_empresa' ) {

							window.location.href = 'assinar-erro-salvar';

						} else {

							$('#todas-etapas').goTo();
							$('#'+prevEtapa).slideUp('slow');
							$('.'+prevEtapa).addClass('etapa-ok');
							$('.'+prevEtapa).removeClass('active');
							$('.'+nextEtapa).addClass('active');
							$('#'+nextEtapa).slideDown('slow');

							$("#hash_empresa_criada").val(retorno);
							hash = retorno;
						}
					},
					complete: function() {
						$('.btn-salvar-efetuar-pagamento').removeClass('disabled').html('Salvar e efetuar o pagamento <i class="fa fa-arrow-right" aria-hidden="true"></i>');
					}
				});

				//return false;

			}else if(cnpj && razao && implementacao && email_contrato && contrato){ // Se for pessoa jurídica verifica se estão vindo os campos

				$.post('https://app.lahar.com.br/cadastro', { cnpj: cnpj, nome: razao, razao: razao, endereco: endereco, numero: numero, bairro: bairro, cep: cep, cidade: cidade, uf: uf, telefone: tel, contato_financeiro: contato_financeiro, email: email, nome_empresa: empresa, site_empresa: site, objetivo: objetivo, implementacao: implementacao, email_contrato: email_contrato, codigo_cupom: codigo_cupom }, function(retorno){

		          if(retorno == 'erro_criar_empresa'){

		            window.location.href = 'assinar-erro-salvar';

		          }else{

		          	$('#todas-etapas').goTo();
		          	$('#'+prevEtapa).slideUp('slow');
					$('.'+prevEtapa).addClass('etapa-ok');
					$('.'+prevEtapa).removeClass('active');
					$('.'+nextEtapa).addClass('active');
					$('#'+nextEtapa).slideDown('slow');

					document.getElementById("hash_empresa_criada").value = retorno;
					hash = retorno;
		          }

		        });

		        //return false;
			}

			// INICIAR A INSTÂNCIA DO CHECKOUT
      // declarando um callback de sucesso
			// @author: Hugo Cicarelli
	  	// ek_live_WLCpXxf6y2BRUvknWtJmxgLJS96WIA
	  	// ek_test_K21dHsPdfb32E2zIV9nWN0o5qU8YZT
	  	var checkout = new PagarMeCheckout.Checkout({
	  		"encryption_key":"ek_live_WLCpXxf6y2BRUvknWtJmxgLJS96WIA",
	  		success: function(data) {
      			//Tratar aqui as ações de callback do checkout, como exibição de mensagem ou envio de token para captura da transação
				$.ajax({
					url: 'https://app.lahar.com.br/assinatura',
					method: 'POST',
					data: {
						hash: hash,
						pagarme: data,
						id_plano: plano_assinatura
					},
					beforeSend: function() {
						$('#todas-etapas').goTo();
						$('#mensagem_sucesso, #mensagem_erro, #pay-button').hide();
						$('#mensagem_erro').after('<div id="loading-gif"><svg width="100px"  height="100px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#00aeef" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(138 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg></div>');
					},
					success: function(retorno) {
						if ( retorno == 'sucesso' ) {
							$('#todas-etapas').goTo();
     				 	$('#etapa3').slideUp('slow');
							$('.etapa3').addClass('etapa-ok');
							$('.etapa3').removeClass('active');
							$('.etapa3').removeClass('etapa-erro');
							$('.etapa4').addClass('active');
							$('#etapa4').slideDown('slow');
						} else {
							$('.etapa3').addClass('etapa-erro');
							$('#mensagem_sucesso').hide();
							$('#mensagem_erro, #pay-button').show();
						}
					},
					error: function() {
						$('.etapa3').addClass('etapa-erro');
						$('#mensagem_sucesso').hide();
						$('#mensagem_erro, #pay-button').show();
					},
					complete: function() {
						$('#loading-gif').remove();
					}
				});

				console.log('foi');
				console.log(data);
      		},
      		error: function(error) {
      			$('.etapa3').addClass('etapa-erro');
				document.getElementById("mensagem_sucesso").style.display = "none";
				document.getElementById("mensagem_erro").style.display = "block";

				console.log('erro');
				console.log(error);
			}
		});

	  	if ( cpf ) {
  			var documento = cpf;
  			var nome_entidade = nome;
  		} else {
  			var documento = cnpj;
  			var nome_entidade = razao+" ("+empresa+")";
  		}

      // DEFINIR AS OPÇÕES
      // e abrir o modal
      // É necessário passar os valores boolean em "var params" como string

      var params = {
      	"customerData":"true",
      	"amount":valor_plano_assinatura,
      	"createToken":"false",
      	"paymentMethods":"credit_card,boleto",
      	"customerName":nome_entidade,
      	"customerDocumentNumber":documento,
      	"customerEmail":contato_financeiro,
      	"customerAddressStreet":endereco,
      	"customerAddressStreetNumber":numero,
      	"customerAddressNeighborhood":bairro,
      	"customerAddressCity":cidade,
      	"customerAddress-State":uf,
      	"customerAddressZipcode":cep,
      	"customerPhoneDdd":ddd,
      	"customerPhoneNumber":telfinal
      };

      checkout.open(params);

      return false;
		}

	});

	/* VOLTA A ETAPA DE DADOS */
	$('.btn-voltar').click(function(){
		var prevEtapa = 'etapa'+($(this).attr('rel')-1);
		var nextEtapa = 'etapa'+$(this).attr('rel');
		$('#todas-etapas').goTo();
		$('#'+nextEtapa).slideUp('slow');
		$('.'+nextEtapa).removeClass('etapa-ok');
		$('.'+nextEtapa).removeClass('active');
		$('.'+prevEtapa).addClass('active');
		$('#'+prevEtapa).slideDown('slow');

		document.getElementById("aviso_email").style.display = "none";
	});

	/* SELECIONA PLANO VINDO DO SITE */
	$('#<?php echo $planoAssinatura; ?>').parents('.coluna_branca_plano').addClass('pop');
	$('#<?php echo $planoAssinatura; ?>').parent().siblings('.div_title_plano').addClass('pop');
	$('#<?php echo $planoAssinatura; ?>').siblings('input').prop( "checked", true );

	/* SELECIONA PLANO NO CLIQUE */
	$('.set-plano').on('click', function(){
		$('.coluna_branca_plano').removeClass('pop');
		$('.div_title_plano').removeClass('pop');

		$(this).parents('.coluna_branca_plano').addClass('pop');
		$(this).parent().siblings('.div_title_plano').addClass('pop');
		$(this).siblings('input').prop( "checked", true );
	});

	/* VALIDA O CUPOM DE DESCONTO */
	$('.btn-validar-cupom').click(function(event){

  		var cupom = document.getElementById("codigo_cupom").value;
  		var plano = document.getElementsByName('planoAssinatura');
		var plano_assinatura;

		for(var i = 0; i < plano.length; i++){
		    if(plano[i].checked){
		        plano_assinatura = plano[i].value;
		    }
		}

		// Verifica se algum dos planso foi escolhido
  		if(plano_assinatura){

			if(cupom){
				document.getElementById("aviso_plano_vazio").style.display = "none";
				document.getElementById("aviso_cupom_vazio").style.display = "none";

			    $.post('https://app.lahar.com.br/verificar-cupom', {planos_id: plano_assinatura, cupom: cupom}, function(retorno){
		          if(retorno == 'erro'){
		            document.getElementById("aviso_cupom_sucesso").style.display = "none";
		            document.getElementById("aviso_cupom_erro").style.display = "block";
		            document.getElementById("id_plano_cupom").value = null;
		            document.getElementById("valor_plano_cupom").value = null;
		          }else{
		   			document.getElementById("aviso_cupom_erro").style.display = "none";
		   			document.getElementById("aviso_cupom_sucesso").style.display = "block";
		   			document.getElementById("id_plano_cupom").value = retorno.split("|",1);
		   			document.getElementById("valor_plano_cupom").value = retorno.split("|").pop()+"00";
		          }
		        });

			}else{
				document.getElementById("aviso_plano_vazio").style.display = "none";
				document.getElementById("aviso_cupom_vazio").style.display = "block";
			}
		}else{
			document.getElementById("aviso_plano_vazio").style.display = "block";
		}

	});


	function formatar(mascara, documento){
		var i = documento.value.length;
		var saida = mascara.substring(0,1);
		var texto = mascara.substring(i)

		if (texto.substring(0,1) != saida){
			documento.value += texto.substring(0,1);
		}
	}

	// @author: Hugo Cicarelli
	// lentidão no carregamento do jQuery resultava em erro de declaração da Função
	// setInterval executa a cada 50ms, certificando que a função será declarada
	var gotoDeclaration = setInterval(function() {
		$.fn.goTo = function() {
			$('html, body').animate({
				scrollTop: $(this).offset().top + 'px'
			}, 'fast');
			return this; // for chaining...
		}

		if ( typeof $('body').goTo() === 'object' ) {
			clearInterval(gotoDeclaration);
		}
	}, 50);

	// setTimeout(function() {
  //   $.fn.goTo = function() {
  //     $('html, body').animate({
  //     	scrollTop: $(this).offset().top + 'px'
  //     }, 'fast');
  //     return this; // for chaining...
  //   }
	// }, 500);

	function validateEmail(email) {
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
	</script>

	<script>
	// Registra o evento blur do campo "cep", ou seja, quando o usuário sair do campo "cep" faremos a consulta dos dados
	$("#cep").blur(function(){
		// Para fazer a consulta, removemos tudo o que não é número do valor informado pelo usuário
		var cep = this.value.replace(/[^0-9]/, "");

		// Validação do CEP; caso o CEP não possua 8 números, então cancela a consulta
		if(cep.length!=8){
			return false;
		}

		var url = "https://api.pagar.me/1/zipcodes/"+cep;

		// Aqui fazemos uma requisição ajax ao webservice, tratando o retorno com try/catch para que caso ocorra algum
		// erro (o cep pode não existir, por exemplo) o usuário não seja afetado, assim ele pode continuar preenchendo os campos
		$.ajax({
		  dataType: "json",
		  url: url,
			beforeSend: function() {
				$("#endereco").addClass('disabled').attr('disabled', 'disabled');
				$("#bairro").addClass('disabled').attr('disabled', 'disabled');
				$("#cidade").addClass('disabled').attr('disabled', 'disabled');
				$("#uf").addClass('disabled').attr('disabled', 'disabled');
			},
		  success: function(dadosRetorno) {
				$("#aviso_cep_invalido").hide();
				$("#endereco").val(dadosRetorno.street);
				$("#bairro").val(dadosRetorno.neighborhood);
				$("#cidade").val(dadosRetorno.city);
				$("#uf").val(dadosRetorno.state);
				$('#numero').focus();
			},
			error: function() {
				$("#aviso_cep_invalido").show();
  			$("#cep").val('');
			},
			complete: function() {
				$("#endereco").removeClass('disabled').removeAttr('disabled');
				$("#bairro").removeClass('disabled').removeAttr('disabled');
				$("#cidade").removeClass('disabled').removeAttr('disabled');
				$("#uf").removeClass('disabled').removeAttr('disabled');
			}
		});

	});
	</script>

	<script>
	/* BOTÃO QUE CHAMA O CHECKOUT TRANSPARENTE */
  	$(document).ready(function() {
    var button = $('#pay-button');

    button.click(function() {

      	var prevEtapa 		= 'etapa'+($(this).attr('rel')-1);
		var nextEtapa 		= 'etapa'+$(this).attr('rel');
    	var cpf   			= document.getElementById("cpf").value;
  		var nome      		= document.getElementById("nome").value;
		var cnpj     		= document.getElementById("cnpj").value;
  		var endereco    	= document.getElementById("endereco").value;
  		var numero    		= document.getElementById("numero").value;
  		var bairro    		= document.getElementById("bairro").value;
  		var cep    			= document.getElementById("cep").value;
  		var cidade    		= document.getElementById("cidade").value;
  		var uf    			= document.getElementById("uf").value;
		var email     		= document.getElementById("mail").value;
  		var empresa   		= document.getElementById("empresa").value;
  		var tel    			= document.getElementById("tel").value;
  		var site      		= document.getElementById("site").value;
  		var objetivo    	= document.getElementById("tags").value;
    	var implementacao 	= document.getElementById("implementacao").value;
      	var codigo_cupom   	= document.getElementById("codigo_cupom").value;
      	var hash 			= document.getElementById("hash_empresa_criada").value;
      	var plano 			= document.getElementsByName('planoAssinatura');
      	var valorplano 		= document.getElementsByName('valorAssinatura');
		var plano_assinatura;
		var valor_plano_assinatura;

			if(codigo_cupom){

				plano_assinatura 	   = document.getElementById("id_plano_cupom").value;
				valor_plano_assinatura = document.getElementById("valor_plano_cupom").value;

			}else{

				for(var i = 0; i < plano.length; i++){
				    if(plano[i].checked){
			        	plano_assinatura = plano[i].value;
				    }
				}

				for(var i = 0; i < valorplano.length; i++){
				    if(valorplano[i].checked){
			        	valor_plano_assinatura = valorplano[i].value;
				    }
				}

			}

        // INICIAR A INSTÂNCIA DO CHECKOUT
        // declarando um callback de sucesso
        // ek_test_K21dHsPdfb32E2zIV9nWN0o5qU8YZT
        // ek_live_WLCpXxf6y2BRUvknWtJmxgLJS96WIA
        var checkout = new PagarMeCheckout.Checkout({"encryption_key":"ek_live_WLCpXxf6y2BRUvknWtJmxgLJS96WIA", success: function(data) {
        //Tratar aqui as ações de callback do checkout, como exibição de mensagem ou envio de token para captura da transação

					$.ajax({
					  url: 'https://app.lahar.com.br/assinatura',
						method: 'POST',
						data: {
							hash: hash,
							pagarme: data,
							id_plano: plano_assinatura
						},
						beforeSend: function() {
							$('#todas-etapas').goTo();
							$('#mensagem_sucesso, #mensagem_erro, #pay-button').hide();
							$('#mensagem_erro').after('<div id="loading-gif"><svg width="100px"  height="100px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#00aeef" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(138 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg></div>');
						},
					  success: function(retorno) {
							if ( retorno == 'sucesso' ) {
	     				 	$('#todas-etapas').goTo();
	     				 	$('#'+prevEtapa).slideUp('slow');
								$('.'+prevEtapa).addClass('etapa-ok');
								$('.'+prevEtapa).removeClass('active');
								$('.'+prevEtapa).removeClass('etapa-erro');
								$('.'+nextEtapa).addClass('active');
								$('#'+nextEtapa).slideDown('slow');
							} else {
								$('.'+prevEtapa).addClass('etapa-erro');
								$('#mensagem_sucesso').hide();
								$('#mensagem_erro, #pay-button').show();
							}
						},
						error: function() {
							$('.'+prevEtapa).addClass('etapa-erro');
							$('#mensagem_sucesso').hide();
							$('#mensagem_erro, #pay-button').show();
						},
						complete: function() {
							$('#loading-gif').remove();
						}
					});

        },
        error: function(error) {
        	$('.'+prevEtapa).addClass('etapa-erro');
					document.getElementById("mensagem_sucesso").style.display = "none";
					document.getElementById("mensagem_erro").style.display = "block";
				}

				});

		  		if(cpf){
		  			var documento = cpf;
		  			var nome_entidade = nome;
		  		}else{
		  			var documento = cnpj;
		  			var nome_entidade = razao+" ("+empresa+")";
		  		}

                // DEFINIR AS OPÇÕES
                // e abrir o modal
                // É necessário passar os valores boolean em "var params" como string
                var params = {
                	"customerData":"false",
                	"amount":valor_plano_assinatura,
                	"createToken":"false",
                	"paymentMethods":"credit_card,boleto",
                	"customerName":nome_entidade,
                	"customerDocumentNumber":documento,
                	"customerEmail":email,
                	"customerAddressStreet":endereco,
                	"customerAddressStreetNumber":numero,
                	"customerAddressNeighborhood":bairro,
                	"customerAddressCity":cidade,
                	"customerAddress-State":uf,
                	"customerAddressZipcode":cep
                };

                checkout.open(params);
            });
        });

    </script>

	<script src="js/jquery.maskedinput.js"></script>

	<script type="text/javascript">
	/*
	jQuery("input.telefone")
	    .focusin(function (event) {
	        var target, phone, element;
	        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
	        element = $(target);
	        element.unmask();
	        element.mask("(99) 9999-9999?9");
	});

	jQuery("input.telefone")
	    .focusout(function (event) {
	        var target, phone, element;
	        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
	        phone = target.value.replace(/\D/g, '');
	        element = $(target);
	        element.unmask();

	        if(phone.length > 10) {
	            element.mask("(99) 99999-999?9");
	        } else {
	            element.mask("(99) 9999-9999?9");
	        }
	});

	jQuery("input.cpf")
	    .focusin(function (event) {
	        var target, value, element;
	        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
	        value = target.value.replace(/\D/g, '');
	        element = $(target);
	        element.unmask();

		    element.mask("999.999.999-99");
	});

	jQuery("input.cnpj")
	    .focusin(function (event) {
	        var target, value, element;
	        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
	        value = target.value.replace(/\D/g, '');
	        element = $(target);
	        element.unmask();

		    element.mask("99.999.999/9999-99");
	});
	*/
	jQuery(document).ready(function($) {
	   $("#cpf").mask("999.999.999-99");
	   $("#cnpj").mask("99.999.999/9999-99");
	   $("#cep").mask("99999-999");
		 $('#tel').mask("(99) 9999-9999?9")
		 					.focusout(function (event) {
		            var target, phone, element;
		            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		            phone = target.value.replace(/\D/g, '');
		            element = $(target);
		            element.unmask();
		            if(phone.length > 10) {
		                element.mask("(99) 99999-999?9");
		            } else {
		                element.mask("(99) 9999-9999?9");
		            }
			        });

	});
	</script>
</body>
</html>
