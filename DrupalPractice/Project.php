<?php

$id_id = arg(1); $id_id1 = arg(0); $num = arg(2);
$item1 = 'Category'.$num;
$default = array('item1' => $item, 'item2' => 'Category2', 'item3' => 'Category3', 'item4' => 'Category4');
$res = db_query('select * from {node} where {nid} = "%d"', $id_id);
$ress = db_fetch_array($res);
if ($id_id1 == 'categories') {
    $res = db_query('select * from {term_data} where {tid} = "%d"', $id_id);
    $ress = db_fetch_array($res);
    if (!EMPTY($ress['name'])) {
        echo $ress['name']." | Опросы";
    }
    else {
        echo 'Интересные опросы: политика, общество, экономика';
    }
    //echo 'Mapax | Опросы';
}
elseif ($id_id1 == 'question') {
    $res = db_query('select * from {questions} where {id} = "%d"',$id_id);
    $ress = db_fetch_array ($res);
    echo $ress['question'];
}
elseif ($id_id1 == 'forum') {
    echo 'Mapax | Форум';
}
elseif ($id_id1 == 'node') {
    echo $ress['title'];
}
elseif (arg(0) == 'articles') {
    echo 'Статьи';
}
elseif (arg(0) == 'taxonomy') {
    $term = taxonomy_get_term (arg(2));
    print $term -> name;
}
elseif (arg(2) = null) {
    echo 'is null';
}
else {
    echo 'Mapax';
}
