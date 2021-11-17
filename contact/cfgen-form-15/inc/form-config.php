<?php
$cfg['debug'] = false;

// This is the email address where you will receive the notification message
$cfg['email_address'] = 'info@albertahometown.com';

$cfg['email_from'] = '';

// The recipients in CC and BCC will receive a copy of the data collected in the form
// Use commas to separate mutiple e-mail addresses (no spaces allowed)
// Example: youraddress1@yourdomain.com,youraddress2@yourdomain.com
$cfg['email_address_cc'] = '';

$cfg['email_address_bcc'] = '';

$cfg['emailsendingmethod'] = 'smtp';

$cfg['smtp_host'] = 'mail.albertahometown.com';

$cfg['smtp_port'] = '465';

$cfg['smtp_encryption'] = 'ssl';

$cfg['smtp_username'] = 'info@albertahometown.com';

$cfg['smtp_password'] = 'h@R!$987';

$cfg['timezone'] = 'Asia/Karachi';

$cfg['form_id'] = '15';

$cfg['form_name'] = 'Alberta HomeTown - Contact Form';

$cfg['form_validationmessage'] = 'Thank you, your message has been sent to us.<br />We will get back to you as soon as possible.';

$cfg['form_errormessage_captcha'] = '';

$cfg['form_errormessage_emptyfield'] = 'This field cannot be left blank';

$cfg['form_errormessage_invalidemailaddress'] = 'Invalid email address';

$cfg['form_errormessage_invalidurl'] = '';

$cfg['form_errormessage_terms'] = '';

$cfg['form_redirecturl'] = '';

$cfg['adminnotification_subject'] = 'New message sent from your website';

$cfg['adminnotification_hideemptyvalues'] = false;

$cfg['adminnotification_hideformurl'] = true;

$cfg['usernotification_inputid'] = 'cfgen-element-15-3';

$cfg['usernotification_activate'] = false;

$cfg['usernotification_insertformdata'] = false;

$cfg['usernotification_format'] = '';

$cfg['usernotification_subject'] = '';

$cfg['usernotification_message'] = '';

$cfg['usernotification_hideemptyvalues'] = false;

$cfg['formvalidation_required'] = array('cfgen-element-15-6','cfgen-element-15-3','cfgen-element-15-4');

$cfg['formvalidation_email'] = array('cfgen-element-15-3');

?>