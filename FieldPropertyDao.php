<?php

include_once 'FieldProperty.php';

class FieldPropertyDao {

    private mysqli $conn;

    public function __construct() {
        $config = json_decode(file_get_contents('db_config.json'), false);
        $this->conn = new mysqli($config->hostname, $config->username, $config->password, $config->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
       $this->conn->close();
    }

    public function get_property_by_name(string $name): ?array {
        $sql_query = "select * from field_properties where name = ?";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
             return $row;
        } else {
            return null;
        }
    }

    public function get_names(): array {
        $sql_query = "select name from field_properties group by name";
        $result = $this->conn->query($sql_query);

        $names = array();
        while ($row = $result->fetch_assoc()) {
            $names[] = $row['name'];
        }
        return $names;
    }
}