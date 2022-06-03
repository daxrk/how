<html style="overflow-x: hidden;">
    <head>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
</head>
    <body style="text-align: center;background-image: url(https://1.bp.blogspot.com/-4fNjX5dumrg/YMOd6coTuWI/AAAAAAAABG0/uWzJXJQCi2YyC0YSwsOMyRCiBfVHFUwMgCLcBGAsYHQ/s960/pngtree-simple-creative-background-design-in-the-sky-backgroundcartoonlovelyplanetstarry-skyillustration-backgroundadvertising-image_58694.jpg);">
    <div style="
    min-width: -webkit-fill-available;
    min-width: -moz-available;
">
    <form style="text-align: center;" action="index.php" method="get">
    <div><input style="background: #353434;
    padding: 9px;
    border-radius: 5px;
    color: white;
    margin-bottom: 0px;
    margin-top: 10px;
    border: 0;
    width: 90%;" type="text" name="name" placeholder="cimahouse لينك"></div><br>
    <input style="width: 60%;
    text-align: center;
    background-color: #71ceb4;
    border-radius: 5px;
    color: black;
    padding: 9px;
    cursor: pointer;
    margin: auto;
    border: 0;
    " type="submit">
    </form>
    <?php
    $opp = $_GET["name"];
    $op = $_GET["name1"];
include("simple_html_dom.php");
$html = file_get_html($opp);

?>
<?php
echo "<br><span style='line-height: 3;color:white;'>" . $html->find('.movie_title h1',0)->plaintext . "</span>";
$match = array();

foreach($html->find('iframe') as $element)
       echo '<iframe allow="accelerometer;encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" marginheight="0" marginwidth="0" name="myframe" scrolling="no" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" sandbox="allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation" frameborder="0" src="https://eg.egybest.bid'. $element->src . '" width="100%" height="420" frameborder="0"></iframe>';

?>

    </body>
    </html>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-6MD7EJSEMP"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-6MD7EJSEMP');</script>
<script type='text/javascript' src='https://www.cimahouse.club/wp-content/themes/ch2020/assets/js/lazyload.min.js' id='lazyload-js-js'></script>
<script type='text/javascript' src='https://www.cimahouse.club/wp-content/themes/ch2020/assets/js/main.js' id='mainjs-js'></script>
<script type='text/javascript' src='https://www.cimahouse.club/wp-content/themes/ch2020/assets/js/single.js' id='singlejs-js'></script>