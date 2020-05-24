<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>File upload</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <h1>File upload form</h1>
            <form action="upload_file.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file">Upload your file:</label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>