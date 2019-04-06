<?php
$nekoapp = '404';
include('../../assets/includes/app_start.php');
require '../../assets/import/PHPMailer/PHPMailerAutoload.php';

$nome = $resultado['nome'];
$email = $resultado['email'];
$iduser = $resultado['id'];
$code = rand(0,100000);
$ativo = '1';

$codea = "INSERT INTO verificar (iduser, code, ativo)
VALUES ('".$iduser."', '".$code."', '".$ativo."')";
if (mysqli_query($conn, $codea)) {
    echo 'verificar';
}
else{
    echo 'error';
}

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "nekoapp404@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "xande123";
//Set who the message is to be sent from
$mail->setFrom($email, $nome);
//Set an alternative reply-to address
$mail->addReplyTo('nekoapp404@gmail.com', 'NekoApp');
//Set who the message is to be sent to
$mail->addAddress($email, ( 'NekoApp' . $nome));
//Set the subject line
$mail->Subject = 'Verifique sua conta';
$mail->IsHTML(true); 
$mail -> charSet = "UTF-8";
//Read an HTML message body from an external file, convert referenced images to embedded,
//Replace the plain text body with one created manually

$body = '<table cellpadding="0" cellspacing="0" border="0" style="padding:0px;margin:0 auto;width:100%;max-width:640px; background: #2f3136"> <tbody><tr> <td colspan="3" style="padding:0px;margin:0px;font-size:1px;height:1px" height="1">&nbsp;</td> </tr> <tr> <td style="padding:0px;margin:0px;font-size:1px">&nbsp;</td> <td style="padding:0px;margin:0px" width="590"> <table width="100%" cellspacing="0" cellpadding="0" border="0"> <tbody> <tr> <td class="m_3492053021054862731m_7098253512641276920logo" style="padding:11px 15px 8px 15px;background-color:#2f3136;"> </td> </tr> </tbody> </table> <table bgcolor="#2196F3" width="100%" cellspacing="0" cellpadding="0" border="0"> <tbody> <tr> <td align="center" height="45"></td> </tr> <tr> <td align="center" class="m_3492053021054862731m_7098253512641276920mail__color-header-img-container" style="display:block"> </td> </tr> <tr> <td class="m_3492053021054862731m_7098253512641276920title" style="padding:20px 0 45px 0;text-align:center;color:#FFFFFF"> <span style="font-family:"Proxima-nova",Helvetica,Arial,sans-serif;font-size:26px;font-weight:300;color:#fff;display:inline-block;overflow:hidden;text-decoration:none;padding:0 8%"> Hello ' . $nome .  ' , your code is (' . $code . ') </span> </td> </tr> <tr> <td style="text-align:center;padding:0"> <div id="m_3492053021054862731m_7098253512641276920responsive-width" class="m_3492053021054862731m_7098253512641276920responsive-width" width="78.2% !important" style="width:77.8%!important;margin:0 auto;background:#FFFFFF;border-left:1px solid #555"> <div style="height:50px;border-width:0!important;border-style:solid;border-color:#f1f1f1;margin:0 auto">&nbsp;</div> </div> </td> </tr> </tbody> </table> <div id="m_3492053021054862731m_7098253512641276920div-table-wrapper" class="m_3492053021054862731m_7098253512641276920div-table-wrapper" style="text-align:center;margin:0 auto;background:#f8f8f8;padding-bottom:52px"> <table class="m_3492053021054862731m_7098253512641276920main-card-shadow" bgcolor="#FFFFFF" align="center" border="0" cellpadding="0" cellspacing="0" width="78.2% !important" style="width:78.2%!important;padding:0;border-width:0 1px 2px 1px;border-style:solid;border-color:#efefef;text-align:center"> <tbody> <tr> <td style="padding:0 10%;font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-size:16px;line-height:1.3;text-align:center;color:#fff"> Thanks for register in NekoApp) <br> <br> welcome to NekoApp, Put your best cloths and see :) </td> </tr> <tr> <td height="30"></td> </tr> <tr> <td height="30"></td> </tr> <!-- <tr> <td class="m_3492053021054862731m_7098253512641276920card-title" id="m_3492053021054862731m_7098253512641276920card-title" align="center"> <img width="50" height="50" src="https://ci5.googleusercontent.com/proxy/1tQ7syvsHwbtD4oR40bY3jQ3ExWtHk0jjb-sbWO_oDJn7BwDvBLXuGeyrrYt9_r7wRueoCbn4Inz0IDx2dgrZpnXSOB7pBw3vIglUcRZ14rg35Gy2CD0syqw16b0LtL7v9Xm=s0-d-e1-ft#http://shipping-frontend.mercadolibre.com.ar/images/icono-producto-chomba_2x.png" style="text-align:center;display:block;margin:0 auto;width:50px;height:50px" class="CToWUd"> </td> </tr> --> <tr> <td height="12"></td> </tr> <!-- <tr> <td> <p style="font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-weight:100;font-size:14px;text-align:center;color:#666666;margin:0 0 4px 0">Código de rastreamento</p> <p style="font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-weight:100;font-size:14px;text-align:center;color:#666666;margin:0 0 0 0">PT165031605BR</p> </td> </tr> <tr> <td height="20"></td> </tr> <tr> <td> <a href="https://myaccount.mercadolivre.com.br/purchases/1942912849/shipments/27865927134/detail" style="text-align:center;color:#3483fa;font-family:"Proxima Nova","Lato","Helvetica","ArialMT",Arial,sans-serif;font-size:16px;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://myaccount.mercadolivre.com.br/purchases/1942912849/shipments/27865927134/detail&amp;source=gmail&amp;ust=1552235744678000&amp;usg=AFQjCNFJ780rCbdMa0vDnCe5g84nS_0vyQ">Acompanhar envio</a> </td> </tr> --> <tr> <td height="50" bgcolor="#FFFFFF"></td> </tr> </tbody> </table> <table align="center" border="0" cellpadding="0" cellspacing="0" width="78.2% !important"> <tbody> <tr> <td height="50"></td> </tr> <!-- <tr> <td align="center" style="font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-weight:100;font-size:18px;text-align:center;color:#666666;padding:0 0 20px 0;font-weight:600"> Detalhe do envio </td> </tr> <tr> <td align="center"> <img width="50" height="50" style="width:50px;height:50px;margin:0 0 12px 0" src="https://ci3.googleusercontent.com/proxy/qV5mbvS7D2mJf-PHsRdUWTQFjmwXC_8Vqu6XrUWjGm66jMjMrfQgdiKfSEgaZzw7M91SdeUEwpmkZ-Pb6HFPldjvl1T3yWTdN21IdmO_GuA7VGkTbbVQBgQtDKZFMPCC5_e2159Ncc0=s0-d-e1-ft#http://shipping-frontend.mercadolibre.com.ar/images/circulo-azul-marker-blanco_2x.png" class="CToWUd"> </td> </tr> <tr> <td align="center"> <p style="text-decoration:none;font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-weight:100;font-size:14px;text-align:center;color:#666666;margin:0 0 4px 0">Rua General Flores da Cunha 68, Proximo jorginho lanches</p> <p style="text-decoration:none;font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-weight:100;font-size:14px;text-align:center;color:#666666;margin:0 0 4px 0"> Rio Grande, Rio Grande do Sul, CEP 96201390 </p> <p style="text-decoration:none;font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-weight:100;font-size:14px;text-align:center;color:#666666;margin:0">Tel.: 5399902362</p> </td> </tr> --> <tr> <td height="32"></td> </tr> <tr> <td align="center"> <table style="display:inline-block!important;vertical-align:top"> <tbody> <tr> <td> <!-- <div style="display:inline-block;width:50px;height:50px;border-radius:50%;border:solid 0.5px #bebebe"> <img width="50" height="50" src="https://ci4.googleusercontent.com/proxy/y-pupPOoITtRgM3zau5IydkydgL2lqgT_hy-IJRvpBRq4YGgVifIR4ks7leMrEZnGHIxzGuQFw5-GG-bZwRDUAyXuMs3Z6jDj_Ua08b4vMCiTg=s0-d-e1-ft#http://mlb-s2-p.mlstatic.com/843433-MLB26902599050_022018-I.jpg" style="width:50px;height:50px;border-radius:50%" class="CToWUd"> <div></div> </div> --> </td> </tr> </tbody> </table> </td> </tr> <tr> <td height="32"></td> </tr> <tr> <!-- <td align="center" style="width:100%;max-width:277px;font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-size:14px;font-weight:300;line-height:1.25;text-align:center;padding:0 23%;color:#666666"> Display Touch Iphone 6 Branco 4,7 + Ferramenta + Película </td> --> </tr> <tr> <td height="20"></td> </tr> </tbody> </table> </div> <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0" style="text-align:center;background-color:#eeeeee"> <tbody><tr style="background-color:#FFFFFF"> <td colspan="3" align="center" height="50"></td> </tr> <tr style="background-color:#FFFFFF"> <td colspan="3" align="center" style="font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-size:14px;font-weight:300;line-height:1.08;text-align:center;color:#cccccc;margin:0 auto;width:100%;text-align:center"> Precisa de ajuda? <a href="https://facebook.com/notblank404" style="color:#3065ff;color:#3483fa;text-decoration:none" target="_blank" >Contate-nos</a> </td> </tr> <tr style="background-color:#FFFFFF"> <td colspan="3" align="center" height="28"></td> </tr> <tr style="background-color:#FFFFFF"> <td align="center" style="text-align:center;width:100%" colspan="3"> <img src="https://ci4.googleusercontent.com/proxy/4bCbpspYRAf8QM2QIjBbIM3XrTTrArvsXLpoOFJIlUaKwZLBGovfWBXPIpiaoR4m_EtsHT7-0YDZFtbIYJcs3i5eN2v8TQ-bKKUQLoTzPxOp_xColLIy=s0-d-e1-ft#http://shipping-frontend.mercadolibre.com.ar/images/apple-log_2x.png" width="27" style="display:inline-block;width:27px" class="CToWUd"> <img src="https://ci5.googleusercontent.com/proxy/UKXMZiBwuDxRNBFeuk7n9AccStclyIRbIp7d2mV69iFWl3uTgpctUjypkiCcUzHFVZ5Nvqnlm5ULSpTcjh12nzGhzVV39PHoWUIDVV7dtQsbLukL4e4Y3noO=s0-d-e1-ft#http://shipping-frontend.mercadolibre.com.ar/images/android-logo_2x.png" width="27" style="display:inline-block;width:27px;margin-left:5px" class="CToWUd"> </td> </tr> <tr style="background-color:#FFFFFF"> <td colspan="3" align="center" height="18"></td> </tr> <tr style="background-color:#FFFFFF"> <td colspan="3" align="center" style="font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-size:14px;font-weight:300;line-height:1.08;text-align:center;color:#cccccc"> Rede social para geek! :) </td> </tr> <tr style="background-color:#FFFFFF"> <td colspan="3" align="center" height="8"></td> </tr> <tr style="background-color:#FFFFFF"> <td colspan="3" align="center" style="font-family:"Proxima Nova",Arial,Helvetica,sans-serif;font-size:13px;font-weight:300;line-height:1.08;text-align:center;color:#cccccc;width:100%;background-color:#FFFFFF"> Não responda este e-mail. </td> </tr> <tr style="background-color:#FFFFFF"> <td colspan="3" align="center" height="50"></td> </tr> </tbody></table> </td> <td style="padding:0px;margin:0px;font-size:1px">&nbsp;</td> </tr> <tr> <td colspan="3" style="padding:0px;margin:0px;font-size:1px;height:1px" height="1">&nbsp;</td> </tr> </tbody></table>';


$mail->Body  = html_entity_decode($body);
//send the message, check for errors
if (!$mail->send()) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
    $msg = 'error';
} else {
    $msg = 'sent';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
}