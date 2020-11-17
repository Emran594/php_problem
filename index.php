<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.0/milligram.css">
    <style>
        body{
            margin-top:30px;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 md-offset-60">
                <h2>Taks Manager</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla dolorem nobis nam labore? Nesciunt quibusdam ullam debitis, enim a deleniti!</p>
            </div>
        </div>
        
        <div class="row">
                <div class="column column-60 md-offset-20">
                    <table>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Date</th>
                        <th>Option</th>
                            <tr>
                                <td>1</td>
                                <td>This is My First Job</td>
                                <td>25-08-20</td>
                                <td>Edit/Delete</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>This is Second</td>
                                <td>25-08-20</td>
                                <td>Edit/Delete</td>
                            </tr>
                    </table>
                </div>
            </div>
            <section>
                <div class="row">
                    <div class="column column-60 md-offset-20">
                        <h3>Add Tasks</h3>
                        <form action="tasks.php" method="post">
                            <fieldset>
                            <?php 
                                $added = $_GET['added']??'';
                                if($added){
                                    echo '<p>Task Succesfully added</p>';
                                }
                            ?>
                                <label for="task">Task</label>
                                <input type="text" placeholder="Task Details" id="task" name="task">
                                <label for="date"></label>
                                <input type="date" placeholder="Task Date" id="date" name="date">

                                <input class="button-primary" type="submit" value = "Add Task">
                                <input type="hidden" id= 'action' name="action" value ="add">
                            </fieldset>
                        </form>
                    </div>
                </div>  
            </section>
    </div>


</body>
</html>