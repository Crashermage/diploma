<?php
    $mysql = new mysqli('172.20.8.5:3306', 'st9903_11', 'pwd9903_11', 'st9903_11');

    $sqlIDs = "SELECT id FROM words_slang";
    $idResult = $mysql->query($sqlIDs);
    $idArray = array();

    while ($row = $idResult->fetch_assoc()) {
        $idArray[] = $row['id'];
    }

    $idResult->free();

    $randomIndex = array_rand($idArray);
    $randomId = $idArray[$randomIndex];
    

    $sql = "SELECT word, definition FROM words_slang WHERE id = '$randomId'";

    if ($result = $mysql->query($sql)) {
        $rowsCount = $result->num_rows;
        $data = array();

        foreach ($result as $row) {
            $data[] = array(
                'word' => $row['word'],
                'definition' => $row['definition']
            );
        }

        $result->free();
    }

    echo json_encode($data);
?>