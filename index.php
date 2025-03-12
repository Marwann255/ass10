<?php 
header("content-type, application/json");
require("config.php");
$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
        case "POST":
            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $id =$_POST["id"];
            if(!empty($name) && !empty($credits) && !empty($description)){ 
         $sql = "INSERT INTO  'products'('id',`name`, `price`, `description`) VALUES ('$id','$name','$price','$description')";        
         $Connection->query($sql);
         http_response_code(200); 
         echo json_encode(["status"=>"success", "message" => "Posted"]);
     }else{
         http_response_code(404);
         echo json_encode(["status"=>"error",  "message" => "Invalid data"]);
        }
            break;
    case "GET":                
            echo json_encode ($Connection->query("SELECT * FROM orders")->fetch_all(MYSQLI_ASSOC));
           break;
                case "DELETE":
                    if(isset($_GET["id"])){
                        $id = $_GET["id"];
                        $sql = "DELETE FROM products WHERE id = $id";
                        $Connection->query($sql);
                        if($Connection->affected_rows == 1){
                            echo json_encode(["status"=>"success", "message" => "DELETED"]);
                        }else{
                            http_response_code(404);
                            echo json_encode(["status"=>"error", "message" => "This id isn't exists"]);
                        }
                }else{
                    http_response_code(404);
                    echo json_encode(["status"=>"error", "message" => "There's no id provided"]);
                }
                    break;
            case "PUT":
                $id = $_GET["id"];
                $data = json_decode(file_get_contents("php://input"), true);
                $name = $data["name"];
                $price = $data["price"];
                $description = $data["description"];
                $sql = "UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description' WHERE id = $id";
                $Connection->query($sql);
                if($Connection->affected_rows > 0){
                    echo json_encode(["status"=>"success", "message" => "Updated"]);
                }else{
                    http_response_code(404); 
                    echo json_encode(["status"=>"error", "message" => "This id isn't exists"]);
                }
                break;
                    default:
                    http_response_code(400);
                    echo json_encode(["message" => "undefined request method"]);
                }
?>
