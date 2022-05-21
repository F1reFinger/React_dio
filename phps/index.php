<html>
    <head>
        <title>Meu primeiro site em php!</title>
        <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style type = "text/css">
            .linha{
                font-weight: italic;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>
    </head>
    <body>
        <?php
            for($i = 0; $i < 10; $i++){
                print("<span class=\"linha\">linha número " .$i . "</span><br />");
            }
        ?>
    </body>
</html>