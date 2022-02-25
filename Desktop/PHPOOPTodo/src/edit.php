<?php
session_start();
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
                <input id="new-task" type="text" value=<?php echo $_SESSION['todo_content']; ?> name="update_task"><input id="new-task" type="hidden" value=<?php echo $_SESSION['todo_id']; ?> name="update_id"> &nbsp;<input type='submit' value='update' name='action'>
            </p>
        </form>

        <h3>Todo</h3>
        <ul id="incomplete-tasks">

            <?php
            for ($i = 0; $i < count($_SESSION['todo']); $i++) {
                if ($_SESSION['todo'][$i]['status'] == 1)
                    if ($_SESSION['todo'][$i]['id'] != $_SESSION['todo_id'])
                        echo "<li><form action='functions.php?' method='POST'><input type='checkbox' onchange='this.form.submit()' name='check' value='0'><label>" . $_SESSION['todo'][$i]['task'] . "</label><input type='text' name='id' class='edit_block' value='" . $_SESSION['todo'][$i]['id'] . "'><input type='submit' class='edit' name='action' value='Edit'><input type='submit' class='delete' name='action' value='delete'><input type='submit' class='check_submit' value='submit' name='action'></form></li>";
            }
            ?>
        </ul>

        <h3>Completed</h3>
        <ul id="completed-tasks">
            <?php
            for ($i = 0; $i < count($_SESSION['todo']); $i++) {
                if ($_SESSION['todo'][$i]['status'] == 0)
                    if ($_SESSION['todo'][$i]['id'] != $_SESSION['todo_id'])
                        echo "<li><form action='functions.php?' method='POST'><input type='checkbox' onchange='this.form.submit()' name='check' value='1'><label>" . $_SESSION['todo'][$i]['task'] . "</label><input type='text' name='id' class='edit_block' value='" . $_SESSION['todo'][$i]['id'] . "'><input type='submit' class='edit' name='action' value='Edit'><input type='submit' class='delete' name='action' value='delete'><input type='submit' class='check_submit' value='submit' name='action'></form></li>";
            }
            ?>
        </ul>
    </div>

</body>

</html>