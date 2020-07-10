
<div class="container bootstrap snippet">
    <div class="panel-body ">
            <div class="col-md-12 text-center mt-3">
                <img alt="" style="width:100px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" data-original-title="Usuario">
                <ul title="Ratings" class="list-inline ratings text-center">
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                </ul>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <h4 style="text-align:center;">
                    <strong id="user-name"><?= $row['user_fname'] . ' ' . $row['user_lname'] ?></strong></h5>
                    <hr width="100%" size="2" color="blue">
                    <div class="table-responsive ">
                        <h5 style="text-align:left; color:red;">User Detail</h5>
                        <table class="table table-condensed table-responsive table-user-information  text-center mt-1">
                            <tbody>

                                <tr>
                                    <td>
                                        <strong>
                                            <span class="fas fa-user  text-primary"></span>
                                            First  Name:-
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $row['user_fname'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="fas fa-user text-primary"></span>
                                            Last name:-
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $row['user_lname'] ?>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <strong>
                                            <span class="fas fa-envelope text-primary"></span>
                                           User Email:-
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $row['user_email'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="fas fa-mobile  text-primary"></span>
                                            Mobile No:-
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $row['user_mobile'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="fas fa-snowboarding  text-primary"></span>
                                            Status :-
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <span class="<?= ($row['user_activated']==true? 'bg-success' : 'bg-dark') ?> text-white p-1"><?= ($row['user_activated']==true? 'Active' : 'Deactive') ?></span>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <strong>
                                            <span class="fas fa-plus-circle text-primary"></span>
                                            Created At:-
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                        <?= $row['user_created_at'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="fas fa-wallet text-primary"></span>
                                            User Wallet:-
                                        </strong>
                                    </td>
                                    <td class="text-primary">
                                    &#8377<?= $row['user_wallet'] ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mt-3">
    <figure>
        <img src="/uploads/user/default.png" alt="" class="img-circle" style="width:75px;" id="user-img">
    </figure>
    <h5 style="text-align:center;"><strong id="user-name"><?= $row['user_fname'] . ' ' . $row['user_lname'] ?></strong></h5>
    <hr width="90%" size="2">
    
</div> -->