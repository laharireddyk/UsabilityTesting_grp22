<?php include_once 'server/adminheader.php'; ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">New Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<!--					START	BODY CONTENT-->



                <div class="container">
                  <form action="server/action.php" method="post" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="checkbox-form">
                                  <h3>Sell Your Product</h3>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Product Name <span class="required">*</span></label>
                                               <input type="text" placeholder="" name="pname" required>
                                          </div>
                                      </div>
                    <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Upload Product Image<span class="required">*</span></label>
                                              <input type="file" name="pimage" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Category <span class="required">*</span></label>
                                              <input type="text" placeholder="" name="sname" required>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="checkout-form-list">
                                              <label>Price <span class="required">*</span></label>
                                              <input type="text" placeholder="" name="price" required>
                                          </div>
                                      </div>

                                      <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Location <span class="required">*</span></label>
                                              <input type="text" placeholder="Write Location" name="location" required>
                                          </div>
                                      </div>
                                  <div class="col-md-12">
                                          <div class="checkout-form-list">
                                              <label>Description <span class="required">*</span></label>
                                              <textarea rows="5" style="width: 100%" name="description" required>

                      </textarea>
                                          </div>
                                      </div>

                                  </div>
                            </div>
               <div class="order-button-payment mt-20">
                                      <button type="submit" class="btn-tp" name="adminupload_btn" type="submit">Upload Product</button>
                                      </div>
                          </div>
                          <div class="col-lg-6">
              <img src="assets/img/shop%20(2).png" class="img-fluid mx-auto">

                         </div>
                      </div>
                  </form>
                </div>






		<!--					END	BODY CONTENT-->



					</div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Buy/Sell 2022</div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
