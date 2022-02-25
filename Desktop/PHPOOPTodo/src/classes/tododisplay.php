<?php
session_start();
class tododisp
{
    /**
     * Function Todo Display:Display Tasks in Incompleted Section
     *
     * @return void
     */
function incompletedisplay(){
    for ($i = 0; $i < count($_SESSION['todo']); $i++) {
        if ($_SESSION['todo'][$i]['status'] == 1)
            echo "<li><form action='functions.php?' method='POST'><input type='checkbox' onchange='this.form.submit()' name='check' value='0'><label>" . $_SESSION['todo'][$i]['task'] . "</label><input type='hidden' name='todo_content' value='" . $_SESSION['todo'][$i]['task'] . "'><input type='text' name='id' class='edit_block' value='" . $_SESSION['todo'][$i]['id'] . "'><input type='submit' class='edit' name='action' value='Edit'><input type='submit' class='delete' name='action' value='delete'><input type='submit' class='check_submit' value='submit' name='action'></form></li>";
    }
}

/**
 * Function Completed:Display All Tasks in Completed Section which are checked.
 *
 * @return void
 */
function completedisplay(){
    for ($i = 0; $i < count($_SESSION['todo']); $i++) {
        if ($_SESSION['todo'][$i]['status'] == 0)
            echo "<li><form action='functions.php?' method='POST'><input type='checkbox' onchange='this.form.submit()' name='check' value='1'><label>" . $_SESSION['todo'][$i]['task'] . "</label><input type='hidden' name='todo_content' value='" . $_SESSION['todo'][$i]['task'] . "'><input type='text' name='id' class='edit_block' value='" . $_SESSION['todo'][$i]['id'] . "'><input type='submit' class='edit' name='action' value='Edit'><input type='submit' class='delete' name='action' value='delete'><input type='submit' class='check_submit' value='submit' name='action'></form></li>";
    }
}
}
