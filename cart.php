<?php
include_once 'server/userheader.php';

$grand_total=0;
?>
        <main>
            <!-- page__title-start -->
            <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page__title-inner text-center">
                                <h1>Your Cart</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page__title-end -->

            <!-- cart-area start -->
            <section class="cart-area pt-120 pb-120">
                <div class="container">
                   <div class="row">
                      <div class="col-12">
                            <form action="#">
                               <div class="table-content table-responsive">
                                  <table class="table">
                                        <thead>
                                           <tr>
                                              <th class="product-thumbnail">Images</th>
                                              <th class="cart-product-name">Product</th>
                                              <th class="product-price">Unit Price (Kshs.)</th>
                                              <th class="product-quantity">Quantity</th>
                                              <th class="product-subtotal">Total (Kshs.)</th>
                                              <th class="product-remove">Remove</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($selectusercart as $row) { ?>
                                           <tr>
                                              <td class="product-thumbnail"><a href="product-details.php?view=<?= $row['id']; ?>"><img src="server/<?= $row['productimage']; ?>" alt=""></a></td>
                                              <td class="product-name"><a href="product-details.php?view=<?= $row['id']; ?>"><?= $row['productname']; ?></a></td>
                                              <td class="product-price"><span class="amount"><?= $row['price']; ?></span></td>
                                              <td class="product-quantity"><?= $row['quantity']; ?></td>
                                              <td class="product-subtotal"><span class="amount"><?= $row['total']; ?></span></td>
                                              <td class="product-remove"><a href="server/action.php?delcart=<?= $row['id']; ?>"><i class="fa fa-times"></i></a></td>
                                           </tr>
                                           <?php $grand_total+=$row['total']; ?>
                                         <?php } ?>
                                        </tbody>
                                  </table>
                               </div>

                               <div class="row justify-content-end">
                                  <div class="col-md-5">
                                        <div class="cart-page-total">
                                           <h2>Cart totals</h2>
                                           <ul class="mb-20">
                                              <li>Total <span><?= $grand_total; ?></span></li>
                                           </ul>
                                           <a class="btn-tp-2" href="checkout.php">Proceed to checkout</a>
                                           <a class="btn-tp-2" href="index.php">Continue Shopping</a>
                                        </div>
                                  </div>
                               </div>
                            </form>
                      </div>
                   </div>
                </div>
            </section>
            <!-- cart-area end -->

        </main>


        <!-- footer area start -->
        <footer>
            <div class="footer__area footer-bg">
              <div class="footer__bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="footer__bottom-wrapper text-center">
                              <div class="footer__copyright">
                                        <p>Copyright ??2022 Buy/Sell. All Rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

     <!-- JS here -->
      <script src="assets/js/bootstrap-bundle.js"></script>

      <script src="assets/js/main.js"></script>
   </body>


</html>
