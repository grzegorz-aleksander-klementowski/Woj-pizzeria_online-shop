<?php

echo '
<section class="col-md-3 col-sm-6">
        <div class="dish border border-light">
            <figure>
                <img class="img-fluid" alt="pizza" src="css/img/pizza.jpg">
                <figcaption>
                    <div class="dish-tab-header"> <h1>'.$dish[$row['id']]->get_name().'</h1> </div>
                    <div class="dish-tab-description">'.$dish[$row['id']]->get_description().'</div>
                    <div class="dish-tab-button">
                        <table class="menu-table">
                            <tr>
                                <th>28 cm</th><th>40cm</th>
                            </tr>
                            <tr>
                                <form method="POST">
                                    <input type="hidden" name="name_s" value="'.$dish[$row['id']]->get_name().'">
                                    <input type="hidden" name="description_s" value="'.$dish[$row['id']]->get_description().'">
                                    <input type="hidden" name="price_s" value="'.$dish[$row['id']]->get_price_s().'">
                                    <td><button type="submit" onclick="pickUpLargeDish('.$dish[$row['id']]->get_id().', 1, '.$dish[$row['id']]->get_price_s().')" class="btn btn-danger">'.$dish[$row['id']]->get_price_s().'.00 zł</button></td>
                                </form>
                                <form method="POST">
                                    <input type="hidden" name="name_l" value="'.$dish[$row['id']]->get_name().'">
                                    <input type="hidden" name="description_l" value="'.$dish[$row['id']]->get_description().'">
                                    <input type="hidden" name="price_l" value="'.$dish[$row['id']]->get_price_l().'">
                                    <td><button type="submit" onclick="pickUpLargeDish('.$dish[$row['id']]->get_id().', 2, '.$dish[$row['id']]->get_price_l().')" class="btn btn-danger">'.$dish[$row['id']]->get_price_l().'.00 zł</button></td>
                                </form>
                            </tr>
                        </table>
                    </div>
                </figcaption>
            </figure>
        </div>
</section>';

