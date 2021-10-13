<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="./jquery-3.6.0.min.js"></script>
        <title></title>
    </head>
    <body>
        <p><button onclick="document.getElementById('Vsexhu0XNmw').requestFullscreen();">ВИДЕО ВО ВЕСЬ ЭКРАН</button></p>
        
        <iframe id="Vsexhu0XNmw" src="https://www.youtube.com/embed/Vsexhu0XNmw"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                width="560" height="315" frameborder="0"></iframe>
        <hr>
        <!-- ************************************************ -->
        <p><button onclick="document.querySelector('iframe[src=&quot;https://www.youtube.com/embed/Vsexhu0XNmw&quot;]').requestFullscreen();">
                ВИДЕО ВО ВЕСЬ ЭКРАН
            </button>
        </p>

        <!-- Видео из google-диска! -->

        <p><button onclick="document.querySelector('iframe[src=&quot;https://drive.google.com/file/d/____идентификатор_видео____/preview&quot;]').requestFullscreen();">
                ВИДЕО ВО ВЕСЬ ЭКРАН
            </button>
        </p>
        <!-- ************************************************ -->
        <iframe src="https://drive.google.com/file/d/____идентификатор_видео____/preview"
                width="854" height="480"
                allow="autoplay">
        </iframe>

    </body>
</html>
