<?php

include('header.php'); ?>

<body> <?php

class MyDB extends SQLite3 {
    function __construct() {
        $this->open('projects.db');
    }
}

$db = new MyDB();
if(!$db) {
    echo $db->lastErrorMsg();
} else {
    //echo "Opened database successfully";
}

// $id is being passed from the router
$safe_id = SQLite3::escapeString($id);
// $name = sqlite_escape_string($id);
$sql = "SELECT * FROM projects WHERE id = '{$safe_id}'";
// $stmt = $db->prepare( 'SELECT * FROM projects WHERE id = ?');
// $stmt->bind_param('s', $id);
$result = $db->query($sql);
// $count = count($result_2->fetchArray(SQLITE3_ASSOC));

// if ($safe_id >= $count ) { echo '404'; } else {

    while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
        $a = $row['ID'];

        $safe_a = SQLite3::escapeString($a);
        $sql_2 = "SELECT * FROM TAGS WHERE project = '{$safe_a}'";
        $result_2 = $db->query($sql_2);

            while($row_2 = $result_2->fetchArray(SQLITE3_ASSOC)) { ?>
                <a class="circle-btn" href="/tags/<?php echo $row_2['TAG']; ?>"><?php echo $row_2['TAG']; ?></a> <?php
            } ?>

        <h1><?php echo $row['TITLE']; ?></h1>
        <img style="max-width: 20rem; height: auto;" src="/assets/img/<?php echo $row['IMG'] ?>">
        <p><?php echo $row['CONTENT']; ?></p> <?php
    }

$db->close();

include('footer.php');