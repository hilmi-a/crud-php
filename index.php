<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <?php require_once 'process.php'; ?>
    <div class="container">
    <div class="row justify-content-center">
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" value="" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">SAVE</button>
            </div>
        </form>
    </div>
    </div>

</body>

</html>