<?php
class DB {
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "skillx";
 
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
  
    public function is_table_empty() {
        $result = $this->db->query("SELECT id FROM skillxtoken");
        if($result->num_rows) {
            return false;
        }
  
        return true;
    }
  
    public function get_access_token() {
        $sql = $this->db->query("SELECT access_token FROM skillxtoken");
        $result = $sql->fetch_assoc();
        return json_decode($result['access_token']);
    }
  
    public function get_refersh_token() {
        $result = $this->get_access_token();
        return $result->refresh_token;
    }
  
    public function update_access_token($token) {
        if($this->is_table_empty()) {
            $this->db->query("INSERT INTO skillxtoken(access_token) VALUES('$token')");
        } else {
            $this->db->query("UPDATE skillxtoken SET access_token = '$token' WHERE id = (SELECT id FROM skillxtoken)");
        }
    }
}