<?php
include 'crud/navbar.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h3> Weekly Progress Report</h3>
        <form action="insert.php" method="POST">

            <div class="mb-3">
                <label for="weekEnding" class="form-label">
                    Week Ending *
                </label>
                <input type="date" class="form-control" id="weekEnding" name="weekEnding">
            </div>

            <div class="mb-3">
                <label for="tasksCompleted" class="form-label">
                    Tasks Completed *
                </label>
                <textarea class="form-control" id="tasksCompleted" name="tasksCompleted" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="tasksInProgress" class="form-label">
                    Tasks in Progress *
                </label>
                <textarea class="form-control" id="tasksInProgress" name="tasksInProgress" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="nextWeekTasks" class="form-label">
                    Next Week's Tasks *
                </label>
                <textarea class="form-control" id="nextWeekTasks" name="nextWeekTasks" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="problems" class="form-label">
                    Problems / Challenges *
                </label>
                <textarea class="form-control" id="problems" name="problems" rows="4" ></textarea>
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">
                    Field Supervisor's Comments
                </label>
                <textarea class="form-control" id="comments" name="comments" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Submit Report
            </button>


        </form>

    </div>

</body>

</html>