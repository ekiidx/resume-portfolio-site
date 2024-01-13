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
} ?>

<h1>Tags</h1> <?php

// $id is being passed by the router
$safe_id = SQLite3::escapeString($id);
//$name = sqlite_escape_string($id);
$sql = "SELECT * FROM tags";
//$stmt = $db->prepare( 'SELECT * FROM projects WHERE id = ?');
//$stmt->bind_param('s', $id);
$result = $db->query($sql);

    while($row = $result->fetchArray(SQLITE3_ASSOC) ) { ?>
       <a class="circle-btn" href="/tags/<?php echo $row['TAG']; ?>"><?php echo $row['TAG']; ?></a> <?php
    }

$db->close();

include('footer.php');