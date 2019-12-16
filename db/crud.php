<?php 
    class crud{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the attendee database
        public function insertCustomer($fullname, $occas, $doe, $email, $contact){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO customer(name, occasion_id, dateofevent,emailaddress,contactnumber) 
                VALUES (:fullname,:occas,:doe,:email,:contact)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fullname',$fullname);
                $stmt->bindparam(':doe',$doe);
                $stmt->bindparam(':occas',$occas);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editOccasion($id,$fullname, $occas, $dob, $email, $contact){
           try{ 
                $sql = "UPDATE `customer` SET `name`=:fullname,`occassion_id`=:occas,`dateofevent`=:doe,`emailaddress`=:email,`contactnumber`=:contact WHERE occassion_id = :id ";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fullname',$fullname);
                $stmt->bindparam(':occas',$occas);
                $stmt->bindparam(':doe',$doe);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                // execute statement
                $stmt->execute();
                return true;
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
     
        }

        public function getCustomer(){
            try{
                $sql = "SELECT * FROM `customer` a inner join occassion s on a.occasion_id = s.occasion_id";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getCustomerDetails($id){
           try{
                $sql = "select * from customer a inner join occassion s on a.occasion_id = s.occasion_id where customer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteCustomer($id){
           try{
                $sql = "delete from customer where occasion_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        public function getCustomerById($id){
            try{
                $sql = "SELECT * FROM `occasion` where occasion_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }
    }
?>
