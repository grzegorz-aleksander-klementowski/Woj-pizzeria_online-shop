<?php
//AJAX data - which data select
$insertDishes = $_POST['insertDishes'];
//AJAX data - dishes cards menu
if($insertDishes==1)
{
    $newDishType = $_POST['newDishType'];
}
elseif($insertDishes==2)
{
    $dishIdOrder = $_POST['dishIdOrder'];
}
//AJAX data - dishes order
//$dishIdOrder = $_POST['dishIdOrder'];

//$dishSizeOrder = $_POST['dishSizeOrder'];




class Dish
{
                        //Properies
                        public $id;
                        public $type;
                        public $name;
                        public $description;
                        public $price_s;
                        public $price_l;
                                                                                                                                                
                        //METHODS
                                                                                                                                                
                        //SETTERS
                        function set_id($id)
                        {
                                                $this->id=$id;
                        }
                        function set_type($type)
                        {
                                                $this->type=$type;
                        }
                        function set_name($name)
                        {
                                                $this->name=$name;
                        }
                        function set_description($description)
                        {
                                                $this->description=$description;
                        }
                        function set_price_s($price_s)
                        {
                                                $this->price_s=$price_s;
                        }
                        function set_price_l($price_l)
                        {
                                                $this->price_l=$price_l;
                        }

                        //GETTERS                                                                                                                                                                        function get_id()
                        function get_id()
                        {
                                                return $this->id;
                        }
                        function get_type()
                        {
                                                return $this->type;
                        }
                        function get_name()
                        {
                                                return $this->name;
                        }
                        function get_description()
                        {
                                                return $this->description;
                        }
                        function get_price_s()
                        {
                                                return $this->price_s;
                        }
                        function get_price_l()
                        {
                                                return $this->price_l;
                        }
}                                                                                             



                        //import from connect.php
                        require_once "connect.php";
                        
                        //check connection
                        if($connect->connect_error)
                        {
                            die("Connection filed: ".$connect->connect_error);
                        }
                        //if connection is correct, then execute the class
                        else
                        {   
                            if($insertDishes==1)
                            {
                                $sql = 'SELECT id, type, name, description, price_s, price_l FROM dishes WHERE type="'.$newDishType.'"';
                            }  
                            elseif($insertDishes==2)
                            {
                                $sql = 'SELECT id, type, name, description, price_s, price_l FROM dishes WHERE id="'.$dishIdOrder.'"';
                            }
                            //if($result = $connect->query($sql))
                            if($result = mysqli_query($connect, $sql))
                            {
                                if(mysqli_num_rows($result) > 0)
                                {
                                    //output data of each row
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $dish[$row['id']] = new Dish();

                                        $dish[$row['id']]->set_id($row["id"]);
                                        $dish[$row['id']]->set_type($row["type"]);
                                        $dish[$row['id']]->set_name($row["name"]);
                                        $dish[$row['id']]->set_description($row["description"]);
                                        $dish[$row['id']]->set_price_s($row["price_s"]);
                                        $dish[$row['id']]->set_price_l($row["price_l"]);

                                        #echo "id: " . $row["id"]. "type: ".$row["type"] ." - Name: " . $row["name"]. " " . $row["description"]."- price - ".$row["price_s"]."<br>";            

                                        if($insertDishes==1)
                                        {
                                            include "menu-content.php";
                                        }
                                        elseif($insertDishes==2)
                                        {

                                            include "load-colected-dish-order.php";
                                        }

                                    }

                                }

                                $result->free();
                            }
                            else
                            {
                                echo "result error! Type of dishes: ".$newDishType;
                            }

                            $connect->close();
                        }
?>