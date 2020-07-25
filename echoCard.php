                          echo "<div class=\"card ml-auto mr-auto\" style=\"width: 20rem;\">
                                  <img class=\"card-img-top\" src=\"".$img."\" alt=\"Card image cap\">
                                  <div class=\"card-body\">
                                    <h4 class=\"card-title\">from <i class=\"text-success fas fa-map-marker-alt\"></i> ".$source."<br/>to <i class=\"text-success ml-3 fas fa-map-marker-alt\"></i> ".$destination."</h4>
                                    <h6 class=\"card-subtitle mb-2 text-muted\"><i class=\"text-success far fa-calendar-alt\"></i> ".$durationStart." to ".$durationEnd."</h6>
                                    <p class=\"card-text\">The package price: <i class=\"text-success fas fa-rupee-sign\"></i> ".$pkgPrice."<br/>Meal offerings <i class=\"text-success fas fa-rupee-sign\"></i> ".$mealPrice."</p>
                                    <p class=\"card-text\"><i class=\"text-success fas fa-hotel\"></i> ".$Accommodation."</p>
                                    <p class=\"card-text\"><small class=\"text-muted\"><i class=\"text-success far fa-compass\"></i> via ".$transport."</small></p>
                                    <!--<a href=\"#\" class=\"btn btn-outline-success btn-round\"><i class=\"fas fa-2x fa-concierge-bell\"></i> Select Package</a>-->
                                    <a href=\"http://www.creative-tim.com/product/paper-kit-2\" class=\"disabled mx-auto btn btn-outline-default btn-round punchline block__link px-2\" data-fx=\"7\" data-img=\"ImageRevealHover/img/47.jpg\"><i class=\"fas fa-lg fa-users mr-1\"></i>Group Trip</a>
                                    <a href=\"#\" class=\"disabled mx-auto btn btn-outline-default btn-round punchline px-2 block__link\" target=\"_blank\" data-fx=\"5\" data-img=\"ImageRevealHover/img/46.jpg\"><i class=\"nc-icon nc-headphones mr-1\" aria-hidden=\"true\"></i> Solo Trip</a>
                                  </div>
                                </div>";
                          }
                          else{
                             // $server='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) >';
                            // <div class=\"form-group card ml-auto mr-auto\" style=\"width: 20rem;\">
                            echo "<div class=\"form-group card ml-auto mr-auto\" style=\"width: 20rem;\">
                                  <img class=\"card-img-top\" src=\"".$img."\" alt=\"Card image cap\">
                                  <div class=\"card-body\">
                                    <h4 class=\"card-title\">from <i class=\"text-success fas fa-map-marker-alt\"></i> ".$source."<br/>to <i class=\"text-success ml-3 fas fa-map-marker-alt\"></i> ".$destination."</h4>
                                    <h6 class=\"card-subtitle mb-2 text-muted\"><i class=\"text-success far fa-calendar-alt\"></i> ".$durationStart." to ".$durationEnd."</h6>
                                    <p class=\"card-text\">The package price: <i class=\"text-success fas fa-rupee-sign\"></i> ".$pkgPrice."<br/>Meal offerings <i class=\"text-success fas fa-rupee-sign\"></i> ".$mealPrice."</p>
                                    <p class=\"card-text\"><i class=\"text-success fas fa-hotel\"></i> ".$Accommodation."</p>
                                    <p class=\"card-text\"><small class=\"text-muted\"><i class=\"text-success far fa-compass\"></i> via ".$transport."</small></p>
                                    <!--<a href=\"#\" class=\"btn btn-outline-success btn-round\"><i class=\"fas fa-2x fa-concierge-bell\"></i> Select Package</a>-->
                                    <!--<form method=\"POST\" action=\"createtrip.php\" enctype=\"multipart/form-data\">
                                    <a href=\"#\" type=\"submit\" id=\"gtrip\" name=\"gtrip\" class=\"text-info mx-auto btn btn-outline-info btn-round punchline block__link px-2\" onclick=\"groupbtn('".$pkgid."')\"><i class=\"fas fa-lg fa-users mr-1\"></i>Group Trip</a>
                                    <a href=\"#\" type=\"submit\" id=\"strip\" name=\"strip\" class=\"mx-auto btn btn-outline-primary btn-round text-primary punchline px-2 block__link\" onclick=\"solobtn('".$pkgid."')\"><i class=\"nc-icon nc-headphones mr-1\" aria-hidden=\"true\"></i> Solo Trip</a>   
                                    </from>-->

                                    <form method=\"POST\" class=\"row\" action=\"tripcreation.php\" enctype=\"multipart/form-data\">
                                    <input type=\"hidden\" name=\"userid\" value='".htmlentities($_SESSION['userid'])."'>
                                    <input type=\"hidden\" name=\"rowcount\" value='".htmlentities(mysqli_num_rows($pkgDetails))."'>
                                    <input type=\"hidden\" name=\"selected_row\" value=\"".$rownum."\">
                                    <input type=\"hidden\" name=\"gtrip\" value=\"gtrip\">
                                    <button type=\"submit\" id=\"gtrip\" name=\"gtrip_btn\" class=\"mx-auto btn btn-outline-info punchline block__link btn-round px-2\"><i class=\"fas fa-lg fa-users mr-1\"></i>Group Trip</button>  
                                    <!--</from>-->

                                    <!--<form method=\"POST\" action=\"strip.php\" enctype=\"multipart/form-data\">
                                    <input type=\"hidden\" name=\"userid\" value='".htmlentities($_SESSION['userid'])."'>
                                    <input type=\"hidden\" name=\"pkgid\" value='".htmlentities($row["pkgid"])."'>-->
                                    <input type=\"hidden\" name=\"strip\" value=\"strip\">
                                    <button type=\"submit\" id=\"strip\" name=\"strip_btn\" class=\"mx-auto btn btn-outline-primary btn-round punchline px-2 block__link\"><i class=\"nc-icon nc-headphones mr-1\" aria-hidden=\"true\"></i> Solo Trip</button>   
                                    </from>

                                  </div>
                                </div>";