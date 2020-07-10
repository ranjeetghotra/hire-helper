<style>
    a {
        /*font-size: 0.9em;*/
        color: #72B032;
        /*color: #86BB4F;*/
    }

    a,
    a:hover,
    a:focus,
    a:visited {
        text-decoration: none;
    }

    /** General HTML style - F */

    canvas {
        margin-bottom: 15px;
    }

    /*#monthDrop*/
    .dropdown button .btn-default {
        width: 100%;
        border-color: red;
    }

    .balance {
        line-height: 36px;
        font-size: 36px
    }

    .title {
        color: #a0aeb6;
        line-height: 14px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    /** Rounded divs - I */
    div.rounded,
    div.top-rounded,
    div.bottom-rounded {
        border: solid 1px #dce1e5;
    }

    div.rounded {
        margin-bottom: 30px;
        -webkit-border-radius: 4px 4px 4px 4px;
        -moz-border-radius: 4px 4px 4px 4px;
        border-radius: 4px 4px 4px 4px;
    }

    div.top-rounded {
        -webkit-border-radius: 4px 4px 0px 0px;
        -moz-border-radius: 4px 4px 0px 0px;
        border-radius: 4px 4px 0px 0px;
    }

    div.bottom-rounded {
        border-top-style: none;
        -webkit-border-radius: 0px 0px 4px 4px;
        -moz-border-radius: 0px 0px 4px 4px;
        border-radius: 0px 0px 4px 4px;
    }

    /** Rounded divs - F */


    /** Dropdown draft - I */
    .dropdown span.caret {
        float: right;
        margin-top: 8px;
    }

    .dropdown button {
        text-align: left;
    }

    .dropdown-menu {
        width: 100%;
    }

    /** Dropdown draft - F */

    /** Let tabls-left class be available in bootstrap 3.3.7 - I **/
    .tabs-left>.nav-tabs {
        border-bottom: 0;
    }

    .tab-content>.tab-pane {
        display: none;
    }

    .tab-content>.active {
        display: block;
    }

    .tabs-left>.nav-tabs>li {
        float: none;
    }

    .tabs-left>.nav-tabs>li>a,
    .tabs-left>.nav-tabs>li>div {
        margin-right: 0;
        margin-bottom: 3px;
    }

    .tabs-left>.nav-tabs {
        float: left;
        margin-right: 19px;
        border-right: 1px solid #ddd;
    }

    .tabs-left>.nav-tabs>li>a,
    .tabs-left>.nav-tabs>li>div {
        margin-right: -1px;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px;
    }

    .tabs-left>.nav-tabs>li>a:hover,
    .tabs-left>.nav-tabs>li>a:focus,
    .tabs-left>.nav-tabs>li>div:hover,
    .tabs-left>.nav-tabs>li>div:focus {
        border-color: #eeeeee #dddddd #eeeeee #eeeeee;
        background-color: #eeeeee;
    }

    .tabs-left>.nav-tabs .active>a,
    .tabs-left>.nav-tabs .active>a:hover,
    .tabs-left>.nav-tabs .active>a:focus,
    .tabs-left>.nav-tabs .active>div,
    .tabs-left>.nav-tabs .active>div:hover,
    .tabs-left>.nav-tabs .active>div:focus {
        border-color: #ddd transparent #ddd #ddd;
        *border-right-color: #ffffff;
    }

    /** Let tabls-left class be available in bootstrap 3.3.7 - F **/

    .account-type {
        font-family: 'Roboto', sans-serif;
        color: #A0AEB6;
        font-size: 18px;
        font-weight: bold;
        line-height: 18px;
    }

    .account-amount {
        font-family: 'Roboto', sans-serif;
        color: #A0AEB6;
        font-size: 14px;
        line-height: 16px;
    }

    /* TABS */
    .tabs-left>.nav-tabs {
        margin-right: 0px;
        padding: 0;
        min-height: 400px;
        /* Debe ser el mismo height que el que tenga .tab-content */
    }

    /* CONTENIDO DE LOS TABS */
    .tab-content {
        background-color: #FFFFFF;
        border: solid 1px #DCE1E5;
        border-left-style: none;
        min-height: 400px;
        /* Debe ser el mismo height que el que tenga .tabs-left > .nav-tabs */
        padding-left: 50px;

        border-radius: 0px 4px 4px 4px;
        -moz-border-radius: 0px 4px 4px 4px;
        -webkit-border-radius: 0px 4px 4px 4px;

        -webkit-box-shadow: 0px 0px 18px 2px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: 0px 0px 18px 2px rgba(0, 0, 0, 0.05);
        box-shadow: 0px 0px 18px 2px rgba(0, 0, 0, 0.05);
    }

    .tab-content>div {
        margin-top: 26px;
    }

    /* Formato del tab activo */
    .tabs-left>.nav-tabs .active>a,
    .tabs-left>.nav-tabs .active>a:hover,
    .tabs-left>.nav-tabs .active>a:focus,

    .tabs-left>.nav-tabs .active div,
    .tabs-left>.nav-tabs .active div:hover,
    .tabs-left>.nav-tabs .active div:focus {
        background-color: #FFFFFF;

        border-bottom-style: none;
        border-left-style: none;

        /*border-bottom: 1px solid #DCE1E5;*/
        /*border-left: 1px solid #DCE1E5;*/
        border-bottom-left-radius: 0px;
        border-right-style: none;

        margin-right: -1px;

        -webkit-box-shadow: -4px 0px 18px -1px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: -4px 0px 18px -1px rgba(0, 0, 0, 0.05);
        box-shadow: -4px 0px 18px -1px rgba(0, 0, 0, 0.05);
    }

    /* Formato de los tabs en general */
    .tabs-left>.nav-tabs>li:nth-child(1)>a,
    .tabs-left>.nav-tabs>li:nth-child(1)>a:hover,
    .tabs-left>.nav-tabs>li:nth-child(1)>a:focus,

    .tabs-left>.nav-tabs>li:nth-child(1)>div,
    .tabs-left>.nav-tabs>li:nth-child(1)>div:hover,
    .tabs-left>.nav-tabs>li:nth-child(1)>div:focus {
        cursor: pointer;
        border-top-left-radius: 4px;
    }

	.nav-tabs li{
		cursor: pointer;
	}

    .tabs-left>.nav-tabs>li.active:nth-child(1)>a,
    .tabs-left>.nav-tabs>li.active:nth-child(1)>a:hover,
    .tabs-left>.nav-tabs>li.active:nth-child(1)>a:focus,

    .tabs-left>.nav-tabs>li.active:nth-child(1)>div,
    .tabs-left>.nav-tabs>li.active:nth-child(1)>div:hover,
    .tabs-left>.nav-tabs>li.active:nth-child(1)>div:focus {
        border-top-left-radius: 4px;
        border-bottom-style: none;
        border-left: 1px solid #DCE1E5;
    }

    .tabs-left>.nav-tabs>li>a,
    .tabs-left>.nav-tabs>li>div {
        display: table;
        /*border: solid 1px transparent;*/
        margin-right: -1px;

        margin-bottom: 0;
        padding: 15px 0;

        border: solid 1px #DCE1E5;
        border-radius: 0px;
    }

    /* Style of the div element acting as tab content */
    .tabbable.tabs-left>.nav-tabs>li>div>div {
        display: table-cell;
        vertical-align: middle;
        padding: 0px 12px 0px 12px;

        min-width: 150px;
        max-width: 150px;

        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }


    .affix {
        top: 0 !important;
    }
</style>
<div class="container" style="margin-top: 30px">
    <div class="row">
        <div id="MyAccountsTab" class="tabbable tabs-left">
            <ul class="nav nav-tabs col-md-1">
                <li class="active">
                    <div data-target="#lA" data-toggle="tab">
                        <div>
							<span class="account-type">Orders</span><br />
							<span class="account-amount">Manage</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div data-target="#lB" data-toggle="tab">
                        <div>
                            <span class="account-type">Profile</span><br />
                            <span class="account-amount">Edit/Update</span><br />
                        </div>
                    </div>
                </li>
                <!--<li>
                    <div data-target="#lC" data-toggle="tab">
                        <div>
                            <span class="account-type">HSAOD</span><br />
                            <span class="account-amount">$350,00</span><br />
                        </div>
                    </div>
                </li>
                <li>
                    <div data-target="#lD" data-toggle="tab">
                        <div>
                            <span class="account-type">DCAP</span><br />
                            <span class="account-amount">$2.300,00</span><br />
                            <a href="#" class="account-link">Investments</a>
                        </div>
                    </div>
                </li>-->
            </ul>
            <div class="tab-content col-md-11">
                <div class="tab-pane active" id="lA" style="padding-left: 60px; padding-right:100px">

                </div>
                <div class="tab-pane" id="lB" style="padding-left: 50px; padding-right:100px">

                </div>
                <!--<div class="tab-pane" id="lC">
                    <div>
                        <p>HSAOD account selected.</p>
                    </div>
                </div>
                <div class="tab-pane" id="lD">
                    <div>
                        <p>DCAP account selected.</p>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="invoiceModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" id="invoice-content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(document).ready(function() {

        $('#lA').load('/profile/orders', function() {
            $('#myTable').DataTable({
                "searching": false,
                ordering: false
            });
        });
		$('#lB').load('/profile/detail', function() {
        });
        $(document).on('click', '.order-cancel', function() {
            var that = this;
            if (confirm("Are You Really want to Cancel")) {
                $.get('/welcome/user/orders/cancel/' + $(that).data('id'), function(data) {
                    $('#lA').load('/profile/orders', function(){
						$('#myTable').DataTable({
                        "searching": false,
                        ordering: false
                    });
					});
                });
            }
        });
        $(document).on('click', '.order-invoice', function() {
            var that = this;
            $('#invoice-content').load('/welcome/user/orders/invoice/'+$(that).data('id'));
            $('#invoiceModal').modal('show');
        });


    });
</script>
