<?php
include_once 'config.php';
$sql = "DELETE FROM products WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo'header:location=product_view.php';
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
        <div class="dashboard-wrapper"><br>
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <h2 class="text text-center">Check your Store here</h2>
                    
           
                   
                            <div class="col-xl-12 col-lg-14 col-md-8 col-sm-14 col-14">
                                <div class="card">
                                    
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">no</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Description</th>
                                                        <th class="border-0">Price per one</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">category</th>
                                                        <th class="border-0">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    require 'config.php';
                                                    $stmt = $conn->prepare('SELECT id, p_names, description,price,quantity,date,category FROM products GROUP BY p_names;');
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    while ($row = $result->fetch_assoc()):
                                                ?>
                                                    <tr>
                                                        <td><?=$row['id']?></td>
                                                        <td><?=$row['p_names']?></td>
                                                        <td><?=$row['description']?></td>
                                                        <td><?=$row['price']?></td>
                                                        <td><?=$row['quantity']?></td>
                                                        <td><?=$row['date']?> </td>
                                                        <td><?=$row['category']?> </td>
                                                        <td>
                                                        <i class="zmdi zmdi-edit"></i>
                                                        <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-success rounded-circle" onclick="return confirm('Are you sure want to update this item?');"> update</a>
                                                    
                                                        <td><a href="index.php?id= <?=$row['id'] ?>" class="btn btn-danger rounded-circle" onclick="return confirm('Are you sure want to delete this item?');">delete</a></td>
                                                        
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