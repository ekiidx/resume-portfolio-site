<?php

include('header.php'); ?>

<body>
    
<h1>Projects</h1> <?php

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
//$safe_id = SQLite3::escapeString($id);
//$name = sqlite_escape_string($id);
$sql = "SELECT * FROM projects";
//$stmt = $db->prepare( 'SELECT * FROM projects WHERE id = ?');
//$stmt->bind_param('s', $id);
$result = $db->query($sql);

while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
    echo $row['TITLE'] . "<br>"; ?>
    <img src="/assets/img/<?php echo $row['IMG'] ?>"> <?php
    echo $row['CONTENT'] . "<br>";
}

$db->close();

include('footer.php');