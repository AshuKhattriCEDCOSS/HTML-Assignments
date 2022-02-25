<?php
session_start();

use App\todo;

require('classes/todoclass.php');
$task = $_POST['todo_task'];
$action = $_POST['action'];
$id = $_POST['id'];
$check = $_POST['check'];
$_SESSION['todo_content'] = $_POST['todo_content'];
$_SESSION['todo_id'] = $id;
$obj = new todo();
switch ($action) {
    case 'add':
        $obj->add($task);
        break;
    case 'Edit':
        $obj->edit($id);
        break;
    case 'delete':
        $obj->delete($id, $action);
        break;
    case 'update':
        $obj->update($_POST['update_id'], $_POST['update_task']);
        break;
}
if ($_POST['check'] == 0) {
    $obj->completed($id, $check);
} else {
    $obj->incompleted($id, $check);
}
