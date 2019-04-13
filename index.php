<?php
    include_once('vendor/autoload.php');
    include_once('config.php');
    include_once('system/db/' . DB_DRIVER . '.php');
    include_once('system/db.php');

    $np = new \LisDev\Delivery\NovaPoshtaApi2(
        '53a96e99a18b9ce734dfc9e061eae485',
        'ru',
        FALSE,
        'curl'
    );

    $db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

    if (isset($_GET['r'])) {
        switch ($_GET['r']) {
            case 'regions':
                include("regions.php");
            break;
            case 'cities':
                include("cities.php");
            break;
            default:
                echo "Pleas write route";
            break;
        }
    }