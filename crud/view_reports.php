<?php

include '../db.php';
include 'navbar.php';

//nclude '../db.php';

$sql = "SELECT * FROM weekly_reports";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// foreach ($rows as $row) {
//     print_r($row);
//     echo "<br>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Reports</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h2 class="mb-4">Weekly Progress Reports</h2>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Week Ending</th>
                    <th>Tasks Completed</th>
                    <th>Tasks In Progress</th>
                    <th>Next Week Tasks</th>
                    <th>Problems</th>
                    <th>Supervisor Comments</th>
                    <th>Actions</th>
                    <th>Actions</th>

                </tr>
            </thead>

            <tbody>

                <?php foreach ($rows as $row) { ?>

                    <tr>
                       
                        <td><?php echo $row['report_id']; ?></td>
                        <td><?php echo $row['week_ending']; ?></td>
                        <td><?php echo $row['tasks_completed']; ?></td>
                        <td><?php echo $row['tasks_in_progress']; ?></td>
                        <td><?php echo $row['next_week_tasks']; ?></td>
                        <td><?php echo $row['problems_challenges']; ?></td>
                        <td><?php echo $row['supervisor_comments']; ?></td>
                    
                        <td> 
                            <a href="delete_report.php?id=<?php echo $row['report_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                            &nbsp; &nbsp; &nbsp;
                        </td>
                        
                        <td> 
                            <a href="edit_report.php?id=<?php echo $row['report_id']; ?>" class="btn btn-danger btn-sm">Edit</a>
                        </td>


                         
                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>

</body>

</html>