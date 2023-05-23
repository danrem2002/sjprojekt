<?php
include('database.php');
if (isset($_POST['edit_bike'])) {
    $data = [
        'id' => $_POST['id'],
        'brand' => $_POST['brand'],
        'price' => $_POST['price'],
        'model' => $_POST['model'],
        'count' => $_POST['count'],
        'img'  => $_POST['img']
    ];
    $query = "UPDATE bikes SET brand = ?, model = ?, price = ?, count = ?, img = ? WHERE id = ?";
    $query_run = $GLOBALS['mysqli']->prepare($query);
    $query_run->bind_param('ssdisi', $data['brand'],
                                     $data['model'],
                                     $data['price'],
                                     $data['count'],
                                     $data['img'],
                                     $data['id']);
    $query_run->execute([$data['brand'],
                        $data['model'],
                        $data['price'],
                        $data['count'],
                        $data['img'],
                        $data['id']]);
    if ($query_run) {
        header("LOCATION: ../admin.php");
    } else {
        echo "Message not sent";
    }
};
if (isset($_POST['add_bike'])) {
    $data = [
        'brand' => $_POST['brand'],
        'price' => $_POST['price'],
        'model' => $_POST['model'],
        'count' => $_POST['count'],
        'img'  => $_POST['img']
    ];
    $query = "INSERT INTO bikes(brand, model, price, count,img) VALUES (?,?,?,?,?)";
    $query_run = $GLOBALS['mysqli']->prepare($query);
    $query_run->bind_param('ssdis', $data['brand'],
                                     $data['model'],
                                     $data['price'],
                                     $data['count'],
                                     $data['img']);
    $query_run->execute([$data['brand'],
                        $data['model'],
                        $data['price'],
                        $data['count'],
                        $data['img']]);
    if ($query_run) {
        header("LOCATION: ../admin.php");
    } else {
        echo "Message not sent";
    }
};

if (isset($_POST['remove_bike'])) {
    $data = [
        'id' => $_POST['id'],
        'brand' => $_POST['brand'],
        'price' => $_POST['price'],
        'model' => $_POST['model'],
        'count' => $_POST['count'],
        'img'  => $_POST['img']
    ];
    $query = "DELETE FROM bikes WHERE id = ?";
    $query_run = $GLOBALS['mysqli']->prepare($query);
    $query_run->bind_param('i',  $data['id']);
    $query_run->execute([$data['id']]);
    if ($query_run) {
        header("LOCATION: ../admin.php");
    } else {
        echo "Message not sent";
    }
};