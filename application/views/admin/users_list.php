<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name </th>
            <th scope="col">Mobile </th>
            
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) { ?>

            <tr>
                <th scope="row">#<?php echo ($row['user_id']) ?></th>
                <td><?= $row['user_fname'] ?> <?= $row['user_lname'] ?></td>
                <td><?= $row['user_mobile'] ?></td>
                <!-- <td><?= $row['user_email'] ?></td>
                 -->
                <td><span data-id="<?= $row['user_id'] ?>" class="btn btn-danger btn-sm delete-item">Delete</span>
                    <?php /*?><span data-id="<?= $row['user_id'] ?>" class="btn btn-secondary btn-sm edit-item">Edit</span><?php*/ ?>
                    <span data-id="<?= $row['user_id'] ?>" class="btn btn-secondary btn-sm view-item">View</span></td>
            </tr>
        <?php } ?>

    </tbody>
</table>
