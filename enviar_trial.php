<?php
    $status = 'erro';

    // Se as informações constarem em outro array que não o próprio $_POST, substitua na linha abaixo
    $valores = $_REQUEST;
    
    if (count($valores) > 0) {

        // $cidade_uf = explode("/", $valores['cidade']);

        // if ( $valores['vaga'] ) {
        //     $tags = 'curriculo-site, '.$valores['vaga'];
        //     $anotacoes = "Como chegou: ".$valores['como_chegou']."<br>"."Por que LAHAR: ".$valores['pq_lahar']."<br>"."Vaga: ".$valores['vaga']."<br>"."Pretensão: ".$valores['pretensao'];
        // } else{
        //     $tags = 'curriculo-site';
        //     $anotacoes = "Como chegou: ".$valores['como_chegou']."<br>"."Por que LAHAR: ".$valores['pq_lahar']."<br>"."Pretensão: ".$valores['pretensao'];
        // }

        $anotacoes = 

        // Caso os campos de seu array não estejam nomeados de acordo com a documentação da API, você deve utilizar o array de tradução abaixo
        $traducao = array(
            'email_contato' => $valores['email'], // Texto, 100 caracteres, email, OBRIGATÓRIO
            'nome_contato' 	=> $valores['nome'], // Texto, 100 caracteres
            'tel_celular' 	=> $valores['telefone'], // Numérico (pode receber número formatado, ex. (14) 3222-1415)
            'nome_empresa'	=> $valores['nome_empresa'],
            'site_empresa'	=> $valores['site_empresa'],
            // 'linkedin'		=> $valores['perfil_linkedin'],
            // 'anotacoes' 	=> $anotacoes, // Texto, sem limite
            'tags' 			=> $valores['objetivo'], // Texto, 100 caracteres, termos separados por vírgula
            'url_origem' 	=> $_SERVER['HTTP_REFERER'], // Texto, 100 caracteres
        );

        $valores = $traducao;

        // TIPO_DE_INTEGRACAO pode ser 'conversions' ou 'leads'
        //testes
        // integra_api_lahar('laharteskX1t5ZXrpusziunHL0563jnPHYKBHIs1to0ZIIHGQ45j90ck8oAFzIRp', 'conversions', 'criar-conta-site-lahar', $valores);
        //oficial
        integra_api_lahar('lahardigNQan08vrIQgPgZVS8APuwDnBcZe0SeP0JIPIYWWsjB50RWKs7Md3Ieif', 'conversions', 'criar-conta-site-lahar', $valores);        

        $status = "ok";
    }

    $retorno = array();

    if ( $status = "ok" ) {
        $retorno['status'] = 'ok';

        echo json_encode($retorno);
        die();
    } else {
        $retorno['status'] = 'erro';
        echo json_encode($retorno);
        die();
    }

    // Snippet - Integração de conversões LAHAR
    function integra_api_lahar($token_api_lahar, $endpoint, $nome_formulario, $campos) {

        // $endpoint_full_url = 'http://localhost/codebase-v2.1/api/'.$endpoint;
        $endpoint_full_url = 'https://app.lahar.com.br/api/'.$endpoint;

        if ( $endpoint == 'conversions' ) {
            $method = 'POST';
        }
        if ( $endpoint == 'leads' ) {
            $method = 'PUT';
        }

        try {
            if (!array_key_exists('token_api_lahar',$campos)) {
                $campos['token_api_lahar'] = $token_api_lahar;
            }
            else if ($campos['token_api_lahar'] == NULL) {
                $campos['token_api_lahar'] = $token_api_lahar;
            }
            if (!array_key_exists('nome_formulario',$campos)) {
                $campos['nome_formulario'] = $nome_formulario;
            }
            else if ($campos['nome_formulario'] == NULL) {
                $campos['nome_formulario'] = $nome_formulario;
            }
            if (!array_key_exists('url_origem',$campos)) {
                $campos['url_origem'] = 'integracao-javascript';
            }
            else if ($campos['url_origem'] == NULL) {
                $campos['url_origem'] = 'integracao-javascript';
            }
            $post_fields = http_build_query($campos);
            if ($method == 'POST') {
                $ch = curl_init($endpoint_full_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $curl_response = curl_exec($ch);
                curl_close($ch);

                $json = json_decode($curl_response);

                $retorno = $json;
            }
            else if ($method == 'PUT') {

                $ch = curl_init($endpoint_full_url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($campos));
                $curl_response = curl_exec($ch);
                curl_close($ch);

                $json = json_decode($curl_response);

                $retorno = $json;

            }
        }
        catch (Exception $e) {
            $retorno = array(
                'status' => 'erro',
                'data' => array(
                    'error' => array(
                        'code' => 404,
                        'message' => 'Erro imprevisto.'
                    )
                )
            );
        }

        return $retorno;

    }
?>
