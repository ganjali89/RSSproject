<!DOCTYPE html>
<html lang="fa-IR">

<head>
    <title>firstnews.ir</title>
    <meta http-equiv="refresh" content="20" />
    <?php
    error_reporting(0);
    //rss bankmarkazi bekhater ndashtane title monaseb (rss title) dar line 20 

    $RSSout_array = ["https://www.sena.ir/rss", "https://www.asriran.com/fa/rss/allnews", "https://fararu.com/fa/rss/allnews", "https://www.irna.ir/rss", "https://www.farsnews.ir/rss", "https://khabarfarsi.com/rss/top", "https://www.tabnak.ir/fa/rss/allnews", "https://www.mehrnews.com/rss", "https://www.iribnews.ir/fa/rss/allnews"];
    foreach ($RSSout_array as $RSSout_url) {
        $RSSout = simplexml_load_file($RSSout_url);
        echo '<h1>' . $RSSout->channel->title . '</h1>';
        echo $RSSout->channel->item->enclosure;
        echo '<h2><a href="' . $RSSout->channel->item->link . '">' . $RSSout->channel->item->title . "</a></h2>";
        echo $RSSout->channel->item->pubDate;
        echo $RSSout->channel->itemdescription;
    }
    $RSSout = simplexml_load_file("https://www.tasnimnews.com/fa/rss/feed/0/7/0/%D8%A2%D8%AE%D8%B1%DB%8C%D9%86-%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1-%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1-%D8%B1%D9%88%D8%B2");
    echo '<h1>' . $RSSout->channel->title . '|خبر گذاری ی تسنیم' . '</h1>';
    echo $RSSout->channel->item->enclosure;
    echo '<h2><a href="' . $RSSout->channel->item->link . '">' . $RSSout->channel->item->title . "</a></h2>";
    echo $RSSout->channel->item->pubDate;
    echo $RSSout->channel->itemdescription;
    ?>
</head>

<body>

</body>

</html>