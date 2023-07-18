
        <html lang="en">
 
 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
     <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
     <link rel="stylesheet" href="assets/libs/css/style.css">
     <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
     <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
     <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
     <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
     <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
     <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
     <title>biriho market</title>
 </head>
 
 <body>
 <br><br>
                            <div class=" container col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                               <div class="card">
                               <a href="index.php"> <button type="submit" class="btn btn-space btn-primary" name="submit">Home</button></a>
                                <center><h2 class="card-header">
                            
                                Products Registration</h2></center>
                                <div class="card-body">
                                    <form id="validationform" action="product.php" enctype="multipart/form-data" method="POST">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Product name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="product name" class="form-control"name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <textarea required="" class="form-control" name="desc"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Price</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-min="6" placeholder="price" class="form-control" name="price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Quantity</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" placeholder="Quantity" class="form-control" name="qty">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">date</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="date" required="" placeholder="date" class="form-control" name="date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">category</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" placeholder="category" class="form-control" name="category">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">image</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file" required="" class="form-control" name="uploadfile">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary" name="submit">Submit</button>
                                               
                                            </div>
                                        </div>
                                    </form>
                                    <div class="text text-right"style="padding-button:100px;">
                                        <a href="index.php"><button class="btn btn-space btn-secondary">Cancel</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>