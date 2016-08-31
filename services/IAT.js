// Loads the input file into the variable "startIAT"


function initialize() {
    $.getJSON("resources/input.json", startIAT);

}


// Initialize variables, build page & data object, display instructions
function startIAT(data) {
    currentState = "instruction";
    session = 0;
    roundnum = 0;
    input = data;

    // default to show results to participant
    if (!('showResult' in input)) {
        input.showResult = true;
    }

    //véletelnszerűen zöldre szinezi a kategóriákat
    if (Math.random() < 0.5) {
        openA = "<font color=green>";
        closeA = "</font>";
        open1 = "";
        close1 = "";
    } else {
        open1 = "<font color=green>";
        close1 = "</font>";
        openA = "";
        closeA = "";
    }
    buildPage();
    roundArray = initRounds();
    instructionPage();
}

// Adds all images to page (initially hidden) so they are pre-loaded for IAT for load preformance
function buildPage() {
    if (input.catA.itemtype == "img") {
        for (i in input.catA.items) {
            var itemstr = '<img id="' + input.catA.datalabel + i + '" class="IATitem qimg center-align" src="img/' + input.catA.items[i] + '">';
            $("#exp_instruct").after(itemstr);
        }
    }
    if (input.catB.itemtype == "img") {
        for (i in input.catB.items) {
            var itemstr = '<img id="' + input.catB.datalabel + i + '" class="IATitem qimg center-align" src="img/' + input.catB.items[i] + '">';
            $("#exp_instruct").after(itemstr);
        }
    }
    if (input.cat1.itemtype == "img") {
        for (i in input.cat1.items) {
            var itemstr = '<img id="' + input.cat1.datalabel + i + '" class="IATitem qimg center-align" src="img/' + input.cat1.items[i] + '">';
            $("#exp_instruct").after(itemstr);
        }
    }
    if (input.cat2.itemtype == "img") {
        for (i in input.cat2.items) {
            var itemstr = '<img id="' + input.cat2.datalabel + i + '" class="IATitem qimg center-align" src="img/' + input.cat2.items[i] + '">';
            $("#exp_instruct").after(itemstr);
        }
    }
}

// Round object
function IATround() {
    this.starttime = 0;
    this.endtime = 0;
    this.itemtype = "none";
    this.category = "none";
    this.catIndex = 0;
    this.correct = 0;
    this.errors = 0;
}

// Create array for each session & round, with pre-randomized ordering of images
function initRounds() {
    var roundArray = [];
    // for each session
    for (var i = 0; i < 7; i++) {
        roundArray[i] = [];
        switch (i) {
            case 0:
            case 4:
                stype = "target";
                numrounds = 20;
                break;
            case 1:
                stype = "association";
                numrounds = 20;
                break;
            case 2:
            case 3:
            case 5:
            case 6:
                stype = "both";
                numrounds = 40;
                break;

        }
        prevIndexA = -1;
        prevIndex1 = -1;
        for (var j = 0; j < numrounds; j++) {
            var round = new IATround();

            if (stype == "target") {
                round.category = (Math.random() < 0.5 ? input.catA.datalabel : input.catB.datalabel);
            } else if (stype == "association") {
                round.category = (Math.random() < 0.5 ? input.cat1.datalabel : input.cat2.datalabel);
            } else if (stype == "both") {
                if (j % 2 == 0) {
                    round.category = (Math.random() < 0.5 ? input.catA.datalabel : input.catB.datalabel);
                } else {
                    round.category = (Math.random() < 0.5 ? input.cat1.datalabel : input.cat2.datalabel);
                }
            }
            // pick a category
            if (round.category == input.catA.datalabel) {
                round.itemtype = input.catA.itemtype;
                if (i < 4) {
                    round.correct = 1;
                } else {
                    round.correct = 2;
                }

                // pick an item different from the last
                while (prevIndexA == round.catIndex) {
                    round.catIndex = Math.floor(Math.random() * input.catA.items.length);
                }
                prevIndexA = round.catIndex;

            } else if (round.category == input.catB.datalabel) {
                round.itemtype = input.catB.itemtype;
                if (i < 4) {
                    round.correct = 2;
                } else {
                    round.correct = 1;
                }
                // pick an item different from the last
                while (prevIndexA == round.catIndex) {
                    round.catIndex = Math.floor(Math.random() * input.catB.items.length);
                }
                prevIndexA = round.catIndex;
            } else if (round.category == input.cat1.datalabel) {
                round.itemtype = input.cat1.itemtype;
                round.correct = 1;
                // pick an item different from the last
                while (prevIndex1 == round.catIndex) {
                    round.catIndex = Math.floor(Math.random() * input.cat1.items.length);
                }
                prevIndex1 = round.catIndex;
            } else if (round.category == input.cat2.datalabel) {
                round.itemtype = input.cat2.itemtype;
                round.correct = 2;
                // pick an item different from the last
                while (prevIndex1 == round.catIndex) {
                    round.catIndex = Math.floor(Math.random() * input.cat2.items.length);
                }
                prevIndex1 = round.catIndex;
            }

            roundArray[i].push(round);
        }
    }

    return roundArray;
}

// insert instruction text based on stage in IAT
function instructionPage() {
    switch (session) {
        case 0:
            $('#left_cat').ready(function () {
                $('#left_cat').html(openA + input.catA.label + closeA);
            });
            $('#right_cat').ready(function () {
                $('#right_cat').html(openA + input.catB.label + closeA);
            });
            break;
        case 1:
            $("#left_cat").html(open1 + input.cat1.label + close1);
            $("#right_cat").html(open1 + input.cat2.label + close1);
            break;
        case 2:
        case 3:
            $("#left_cat").html(openA + input.catA.label + closeA + '<br>vagy<br>' + open1 + input.cat1.label + close1);
            $("#right_cat").html(openA + input.catB.label + closeA + '<br>vagy<br>' + open1 + input.cat2.label + close1);
            break;
        case 4:
            $("#left_cat").html(openA + input.catB.label + closeA);
            $("#right_cat").html(openA + input.catA.label + closeA);
            break;
        case 5:
        case 6:
            $("#left_cat").html(openA + input.catB.label + closeA + '<br>vagy<br>' + open1 + input.cat1.label + close1);
            $("#right_cat").html(openA + input.catA.label + closeA + '<br>vagy<br>' + open1 + input.cat2.label + close1);
            break;
    }


    $.get("resources/" + lang + "/" + "IAT_instruct_" + (session + 1) + ".html", function (data) {
        $('#exp_instruct').html(data);
    });
    if (session == 7) {
        $("#left_cat").html("");
        $("#right_cat").html("");
    }}



// Calculates estimate of effect size to present results to participant
/**function calculateIAT() {
    // calculate mean log(RT) for first key trial
    compatible = 0;
    for (i = 1; i < roundArray[3].length; i++) {
        score = roundArray[3][i].endtime - roundArray[3][i].starttime;
        if (score < 300) {
            score = 300;
        }
        if (score > 3000) {
            score = 3000;
        }
        compatible += Math.log(score);
    }
    compatible /= (roundArray[3].length - 1);

    // calculate mean log(RT) for second key trial
    incompatible = 0;
    for (i = 1; i < roundArray[6].length; i++) {
        score = roundArray[6][i].endtime - roundArray[6][i].starttime;
        if (score < 300) {
            score = 300;
        }
        if (score > 3000) {
            score = 3000;
        }
        incompatible += Math.log(score);
    }
    incompatible /= (roundArray[6].length - 1);

    // calculate variance log(RT) for first key trial
    cvar = 0;
    for (i = 1; i < roundArray[3].length; i++) {
        score = roundArray[3][i].endtime - roundArray[3][i].starttime;
        if (score < 300) {
            score = 300;
        }
        if (score > 3000) {
            score = 3000;
        }
        cvar += Math.pow((Math.log(score) - compatible), 2);
    }

    // calculate variance log(RT) for second key trial
    ivar = 0;
    for (i = 1; i < roundArray[6].length; i++) {
        score = roundArray[6][i].endtime - roundArray[6][i].starttime;
        if (score < 300) {
            score = 300;
        }
        if (score > 3000) {
            score = 3000;
        }
        ivar += Math.pow((Math.log(score) - incompatible), 2);
    }

    // calculate t-value
    tvalue = (incompatible - compatible) / Math.sqrt(((cvar / 39) + (ivar / 39)) / 40);

    // determine effect size from t-value and create corresponding text
    if (Math.abs(tvalue) > 2.89) {
        severity = " <b>sokkal jobban</b> asszociálod, mint amennyire ";
    } else if (Math.abs(tvalue) > 2.64) {
        severity = " <b>jobban</b> asszociálod, mint amennyire ";
    } else if (Math.abs(tvalue) > 1.99) {
        severity = " <b>egy kicsit jobban</b> asszociálod, mint amennyire ";
    } else if (Math.abs(tvalue) > 1.66) {
        severity = " <b>alig jobban</b> asszociálod, mint amennyire ";
    } else {
        severity = "";
    }

    // put together feedback based on direction & magnitude
    if (tvalue < 0 && severity != "") {
        resulttext = "<div style='text-align:center;padding:20px'>Te a(z) " + openA + input.catB.label + closeA + " embereket a(z) " + open1 + input.cat1.label + close1;
        resulttext += " tulajdonsággal és  a(z) " + openA + input.catA.label + closeA + " embereket a(z) " + open1 + input.cat2.label + close1 + " tulajdonsággal " + severity;
        resulttext += " a(z) " + openA + input.catA.label + closeA + " embereket a(z) " + open1 + input.cat1.label + close1;
        resulttext += " tulajdonsággal és  a(z) " + openA + input.catB.label + closeA + " embereket a(z) " + open1 + input.cat2.label + close1 + " tulajdonsággal asszociálod.</div>";
        // resulttext += "<div>incompatible: "+incompatible+" ("+(ivar/39)+"); compatible: "+compatible+" ("+(cvar/39)+"); tvalue: "+tvalue+"</div>";
    } else if (tvalue > 0 && severity != "") {
        resulttext = "<div style='text-align:center;padding:20px'>Te a(z) " + openA + input.catA.label + closeA + " embereket a(z) " + open1 + input.cat1.label + close1;
        resulttext += " tulajdonsággal és  a(z) " + openA + input.catB.label + closeA + " embereket a(z) " + open1 + input.cat2.label + close1 + " tulajdonsággal " + severity;
        resulttext += "a(z) " + openA + input.catB.label + closeA + " embereket a(z) " + open1 + input.cat1.label + close1;
        resulttext += " tulajdonsággal és  a(z) " + openA + input.catA.label + closeA + " embereket a(z) " + open1 + input.cat2.label + close1 + " tulajdonsággal asszociálod.</div>";
        // resulttext += "<div>incompatible: "+incompatible+" ("+(ivar/39)+"); compatible: "+compatible+" ("+(cvar/39)+"); tvalue: "+tvalue+"</div>";
    } else {
        resulttext = "<div style='text-align:center;padding:20px'>Te nem asszociálod a(z) " + openA + input.catA.label + closeA;
        resulttext += " embereket a(z) " + open1 + input.cat1.label + close1 + " tulajdonsággal jobban vagy kevésbé, mint amennyire a(z) ";
        resulttext += openA + input.catB.label + closeA + " embereket a(z) " + open1 + input.cat1.label + close1 + " tulajdonsággal asszociálod.</div>";
        // resulttext += "<div>incompatible: "+incompatible+" ("+(ivar/39)+"); compatible: "+compatible+" ("+(cvar/39)+"); tvalue: "+tvalue+"</div>";
    }
    resulttext += "<div style='text-align:center;padding:20px'><b>Köszönjük az együttműködésedet!</b></div>"
    $("#picture_frame").html(resulttext);
}**/

// not currently used
function startSurvey() {
    // demographics survey / explicit attitudes form, including:
    /*
     Please rate how warm or cold you feel toward the following groups
     (0 = coldest feelings, 5 = neutral, 10 = warmest feelings)
     */
}

 function roundNameGenerator() {
    return "round"+roundnum;
}
// Converts the data for each session and round into a comma-delimited string
// and passes it to writeFile.php to be written by the server
function WriteFile() {
    var prevdata = [];
    prevdata['IATrounds'] = JSON.stringify(roundArray);
    prevdata['origin']='IAT';
    post('router.php',prevdata);

}

// This monitors for keyboard events
function keyHandler(kEvent) {
    //Don't move the system
    kEvent.preventDefault();
    // move from instructions to session on spacebar press
    var unicode = kEvent.keyCode ? kEvent.keyCode : kEvent.charCode;
    if(session == 7 && unicode == 32) {
        WriteFile();
    }

    if (currentState == "instruction" && unicode == 32) {
        currentState = "play";
        $('#exp_instruct').html('');
        displayItem();
    }


    // in session
    if (currentState == "play") {
        runSession(kEvent);
    }

}



function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}
// Get the stimulus for this session & round and display it
function displayItem() {
    var tRound = roundArray[session][roundnum];
    tRound.starttime = new Date().getTime(); // the time the item was displayed
    if (tRound.itemtype == "img") {
        if (tRound.category == input.catA.datalabel) {
            $("#" + input.catA.datalabel + tRound.catIndex).css("display", "block");
        } else if (tRound.category == input.catB.datalabel) {
            $("#" + input.catB.datalabel + tRound.catIndex).css("display", "block");
        } else if (tRound.category == input.cat1.datalabel) {
            $("#" + input.cat1.datalabel + tRound.catIndex).css("display", "block");
        } else if (tRound.category == input.cat2.datalabel) {
            $("#" + input.cat2.datalabel + tRound.catIndex).css("display", "block");
        }
    } else if (tRound.itemtype == "txt") {
        if (tRound.category == input.catA.datalabel) {
            $("#word").html(openA + input.catA.items[tRound.catIndex] + closeA)
            $("#word").css("display", "block");
        } else if (tRound.category == input.catB.datalabel) {
            $("#word").html(openA + input.catB.items[tRound.catIndex] + closeA)
            $("#word").css("display", "block");
        } else if (tRound.category == input.cat1.datalabel) {
            $("#word").html(open1 + input.cat1.items[tRound.catIndex] + close1)
            $("#word").css("display", "block");
        } else if (tRound.category == input.cat2.datalabel) {
            $("#word").html(open1 + input.cat2.items[tRound.catIndex] + close1)
            $("#word").css("display", "block");
        }
    }
}

function runSession(kEvent) {
    var rCorrect = roundArray[session][roundnum].correct;
    var unicode = kEvent.keyCode ? kEvent.keyCode : kEvent.charCode;
    keyE = (unicode == 69 || unicode == 101);
    keyI = (unicode == 73 || unicode == 105);


    // if correct key (1 & E) or (2 & I)
    if ((rCorrect == 1 && keyE) || (rCorrect == 2 && keyI)) {
        if (rCorrect == 1 && keyE) {

            $('#leftcat_wrapper').removeClass('red lighten-1');
            $('#leftcat_wrapper').addClass('white');
        }
        if (rCorrect == 1 && keyE) {
            $('#rightcat_wrapper').removeClass('red lighten-1');
            $('#rightcat_wrapper').addClass('white');
        }
        roundArray[session][roundnum].endtime = new Date().getTime(); // end time
        // if more rounds
        if (roundnum < roundArray[session].length - 1) {
            roundnum++;
            $(".IATitem").css("display", "none"); // hide all items
            displayItem(); // display chosen item
            $('#leftcat_wrapper').removeClass('red lighten-1').addClass('white');
            $('#rightcat_wrapper').removeClass('red lighten-1').addClass('white');
        } else {
            $('#leftcat_wrapper').removeClass('red lighten-1').addClass('white');
            $('#rightcat_wrapper').removeClass('red lighten-1').addClass('white');
            $(".IATitem").css("display", "none"); // hide all items
            currentState = "instruction"; // change state to instruction
            session++; // move to next session
            roundnum = 0; // reset rounds to 0
            instructionPage(); // show instruction page
        }
    }
    // incorrect key
    else if ((rCorrect == 1 && keyI) || (rCorrect == 2 && keyE)) {
        if (rCorrect == 1) {
            $('#rightcat_wrapper').removeClass('white').addClass('red lighten-1');
        }
        if (rCorrect == 2) {
            $('#leftcat_wrapper').removeClass('white').addClass('red lighten-1');
        }
        $("#wrong").css("display", "block"); // show X
        roundArray[session][roundnum].errors++; // note error
    }
}
$(document).load(function () {
    $("qimg").height($(document).innerHeight() * 0.2);
})
$(window).resize(function () {
    $("qimg").height($(document).innerHeight() * 0.2);
})