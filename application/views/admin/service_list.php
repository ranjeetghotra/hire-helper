<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Option</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($rows as $row) { ?>

            <tr>
                <th scope="row"><?php echo ($row['service_id']) ?></th>
                <td><?= $row['service_name'] ?></td>
                <td><span data-id="<?= $row['service_id'] ?>" class="btn btn-danger btn-sm delete-item">Delete</span>
                    <span data-id="<?= $row['service_id'] ?>" class="btn btn-secondary btn-sm edit-item">Edit</span>
                    <span data-id="<?= $row['service_id'] ?>" class="btn btn-info btn-sm more-item">Additional</span></td>
            </tr>
        <?php } ?>

    </tbody>
</table>
