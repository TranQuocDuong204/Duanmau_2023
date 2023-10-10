<?php 

function insert_danhmuc($tenloai) {
    $sql="insert into danhmuc(name) values(?)";
    pdo_execute($sql, $tenloai);
} 

function delete_danhmuc($tenloai) {
    $sql = "delete from danhmuc where id=?";
    pdo_execute($sql, $_GET['id']);
} 

function loadall_danhmuc() {
    $sql = "select * from danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id) {
    $sql = "SELECT * FROM danhmuc WHERE id = $id";
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai) {
    $sql = "UPDATE danhmuc SET name = '" . $tenloai . "' WHERE id = " . $id;
    pdo_execute($sql);
}

?>