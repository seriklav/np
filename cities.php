<?php
    global $db;
    global $np;

    $result = $np->getCities();

    $db->query("TRUNCATE TABLE " . DB_PREFIX . "np_cities");

    if ($result['success']) {
        foreach ($result['data'] as $city) {
            $db->query("INSERT INTO " . DB_PREFIX . "np_cities SET 
                                `Description` = '" . $db->escape($city['Description']) . "',
                                DescriptionRu = '" . $db->escape($city['DescriptionRu']) . "',
                                Ref = '" . $db->escape($city['Ref']) . "',
                                Delivery1 = '" . $db->escape($city['Delivery1']) . "',
                                Delivery2 = '" . $db->escape($city['Delivery2']) . "',
                                Delivery3 = '" . $db->escape($city['Delivery3']) . "',
                                Delivery4 = '" . $db->escape($city['Delivery4']) . "',
                                Delivery5 = '" . $db->escape($city['Delivery5']) . "',
                                Delivery6 = '" . $db->escape($city['Delivery6']) . "',
                                Delivery7 = '" . $db->escape($city['Delivery7']) . "',
                                Area = '" . $db->escape($city['Area']) . "',
                                SettlementType = '" . $db->escape($city['SettlementType']) . "',
                                IsBranch = '" . $db->escape($city['IsBranch']) . "',
                                PreventEntryNewStreetsUser = '" . ($city['PreventEntryNewStreetsUser'] ? $db->escape($city['PreventEntryNewStreetsUser']) : '') . "',
                                Conglomerates = '" . $db->escape($city['Conglomerates']) . "',
                                CityID = '" . (int)$city['CityID'] . "',
                                SettlementTypeDescription = '" . $db->escape($city['SettlementTypeDescription']) . "',
                                SettlementTypeDescriptionRu = '" . $db->escape($city['SettlementTypeDescriptionRu']) . "',
                                SpecialCashCheck = '" . $db->escape($city['SpecialCashCheck']) . "'");
        }
    }