<?php
$file_name = 'zinute.txt';
if(!file_exists($file_name)) {
        file_put_contents($file_name, '');
    }
function check_input($input){
    if(empty(trim($input))) {
        die('Fill all fields properly');
    } else {
        return htmlspecialchars($input);
    }
}
function add_entry($username, $message, $file_name) {
    $get_content = file_get_contents($file_name);
    $time = date('Y-m-d h:i A',time());
    $content = '<div class="container border rounded p-3 bg-light"><b>'.$username.'</b><span class="text-muted"> ('.$time.')</span>'.'<p class="text-dark">'.$message."</p></div>\n".$get_content;
    file_put_contents($file_name, $content);
}
if(isset($_POST['username']) && isset($_POST['message'])){
    $username=check_input($_POST['username']);
    $message=check_input($_POST['message']);
    add_entry($username, $message, $file_name);
}
$final_content = file_get_contents($file_name);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
<div class="container text-center">
    <h1></h1>
    <span class="bg-light p-2">
        <?php echo substr_count($final_content, 'container border rounded p-3');?> Pranesimai
    </span>
    <button class="btn btn-success" data-toggle="modal" data-target="#addMessage">Naujas pranesimas</button>
    <div class="row mt-2">
        <div class="col-md-6 offset-md-3 col-sm-12">
            <?php
            echo $final_content;
            ?>
        </div>
    </div>
</div>
<div class="modal fade" id="addMessage" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Parasyk zinute</h3>
            </div>
            <div class="modal-body">
                <div class="container border rounded bg-light p-2">
                    <form action="" method="post" class="form">
                        <input type="text" class="form-control mb-1" name="username" placeholder="vadas" required="">
                        <textarea name="message" id="" cols="10" rows="5" class="form-control" placeholder="zinute" required=""></textarea>
                        <input type="submit" class="btn btn-danger mt-1" value="Issaugoti">
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>