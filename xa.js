var icoTransaction = new ICOTransaction();
icoTransaction.init({
    "Id": 6,
    "TotalCoin": 500000.000000000000000000,
    "SoldCoin": 0.000000000000000000,
    "TimeICO": "\/Date(1511708400000)\/",
    "TimeBuyICO": "\/Date(1511708400000)\/",
    "OpenBuyTime": 2,
    "OpenICOTime": false,
    "Price": 0.97000,
    "Limit": 0,
    "TimeLeft": 442.3164983
}, {
    "BTC": 0.00000000,
    "ETH": 0.19911800,
    "UCH": 0.00000000,
    "USD": 0.00000000,
    "BTCAddress": "169601",
    "ETHAddress": "0xba6b79dbfb8678e1cfa1f9dd59ea583b264f09db",
    "UCHAddress": "169601",
    "SecondPass": false
});
icoTransaction.ICO().BuyICO = true;
//icoTransaction.refreshCaptcha();

var __token = $('input[name="__RequestVerificationToken"]').val();
var post = {};
post.__RequestVerificationToken = __token;
post.blockchain = 'ETH';
post.amount = 50;
post.captcha = 'v2rnk';
post.coinPaid = 0.2;
post.calendar = 6;
post.PriceCoin = 456.39;
var urlBuy = '/ICO/BuyICO';
$.ajax({
    url: urlBuy,
    data: post,
    type: 'POST',
    dataType: 'json',
    beforeSend: function () {
        main.ctr_shw_loadng();
    },
    success: function (data) {
        if (data.Result == "OK") {
            if (data.Data.IsSuccess) {
                $('#div-buy-uch').modal('hide');
                bootbox.dialog({
                    message: 'Wow! You have successfully bought UCH! Congratulations!',
                    title: "",
                    buttons: {
                        confirm: {
                            label: '<i class="fa fa-times"></i> Close',
                            className: "btn-warning button-bootbox-close",
                            callback: function () {
                                window.location.reload();
                            }
                        }
                    }
                });
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        }
    }
});