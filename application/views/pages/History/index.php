<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
    </div>

	<a href="<?php echo base_url('order'); ?>" class="btn btn-primary btn-sm shadow-sm mb-3">New Order</a>


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Product</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                        foreach($order as $c) : ?>
                            <tr>
                            <td><?= $i++ ;?></td>
                            <td><?= $c['ProductName'] ;?></td>
                            <td><?= $c['CreatedAt'] ;?></td>
                            <td>
                                <?php 
                                    if ($c['Status'] == 0) {
                                        echo '<button class="btn btn-warning btn-md text-white">Unpaid</button>';
                                    } else {
                                        echo '<button class="btn btn-success btn-md text-white">Paid</button>';
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($c['Status'] == 0) {
                                        echo '<a href="'.base_url('Order/confirm?id='.$c['OrderID'].'&Status=1').'">Confirm</a>';
                                    } else {
                                        echo 'Verified';
                                    }
                                ?>
                            </td>
                            </tr>
                    <?php endforeach ;?>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
</div>