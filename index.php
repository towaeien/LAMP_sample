<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'otsubo';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);

    $sql = "select * from user;";
    $result = $dbh->query($sql);
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP SAMPLE PAGE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fruir">
            <div class="nav-header">
                <a class="navbar-brand" href="index.html">LAMP SAMPLE PAGE</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotoron-fluid">
        <div class="container">
            <h1 class="display-4">DB Manager </h1>
            <p class="read">LAMP環境を構築し、データベース管理webアプリを作成しています。<br>
            デザインはBootstrapを使用
             </p>
        </div>   
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#select" class="nav-link active" data-toggle="tab">Select</a>
            </li>
            <li class="nav-item">
                <a href="#insert" class="nav-link" data-toggle="tab">Insert</a>
            </li>
            <li class="nav-item">
                <a href="#update" class="nav-link" data-toggle="tab">Update</a>
            </li>
            <li class="nav-item">
                <a href="#delite" class="nav-link" data-toggle="tab">Deleat</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="select">
                <caption>Show User Table</caption>
                <table class="table table-hover mt-2">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($result as $value)
                        <tr>
                            <td><?php echo "$value[id]"; ?></td>
                            <td><?php echo "$value[name]"; ?></td>
                            <td><?php echo "$value[age]"; ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>2</td>
                            <td>test2</td>
                            <td>40</td>
                        </tr>
                   </tbody>
            </div>
                <div class="tab-pane" id="insert">
                    <p>sample tab2</p>
                </div>
                <div class="tab-pane" id="update">
                    <p>sample tab3</p>
                </div>    
                <div class="tab-pane" id="delite">
                    <p>sample tab 4</p>
                </div>
            
        </div>
    </div>
    
</body>
</html>