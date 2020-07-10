<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer e-mail</th>
                                <th scope="col">Customer Message*</th>
                                <td scope="col">Action</td>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer e-mail</th>
                                <th scope="col">Customer Message*</th>
                                <td scope="col">Action</td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($rows as $row) { ?>

                                <tr>
                                    <th scope="col">#<?php echo ($row['contact_id']) ?></th>
                                    <td><?= $row['contact_name'] ?></td>
                                    <td><?= $row['contact_email'] ?></td>
                                    <td><?= $row['contact_message'] ?></td>
                                    <td><span data-id="<?= $row['contact_id'] ?>" class="btn btn-danger btn-sm delete-item">Delete</span>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>