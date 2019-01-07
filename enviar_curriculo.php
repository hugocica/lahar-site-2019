<?php
    $status = 'erro';

    // Se as informações constarem em outro array que não o próprio $_POST, substitua na linha abaixo
    $valores = $_REQUEST;
    
    if (count($valores) > 0) {

        $cidade_uf = explode("/", $valores['cidade']);

        if ( $valores['vaga'] ) {
            $tags = 'curriculo-site, '.$valores['vaga'];
            $anotacoes = "Como chegou: ".$valores['como_chegou']."<br>"."Por que LAHAR: ".$valores['pq_lahar']."<br>"."Vaga: ".$valores['vaga']."<br>"."Pretensão: ".$valores['pretensao'];
        } else{
            $tags = 'curriculo-site';
            $anotacoes = "Como chegou: ".$valores['como_chegou']."<br>"."Por que LAHAR: ".$valores['pq_lahar']."<br>"."Pretensão: ".$valores['pretensao'];
        }

        // Caso os campos de seu array não estejam nomeados de acordo com a documentação da API, você deve utilizar o array de tradução abaixo
        $traducao = array(
            'email_contato' => $valores['email'], // Texto, 100 caracteres, email, OBRIGATÓRIO
            'nome_contato' 	=> $valores['nome'], // Texto, 100 caracteres
            'tel_celular' 	=> $valores['telefone'], // Numérico (pode receber número formatado, ex. (14) 3222-1415)
            'cidade'	  	=> $cidade_uf[0],
            'estado'	  	=> $cidade_uf[1],
            'linkedin'		=> $valores['perfil_linkedin'],
            'anotacoes' 	=> $anotacoes, // Texto, sem limite
            'tags' 			=> $tags, // Texto, 100 caracteres, termos separados por vírgula
            'url_origem' 	=> $_SERVER['HTTP_REFERER'], // Texto, 100 caracteres
        );

        $valores = $traducao;

        // TIPO_DE_INTEGRACAO pode ser 'conversions' ou 'leads'
        // testes mil
        // integra_api_lahar('laharteskX1t5ZXrpusziunHL0563jnPHYKBHIs1to0ZIIHGQ45j90ck8oAFzIRp', 'conversions', 'curriculo-site-lahar', $valores);
        // real oficial
        integra_api_lahar('lahardigNRErEuPHFdrXYKG6lV2SeLrRqcxxnsq7YuO2W7YZ0OH6N2CJWbaHJ2NK', 'conversions', 'curriculo-site-lahar', $valores);

        if ( $_FILES['datafile']['name'] ) {

            $uploaddir = 'assets/curriculos/';

            // Extensão
            $extensao = substr($_FILES['datafile']['name'], strrpos($_FILES['datafile']['name'], '.') + 1);

            // Renomeia
            $nome_arquivo = date('Y_m_d') . '_' . $valores['email_contato'] . '.' . $extensao;

            $uploadfile = $uploaddir . basename($nome_arquivo);

            if ( move_uploaded_file($_FILES['datafile']['tmp_name'], $uploadfile) ) {
                //echo "Arquivo válido e enviado com sucesso.\n";
                // enviar e-mail

                // Import PHPMailer classes into the global namespace
                // These must be at the top of your script, not inside a function
                // use PHPMailer\PHPMailer\PHPMailer;
                // use PHPMailer\PHPMailer\Exception;
                //
                // //Load Composer's autoloader
                // require 'vendor/autoload.php';
                //
                // $mail = new PHPMailer(true);
                //
                // try {
                //     //Server settings
                //     $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                //     $mail->isSMTP();                                      // Set mailer to use SMTP
                //     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                //     $mail->SMTPAuth = true;                               // Enable SMTP authentication
                //     $mail->Username = 'no-reply@lahar.com.br';                 // SMTP username
                //     $mail->Password = 'INSERIR_AQUI_SENHA';                           // SMTP password
                //     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                //     $mail->Port = 587;                                    // TCP port to connect to
                //
                //     //Recipients
                //     $mail->setFrom('from@example.com', 'Mailer');
                //     $mail->addAddress('rodrigo.tucunduva@lahar.com.br', 'Rodrigo Tucunduva');     // Add a recipient
                //     // $mail->addReplyTo('info@example.com', 'Information');
                //     // $mail->addCC('cc@example.com');
                //     // $mail->addBCC('bcc@example.com');
                //
                //     //Attachments
                //     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                //
                //     $nome_contato = $_POST['nome_contato'];
                //     $email = $_POST['email'];
                //     $telefone = $_POST['telefone'];
                //     $nome_empresa = $_POST['nome_empresa'];
                //     $endereco_site = $_POST['website'];
                //     $cargo = $_POST['cargo'];
                //     $ambiente_dedicado = $_POST['ambiente_dedicado'];
                //     $numero_contato = $_POST['numero_contatos'];
                //     $envio_emails = $_POST['envio_emails'];
                //     $integracoes = $_POST['integracoes_desejadas'];
                //
                //     $html_corpo = '
                //                 <table>
                //                     <tr>
                //                         <td>Nome</td>
                //                         <td>'. $traducao['nome_contato'] .'</td>
                //                     </tr>
                //                     <tr>
                //                         <td>E-mail</td>
                //                         <td>'. $traducao['email_contato'] .'</td>
                //                     </tr>
                //                     <tr>
                //                         <td>Telefone</td>
                //                         <td>'. $traducao['tel_celular'] .'</td>
                //                     </tr>
                //                     <tr>
                //                         <td>Cidade</td>
                //                         <td>'. $traducao['cidade'] .'</td>
                //                     </tr>
                //                     <tr>
                //                         <td>Estado</td>
                //                         <td>'. $traducao['estado'] .'</td>
                //                     </tr>
                //                     <tr>
                //                         <td>Linkedin</td>
                //                         <td>'. $traducao['linkedin'] .'</td>
                //                     </tr>
                //                 </table>
                //             ';
                //
                //     //Content
                //     $mail->isHTML(true);                                  // Set email format to HTML
                //     $mail->Subject = 'LAHAR Site - Curriculo enviado';
                //     $mail->Body    = $html_corpo;
                //     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                //
                //     $mail->send();

            }

        }

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
