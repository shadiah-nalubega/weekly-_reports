<?php

// $data =$_POST;
// var_dump($data);

$weekEnding = $_POST['weekEnding'];
$tasksCompleted = $_POST['tasksCompleted'];
$tasksInProgress = $_POST['tasksInProgress'];
$nextWeekTasks = $_POST['nextWeekTasks'];
$problems = $_POST['problems'];
$comments = $_POST['comments']; 

include 'db.php';

$sql = "INSERT INTO weekly_reports (week_ending, tasks_completed, tasks_in_progress, next_week_tasks, problems_challenges, supervisor_comments) 
        VALUES ('$weekEnding', '$tasksCompleted', '$tasksInProgress', '$nextWeekTasks', '$problems', '$comments')";

if (mysqli_query($conn, $sql)) {  
    $report_id = mysqli_insert_id($conn);//// Get the ID of the newly inserted report
    mysqli_close($conn);// Close the database connection
    header("Location: success.php?id=$report_id");// Redirect to a success page with the report ID as a query parameter
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
    mysqli_close($conn);
}