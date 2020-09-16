<?php
if(isset($_POST['submit_member']))
{
    $mem = $_POST['SIZE'];
}
else{
    echo "error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- external css  -->
    <link rel="stylesheet" href="css/form_style.css">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container pt-2 shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row">
            <form class="p-4" method="post" action="store_detail.php">
                <div class="card-heading text-center">
                    <h1 class="title pb-2">Registration</h1>
                    <hr>
                </div>
                <div class="form-group row">
                    <label for="startidea" class="col-sm-4 col-form-label">Startup Idea</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control rounded-pill" name="startidea" placeholder="Startup Idea" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="startdesc" class="col-sm-4 col-form-label">Startup Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control rounded-pill" name="startdesc" placeholder="Startup Description" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="startdesc" class="col-sm-4 col-form-label">Leader ID</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control rounded-pill" name="leaderid" placeholder="Leader ID" required>
                        <small class="form-text text-muted">Please enter student ID of the Institute(VNIT).</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="startdesc" class="col-sm-4 col-form-label">Leader Roll number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control rounded-pill" name="leaderrollno" placeholder="Leader Roll number" required>
                        <small class="form-text text-muted">Please enter Roll number of the Institute(VNIT).</small>
                    </div>
                </div>
                <?php
                    for($i=1; $i<=$mem; $i++):
                ?>
                <br>    
                    <div class="form-group row">
                        <?php echo "Team member " . $i; ?>
                        <input class="form-control rounded-pill" type="text" name="name[]" placeholder="Enter Name">
                        <input class="form-control rounded-pill mt-2" type="text" name="age[]" placeholder="Enter Phone Number">
                        <input class="form-control rounded-pill mt-2" type="text" name="job[]" placeholder="Enter Email">
                    </div>
                <?php endfor; ?>
                <center>
                <button class="btn btn-primary rounded-pill align-items-center" type="submit" name="submit_row" value="SUBMIT">SUBMIT</button>
                </center>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>