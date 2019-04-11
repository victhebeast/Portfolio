<?php declare(strict_types=1);
header("Link: </css/main.css>; as=style; rel=preload", false);
header("Link: </css/light.css>; as=style; rel=preload", false);
header("Link: </css/dark.css>; as=style; rel=preload", false);
header("Link: <https://code.jquery.com/jquery-3.4.0.min.js>; as=script; rel=preload; crossorigin", false);
header("Link: </js/darkMode.js>; as=script; rel=preload", false);
?>