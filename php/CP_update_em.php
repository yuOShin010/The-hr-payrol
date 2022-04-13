<?php
    require_once ('classes/payrollClass.php');
    $classPayroll->update_employee_module();
    header("Location: UI_addEmployee.php");
?>