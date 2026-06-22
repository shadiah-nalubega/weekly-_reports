<?php

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="alert alert-success">
        Weekly report submitted successfully.
    </div>


     <!-- PHP inserts the value of $id into the URL -->    
    <a href="crud/edit_report.php?id=<?php echo $id; ?>" 
       class="btn btn-warning">
       Edit Submitted Report
    </a>

</div>

</body>
</html>