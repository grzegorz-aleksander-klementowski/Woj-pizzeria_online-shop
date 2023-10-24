<?php

require_once("./components.php");

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



//check connection
if($connect->connect_error)
{
    die("Connection filed: ".$connect->connect_error);
}
//if connection is correct, then execute the class
else
{     

  $sql = 'SELECT id, type, name, description, price_s, price_l FROM dishes';

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

        makeCardDishes(
          $dish[$row['id']]->get_id(),
          $dish[$row['id']]->get_name(),
          $dish[$row['id']]->get_description(),
          $dish[$row['id']]->get_price_s(),
          $dish[$row['id']]->get_price_l()
        );
      }
    }

    $result->free();
  }
  else
  {
    echo "result error!";
  }

  $connect->close();
}

?>
                        