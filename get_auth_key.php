<!DOCTYPE html>
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
            <p>
                <label>scope:</label>
                <input type="text"
                       name="scope"
                       value="https://www.googleapis.com/auth/youtube">
            </p>
            <p>
                <label>
                    client_id:
                </label>
                <input type="text" name="client_id"
                       value="462893174632-qso1qk7b83bn78l5s2niet18trctiegq.apps.googleusercontent.com">
            </p>
            <input type="hidden" name="redirect_uri" value="urn:ietf:wg:oauth:2.0:oob">
            <input type="hidden" name="response_type" value="code">
            <p>
                <input style="width:100px;" type="submit" value="Get code">
            </p>
        </form>
        <hr />
        <form class="danstyle" action="https://oauth2.googleapis.com/token"
              enctype="application/x-www-form-urlencoded" method="post">
            <p>
                <label>code:</label>
                <input style="background-color: #90ee90;" type="text" name="code">
            </p>
            <p>
                <label>client_id:</label>
                <input type="text" name="client_id"
                       value="462893174632-qso1qk7b83bn78l5s2niet18trctiegq.apps.googleusercontent.com">
            </p>
            <p>
                <label>client_secret:</label>
                <input type="text" name="client_secret" value="lEhtqOikIJQ67wQ6sLYIwczk">
            </p>
            <input type="hidden" name="redirect_uri" value="urn:ietf:wg:oauth:2.0:oob">
            <input type="hidden" name="grant_type" value="authorization_code">
            <p>
                <input style="width:100px;" type="submit" value="Get tokens">
            </p>
        </form>

    </body>

</html>