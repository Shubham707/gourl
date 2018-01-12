<?php $this->load->view('frontend/headerfront');?>  
<div class="page-content-wrap bg-light">
    <div class="page-content-holder no-padding">
        <div class="page-title">
            <h1>Pay Per Product</h1>
            <ul class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li class="active"><a href="#">Pay Per Product</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-content-wrap">
    <div class="page-content-holder">
        <div class="block-heading this-animate" data-animate="fadeInDown">
            <h2>Payment Box</h2>
            <div class="block-heading-text">
                <a class="btn btn-info" href="<?php echo base_url();?>product/add-product">Add Product</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Active?</th>
                        <th>Title</th>
                        <th>Price in USD</th>
                        <th>Price in Coins</th>
                        <th>Total Sold</th>
                        <th>Latest Received Payment, GMT</th>
                        <th>Record Updated, GMT</th>
                        <th>Record Created, GMT</th>
                        <th>Payment Expiry Period</th>
                        <th>Default Payment Box Coin</th>
                        <th>Default Coin only?</th>
                         <th>Default Box Language</th>
                        <th>Purchase Limit</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1;
                    foreach($getProduct as  $value){ 
                        ?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $value->active; ?></td>
                        <td><?= $value->productTitle; ?></td>
                        <td><?= $value->priceUSD; ?></td>
                        <td><?= $value->priceCoin; ?></td>
                        <td><?= $value->priceLabel; ?></td>
                        <td><?= $value->paymentCnt; ?></td>
                        <td><?= $value->createtime; ?></td>
                        <td><?= $value->updatetime; ?></td>
                        <td><?= $value->expiryPeriod; ?></td>
                        <td><?= $value->ak_action; ?></td>
                        <td><?= $value->defCoin; ?></td>
                        <td><?= $value->lang;?></td>
                        <td><?= $value->purchases; ?></td>
                        <td>Edit</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
            <?php $this->load->view('frontend/footer');?>  