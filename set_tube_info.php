<!DOCTYPE html>
<html>
    <?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    if (!file_exists($file = __DIR__ . '/vendor/autoload.php')) {
        throw new \Exception('please run "composer require google/apiclient:~2.0" in "' . __DIR__ . '"');
    }
    require_once __DIR__ . '/vendor/autoload.php';
    define('CREDENTIALS_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'myyoutube-324808-347c553b5cfc.json');
    $c = new Google_Client();
    $c->setApplicationName('MyYoutube');
    $c->setScopes(['https://www.googleapis.com/auth/youtube.force-ssl',]);
    $c->setAuthConfig(CREDENTIALS_PATH);
    $c->setAccessType('offline');
    $authURL = $c->createAuthUrl();
    printf("Open this link in your browser:\n%s\n", $authUrl);
    print('Enter verification code: ');
    $authCode = trim(fgets(STDIN));
    ?>
    <span style="color: #FF0000"></span>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <hr />
        <pre><?= CREDENTIALS_PATH ?></pre>
        <hr />
    </body>
</html>
