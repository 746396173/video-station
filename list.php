<?php
error_reporting(0);
$list = file_get_contents("http://www.360kan.com/dianshi/list");
$list1 = file_get_contents("http://www.360kan.com/dianying/list");
$list2 = file_get_contents("http://www.360kan.com/dongman/list.php");
$list3 = file_get_contents("http://www.360kan.com/zongyi/list.php");
$list4 = file_get_contents("http://list.youku.com/category/video/c_94_d_1_s_1_p_1.html");
$lzz = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/dianshi/list.php\\?year=all\\&area\\=all\\&act\\=all\\&cat\\=(.*?)\" target=\"_self\">(.*?)
                                                </a>#";
                                                $lzzmv = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/dianying/list\\?year=all\\&area=all\\&act=all\\&cat=(.*?)\" target=\"_self\">(.*?)
                                                </a>#";
$lzzdm = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/dongman/list.php\\?year=all\\&area=all\\&cat=(.*?)\" target=\"_self\">(.*?)
                                                </a>#";
$lzzzy = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/zongyi/list.php\\?act=all\\&area=all\\&cat=(.*?)\" target=\"_self\">(.*?)
                                                </a>#";
$lzz1 = "# <a class=\"js-tongjip\" href=\"http://www.360kan.com/dianshi/list\\?cat\\=all\\&area=all\\&act\\=all\\&year\\=(.*?)\" target=\"_self\">(.*?)
                                                </a>#";
$lzz2 = "#<a class=\"js-tongjip\" href=\"http://www.360kan.com/dianshi/list\\?cat\\=all\\&year\\=all\\&act\\=all\\&area\\=(.*?)\" target=\"_self\">(.*?)
                                                </a>#";
preg_match_all($lzz, $list, $larr);
preg_match_all($lzz1, $list, $larr1);
preg_match_all($lzz2, $list, $larr2);
preg_match_all($lzzmv, $list1, $larrmv);
preg_match_all($lzzdm, $list2, $larrdm);
preg_match_all($lzzzy, $list3, $larrzy);
$cat = $larr[1];
$mcat = $larrmv[1];
$dmcat = $larrdm[1];
$zycat = $larrzy[1];
$dmname = $larrdm[2];
$zyname = $larrzy[2];
$mname = $larrmv[2];
$cat1 = $larr1[1];
$cat2 = $larr2[1];
$name = $larr[2];
