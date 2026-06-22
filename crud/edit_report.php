<?php

include '../db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM weekly_reports WHERE report_id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Report not found");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Weekly Report</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h3>Edit Weekly Progress Report</h3>
        </div>

        <div class="card-body">

            <form action="update_report.php" method="POST">

                <input type="hidden"
                       name="report_id"
                       value="<?php echo $row['report_id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Week Ending *</label>

                    <input type="date"
                           class="form-control"
                           name="weekEnding"
                           value="<?php echo $row['week_ending']; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tasks Completed *</label>

                    <textarea class="form-control"
                              name="tasksCompleted"
                              rows="4"
                              required><?php echo $row['tasks_completed']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tasks in Progress *</label>

                    <textarea class="form-control"
                              name="tasksInProgress"
                              rows="4"
                              required><?php echo $row['tasks_in_progress']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Next Week's Tasks *</label>

                    <textarea class="form-control"
                              name="nextWeekTasks"
                              rows="4"
                              required><?php echo $row['next_week_tasks']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Problems / Challenges *</label>

                    <textarea class="form-control"
                              name="problems"
                              rows="4"
                              required><?php echo $row['problems_challenges']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Field Supervisor's Comments</label>

                    <textarea class="form-control"
                              name="comments"
                              rows="4"><?php echo $row['supervisor_comments']; ?></textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Update Report
                    </button>

                    <a href="delete_report.php?id=<?php echo $row['report_id']; ?>"
                       class="btn btn-danger"
                       onclick="return confirm('Are you sure you want to delete this report? This cannot be undone.')">
                        Delete Report
                    </a>
                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>