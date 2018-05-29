<?php
if(!defined('INCLUDE_CHECK')) {
    include 'connect.php';
    $value = json_decode(file_get_contents("php://input"), true);
    $tableNames = ['walls', 'floor', 'soffit', 'windowsAndDoors', 'dismantling', 'electric', 'plumbing'];
    $SESSION_ID = '4';
    foreach ($value as $item => $l) {
        $arr = $value[$item];
        foreach ($tableNames as $name => $table) {
            if ($item === $tableNames[$name]) {
                $query = "SELECT * FROM " . $tableNames[$name];
                $result = $dbh->query($query);
                $fetchArr = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($arr as $pos => $val) {
                    foreach ($fetchArr as $number => $i) {
                        if ($number === $arr[$pos]) {
                            $mass = $fetchArr[$number];
                            foreach ($mass as $id => $k) {
                                if ($id === 'id') {
                                    $insertQuery = 'INSERT INTO orders VALUES (' . strval($SESSION_ID) . ',' . strval($mass[$id]) . ',"'.$tableNames[$name].'");';
                                    print_r($insertQuery);
                                    $rez = $dbh->prepare($insertQuery);
                                    $rez->execute();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
