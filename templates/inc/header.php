<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"><?php echo SITE_TITLE; ?></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a role="presentation" class="p-2 text-dark" href="index.php">Home</a>
                <a role="presentation" class="p-2 text-dark" href="create.php">Create Listing</a>
            </nav>
            <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
        </div>
        <?php displayMessage(); ?>