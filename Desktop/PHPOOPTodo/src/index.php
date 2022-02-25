<?php
session_start();
require('classes/tododisplay.php');
$obj2 = new tododisp();
if ($_SESSION['todo'] == false) {
    $_SESSION['todo'] = array();
    $_SESSION['count'] = 1;
}
?>
<html>

<head>
    <title>TODO List</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>TODO LIST</h2>
        <h3>Add Item</h3>
        <form action="functions.php?" method="POST">
            <p>
                <input id="new-task" type="text" name="todo_task"> &nbsp;<input type='submit' value='add' name='action'>
            </p>
        </form>

        <h3>Todo</h3>
        <ul id="incomplete-tasks">

            <?php
            $obj2->incompletedisplay();
            ?>
        </ul>

        <h3>Completed</h3>
        <ul id="completed-tasks">
            <?php
            $obj2->completedisplay();
            ?>
        </ul>
    </div>

</body>

</html>