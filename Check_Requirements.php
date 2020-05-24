<?php
include 'Laravel_Requirements.php';

if(isset($_POST['submit'])){
    $GeneralArray=GeneralConfigCheck();
}


?>


<html lang="en">
<head>
    <title>Laravel Server Requirements </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <form action="" method="post">
                <select name="LaravelVersion" class="form-control">
                    <?php for($x = 0; $x <$VersionArrLength; $x++){ ?>
                        <option><?php echo $LaravelVersions[$x]; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <input class="btn btn-danger btn-block mt-4" type="submit" name="submit" value="Check"/>
            </form>
        </div>
        <div class="col-md-8">
            <table class="table">
                <tr><td>BC Math Extension</td><td></td></tr>
                <tr><td>C-Type Extension</td><td></td></tr>
                <tr><td>File Info Extension</td><td></td></tr>
                <tr><td>JSON Support</td><td></td></tr>
                <tr><td>MB String Extension</td><td></td></tr>
                <tr><td>Open SSL</td><td></td></tr>
                <tr><td>Tokenizer Support</td><td></td></tr>
                <tr><td>XML Extension</td><td></td>
                </tr><tr><td>PDO Extension</td><td></td></tr>
            </table>
        </div>
    </div>
</div>

</body>
</html>



