<?php


namespace App\Services;


use App\Rss;
use DateTime;

class RssService
{
    public static function getData()
    {
        $data = file_get_contents('https://www.tvnet.lv/rss');
        $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        return $array = json_decode($json, true);
    }

    public function update()
    {
        $array = self::getData();

        for ($i = 0; $i < count($array['channel']['item']); $i++) {

            $items = $array['channel']['item'][$i];
            $pubDate = strtotime($array['channel']['item'][$i]['pubDate']);
            $date = DateTime::createFromFormat('U', $pubDate);
            $enclosure = $items['enclosure']['@attributes']['url'];

            $title = $items['title'];

            $search = Rss::where('title', $title)->count();

            if ($search === 0) {
                Rss::create([
                    'title' => $items['title'],
                    'description' => $items['description'],
                    'link' => $items['link'],
                    'date' => $date,
                    'author' => $items['author'],
                    'enclosure' => $enclosure,
                ]);
            }


        }
    }

}
