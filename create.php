<!DOCTYPE html>

<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Demo - Create a new Student</title>
        <meta name="description" content="PHP Demo">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>PHP Demo - Create a new Student</h1>
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">List of Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="create.php">Create a new Student</a>
                    </li>
                </ul>
            </div>
            
            <h2>Create a new Student</h2>
            <form id="stuInfo" name = "stuInfo" method="post" action="create.php">
                <div class="form-text">
                    <label for="stuID">Student ID:</label>
                    <input name="stuID" id="stuID" type="text" required></input>
                </div>
                <div class="form-text">
                    <label for="stuName">Student Name:</label>
                    <input name="stuName" id="stuName" type="text" required></input>
                </div>
                <div class="form-text">
                    <label for="stuSex">Student Sex:</label>
                    <select name="stuSex" id="stuSex">
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                    </select>
                </div>
                <div class="form-text">
                    <label for="stuMark">Student Mark:</label>
                    <input name="stuMark" id="stuMark" type="text" required></input>
                </div>
                <input name="submit" id="submit" type="submit" value="Submit"></input>
            </form>
            <?php
                if (isset($_POST['submit'])) {
                    include('DB.php');
                    $conninfo = 'mysqli://root:@localhost/phpdemo';
                    $db = DB::connect($conninfo);
                    if (DB::isError($db)) {
                        print $db->getMessage();
                        exit;
                    } else {
                        $prep = $db->prepare("INSERT INTO students VALUES(?, ?, ?, ?);");
                        $ID = $_POST['stuID'];
                        $name = $_POST['stuName'];
                        $sex = $_POST['stuSex'];
                        $mark = $_POST['stuMark'];
                        $data = ["$ID", "$name", "$sex", $mark];
                        if ($db->execute($prep, $data)) {
                            $sSex = $sex == 'F' ? 'Female' : 'Male';
                            echo "<p>Add new Student with the following information successfully!</p>
                            <ul>
                                <li><strong>Student ID:</strong> $ID</li>
                                <li><strong>Student Name:</strong> $name</li>
                                <li><strong>Student Sex:</strong> $sSex</li>
                                <li><strong>Student Mark:</strong> $mark</li>
                            </ul>";
                        }
                        
                    }
                    $db->disconnect();
                }
            ?>
        </div>
    </body>
</html>