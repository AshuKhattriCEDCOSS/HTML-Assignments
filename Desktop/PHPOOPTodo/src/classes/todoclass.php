<?php

namespace App;

session_start();

class todo
{
    /**
     * Function add:Add Tasks in Incompleted Sections
     *
     * @param [type] $task
     * @return void
     */
    function add($task)
    {
        if (isset($_POST['action']))
            if ($_POST['action'] == 'add')
                $_SESSION['todo'][] = array('id' => $_SESSION['count']++, 'task' => $task, 'status' => 1);
        echo "<script>window.location.href='index.php';</script>";
    }
    /**
     * Function Edit_Todo:Updating the Selected Task
     *
     * @param [type] $id
     * @return void
     */
    function edit($id)
    {
        echo "<script>window.location.href='edit.php'</script>";
    }

    /**
     * Function delete:Deleting the selected task 
     *
     * @param [type] $id
     * @param [type] $action
     * @return void
     */
    function delete($id, $action)
    {
        if (isset($action))
            if ($action == 'delete')
                for ($i = 0; $i < count($_SESSION['todo']); $i++) {
                    if ($_SESSION['todo'][$i]['id'] == $id) {
                        echo (json_encode($_SESSION['todo'][$i]));
                        unset($_SESSION['todo'][$i]);
                    }
                }
        echo "<script>window.location.href='index.php';</script>";
    }
    /**
     * Function Update:After Editing Updating Record
     *
     * @param [type] $id
     * @param [type] $content
     * @return void
     */
    function update($id, $content)
    {
        for ($i = 0; $i < count($_SESSION['todo']); $i++) {

            if ($_SESSION['todo'][$i]['id'] == $id) {

                $_SESSION['todo'][$i]['task'] = $content;
            }
        }
        echo "<script>window.location.href='index.php';</script>";
    }

    /**
     * Function incompleted:Displaying All Tasks which are unticked in Todo Section.
     *
     * @param [type] $id
     * @param [type] $check
     * @return void
     */
    function incompleted($id, $check)
    {
        if (isset($_POST['check']))
            if ($_POST['check'] == 1)
                for ($i = 0; $i < count($_SESSION['todo']); $i++) {
                    if ($_SESSION['todo'][$i]['id'] == $id) {
                        $_SESSION['todo'][$i]['status'] = $check;
                    }
                }
        echo "<script>window.location.href='index.php';</script>";
    }

    /**
     * Function completed:Displaying All Tasks which are ticked in Completed Section.
     *
     * @param [type] $id
     * @param [type] $check
     * @return void
     */
    function completed($id, $check)
    {
        if (isset($_POST['check']))
            if ($_POST['check'] == 0)
                for ($i = 0; $i < count($_SESSION['todo']); $i++) {
                    if ($_SESSION['todo'][$i]['id'] == $id) {
                        $_SESSION['todo'][$i]['status'] = $check;
                    }
                }
        echo "<script>window.location.href='index.php';</script>";
    }
}
