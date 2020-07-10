<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Client</th>
            <th scope="col">Service</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Status</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) {?>

        <tr>
            <th scope="row"><?php echo ($row['order_id']) ?></th>
            <td><?=$row['order_fn']?></td>
            <td><?=$row['service_name']?></td>
            <td><?=date('M d Y', strtotime($row['choose_date']))?></td>
            <td><?=date('g:i a', strtotime($row['choose_time']))?></td>
            <td><select data-id="<?=$row['order_id']?>" value="<?=$row['order_status']?>" class="form-control status-item">
                    <option <?=$row['order_status'] == 'waiting' ? 'selected' : ''?>>waiting</option>
                    <option <?=$row['order_status'] == 'cancel' ? 'selected' : ''?>>cancel</option>
                    <option <?=$row['order_status'] == 'approve' ? 'selected' : ''?>>approve</option>
                    <option <?=$row['order_status'] == 'complete' ? 'selected' : ''?>>complete</option>
                </select></td>
            <td>
                <!--<span data-id="<?=$row['order_id']?>" class="btn btn-secondary btn-sm edit-item">Edit</span>-->
                <span data-id="<?=$row['order_id']?>" class="btn btn-primary btn-sm view-item">View</span></td>
        </tr>
        <?php }?>

    </tbody>
</table>
