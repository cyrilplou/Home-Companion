<?php
function redirectToUrl(string $url):never
{
    header("location: {$url}");
    exit();
};

