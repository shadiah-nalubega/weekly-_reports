<?php

include '../db.php';

$report_id = $_POST['report_id'];
var_dump($report_id);

$weekEnding = $_POST['weekEnding'];
$tasksCompleted = $_POST['tasksCompleted'];
$tasksInProgress = $_POST['tasksInProgress'];
$nextWeekTasks = $_POST['nextWeekTasks'];
$problems = $_POST['problems'];
$comments = $_POST['comments'];

$sql = "UPDATE weekly_reports
        SET
            week_ending = '$weekEnding',
            tasks_completed = '$tasksCompleted',
            tasks_in_progress = '$tasksInProgress',
            next_week_tasks = '$nextWeekTasks',
            problems_challenges = '$problems',
            supervisor_comments = '$comments'
        WHERE report_id = $report_id";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: ../success.php?id=" . $report_id);
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}