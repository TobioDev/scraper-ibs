<?php
include('html_parser/simple_html_dom.php');

function scraping_IMDB($url) {
    // create HTML DOM
    $html = file_get_html($url);

    // foreach ($html->find('div.s-search-results img',0) as $immagine) {

    // 	// echo '<img src="'.$immagine->src.'"/>';
    // 	echo 'ciao';
    // }

    //IBS

    // $ret = $html->find('li.search-list-item div.cover img');
    // echo count($ret);
    // echo gettype($ret);
    // foreach ($ret as $img) {
    // 	echo '<img src="'.$img->src.'"/>';
    // }

    // $ret = $html->find('li.search-list-item div.title');
    // foreach ($ret as $img) {
    // 	echo $img->plaintext;
    // }

    //ANIME

    //LISTA LETTERE

    // $ret = $html->find('a.lettera-archivio');
    // foreach ($ret as $link_item) {

    //     echo '<a href="'.$link_item->href.'">'.$link_item->plaintext.'</a><br>';
    //     // echo $link_item->href.'<br>' ;

    // }

    //LISTA ANIME PER LETTERA


    // $ret = $html->find('div.info-archivio a.badge-light');
    // echo count($ret);
    // foreach ($ret as $link_item) {
    //     echo '<a href="'.$link_item->href.'">'.$link_item->plaintext.'</a><br>';
    //     // echo $link_item->href.'<br>' ;

    // }


    //LISTA EPISODI

    //echo $html;

    // $ret = $html->find('a.bottone-ep');
    // echo count($ret);
    // foreach ($ret as $link_item) {
    //     echo '<a href="'.$link_item->href.'">'.$link_item->plaintext.'</a><br>';
    //     // echo $link_item->href.'<br>' ;

    // }



    // echo $html;
    

    // // get title
    // $ret['Title'] = $html->find('', 0)->src;

    // // get rating
    // $ret['Rating'] = $html->find('div[class="general rating"] b', 0)->innertext;

    // // get overview
    // foreach($html->find('div[class="info"]') as $div) {
    //     // skip user comments
    //     if($div->find('h5', 0)->innertext=='User Comments:')
    //         return $ret;

    //     $key = '';
    //     $val = '';

    //     foreach($div->find('*') as $node) {
    //         if ($node->tag=='h5')
    //             $key = $node->plaintext;

    //         if ($node->tag=='a' && $node->plaintext!='more')
    //             $val .= trim(str_replace("\n", '', $node->plaintext));

    //         if ($node->tag=='text')
    //             $val .= trim(str_replace("\n", '', $node->plaintext));
    //     }

    //     $ret[$key] = $val;
    // }
    
    // // clean up memory
    // $html->clear();
    // unset($html);

    // return $ret;
}


// -----------------------------------------------------------------------------
// test it!
scraping_IMDB('https://www.animesaturn.com/anime/Act-Addict-Actors-Season-Spring--Summer');

?>