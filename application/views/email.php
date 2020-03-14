
<!-- <div id="page-wrapper">

<!DOCTYPE html>
<html>
    <head>
        <title>Send Email</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

     <table width="600" align="center" border="1" cellspacing="5" cellpadding="5"

        <div>


            <h3 align="center">Use the form below to send email</h3>
            <form method="post" class="horizontal" action="<?=base_url('Settings/send')?>" enctype="multipart/form-data">
               <tr><td> <input type="email" id="to" name="to" placeholder="Receiver Email"></tr></td>
                <br><br>

                <tr><td width="230"><input type="text" id="subject" name="subject" placeholder="Subject"></td></tr>
                <br><br>
                <tr><td>
                <textarea rows="6" id="message" name="message" placeholder="Type your message here"></textarea>
                <br><br>
            </td></tr>
                <tr><td>
                <input type="submit" value="Send Email" />
            </tr></td>
            </form>
        </div>
    </table>
    </body>
</html>
</div>
 -->
<!DOCTYPE html>
<html>

  <head> 
  <title> Send Email Codeigniter </title>
  </head>
  <body>
 <?php
  echo $this->session->flashdata('email_sent');
 echo form_open('/Settings/email1');
 ?>
 <input type = "email" name = "email" required />
 <input type = "submit" value = "SEND MAIL">
 <?php
 echo form_close();
 ?>
 </body>
 </html>
