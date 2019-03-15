// Base 64 encoded version of the Single-Use-Token API key.
// Create the key below by concatenating the API username and password
// separated by a colon and Base 64 encoding the result
var apiKey = "T1QtMzA0NDQwOkItcWEyLTAtNWM4OTE2OTAtMC0zMDJkMDIxNDBjMzUyYTZmZTdjNThmYTA0NDY4MzZmNTViOTAwNWNkOWEzZGVlODkwMjE1MDA4OWFmNjI2N2JhMGE2NTBkODZhNTc2NmUwYWQxZGJlMzM5NThjOWYz";
var $form = $('#payment-form');
var newToken = ""
$form.find('.pay').prop('disabled', true);
var options = {

    // select the Paysafe test / sandbox environment
    environment: "TEST",

    // set the CSS selectors to identify the payment field divs above
    // set the placeholder text to display in these fields
    fields: {
        cardNumber: {
            selector: "#cardNumber",
            placeholder: "Card Number"
        },
        expiryDate: {
            selector: "#cardExpiry",
            placeholder: "MM / YY"
        },
        cvv: {
            selector: "#cardCVC",
            placeholder: "CVV"
        }
    }
};

// initalize the hosted iframes using the SDK setup function
paysafe.fields.setup(apiKey, options, function(instance, error) {

    if (error) {
        console.log(error);
    } else {

        var payButton = $form.find('.pay');

        console.log(payButton);

        instance.fields("cvv cardNumber expiryDate").valid(function (eventInstance, event) {
            $(event.target.containerElement).closest('.form-control').removeClass('error').addClass('success');

            if (paymentFormReady()) {
                $form.find('.pay').prop('disabled', false);
            }
        });

        instance.fields("cvv cardNumber expiryDate").invalid(function (eventInstance, event) {
            $(event.target.containerElement).closest('.form-control').removeClass('success').addClass('error');
            if (!paymentFormReady()) {
                $form.find('.pay').prop('disabled', true);
            }
        });

        instance.fields.cardNumber.on("FieldValueChange", function(instance, event) {
            console.log(instance.fields.cardNumber);

            if (!instance.fields.cardNumber.isEmpty()) {
                var cardBrand = instance.getCardBrand().replace(/\s+/g, '');
                console.log(cardBrand);

                switch (cardBrand) {
                    case "AmericanExpress":
                        $form.find($(".fa")).removeClass('fa-credit-card').addClass('fa-cc-amex');
                        break;
                    case "MasterCard":
                        $form.find($(".fa")).removeClass('fa-credit-card').addClass('fa-cc-mastercard');
                        break;
                    case "Visa":
                        $form.find($(".fa")).removeClass('fa-credit-card').addClass('fa-cc-visa');
                        break;
                    case "Diners":
                        $form.find($(".fa")).removeClass('fa-credit-card').addClass('fa-cc-diners-club');
                        break;
                    case "JCB":
                        $form.find($(".fa")).removeClass('fa-credit-card').addClass('fa-cc-jcb');
                        break;
                    case "Maestro":
                        $form.find($(".fa")).removeClass('fa-credit-card').addClass('fa-cc-discover');
                        break;
                }
            }
            else {
                $form.find($(".fa")).removeClass().addClass('fa fa-credit-card');
            }
        });

        payButton.bind("click", function (event) {
            instance.tokenize({
                vault: {
                    holderName: "John Smith",
                    billingAddress: {
                        country: "CA",
                        zip: "M5H 2N2",
                        state: "ON",
                        city: "Toronto",
                        street: "100 Queen Street",
                        street2: "201"
                    }
                }
            },function(instance, error, result) {
                if (error) {
                    console.log(error);
                    $form.find('.pay').html('Try again').prop('disabled', false);
                    /* Show Paysafe errors on the form */
                    $form.find('.payment-errors').text(error.displayMessage);
                    $form.find('.payment-errors').closest('.row').show();
                } else {
                    /* Visual feedback */
                    $form.find('.pay').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
                    /* Hide Paysafe errors on the form */
                    $form.find('.payment-errors').closest('.row').hide();
                    $form.find('.payment-errors').text("");

                    // response contains token
                    console.log(result.token);
                    newToken = result.token;

                    // you would send the 'token' to your server here using AJAX. The delay function simulates this process.
                    /*sendToken( function(){
                        $form.find('.pay').html('Payment successful <i class="fa fa-check"></i>');
                        $form.find('.pay').prop('disabled', true);
                        // do stuff
                    }, 2000);*/// end delay
                    var test = sendToken();
                    console.log(test);
                }
            });
        });
    }
});

paymentFormReady = function() {
    if ($form.find('#cardNumber').hasClass("success") &&
        $form.find('#cardExpiry').hasClass("success") &&
        $form.find('#cardCVC').hasClass("success")) {
        return true;
    } else {
        return false;
    }
}

/*var delay = ( function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();*/

/*
var sendToken = (function() {
    //À supprimer
    var apiKeyV2 = "dGVzdF9zbGF5NjY2OkItcWEyLTAtNWM4OTBlMTMtMC0zMDJkMDIxNDEwZjFkNmFjYmQ5Nzk4NzlkMGQ5YjQwZDkyNzJlZmNmNTAwZTVhNmIwMjE1MDA5NzQxNzYzNTJlODAxMDhiMGE1NmYzZDU4Nzg2ZGVhODYzYWMxMThi";
    console.log(newToken + " Result Token");
    var request = new XMLHttpRequest();

    request.open('POST', 'https://api.test.paysafe.com/cardpayments/v1/accounts/1001350010/auths/');

    request.setRequestHeader('Content-Type', 'application/json');
    request.setRequestHeader('Authorization', apiKey);

    request.onreadystatechange = function () {
        if (this.readyState === 4) {
            console.log('Status:', this.status);
            console.log('Headers:', this.getAllResponseHeaders());
            console.log('Body:', this.responseText);
        }
    };

    var body = {
        'merchantRefNum': 'merchanttestslay666',
        'amount': 100,
        'settleWithAuth': true,
        'card': {
            "paymentToken" : + newToken
        }
    };





    return function() {
        request.send(JSON.stringify(body));
    };
})();
*/


function sendToken(){
    //À supprimer
    var apiKeyV2 = "dGVzdF9zbGF5NjY2OkItcWEyLTAtNWM4OTBlMTMtMC0zMDJkMDIxNDEwZjFkNmFjYmQ5Nzk4NzlkMGQ5YjQwZDkyNzJlZmNmNTAwZTVhNmIwMjE1MDA5NzQxNzYzNTJlODAxMDhiMGE1NmYzZDU4Nzg2ZGVhODYzYWMxMThi";
    console.log(newToken + " Result Token");
    var request = new XMLHttpRequest();

    request.open('POST', 'https://api.test.paysafe.com/cardpayments/v1/accounts/1001350010/auths');

    request.setRequestHeader('Content-Type', 'application/json');
    request.setRequestHeader('Authorization', "Basic dGVzdF9zbGF5NjY2OkItcWEyLTAtNWM4OTBlMTMtMC0zMDJkMDIxNDEwZjFkNmFjYmQ5Nzk4NzlkMGQ5YjQwZDkyNzJlZmNmNTAwZTVhNmIwMjE1MDA5NzQxNzYzNTJlODAxMDhiMGE1NmYzZDU4Nzg2ZGVhODYzYWMxMThi");

    request.onreadystatechange = function () {
        if (this.readyState === 4) {
            console.log('Status:', this.status);
            console.log('Headers:', this.getAllResponseHeaders());
            console.log('Body:', this.responseText);
        }
    };

    var body = {
        'merchantRefNum': 'merchanttestslay666',
        'amount': 100,
        'settleWithAuth': true,
        'card': {
            "paymentToken" : + newToken
        }
    };
    var test = request.send(JSON.stringify(body));
    console.log(test);
    return
        test;

}

/*function sendTokenJquery(){

    $.ajax({
        url:"testserver.php",
        dataType: 'jsonp', // Notice! JSONP <-- P (lowercase)
        success:function(json){
            // do stuff with json (in this case an array)
            alert("Success");
        },
        error:function(){
            alert("Error");
        }
    });

    //À supprimer
    var apiKeyV2 = "dGVzdF9zbGF5NjY2OkItcWEyLTAtNWM4OTBlMTMtMC0zMDJkMDIxNDEwZjFkNmFjYmQ5Nzk4NzlkMGQ5YjQwZDkyNzJlZmNmNTAwZTVhNmIwMjE1MDA5NzQxNzYzNTJlODAxMDhiMGE1NmYzZDU4Nzg2ZGVhODYzYWMxMThi";
    console.log(newToken + " Result Token");
    var request = new XMLHttpRequest();

    request.open('POST', 'https://api.test.paysafe.com/cardpayments/v1/accounts/1001350010/auths');

    request.setRequestHeader('Content-Type', 'application/json');
    request.setRequestHeader('Authorization', "Basic dGVzdF9zbGF5NjY2OkItcWEyLTAtNWM4OTBlMTMtMC0zMDJkMDIxNDEwZjFkNmFjYmQ5Nzk4NzlkMGQ5YjQwZDkyNzJlZmNmNTAwZTVhNmIwMjE1MDA5NzQxNzYzNTJlODAxMDhiMGE1NmYzZDU4Nzg2ZGVhODYzYWMxMThi");

    request.onreadystatechange = function () {
        if (this.readyState === 4) {
            console.log('Status:', this.status);
            console.log('Headers:', this.getAllResponseHeaders());
            console.log('Body:', this.responseText);
        }
    };

    var body = {
        'merchantRefNum': 'merchanttestslay666',
        'amount': 100,
        'settleWithAuth': true,
        'card': {
            "paymentToken" : + newToken
        }
    };
    var test = request.send(JSON.stringify(body));
    console.log(test);
    return
    test;

}*/