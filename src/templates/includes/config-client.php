<?php 

define("PATH", $_SERVER['DOCUMENT_ROOT']);

// meta tagi podobne na kilku stronach
$metatags['robots'] = "index, follow";
$metatags['viewport'] = "width=device-width, initial-scale=1.0";


// pobranie aktualnego url-

// $request = $_SERVER['REQUEST_URI'];
$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';
$canonical = $protocol . '://' . $_SERVER['HTTP_HOST'] . $request;

switch($request) {
    case '/':
        $title = "Strona główna";
        $metatags['description'] = "Opis strony głównej";
    break;
    case '/o-nas':
        $title = "O nas";
        $pageTitle = "O nas";
        $metatags['description'] = "Opis meta description podstrony o nas";
    break;
    case '/oferta':
        $title = "Oferta";
        $pageTitle = "Oferta";
        $metatags['description'] = "Opis meta description podstrony oferta";
    break;
    case '/galeria':
        $title = "Galeria";
        $pageTitle = "Galeria";
        $metatags['description'] = "Opis meta description podstrony galeria";
    break;
    case '/kontakt':
        $title = "Kontakt";
        $pageTitle = "Kontakt";
        $metatags['description'] = "Opis meta description podstrony kontakt";
    break;
    default:
        $title = "404";
        $subtitle = "404";
        $pageTitle = "404";
        $metatags['description'] = "Nie ma takiej strony";
        header("HTTP/1.0 404 Not Found");
    break;
}

// aktywny link na podstronach
function getActiveLink($request, $param) {
    if($request == $param) {
        echo "active";
    }
}

?>