<?php 
	session_start();
	date_default_timezone_set("Asia/Dhaka"); 
	
	class DBcontroller {
		
		private $dbCon;	
		private $userId;
		private $comId; /*Company Id*/
		private $finId; /*Financial Year Id*/

		public function __construct() {
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "somiti";

			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				echo "Cannot Connect to Database : " . $e->getMessage();
			}	
			
			$this->dbCon  = $conn;
			$this->userId = 1;//$_SESSION['id'];
			$this->comId  = 1;//$_SESSION['user_company_id'];
			$this->finId  = 1;//$_SESSION['user_fin_id'];
		}
		
		function getDbConn(){
			return $this->dbCon;
		}
		
		function getUserId(){
			return $this->userId;
		}
		
		function getComId(){
			return $this->comId;
		}
		
		function getFinId(){
			return $this->finId;
		}


        function getNewMemberNo(){

            $newMemberId = "";

            /*Get Max Voucher ID*/
            $sql_query = "SELECT IFNULL(max(emp_no)+1,1001) emp_no from emp_info";
            $stmt = $this->dbCon->prepare($sql_query);
            $stmt->execute();
            $newMemberNo = $stmt->fetch(PDO::FETCH_ASSOC);
            if(isset($newMemberNo['emp_no'])){
                $newMemberId   = $newMemberNo['emp_no'];
            }else{
                $newMemberId = "1001";
            }
            return $newMemberId;
        }

		
	}


?>