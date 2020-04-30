<?php
//Website Info

    $webName = "ipublicizenaija";
    $webTitle = "Get the latest news and updates in Nigeria on celebs";
    $webLogo = "img/ipub_logo.png";
    $webKey = "trending news and gossip, blog posts in nigeria, trending news in nigeria";
    $webDesc = "Get the latest nigerian news and updates on celebs, lifestyle, gossips, business, health and more";
    $webUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    function getDomain($url) {
      $result = parse_url($url);
      return $result['scheme']."://".$result['host'];
    }

?>