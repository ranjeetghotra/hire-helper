<form method="post" action="/admin/subservice/insert" class="ajax-form" enctype='multipart/form-data'>
    <div class="row">
        <div class="form-group col-md-8">
            <label for="formGroupExampleInput">Add New Sub Service</label>
            <input type="text" class="form-control required" name="name" id="formGroupExampleInput" placeholder="Service Name">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Service</label>
            <select id="inputState" name="service" class="form-control required">
                <option selected hidden disabled>Choose...</option>
                <?php foreach ($services as $s) { ?><option value="<?= $s['service_id'] ?>"><?= $s['service_name'] ?></option><?php } ?>
            </select>
        </div>
        <div class="form-group col-md-6 align-items-center required">
            <label for="exampleFormControlFile1">Add Image</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
    </div>
    <div class="form-group align-items-center">
        <button type="submit" class="btn btn-success">Add</button>
    </div>

</form>
<!-- gusa a gya kddu nu hahahjyada page khulge c' awwww -->