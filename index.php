<!DOCTYPE html>

<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Demo - List of Students</title>
        <meta name="description" content="PHP Demo">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>PHP Demo - List of Students</h1>
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">List of Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create a new Student</a>
                    </li>
                </ul>
            </div>
            
            <h2>List of Students</h2>
            <?php
            include('DB.php');
            $conninfo = 'mysqli://root:@localhost/phpdemo';
            $db = DB::connect($conninfo);
            if (DB::isError($db)) {
                print $db->getMessage();
                exit;
            } else {
                $result = $db->query("SELECT * FROM students;");
            ?>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Mark</th>
                </tr>
                <?php
                while ($row = $result->fetchRow(DB_FETCHMODE_ASSOC)) {
                    $ID = $row['studentID'];
                    $name = $row['studentName'];
                    $sex = $row['studentSex'] == 'F' ? 'Female':'Male';
                    $mark = $row['studentMark'];
                echo "
                <tr>
                    <td>$ID</td>
                    <td>$name</td>
                    <td>$sex</td>
                    <td>$mark</td>
                </tr>";
                }
                $result->free();
            }
                    $db->disconnect();
                ?>
            </table>
        </div>
    </body>
</html>