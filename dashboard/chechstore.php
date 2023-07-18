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
                            <center>
                            <div class="col-xl-8 col-lg-14 col-md-8 col-sm-14 col-14"style="justify-content: center">
                            
                                <div class="card">
                                    
                                    <div class="card-body p-0">
                                        <div class="table-responsive" style="justify-content: center">
                                       
                                            <table class="table"  >
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">no</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Total Price</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    require 'config.php';
                                                    $stmt = $conn->prepare('SELECT id, p_names,SUM(price),SUM(quantity),category FROM products GROUP BY p_names;');
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    while ($row = $result->fetch_assoc()):
                                                ?>
                                                    <tr>
                                                        <td><?=$row['id']?></td>
                                                        <td><?=$row['p_names']?></td>
                                                        <td><?=$row['SUM(quantity)']?></td>
                                                        <td><?=$row['SUM(price)']?></td>
                                                        <td>
                                                        <i class="zmdi zmdi-edit"></i>
                                                        <td><a href="index.php?id= <?=$row['id'] ?>"class="text text-danger" onclick="return confirm('Are you sure want to delete this item?');">delete</a></td>
                                                        
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