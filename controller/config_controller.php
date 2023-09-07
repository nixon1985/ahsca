<?php

include("DBcontroller.php");
$obj 		= new DBcontroller;
$conn       = $obj->getDbConn();
$newMemberNo = $obj->getNewMemberNo();

$userID = $_SESSION['user_id'];
$action = $_POST['action'];
switch ($action){
    case 'main_work':
        try {
            $conn->beginTransaction();
            $sql_query = "INSERT INTO work_info (work_name,added_by) VALUES (:work_name,:added_by)";
            $stmt = $conn->prepare($sql_query);

            $stmt->bindParam(':work_name', $work_name);
            $stmt->bindParam(':added_by', $added_by,PDO::PARAM_NULL);

            $work_name 	= trim($_POST['work_name']);
            $added_by 	= $userID;

            //$monthly_payable 	  = (!empty($_POST['monthly_payable'])) ? trim($_POST['monthly_payable']):0;
            //$opening_balance 	  = (!empty($_POST['opening_balance'])) ? trim($_POST['opening_balance']):0;
            //$created_by 	      = ;

            $stmt->execute();
            $conn->commit();
            $data['success']='New Member added successfully';
            echo json_encode($data);

        } catch(PDOException $e) {
            $conn->rollback();
            $data['error']='Insert error. '. $e->getMessage();
            echo json_encode($data);
        }

        break;

    case 'sub_work':
        try {
            $conn->beginTransaction();
            $sql_query = "INSERT INTO work_info (work_name,parent_id,added_by) VALUES (:work_name,:parent_id,:added_by)";
            $stmt = $conn->prepare($sql_query);

            $stmt->bindParam(':work_name', $work_name);
            $stmt->bindParam(':parent_id', $parent_id);
            $stmt->bindParam(':added_by', $added_by,PDO::PARAM_NULL);

            $work_name 	= trim($_POST['work_name']);
            $parent_id 	= trim($_POST['work_id']);
            $added_by 	= $userID;

            //$monthly_payable 	  = (!empty($_POST['monthly_payable'])) ? trim($_POST['monthly_payable']):0;
            //$opening_balance 	  = (!empty($_POST['opening_balance'])) ? trim($_POST['opening_balance']):0;
            //$created_by 	      = ;

            $stmt->execute();
            $conn->commit();
            $data['success']='Sub-work created successfully';
            echo json_encode($data);

        } catch(PDOException $e) {
            $conn->rollback();
            $data['error']='Insert error. '. $e->getMessage();
            echo json_encode($data);
        }
        break;
}


?>