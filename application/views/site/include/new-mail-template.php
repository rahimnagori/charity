<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
    </style>
  </head>
  <body>
    <div class="tablll" style="max-width: 600px; margin: 0 auto; width: 100%;">
      <table cellpadding="0" style=" border-collapse: collapse; width:100%; font-family:Arial; font-size: 14px; color: #333;">
        <tbody>
          <tr>
            <td style="padding:10px;background-color:#000; text-align: center;" >
              <img src="img/logo_white.png">
            </td>
          </tr>
          <tr>
            <td style="padding:15px 10px;">
              <?=$body;?>
              <p style="margin:0;padding:10px 0px">Kind regards,<br>The <?=$PROJECT;?> Team</p>
            </td>
          </tr>
          <tr>
            <td style="font-size:14px;padding:10px;background-color:#000; text-align: center; color: #fff;" >
              <div style="margin:0;padding:0;color:#fff;font-size:13px">Copyright © <?=date("Y");?> <a href="'.site_url().'" style="color:white;text-decoration:none"> <?=$PROJECT;?> </a>. All rights reserved.</div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>