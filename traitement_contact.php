<?php

$errors = [];
$myemail = 'formation@prochainweb.com';

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('forname', $_POST) || $_POST['forname'] == ''){
    $errors['forname'] = "Vous n'avez pas renseigné votre prénom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}
if(!array_key_exists('subject', $_POST) || $_POST['subject'] == ''){
    $errors['subject'] = "Vous n'avez pas renseigné d'objet";
}

session_start();
if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php');
}else{
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $name = $_POST['name']; 
    $email_address = $_POST['email']; 
    $forname = $_POST['forname'];
    $subject = $_POST['subject'];


    $to = $myemail;
    $headers[] = "From: $myemail";
    $headers[] = "Reply-To: $email_address";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
   
    
    $email_body = '

    <html>
       <body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#ffffff; -webkit-text-size-adjust:none">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
             <tr>
                <td align="center" valign="top">
                   <table width="700m" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
                      <tr>
                         <td class="td" style="width:700mpx; min-width:700mpx; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; Margin:0">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                               <tr>
                                  <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="1"></td>
                                  <td>
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                        <tr>
                                           <td height="50" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                        </tr>
                                     </table>
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                           <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="1"></td>
                                           <td>
                                              <div class="img" style="font-size:0pt; line-height:0pt; text-align:left"><a href="https://gitedesechudes.fr" target="_blank"><img src="https://gitedesechudes.fr/wp-content/uploads/2021/05/cropped-gite-des-echudes-2-100x100.png" border="0" width="200" height="89" alt="" /></a></div>
                                           </td>
                                           <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="1"></td>
                                        </tr>
                                     </table>
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                        <tr>
                                           <td height="35" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                        </tr>
                                     </table>
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                           <td bgcolor="#D24606">
                                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                 <tr>
                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
                                                    <td>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text1" style="color:#ffffff; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left">Formulaire de contact</div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="10" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                    </td>
                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
                                                 </tr>
                                              </table>
                                           </td>
                                        </tr>
                                     </table>
                                     <!-- Orange section -->
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                           <td bgcolor="#BBA983">
                                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                 <tr>
                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
                                                    <td>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="25" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text1" style="color:#ffffff; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left">'.$subject.' :</div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="25" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                    </td>
                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
                                                 </tr>
                                              </table>
                                           </td>
                                        </tr>
                                     </table>
                                     <!-- END Orange section -->
                                     <!-- Grey Section -->
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                           <td bgcolor="#E0D3B6">
                                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                 <tr>
                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
                                                    <td>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="25" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text2" style="color:#3a3449; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left">Identité :</div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="5" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text2" style="color:#3a3449; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left"><strong>'.$forname.' '.$name.'</strong></div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="25" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text2" style="color:#3a3449; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left">email :</div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="5" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text2" style="color:#3a3449; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left"><strong>'.$email_address.'</strong></div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="25" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text2" style="color:#3a3449; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left">Message :</div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="5" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                       <div class="text2" style="color:#3a3449; font-family:Arial,sans-serif; font-size:18px; line-height:22px; text-align:left"><strong>'.$message.'</strong></div>
                                                       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                                          <tr>
                                                             <td height="35" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                                          </tr>
                                                       </table>
                                                    </td>
                                                    <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="15"></td>
                                                 </tr>
                                              </table>
                                           </td>
                                        </tr>
                                     </table>
                                     <!-- END Grey Section -->
                                     
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">
                                        <tr>
                                           <td height="15" class="spacer" style="font-size:0pt; line-height:0pt; text-align:center; width:100%; min-width:100%">&nbsp;</td>
                                        </tr>
                                     </table>
                                  </td>
                                  <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="1"></td>
                               </tr>
                            </table>
                         </td>
                      </tr>
                   </table>
                </td>
             </tr>
          </table>
       </body>
    </html>
    
    ';

    mail($to,'Formulaire de contact', $email_body, implode("\r\n", $headers));
    header('Location: contact.php');
}