var text = "";
var i;
var oldprice = 0;

$(document).ready(function()
                  {
                                    for (i = 1; i < 13; i++) 
                                    {
                                      text += '<div class="col"><div onclick="openPhoto('+i+')" id="photo'+i+'" class="border border-light gallery-img"><div class="overlay"><img class="img-fluid" src="css/img/gallery/'+i+'.jpg" alt="Zdjęcie galerii '+i+'"><a class="full-photo-link"><span class="galery-icon"><i class="demo-icon icon-search"></i><p>zobacz zdjęcie</p></span><a></div></div></div>';
                                      
                                    }
                                    $("#gallery-start").after(text);
                                    
                  });

$("#help").click(function()
                 {
                                    $("#open-hours").css("color", "#ffc107");
                 });
                                    
function openPhoto(no)
                  {
                                    $("#full-photo").css("display","block");
                                    $("#exit-img").css("display","block");
                                    $("#exit-img").after('<figure><img class="full-photo-gallery" id="full-photo'+no+'" src="css/img/gallery/orginals/'+no+'.jpg" alt="zdjęcie galerii '+no+'"></figure>');
                                    $("#full-photo").click(function()
                                                      {
                                                                        $("#full-photo").css("display","none");
                                                                        $("#exit-img").css("display","none");
                                                                        $("#full-photo"+no).remove();
                                                      });
                  }

function changeDishType(dishType)
{
  $("#dish").load("load-dishes.php", {
    newDishType: dishType,
    insertDishes: 1
  });
}

function pickUpLargeDish(dish_id, dish_size, dish_price)
{
  var dish_order_number = 0;
  var dish_text_size = "...";
  var bill_sum = 0;


  if(dish_size==1)
  {
    dish_text_size = "średnia";
  }
  else if(dish_size==2)
  {
    dish_text_size = "duża";
  }
  else
  {
    
  }
  /*
  else
  {
    dish_text_size = "rozmiar typowy";
    alert("Powiadom właściciela strony o błędzie na stronie na stronie w rozmiarze dania!");
  }
  */
  
    dish_order_number = dish_order_number + 1
    $("#order-collect-box").css("display","block");
    $("#top-order-table").after('<tr><td id="dish_order_number'+ dish_order_number +'" class="td1">...</td><td class="td2">'+ dish_text_size +'</td><td class="td3">'+ dish_price +' zł</td></tr>');
    $('#dish_order_number' + dish_order_number).load("load-dishes.php", {
      dishIdOrder: dish_id,
      insertDishes: 2
    });

   bill_sum = dish_price + oldprice;
   oldprice = bill_sum;
    $("#buy-now-buttom").text(bill_sum + ".00 zł");
  
}