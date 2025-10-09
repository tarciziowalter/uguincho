<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Envia o e-mail de contato usando os dados do formulário.
 * @param array $formData Array contendo nome, email, telefone e mensagem.
 * @return bool True se o envio for bem-sucedido, False caso contrário.
 */
function sendContactEmail(array $formData): bool {
    
    // --- PREENCHA ESTAS VARIÁVEIS COM SUAS CREDENCIAIS SMTP REAIS ---
    $host = 'smtp.zoho.com'; 
    $username = 'suporte@uguinchobr.com.br';
    $password = 'Supor2025##';
    $port = 465;
    $encryption = PHPMailer::ENCRYPTION_SMTPS;
    // -----------------------------------------------------------------
    
    if (!class_exists(PHPMailer::class)) {
        error_log("Erro: PHPMailer class não encontrada. Verifique o autoload.");
        return false;
    }

    $mail = new PHPMailer(true);
    
    try {

        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = true;
        $mail->Username = $username;
        $mail->Password = $password;
        $mail->SMTPSecure = $encryption;
        $mail->Port = $port;
        $mail->CharSet = 'UTF-8';
        $mail->setLanguage('pt_br'); 
        $mail->isHTML(true); 

        $mail->setFrom($username, 'Formulário de Contato UGUINCHOBR');
        $mail->addAddress('suporte@uguinchobr.com.br', 'Suporte UGUINCHOBR'); 

        $mail->Subject = 'Nova Mensagem de Contato - ' . $formData['nome'];
        
        $body = '
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Nova Mensagem de Contato</title>
            <style type="text/css">
                body { margin: 0; padding: 0; min-width: 100%; background-color: #f4f4f4; }
                table { border-collapse: collapse; }
                p { margin: 0; padding: 0; }
                .content { padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
                .heading { font-size: 24px; color: #1f2937; margin-bottom: 20px; font-weight: bold; }
                .data-row { padding: 10px 0; border-bottom: 1px solid #eeeeee; }
                .data-label { font-weight: bold; color: #4b5563; width: 120px; vertical-align: top; }
                .data-value { color: #1f2937; vertical-align: top; }
                .message-box { background-color: #f9f9f9; border: 1px solid #eeeeee; padding: 15px; margin-top: 15px; border-radius: 4px; }
                .footer { color: #9ca3af; font-size: 12px; margin-top: 20px; text-align: center; }
            </style>
        </head>
        <body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
            <center style="width: 100%; table-layout: fixed;">
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f4;">
                    <tr>
                        <td align="center" style="padding: 20px 0;">
                            <!-- [Conteúdo Principal] -->
                            <table width="600" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 600px;">
                                <tr>
                                    <td class="content" style="padding: 30px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
                                        
                                        <!-- Cabeçalho -->
                                        <h1 class="heading" style="font-size: 28px; color: #059669; margin: 0 0 20px 0; font-weight: bold;">
                                            &#128236; Nova Mensagem Recebida
                                        </h1>
                                        <p style="color: #4b5563; margin-bottom: 25px;">
                                            Um novo usuário enviou uma mensagem através do formulário de contato do site.
                                        </p>
                                        
                                        <!-- Detalhes do Contato -->
                                        <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td class="data-row" style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td class="data-label" style="font-weight: bold; color: #4b5563; width: 120px;">Nome:</td>
                                                            <td class="data-value" style="color: #1f2937;">' . htmlspecialchars($formData['nome']) . '</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="data-row" style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td class="data-label" style="font-weight: bold; color: #4b5563; width: 120px;">Email:</td>
                                                            <td class="data-value" style="color: #1f2937;"><a href="mailto:' . htmlspecialchars($formData['email']) . '" style="color: #059669; text-decoration: none;">' . htmlspecialchars($formData['email']) . '</a></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="data-row" style="padding: 10px 0;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td class="data-label" style="font-weight: bold; color: #4b5563; width: 120px;">Telefone:</td>
                                                            <td class="data-value" style="color: #1f2937;">' . (empty($formData['telefone']) ? 'Não informado' : htmlspecialchars($formData['telefone'])) . '</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        <!-- Caixa da Mensagem -->
                                        <h3 style="font-size: 18px; color: #1f2937; margin-top: 30px; margin-bottom: 10px;">Mensagem:</h3>
                                        <div class="message-box" style="background-color: #f0fdf4; border: 1px solid #dcfce7; padding: 15px; margin-top: 15px; border-radius: 4px; color: #1f2937; line-height: 1.6;">
                                            ' . nl2br(htmlspecialchars($formData['mensagem'])) . '
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            
                            <!-- Rodapé -->
                            <div class="footer" style="color: #9ca3af; font-size: 12px; margin-top: 20px; text-align: center;">
                                Esta mensagem foi gerada automaticamente pelo sistema de contato UGUINCHOBR.
                            </div>
                        </td>
                    </tr>
                </table>
            </center>
        </body>
        </html>
        ';

        $mail->Body = $body;
        $mail->AltBody = "Nome: " . $formData['nome'] . "\nEmail: " . $formData['email'] . "\nTelefone: " . $formData['telefone'] . "\nMensagem: " . $formData['mensagem'];
        $mail->send();

        return true;

    } catch (Exception $e) {
        error_log("Erro ao enviar email. Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
}