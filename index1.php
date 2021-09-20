<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Youtube API</title>
    </head>
    <body bgcolor="#FFFFFF" text="#000000" link="#0000FF">
        <?php
        $api_key = "AIzaSyBYxuU21UwZNGa_iwnZ1vflKXDq48bKaMc";

        $channel_id = "UCFmwEsZeUBPLBLjxQLKCiTg";
        $channel_id_google = "UC_x5XG1OV2P6uZZ5FSM9Ttw";

        $url_1 = "https://youtube.googleapis.com/youtube/v3/playlists"
                . "?part=snippet,contentDetails,status"
                . "&channelId=" . $channel_id
                . "&maxResults=25"
                . "&key=" . $api_key;

        $url_playlists = "https://youtube.googleapis.com/youtube/v3/channelSections?"
                . "part=snippet"
                . "&channelId=UCFmwEsZeUBPLBLjxQLKCiTg"
                . "&key=AIzaSyBYxuU21UwZNGa_iwnZ1vflKXDq48bKaMc";
        $url = "https://youtube.googleapis.com/youtube/v3/videos?"
                . "part=status"
                . "&id=YlimglzQ6Sk"
                . "&key=AIzaSyBYxuU21UwZNGa_iwnZ1vflKXDq48bKaMc";
        //$url = "https://youtube.googleapis.com/youtube/v3/search?part=snippet,contentDetails&channelId=UCFmwEsZeUBPLBLjxQLKCiTg&key=AIzaSyBYxuU21UwZNGa_iwnZ1vflKXDq48bKaMc";
        $s_channel = file_get_contents($url_1);
        $s_list = file_get_contents($url_playlists);
        $s = file_get_contents($url);
        ?>
        <pre><?= $s_channel ?></pre>
        <hr />
        <pre><?= $s_list ?></pre>
        <hr />
        <pre><?= $s ?></pre>

    </body>
</html>