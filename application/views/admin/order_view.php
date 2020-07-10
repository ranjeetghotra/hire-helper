<div class="container">
    <div style="height:100ps; width:100%;background:#0D86BE; margin-top:30px; align:center;border:solid;padding:10px;">
        <h4 style="color:white;text-align:center; font-family:Arial, Helvetica, sans-serif;">VIEW ORDER </h4>
    </div>

    <div class="row md-12 sm-12 lg-12">
        <table class="table table-striped md-12 mt-3" style="padding:20px;margin:10px;border:solid 3px ">
            <tbody>

                <tr>
                    <th scope="row"> Name</th>
                    <td><?=$row['order_fn']?> <?=$row['order_ln']?></td>
                </tr>
                <tr>
                    <th scope="row">E-Mail</th>
                    <td><?=$row['order_email']?></td>
                </tr>
                <tr>
                    <th scope="row">Mobile</th>
                    <td><?=$row['order_mob']?></td>
                </tr>
                <tr>
                    <th scope="row">Adress</th>
                    <td><?php $address = (array) json_decode($row['order_address'], true);?>
                     <?=$address['address']?><br/>
                     <?=$address['city']?><br/>
                     <?=$address['pincode']?><br/></td>
                </tr>
                <tr>
                    <th scope="row">Service</th>
                    <td><?=$row['service_name']?></td>
                </tr>
                <tr>
                    <th scope="row"> Date</th>
                    <td><?=$row['choose_date']?></td>
                </tr>
                <tr>
                    <th scope="row"> Time</th>
                    <td><?=date('g:i A',strtotime($row['choose_time'])) ?></td>
                </tr>
                <tr><?php $order = (array) json_decode($row['order_detail'], true);?>
                    <th scope="row">WorkTime </th>
                    <td><?=$order['worktime']?> Hours</td>
				</tr>
				<tr>
                    <th scope="row">Ladder</th>
                    <td><?=($order['ladder'] == 0 ? 'Not Required' : $order['ladder'] . ' feet')?></td>
				</tr>
				<tr><?php $order = (array) json_decode($row['order_detail'], true);?>
                    <th scope="row">Items</th>
					<td><?=($order['houseItems']['small'] != 0 ? $order['houseItems']['small'] . ' Small' : '')?><?=($order['houseItems']['small'] != 0 && $order['houseItems']['large'] != 0 ? ' and' : '')?> <?=($order['houseItems']['large'] != 0 ? $order['houseItems']['large'] . ' Large' : '')?>
					<?=($order['houseItems']['small'] == 0 && $order['houseItems']['large'] == 0 ? 'Not Defined' : '')?></td>
				</tr>
				<tr>
                    <th scope="row">Detail</th>
                    <td><?=$order['detail'] ?></td>
				</tr>
				<tr>
                    <th scope="row">Amount</th>
                    <td>&#8377;<?=number_format($row['order_total'])?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
