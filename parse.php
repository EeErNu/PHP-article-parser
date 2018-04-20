<?php

$result = [
    'articles' => [],
];

foreach (glob("posts/*.md") as $filename) {

    // $url = file_get_contents('https://raw.githubusercontent.com/tweedegolf/tweedegolf.github.io/master/_posts/2015-01-19-oculus-rift.md');
    $url = file_get_contents($filename);

    $arr = explode("---", $url);

        $article = [];
        $lines = explode("\n", $arr[1]);
        foreach ($lines as $line) {
            if (strpos($line, ':') !== false) {
                $parts = explode(':', $line);
                $key = trim($parts[0]);
                $value = trim($parts[1]);
        
                $article[$key] = $value;
            }
        }
        $article['content'] = trim($arr[2]);
    
        $result['articles'][] = $article;
    
    file_put_contents('file.json', json_encode($result, JSON_PRETTY_PRINT));
    
}

?>
