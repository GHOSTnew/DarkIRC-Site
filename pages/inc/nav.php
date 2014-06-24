<?php
$navmd = file_get_contents('static/md/nav.md');
$navhtml = Markdown($navmd);

?>
<nav>
    <?php
        echo $navhtml;
    ?>
<script>
  CoinWidgetCom.go({
    /* make sure you update the wallet_address or you will not get your donations */
    wallet_address: "DMP3meY5fy2ydX45qyXoexw1oLKkSpJYbG"
    , currency: "dogecoin"
    , counter: "amount"
    , alignment: "bl"
    , qrcode: true
    , auto_show: false
    , lbl_button: "Donate"
    , lbl_address: "Tip Dogecoin to this Address:"
    , lbl_amount: "DOGE"
  });
</script>
</nav>
