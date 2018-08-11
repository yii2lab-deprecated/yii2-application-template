
(function($){

    var tokenStorage = {
        set: function (token) {
            localStorage.setItem("account_auth_identity_token", token);
        },
        get: function () {
            return localStorage.getItem("account_auth_identity_token");
        },
    };

    var getTokenFromServer = function () {
        var successHandler = function (data) {
            tokenStorage.set(data);
            alert(tokenStorage.get());
        };
        $.restRequest.send("get", app.env.url.frontend+"user/auth/get-token", null, successHandler);
    };

    $.account = {
        getToken: function () {
            var token = tokenStorage.get();
            if(token == null) {
                getTokenFromServer();
                token = tokenStorage.get();
            }
            return token;
        },
    };
})(jQuery);

//$.account.getToken();
