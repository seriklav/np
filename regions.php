<?php
    global $db;
    global $np;

    $result = $np->getAreas();

    $db->query("TRUNCATE TABLE " . DB_PREFIX . "np_regions");

    if ($result['success']) {
        foreach ($result['data'] as $region) {
            $db->query("INSERT INTO " . DB_PREFIX . "np_regions SET 
                            ref = '" . $db->escape($region['Ref']) . "',
                            areas_center = '" . $db->escape($region['AreasCenter']) . "',
                            description = '" . $db->escape($region['Description']) . "'");
        }
    }