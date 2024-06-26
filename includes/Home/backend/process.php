<?php

include("class.php");
include("../../../auth/conn.php");
$home = new home($conn);

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'getItems':
            if ($_SERVER['REQUEST_METHOD'] === "GET") {
                $branch = $_GET['branchID'];
                $list = $home->getItem($branch);
                foreach ($list as &$item) {
                    $item['name'] = $item['brand'] . ' - ' . $item['product'];
                }
                echo json_encode($list, JSON_UNESCAPED_UNICODE);
            }
            break;
        case 'getBranch':
            if ($_SERVER['REQUEST_METHOD'] === "GET") {
                $branch = $home->getBranch();

                echo json_encode($branch, JSON_UNESCAPED_UNICODE);
            }
            break;
        case 'addTransaction':
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                $item = $_POST['item'];
                $qty = $_POST['qty'];
                $prc = $_POST['prc'];
                $stock = $_POST['stock'];
                $branch = $_POST['branch'];

                $success = $home->addTransaction($branch, $item, $qty, $prc, $stock);

                $response = array();

                if ($success) {
                    $response['success'] = true;
                    $response['message'] = "Transaction added successfully";
                } else {
                    $response['success'] = false;
                    $response['message'] = "Failed to add transaction. Please try again later.";
                }

                echo json_encode($response);
            }
            break;
        case "refund":
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                $id = $_POST['id'];
                $stock = $_POST['stock'];
                $price = $_POST['price'];
                $success = $home->refund($id, $stock, $price);

                $response = array();

                if ($success) {
                    $response['success'] = true;
                    $response['message'] = "Replaced successfully";
                } else {
                    $response['success'] = false;
                    $response['message'] = "Failed to replace. Please try again later.";
                }

                echo json_encode($response);
            }
            break;
        case "getChartData":
            if ($_SERVER["REQUEST_METHOD"] === "GET") {
                $data = $home->getChart();
                echo json_encode($data);
            }
    }
}
