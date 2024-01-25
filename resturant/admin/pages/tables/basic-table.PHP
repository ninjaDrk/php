<?php include('../include.php');
include('../../dbconnect.php');
      
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> invoices </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">invoice</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
           
            
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">invoice</h4>
                    <?php
                      $sql="SELECT count( o.id_order),o.id_order,date_order ,quantity,price_item,total, name_item FROM orders o JOIN order_list l on (o.id_order=l.id_order) JOIN item t ON (l.id_item=t.id_item) where o.id_order=l.id_order GROUP by o.id_order HAVING count( o.id_order) >1
                      ";
                      $stm=$conn->prepare($sql);
                      $stm->execute();
                      if ($stm->rowcount()){
                        foreach ($stm->fetchall() as $row){
                          $id_order=$row['id_order'];
                          $date_order=$row['date_order'];
                          
                      
                      ?>
                    <p class="card-description"> <?php echo "Date: ".$date_order ?> <code> <?php echo "id order: ".$id_order ?></code>
                    </p>
                    <?php 
                  }}?>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>category</th>
                          <th>amount</th>
                          <th>price</th>
                          <th>total</th>
                        </tr>
                      </thead>
                      <?php
                      $sql="SELECT count( l.id_order),total_order,l.id_order,date_order ,quantity,price_item,total, name_item FROM orders o JOIN order_list l on (o.id_order=l.id_order) JOIN item t ON (l.id_item=t.id_item) where o.id_order=l.id_order GROUP by l.id_order HAVING count( l.id_order) > 1 
                      ";
                      $stm=$conn->prepare($sql);
                      $stm->execute();
                      if ($stm->rowcount()){
                        foreach ($stm->fetchall() as $row){
                          $name_item=$row['name_item'];
                          $quantity=$row['quantity'];
                          $price_item=$row['price_item'];
                          $total=$row['total'];
                          $total_order=$row['total_order'];

                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $name_item ?></td>
                          <td><?php echo $quantity ?></td>
                          <td><?php echo $price_item ?></td>
                          <td><?php echo $total ?></td>
                        </tr>
                        <tr>
                          <td rowspan="3"><?php  echo "totle : ".$total_order ?></td>
                        </tr>
                        
                      </tbody>
                      <?php }} ?>
                    </table>
                  </div>
                </div>
              </div>
              
              <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> invoices </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">invoice</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
           
            <?php
                      $sql="SELECT count( l.id_order),total_order,l.id_order,date_order ,quantity,price_item,total, name_item FROM orders o JOIN order_list l on (o.id_order=l.id_order) JOIN item t ON (l.id_item=t.id_item) where o.id_order=l.id_order GROUP by l.id_order HAVING count( l.id_order) =1
                      ";
                      $stm=$conn->prepare($sql);
                      $stm->execute();
                      if ($stm->rowcount()){
                        foreach ($stm->fetchall() as $row){
                          $name_item=$row['name_item'];
                          $quantity=$row['quantity'];
                          $price_item=$row['price_item'];
                          $total=$row['total'];
                          $id_order=$row['id_order'];
                          $date_order=$row['date_order'];
                          $total_order=$row['total_order'];
                          
                      
                      ?>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">invoice</h4>
                   
                    <p class="card-description"> <?php echo "Date: ".$date_order ?> <code> <?php echo "id order: ".$id_order ?></code>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>category</th>
                          <th>amount</th>
                          <th>price</th>
                          <th>total</th>
                        </tr>
                      </thead>
                    
                      <tbody>
                        <tr>
                          <td><?php echo $name_item ?></td>
                          <td><?php echo $quantity ?></td>
                          <td><?php echo $price_item ?></td>
                          <td><?php echo $total ?></td>
                        </tr>

                        <tr>
                          <td rowspan="3"><?php  echo "totle : ".$total_order ?></td>
                        </tr>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
              <?php }} ?>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Hoverable Table</h4>
                    <p class="card-description"> Add class <code>.table-hover</code>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>item</th>
                          <th>Product</th>
                          <th>Sale</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                          <td><label class="badge badge-info">Fixed</label></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                          <td><label class="badge badge-success">Completed</label></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Items</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> img </th>
                          <th> id </th>
                          <th> name </th>
                          <th> descrpation </th>
                          <th> old price </th>
                          <th> new price </th>
                          
                        </tr>
                      </thead>
                      
                      <?php
                      $sql="SELECT * FROM item";
                      $stm=$conn->prepare($sql);
                      $stm->execute();
                      if ($stm->rowcount()){
                        foreach ($stm->fetchall() as $row){
                          $file_img=$row['file_img'];
                          $id_item=$row['id_item'];
                          $name_item=$row['name_item'];
                          $descr_item=$row['descr_item'];
                          $old_price_item=$row['old_price_item'];
                          $price_item=$row['price_item'];
                      
                      ?>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="../../upload/<?php echo $file_img ?>  " alt="" />
                          </td>
                          <td><?php echo $id_item ?> </td>
                          <td> <?php echo $name_item ?> </td>
                          <td>
                            <?php echo $descr_item ?>
                          </td>
                          <td> <?php echo $old_price_item ?> </td>
                          
                          <td> <?php echo $price_item ?> </td>
                        </tr>
                      </tbody>
                      <?php }} ?>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> First name </th>
                          <th> Progress </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> Herman Beck </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> Messsy Adam </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td> John Richards </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td> Peter Meggik </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td> Edward </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                        </tr>
                        <tr>
                          <td> 6 </td>
                          <td> John Doe </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 123.21 </td>
                          <td> April 05, 2015 </td>
                        </tr>
                        <tr>
                          <td> 7 </td>
                          <td> Henry Tom </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 150.00 </td>
                          <td> June 16, 2015 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Invoice Table</h4>
                    <p class="card-description"> Add class <code>.table-dark</code>
                    </p>
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> id_order </th>
                          <th> date_order</th>
                          <th> quantity </th>
                          <th> total </th>
                          <th>processing_order</th>
                        </tr>
                      </thead>
                      <?php
                      $sql="SELECT o.id_order, date_order, total_order, descr_order, processing_order, delivery_order, address_ccostomer, id_pay, id_item,l.quantity,l.total
                      FROM orders o JOIN order_list l on (o.id_order=l.id_order)";
                      $stm=$conn->prepare($sql);
                      $stm->execute();
                      if ($stm->rowcount()){
                        foreach ($stm->fetchall() as $row){
                          $id_order=$row['id_order'];
                          $date_order=$row['date_order'];
                          $quantity=$row['quantity'];
                          $total=$row['total'];
                          $processing_order=$row['processing_order'];
                      
                      ?>
                      <tbody>
                        <tr>
                          <td> <?php echo $id_order; ?> </td>
                          <td> <?php echo $date_order; ?> </td>
                          <td> <?php echo $quantity; ?> </td>
                          <td> <?php echo $total; ?> </td>
                          <td> <?php echo $processing_order; ?> </td>
                        </tr>
                      </tbody>
               <?php     }
                      }?>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with contextual classes</h4>
                    <p class="card-description"> Add class <code>.table-{color}</code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> First name </th>
                          <th> Product </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td> 1 </td>
                          <td> Herman Beck </td>
                          <td> Photoshop </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr class="table-warning">
                          <td> 2 </td>
                          <td> Messsy Adam </td>
                          <td> Flash </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                        </tr>
                        <tr class="table-danger">
                          <td> 3 </td>
                          <td> John Richards </td>
                          <td> Premeire </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                        </tr>
                        <tr class="table-success">
                          <td> 4 </td>
                          <td> Peter Meggik </td>
                          <td> After effects </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr class="table-primary">
                          <td> 5 </td>
                          <td> Edward </td>
                          <td> Illustrator </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.php -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>