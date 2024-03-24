<?php
 function mailAdmin_Exl($adminemail)
{

    $xlsfilename = 'record.xlsx';
    $pathxls = '../uploads';
    // $PDFfile = $path . "/" . $PDFfilename;
    $xlsfile = $pathxls . "/" . $xlsfilename;

    $subject = 'All Submitted data in Excel : ';
    $message = 'Data that is submitte on online database in Excel Form.';



    $xlscontent = file_get_contents($xlsfile);
    $xlscontent = chunk_split(base64_encode($xlscontent));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: OFFICE <contact@some.org>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;


    // attachment

    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $xlsfilename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $xlscontent . $eol;

    $body .= "--" . $separator . "--";
    return mail($adminemail, $subject, $body, $headers);
}

 function mailUser_pdf($email, $firname, $adminemail)
{
    $filename = $firname . 'Application.pdf';
    $path = '../uploads/' . $email;
    $file = $path . "/" . $filename;

    $subject = 'Thank you for submiting your application.';
    $message = 'Thank you for submitting your application form. We will inform you shortly about the further procedure. You\'ll find your attached reference copy for your application form at the end. Any help, please contact  ' . $adminemail . ".\r\n\r\n" . 'God Bless!';

    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: OFFICE <contact@some.org>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";
    $mailinfo = mail($email, $subject, $body, $headers);
    $content = $body = null;
    gc_collect_cycles();

    return $mailinfo;
}


 function mailAdmin_pdf()
{
}

 function mailAdmin_AllPDF($adminemail)
{

    $path = 'uploads/';


    ///Scan For all submited files.
    $files = (scandir($path));



    $subject = 'All Application that are submitted : ';
    $message = 'Applicants all PDF that is generated after a correction.';

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: OFFICE <contact@some.org>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;


    for ($a = 2; $a < sizeof($files); $a++) {


        $PDFfile = $path . "/" . $files[$a];

        $content = file_get_contents($PDFfile);
        $content = chunk_split(base64_encode($content));

        $body .= "--" . $separator . $eol;
        $body .= "Content-Type: application/octet-stream; name=\"" . $files[$a] . "\"" . $eol;
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment" . $eol;
        $body .= $content . $eol;
        $PDFfile = "";
        $content = "";
    }
    // attachment

    $body .= "--" . $separator . "--";
    return mail($adminemail, $subject, $body, $headers);
}
?>