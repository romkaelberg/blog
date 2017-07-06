<?php
/**
 * Created by PhpStorm.
 * User: rmelb
 * Date: 23.10.16
 * Time: 16:55
 */
    /**
     * Created by PhpStorm.
     * User: rmelb
     * Date: 21.10.16
     * Time: 23:13
     */

        $dbh = require_once("sett.php");
        header("Content-Type: text/html; charset=UTF-8");

    $counter = 0;

        $db = $dbh->query("SELECT header,content,id,name,date FROM abc");

        $menu_arr = $db->fetchAll();

        foreach ($menu_arr as $value) {

            $counter = $counter + 1;



            echo "
                                <h3\">$value[header]</div>
                                <div class=\"meta\">
                                    <span class=\"category\"></span>
                                </div>
                                <div class=\"description\">";
                                    mb_internal_encoding("UTF-8");
                                    $str = $value['content'];
                                    echo mb_substr($str,3,150,"utf-8");
                                echo "
                                </div>
                            </div>
                            <div class=\"extra content\">
                                 $value[date]
                            </div>
                        </a>
                        </div>";
        }
    ?>
