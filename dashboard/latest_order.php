<?php
include_once 'config.php';
$sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo'header:location.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
include('header.php');
?>

        <?php include('sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <h2 class="text text-center">latest_order</h2>
                    
           
                   
                            <div class="col-xl-12 col-lg-14 col-md-8 col-sm-14 col-14">
                                <div class="card">
                                    
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <!-- <th class="border-0"><b>product_image</th> -->
                                                        <th class="border-0"><b>client Name</th>
                                                        <th class="border-0"><b>client Phone number</th>
                                                        <th class="border-0"><b>product_name</th>
                                                        <th class="border-0"><b>order_cost</th>
                                                        <th class="border-0"><b>Client Address</th>
                                                        <th class="border-0"><b>Order_stutus</th>
                                                        <th class="border-0"><b>order_date</th>
                                                        <th class="border-0"><b>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    require 'config.php';
                                                    $stmt = $conn->prepare('
                                                    SELECT order_items.item_id,order_items.order_id,order_items.product_name,order_items.product_image,orders.order_id,
                                                    orders.order_cost,orders.order_stutus,orders.client_names,orders.user_phone,orders.user_address,orders.order_date
                                                    FROM order_items
                                                    INNER JOIN orders ON Order_items.order_id=orders.order_id ORDER BY order_date DESC LIMIT 10');
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $grand_total = 0;
                                                    while ($row = $result->fetch_assoc()):
                                                ?>
                                                    <tr>
                                                         <!-- <td><img src="img/<?=$row['product_image']?>"width="20%"></td> -->
                                                         <td><?=$row['client_names']?></td>
                                                        <td>0<?=$row['user_phone']?></td>
                                                        <td><?=$row['product_name']?></td>
                                                        <td><?=$row['order_cost']?> frw</td>
                                                        <td><?=$row['user_address']?></td>
                                                        <td><?=$row['order_stutus']?></td>
                                                        <td><?=$row['order_date']?> </td>
                                                        <td>
                                                        <i class="zmdi zmdi-edit"></i>
                                                    
                                                        <td><a href="index_order.php?id= <?=$row['order_id'] ?>" class="btn btn-danger rounded-circle" onclick="return confirm('Are you sure want to delete this item?');">delete</a></td>
                                                        
                                                    </tr>
                                                    <?php endwhile; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                        <div class="row">
                           
           <?php
            include('footer.php');
           ?>