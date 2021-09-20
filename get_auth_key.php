<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML>
<html>

    <head>
        <style type="text/css">
            .danstyle {}
            .danstyle label {
                display: inline-block;
                width: 100px;
            }
            .danstyle input {
                width: 500px;
            }
        </style>
    </head>

    <body>

        <form class="danstyle" target="_blank" action="https://accounts.google.com/o/oauth2/v2/auth" method="get">
            <p><label>scope:</label><input type="text" name="scope" value="https://www.googleapis.com/auth/calendar.settings.readonly https://www.googleapis.com/auth/drive.file https://www.googleapis.com/auth/drive.appdata"></p>
            <p><label>client_id:</label><input type="text" name="client_id" value="1043317717582-spu6uac6ajeu4kht399nabq41jrh4nub.apps.googleusercontent.com"></p>
            <input type="hidden" name="redirect_uri" value="urn:ietf:wg:oauth:2.0:oob">
            <input type="hidden" name="response_type" value="code">
            <p><input style="width:100px;" type="submit" value="Get code"></p>
        </form>
        <br>
        <form class="danstyle" action="https://oauth2.googleapis.com/token" enctype="application/x-www-form-urlencoded" method="post">
            <p><label>code:</label><input style="background-color: #90ee90;" type="text" name="code"></p>
            <p><label>client_id:</label><input type="text" name="client_id" value="1043317717582-spu6uac6ajeu4kht399nabq41jrh4nub.apps.googleusercontent.com"></p>   
            <p><label>client_secret:</label><input type="text" name="client_secret" value="1dEoQ9sdUgsqcQahYz3nP9dk"></p>
            <input type="hidden" name="redirect_uri" value="urn:ietf:wg:oauth:2.0:oob">
            <input type="hidden" name="grant_type" value="authorization_code">
            <p><input style="width:100px;" type="submit" value="Get tokens"></p>
        </form>

    </body>

</html>