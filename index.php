<html>
<head>
    <title>H1 projekt</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
</head>
<body>
    <div>
        <img src="billeder/banner-about.jpg" id="banner">
        <h1 id="headline">My blog</h1>
    </div>
    <form action="sendData.php" method="post">
        <textarea name="opslag" rows="5" cols="82"></textarea><br>
        <input type="submit" id="submit" value="Opret opslag">
    </form> 
    <iframe src="https://www.instagram.com/p/h8g6qNHnVLZrWNMNck7UozMcDBbodwEHe7nx80/?utm_source=ig_web_options_share_sheet" style="float: right;margin-right: 7vw;"></iframe>
    <iframe id="status" style="display: none;"></iframe>

    <div id="statusContainer"> 
        <?php
            require_once("getData.php");
        ?>
    </div>

    <script>
        function formAction(action)
        {
            var id= action.split("_")[0];
            if(action.split("_")[1] == "slet")
            {
                document.getElementById("status").src="deleteData.php?id="+id;
                document.getElementById("div_"+id).outerHTML="";
            }
        }
    </script>
</body>
</html>
