<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Super Service</th>
            <th scope="col">icon</th>
            <th scope="col">Images</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) { ?>

            <tr>
                <th scope="row">#<?php echo ($row['cservice_id']) ?></th>
                <td><?= $row['c_name'] ?></td>
                <td><?= $row['service_name'] ?></td>
                <td><?= $row['c_icon'] ?></td>
                <td><?= $row['c_image'] ?></td>
                <td><span data-id="<?= $row['cservice_id'] ?>" class="btn btn-danger btn-sm delete-item">Delete</span>
                    <span data-id="<?= $row['cservice_id'] ?>" class="btn btn-secondary btn-sm edit-item">Edit</span></td>
            </tr>
        <?php } ?>

    </tbody>
</table>