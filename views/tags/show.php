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
$safe_tag = SQLite3::escapeString($tag);
// $name = sqlite_escape_string($id);
$sql = "SELECT * FROM tags WHERE tag = '{$safe_tag}'";
// $stmt = $db->prepare( 'SELECT * FROM projects WHERE id = ?');
// $stmt->bind_param('s', $id);
$result = $db->query($sql);
// $count = count($result->fetchArray(SQLITE3_ASSOC));

// if ($safe_id >= $count ) { echo '404'; } else { ?>

    <h2><?php echo $tag; ?></h2> <?php

    while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
        $a = $row['PROJECT']; ?>

        <a href="/projects/<?php echo $a ?>"> <?php
        
            $safe_a = SQLite3::escapeString($a);
            $sql_2 = "SELECT * FROM projects WHERE id = '{$safe_a}'";

            $result_2 = $db->query($sql_2);
            
                while($row_2 = $result_2->fetchArray(SQLITE3_ASSOC)) { ?>
                    <a href="/projects/<?php echo $row_2['ID'] ?>"><?php echo $row_2['TITLE']; ?></a>

                    <a href="/projects/<?php echo $row_2['ID'] ?>">
                        <img style="max-width: 10rem; height: auto;" src="/assets/img/<?php echo $row_2['IMG']; ?>">
                    </a> <?php
                } ?>
        
        </a> <?php

    }

$db->close();

include('footer.php');