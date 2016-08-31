$(document).ready(function() {
    $('select').material_select();
});

$(document.body).on('change','#iskolaivegzettseg',function(){
    switch ($(this).val()) {
        case "": {
            $("#hallgato").hide();
            $("#diak").hide();
            $("#dolgozik").hide();
            $("#munkaterulet").trigger('change');
        }break;

        case "altiskola": {
            $("#hallgato").hide();
            $("#diak").hide();
            $("#dolgozik").show();
            $("#tudfokozat").hide();
            $("#munkaterulet").trigger('change');
        } break;

        case "koziskola": {
            $("#hallgato").hide();
            $("#diak").hide();
            $("#dolgozik").show();
            $("#tudfokozat").hide();
            $("#munkaterulet").trigger('change');
        }break;

        case "jelenleghallgato": {
            $("#hallgato").show();
            $("#diak").hide();
            $("#dolgozik").hide();
            $("#munkaterulet").trigger('change');
        }break;
        case "jelenlegdiak": {
            $("#hallgato").hide();
            $("#diak").show();
            $("#dolgozik").hide();
            $("#munkaterulet").trigger('change');
        }break;
        case "foiskola": {
            $("#hallgato").hide();
            $("#diak").hide();
            $("#dolgozik").show();
            $("#tudfokozat").show();
            $("#munkaterulet").trigger('change');
        }break;
        case "egyetem": {
            $("#hallgato").hide();
            $("#diak").hide();
            $("#dolgozik").show();
            $("#munkaterulet").trigger('change');
        }break;
        case "posztgrad": {
            $("#hallgato").hide();
            $("#diak").hide();
            $("#dolgozik").show();
            $("#munkaterulet").trigger('change');
        }break;
    }

});

$(document.body).on('change','#munkaterulet',function(){
    if(($(this).val()=="egeszsegugy") && ($("#dolgozik").is(":visible"))){
            $("#egeszsegugyicard").show();
            $("#egeszsegugyivegzettseg").trigger('change');
    } else {
        $("#egeszsegugyicard").hide();
        $("#egeszsegugyivegzettseg").trigger('change');
    }}
    );

$(document.body).on('change','#dolgozik_statusz', function () {
   if(($(this).val()== "nyugdijas") ||($(this).val()== "munkanelkuli") || ($(this).val()== "haztartasbeli")) {
       $("#nyugdijasszoveg").show();
   } else {
       $("#nyugdijasszoveg").hide();
   }
});



$(document.body).on('change','#egeszsegugyivegzettseg', function() {
    if($("#egeszsegugyicard").is(":visible")) {
        switch ($(this).val()) {
            case "":
            {
                $("#egeszsegugyiorvos").hide();
                $("#egeszsegugyiffkv").hide();
                $("#egeszsegugyiegsszak").hide();
            }break;
            case "orvos":
            {
                $("#egeszsegugyiorvos").show();
                $("#egeszsegugyiffkv").hide();
                $("#egeszsegugyiegsszak").hide();
            }break;
            case "ffkv":
            {
                $("#egeszsegugyiorvos").hide();
                $("#egeszsegugyiffkv").show();
                $("#egeszsegugyiegsszak").hide();
            }break;
            case "szakdolgozo":
            {
                $("#egeszsegugyiorvos").hide();
                $("#egeszsegugyiffkv").hide();
                $("#egeszsegugyiegsszak").show();
            }break;
            case "mas":
            {
                $("#egeszsegugyiorvos").hide();
                $("#egeszsegugyiffkv").hide();
                $("#egeszsegugyiegsszak").hide();
            }break;
        }
    }else{
        $("#egeszsegugyiegsszak").hide();
        $("#egeszsegugyiffkv").hide();
        $("#egeszsegugyiorvos").hide();
        }
});




function checkForm() {
    var isValid = true;
    $("#altalanos").find('select').each(function (i, item) {
        if ($(item).val()=="") {
            isValid = false;
        }
    });
    $("#altalanos").find('input').each(function (i, item) {
        if ($(item).val()=="") {
            isValid = false;
        }
    });

    if ($("#diak").css("display") != "none") {
        $("#diak").find('select').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
        $("#diak").find('input').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
    }
    if ($("#dolgozik").css("display") != "none") {
        $("#dolgozik").find('select').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
        $("#dolgozik").find('input').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
    }
    if ($("#hallgato").css("display") != "none") {
        $("#hallgato").find('select').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
        $("#hallgato").find('input').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
    }

    if ($("#egeszsegugyicard").css("display") != "none") {
        $("#egeszsegugyicard").find('select').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
        $("#egeszsegugyicard").find('input').each(function (i, item) {
            if ($(item).val()=="") {
                isValid = false;
            }
        });
    }
    if ($("#egeszsegugyiegsszak").css("display") != "none") {
        $("#egeszsegugyiegsszak").find('select').each(function (i, item) {
            if ($(item).val() == "") {
                isValid = false;
            }
        });
        $("#egeszsegugyiegsszak").find('input').each(function (i, item) {
            if ($(item).val() == "") {
                isValid = false;
            }
        });
    }
    if ($("#egeszsegugyiffkv").css("display") != "none") {
        $("#egeszsegugyiffkv").find('select').each(function (i, item) {
            if ($(item).val() == "") {
                isValid = false;
            }
        });
        $("#egeszsegugyiffkv").find('input').each(function (i, item) {
            if ($(item).val() == "") {
                isValid = false;
            }
        });
    }

    if ($("#egeszsegugyiorvos").css("display") != "none") {
        $("#egeszsegugyiorvos").find('select').each(function (i, item) {
            if ($(item).val() == "") {
                isValid = false;
            }
        });
        $("#egeszsegugyiorvos").find('input').each(function (i, item) {
            if ($(item).val() == "") {
                isValid = false;
            }
        });
    }

    return isValid;
}
