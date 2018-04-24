<!DOCTYPE html>
<html>
    <head>
        <title>
        Stats Fornite
        </title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            $curl        = curl_init();
            $playerName  = $_GET['username'];
			$plat  		 = $_GET['platform']; 
            $apiKey      = "gtl12fdZRfs1uX7DF9gA";

            $encoded_url = "https://fortnite.y3n.co/v2/player/" . $playerName;
            curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Key: " . $apiKey));
            curl_setopt($curl, CURLOPT_URL, $encoded_url);
            curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            $result     =  json_decode(curl_exec($curl), true);
            
            curl_close($curl);
			echo "<pre>";
			print_r($result['br']['stats'][$plat]);
			echo "</pre>"
        ?>
    </body>
</html>