<?php

function displayTemplate($template) // functie om template aan te roepen
{
    $path = "views"; // path waar de templates staan

    return include($path . "/" . $template); // return de data in de template
}

function error() {
    displayTemplate('error.html'); // displayed de error template
    header("HTTP/1.1 404 Not Found"); // geeft 404 als status
}