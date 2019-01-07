<?php

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
    //                         <td>'. $nome_contato .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>E-mail</td>
    //                         <td>'. $email_contato .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Telefone</td>
    //                         <td>'. $telefone .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Nome da empresa</td>
    //                         <td>'. $nome_empresa .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Endereço do site</td>
    //                         <td>'. $endereco_site .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Cargo</td>
    //                         <td>'. $cargo .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Ambiente dedicado</td>
    //                         <td>'. $ambiente_dedicado .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Número de contatos</td>
    //                         <td>'. $numero_contato .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Envio de e-mails</td>
    //                         <td>'. $envio_emails .'</td>
    //                     </tr>
    //                     <tr>
    //                         <td>Integrações desejadas</td>
    //                         <td>'. $integracoes .'</td>
    //                     </tr>
    //                 </table>
    //             ';
    //
    //     //Content
    //     $mail->isHTML(true);                                  // Set email format to HTML
    //     $mail->Subject = $_POST['assunto'];
    //     $mail->Body    = $html_corpo;
    //     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //
    //     $mail->send();

        $retorno = array(
            'fields' => $_POST,
            'status' => 'sucesso',
            'data' => array(
                'success' => array(
                    'code' => 200,
                    'message' => 'Mensagem enviada com sucesso.'
                )
            )
        );

    // } catch (Exception $e) {
    //     $retorno = array(
    //         'status' => 'erro',
    //         'message' => 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo
    //     );
    // }

    $valores = array(
        'email_contato' => $_POST['email'], // Texto, 100 caracteres, email, OBRIGATÓRIO
        'nome_contato' 	=> $_POST['nome_contato'], // Texto, 100 caracteres
        'tel_celular' 	=> $_POST['telefone'], // Numérico (pode receber número formatado, ex. (14) 3222-1415)
        'nome_empresa'  => $_POST['nome_empresa'],
        'site_empresa'  => $_POST['website'],
        'cargo'         => $_POST['cargo'],
        'anotacoes'     => 'Ambiente dedicado: '. $_POST['ambiente_dedicado'] .'; Numero contatos: '. $_POST['numero_contatos'] .'; Envio de emails: '. $_POST['envio_emails'] .'; Integrações Desejadas: '. $_POST['integracoes_desejadas'],
        'url_origem' 	=> $_SERVER['HTTP_REFERER'], // Texto, 100 caracteres
    );
    //testes
    // integra_api_lahar('laharteskX1t5ZXrpusziunHL0563jnPHYKBHIs1to0ZIIHGQ45j90ck8oAFzIRp', 'conversions', 'corporativo-site-lahar', $valores);
    //oficial
    integra_api_lahar('lahardigNQan08vrIQgPgZVS8APuwDnBcZe0SeP0JIPIYWWsjB50RWKs7Md3Ieif', 'conversions', 'corporativo-site-lahar', $valores);


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

    echo json_encode($retorno);

    die();

?>
