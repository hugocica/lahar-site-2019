<!DOCTYPE html>
<!--  Last Published: Fri Sep 28 2018 13:19:55 GMT+0000 (UTC)  -->
<html data-wf-page="5b61fa57f40d766db0e53b3a" data-wf-site="5b61fa57f40d761dfde53b39">
<head>
    <title>Experimente nosso software gratuitamente por 15 dias!</title>
    <meta content="Transforme seus contatos em vendas com nosso Software de Marketing Digital. Gere mais leads e melhore suas taxas de conversão com automação." name="description">
    <meta content="Experimente nosso software gratuitamente por 15 dias!" property="og:title">
    <meta content="Transforme seus contatos em vendas com nosso Software de Marketing Digital. Gere mais leads e melhore suas taxas de conversão com automação." property="og:description">

    <?php include_once './includes/header.php'; ?>

    <style media="screen">
        .cupom-codigo-wrapper {
            position: relative;
        }
        .loading-gif {
            top: 0;
        }
        .cria-trial-wrapper {
            position: relative;
            min-height: 50px;
        }
        #cria_conta_trial[disabled] {
            background-color: #e3e3e3;
            cursor: not-allowed;
        }
    </style>

</head>

<body>

    <div class="section-hero experimente">
        <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar alternativo w-nav">
            <div class="container-navbar noheader w-container">
                <a href="<?php echo base_url; ?>">
                    <img src="assets/images/logo.png" width="143" class="logo-white">
                </a>
                <div class="txt-block-top">
                    <span class="yellow">Dúvidas?</span> Ligue para nossa Central de Vendas: <a href="tel:(14)3010-3330" class="link-yellow">(14) 3010-3330</a> ou <a href="tel:(11)3230-1825" class="link-yellow">(11) 3230-1825</a>
                </div>
                <div class="w-hidden-medium w-hidden-small w-hidden-tiny w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
            <div class="line-nav"></div>
        </div>
        <div class="w-container">
            <div class="spacer _50"></div>
            <h1 class="h1" data-ix="show-on-scroll">Experimente nosso software de marketing digital gratuitamente!</h1>
            <h2 class="h2 left" data-ix="show-on-scroll">Utilize nosso software de Inbound Marketing <span class="highlight">15 dias</span> sem custo</h2>
            <div class="div-experimente">
                <div class="w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" data-ix="show-on-scroll">
                        <div class="spacer"></div>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6 form-left-side">
                                <div id="form-wrapper">
                                    <input type="email" class="field w-input" maxlength="256" name="experimente-email" data-name="experimente-email" placeholder="Seu endereço de e-mail*" id="experimente-email" value="<?php echo ( isset($_GET['email']) ) ? trim($_GET['email']) : ''; ?>" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="experimente-nome" data-name="experimente-nome" placeholder="Seu nome*" id="experimente-nome" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="experimente-telefone" data-name="experimente-telefone" placeholder="Seu telefone de contato*" id="experimente-telefone" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="experimente-empresa" data-name="experimente-empresa" placeholder="Nome da sua empresa*" id="experimente-empresa" required="">
                                    <input type="text" class="field w-input" maxlength="256" name="experimente-site" data-name="experimente-site" placeholder="Site da sua empresa*" id="experimente-site" required="" onblur="normalizaLink(this.value,this);">
                                    <select id="experimente-objetivo" name="experimente-objetivo" data-name="experimente-objetivo" required="" class="select w-select">
                                        <option selected="" disabled="" value="">Qual o seu objetivo com a LAHAR?*</option>
                                        <option value="empreendedor">Possuo um negócio e desejo ter resultados com a internet</option>
                                        <option value="concorrente">Já utilizei/utilizo outra ferramenta e desejo saber mais sobre a LAHAR</option>
                                        <option value="agencia">Sou uma agência e desejo entender como utilizar para meus clientes</option>
                                        <option value="estudante">Sou estudante e interessado em conhecer esse tipo de software</option>
                                    </select>
                                    <select id="segmento" name="segmento" data-name="segmento" required="" class="select w-select">
                                        <option selected="" disabled="" value="">Segmento*</option>
                                        <option value="Agência | Consultoria">Agência | Consultoria</option>
                                        <option value="Agronegócio">Agronegócio</option>
                                        <option value="Automotivo">Automotivo</option>
                                        <option value="SaaS">SaaS</option>
                                        <option value="E-commerce">E-commerce</option>
                                        <option value="Educação e Ensino">Educação e Ensino</option>
                                        <option value="Finanças">Finanças</option>
                                        <option value="Consultoria RH e Negócios">Consultoria RH e Negócios</option>
                                        <option value="Setor Público">Setor Público</option>
                                        <option value="Saúde">Saúde</option>
                                        <option value="Startup">Startup</option>
                                        <option value="Indústria">Indústria</option>
                                        <option value="Imobiliário">Imobiliário</option>
                                        <option value="Tecnologia">Tecnologia</option>
                                        <option value="Telecomunicações">Telecomunicações</option>
                                        <option value="Turismo e Lazer">Turismo e Lazer</option>
                                        <option value="Serviços">Serviços</option>
                                    </select>
                                    <div class="cupom-codigo-wrapper">
                                        <input type="text" class="field w-input" maxlength="256" name="cupom-codigo" data-name="cupom-codigo" placeholder="Código de indicação (opcional)" id="cupom-codigo">
                                        <div class="loading-gif" style="display: none;"><svg width="50px"  height="50px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#f9da2f" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(161.907 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg></div>
                                        <p style="font-size:13px; color:#053c50; margin-top:10px; display:none; color: #07688e;font-family: 'Open Sans', sans-serif;background-color: #f9da2f;padding: 12px 30px;border-radius: 51px;" id="aviso_cupom_sucesso">Código validado!</p>
                                        <p style="font-size:13px; margin-top:10px; display:none;color: white;font-family: 'Open Sans', sans-serif;background-color: #bb2323;padding: 12px 30px;border-radius: 51px;" id="aviso_cupom_erro">O código informado não é válido.</p>
                                    </div>
                                    <div class="spacer"></div>
                                    <div class="txt-14-white-small" data-ix="show-on-scroll">
                                        Clicando no botão abaixo você concorda com nossos <a href="<?php echo base_url; ?>contrato-de-prestacao-de-servicos" class="link-white">termos de uso</a>.<br>
                                    </div>
                                    <div class="spacer"></div>
                                    <div class="cria-trial-wrapper">
                                        <button id="cria_conta_trial" data-wait="Por favor, aguarde..." class="button-yellow full w-button">ENVIAR SOLICITAÇÃO</button>
                                    </div>
                                </div>

                                <div class="w-row box-etapa" style="display: none; margin-top:10px; margin-bottom:10px;" id="mensagem_sucesso">
                                    <div class="w-clearfix w-col w-col-1 w-col-tiny-1"><img src="assets/images/checked.png" width="30" class="checked"></div>
                                    <fieldset class="w-col w-col-12 center">
                                        <h2 class="sucesso h1"><i class="fa fa-check-square-o" aria-hidden="true"></i>Sua conta foi solicitada com sucesso!</h2>
                                        <!-- <p class="escuro line case">Acesse seu email e siga as instruções enviadas para acessar o software.</p> -->
                                        <p class="txt-14-white-small">Aguarde que você receberá em seu email as instruções e os dados para acessar o software.</p>
                                    </fieldset>
                                </div>

                                <div class="w-row box-etapa" style="display: none; margin-top:10px; margin-bottom:10px;" id="mensagem_erro_usuario">
                                    <fieldset class="w-col w-col-12 center">
                                        <h2 class="sucesso h1"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:#ff0000; font-size:60px;"></i>Oopss...email já cadastrado!</h2>
                                        <p class="txt-14-white-small">O email informado já possui uma conta na LAHAR. Favor informar outro email válido.</p>
                                    </fieldset>
                                    <fieldset class="w-col w-col-12 center action">
                                        <button class="button-yellow full w-button try-again">Tentar novamente</button>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="column-checks w-col w-col-6">
                                <div class="w-row">
                                    <div class="w-clearfix w-col w-col-1 w-col-tiny-1"><img src="assets/images/checked.png" width="30" class="checked"></div>
                                    <div class="w-col w-col-11 w-col-tiny-11">
                                        <div class="txt-14-white-small" data-ix="show-on-scroll">Melhore suas vendas impulsionando a geração de leads e criando rapidamente páginas de destino com formulários de captura<br></div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                                <div class="w-row">
                                    <div class="w-clearfix w-col w-col-1 w-col-tiny-1"><img src="assets/images/checked.png" width="30" class="checked"></div>
                                    <div class="w-col w-col-11 w-col-tiny-11">
                                        <div class="txt-14-white-small" data-ix="show-on-scroll">Crie mais oportunidades concretas de vendas, transformando seus contatos em leads qualificados<br></div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                                <div class="w-row">
                                    <div class="w-clearfix w-col w-col-1 w-col-tiny-1"><img src="assets/images/checked.png" width="30" class="checked"></div>
                                    <div class="w-col w-col-11 w-col-tiny-11">
                                        <div class="txt-14-white-small" data-ix="show-on-scroll">Ganhe mais tempo e produtividade a partir de nosso software de marketing digital, onde você tem controle total sobre sua estratégia<br></div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                                <div class="w-row">
                                    <div class="w-clearfix w-col w-col-1 w-col-tiny-1"><img src="assets/images/checked.png" width="30" class="checked"></div>
                                    <div class="w-col w-col-11 w-col-tiny-11">
                                        <div class="txt-14-white-small" data-ix="show-on-scroll">Acompanhe o retorno sobre investimento de suas ações de Inbound Marketing. Mensure os resultados em tempo real de suas campanhas e obtenha informações atualizadas sobre seus clientes<br></div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                                <div class="w-row">
                                    <div class="w-clearfix w-col w-col-1 w-col-tiny-1"><img src="assets/images/checked.png" width="30" class="checked"></div>
                                    <div class="w-col w-col-11 w-col-tiny-11">
                                        <div class="txt-14-white-small" data-ix="show-on-scroll">Enriqueça suas campanhas de marketing com SMS enviados direito pelo software da LAHAR<br></div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                                <div class="w-row">
                                    <div class="w-clearfix w-col w-col-1 w-col-tiny-1"><img src="assets/images/checked.png" width="30" class="checked"></div>
                                    <div class="w-col w-col-11 w-col-tiny-11">
                                        <div class="txt-14-white-small" data-ix="show-on-scroll">Impacte seus leads de acordo com seus interesses e preferências, por meio do poder da automação de marketing digital<br></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="form-resposta">
                        <label id="status-formulario"></label>
                    </div>
                </div>
            </div>
            <div class="spacer _30 w-hidden-tiny"></div>
        </div>
    </div>
    <div id="formulario" class="div-padding-bottom"></div>
    <div class="section-numeros zeropad">
        <div class="container-center w-container">
            <div class="titulos-padding" data-ix="show-on-scroll">
                <h1 class="h1 medium inverted">Depoimentos</h1>
                <h2 class="h2 small blue">O que nossos clientes dizem sobre o software da LAHAR:</h2>
            </div>
            <div class="spacer _50"></div>
            <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-testimonials w-slider" data-ix="show-on-scroll">
                <div class="mask w-slider-mask">
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Excelente ferramenta para a gestão e nutrição de leads e programação de ações e campanhas de  Inbound Marketing, além de um suporte altamente eficiente e atencioso. Parabéns a todo o time da LAHAR. Tem sido muito produtivo e satisfatório utilizar o software de automação de marketing de vocês.”</div>
                        <div class="spacer _50"></div><img src="assets/images/alexandreconte.jpg" class="foto-author">
                        <div class="title-testimonial">Alexandre Conte</div>
                        <div class="txt-14 testimonial">TOTVS Unidade Curitiba</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“A Agência MUTECH recomenda a LAHAR. Sem dúvidas a melhor relação custo/benefício em ferramenta de automação do mercado. Atendimento e suporte pós venda, nível hard! Parabéns à toda família LAHAR.”</div>
                        <div class="spacer _50"></div><img src="assets/images/celsofoto.jpg" class="foto-author">
                        <div class="title-testimonial">Celso Pimentel</div>
                        <div class="txt-14 testimonial">MUTECH</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Estou utilizando o LAHAR para automação de marketing desde janeiro/2018. Além de ser prático para pessoas leigas como eu, o atendimento ao cliente é excelente. Todos são muito gentis e atenciosos. Acho que vale a pena, porque a grande dificuldade que temos com ferramentas famosas de Inbound Marketing, é justamente no atendimento que pelos que já passei tem um tratamento totalmente impessoal e displicente com o cliente.”</div>
                        <div class="spacer _50"></div><img src="assets/images/helenafoto.jpg" class="foto-author">
                        <div class="title-testimonial">Helena Muzzi</div>
                        <div class="txt-14 testimonial">Essência do Vale</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">"A Uniprag é uma controladora de pragas de âmbito nacional e conta com diversas unidades espalhadas pelo Brasil. Assim, possuímos vários websites. Dentre as muitas contribuições da LAHAR, uma de grande destaque é a possibilidade de, em apenas UMA conta, podermos colocar todos os nossos domínios! Isso gera agilidade, economia e organização sem igual para nossa estratégia de marketing. Aproveitamos para agradecer ao suporte sempre presente e eficiente do pessoal."</div>
                        <div class="spacer _50"></div><img src="assets/images/marcuspiresfoto.jpg" class="foto-author">
                        <div class="title-testimonial">Marcus Pires</div>
                        <div class="txt-14 testimonial">Uniprag</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">"Passei por diversas plataformas de Marketing Digital e posso dizer com toda convicção que não encontrei nenhuma com tantas funcionalidades e com o principal, com excelente atendimento ao cliente. Escolhendo a LAHAR como software de automação de marketing, conseguimos nutrir os leads e obter muito mais resultados através do relacionamento criado com eles. Super recomendo."</div>
                        <div class="spacer _50"></div><img src="assets/images/marciobattistinfoto.jpg" class="foto-author">
                        <div class="title-testimonial">Marcio Battistin</div>
                        <div class="txt-14 testimonial">Estúdio RA</div>
                    </div>
                    <!-- <div class="slide-testimonial w-slide">
                    <div class="txt-20">“É bom poder contar com o apoio constante da LAHAR como software de marketing durante toda a execução do plano estratégico, desde o planejamento, passando pela execução até a mensuração dos resultados.”</div>
                    <div class="spacer _50"></div><img src="assets/images/fotoRoberta.png" srcset="assets/images/fotoRoberta-p-500.png 500w, assets/images/fotoRoberta-p-800.png 800w, assets/images/fotoRoberta.png 914w" sizes="(max-width: 479px) 100vw, 100px" class="foto-author">
                    <div class="title-testimonial">Roberta Kawashima</div>
                    <div class="txt-14 testimonial">Unimagem</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                    <div class="txt-20">&quot;Aqui na Vesti utilizávamos outra plataforma de automação de marketing que atendia as nossas necessidades junto a nossos clientes. Depois da contratação da LAHAR percebemos que poderíamos fazer muito mais, ou seja, ir além daquilo que estávamos praticando e oferecendo. A possibilidade de trabalhar em conjunto com a equipe da LAHAR nos proporciona a certeza de bons negócios.&quot;</div>
                    <div class="spacer _50"></div><img src="assets/images/fotoWagner.png" class="foto-author">
                    <div class="title-testimonial">Wagner de Souza</div>
                    <div class="txt-14 testimonial">Vesti</div>
                    </div> -->
                </div>
                <div class="w-slider-arrow-left">
                    <div class="icon-blue w-icon-slider-left"></div>
                </div>
                <div class="w-slider-arrow-right">
                    <div class="icon-blue w-icon-slider-right"></div>
                </div>
                <div class="slide-nav-2 w-slider-nav w-round"></div>
            </div>
        </div>
    </div>
    <div class="section-footer home alternative">
        <div class="div-last-footer alternative">
            <div class="div-line"></div>
            <div class="container-assinatura w-container">
                <div class="w-row">
                    <div class="w-clearfix w-col w-col-6">
                        <div class="flags">
                            <!--
                            <a href="#"  onclick="changeLanguage('')" class="flag w-inline-block"><img src="assets/images/brasil.svg"></a>
                            <div class="divider-flags"></div>
                            <a href="#"  onclick="changeLanguage('en')" class="flag w-inline-block"><img src="assets/images/united-states.svg"></a>
                            <div class="divider-flags gray"></div>
                            <a href="#" onclick="changeLanguage('es')"  class="flag w-inline-block"><img src="assets/images/spain.svg"></a>
                            -->
                            <a href="#" class="flag w-inline-block"><img src="assets/images/united-states.svg"></a>
                            <div class="divider-flags gray"></div>
                            <a href="#" class="flag w-inline-block"><img src="assets/images/spain.svg"></a>
                        </div>
                        <div class="txtblocks-blue medium _14 middle">Copyright © 2019 - LAHAR. Todos os direitos reservados.</div>
                    </div>
                    <div class="w-hidden-tiny w-col w-col-3"></div>
                    <div class="column-social w-hidden-tiny w-col w-col-3"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/js/lahar-v2.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
    <script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

    <script>
        jQuery(document).ready(function() {
            jQuery("input#experimente-telefone")
            .focusout(function (event) {
                var target, phone, element;
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                element.text().trim();

                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
                // element.text = element.text().trim();
                // alert(element.text.length);
            });

            jQuery("input#experimente-telefone")
            .focusin(function (event) {
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

            $('.try-again').click(function() {
                $('#mensagem_erro_usuario').hide();
                $('#form-wrapper').show();
                $('#cria_conta_trial').show();
            });

            $('#cupom-codigo').blur(function() {

                if ( $(this).val() !== '' ) {

                    $.ajax({
                        url: '<?php echo APP_URL; ?>verificar-cupom',
                        data: {
                            cupom: $(this).val()
                        },
                        dataType: 'json',
                        method: 'POST',
                        beforeSend: function() {
                            $("#mensagem_form_invalido").hide();
                            $("#mensagem_form").hide();

                            $('#cria_conta_trial').attr('disabled', 'disabled').addClass('disabled');
                            $(this).parent().find('.loading-gif').fadeIn('400');

                            $("#aviso_cupom_erro, #aviso_cupom_vazio, #aviso_plano_vazio, #aviso_cupom_sucesso").hide();
                        },
                        success: function(data) {
                            if ( data.erro == true ) {
    							$("#aviso_cupom_sucesso").hide();
    							$("#aviso_cupom_erro").show();
    							$("#id_plano_cupom").val( null );
    							$("#valor_plano_cupom").val( null );
    							$('.cupom-error-message').text('Cupom inválido').show();
    							$('#aviso_cupom_erro').show();

    							$('#cupom-codigo').val('').attr('data-valido', 'false').addClass('invalido');
    						} else {
                                $('#cria_conta_trial').removeAttr('disabled').removeClass('disabled');

    							$("#aviso_cupom_sucesso").show();
    							$('#cupom-codigo').attr('data-valido', 'true').addClass('valido').attr('data-desconto', data.dados['desconto']);
    						}
                        }
                    });

                } else {

                    $("#aviso_cupom_erro, #aviso_cupom_vazio, #aviso_plano_vazio, #aviso_cupom_sucesso").hide();
                    $('#cria_conta_trial').removeAttr('disabled').removeClass('disabled');

                }

            });

            $('#cria_conta_trial').click(function(e) {
                e.preventDefault();

                $('.div-experimente .form-resposta').hide();

                var email           = $("#experimente-email").val(),
                    nome            = $("#experimente-nome").val(),
                    telefone        = $("#experimente-telefone").val(),
                    empresa         = $("#experimente-empresa").val(),
                    site            = $("#experimente-site").val(),
                    objetivo        = $("#experimente-objetivo").val()
                    segmento        = $('#segmento').val();
                    cupom_codigo    = $('#cupom-codigo').val();

                if ( email && nome && telefone && empresa && site && objetivo && segmento && validateEmail(email) ) {

                    $('#cria_conta_trial').hide();
                    $('#cria_conta_trial_aguarde').show();
                    $('#email-form input[required]').removeClass('error');

                    $("#campos_form").hide();
                    $("#motivos").hide();

                    $.ajax({
                        url: '<?php echo APP_URL; ?>cadastro',
                        data: {
                            email: email,
                            nome: nome,
                            telefone: telefone,
                            nome_empresa: empresa,
                            site_empresa: site,
                            objetivo: objetivo,
                            segmento: segmento,
                            cupom: cupom_codigo
                        },
                        dataType: 'html',
                        method: 'POST',
                        beforeSend: function() {
                            $("#status-formulario").html("");
                            $('#cria_conta_trial').after('<div class="loading-gif"><svg width="50px"  height="50px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#f9da2f" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(161.907 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg></div>');
                        },
                        success: function( data ) {
                            $('.loading-gif').remove();
                            if ( data == 'erro_criar_empresa' ) {
                                $("#mensagem_erro").show();
                            } else if( data == 'erro_usuario_existe' ) {
                                $('#form-wrapper').hide();
                                $("#mensagem_erro_usuario").show();
                            } else {
                                $('#form-wrapper').hide();
                                $("#mensagem_sucesso").css('display', 'flex');
                            }
                        }
                    });

                    $.ajax({
                    url: '<?php echo base_url; ?>enviar_trial',
                    dataType: 'json',
                    method: 'POST',
                    data: {
                        email: email,
                        nome: nome,
                        telefone: telefone,
                        nome_empresa: empresa,
                        site_empresa: site,
                        objetivo: objetivo
                    },
                    success: function ( data ) {
                        console.log(data);
                    }
                    });
                } else {
                    $("#status-formulario").html("É necessário preencher corretamente todos os campos contendo asterisco(*).").parent().show();

                    $('#email-form input[required], .select[required]').each(function() {
                        if ( $(this).val() == '' || $(this).val() === null ) {
                            $(this).addClass('error');
                        } else {
                            $(this).removeClass('error');
                        }
                    });
                }
            });
        });
        function normalizaLink(link, campo) {
            if ( link.indexOf('http://') == -1 && link.indexOf('https://') == -1 && link != "" ) {
                campo.value='http://'+link;
            }
                return true;
        }
    </script>

</body>
</html>
