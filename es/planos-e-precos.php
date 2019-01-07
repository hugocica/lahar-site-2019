<!DOCTYPE html>
<!--  Last Published: Fri Sep 28 2018 13:19:55 GMT+0000 (UTC)  -->
<html data-wf-page="5b61fa57f40d766db0e53b3a" data-wf-site="5b61fa57f40d761dfde53b39">
<head>
    <title>Planos e Preços - LAHAR</title>
    <meta content="Não importa o seu segmento, nós temos um plano certo para seu negócio. Nossos preços só aumentam com os seus resultados!" name="description">
    <meta content="Planos e Preços - LAHAR" property="og:title">
    <meta content="Não importa o seu segmento, nós temos um plano certo para seu negócio. Nossos preços só aumentam com os seus resultados!" property="og:description">

    <?php include_once './includes/header.php'; ?>

</head>

<body>

    <?php include_once './includes/menu-flutuante.php'; ?>

    <?php include_once './includes/top-banner.php'; ?>

    <div class="section-hero planos-e-precos" data-ix="show-menu">

          <?php include_once './includes/menu.php'; ?>

          <div class="w-container">
              <div class="w-row">
                  <div class="w-col w-col-6">
                      <div class="spacer _50"></div>
                      <h1 class="h1" data-ix="show-on-scroll">Escolha o plano ideal e veja como a LAHAR pode gerar valor para o seu negócio</h1>
                      <div class="spacer _30"></div>
                      <a href="#formulario" class="button-yellow left w-button" data-ix="show-on-scroll">experimente grátis</a>
                  </div>
                  <div class="w-hidden-tiny w-col w-col-6"></div>
              </div>
          </div>
    </div>
    <div id="formulario" class="div-padding-bottom">
          <div class="container-center w-container" data-ix="show-on-scroll">
              <div class="txtblock-medium uppercase" data-ix="show-on-scroll">NÚMERO DE CONTATOS</div>
              <a href="#" id="contact5button" data-value="5" onclick="changeNumberOfContacts(event)" class="links-contatos active" data-ix="show-on-scroll">5 MIL</a>
              <a href="#" id="contact10button" data-value="10" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">10 MIL</a>
              <a href="#" id="contact25button" data-value="25" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">25 MIL</a>
              <a href="#" id="contact50button" data-value="50" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">50 MIL</a>
              <a href="#" id="contact75button" data-value="75" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">75 MIL</a>
              <a href="#" id="contact100button" data-value="100" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">100 MIL</a>
              <a href="#" id="contact125button" data-value="125" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">125 MIL</a>
              <a href="#" id="contact150button" data-value="150" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">150 MIL</a>
              <a href="#" id="contact200button" data-value="200" onclick="changeNumberOfContacts(event)" class="links-contatos" data-ix="show-on-scroll">200 MIL</a>
              <div class="div-period">
                  <div class="w-form" data-ix="show-on-scroll">
                      <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-switch">
                          <div id="paymentPeriodmonthButton" class="radio-button-field active w-radio">
                              <input onchange="changePaymentPeriod(event)" data-value="month" checked="checked" type="radio" id="radio" name="radio" value="Radio" data-name="Radio" class="radio-button w-radio-input">
                              <label for="radio" class="w-form-label">mensal</label>
                          </div>
                          <div id="paymentPeriodyearButton" class="radio-button-field w-radio">
                              <input onchange="changePaymentPeriod(event)" data-value="year" type="radio" id="radio-2" name="radio" value="Radio" data-name="Radio 2" class="radio-button w-radio-input"><label for="radio-2" class="w-form-label">anual</label>
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
              <div class="spacer _50 w-hidden-tiny"></div>
              <div class="w-row" data-ix="show-on-scroll">
                  <div class="column-center w-col w-col-3">
                      <div class="div-content-planos" data-plano="basic">
                          <div class="parte-cima">
                              <h2 class="h2 small blue bold">BASIC</h2>
                              <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-basic" class="_58">229</span><span class="mes">/mês</span></div>
                              <div style="display:none;" class="txtblock-gray monthEquivalent center"><span class="bolder">Cobrado anualmente<br></span>equivalente a R$<span id="equivalentPrice-month-basic">3.490,00</span>/ano</div>
                              <div class="spacer _30"></div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">5 usuários</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">1 subconta</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                              </div>
                          </div>
                          <button class="assinar-btn link-nav cta _100percent w-button">ASSINAR AGORA</button>
                      </div>
                  </div>
                  <div class="column-zero-pad w-col w-col-3">
                      <div class="div-content-planos destaque" data-plano="professional">
                          <div class="parte-cima">
                              <div class="featured">MAIS CONTRATADO</div>
                              <h2 class="h2 small blue bold">Professional</h2>
                              <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-professional" class="_58">349</span><span class="mes">/mês</span></div>
                              <div style="display:none;" class="txtblock-gray monthEquivalent center"><span class="bolder">Cobrado mensalmente<br></span>equivalente a R$<span id="equivalentPrice-month-professional">3.490,00</span>/ano</div>
                              <div class="spacer _30"></div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">20 usuários</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">10 subcontas</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Automação de Marketing</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">SMS Marketing</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Lead Tracking</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Lead Scoring</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Suporte via Email / Chat / Ticket</div>
                              </div>
                          </div>
                          <button class="assinar-btn link-nav cta _100percent w-button">ASSINAR AGORA</button>
                      </div>
                  </div>
                  <div class="column-zero-pad w-col w-col-3">
                      <div class="div-content-planos" data-plano="enterprise">
                          <div class="parte-cima">
                              <h2 class="h2 small blue bold">Enterprise</h2>
                              <div class="txtblock-20"><span class="rs">R$</span><span id="planPrice-enterprise" class="_58">549</span><span class="mes">/mês</span></div>
                              <div style="display:none;" class="txtblock-gray monthEquivalent center"><span class="bolder">Cobrado mensalmente<br></span>equivalente a R$<span id="equivalentPrice-month-enterprise">3.490,00</span>/ano</div>
                              <div class="spacer _30"></div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">50 usuários</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">subcontas ilimitadas</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Automação de Marketing</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">SMS Marketing</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Lead Tracking</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Lead Scoring</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Integrações de Saída</div>
                              </div>
                              <div class="div-line-planos w-clearfix"><img src="<?php echo base_url_assets ?>images/checked.svg" width="15" class="check-green verde">
                                  <div class="txtblock-gray">Suporte via Email / Chat / Ticket / Telefone</div>
                              </div>
                          </div>
                          <button class="assinar-btn link-nav cta _100percent w-button">ASSINAR AGORA</button>
                      </div>
                  </div>
                  <div class="column-zero-pad w-col w-col-3">
                      <div class="div-content-planos">
                          <div class="parte-cima">
                              <h2 class="h2 small blue bold lowpad">corporativo</h2>
                              <div class="consulte-nos">consulte-nos</div>
                              <div class="spacer _30"></div>
                              <div class="txtblock-gray center">Sua empresa possui necessidades especiais? Conheça nossos planos Corporativos.</div>
                          </div>
                          <a href="<?php echo base_url; ?>corporativo" class="link-nav cta _100percent w-button">SAIBA MAIS</a>
                      </div>
                  </div>
              </div>
          </div>
    </div>
    <div class="section-branca">
          <div class="container-center w-container">
              <div class="titulos-padding _70" data-ix="show-on-scroll">
                  <h1 class="h1 medium inverted">Comparativo dos planos LAHAR</h1>
              </div>
              <div class="spacer _100"></div>
          </div>
          <div class="line-comparativo last">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo bots w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3"></div>
                      <div class="column-zero-pad w-col w-col-3 w-col-tiny-3">
                          <div class="title-plano">BASIC</div>
                      </div>
                      <div class="column-zero-pad w-col w-col-3 w-col-tiny-3">
                          <div class="title-plano">PROFESSIONAL</div>
                      </div>
                      <div class="column-zero-pad w-col w-col-3 w-col-tiny-3">
                          <div class="title-plano">ENTERPRISE</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Número de sub-contas</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">1</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">10</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">Ilimitado</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Número de usuários com acesso à plataforma</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">5</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">20</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">50</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Termos no Painel de palavras-chave</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">100</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">100</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">100</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Termos monitorados nas mídias sociais</div>
                          <div data-tooltip="No Twitter" class="fa"><strong></strong></div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">25</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">25</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">35</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Disparos de Email Marketing</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">2x volume de contatos</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">3x volume de contatos</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">5x volume de contatos</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Disparos de SMS Marketing</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">200</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3">
                          <div class="_23">1.000</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3">
                          <div class="txt-14 smaller">Push Message</div>
                      </div>
                      <div class="w-col w-col-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3">
                          <div class="txt-14 smaller">Landing Pages</div>
                          <div data-tooltip="Páginas de conversão" class="fa"><strong></strong></div>
                      </div>
                      <div class="w-col w-col-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Base de Contatos (CRM)</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Base de Empresas</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Segmentação de Contatos (Listas)</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Mídias Sociais (Publicação e Monitoramento)</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Painel de Palavras-Chave</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Relatórios</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">API para integrações externas</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Automação de Marketing</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Lead Tracking</div>
                          <div data-tooltip="Acompanhe os passos do seu Lead antes mesmo dele ser identificado" class="fa"><strong></strong></div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Lead Scoring</div>
                          <div data-tooltip="Qualificação automática dos Leads por perfil e interesse" class="fa"><strong></strong></div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Integrações de Saída (Envio de informações para outros sistemas)</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Integração com CRM terceiros</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Acompanhamento Gerente de Sucesso</div>
                      </div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                      <div class="w-col w-col-3 w-col-tiny-3"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check"></div>
                  </div>
              </div>
          </div>
          <div class="line-comparativo last">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo last w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller">Suporte</div>
                      </div>
                      <div class="column-zero-pad w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller center">Email / Chat / Ticket</div>
                      </div>
                      <div class="column-zero-pad w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller center">Email / Chat / Ticket</div>
                      </div>
                      <div class="column-zero-pad w-col w-col-3 w-col-tiny-3">
                          <div class="txt-14 smaller center">Email / Chat / Ticket<br>Skype ou Telefone</div>
                      </div>
                  </div>
                  <a href="<?php echo base_url; ?>assinar" class="link-nav cta _100percent _350 w-hidden-main w-hidden-medium w-hidden-small w-button">ASSINAR AGORA</a>
              </div>
          </div>
          <div class="line-comparativo last buttons">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo bots topmargin w-row" data-ix="show-on-scroll">
                      <div class="column-caracteristica w-col w-col-3"></div>
                      <div class="w-col w-col-3"><a href="<?php echo base_url; ?>criar-conta" class="button-yellow full w-button">ASSINAR AGORA</a>
                          <div class="spacer"></div>
                          <div class="txt-14 smaller center">*Cartão de crédito e boleto bancário</div>
                      </div>
                      <div class="w-col w-col-3"><a href="<?php echo base_url; ?>criar-conta" class="button-yellow full w-button">ASSINAR AGORA</a>
                          <div class="spacer"></div>
                          <div class="txt-14 smaller center">*Cartão de crédito e boleto bancário</div>
                      </div>
                      <div class="w-col w-col-3"><a href="<?php echo base_url; ?>criar-conta" class="button-yellow full w-button">ASSINAR AGORA</a>
                          <div class="spacer"></div>
                          <div class="txt-14 center">*Cartão de crédito e boleto bancário</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="spacer _30"></div>
          <div class="line-comparativo last buttons">
              <div class="container-comparativo w-container">
                  <div class="row-comparativo w-row" data-ix="show-on-scroll">
                      <div class="w-col w-col-4"></div>
                      <div class="coluna-icone-esquerda w-col w-col-2"><img src="<?php echo base_url_assets ?>images/tick.svg" class="ico-check bottom">
                          <div class="txt-14 smaller center">Incluso no plano</div>
                      </div>
                      <div class="coluna-icone-esquerda w-col w-col-2"><img src="<?php echo base_url_assets ?>images/close.svg" width="25" class="ico-close bottom">
                          <div class="txt-14 smaller center">Não incluso no plano</div>
                      </div>
                      <div class="w-col w-col-4"></div>
                  </div>
                  <div class="row-duvidas w-row" data-ix="show-on-scroll">
                      <div class="w-col w-col-6">
                          <h2 class="h2 small blue">Ainda tem dúvidas sobre como o software da LAHAR pode ajudar a sua empresa?</h2>
                      </div>
                      <div class="w-col w-col-6"><img src="<?php echo base_url_assets ?>images/phone-call.svg" width="50" class="phone">
                          <div class="_23 smaller">Ligue para nós:<br>(11) 3230-1825 ou (14) 3010-3330</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container-center w-container">
              <div class="spacer _100"></div>
              <h1 class="h1 medium inverted" data-ix="show-on-scroll">Algumas das empresas que utilizam a <span class="blue">LAHAR</span></h1>
              <div class="spacer _30"></div>
              <div class="div-empresas" style="display: flex;align-items: center;justify-content: space-between;">
                  <a href="https://www.totvs.com/" target="_blank" class="marcas off w-inline-block" data-ix="show-on-scroll"><img src="<?php echo base_url_assets ?>images/totvs.png" width="130"></a>
                  <a href="https://targetmais.com.br/" target="_blank" class="marcas off w-inline-block" data-ix="show-on-scroll"><img src="<?php echo base_url_assets ?>images/targetmais.png" width="117"></a>
                  <a href="https://www.roihero.com.br/" target="_blank" class="marcas off w-inline-block" data-ix="show-on-scroll"><img src="<?php echo base_url_assets ?>images/roihero.png" width="1750"></a>
                  <a href="https://eadplataforma.com/" target="_blank" class="marcas off w-inline-block" data-ix="show-on-scroll"><img src="<?php echo base_url_assets ?>images/eadplataforma.png" width="100" style="margin-left: -17px;"></a>
                  <a href="http://www.assobrav.com.br/" target="_blank" class="marcas off w-inline-block" data-ix="show-on-scroll"><img src="<?php echo base_url_assets ?>images/assobrav.png" width="1750" style="min-width: 195px;"></a>
                  <a href="https://www.jetecommerce.com.br/" target="_blank" class="marcas off w-inline-block" data-ix="show-on-scroll"><img src="<?php echo base_url_assets ?>images/jet.jpg" width="95"></a>
              </div>
              <div class="spacer _100"></div>
              <div class="titulos-padding" data-ix="show-on-scroll">
                  <h1 class="h1 medium inverted">Depoimentos</h1>
                  <h2 class="h2 small blue">O que nossos clientes dizem sobre nosso software de automação:</h2>
              </div>
              <div class="spacer _50"></div>
              <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-testimonials w-slider" data-ix="show-on-scroll">
                  <div class="mask w-slider-mask">
                      <div class="slide-testimonial w-slide">
                          <div class="txt-20">“Excelente ferramenta para a gestão de leads e programação de ações e campanhas de marketing digital, além de um suporte altamente eficiente e atencioso. Parabéns a todo o time da LAHAR. Tem sido muito produtivo e satisfatório trabalhar com vocês.”</div>
                          <div class="spacer _50"></div><img src="<?php echo base_url_assets ?>images/fotoRafael.png" srcset="<?php echo base_url_assets ?>images/fotoRafael-p-500.png 500w, <?php echo base_url_assets ?>images/fotoRafael.png 816w" sizes="(max-width: 479px) 100vw, 100px" class="foto-author">
                          <div class="title-testimonial">Alexandre Conte</div>
                          <div class="txt-14 testimonial">TOTVS Unidade Curitiba</div>
                      </div>
                      <div class="slide-testimonial w-slide">
                          <div class="txt-20">“A Agência MUTECH recomenda a LAHAR. Sem dúvidas a melhor relação custo/benefício em ferramenta de automação do mercado. Atendimento e suporte pós venda, nível hard! Parabéns à toda família LAHAR.”</div>
                          <div class="spacer _50"></div><img src="<?php echo base_url_assets ?>images/fotoKim.png" srcset="<?php echo base_url_assets ?>images/fotoKim-p-500.png 500w, <?php echo base_url_assets ?>images/fotoKim.png 762w" sizes="(max-width: 479px) 100vw, 100px" class="foto-author">
                          <div class="title-testimonial">Celso Pimentel</div>
                          <div class="txt-14 testimonial">MUTECH</div>
                      </div>
                      <div class="slide-testimonial w-slide">
                          <div class="txt-20">“Estou utilizando o LAHAR para automação de marketing desde janeiro/2018. Além de ser prático para pessoas leigas como eu, o atendimento ao cliente é excelente. Todos são muito gentis e atenciosos. Acho que vale a pena, porque a grande dificuldade que temos com ferramentas famosas é justamente no atendimento que pelos que já passei tem um tratamento totalmente impessoal e displicente com o cliente.”</div>
                          <div class="spacer _50"></div><img src="<?php echo base_url_assets ?>images/fotoMarina.png" srcset="<?php echo base_url_assets ?>images/fotoMarina-p-500.png 500w, <?php echo base_url_assets ?>images/fotoMarina.png 762w" sizes="(max-width: 479px) 100vw, 100px" class="foto-author">
                          <div class="title-testimonial">Helena Muzzi</div>
                          <div class="txt-14 testimonial">Essência do Vale</div>
                      </div>
                      <div class="slide-testimonial w-slide">
                          <div class="txt-20">"A Uniprag é uma controladora de pragas de âmbito nacional e conta com diversas unidades espalhadas pelo Brasil. Assim, possuímos vários websites. Dentre as muitas contribuições da LAHAR, uma de grande destaque é a possibilidade de, em apenas UMA conta, podermos colocar todos os nossos domínios! Isso gera agilidade, economia e organização sem igual. Aproveitamos para agradecer ao suporte sempre presente e eficiente do pessoal."</div>
                          <div class="spacer _50"></div><img src="<?php echo base_url_assets ?>images/fotoMocelim.png" class="foto-author">
                          <div class="title-testimonial">Marcus Pires</div>
                          <div class="txt-14 testimonial">Uniprag</div>
                      </div>
                      <div class="slide-testimonial w-slide">
                          <div class="txt-20">"Passei por diversas plataformas de Marketing Digital e posso dizer com toda convicção que não encontrei nenhuma com tantas funcionalidades e com o principal, com excelente atendimento ao cliente. Através da LAHAR conseguimos nutrir meus clientes e obter muito mais resultados através do relacionamento criado com eles. Super recomendo a LAHAR."</div>
                          <div class="spacer _50"></div><img src="<?php echo base_url_assets ?>images/fotoThiago.png" srcset="<?php echo base_url_assets ?>images/fotoThiago-p-500.png 500w, <?php echo base_url_assets ?>images/fotoThiago.png 654w" sizes="(max-width: 479px) 100vw, 100px" class="foto-author">
                          <div class="title-testimonial">Marcio Battistin</div>
                          <div class="txt-14 testimonial">Estúdio RA</div>
                      </div>
                          <!-- <div class="slide-testimonial w-slide">
                          <div class="txt-20">“É bom poder contar com o apoio constante da LAHAR como software de marketing durante toda a execução do plano estratégico, desde o planejamento, passando pela execução até a mensuração dos resultados.”</div>
                          <div class="spacer _50"></div><img src="<?php echo base_url_assets ?>images/fotoRoberta.png" srcset="<?php echo base_url_assets ?>images/fotoRoberta-p-500.png 500w, <?php echo base_url_assets ?>images/fotoRoberta-p-800.png 800w, <?php echo base_url_assets ?>images/fotoRoberta.png 914w" sizes="(max-width: 479px) 100vw, 100px" class="foto-author">
                          <div class="title-testimonial">Roberta Kawashima</div>
                          <div class="txt-14 testimonial">Unimagem</div>
                      </div>
                      <div class="slide-testimonial w-slide">
                      <div class="txt-20">&quot;Aqui na Vesti utilizávamos outra plataforma de automação de marketing que atendia as nossas necessidades junto a nossos clientes. Depois da contratação da LAHAR percebemos que poderíamos fazer muito mais, ou seja, ir além daquilo que estávamos praticando e oferecendo. A possibilidade de trabalhar em conjunto com a equipe da LAHAR nos proporciona a certeza de bons negócios.&quot;</div>
                      <div class="spacer _50"></div><img src="<?php echo base_url_assets ?>images/fotoWagner.png" class="foto-author">
                      <div class="title-testimonial">Wagner de Souza</div>
                      <div class="txt-14 testimonial">Vesti</div>
                  </div> -->
              </div>
              <div class="left-arrow w-hidden-tiny w-slider-arrow-left">
                  <div class="icon-blue w-icon-slider-left"></div>
              </div>
              <div class="right-arrow w-hidden-tiny w-slider-arrow-right">
                  <div class="icon-blue w-icon-slider-right"></div>
              </div>
              <div class="slide-nav-2 w-slider-nav w-slider-nav-invert w-round"></div>
          </div>
          <a href="<?php echo base_url; ?>cases-de-marketing-digital" class="button-yellow w-button">VEJA HISTÓRIAS DE SUCESSO</a>
        </div>
    </div>
    <div class="section-branca">
        <div class="container-center w-container">
            <div class="titulos-padding _70" data-ix="show-on-scroll">
                <h1 class="h1 medium inverted">FAQ</h1>
                <!-- <h2 class="h2 small blue">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris dapibus fermentum metus. Suspendisse velit mi, sollicitudin quis, rutrum quis, tristique vel, ipsum.</h2> -->
            </div>
            <div class="spacer _50"></div>
            <div class="w-row" data-ix="show-on-scroll">
                <div class="column-zero-pad w-col w-col-6">
                    <div>
                        <div class="titles-14">GERAIS</div>
                        <div class="text-block-12">O QUE É UMA AUTOMATIZAÇÃO?</div>
                        <div class="spacer"></div>
                        <div class="txt-14 testimonial left">Uma automatização é uma integração entre duas ferramentas web que executa uma determinada tarefa por você. Ela tem, necessariamente, um &quot;gatilho&quot; (ex: quando um pagamento for aprovado no PagSeguro…) e uma &quot;ação&quot; (ex: ...avisar em determinado canal do Slack). Uma automatização, como o próprio nome já diz, sincroniza dados automaticamente entre as ferramentas.</div>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-6">
                    <div class="div-block-15">
                        <div class="titles-14">GERAIS</div>
                        <div class="text-block-12">FORMAS DE PAGAMENTO ACEITAS</div>
                        <div class="spacer"></div>
                        <div class="txt-14 testimonial left">Uma automatização é uma integração entre duas ferramentas web que executa uma determinada tarefa por você. Ela tem, necessariamente, um &quot;gatilho&quot; (ex: quando um pagamento for aprovado no PagSeguro…) e uma &quot;ação&quot; (ex: ...avisar em determinado canal do Slack). Uma automatização, como o próprio nome já diz, sincroniza dados automaticamente entre as ferramentas.</div>
                        <img src="<?php echo base_url_assets ?>images/cards.png">
                    </div>
                </div>
            </div>
            <div class="w-row" data-ix="show-on-scroll">
                <div class="column-zero-pad w-col w-col-6">
                    <div>
                        <div class="titles-14">GERAIS</div>
                        <div class="text-block-12">O QUE É UMA AUTOMATIZAÇÃO?</div>
                        <div class="spacer"></div>
                        <div class="txt-14 testimonial left">Uma automatização é uma integração entre duas ferramentas web que executa uma determinada tarefa por você. Ela tem, necessariamente, um &quot;gatilho&quot; (ex: quando um pagamento for aprovado no PagSeguro…) e uma &quot;ação&quot; (ex: ...avisar em determinado canal do Slack). Uma automatização, como o próprio nome já diz, sincroniza dados automaticamente entre as ferramentas.</div>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-6">
                    <div class="div-block-15">
                        <div class="titles-14">GERAIS</div>
                        <div class="text-block-12">O QUE É UMA AUTOMATIZAÇÃO?</div>
                        <div class="spacer"></div>
                        <div class="txt-14 testimonial left">Uma automatização é uma integração entre duas ferramentas web que executa uma determinada tarefa por você. Ela tem, necessariamente, um &quot;gatilho&quot; (ex: quando um pagamento for aprovado no PagSeguro…) e uma &quot;ação&quot; (ex: ...avisar em determinado canal do Slack). Uma automatização, como o próprio nome já diz, sincroniza dados automaticamente entre as ferramentas.</div>
                    </div>
                </div>
            </div>
            <div class="w-row" data-ix="show-on-scroll">
                <div class="column-zero-pad w-col w-col-6">
                    <div>
                        <div class="titles-14">GERAIS</div>
                        <div class="text-block-12">O QUE É UMA AUTOMATIZAÇÃO?</div>
                        <div class="spacer"></div>
                        <div class="txt-14 testimonial left">Uma automatização é uma integração entre duas ferramentas web que executa uma determinada tarefa por você. Ela tem, necessariamente, um &quot;gatilho&quot; (ex: quando um pagamento for aprovado no PagSeguro…) e uma &quot;ação&quot; (ex: ...avisar em determinado canal do Slack). Uma automatização, como o próprio nome já diz, sincroniza dados automaticamente entre as ferramentas.</div>
                    </div>
                </div>
                <div class="column-zero-pad w-col w-col-6">
                    <div class="div-block-15">
                        <div class="titles-14">GERAIS</div>
                        <div class="text-block-12">O QUE É UMA AUTOMATIZAÇÃO?</div>
                        <div class="spacer"></div>
                        <div class="txt-14 testimonial left">Uma automatização é uma integração entre duas ferramentas web que executa uma determinada tarefa por você. Ela tem, necessariamente, um &quot;gatilho&quot; (ex: quando um pagamento for aprovado no PagSeguro…) e uma &quot;ação&quot; (ex: ...avisar em determinado canal do Slack). Uma automatização, como o próprio nome já diz, sincroniza dados automaticamente entre as ferramentas.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-trio">
        <div class="section-cta _1"></div>
        <div id="experimente" class="section-cta _2">
            <div class="div-align-left" data-ix="show-on-scroll">
                <h1 class="h1 medium">Quer saber como a LAHAR pode ajudar<br> seu negócio?</h1>
                <h2 class="h2 small _20">Transforme seu marketing digital em 15 dias. Não pedimos seu cartão!</h2>
                <div class="spacer _30 w-hidden-tiny"></div>
                <div class="form-field-menor w-form" data-ix="show-on-scroll">
                    <form id="email-form" name="email-form" data-name="Email Form" class="form-cta w-clearfix">
                        <input type="text" class="field-cta-email w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Seu endereço de e-mail" id="email" required="">
                        <input type="submit" value="Experimente grátis" data-wait="Carregando..." class="botoes-form w-button try-btn">
                    </form>
                    <div class="w-form" id="mensagem_form" style="background-color:transparent; display:none; margin: 0;">
                        <p style="text-align:left; margin: 10px 0 0; padding: 5px 10px;background-color: #ff0000; color: #fff; font-weight: 700;">O e-mail informado já possui conta cadastrada, por favor digite outro e-mail ou entre em contato conosco.</p>
                    </div>
                    <div class="w-form" id="mensagem_form_invalido" style="background-color:transparent; display:none;">
                        <p style="text-align:left; margin-left:100px;">O e-mail informado não é válido.</p>
                    </div>
                    <div class="w-form-done">
                        <div>(LAHAR: integrar formulário)</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-cta _3"></div>
    </div>


    <?php include_once './includes/footer.php'; ?>

    <script>
    jQuery(document).ready(function($) {
        $('.assinar-btn').click(function() {
            var plano = $(this).closest('.div-content-planos').attr('data-plano'),
            contatos = $('.links-contatos.active').attr('data-value'),
            periodo = ( $('#paymentPeriodmonthButton input').is(':checked') ) ? 'mensal' : 'anual';

            window.location.href = '<?php echo base_url ?>assinar?plano='+ plano +'&contatos='+ contatos +'&periodo=' + periodo;
        });
    });
    </script>


</body>
</html>
