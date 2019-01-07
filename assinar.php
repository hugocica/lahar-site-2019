<!DOCTYPE html>
<!--  Last Published: Fri Sep 28 2018 13:19:55 GMT+0000 (UTC)  -->
<html data-wf-page="5b61fa57f40d766db0e53b3a" data-wf-site="5b61fa57f40d761dfde53b39">
<head>
    <title>Assine um de nossos planos e comece agora a mesmo a utilizar a LAHAR.</title>
    <meta content="Automação de Marketing, Landing Pages, E-mail Marketing, Ferramentas para mídias sociais e muito mais." name="description">
    <meta content="Assine um de nossos planos e comece agora a mesmo a utilizar a LAHAR." property="og:title">
    <meta content="Automação de Marketing, Landing Pages, E-mail Marketing, Ferramentas para mídias sociais e muito mais." property="og:description">

    <?php include_once './includes/header.php'; ?>

</head>

<body>

    <div class="section-hero assinar">
        <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar alternativo w-nav">
            <div class="container-navbar noheader w-container">
                <a href="<?php echo base_url; ?>">
                    <img src="assets/images/logo.png" width="143" class="logo-white">
                </a>
                <div class="txt-block-top"><span class="yellow">Dúvidas?</span> Ligue para nossa Central de Vendas: <a href="tel:(14)3010-3330" class="link-yellow">(14) 3010-3330</a> ou <a href="tel:(11)3230-1825" class="link-yellow">(11) 3230-1825</a>
                </div>
                <div class="w-hidden-medium w-hidden-small w-hidden-tiny w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
            <div class="line-nav"></div>
        </div>
        <div class="container-center w-container">
            <div class="spacer _50"></div>
            <h1 class="h1" data-ix="show-on-scroll">Comece agora mesmo a utilizar o nosso software!</h1>
            <div class="spacer _30"></div>
            <div class="div-passos w-clearfix" data-ix="show-on-scroll">
                <div class="steps w-clearfix">
                    <div class="div-circle y"></div>
                    <a href="#" class="step passo-1 active">1</a>
                    <div class="div-circle y"></div>
                    <div class="txtblock _15">SEUS DADOS</div>
                </div>
                <div class="steps w-clearfix">
                    <div class="div-circle w"></div>
                    <a href="#" class="step passo-2">2</a>
                    <div class="div-circle w"></div>
                    <div class="txtblock _15">SEU PLANO</div>
                </div>
                <div class="steps w-clearfix">
                    <div class="div-circle w"></div>
                    <a href="#" class="step passo-3">3</a>
                    <div class="div-circle w"></div>
                    <div class="txtblock _15">PAGAMENTO</div>
                </div>
                <div class="steps w-clearfix">
                    <div class="div-circle w"></div>
                    <a href="#" class="step passo-4">4</a>
                    <div class="div-circle w"></div>
                    <div class="txtblock _15">CONFIRMAÇÃO</div>
                </div>
            </div>
        </div>
    </div>
    <div id="formulario" class="div-padding-bottom">
        <div class="container-center w-container etapa-wrapper" data-etapa="1" id="assinatura-dados">
            <div class="spacer _50 w-hidden-main w-hidden-medium w-hidden-small"></div>
            <h1 class="h1-medium" data-ix="show-on-scroll">Responsável pelo Contrato:</h1>
            <div>
                <div class="div-width-60">
                    <div class="w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" data-ix="show-on-scroll">
                            <div class="w-row">
                                <div class="w-col w-col-6">
                                    <a href="#" class="button-yellow w-button active tipo-cadastro" data-tipo="pf">PESSOA FÍSICA</a>
                                    <div class="spacer w-hidden-main w-hidden-medium"></div>
                                </div>
                                <div class="w-col w-col-6">
                                    <a href="#" class="button-yellow w-button tipo-cadastro" data-tipo="pj">PESSOA JURÍDICA</a>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <div id="dados-pessoais-wrapper">
                                <h2 class="h2 left tipo-dados-label" data-ix="show-on-scroll">Dados Pessoais</h2>
                                <div class="w-row">
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input required" maxlength="256" name="CPF" data-name="CPF" placeholder="CPF*" id="CPF" required="">
                                    </div>
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input required" maxlength="256" name="Nome" data-name="Nome" placeholder="Nome Completo*" id="nome" required="">
                                    </div>
                                </div>
                            </div>
                            <div id="dados-empresariais-wrapper" style="display: none;">
                                <h2 class="h2 left tipo-dados-label" data-ix="show-on-scroll">Dados Empresariais</h2>
                                <div class="w-row">
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input required" maxlength="256" name="CNPJ" data-name="CNPJ" placeholder="CNPJ*" id="CNPJ">
                                    </div>
                                    <div class="column-zero-pad w-col w-col-6">
                                        <input type="text" class="field w-input required" maxlength="256" name="razao_social" data-name="razao_social" placeholder="Razão Social*" id="razao_social">
                                    </div>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <h2 class="h2 left" data-ix="show-on-scroll">Endereço</h2>
                            <div class="w-row">
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="text" class="field w-input required" maxlength="256" name="CEP" data-name="CEP" placeholder="CEP*" id="CEP" required="">
                                    <input type="text" class="field w-input required" maxlength="256" name="numero" data-name="numero" placeholder="Número*" id="numero" required="">
                                    <input type="text" class="field w-input required" maxlength="256" name="cidade" data-name="cidade" placeholder="Cidade*" id="cidade" required="">
                                    <input type="text" class="field w-input required" maxlength="256" name="telefone" data-name="telefone" placeholder="Telefone*" id="telefone" required="">
                                </div>
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="text" class="field w-input required" maxlength="256" name="endereco" data-name="Endereço" placeholder="Endereço*" id="endereco" required="">
                                    <input type="text" class="field w-input required" maxlength="256" name="bairro" data-name="bairro" placeholder="Bairro*" id="bairro" required="">
                                    <select id="estado" name="estado" data-name="estado" required="" class="select w-select required">
                                        <option value="">Selecione um estado*</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                    <input type="text" class="field w-input required" maxlength="256" name="email_financeiro" data-name="email_financeiro" placeholder="E-mail Financeiro*" id="email_financeiro" required="">
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <h2 class="h2 left" data-ix="show-on-scroll">Dados conta</h2>
                            <div class="w-row">
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="email" class="field w-input required" maxlength="256" name="email" data-name="email" placeholder="E-mail*" id="email" required="">
                                    <input type="text" class="field w-input required" maxlength="256" name="website" data-name="website" placeholder="Website*" id="website" required="">
                                </div>
                                <div class="column-zero-pad w-col w-col-6">
                                    <input type="text" class="field w-input required" maxlength="256" name="nome_empresa" data-name="nome_empresa" placeholder="Nome empresa*" id="nome_empresa" required="">
                                    <select id="objetivo" name="objetivo" data-name="objetivo" required="" class="select w-select required">
                                        <option value="">Qual o seu objetivo com a LAHAR?*</option>
                                        <option value="Possuo um negócio e desejo ter resultados com a internet">Possuo um negócio e desejo ter resultados com a internet</option>
                                        <option value="Já utilizei/utilizo outra ferramenta e desejo saber mais sobre a LAHAR">Já utilizei/utilizo outra ferramenta e desejo saber mais sobre a LAHAR</option>
                                        <option value="Sou uma agência e desejo entender como utilizar para meus clientes">Sou uma agência e desejo entender como utilizar para meus clientes</option>
                                        <option value="Sou estudante e interessado em conhecer esse tipo de software">Sou estudante e interessado em conhecer esse tipo de software</option>
                                    </select>
                                </div>
                            </div>
                            <div class="spacer"></div>
                            <span id="required_fields_message" style="color: #ff0000; text-shadow: 0px 0px 4px #fff; font-weight: 700; display: none;">* Campos obrigatórios não preenchidos e/ou possuem algum erro. Por favor verificar.</span>
                            <div class="spacer"></div>
                            <a href="#" class="button-yellow w-button proxima-etapa">CONTINUAR</a>
                            <div class="spacer"></div>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-center w-container etapa-wrapper" data-etapa="2" id="assinatura-plano" data-ix="show-on-scroll" style="display: none;">
            <h1 class="h1-medium" data-ix="show-on-scroll">Seu Plano</h1>
            <h2 class="h2 small _20">Escolha um de nosso planos e a forma de pagamento, sendo mensal ou anual:<br></h2>
            <div class="spacer _50"></div>
            <div class="txtblock-medium uppercase" data-ix="show-on-scroll">NÚMERO DE CONTATOS</div>
            <a href="#" class="links-contatos active" data-value="5" data-ix="show-on-scroll">5 MIL</a>
            <a href="#" class="links-contatos" data-value="10" data-ix="show-on-scroll">10 MIL</a>
            <a href="#" class="links-contatos" data-value="25" data-ix="show-on-scroll">25 MIL</a>
            <a href="#" class="links-contatos" data-value="50" data-ix="show-on-scroll">50 MIL</a>
            <a href="#" class="links-contatos" data-value="75" data-ix="show-on-scroll">75 MIL</a>
            <a href="#" class="links-contatos" data-value="100" data-ix="show-on-scroll">100 MIL</a>
            <a href="#" class="links-contatos" data-value="125" data-ix="show-on-scroll">125 MIL</a>
            <a href="#" class="links-contatos" data-value="150" data-ix="show-on-scroll">150 MIL</a>
            <a href="#" class="links-contatos" data-value="200" data-ix="show-on-scroll">200 MIL</a>
            <div class="div-period">
                <div class="w-form" data-ix="show-on-scroll">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-switch">
                        <div class="radio-button-field w-radio">
                            <input type="radio" id="radio-mensal" name="radio" value="Radio" data-name="Radio" class="radio-button w-radio-input">
                            <label for="radio" class="w-form-label">mensal</label>
                        </div>
                        <div class="radio-button-field active w-radio">
                            <input type="radio" id="radio-anual" name="radio" value="Radio" data-name="Radio" class="radio-button w-radio-input">
                            <label for="radio" class="w-form-label">anual</label>
                        </div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
            <div class="spacer _50"></div>
            <div class="w-row" data-ix="show-on-scroll">
                <div class="column-center w-col w-col-3">
                    <div class="div-content-planos" data-plano="basic">
                        <div class="parte-cima">
                            <h2 class="h2 small blue bold">BASIC</h2>
                            <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-basic" class="_58 plan-price">229</span><span>/mês</span></div>
                            <div class="txtblock-gray center"><span class="bolder">Cobrado anualmente<br></span>equivalente a R$<span id="equivalentPrice-month-basic">3.490,00</span>/ano</div>
                            <div class="spacer _30"></div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">5 usuários</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                            </div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-3">
                    <div class="div-content-planos destaque" data-plano="professional">
                        <div class="parte-cima">
                            <div class="featured">MAIS CONTRATADO</div>
                            <h2 class="h2 small blue bold">Professional</h2>
                            <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-professional" class="_58 plan-price">349</span><span>/mês</span></div>
                            <div class="txtblock-gray center"><span class="bolder">Cobrado anualmente<br></span>equivalente a R$<span id="equivalentPrice-month-professional">3.490,00</span>/ano</div>
                            <div class="spacer _30"></div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">10 usuários</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Automação de Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">SMS Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Lead Tracking</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                            </div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-3">
                    <div class="div-content-planos" data-plano="enterprise">
                        <div class="parte-cima">
                            <h2 class="h2 small blue bold">enterprise</h2>
                            <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-enterprise" class="_58 plan-price">549</span><span>/mês</span></div>
                            <div class="txtblock-gray center"><span class="bolder">Cobrado anualmente<br></span>equivalente a R$<span id="equivalentPrice-month-enterprise">3.490,00/ano</span></div>
                            <div class="spacer _30"></div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">15 usuários</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Automação de Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">SMS Marketing</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Lead Tracking</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Lead Scoring</div>
                            </div>
                            <div class="div-line-planos w-clearfix"><img src="assets/images/checked.svg" width="15" class="check-green verde">
                                <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                            </div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">ASSINAR AGORA</a>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-3">
                    <div class="div-content-planos">
                        <div class="parte-cima">
                            <div class="txtblock-20"><span class="rs">CORPORATE</span></div>
                            <div class="spacer _30"></div>
                            <div class="txtblock-gray center">Sua empresa possui necessidades especiais? Conheça nossos planos Corporate.</div>
                        </div>
                        <a href="#" class="link-nav cta _100percent w-button">SAIBA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="div-width-60">
                <div class="w-form">
                    <form id="email-form" name="email-form" data-name="Email Form">
                        <h2 class="h2 left" data-ix="show-on-scroll">Cupom de desconto</h2>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6">
                                <input type="text" class="field w-input" maxlength="256" name="codigo_cupom" data-name="Código do cupom" placeholder="Código do cupom*" id="codigo_cupom">
                                <span class="cupom-error-message" style="display: none;">Cupom de desconto inválido</span>
                            </div>
                            <div class="column-zero-pad w-clearfix w-col w-col-6">
                                <a href="#" class="links-contatos nopad" id="validar-cupom" data-ix="show-on-scroll">VALIDAR CUPOM</a>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <h2 class="h2 left" data-ix="show-on-scroll">Implementação orientada do software*</h2>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6">
                                <select id="implementacao" name="implementacao" data-name="implementacao" required="" class="select w-select">
                                    <option value="">Escolha um tipo de implementação</option>
                                    <option value="Implementação Gratuita em 7 dias - R$ 0,00">Implementação Gratuita em 7 dias - R$ 0,00</option>
                                    <option value="Implementação Rápida em 30 dias - 2x R$ 350,00">Implementação Rápida em 30 dias - 2x R$ 350,00</option>
                                    <option value="Implementação Padrão em 90 dias - 3x R$ 600,00">Implementação Padrão em 90 dias - 3x R$ 600,00</option>
                                </select>
                                <div class="txt-14-white-small" data-ix="show-on-scroll">Deseja conhecer melhor nossos planos de implementação? <a href="#" class="link-white">Quero saber mais.</a><br></div>
                            </div>
                            <div class="column-align-left w-col w-col-6">
                                <div class="txt-14-white-small" data-ix="show-on-scroll">A escolha de um dos planos de implementação é obrigatória e essencial para guiar você no alcance de seus resultados. Os planos foram criados para que você escolha aquele que atende melhor a sua necessidade.<br></div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <h2 class="h2 left" data-ix="show-on-scroll">Contrato</h2>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6">
                                <input type="email" class="field w-input" maxlength="256" name="email_contrato" data-name="E Mail 2" placeholder="E-mail*" id="email_contrato" required="">
                            </div>
                            <div class="column-align-left w-col w-col-6">
                                <div class="txt-14-white-small" data-ix="show-on-scroll">Neste e-mail, você receberá os dados deste formulário e a cópia do contrato.<br></div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <h2 class="h2 left" data-ix="show-on-scroll">Meio de Pagamento</h2>
                        <div class="w-row">
                            <div class="column-zero-pad w-col w-col-6">
                                <select id="metodo_pagamento" name="metodo_pagamento" data-name="metodo_pagamento" required="" class="select w-select">
                                    <option value="credit_card">Cartão de Crédito</option>
                                    <option value="boleto">Boleto</option>
                                </select>
                            </div>
                            <div class="column-align-left w-col w-col-6">
                                <div class="txt-14-white-small" data-ix="show-on-scroll">
                                    <div class="cartao-info">Será cobrado o valor referente a 6 meses no cartão, dividido em 6x.<br></div>
                                    <div class="boleto-info" style="display:none;">Poderá ser pago em 1 ou 2 boletos, com o valor referente a 6 meses de contrato.<br></div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-field w-checkbox"><input type="checkbox" id="contrato" name="contrato" data-name="Checkbox" class="checkbox w-checkbox-input"><label for="checkbox" class="w-form-label">Declaro que li e aceito os <a href="<?php echo base_url; ?>contrato-de-prestacao-de-servicos" class="link-white" style="margin: 0 5px;">termos de uso</a> deste contrato.</label></div>
                        <div class="spacer"></div>
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <a href="#" class="buttons-outline zeropad w-button" id="voltar-etapa">VOLTAR</a>
                            </div>
                            <div class="w-col w-col-6">
                                <div class="spacer w-hidden-main w-hidden-medium w-hidden-small"></div>
                                <a href="#" class="button-yellow full w-button" id="btn-salvar-efetuar-pagamento">SALVAR E EFETUAR O PAGAMENTO</a>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-center w-container etapa-wrapper" data-etapa="3" style="display: none; padding-bottom: 50px;">
            <div class="loading-gif">
                <svg width="100"  height="100"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dual-ring" style="background: none;"><circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.stroke}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#f9da2f" stroke-dasharray="62.83185307179586 62.83185307179586" transform="rotate(5.74056 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
            </div>
        </div>
        <div class="container-center w-container etapa-wrapper mensagem-final" data-etapa="4" style="display: none">
            <div class="mensagem_sucesso" style="display: none;">
                <img src="assets/images/checked.png" width="60" height="60" class="checked">
                <fieldset class="w-col w-col-9 center">
                    <h2 class="sucesso h1">
                        <span>Pagamento realizado com sucesso!</span>
                    </h2>
                    <!-- <p class="escuro line case">Acesse seu email e siga as instruções enviadas para acessar o software.</p> -->
                    <p class="txt-14-white-small">Registramos o seu pagamento, agora você já pode acessar a nossa ferramenta e começar a gerar resultado para a sua empresa.</p>
                    <br />
                    <p class="txt-14-white-small">Você receberá um e-mail com as orientações e a senha de acesso!</p>
                    <button class="button-yellow w-button try-payment">Tente novamente</button>
                </fieldset>
            </div>

            <div class="mensagem_erro" style="display: none;">
                <img src="assets/images/close.svg" width="60" height="60" class="checked">
                <fieldset class="w-col w-col-9 center">
                    <h2 class="sucesso h1">
                        <span>Ocorreu um erro</span>
                    </h2>
                    <!-- <p class="escuro line case">Acesse seu email e siga as instruções enviadas para acessar o software.</p> -->
                    <p class="txt-14-white-small">Um erro foi detectado durante o processamento do seu pagamento</p>
                    <br />
                    <p class="txt-14-white-small">Tente novamente ou entre em contato para mais informações.</p>
                    <a href="https://app.lahar.com.br/" class="button-yellow w-button">Acessar Ferramenta <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="section-numeros zeropad">
        <div class="container-center w-container">
            <div class="titulos-padding" data-ix="show-on-scroll">
                <h1 class="h1 medium inverted">Depoimentos</h1>
                <h2 class="h2 small blue">O que nossos clientes dizem sobre nosso software de automação:</h2>
            </div>
            <div class="spacer _50"></div>
            <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-testimonials w-slider" data-ix="show-on-scroll">
                <div class="mask w-slider-mask">
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Estava em busca de um software de automação de marketing para conseguir concentrar todas as ações dos nossos clientes em um lugar só, foi quando eu conheci a LAHAR. Tive um excelente atendimento desde o começo, e o que mais me chamou a atenção foi o pós vendas com a preocupação em saber as minhas experiências e o que pode ser melhorado para eu ter um atendimento cada vez melhor. Recomendo!”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoRafael.png" srcset="assets/images/fotoRafael-p-500.png 500w, assets/images/fotoRafael.png 816w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Rafael Alves</div>
                        <div class="txt-14 testimonial">Publique-se</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“A LAHAR é uma ferramenta de automação 100% útil em uma estratégia de Inbound Marketing, com páginas de captura, automação de emails, gestão de contatos e muito mais. Com ótimo custo benefício, ajuda muito na hora de interligar os departamentos de marketing e vendas de uma empresa. Recomendo.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoKim.png" srcset="assets/images/fotoKim-p-500.png 500w, assets/images/fotoKim.png 762w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Kim Kopycki</div>
                        <div class="txt-14 testimonial">Lowe</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Hoje temos tudo automatizado em nosso site, todas as áreas de conversão são integrados na plataforma. Com a LAHAR, intensificamos a nossa atuação em marketing digital. A plataforma nos garante gestão e mensuração dos resultados e visão dos processos de marketing digital de ponta a ponta.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoMarina.png" srcset="assets/images/fotoMarina-p-500.png 500w, assets/images/fotoMarina.png 762w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Marina Oliveira</div>
                        <div class="txt-14 testimonial">Lecom</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Realizamos webinars em uma média de 3 vezes por semana, o que leva a um processo constante da utilização do e-mail marketing com o objetivo de divulgar esses eventos. Com o sistema de automação de marketing da LAHAR, conseguimos aumentar em muito o número de pessoas participando de webinars, o que levou a um maior engajamento de nossos leads.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoMocelim.png" class="foto-author">
                        <div class="title-testimonial">Antonio Mocelim</div>
                        <div class="txt-14 testimonial">M3Corp</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“Satisfação de ponta a ponta com aumento das nossas oportunidades.Tanto a plataforma de automação de marketing quanto a Equipe da LAHAR superou as nossas expectativas. O trabalho de consultoria orientado a resultados e personalizado para cada perfil de cliente torna cada trabalho único e muito produtivo, identificando oportunidades em conjunto e realmente fazendo a várias mãos. Com isso estamos trabalhando cada vez mais em sinergia com a LAHAR e consequentemente na construção do relacionamento com nossos clientes levando pra eles soluções que integram e complementam as suas necessidades.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoThiago.png" srcset="assets/images/fotoThiago-p-500.png 500w, assets/images/fotoThiago.png 654w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Thiago Andrade</div>
                        <div class="txt-14 testimonial">PÃO Criação</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">“É bom poder contar com o apoio constante da LAHAR como software de marketing durante toda a execução do plano estratégico, desde o planejamento, passando pela execução até a mensuração dos resultados.”</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoRoberta.png" srcset="assets/images/fotoRoberta-p-500.png 500w, assets/images/fotoRoberta-p-800.png 800w, assets/images/fotoRoberta.png 914w" sizes="100px" class="foto-author">
                        <div class="title-testimonial">Roberta Kawashima</div>
                        <div class="txt-14 testimonial">Unimagem</div>
                    </div>
                    <div class="slide-testimonial w-slide">
                        <div class="txt-20">&quot;Aqui na Vesti utilizávamos outra plataforma de automação de marketing que atendia as nossas necessidades junto a nossos clientes. Depois da contratação da LAHAR percebemos que poderíamos fazer muito mais, ou seja, ir além daquilo que estávamos praticando e oferecendo. A possibilidade de trabalhar em conjunto com a equipe da LAHAR nos proporciona a certeza de bons negócios.&quot;</div>
                        <div class="spacer _50"></div><img src="assets/images/fotoWagner.png" class="foto-author">
                        <div class="title-testimonial">Wagner de Souza</div>
                        <div class="txt-14 testimonial">Vesti</div>
                    </div>
                </div>
                <div class="left-arrow w-hidden-tiny w-slider-arrow-left">
                    <div class="icon-blue w-icon-slider-left"></div>
                </div>
                <div class="right-arrow w-hidden-tiny w-slider-arrow-right">
                    <div class="icon-blue w-icon-slider-right"></div>
                </div>
                <div class="slide-nav-2 w-slider-nav w-slider-nav-invert w-round"></div>
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
                            <a href="#"  onclick="changeLanguage('')" class="flag w-inline-block"><img src="assets/images/brasil.svg"></a><div class="divider-flags"></div>
                            <a href="#"  onclick="changeLanguage('en')" class="flag w-inline-block"><img src="assets/images/united-states.svg"></a>
                            <div class="divider-flags gray"></div>
                            <a href="#" onclick="changeLanguage('es')"  class="flag w-inline-block"><img src="assets/images/spain.svg"></a>
                        </div>
                        <div class="txtblocks-blue medium _14 middle">Copyright © 2018 - LAHAR. Todos os direitos reservados.</div>
                    </div>
                    <div class="w-hidden-tiny w-col w-col-3"></div>
                    <div class="column-social w-hidden-tiny w-col w-col-3"></div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="hash_empresa_criada" value="">
    <input type="hidden" id="id_plano_cupom" value="null">
    <input type="hidden" id="valor_plano_cupom" value="null">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/js/lahar-v2.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
    <script src="https://assets.pagar.me/checkout/checkout.js"></script>
    <script src="assets/js/jquery.maskedinput.js"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

    <script>
        var checkout;

        jQuery(document).ready(function($) {
            $("#CPF").mask("999.999.999-99");
            $("#CNPJ").mask("99.999.999/9999-99");
            $("#CEP").mask("99999-999");
            $('#telefone').mask("(99) 9999-9999?9").focusout(function(e) {
                var target, phone, element;
                target = ( e.currentTarget ) ? e.currentTarget : e.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                if ( phone.length > 10 ) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            });

            $('#CPF').blur(function() {
                var cpf = $('#CPF').val();

                cpf = cpf.replace('.', '');
                cpf = cpf.replace('.', '');
                cpf = cpf.replace('-', '');

                var retorno = isCpf(cpf);

                if ( retorno ) {
                    $('#CPF').removeClass('error');
                    $('#aviso_cpf_invalido').hide();
                    $('.proxima-etapa').removeClass('disabled');
                } else {
                    $('#CPF').addClass('error');
                    $('#aviso_cpf_invalido').show();
                    $('.proxima-etapa').addClass('disabled').attr('disable', 'disabled');
                }
            });

            $('#CNPJ').blur(function() {
                var cnpj = $('#CNPJ').val();

                cnpj = cnpj.replace('.', '');
                cnpj = cnpj.replace('.', '');
                cnpj = cnpj.replace('/', '');
                cnpj = cnpj.replace('-', '');

                var retorno = isCnpj(cnpj);

                if ( retorno ) {
                    $('#CNPJ').removeClass('error');
                    $('#aviso_cnpj_invalido').hide();
                    $('.proxima-etapa').removeClass('disabled');
                } else {
                    $('#CNPJ').addClass('error');
                    $('#aviso_cnpj_invalido').show();
                    $('.proxima-etapa').addClass('disabled').attr('disable', 'disabled');
                }
            });

            // Registra o evento blur do campo "cep", ou seja, quando o usuário sair do campo "cep" faremos a consulta dos dados
        	$("#CEP").blur(function() {
                // Para fazer a consulta, removemos tudo o que não é número do valor informado pelo usuário
                var cep = this.value.replace(/[^0-9]/, '');

                // Validação do CEP; caso o CEP não possua 8 números, então cancela a consulta
                if ( cep.length != 8 ) {
                    return false;
                }

                var url = "https://api.pagar.me/1/zipcodes/" + cep;

                // Aqui fazemos uma requisição ajax ao webservice, tratando o retorno com try/catch para que caso ocorra algum
                // erro (o cep pode não existir, por exemplo) o usuário não seja afetado, assim ele pode continuar preenchendo os campos
                $.ajax({
                    dataType: "json",
                    url: url,
                    beforeSend: function() {
                        $("#endereco").addClass('disabled').attr('disabled', 'disabled');
                        $("#bairro").addClass('disabled').attr('disabled', 'disabled');
                        $("#cidade").addClass('disabled').attr('disabled', 'disabled');
                        $("#estado").addClass('disabled').attr('disabled', 'disabled');
                    },
                    success: function(dadosRetorno) {
                        $("#aviso_cep_invalido").hide();
                        $("#endereco").val(dadosRetorno.street).removeClass('error');
                        $("#bairro").val(dadosRetorno.neighborhood).removeClass('error');
                        $("#cidade").val(dadosRetorno.city).removeClass('error');
                        $("#estado").val(dadosRetorno.state).removeClass('error');
                        $('#numero').focus();
                    },
                    error: function() {
                        $("#aviso_cep_invalido").show();
                        $("#CEP").val('');
                    },
                    complete: function() {
                        $("#endereco").removeClass('disabled').removeAttr('disabled');
                        $("#bairro").removeClass('disabled').removeAttr('disabled');
                        $("#cidade").removeClass('disabled').removeAttr('disabled');
                        $("#estado").removeClass('disabled').removeAttr('disabled');
                    }
                });
        	});

            $('#metodo_pagamento').change(function() {
                if ( $(this).val() === 'boleto' ) {
                    $('.cartao-info').hide();
                    $('.boleto-info').show();
                } else if ( $(this).val() === 'credit_card' ) {
                    $('.cartao-info').show();
                    $('.boleto-info').hide();
                }
            });

            /* ADICIONA AÇÕES DO FORMULÁRIO (BOTÕES E SEÇÕES) */
            $('.links-contatos:not(#validar-cupom)').click(function(e) {
                $('.links-contatos').removeClass('active');
                $(this).addClass('active');

                numberOfContacts = $(this).attr('data-value');
                changePrice();
            });

            $('.div-period .radio-button-field').click(function() {
                $('.radio-button-field').removeClass('active').children('input').removeAttr('checked');
                $(this).addClass('active').children('input').attr('checked', 'checked');

                paymentPeriod = ( $('#radio-mensal').is(':checked') ) ? 'month' : 'year';

                changePrice();
            });

            $('.div-content-planos .link-nav').click(function() {
                $('.div-content-planos').removeClass('destaque');
                $(this).closest('.div-content-planos').addClass('destaque');
            });

            $('.tipo-cadastro').click(function() {
                $('.tipo-cadastro').removeClass('active');
                $(this).addClass('active');

                if ( $(this).attr('data-tipo') == 'pf' ) {

                    $('#dados-pessoais-wrapper').show();
                    $('#dados-empresariais-wrapper').hide();

                    $('#razao_social').removeAttr('required');
                    $('#CNPJ').removeAttr('required');
                    $('#nome').attr('required', '');
                    $('#CPF').attr('required', '');

                } else if ( $(this).attr('data-tipo') == 'pj' ) {

                    $('#dados-empresariais-wrapper').show();
                    $('#dados-pessoais-wrapper').hide();

                    $('#nome').removeAttr('required');
                    $('#CPF').removeAttr('required');
                    $('#razao_social').attr('required', '');
                    $('#CNPJ').attr('required', '');

                }

                $(window).trigger('scroll');
            });


            /* TRATA DADOS VINDOS DA PÁGINA DE PLANOS */
            var plano = '<?php echo ( isset($_GET['plano']) ) ? trim($_GET['plano']) : ''; ?>',
                contatos = '<?php echo ( isset($_GET['contatos']) ) ? trim($_GET['contatos']) : ''; ?>',
                periodo = '<?php echo ( isset($_GET['periodo']) ) ? trim($_GET['periodo']) : ''; ?>';

            if ( plano !== '' ) {
                $('.div-content-planos[data-plano="'+ plano +'"] .link-nav').click();
            }

            if ( contatos !== '' ) {
                $('.links-contatos[data-value="'+ contatos +'"]').click();
            }

            if ( periodo !== '' ) {
                if ( periodo == 'anual' ) {
                    $('#radio-anual').closest('.radio-button-field').click();
                } else {
                    $('#radio-mensal').closest('.radio-button-field').click();
                }
            }

            /* VALIDA O CUPOM DE DESCONTO */
            $('#validar-cupom').click(function(event) {

                var cupom = $("#codigo_cupom").val();
                var idPlano = $('.div-content-planos.destaque').attr('data-plano-id');
                var idPlanoConfig = $('.div-content-planos.destaque').attr('data-plano-config-id');

                $(".cupom-error-message").hide();

                // Verifica se algum dos planso foi escolhido
                if ( idPlano ) {
                    if ( cupom ) {
                        $.post('https://app.lahar.com.br/verificar-cupom', {planos_id: idPlano, planos_config: idPlanoConfig, cupom: cupom}, function(retorno) {
                        // $.post('http://localhost/codebase-v2.1/verificar-cupom', {planos_id: idPlano, planos_config: idPlanoConfig, cupom: cupom}, function(retorno) {
                            if ( retorno == 'erro' ) {
                                $("#aviso_cupom_sucesso").hide();
                                $("#aviso_cupom_erro").show();
                                $("#id_plano_cupom").val( null );
                                $("#valor_plano_cupom").val( null );
                                $('.cupom-error-message').text('Cupom inválido').show()
                            } else {
                                $("#aviso_cupom_erro").hide();
                                $("#aviso_cupom_sucesso").show();
                                $("#id_plano_cupom").val( retorno.split("|", 1) );
                                $("#valor_plano_cupom").val( retorno.split("|").pop() + "00" );
                            }
                        });
                    } else {
                        $('.cupom-error-message').text('Cupom em branco. Por favor, preencher').show()
                    }
                } else {
                    $('.cupom-error-message').text('Escolha um plano para continuar essa operação').show()
                }
            });

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

            $('.proxima-etapa').click(function() {
                var cpf = $('#CPF').val(),
                    cnpj = $('#CNPJ').val(),
                    nome = $('#nome').val(),
                    razao = $('#razao_social').val(),
                    cep = $('#CEP').val(),
                    endereco = $('#endereco').val(),
                    numero = $('#numero').val(),
                    bairro = $('#bairro').val(),
                    cidade = $('#cidade').val(),
                    estado = $('#estado').val(),
                    telefone = $('#telefone').val(),
                    email_financeiro = $('#email_financeiro').val(),
                    email = $('#email').val(),
                    nome_empresa = $('#nome_empresa').val(),
                    website = $('#website').val(),
                    objetivo = $('#objetivo').val();

                cpf = cpf.replace('.', '');
                cpf = cpf.replace('.', '');
                cpf = cpf.replace('-', '');
                cnpj = cnpj.replace('.', '');
                cnpj = cnpj.replace('.', '');
                cnpj = cnpj.replace('/', '');
                cnpj = cnpj.replace('-', '');

                $('.required.error').removeClass('error');
                $('#required_fields_message').hide();

                if ( (cpf || cnpj) && (nome || razao) && cep && endereco && numero && bairro && cidade && estado && telefone && email_financeiro && email && nome_empresa && website && objetivo ) {

                    $('.required.error').removeClass('error');

                } else {

                    $('#assinatura-dados .required:visible').each(function() {
                        if ( $(this).val() == '' ) {
                            $(this).addClass('error');
                        }
                    });

                    $('.required:visible').on('blur paste', function() {
                        $(this).removeClass('error');
                    });

                    $('#required_fields_message').show();

                }

                if ( (cpf != '' && !isCpf(cpf)) || cpf == '' ) {
                    $('#CPF').addClass('error');
                } else {
                    $('#CPF').removeClass('error');
                }

                if ( (cnpj != '' && !isCpf(cnpj)) || cpf == '' ) {
                    $('#CNPJ').addClass('error');
                } else {
                    $('#CNPJ').removeClass('error');
                }

                if ( $('.required.error').length == 0 ) {
                    $(this).closest('.etapa-wrapper').fadeOut('400', function() {
                        $(this).next().fadeIn('400');
                        $(window).trigger('scroll');

                        var etapaNumero = $(this).next().attr('data-etapa');
                        $('.step').removeClass('active');
                        $('.steps .div-circle.y').toggleClass('y w')
                        $('.passo-'+etapaNumero).addClass('active').closest('.steps').find('.div-circle').toggleClass('w y');

                        $('.steps').goTo();
                    });
                }
            });

            $('#voltar-etapa').click(function() {
                $(this).closest('.etapa-wrapper').fadeOut('400', function() {
                    $(this).prev().fadeIn('400');

                    var etapaNumero = $(this).prev().attr('data-etapa');
                    $('.step').removeClass('active');
                    $('.steps .div-circle.y').toggleClass('y w')
                    $('.passo-'+etapaNumero).addClass('active').closest('.steps').find('.div-circle').toggleClass('w y');

                    $('.steps').goTo();
                })
            });

            $('.try-payment').click(function() {
                $(this).closest('.etapa-wrapper').fadeOut('400', function() {
                    $(this).prev().fadeIn('400');

                    var etapaNumero = $(this).prev().attr('data-etapa');
                    $('.step').removeClass('active');
                    $('.steps .div-circle.y').toggleClass('y w')
                    $('.passo-'+etapaNumero).addClass('active').closest('.steps').find('.div-circle').toggleClass('w y');

                    $('.steps').goTo();
                });

                var params = {
                    "customerData":"true",
                    "amount": valor_plano_assinatura * 6,
                    "createToken":"false",
                    "paymentMethods": $('#metodo_pagamento').val(),
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

                if ( $('#metodo_pagamento').val() == 'credit_card' ) {
                    params['defaultInstallment'] = 6;
                }

                checkout.open(params);
            });

            /* SALVAR E IR PARA O PAGAMENTO */
            $('#btn-salvar-efetuar-pagamento').click(function(event) {

                $('.error:visible').each(function() {
                    $(this).removeClass('error');
                });

                var cpf                     = $("#CPF").val(),
                    nome                    = $("#nome").val(),
                    cnpj                    = $("#CNPJ").val(),
                    razao                   = $("#razao_social").val(),
                    endereco                = $("#endereco").val(),
                    numero                  = $("#numero").val(),
                    bairro                  = $("#bairro").val(),
                    cep                     = $("#CEP").val(),
                    cidade                  = $("#cidade").val(),
                    uf                      = $("#estado").val(),
                    tel                     = $("#telefone").val(),
                    contato_financeiro      = $("#email_financeiro").val(),
                    email                   = $("#email").val(),
                    empresa                 = $("#nome_empresa").val(),
                    site                    = $("#website").val(),
                    objetivo                = $("#objetivo").val(),
                    codigo_cupom            = $("#codigo_cupom").val(),
                    implementacao           = $("#implementacao").val(),
                    email_contrato          = $("#email_contrato").val(),
                    tipoplano               = ( $('#radio-mensal').is(':checked') ) ? 'planoMensal' : 'planoAnual',
                    plano                   = document.getElementsByName('planoAssinatura'),
                    valor_plano_assinatura  = $('.div-content-planos.destaque ._58').text() + '00',
                    contrato                = ( $('#contrato').is(':checked') ) ? true : false,
                    tipoplano_assinatura,
                    plano_assinatura,
                    hash,
                    checkoutBloqueado       = false;

                // Remove máscara do cpf/cnpj para não gerar erro quando for mandar os dados para o Pagar.me
                cpf = (cpf.replace('.', '')).replace('-', '');
                cnpj = ((cnpj.replace('/', '')).replace('-', '')).replace('.', '');

                // Separa o DDD e o Telefone para enviar ao Pagar.me
                tel = tel.replace("(", "");
                tel = tel.replace(")", "");
                tel = tel.replace("-", "");
                var ddd = tel.substr(0, 2);
                var telfinal = tel.substr(2, 11);

                if ( codigo_cupom ) {

                    if ( $("#id_plano_cupom").val() !== '' ) {
                        plano_assinatura 	   = $("#id_plano_cupom").val();
                        valor_plano_assinatura = $("#valor_plano_cupom").val();
                    }

                }

                if ( !validateEmail(email_contrato) ) {

                    $("#aviso_email_contrato_invalido").show();
                    return false;

                } else {
                    $("#aviso_email_contrato_invalido").hide();
                }

                if ( implementacao === '' ) {
                    $("#implementacao").addClass('error');
                } else {
                    $("#implementacao").removeClass('error');
                }

                if ( email_contrato === '' ) {
                    $("#email_contrato").addClass('error');
                } else {
                    $("#email_contrato").removeClass('error');
                }

                // Testa se estão vindo dados gerais da primeira etapa
                if ( endereco && numero && bairro && cep && cidade && uf && tel && contato_financeiro && email && empresa && site && objetivo ) {

                    // Se for pessoa física verifica se estão vindo os campos
                    if ( cpf && nome && implementacao && email_contrato && contrato ) {

                        $.ajax({
                            url: 'https://app.lahar.com.br/cadastro',
                            // url: 'http://localhost/codebase-v2.1/cadastro',
                            method: 'POST',
                            data: {
                                cpf: cpf,
                                nome: nome,
                                endereco: endereco,
                                numero: numero,
                                bairro: bairro,
                                cep: cep,
                                cidade: cidade,
                                uf: uf,
                                telefone: tel,
                                contato_financeiro: contato_financeiro,
                                email: email,
                                nome_empresa: empresa,
                                site_empresa: site,
                                objetivo: objetivo,
                                implementacao: implementacao,
                                email_contrato: email_contrato,
                                codigo_cupom: codigo_cupom
                            },
                            beforeSend: function() {
                                $('.etapa-wrapper[data-etapa=2]').fadeOut('400', function() {
                                    $(this).next().fadeIn('400');
                                    $(window).trigger('scroll');

                                    var etapaNumero = $(this).next().attr('data-etapa');
                                    $('.step').removeClass('active');
                                    $('.steps .div-circle.y').toggleClass('y w')
                                    $('.passo-'+etapaNumero).addClass('active').closest('.steps').find('.div-circle').toggleClass('w y');

                                    $('.steps').goTo();
                                });
                            },
                            success: function( retorno ) {
                                if ( retorno == 'erro_criar_empresa' ) {

                                    // window.location.href = 'assinar-erro-salvar';

                                } else {

                                    $("#hash_empresa_criada").val(retorno);
                                    hash = retorno;
                                }
                            },
                            complete: function() {
                                $('.btn-salvar-efetuar-pagamento').removeClass('disabled').html('Salvar e efetuar o pagamento <i class="fa fa-arrow-right" aria-hidden="true"></i>');
                            }
                        });

                    } else if ( cnpj && razao && implementacao && email_contrato && contrato ) { // Se for pessoa jurídica verifica se estão vindo os campos

                        $.ajax({
                            url: 'https://app.lahar.com.br/cadastro',
                            // url: 'http://localhost/codebase-v2.1/cadastro',
                            method: 'POST',
                            data: {
                                cnpj: cnpj,
                                nome: razao,
                                razao: razao,
                                endereco: endereco,
                                numero: numero,
                                bairro: bairro,
                                cep: cep,
                                cidade: cidade,
                                uf: uf,
                                telefone: tel,
                                contato_financeiro: contato_financeiro,
                                email: email,
                                nome_empresa: empresa,
                                site_empresa: site,
                                objetivo: objetivo,
                                implementacao: implementacao,
                                email_contrato: email_contrato,
                                codigo_cupom: codigo_cupom
                            },
                            beforeSend: function() {
                                $('.etapa-wrapper[data-etapa=2]').fadeOut('400', function() {
                                    $(this).next().fadeIn('400');
                                    $(window).trigger('scroll');

                                    var etapaNumero = $(this).next().attr('data-etapa');
                                    $('.step').removeClass('active');
                                    $('.steps .div-circle.y').toggleClass('y w')
                                    $('.passo-'+etapaNumero).addClass('active').closest('.steps').find('.div-circle').toggleClass('w y');

                                    $('.steps').goTo();
                                });
                            },
                            success: function( retorno ) {
                                if ( retorno == 'erro_criar_empresa' ) {

                                    // window.location.href = 'assinar-erro-salvar';

                                } else {

                                    $("#hash_empresa_criada").val(retorno);
                                    hash = retorno;
                                }
                            },
                            complete: function() {
                                $('.btn-salvar-efetuar-pagamento').removeClass('disabled').html('Salvar e efetuar o pagamento <i class="fa fa-arrow-right" aria-hidden="true"></i>');
                            }
                        });
                    }

                    // INICIAR A INSTÂNCIA DO CHECKOUT
                    // declarando um callback de sucesso
                    // @author: Hugo Cicarelli
                    // ek_live_WLCpXxf6y2BRUvknWtJmxgLJS96WIA
                    // ek_test_K21dHsPdfb32E2zIV9nWN0o5qU8YZT
                    checkout = new PagarMeCheckout.Checkout({
                        "encryption_key":"ek_test_K21dHsPdfb32E2zIV9nWN0o5qU8YZT",
                        success: function(data) {

                            if ( !checkoutBloqueado ) {
                                checkoutBloqueado = true;

                                //Tratar aqui as ações de callback do checkout, como exibição de mensagem ou envio de token para captura da transação
                                $.ajax({
                                    url: 'https://app.lahar.com.br/assinatura',
                                    // url: 'http://localhost/codebase-v2.1/assinatura',
                                    method: 'POST',
                                    data: {
                                        hash: $('#hash_empresa_criada').val(),
                                        pagarme: data,
                                        id_plano: $('.div-content-planos.destaque').attr('data-plano-id'),
                                        id_plano_config: $('.div-content-planos.destaque').attr('data-plano-config-id'),
                                        email_contrato: email_contrato,
                                        cupom_codigo: codigo_cupom,
                                        parcelas_boleto: ( typeof $('#parcelas-boleto').val() !== 'undefined' && $('#parcelas-boleto').val() != 0 ) ? $('#parcelas-boleto').val() : 1
                                    },
                                    success: function(retorno) {
                                        if ( retorno == 'sucesso' ) {
                                            $('.etapa-wrapper[data-etapa=3]').fadeOut('400', function() {
                                                $(this).next().fadeIn('400');
                                                $(window).trigger('scroll');

                                                var etapaNumero = $(this).next().attr('data-etapa');
                                                $('.step').removeClass('active');
                                                $('.steps .div-circle.y').toggleClass('y w')
                                                $('.passo-'+etapaNumero).addClass('active').closest('.steps').find('.div-circle').toggleClass('w y');
                                                $('.etapa-wrapper[data-etapa=4] .mensagem_sucesso').show();

                                                $('.steps').goTo();
                                            });
                                        } else {
                                            $('.etapa-wrapper[data-etapa=3]').fadeOut('400', function() {
                                                $(this).next().fadeIn('400');
                                                $(window).trigger('scroll');

                                                var etapaNumero = $(this).next().attr('data-etapa');
                                                $('.step').removeClass('active');
                                                $('.steps .div-circle.y').toggleClass('y w')
                                                $('.passo-'+etapaNumero).addClass('active').closest('.steps').find('.div-circle').toggleClass('w y');
                                                $('.etapa-wrapper[data-etapa=4] .mensagem_erro').show();

                                                $('.steps').goTo();
                                            });
                                        }
                                        checkoutBloqueado = false;
                                    },
                                    error: function() {
                                        // $('.etapa3').addClass('etapa-erro');
                                        // $('#mensagem_sucesso').hide();
                                        // $('#mensagem_erro, #pay-button').show();
                                    }
                                });
                            }
                        },
                        error: function(error) {
                            $('.etapa-wrapper[data-etapa=3] .loading-gif').hide();
                            $('.etapa-wrapper[data-etapa=3]').show();
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
                        "amount": valor_plano_assinatura * 6,
                        "createToken":"false",
                        "paymentMethods": $('#metodo_pagamento').val(),
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

                    if ( $('#metodo_pagamento').val() == 'credit_card' ) {
                        params['defaultInstallment'] = 6;
                    }

                    checkout.open(params);

                    return false;
                }

            });
        });
    </script>

</body>
</html>
