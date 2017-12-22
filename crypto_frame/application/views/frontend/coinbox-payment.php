
<style>
.dataTable tbody tr:nth-child(odd) { background-color:#fff !important; } 
.dataTable tbody tr:nth-child(even) { background-color:#f8f8f8; }
</style>
<div class="page-content-wrap bg-light">
  <div class="page-content-holder no-padding">
    <div class="page-title">
      <h1>All Payment Box</h1> 
    </div>
  </div>
</div>
 <?php foreach ($payment_details as $value) { 
  }
  ?>
<!-- page content wrapper -->
<div class="page-content-wrap">
  <!-- page content holder -->
  <div class="page-content-holder">
    <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
      <h2 class="heading-underline">Your Payment Box - <?= ucfirst($coin);?></h2>
      <div class="block-heading-text">A. Summary - Confirmed Payments</div>
      <div class="page-content-wrap bg-light">
        <div class="page-content-holder no-padding">
          <table class="table datatable table-striped" border="1">
            <thead>
              <tr>
                <th><?= $coin;?></th>
                <th>Amount in <?= ucfirst($coin);?></th>
                <th>Approximate Amount in USD</th>
                <th>Number of Payments</th>
              </tr>
            </thead>
            <tbody>
             
          
              <tr>
                <td>Total <?= ucfirst($coin);?> Received(confirmed only)</td>
                <td><?= @$value->amount;?></td>
                <td><?= @$value->amountUSD;?> USD</td>
                <td><?=@ $value->txConfirmed;?> payments</td>
              </tr>
              <tr>
                <td>* Recognised Payments</td>
                <td><?= @$value->amount;?></td>
                <td><?= @$value->amountUSD;?> USD</td>
                <td><?= @$value->txConfirmed;?> payments</td>
              </tr>
              <tr>
                <td>* Unrecognised Payments</td>
                <td><?= @$value->amount;?></td>
                <td><?= @$value->amountUSD;?> USD</td>
                <td><?= @$value->txConfirmed;?> payments</td>
              </tr>
              <tr>
                <td>Total Forwarded/Sent to You</td>
                <td><?= @$value->amount;?></td>
                <td><?= @$value->amountUSD;?> USD</td>
                <td><?= @$value->txConfirmed;?> payments</td>
              </tr>
              <tr>
                <td>Account Balance </td>
                <td><?= @$value->amount;?></td>
                <td colspan="2"></td>
              </tr>
               
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
   <div class="page-content-holder">
    <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
      <h2 class="heading-underline">Your Payment Box - <?= ucfirst($coin);?></h2>
      <div class="block-heading-text">B. Summary - Unconfirmed Payments</div>
      <div class="page-content-wrap bg-light">
        <div class="page-content-holder no-padding">
          <table class="table datatable table-striped" border="1">
            <thead>
              <tr>
                <th><?= $coin;?></th>
                <th>Amount in <?= ucfirst($coin);?></th>
                <th>Approximate Amount in USD</th>
                <th>Number of Payments</th>
              </tr>
            </thead>
            <tbody>
             
            
              <tr>
                <td>Total Unconfirmed Payments (awaiting 6+ confirmations)</td>
                <td><?= @$value->amount;?></td>
                <td><?= @$value->amountUSD;?> USD</td>
                <td><?=@ $value->txConfirmed;?> payments</td>
              </tr>
              <tr>
                <td>* Recognised Payments</td>
                <td><?= @$value->amount;?></td>
                <td><?= @$value->amountUSD;?> USD</td>
                <td><?= @$value->txConfirmed;?> payments</td>
              </tr>
              <tr>
                <td>* Unrecognised Payments</td>
                <td><?= @$value->unrecognised;?></td>
                <td><?= @$value->amountUSD;?> USD</td>
                <td><?= @$value->txConfirmed;?> payments</td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <div class="page-content-wrap bg-light">
    <div class="divider">
      <div class="box"> <span class="fa fa-angle-down"></span>
      </div>
    </div>
    <div class="page-content-holder">
      <div class="row">
        <div class="col-md-12">
          <div class="text-column text-column-centralized this-animate" data-animate="fadeInLeft">
            <div class="text-column-icon"> <span class="fa fa-star"></span>
            </div>
            <h4>Company Mission</h4>
            <div class="text-column-info">Fugiat dapibus, tellus ac cursus commodo, mauris sit condim eser ntumsi nibh, uum a justo vitaes amet risus amets un. Posi sectetut amet fermntum orem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nons.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>