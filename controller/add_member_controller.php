<?php

include("DBcontroller.php");
$obj 		= new DBcontroller;	
$conn       = $obj->getDbConn();
$newMemberNo = $obj->getNewMemberNo();
try {
        $photoPath = photo_uplaod($newMemberNo);
        $conn->beginTransaction();
		$sql_query = "INSERT INTO emp_info (emp_no,emp_name,designation_id,personal_phone,personal_email,official_phone,official_email,joining_date,member_type,gender,present_address,permanent_address,photo_path) 
                                    VALUES (:emp_no,:emp_name,:designation_id,:personal_phone,:personal_email,:official_phone,:official_email,:joining_date,:member_type,:gender,:present_address,:permanent_address,:photo_path)";
		$stmt = $conn->prepare($sql_query);

        $stmt->bindParam(':emp_no', $newMemberNo);
		$stmt->bindParam(':emp_name', $emp_name);
        $stmt->bindParam(':designation_id', $designation);
		$stmt->bindParam(':personal_phone', $personal_phone);
		$stmt->bindParam(':personal_email', $personal_email);
        $stmt->bindParam(':official_phone', $official_phone);
        $stmt->bindParam(':official_email', $official_email);
        $stmt->bindParam(':joining_date', $joining_date);
        $stmt->bindParam(':member_type', $member_type);
        $stmt->bindParam(':gender', $gender);
		$stmt->bindParam(':present_address', $present_address);
		$stmt->bindParam(':permanent_address', $permanent_address,PDO::PARAM_NULL);
        $stmt->bindParam(':photo_path', $photoPath);
		// $stmt->bindParam(':description', $description,PDO::PARAM_NULL);
		// $stmt->bindParam(':created_by', $created_by);
		
		$emp_name 	          = trim($_POST['emp_name']);
        $designation 	      = trim($_POST['designation']);
		$personal_phone 	  = trim($_POST['personal_phone']);
        $personal_email 	  = trim($_POST['personal_email']);
        $official_phone 	  = trim($_POST['official_phone']);
        $official_email 	  = trim($_POST['official_email']);
        $gender 	      	  = trim($_POST['gender']);
        $member_type	      = trim($_POST['member_type']);
        $joining_date	      = trim($_POST['joining_date']);
		$present_address 	  = trim($_POST['present_address']);
		$permanent_address 	  = trim($_POST['permanent_address']);
		//$monthly_payable 	  = (!empty($_POST['monthly_payable'])) ? trim($_POST['monthly_payable']):0;
		//$opening_balance 	  = (!empty($_POST['opening_balance'])) ? trim($_POST['opening_balance']):0;
		// $created_by 	      = $loginUser;
		
		$stmt->execute();
		$conn->commit();
        userCreate($newMemberNo,$conn);
		$data['success']='New Member added successfully';
        echo json_encode($data);

	} catch(PDOException $e) {
		$conn->rollback();
        $data['error']='Insert error. '. $e->getMessage();
        echo json_encode($data);
	}


	function photo_uplaod($newMemberNo){

        $target_dir = "../uploads/"; // specify the directory where you want to store the uploaded files
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $returnPath='';
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["photo"]["tmp_name"]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                //echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            //echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["photo"]["size"] > 500000) {
            // echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // echo "Sorry, your file was not uploaded.";
            $returnPath = 0;
        // if everything is ok, try to upload file
        } else {
            $newname = $_SERVER['DOCUMENT_ROOT'].'/ahsca/uploads/'.$newMemberNo.'.'.$imageFileType;
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $newname)) {
                //echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
                $returnPath = 'uploads/'.$newMemberNo.'.'.$imageFileType;
            } else {
                $returnPath = 0;
            }
        }
        return $returnPath;

    }

    function userCreate($userID,$conn){
        $conn->beginTransaction();
        $sql_query = "INSERT INTO appuser (user_id,user_name,user_password,user_level,is_active) 
                                       VALUES (:user_id,:user_name,:user_password,:user_level,:is_active)";
        $stmt = $conn->prepare($sql_query);

        $stmt->bindParam(':user_id', $userID);
        $stmt->bindParam(':user_name', $userID);
        $stmt->bindParam(':user_password', $user_password);
        $stmt->bindParam(':user_level', $user_level);
        // $stmt->bindParam(':login_status', $login_status);
        $stmt->bindParam(':is_active', $is_active);

        $user_password 	      = md5(123456);
        $user_level 	  	  = trim('USER');
        $is_active 	      	  = trim(1);

        $stmt->execute();
        $conn->commit();

    }







/*include("db_conect.php");


$query = "SELECT * FROM member_info";
$var1 = '';
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	//$data['records'][] = $row;	
}

$data['success']='sdfs';
echo json_encode($data);
*/

?>