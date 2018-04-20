<h1>This is a parsing script!</h1>

<p>A simple script was designed to parse a webpage/local content and generate .json file to use it for fixtures purpose.</p>

<ul>
<li><b>parse.php</b> - the script logic file</li>
<li><b>file.json</b> - generated .json file example</li>
<li><b>posts folder</b> - contains files to test the script locally</li>
<ul>

<p><h3>Example 1. Webpage content parsing.</h3></p>

<p>Uncomment $url variable and insert the valid url adress.</p> 

    $url = file_get_contents('https://raw.githubusercontent.com/tweedegolf/tweedegolf.github.io/master/_posts/2015-01-19-oculus-rift.md');

<h3>Example 2. Local files parsing.</h3>

<p>Provide a valid path yo you files.</p>

    foreach (glob("your/path/is/here/*.md") as $filename) {
    
        //insert the right variable into $url
        $url = file_get_contents($filename);
    }