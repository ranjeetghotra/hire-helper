<form method="post" action="/admin/subservice/update/<?=$row['cservice_id']?>" class="ajax-form" enctype='multipart/form-data'>
    <div class="row">
        <div class="form-group col-md-8">
            <label for="formGroupExampleInput">Add New Sub Service</label>
            <input type="text" class="form-control" value="<?=$row['c_name']?>" name="name" id="formGroupExampleInput" placeholder="Service Name">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Service</label>
            <select id="inputState" name="service" class="form-control">
                <option hidden></option>
                <?php foreach ($services as $s) { ?><option <?php if($row['cservice_service'] == $s['service_id']) echo "selected"; ?> value="<?= $s['service_id'] ?>"><?= $s['service_name'] ?></option><?php } ?>
            </select>
        </div>
        <div class="form-group col-md-6 align-items-center">
            <label for="exampleFormControlFile1">Add Image</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <div class="form-group align-items-center">
        <button type="submit" class="btn btn-success">Add</button>
    </div>

</form>