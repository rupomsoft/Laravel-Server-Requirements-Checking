<?php
include 'Laravel_Requirements.php';

$CurrentConfig=CurrentConfig();


if(isset($_POST['submit'])){

    $LaravelVersion= $_POST['LaravelVersion'];
    if($LaravelVersion=="Laravel 7x"){
        $SelectedConfig=$Laravel7xRequire;
    }
    elseif ($LaravelVersion=="Laravel 6x"){
        $SelectedConfig=$Laravel6xRequire;
    }
    elseif ($LaravelVersion=="Laravel 5.8"){
        $SelectedConfig=$Laravel58Require;
    }
    elseif ($LaravelVersion=="Laravel 5.7"){
        $SelectedConfig=$Laravel57Require;
    }
    elseif ($LaravelVersion=="Laravel 5.6"){
        $SelectedConfig=$Laravel56Require;
    }
    elseif ($LaravelVersion=="Laravel 5.5"){
        $SelectedConfig=$Laravel55Require;
    }

}
else{
    $SelectedConfig=$Laravel7xRequire;
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
                <select name="LaravelVersion" class="form-control form-control-sm">
                    <?php for($x = 0; $x <$VersionArrLength; $x++){ ?>
                        <option><?php echo $LaravelVersions[$x]; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <input class="btn btn-sm btn-danger btn-block mt-2" type="submit" name="submit" value="Check"/>
            </form>
        </div>
        <div class="col-md-8">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Properties</th>
                        <th>Required</th>
                        <th>Current</th>
                    </tr>
                </thead>

                <tbody>
                <tr>
                    <td>PHP Version</td>
                    <td><?php echo $SelectedConfig['phpversion']?></td>
                    <td><?php echo $CurrentConfig['phpversion']?></td>
                </tr>

                <tr>
                    <td>BC Math Extension</td>
                    <td><?php echo $SelectedConfig['bcmath']; ?></td>
                    <td><?php echo $CurrentConfig['bcmath']=true  ? 'True' : 'False';  ?></td>
                </tr>

                <tr>
                    <td>C-Type Extension</td>
                    <td><?php echo $SelectedConfig['ctype']; ?></td>
                    <td><?php echo $CurrentConfig['ctype'] =true  ? 'True' : 'False'; ?></td>
                </tr>

                <tr>
                    <td>File Info Extension</td>
                    <td><?php echo $SelectedConfig['fileInfo']; ?></td>
                    <td><?php echo $CurrentConfig['fileInfo']=true  ? 'True' : 'False';  ?></td>
                </tr>

                <tr>
                    <td>JSON Support</td>
                    <td><?php echo $SelectedConfig['json'];?></td>
                    <td><?php echo $CurrentConfig['json']=true  ? 'True' : 'False';  ?></td>
                </tr>

                <tr>
                    <td>MB String Extension</td>
                    <td><?php echo $SelectedConfig['mbString'];  ?></td>
                    <td><?php echo $CurrentConfig['mbString']=true  ? 'True' : 'False';  ?></td>
                </tr>

                <tr>
                    <td>Open SSL</td>
                    <td><?php echo $SelectedConfig['openSSL'];  ?></td>
                    <td><?php echo $CurrentConfig['openSSL']=true  ? 'True' : 'False';  ?></td>
                </tr>

                <tr>
                    <td>Tokenizer Support</td>
                    <td><?php echo $SelectedConfig['tokenizer'];  ?></td>
                    <td><?php echo $CurrentConfig['tokenizer']=true  ? 'True' : 'False';  ?></td>
                </tr>

                <tr>
                    <td>XML Extension</td>
                    <td><?php echo $SelectedConfig['xml']; ?></td>
                    <td><?php echo $CurrentConfig['xml']=true  ? 'True' : 'False'; ?></td>
                </tr>

                <tr>
                    <td>PDO Extension</td>
                    <td><?php echo $SelectedConfig['pdo'];  ?></td>
                    <td><?php echo $CurrentConfig['pdo']=true  ? 'True' : 'False';  ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>



