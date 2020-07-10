<?php if (count($orders) > 0) {?><table class="table" id="myTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Service Type</th>
            <th>Order Date</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody><?php foreach ($orders as $o) {?>
        <tr>
            <td>#<?=$o['order_id']?></td>
            <td><?=$o['service_name']?></td>
            <td><?=$o['choose_date']?></td>
            <td><?=$o['order_total'] - $o['order_discount']?></td>
            <td style="text-transform: capitalize"
                class="text-<?=($o['order_status'] == 'complete' ? 'success' : ($o['order_status'] == 'pending' ? 'primary' : ($o['order_status'] == 'cancel' ? 'danger' : '')))?>">
                <?=$o['order_status']?></td>
            <td><button class="btn btn-info btn-sm order-invoice" data-id="<?=$o['order_id']?>">Invoice</button>
                <?php if ($o['order_status'] != 'complete' && $o['order_status'] != 'cancel') {?><button
                    class="btn btn-danger btn-sm order-cancel" data-id="<?=$o['order_id']?>">Cancel</button><?php }?>
            </td>
        </tr><?php }?>
    </tbody>
</table><?php } else {?><h2>No Order Found</h2> <?php }?>
