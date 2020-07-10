
   <div style="width:100%; padding:10px; float:left; background:#1ca8dd; color:#fff; font-size:30px; text-align:center;">
	Invoice
   </div>
    <div style="width:100%; padding:0px 0px;border-bottom:1px solid rgba(0,0,0,0.2);float:left;">
        <div style="width:30%; float:left;padding:10px;">

            <span style="font-size:14px;float:left; width:100%;">
                <b><?=$order_fn?></b>
            </span>
			 <span style="font-size:14px;float:left;width:100%;">
			 <?php $address = json_decode($order_address,true)?>
			 <?=$address['address']?> <?=$address['city']?><br>
				<?=$address['pincode']?>
            </span>
			<span style="font-size:14px;float:left;width:100%;">
			<?=$order_email?>
			</span>
        </div>

        <div style="width:40%; float:right;">
            <span style="font-size:14px;float:right;  padding:10px; text-align:right;">
                <b>Date : </b><?=date('Y-m-d', strtotime($order_created_at))?>
            </span>
			<span style="font-size:14px;float:right;  padding:10px; text-align:right;">
               <b>Invoice# : </b><?=$order_id?>
            </span>
        </div>
    </div>





    <div style="width:100%; padding:0px; float:left;">

          <div style="width:100%;float:left;background:#efefef;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;font-weight:600;">
            Decription
           </span>
         <span style="font-weight:600;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
         Amount
        </span>
      </div>

      <?php /*?><div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            session with Jessika test


            <span style="font-size:10px; float:left; width:100%;">
                (Text Consulting)
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            373 INR
        </span>
      </div>
	   <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Promotional Code
            <span style="font-size:10px; float:left; width:100%;">
                (0%)
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            0 INR
        </span>
      </div><?php*/ ?>

	  	   <div style="width:100%;float:left; background:#fff;">

         <span style="font-weight:600;float:right;padding:10px 0px;width:40%;color:#666;text-align:center;">
           Total : <?=$order_total?> INR
        </span>
      </div>

    </div>
