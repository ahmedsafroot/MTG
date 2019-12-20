var total = 0;
var indeuction = "";
var what_to_do = "";
var total_col_sheet=0;
function getChecked() {
    var checkedValue = document.getElementById("marketCK5").checked;
    if (checkedValue == true) {
        document.getElementById("marketOther").focus();
    } else {
        document.getElementById("marketOther").blur();
    }
}

function getFocus() {
    var focusedValue = document.hasFocus();
    if (focusedValue == true) {
        document.getElementById("marketCK5").checked = true;
    } else {
        document.getElementById("marketCK5").checked = false;
    }
}

function getCompanyStatus() {
    var checkedValue = document.getElementById("customRadio5").checked;
    if (checkedValue == true) {
        document.getElementById("companyStatusOther").focus();
    } else {
        document.getElementById("companyStatusOther").blur();
    }
}

function getCompanyStatusFocus() {
    var focusedValue = document.hasFocus();
    if (focusedValue == true) {
        document.getElementById("customRadio5").checked = true;
    } else {
        document.getElementById("customRadio5").checked = false;
    }
}

function getCompanyProd() {
    var checkedValue = document.getElementById("customRadio21").checked;
    if (checkedValue == true) {
        document.getElementById("companyProdOther").focus();
    } else {
        document.getElementById("companyProdOther").blur();
    }
}

function getCompanyProdFocus() {
    var focusedValue = document.hasFocus();
    if (focusedValue == true) {
        document.getElementById("customRadio21").checked = true;
    } else {
        document.getElementById("customRadio21").checked = false;
    }
}

function formValidation() {
    var userTelephone = document.getElementById("userTelephone").value;
    var userTelephoneLen = document.getElementById("userTelephone").value.length;
    if (isNaN(userTelephone)) {
        document.getElementById("telephoneValid").innerHTML = "Telephone must contain numbers only";
    } else if (isNaN(userTelephone) == false && (userTelephoneLen < 3)) {
        document.getElementById("telephoneValid").innerHTML = "Telephone must not be less than 3 numbers";
    } else if (isNaN(userTelephone) == false && (userTelephoneLen > 11)) {
        document.getElementById("telephoneValid").innerHTML = "Telephone must not be more than 11 numbers";
    }
}



function profileForm() {

    var mydata = [];
    mydata["userName"] = $("#userName").val();
    mydata["userParent"] = $("#userParent").val();
    mydata["userAddress"] = $("#userAddress").val();
    mydata["userTelephone"] = $("#userTelephone").val();
    mydata["userFax"] = $("#userFax").val();
    mydata["userUrl"] = $("#userUrl").val();
    mydata["userNum"] = $("#userNum").val();
    mydata["userAppro"] = $("#userAppro").val();
    mydata["userYears"] = $("#userYears").val();
    mydata["userPortfolio"] = $("#userPortfolio").val();
    mydata["postCode"] = $("#postCode").val();
    mydata["Position"] = $("#Position").val();
    mydata["Email"] = $("#Email").val();
    mydata["Industry"] = $("#Industry").val();
    mydata["NACE"] = $("#NACE").val();
    mydata["product1"] = $("#product1").val();
    mydata["product2"] = $("#product2").val();
    mydata["product3"] = $("#product3").val();
    mydata["product4"] = $("#product4").val();
    mydata["percentage1"] = $("#percentage1").val();
    mydata["percentage2"] = $("#percentage2").val();
    mydata["percentage4"] = $("#percentage3").val();
    mydata["percentage4"] = $("#percentage4").val();

    if ($('#marketCK1').is(":checked")) {
        mydata["marketCK1"] = 1;
    } else {
        mydata["marketCK1"] = 0;
    }
    if ($('#marketCK2').is(":checked")) {
        mydata["marketCK2"] = 1;
    } else {
        mydata["marketCK2"] = 0;
    }
    if ($('#marketCK3').is(":checked")) {
        mydata["marketCK3"] = 1;
    } else {
        mydata["marketCK3"] = 0;
    }
    if ($('#marketCK4').is(":checked")) {
        mydata["marketCK4"] = 1;
    } else {
        mydata["marketCK4"] = 0;
    }
    if ($('#marketCK5').is(":checked")) {
        mydata["marketCK5"] = 1;
    } else {
        mydata["marketCK5"] = 0;
    }

    mydata["marketOther"] = $("#marketOther").val();


    mydata["userExport"] = $("#userExport").val();
    mydata["userImport"] = $("#userImport").val();
    mydata["userContact"] = $("#userContact").val();
    mydata["userContactNo"] = $("#userContactNo").val();
    mydata["companyStatus"] = $('input[name=customRadio]:checked').val();
    if (!mydata["companyStatus"])
        mydata["companyStatus"] = 0;

    mydata["companyStatusOther"] = $("#companyStatusOther").val();

    mydata["legalStructure"] = $('input[name=structure]:checked').val();
    if (!mydata["legalStructure"])
        mydata["legalStructure"] = 0;

    mydata["bussinessStructure"] = $('input[name=business]:checked').val();
    if (!mydata["bussinessStructure"])
        mydata["bussinessStructure"] = 0;

    mydata["marketStructure"] = $('input[name=market]:checked').val();
    if (!mydata["marketStructure"])
        mydata["marketStructure"] = 0;

    mydata["userLocation"] = $("#userLocation").val();


    /*mydata["prodLine1"] = $('input[name=prod1]:checked').val();
    if (!mydata["prodLine1"])
        mydata["prodLine1"] = 0;

    mydata["prodLine2"] = $('input[name=prod2]:checked').val();
    if (!mydata["prodLine2"])
        mydata["prodLine2"] = 0;

    mydata["prodLine3"] = $('input[name=prod3]:checked').val();
    if (!mydata["prodLine3"])
        mydata["prodLine3"] = 0;*/

    mydata["services"] = $('input[name=services]:checked').val();
    if (!mydata["services"])
        mydata["services"] = 0;

    mydata["companyProdOther"] = $("#companyProdOther").val();


    if ($('#customCheck1').is(":checked")) {
        mydata["marketing"] = 1;
    } else {
        mydata["marketing"] = 0;
    }
    if ($('#customCheck2').is(":checked")) {
        mydata["procurement"] = 1;
    } else {
        mydata["procurement"] = 0;
    }
    if ($('#customCheck3').is(":checked")) {
        mydata["development"] = 1;
    } else {
        mydata["development"] = 0;
    }
    if ($('#customCheck4').is(":checked")) {
        mydata["customerServices"] = 1;
    } else {
        mydata["customerServices"] = 0;
    }
    if ($('#customCheck5').is(":checked")) {
        mydata["finance"] = 1;
    } else {
        mydata["finance"] = 0;
    }
    if ($('#customCheck6').is(":checked")) {
        mydata["sales"] = 1;
    } else {
        mydata["sales"] = 0;
    }
    if ($('#customCheck7').is(":checked")) {
        mydata["distribution"] = 1;
    } else {
        mydata["distribution"] = 0;
    }
    if ($('#customCheck8').is(":checked")) {
        mydata["manufacturing"] = 1;
    } else {
        mydata["manufacturing"] = 0;
    }
    if ($('#customCheck9').is(":checked")) {
        mydata["hrm"] = 1;
    } else {
        mydata["hrm"] = 0;
    }
    if ($('#customCheck10').is(":checked")) {
        mydata["dedicated"] = 1;
    } else {
        mydata["dedicated"] = 0;
    }
    if ($('#customCheck11').is(":checked")) {
        mydata["engineeredToOrder"] = 1;
    } else {
        mydata["engineeredToOrder"] = 0;
    }
    if ($('#customCheck12').is(":checked")) {
        mydata["customised"] = 1;
    } else {
        mydata["customised"] = 0;
    }
    if ($('#customCheck13').is(":checked")) {
        mydata["assemblies"] = 1;
    } else {
        mydata["assemblies"] = 0;
    }
    if ($('#customCheck14').is(":checked")) {
        mydata["furtherProcessing"] = 1;
    } else {
        mydata["furtherProcessing"] = 0;
    }
    if ($('#customCheck15').is(":checked")) {
        mydata["massProduced"] = 1;
    } else {
        mydata["massProduced"] = 0;
    }
    if ($('#customCheck16').is(":checked")) {
        mydata["massCustomised"] = 1;
    } else {
        mydata["massCustomised"] = 0;
    }
    if ($('#customCheck17').is(":checked")) {
        mydata["modular"] = 1;
    } else {
        mydata["modular"] = 0;
    }
    if ($('#customCheck18').is(":checked")) {
        mydata["consumerGoods"] = 1;
    } else {
        mydata["consumerGoods"] = 0;
    }
    mydata["directConsumers"] = $('input[name=prod11]').val();

    mydata["directOem"] = $('input[name=prod22]').val();

    mydata["moreProcessing"] = $('input[name=prod33]').val();

    mydata["retailers"] = $('input[name=prod44]').val();

    mydata["distributors"] = $('input[name=prod55]').val();

    if ($('#customCheck23').is(":checked")) {
        mydata["kibs"] = 1;
    } else {
        mydata["kibs"] = 0;
    }
    if ($('#customCheck24').is(":checked")) {
        mydata["traditional"] = 1;
    } else {
        mydata["traditional"] = 0;
    }
    if ($('#customCheck25').is(":checked")) {
        mydata["consumerServices"] = 1;
    } else {
        mydata["consumerServices"] = 0;
    }
    if ($('#customCheck26').is(":checked")) {
        mydata["publicServices"] = 1;
    } else {
        mydata["publicServices"] = 0;
    }
    if ($('#customCheck27').is(":checked")) {
        mydata["nonProfit"] = 1;
    } else {
        mydata["nonProfit"] = 0;
    }
    if ($('#one_off').is(":checked")) {
        mydata["one_off"] = 1;
    } else {
        mydata["one_off"] = 0;
    }
    if ($('#large_batch').is(":checked")) {
        mydata["large_batch"] = 1;
    } else {
        mydata["large_batch"] = 0;
    }
    if ($('#con_mass').is(":checked")) {
        mydata["con_mass"] = 1;
    } else {
        mydata["con_mass"] = 0;
    }
    if ($('#mix').is(":checked")) {
        mydata["mix"] = 1;
    } else {
        mydata["mix"] = 0;
    }
    if ($('#small_batch').is(":checked")) {
        mydata["small_batch"] = 1;
    } else {
        mydata["small_batch"] = 0;
    }
    //console.log(mydata);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step1";

    $.ajax({

        type: 'POST',

        url: url,

        data: {
            userName: mydata["userName"],
            userParent: mydata["userParent"],
            userAddress: mydata["userAddress"],
            userTelephone: mydata["userTelephone"],
            userFax: mydata["userFax"],
            userUrl: mydata["userUrl"],
            userNum: mydata["userNum"],
            userAppro: mydata["userAppro"],
            userYears: mydata["userYears"],
            userPortfolio: mydata["userPortfolio"],
            marketCK1: mydata["marketCK1"],
            marketCK2: mydata["marketCK2"],
            marketCK3: mydata["marketCK3"],
            marketCK4: mydata["marketCK4"],
            marketCK5: mydata["marketCK5"],
            marketOther: mydata["marketOther"],
            userExport: mydata["userExport"],
            userImport: mydata["userImport"],
            userContact: mydata["userContact"],
            userContactNo: mydata["userContactNo"],
            companyStatus: mydata["companyStatus"],
            companyStatusOther: mydata["companyStatusOther"],
            legalStructure: mydata["legalStructure"],
            bussinessStructure: mydata["bussinessStructure"],
            marketStructure: mydata["marketStructure"],
            userLocation: mydata["userLocation"],
            product1: mydata["product1"],
            product2: mydata["product2"],
            product3: mydata["product3"],
            product4: mydata["product4"],
            percentage1: mydata["percentage1"],
            percentage2: mydata["percentage2"],
            percentage3: mydata["percentage3"],
            percentage4: mydata["percentage4"],
            services: mydata["services"],
            companyProdOther: mydata["companyProdOther"],
            marketing: mydata["marketing"],
            procurement: mydata["procurement"],
            development: mydata["development"],
            customerServices: mydata["customerServices"],
            finance: mydata["finance"],
            sales: mydata["sales"],
            distribution: mydata["distribution"],
            manufacturing: mydata["manufacturing"],
            hrm: mydata["hrm"],
            dedicated: mydata["dedicated"],
            engineeredToOrder: mydata["engineeredToOrder"],
            customised: mydata["customised"],
            assemblies: mydata["assemblies"],
            furtherProcessing: mydata["furtherProcessing"],
            massProduced: mydata["massProduced"],
            massCustomised: mydata["massCustomised"],
            modular: mydata["modular"],
            consumerGoods: mydata["consumerGoods"],
            directConsumers: mydata["directConsumers"],
            directOem: mydata["directOem"],
            moreProcessing: mydata["moreProcessing"],
            retailers: mydata["retailers"],
            distributors: mydata["distributors"],
            kibs: mydata["kibs"],
            traditional: mydata["traditional"],
            consumerServices: mydata["consumerServices"],
            publicServices: mydata["publicServices"],
            nonProfit: mydata["nonProfit"],
            postCode:mydata["postCode"],
            Position:mydata["Position"],
            Email:mydata["Email"],
            Industry:mydata["Industry"],
            NACE:mydata["NACE"],
            one_off:mydata["one_off"],
            large_batch:mydata["large_batch"],
            con_mass:mydata["con_mass"],
            mix:mydata["mix"],
            small_batch:mydata["small_batch"]

        },

        success: function(mymessage) {
            if(mymessage.background!="bg-danger"){
            toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }




        }

    });

    return false;
}

function audit_tool() {
    var question1 = $('input[name=question1]:checked').val();
    if (!question1)
        question1 = 0;

    var question2 = $('input[name=question2]:checked').val();
    if (!question2)
        question2 = 0;

    var question3 = $('input[name=question3]:checked').val();
    if (!question3)
        question3 = 0;

    var question4 = $('input[name=question4]:checked').val();
    if (!question4)
        question4 = 0;

    var question5 = $('input[name=question5]:checked').val();
    if (!question5)
        question5 = 0;

    var question6 = $('input[name=question6]:checked').val();
    if (!question6)
        question6 = 0;

    var question7 = $('input[name=question7]:checked').val();
    if (!question7)
        question7 = 0;

    var question8 = $('input[name=question8]:checked').val();
    if (!question8)
        question8 = 0;

    var question9 = $('input[name=question9]:checked').val();
    if (!question9)
        question9 = 0;

    var question10 = $('input[name=question10]:checked').val();
    if (!question10)
        question10 = 0;

    var question11 = $('input[name=question11]:checked').val();
    if (!question11)
        question11 = 0;

    var question12 = $('input[name=question12]:checked').val();
    if (!question12)
        question12 = 0;

    var question13 = $('input[name=question13]:checked').val();
    if (!question13)
        question13 = 0;

    var question14 = $('input[name=question14]:checked').val();
    if (!question14)
        question14 = 0;

    var question15 = $('input[name=question15]:checked').val();
    if (!question15)
        question15 = 0;

    var question16 = $('input[name=question16]:checked').val();
    if (!question16)
        question16 = 0;

    var question17 = $('input[name=question17]:checked').val();
    if (!question17)
        question17 = 0;

    var question18 = $('input[name=question18]:checked').val();
    if (!question18)
        question18 = 0;

    var question19 = $('input[name=question19]:checked').val();
    if (!question19)
        question19 = 0;

    var question20 = $('input[name=question20]:checked').val();
    if (!question20)
        question20 = 0;

    var question21 = $('input[name=question21]:checked').val();
    if (!question21)
        question21 = 0;

    var question22 = $('input[name=question22]:checked').val();
    if (!question22)
        question22 = 0;

    var question23 = $('input[name=question23]:checked').val();
    if (!question23)
        question23 = 0;

    total = parseInt(question1) + parseInt(question2) + parseInt(question3) + parseInt(question4) + parseInt(question5) + parseInt(question6) +
        parseInt(question7) + parseInt(question8) + parseInt(question9) + parseInt(question10) + parseInt(question11) + parseInt(question12) +
        parseInt(question13) + parseInt(question14) + parseInt(question15) + parseInt(question16) + parseInt(question17) + parseInt(question18) +
        parseInt(question19) + parseInt(question20) + parseInt(question21) + parseInt(question22) + parseInt(question23);

    indeuction = "";
    what_to_do = "";
    if (0 <= total && total <= 46) {
        indeuction = "YOUR SURVIVAL MAY BE DOWN TO “LUCK”, SO IMMEDIATE AND SERIOUS ATTENTION IS NEEDED TO AVOID FAILURE.";
        what_to_do = "ATTEND ISSUES SERIOUSLY AND CONSIDER CHANGING THE WAY YOU DO BUSINESS. SEEK ASSISTANCE FROM OUTSIDE SOURCES.";
    } else if (46 < total && total <= 69) {
        indeuction = "SOME CONSIDERABLE ATTENTION IS NEEDED TO PUT THE COMPANY BACK IN CONTROL.";
        what_to_do = "YOU NEED TO MAKE SERIOUS ATTEMPT AT IDENTIFYING THE KEY ISSUES AND INVEST ON RESOLVING THEM.";
    } else if (70 <= total && total < 92) {
        indeuction = "THERE ARE AREAS OF vulnerability, HENCE THE NEED FOR TAKING A CLOSER LOOK AT YOUR BUSINESS.";
        what_to_do = "FIND OUT AREAS IN NEED OF ATTENTION; WORK ON THOSE AREAS IN A STRCUTURED WAY";
    }
    else if (92 <= total && total <= 115) {
        indeuction = "YOU ARE DOING WELL";
        what_to_do = "YOU DO NOT NEED TO DO MAJOR ACTIONS, BUT SHOULD KEEP THE STRENGTH UP AND GOING";
    }


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step2";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            question1: question1,
            question2: question2,
            question3: question3,
            question4: question4,
            question5: question5,
            question6: question6,
            question7: question7,
            question8: question8,
            question9: question9,
            question10: question10,
            question11: question11,
            question12: question12,
            question13: question13,
            question14: question14,
            question15: question15,
            question16: question16,
            question17: question17,
            question18: question18,
            question19: question19,
            question20: question20,
            question21: question21,
            question22: question22,
            question23: question23,


        },

        success: function(mymessage) {
            /*$(".modal-body form").html("");
             var title="OUTCOME ANALYSIS";
             $(".modal-title").text(title);
             var element=$('<div class="form-group"><label class="col-form-label">Score:</label><span class="form-control">'+total+'</span></div>');
             $(".modal-body form").append(element);

             var element_induction=$('<div class="form-group"><label class="col-form-label">Induction:</label><span class="form-control">'+indeuction+'</span></div>');
             $(".modal-body form").append(element_induction);

             var element_to_do=$('<div class="form-group"><label class="col-form-label">What To Do:</label><span class="form-control">'+what_to_do+'</span></div>');
             $(".modal-body form").append(element_to_do);*/

            /*This is to diplay the div of outcomes analysis */
            /*$(".myDialog").css('display', 'block');
            $(".myDialog").addClass('animated fadeInLeft');*/
            if(mymessage.background!="bg-danger"){
                    toastr.success(mymessage.success);
                    $("#scoreInput").val(total);
                    $("#inductionInput").val(indeuction);
                    $("#toDoInput").val(what_to_do);
                    $(".myDialog").css('display', 'block');
                    $(".myDialog").addClass('animated fadeInLeft');
                }
                else
                {
                    toastr.error(mymessage.success);
    
                }


        }

    });

    return false;


}

function leadership() {
    var count = $("#count").val();
    var factor = [];
    var attractive = [];
    var sector = [];
    var effort = [];
    var position = [];
    var comment = [];
    var total;
    var prog_sector;
    var prog_attractive;
    var prog_effort;
    var prog_position;
    for (var i = 1; i <= count; i++) {
        if ($('[name=factor' + i + ']').length) {
            factor.push($('[name=factor' + i + ']').val());
            attractive.push($('[name=x' + i + ']').val());
            sector.push($('[name=y' + i + ']').val());
            effort.push($('[name=z' + i + ']').val());
            position.push($('[name=k' + i + ']').val());
            comment.push($('[name=comment' + i + ']').val());

            total = parseInt($('[name=x' + i + ']').val()) + parseInt($('[name=y' + i + ']').val()) +
                parseInt($('[name=z' + i + ']').val()) + parseInt($('[name=k' + i + ']').val());
            prog_sector = (parseInt($('[name=x' + i + ']').val()) / total) * 100;
            prog_attractive = (parseInt($('[name=y' + i + ']').val()) / total) * 100;
            prog_effort = (parseInt($('[name=z' + i + ']').val()) / total) * 100;
            prog_position = (parseInt($('[name=k' + i + ']').val()) / total) * 100;
            $('#prog_sector' + i).attr("style", "width:" + prog_sector + "%");
            $('#prog_attractive' + i).attr("style", "width:" + prog_attractive + "%");
            $('#prog_effort' + i).attr("style", "width:" + prog_effort + "%");
            $('#prog_position' + i).attr("style", "width:" + prog_position + "%");
            $('#prog_sector' + i).text($('[name=x' + i + ']').val());
            $('#prog_attractive' + i).text($('[name=y' + i + ']').val());
            $('#prog_effort' + i).text($('[name=z' + i + ']').val());
            $('#prog_position' + i).text($('[name=k' + i + ']').val());


        }


    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step3";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            factor: factor,
            sector: sector,
            attractive: attractive,
            effort: effort,
            position: position,
            comment: comment,
            count: count,



        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }


        }

    });

    return false;

}

function remove_label(label) {
    myChart1.data.datasets[0].data.splice(label, 1);

    myChart1.data.datasets[1].data.splice(label, 1);
    myChart1.data.datasets[2].data.splice(label, 1);
    myChart1.data.datasets[3].data.splice(label, 1);
    myChart1.data.labels.splice(label, 1);
    myChart1.update();

}

function update_label(label, datast, value) {
    myChart1.data.datasets[datast].data[label] = value;
    myChart1.update();

}

function add_label(label) {
    myChart1.config.data.labels.push(label);
    myChart1.config.data.datasets[0].data.push(1);
    myChart1.config.data.datasets[1].data.push(1);
    myChart1.config.data.datasets[2].data.push(5);
    myChart1.config.data.datasets[3].data.push(1);

    myChart1.update();

}
function add_label_trend(label) {
    myMarketChart.config.data.labels.push(label);
    myMarketChart.config.data.datasets[0].data.push(1);
    myMarketChart.config.data.datasets[1].data.push(3);
    myMarketChart.update();

    myMarketChart1.config.data.labels.push(label);
    myMarketChart1.config.data.datasets[0].data.push(-1);
    myMarketChart1.config.data.datasets[1].data.push(-1);
    myMarketChart1.config.data.datasets[2].data.push(-1);

    myMarketChart1.update();

}
function update_label_trend(label, datast, value,chart) {
    if(chart==1)
    {
    myMarketChart.data.datasets[datast].data[label] = value;
    myMarketChart.update();
    }
    else
    {
    myMarketChart1.data.datasets[datast].data[label] = value;
    myMarketChart1.update();
    }
    

}
function remove_label_trend(label) {
    myMarketChart.data.datasets[0].data.splice(label, 1);
    myMarketChart.data.datasets[1].data.splice(label, 1);
    myMarketChart.data.labels.splice(label, 1);
    myMarketChart.update();

    myMarketChart1.data.datasets[0].data.splice(label, 1);
    myMarketChart1.data.datasets[1].data.splice(label, 1);
    myMarketChart1.data.datasets[2].data.splice(label, 1);
    myMarketChart1.data.labels.splice(label, 1);
    myMarketChart1.update();

}
$(document).on("change", ".dataset", function() {
    var label = $(this).parent().parent().index();
    var datast = $(this).attr("dataset");
    var value = $(this).val();
    update_label(label, datast, value);
});
$(document).on("keyup", ".factors .dynamicArea", function() {
    var index = $(this).parent().parent().index();
    myChart1.data.labels[index] = $(this).val();
    myChart1.update();
});

$(document).on("keyup", "[name*='factor_trend']", function() {
    var index = $(this).parent().parent().index();
    myMarketChart.data.labels[index] = $(this).val();
    myMarketChart.update();

    myMarketChart1.data.labels[index] = $(this).val();
    myMarketChart1.update();
});

/*$(document).on("keyup",".comments",function() {
    var value=$(this).val().trim();
    $(this).attr("title",value);
});*/


function market_trends() {
    var count = $("#count_trend").val();
    var observe = [];
    var cont = [];
    var revenue = [];
    var cost = [];
    var growth = [];
    var comp = [];
    var comment = [];
 
    for (var i = 1; i <= count; i++) {
        if ($('[name=factor_trend' + i + ']').length) {
            observe.push($('[name=factor_trend' + i + ']').val());
            cont.push($('[name=cont' + i + ']').val());
            revenue.push($('[name=revenue' + i + ']').val());
            cost.push($('[name=cost' + i + ']').val());
            growth.push($('[name=growth' + i + ']').val());
            comp.push($('[name=comp' + i + ']').val());
            comment.push($('[name=comment_trend' + i + ']').val());


        }


    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step4";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            observe: observe,
            cont: cont,
            revenue: revenue,
            cost: cost,
            growth: growth,
            comp:comp,
            comment: comment,
            count: count,



        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }


        }

    });

    return false;

}


function customer_experience() {
    var count = $("#count_customer").val();
    var interface = [];
    var how = [];
    var poten = [];
 
    for (var i = 1; i <= count; i++) {
        if ($('[name=factor_interface' + i + ']').length) {
            interface.push($('[name=factor_interface' + i + ']').val());
            how.push($('[name=how' + i + ']').val());
            poten.push($('[name=poten' + i + ']').val());



        }


    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step5";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            interface: interface,
            how: how,
            poten: poten,
           



        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }


        }

    });

    return false;

}

function turbulence_impact() {
    var count_supply = $("#count_supply").val();
    var count_req = $("#count_req").val();
    var count_rivalry = $("#count_rivalry").val();
    var count_purchasing = $("#count_purchasing").val();
    var count_tech = $("#count_tech").val();

    var factor = [];
    var type = [];
    var timeLenght = [];
    var inc_dec = [];
    var freq = [];
    var thread_oper = [];
    var sev = [];

    for (var i = 1; i <= count_supply; i++) {
        if ($('[name=supply'+i+'_txtarea]').length && $('[name=supply'+i+'_txtarea]').parent().parent().attr("style")=="display: table-row;") {
            factor.push($('[name=supply'+i+'_txtarea]').val());
            timeLenght.push($('[name=supply'+i+'_timeLen]').val());
            inc_dec.push($('[name=supply'+i+'_increase]').val());
            freq.push($('[name=supply'+i+'_frequency]').val());
            thread_oper.push($('[name=supply'+i+'_threat]').val());
            sev.push($('[name=supply'+i+'_Severity]').val());
            type.push("SUPPLY CHAIN");

        }


    }
    for (var i = 1; i <= count_req; i++) {
        if ($('[name=cust_req'+i+'_txtarea]').length && $('[name=cust_req'+i+'_txtarea]').parent().parent().attr("style")=="display: table-row;") {
            factor.push($('[name=cust_req'+i+'_txtarea]').val());
            timeLenght.push($('[name=cust_req'+i+'_timeLen]').val());
            inc_dec.push($('[name=cust_req'+i+'_increase]').val());
            freq.push($('[name=cust_req'+i+'_frequency]').val());
            thread_oper.push($('[name=cust_req'+i+'_threat]').val());
            sev.push($('[name=cust_req'+i+'_Severity]').val());
            type.push("DYNAMIC CUSTOMER REQUIREMENTS");

        }


    }
    for (var i = 1; i <= count_rivalry; i++) {
        if ($('[name=rivalry'+i+'_txtarea]').length && $('[name=rivalry'+i+'_txtarea]').parent().parent().attr("style")=="display: table-row;") {
            factor.push($('[name=rivalry'+i+'_txtarea]').val());
            timeLenght.push($('[name=rivalry'+i+'_timeLen]').val());
            inc_dec.push($('[name=rivalry'+i+'_increase]').val());
            freq.push($('[name=rivalry'+i+'_frequency]').val());
            thread_oper.push($('[name=rivalry'+i+'_threat]').val());
            sev.push($('[name=rivalry'+i+'_Severity]').val());
            type.push("RIVALRY/COMPTETION");

        }


    }
    
    for (var i = 1; i <= count_purchasing; i++) {
        if ($('[name=purchasing'+i+'_txtarea]').length && $('[name=purchasing'+i+'_txtarea]').parent().parent().attr("style")=="display: table-row;") {
            factor.push($('[name=purchasing'+i+'_txtarea]').val());
            timeLenght.push($('[name=purchasing'+i+'_timeLen]').val());
            inc_dec.push($('[name=purchasing'+i+'_increase]').val());
            freq.push($('[name=purchasing'+i+'_frequency]').val());
            thread_oper.push($('[name=purchasing'+i+'_threat]').val());
            sev.push($('[name=purchasing'+i+'_Severity]').val());
            type.push("PURCHASING");

        }


    }

    for (var i = 1; i <= count_tech; i++) {
        if ($('[name=TechChanges'+i+'_txtarea]').length && $('[name=TechChanges'+i+'_txtarea]').parent().parent().attr("style")=="display: table-row;") {
            factor.push($('[name=TechChanges'+i+'_txtarea]').val());
            timeLenght.push($('[name=TechChanges'+i+'_timeLen]').val());
            inc_dec.push($('[name=TechChanges'+i+'_increase]').val());
            freq.push($('[name=TechChanges'+i+'_frequency]').val());
            thread_oper.push($('[name=TechChanges'+i+'_threat]').val());
            sev.push($('[name=TechChanges'+i+'_Severity]').val());
            type.push("TECHNOLOGICAL CHANGES");
        }


    }
    console.log(factor);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step6";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            factor: factor,
            timeLenght: timeLenght,
            inc_dec: inc_dec,
            freq: freq,
            thread_oper: thread_oper,
            sev: sev,
            type: type,
           



        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }
            $(".trublance_tools").children().remove();
            $('#disabledFactor').nextAll('.work_row').remove();
            $(".worksheet_total").siblings().remove();
            $(".focus_feature").siblings().remove();
            var x=1;
            $('.total_score').each(function(i, obj) {
                if($(this).val()>20)
                {
                    var factor_text=$(this).parent().siblings(".tableH").children("textarea").val();
                    /*var thread_op=$(this).parent().siblings().children(".threat_op").val();
                   var elem='<tr id="trub_factor'+x+'"><th scope="row" class="tableH tru_factors"><textarea type="text" class="form-control bea_txtarea" name="trub_factor'+x+'txtarea" readonly>'+factor_text+'</textarea></th>'
                           +'<td><select name="trub_factor'+x+'_Revenue" class="tru_select_box">'
                            +'<option value="1">1</option>'+
                            '<option value="2">2</option>'+
                            '<option value="3">3</option>'+
                            '<option value="4">4</option>'+
                            '<option value="5">5</option></select></td>'
                            +'<td><select name="trub_factor'+x+'_Cost" class="tru_select_box">'
                                +'<option value="1">1</option>'
                                +'<option value="2">2</option>'
                                +'<option value="3">3</option>'
                                +'<option value="4">4</option>'
                                +'<option value="5">5</option></select></td>'+
                   '<td><select name="trub_factor'+x+'_Growth" class="tru_select_box">'+
                           '<option value="1">1</option>'+
                           '<option value="2">2</option>'+
                           '<option value="3">3</option>'+
                           '<option value="4">4</option>'+
                           '<option value="5">5</option></select></td>'+
                   '<td><select name="trub_factor'+x+'_Control" class="tru_select_box">'+
                               '<option value="-1">-1</option>'+
                               '<option value="1">1</option>'+
                               '<option value="2">2</option></select></td>'+
                   '<td><select name="trub_factor'+x+'_competitor" class="tru_select_box">'+
                                   '<option value="1">1</option>'+
                                   '<option value="2">2</option>'+
                                   '<option value="3">3</option></select></td>';
                    if(thread_op==1)
                    {
                        var threadOp='<td> <input type="text" readonly style="width:30px;" class="threadop" name="trub_factor'+x+'_threat" value="-3"></td>'+
                        '<td> <input type="text" readonly style="width:30px;" class="threadop" name="trub_factor'+x+'_opportunity" value="0"></td></tr>';
                    }
                    else
                    {
                        var threadOp='<td> <input type="text" readonly style="width:30px;" class="threadop" name="trub_factor'+x+'_threat" value="0"></td>'+
                        '<td> <input type="text" readonly style="width:30px;" class="threadop" name="trub_factor'+x+'_opportunity" value="-3"></td></tr>';
                    }
                    elem=elem+threadOp;
                    
                    $(".trublance_tools").append(elem);*/
                    
                    var worksheet_row='<tr id="worksheet_factor'+x+'" class="work_row"><th scope="row" class="tableH tru_factors">'+
                        '<textarea type="text" class="form-control bea_txtarea" name="worksheet_factor'+x+'" readonly>'+
                            factor_text+'</textarea></th></tr>';
                        if($(".work_row:last").length)
                        {
                        $(".work_row:last").after(worksheet_row);
                        }
                        else
                        {
                            $("#disabledFactor").after(worksheet_row);

                        }
                        $(".worksheet_total").val(x);
                        $("#worksheet_count").val(x);
                    x++;
                }
                $("#tru_impac").val(x);
            });
      
        }

    });

    return false;
}

$(document).on("click", ".removeRow", function() {
    $(this).closest("tr").remove();
});
$(document).on("change", ".beaSelect", function() {
    var name=$(this).closest("tr").attr("id");
    var timeLenght=parseInt($('[name='+name+'_timeLen]').val());
    var inc=parseInt($('[name='+name+'_increase]').val());
    var freq=parseInt($('[name='+name+'_frequency]').val());
    var sev=parseInt($('[name='+name+'_Severity]').val());

    var score=timeLenght+inc+freq;
    var total=sev*score;
    $('[name='+name+'_score]').val(score);
    $('[name='+name+'_total]').val(total);

});

function trublance_tool() {
    var count = $("#tru_impac").val();
    var factor = [];
    var revenue = [];
    var cost = [];
    var growth = [];
    var control = [];
    var comp = [];

    for (var i = 1; i <= count; i++) {
        if ($('[name=trub_factor'+i+'txtarea]').length) {
            factor.push($('[name=trub_factor'+i+'txtarea]').val());
            revenue.push($('[name=trub_factor'+i+'_Revenue]').val());
            cost.push($('[name=trub_factor'+i+'_Cost]').val());
            growth.push($('[name=trub_factor'+i+'_Growth]').val());
            control.push($('[name=trub_factor'+i+'_Control]').val());
            comp.push($('[name=trub_factor'+i+'_competitor]').val());




        }


    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step7";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            factor: factor,
            revenue: revenue,
            cost: cost,
            growth: growth,
            control: control,
            comp: comp



        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }


        }

    });

    return false;

}

$(document).on("change", ".tru_select_box", function() {
    var name=$(this).closest("tr").attr("id");
    var rev=parseInt($('[name='+name+'_Revenue]').val());
    var cost=parseInt($('[name='+name+'_Cost]').val());
    var growth=parseInt($('[name='+name+'_Growth]').val());
    var control=parseInt($('[name='+name+'_Control]').val());
    var comp=parseInt($('[name='+name+'_competitor]').val());

    var score=rev+cost+growth;
    var total=score*control*comp;
    if(parseInt($('[name='+name+'_threat]').val())!=0)
    {
        $('[name='+name+'_threat]').val(total);
    }
    else
    {
        $('[name='+name+'_opportunity]').val(total);

    }

});


function ansoff() {
    var count_penetration = $("#anshof1-input").val();
    var count_development = $("#anshof2-input").val();
    var count_service = $("#anshof3-input").val();
    var count_diversification = $("#anshof4-input").val();

    var factor = [];
    var type = [];
    var potential = [];
    var control = [];
    var urgency = [];
    var risk = [];
    /*var time = [];
    var resource = [];
    var invest = [];*/

    for (var i = 1; i <= count_penetration; i++) {
        if ($('[name=anshof_penetration'+i+']').length) {
            factor.push($('[name=anshof_penetration'+i+']').val());
            potential.push($('[name=anshof_penetration_Potential_'+i+']').val());
            control.push($('[name=anshof_penetration_control_'+i+']').val());
            urgency.push($('[name=anshof_penetration_urgency_'+i+']').val());
            risk.push($('[name=anshof_penetration_risk_'+i+']').val());
            /*time.push($('[name=anshof_penetration_time_'+i+']').val());
            resource.push($('[name=anshof_penetration_resource_'+i+']').val());
            invest.push($('[name=anshof_penetration_invest_'+i+']').val());*/
            type.push("Market Penetration (Existing Products in Existing Markets/Customers)");

        }


    }
    for (var i = 1; i <= count_development; i++) {
        if ($('[name=anshof_development'+i+']').length) {
            factor.push($('[name=anshof_development'+i+']').val());
            potential.push($('[name=anshof_development_Potential_'+i+']').val());
            control.push($('[name=anshof_development_control_'+i+']').val());
            urgency.push($('[name=anshof_development_urgency_'+i+']').val());
            risk.push($('[name=anshof_development_risk_'+i+']').val());
            /*time.push($('[name=anshof_development_time_'+i+']').val());
            resource.push($('[name=anshof_development_resource_'+i+']').val());
            invest.push($('[name=anshof_development_invest_'+i+']').val());*/
            type.push("Market Development (Existing Products in New Markets/Customers)");

        }


    }
    for (var i = 1; i <= count_service; i++) {
        if ($('[name=anshof_service'+i+']').length) {
            factor.push($('[name=anshof_service'+i+']').val());
            potential.push($('[name=anshof_service_Potential_'+i+']').val());
            control.push($('[name=anshof_service_control_'+i+']').val());
            urgency.push($('[name=anshof_service_urgency_'+i+']').val());
            risk.push($('[name=anshof_service_risk_'+i+']').val());
            /*time.push($('[name=anshof_service_time_'+i+']').val());
            resource.push($('[name=anshof_service_resource_'+i+']').val());
            invest.push($('[name=anshof_service_invest_'+i+']').val());*/
            type.push("Product/Service Development (New/Extended Products in Existing Markets/Customers)");

        }


    }
    for (var i = 1; i <= count_diversification; i++) {
        if ($('[name=anshof_diversification'+i+']').length) {
            factor.push($('[name=anshof_diversification'+i+']').val());
            potential.push($('[name=anshof_diversification_Potential_'+i+']').val());
            control.push($('[name=anshof_diversification_control_'+i+']').val());
            urgency.push($('[name=anshof_diversification_urgency_'+i+']').val());
            risk.push($('[name=anshof_diversification_risk_'+i+']').val());
            /*time.push($('[name=anshof_diversification_time_'+i+']').val());
            resource.push($('[name=anshof_diversification_resource_'+i+']').val());
            invest.push($('[name=anshof_diversification_invest_'+i+']').val());*/
            type.push("Diversification (New/Extended Products in New Markets/Customers)");

        }


    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step10";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            factor: factor,
            potential: potential,
            control: control,
            urgency: urgency,
            risk: risk,
            type: type,

           



        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }



        }

    });

    return false;
}

$(document).on("change", ".anshof_select", function() {
    var name=$(this).closest("tr").attr("id");
    if(name.indexOf("market_penetration") != -1){
        var prefix="anshof_penetration_";
    }
    else if(name.indexOf("market_development") != -1)
    {
        var prefix="anshof_development_";

    }
    else if(name.indexOf("service_development") != -1)
    {
        var prefix="anshof_service_";

    }
    else if(name.indexOf("diversification") != -1)
    {
        var prefix="anshof_diversification_";

    }
     var rowNumber = name[name.length - 1];
    var poten=parseInt($('[name='+prefix+'Potential_'+rowNumber+']').val());
    var control=parseInt($('[name='+prefix+'control_'+rowNumber+']').val());
    var urgency=parseInt($('[name='+prefix+'urgency_'+rowNumber+']').val());
    var risk=parseInt($('[name='+prefix+'risk_'+rowNumber+']').val());
    /*var time=parseInt($('[name='+prefix+'time_'+rowNumber+']').val());
    var resource=parseInt($('[name='+prefix+'resource_'+rowNumber+']').val());
    var invest=parseInt($('[name='+prefix+'invest_'+rowNumber+']').val());*/


    var total=poten+control+urgency+risk;
    $(this).parent().siblings().children(".anshof_total").val(total);
   

});

function actions() {
    var count = $("#decisions-input").val();
    var task = [];
    var owner = [];
    var date = [];
 
    for (var i = 1; i <= count; i++) {
        if ($('[name=task' + i + ']').length) {
            task.push($('[name=task' + i + ']').val());
            owner.push($('[name=owner' + i + ']').val());
            date.push($('[name=date' + i + ']').val());


        }


    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step11";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            task: task,
            owner: owner,
            date: date,


        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
                window.open(
                    APP_URL+"/myreport",
                    '_blank' // <- This is what makes it open in a new window.
                  );
            }
            else
            {
                toastr.error(mymessage.success);

            }


        }

    });

    return false;

}

function sw() {
    var count_prodcut = $("#sw_count_product").val();
    var count_people= $("#sw_count_people").val();
    var count_process = $("#sw_count_process").val();
    var count_operation = $("#sw_count_operation").val();
    var count_organisation = $("#sw_count_organ").val();

    var factor = [];
    var type = [];
    var str = [];
    var weak = [];
    var comment = [];
    var prio = [];
    var col_span=0;
    $(".focus-columns").children(".rotate").remove();
    $(".worksheet_total").siblings().remove();
    $(".focus_feature").siblings().remove();
    $(".work_row").children(".tru_factors").siblings().remove();

    for (var i = 1; i <= count_prodcut; i++) {
        if ($('[name=sw_factor_prod'+i+']').length) {
            factor.push($('[name=sw_factor_prod'+i+']').val());
            str.push($('[name=sw_str_prod'+i+']').val());
            weak.push($('[name=sw_weak_prod'+i+']').val());
            comment.push($('[name=sw_comm_prod'+i+']').val());
            prio.push($('[name=sw_pro_prod'+i+']').val());
            type.push("Product");
             if($('[name=sw_pro_prod'+i+']').val()>3)
             {
              $(".focus-columns").append('<td>'+$('[name=sw_factor_prod'+i+']').val()+'</td>');
              $("#worksheet_factor1").append('<td> <input type="text" readonly style="width:30px;" class="total_'+$('[name=sw_factor_prod'+i+']').val()+'" value="'+$('.work_row').length+'"> </td>');
              $(".work_row").append('<td><select type="Product" feature="'+$('[name=sw_factor_prod'+i+']').val()+'" class="worksheet_select">'+
              '<option value="1">1</option>'+
              '<option value="2">2</option>'+
              '<option value="3">3</option>'+
             '</select></td>');
              col_span++;
              total_col_sheet++;
             }
        }


    }
    if(col_span==0)
    {
        $(".focus-columns").append('<td></td>');
        $("#worksheet_factor1").append('<td> </td>');
        $(".work_row").append('<td></td>');
        col_span=1;  
    }
    $(".focus-product").attr("colspan",col_span);
    col_span=0;
    for (var i = 1; i <= count_people; i++) {
        if ($('[name=sw_factor_people'+i+']').length) {
            factor.push($('[name=sw_factor_people'+i+']').val());
            str.push($('[name=sw_str_people'+i+']').val());
            weak.push($('[name=sw_weak_people'+i+']').val());
            comment.push($('[name=sw_comm_people'+i+']').val());
            prio.push($('[name=sw_pro_people'+i+']').val());
            type.push("People");
            if($('[name=sw_pro_people'+i+']').val()>3)
            {
             $(".focus-columns").append('<td>'+$('[name=sw_factor_people'+i+']').val()+'</td>');
             $("#worksheet_factor1").append('<td> <input type="text" readonly style="width:30px;" class="total_'+$('[name=sw_factor_people'+i+']').val()+'" value="'+$('.work_row').length+'"> </td>');
             $(".work_row").append('<td><select type="People" feature="'+$('[name=sw_factor_people'+i+']').val()+'" class="worksheet_select">'+
             '<option value="1">1</option>'+
             '<option value="2">2</option>'+
             '<option value="3">3</option>'+
            '</select></td>');
             col_span++;
             total_col_sheet++;
            }
        }

    }
    if(col_span==0)
    {
        $(".focus-columns").append('<td></td>');
        $("#worksheet_factor1").append('<td> </td>');
        $(".work_row").append('<td></td>');
        col_span=1;  
    }
    $(".focus-people").attr("colspan",col_span);

    col_span=0;
    for (var i = 1; i <= count_process; i++) {
        if ($('[name=sw_factor_process'+i+']').length) {
            factor.push($('[name=sw_factor_process'+i+']').val());
            str.push($('[name=sw_str_process'+i+']').val());
            weak.push($('[name=sw_weak_process'+i+']').val());
            comment.push($('[name=sw_comm_process'+i+']').val());
            prio.push($('[name=sw_pro_process'+i+']').val());
            type.push("Process");
            if($('[name=sw_pro_process'+i+']').val()>3)
            {
             $(".focus-columns").append('<td>'+$('[name=sw_factor_process'+i+']').val()+'</td>');
             $("#worksheet_factor1").append('<td> <input type="text" readonly style="width:30px;" class="total_'+$('[name=sw_factor_process'+i+']').val()+'" value="'+$('.work_row').length+'"> </td>');
             $(".work_row").append('<td><select type="Process" feature="'+$('[name=sw_factor_process'+i+']').val()+'" class="worksheet_select">'+
             '<option value="1">1</option>'+
             '<option value="2">2</option>'+
             '<option value="3">3</option>'+
            '</select></td>');
             col_span++;
             total_col_sheet++;
            }

        }


    }
    if(col_span==0)
    {
        $(".focus-columns").append('<td></td>');
        $("#worksheet_factor1").append('<td> </td>');
        $(".work_row").append('<td></td>');
        col_span=1;  
    }
    $(".focus-process").attr("colspan",col_span);
    col_span=0;
    for (var i = 1; i <= count_operation; i++) {
        if ($('[name=sw_factor_operation'+i+']').length) {
            factor.push($('[name=sw_factor_operation'+i+']').val());
            str.push($('[name=sw_str_operation'+i+']').val());
            weak.push($('[name=sw_weak_operation'+i+']').val());
            comment.push($('[name=sw_comm_operation'+i+']').val());
            prio.push($('[name=sw_pro_operation'+i+']').val());
            type.push("Operation");
            if($('[name=sw_pro_operation'+i+']').val()>3)
            {
             $(".focus-columns").append('<td>'+$('[name=sw_factor_operation'+i+']').val()+'</td>');
             $("#worksheet_factor1").append('<td> <input type="text" readonly style="width:30px;" class="total_'+$('[name=sw_factor_operation'+i+']').val()+'" value="'+$('.work_row').length+'"> </td>');
             $(".work_row").append('<td><select  type="Operation" feature="'+$('[name=sw_factor_operation'+i+']').val()+'" class="worksheet_select">'+
             '<option value="1">1</option>'+
             '<option value="2">2</option>'+
             '<option value="3">3</option>'+
            '</select></td>');
             col_span++;
             total_col_sheet++;
            }
        }

    }
    if(col_span==0)
    {
        $(".focus-columns").append('<td></td>');
        $("#worksheet_factor1").append('<td> </td>');
        $(".work_row").append('<td></td>');
        col_span=1;  
    }
    $(".focus-operation").attr("colspan",col_span);

    for (var i = 1; i <= count_organisation; i++) {
        if ($('[name=sw_factor_organ'+i+']').length) {
            factor.push($('[name=sw_factor_organ'+i+']').val());
            str.push($('[name=sw_str_organ'+i+']').val());
            weak.push($('[name=sw_weak_organ'+i+']').val());
            comment.push($('[name=sw_comm_organ'+i+']').val());
            prio.push($('[name=sw_pro_organ'+i+']').val());
            type.push("Organisation");
            if($('[name=sw_pro_organ'+i+']').val()>3)
            {
             $(".focus-columns").append('<td>'+$('[name=sw_factor_organ'+i+']').val()+'</td>');
             $("#worksheet_factor1").append('<td> <input type="text" readonly style="width:30px;" class="total_'+$('[name=sw_factor_organ'+i+']').val()+'" value="'+$('.work_row').length+'"> </td>');
             $(".work_row").append('<td><select type="Organisation" feature="'+$('[name=sw_factor_organ'+i+']').val()+'" class="worksheet_select">'+
             '<option value="1">1</option>'+
             '<option value="2">2</option>'+
             '<option value="3">3</option>'+
            '</select></td>');
             col_span++;
             total_col_sheet++;
            }
        }


    }
    if(col_span==0)
    {
        $(".focus-columns").append('<td></td>');
        $("#worksheet_factor1").append('<td> </td>');
        $(".work_row").append('<td></td>');
        col_span=1;  
    }
    $(".focus-organ").attr("colspan",col_span);


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step8";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

            factor: factor,
            str: str,
            weak: weak,
            comment: comment,
            prio: prio,
            type: type,

           



        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }



        }

    });

    return false;
}

function worksheet() {
    var messages=["Redesign product(s) for adding or removing features","Undertake marketing (market study) for identifying and testing product features"
                  ,"Revise the product design process, team or expertise","Outsource product design process"
                  ,"Change the philosophy of Design to: DESIGN FOR one or more of these: sustainability; logistics; supply chain; manufacturing/assembly; "
                  ,"Identify and adopt or improve current technologies","Outsource for new technologies in product design or production"
                  ,"Improve information management for product development process (Databases, PoS information capture, customer feedback, …)"
                  ,"Invest on R&D for new product development","Introduce new products"
                  ,"Improve the current products for efficiency, quality, cost, modularity (design to order) to attract customers"
                  ,"Identify and collaborate with external partners for new or improved products, or for new or extended markets"
                  ,"Introduce concurrent engineering for product development and production process"
                  ,"Introduce product life cycle management system (source-make-deliver-return-recycle)"
                  ,"Initiate a programme to identify the needs for staff training (skills and knowledge) and deliver training at different levels (leadership, management, technology, techniques, customer/suppliers’ relations, …)"
                  ,"Reach out and collaborate with external entities (University, Professional bodies and Associations, …) for accessing resources and new knowledge to transfer to the people"
                  ,"Revise HRM policies for recruitment, development, retainment, ","Introduce initiatives for motivating and engaging people [teamwork, reward system, job design, "
                  ,"Manage and improve HRM information system","Manage knowledge of people in the organisation using new technologies"
                  ,"Encourage and reward teamwork, engagement and learning","Change and improve approach to leadership of the company"
                  ,"Introduce technologies (social media) to encourage communication","Train staff for multitasking and flexible working (remote, from-home, …)"
                  ,"Use flexible contracts for attracting required skills","Re-Engineer Processes in the organisation for efficiency (cost effectiveness and speed), effectiveness (quality, reliability/dependability, customer satisfaction), flexibility and responsiveness"
                  ,"Make your processes more market and customer oriented (integrate with marketing and customer data)"
                  ,"","Identify shortfalls in technologies used, identify new and emerging technologies, and consider investment in changing/improving/adding technologies"
                  ,"Evaluate automation and data management technologies options (customer relationship management, ERP system, market data and trends, …) and invest in new technologies"
                  ,"Evaluate and redesign marketing processes of the firm (market awareness, market data access, advertisement, networking, …)"
                  ,"","Revise outsourcing and purchasing policies and methods of the firm","Introduce or revise supplier management strategies and system (identifying, selecting and evaluating/monitoring suppliers, and types of relationships and contracts (partnership, VMI, 3/4PL, …)"
                  ,"Evaluate and revise product distribution, transportation, and any reverse logistics processes (related to suppliers/partners)"
                  ,"Introduce initiatives for process improvement (Methods, tools and techniques related to Lean operations) for material handling (inventory and warehouse), production, delivery"
                  ,"Revise planning and control system (forecasting, scheduling, workflow, material and product flow, …)"
                  ,"Evaluate and redesign the information management system in the company","Introduce integrated technologies (ERP, Supplier Information, Customer/Market Data, …)"
                  ,"Introduce information security measurement in the company’s IS","Outsource or collaborate with external parties for developing or improving the IS/M"
                  ,"Redesign the NPD system for speed, quality and integration of all stakeholders","Invest on R&D for NPD"
                  ,"Collaborate for new products with external partners","","Introduce cost saving initiatives (LEAN) in the firm"
                  ,"Review and revise the accounting system for accuracy in capturing data and information for product and service costing"
                  ,"Review and revise information management for costing of products and services","Review marketing strategy of the company"
                  ,"Initiate marketing campaign (outsourcing, identifying new customers or their needs, advertisement, website development, social media, …)"
                  ,"Identify new distribution channels and potential partners","Review and revise order management system and process"
                  ,"","Review firm’s formal systems/processes (accounting, documentation, data management, …) for clarity, accuracy and efficiency "
                  ,"Introduce risk management system (risk identification, register, mitigation, …) into the firm"
                  ,"Introduce knowledge management system in the firm","Revise the firm’s structure for clarity, flow and good communication"
                  ,"Introduce emerging approaches such as project-based, matrix, team based, flexible structure in the firm"
                  ,"","Review and revise the leadership style of the firm and its executive level; introduce improvement measures through organisation redesign, training,"
                  ,"Introduce autonomous functioning and management in the organisation","Develop a system for change management in the firm"
                  ,"Introduce collaboration methods within the firm and with external entities","Consider collaboration with sources of knowledge (university, professional bodies, …)"
                  ,"Consider merger and/or acquisition strategies","Evaluate physical location of the firm (geography (e.g. near markets), cost, size, style (e.g. open space), and introduce measures of change"];
    var factor=[];
    var score=[];
    var type=[];
    var feature=[];
    var fac;
    var PRACTICES=[];
    $('.work_row').each(function(i, obj) {
         debugger;
         fac=$(this).children(".tru_factors").children("textarea").val();
        $(this).children("td").children(".worksheet_select").each(function(j, objj) {
            factor.push(fac);
            score.push($(this).val());
            type.push($(this).attr("type"));
            feature.push($(this).attr("feature"));
            if(fac.toLowerCase()=="training needs" && $(this).attr("type").toLowerCase()=="people" && $(this).val()==3)
            {
                if(jQuery.inArray(14, PRACTICES) == -1) {
                 PRACTICES.push(14);
                }
                if(jQuery.inArray(15, PRACTICES) == -1) {
                    PRACTICES.push(15);
                }
                if(jQuery.inArray(19, PRACTICES) == -1) {
                    PRACTICES.push(19);
                }

            }
            else if(fac.toLowerCase()=="multi-skilled personnel requirements" && $(this).attr("type").toLowerCase()=="people" && $(this).val()==3)
            {
                   if(jQuery.inArray(14, PRACTICES) == -1) {
                    PRACTICES.push(14);
                   }
                   if(jQuery.inArray(15, PRACTICES) == -1) {
                       PRACTICES.push(15);
                   }
                   if(jQuery.inArray(19, PRACTICES) == -1) {
                       PRACTICES.push(19);
                   }
                   if(jQuery.inArray(22, PRACTICES) == -1) {
                    PRACTICES.push(22);
                   }
                   if(jQuery.inArray(23, PRACTICES) == -1) {
                       PRACTICES.push(23);
                   }
                   if(jQuery.inArray(24, PRACTICES) == -1) {
                       PRACTICES.push(24);
                   }
            }
            else if(fac.toLowerCase()=="staff turnover (staff leaving over a period of time)" && $(this).attr("type").toLowerCase()=="people" && $(this).val()==3)
            {
                   if(jQuery.inArray(16, PRACTICES) == -1) {
                    PRACTICES.push(16);
                   }
                   if(jQuery.inArray(17, PRACTICES) == -1) {
                       PRACTICES.push(17);
                   }
                   if(jQuery.inArray(20, PRACTICES) == -1) {
                       PRACTICES.push(20);
                   }
                   if(jQuery.inArray(21, PRACTICES) == -1) {
                    PRACTICES.push(21);
                   }
               
            }
            else if(fac.toLowerCase()=="labour cost")
            {
                   if($(this).attr("type").toLowerCase()=="people" && $(this).val()==3)
                   {
                    if(jQuery.inArray(16, PRACTICES) == -1) {
                        PRACTICES.push(16);
                    }
                    if(jQuery.inArray(23, PRACTICES) == -1) {
                        PRACTICES.push(23);
                    }
                    if(jQuery.inArray(24, PRACTICES) == -1) {
                        PRACTICES.push(24);
                    }
                   }
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(42, PRACTICES) == -1) {
                        PRACTICES.push(42);
                    }
                   }
                 
               
            }
            else if(fac.toLowerCase()=="labour force productivity")
            {
                   if($(this).attr("type").toLowerCase()=="people" && $(this).val()==3)
                   {
                    if(jQuery.inArray(15, PRACTICES) == -1) {
                        PRACTICES.push(15);
                    }
                    if(jQuery.inArray(19, PRACTICES) == -1) {
                        PRACTICES.push(19);
                    }
                    if(jQuery.inArray(20, PRACTICES) == -1) {
                        PRACTICES.push(20);
                    }
                    if(jQuery.inArray(21, PRACTICES) == -1) {
                        PRACTICES.push(21);
                    }
                    if(jQuery.inArray(22, PRACTICES) == -1) {
                        PRACTICES.push(22);
                    }
                   }
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(42, PRACTICES) == -1) {
                        PRACTICES.push(42);
                    }
                  
                   }
                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(52, PRACTICES) == -1) {
                        PRACTICES.push(52);
                    }
                    if(jQuery.inArray(53, PRACTICES) == -1) {
                        PRACTICES.push(53);
                    }
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(27, PRACTICES) == -1) {
                        PRACTICES.push(27);
                    }
                  
                   }
                 
               
            }
            else if(fac.toLowerCase()=="number of changes for process improvement")
            {
               
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(27, PRACTICES) == -1) {
                        PRACTICES.push(27);
                    }
                  
                   }
                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(52, PRACTICES) == -1) {
                        PRACTICES.push(52);
                    }
                    if(jQuery.inArray(53, PRACTICES) == -1) {
                        PRACTICES.push(53);
                    }
                    if(jQuery.inArray(56, PRACTICES) == -1) {
                        PRACTICES.push(56);
                    }
                    if(jQuery.inArray(57, PRACTICES) == -1) {
                        PRACTICES.push(57);
                    }
                   }
                 
               
            }
            else if(fac.toLowerCase()=="number of machine breakdowns")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(27, PRACTICES) == -1) {
                        PRACTICES.push(27);
                    }
                  
                   }

                 
               
            }
            else if(fac.toLowerCase()=="schedule changes")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(35, PRACTICES) == -1) {
                        PRACTICES.push(35);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(28, PRACTICES) == -1) {
                        PRACTICES.push(28);
                    }
                  
                   }
               
            }
            else if(fac.toLowerCase()=="% of occasions of stock out")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(49, PRACTICES) == -1) {
                        PRACTICES.push(49);
                    }
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(28, PRACTICES) == -1) {
                        PRACTICES.push(28);
                    }
                  
                   }
               
            }
            else if(fac.toLowerCase()=="packaging variation per product")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(0, PRACTICES) == -1) {
                        PRACTICES.push(0);
                    }
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="no of customers in the company’s customer base size")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(45, PRACTICES) == -1) {
                        PRACTICES.push(45);
                    }
                    if(jQuery.inArray(46, PRACTICES) == -1) {
                        PRACTICES.push(46);
                    }
                    if(jQuery.inArray(47, PRACTICES) == -1) {
                        PRACTICES.push(47);
                    }
                    
                   }
              
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(0, PRACTICES) == -1) {
                        PRACTICES.push(0);
                    }
                    if(jQuery.inArray(1, PRACTICES) == -1) {
                        PRACTICES.push(1);
                    }
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="no of customers % of customers dictating delivery time")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(35, PRACTICES) == -1) {
                        PRACTICES.push(35);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                    if(jQuery.inArray(29, PRACTICES) == -1) {
                        PRACTICES.push(29);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="% of customers you are the preferred supplier for")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(39, PRACTICES) == -1) {
                        PRACTICES.push(39);
                    }
                    if(jQuery.inArray(48, PRACTICES) == -1) {
                        PRACTICES.push(48);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                    if(jQuery.inArray(29, PRACTICES) == -1) {
                        PRACTICES.push(29);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(0, PRACTICES) == -1) {
                        PRACTICES.push(0);
                    }
                    if(jQuery.inArray(4, PRACTICES) == -1) {
                        PRACTICES.push(4);
                    }
                    if(jQuery.inArray(7, PRACTICES) == -1) {
                        PRACTICES.push(7);
                    }
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                                      
                   }
               
            }
            //from here
            else if(fac.toLowerCase()=="customer loyalty (% of customers returning)")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                   
                    if(jQuery.inArray(45, PRACTICES) == -1) {
                        PRACTICES.push(45);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                    if(jQuery.inArray(29, PRACTICES) == -1) {
                        PRACTICES.push(29);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(1, PRACTICES) == -1) {
                        PRACTICES.push(1);
                    }
                    if(jQuery.inArray(8, PRACTICES) == -1) {
                        PRACTICES.push(8);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(57, PRACTICES) == -1) {
                        PRACTICES.push(57);
                    }
                    if(jQuery.inArray(60, PRACTICES) == -1) {
                        PRACTICES.push(60);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="% of cases price is negotiated by customers (customer influence)")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(35, PRACTICES) == -1) {
                        PRACTICES.push(35);
                    }
                    if(jQuery.inArray(43, PRACTICES) == -1) {
                        PRACTICES.push(43);
                    }
                    if(jQuery.inArray(44, PRACTICES) == -1) {
                        PRACTICES.push(44);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                    if(jQuery.inArray(29, PRACTICES) == -1) {
                        PRACTICES.push(29);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                   
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="% of orders cancelled")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(48, PRACTICES) == -1) {
                        PRACTICES.push(48);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                   
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(0, PRACTICES) == -1) {
                        PRACTICES.push(0);
                    }
                    if(jQuery.inArray(7, PRACTICES) == -1) {
                        PRACTICES.push(7);
                    }
                    if(jQuery.inArray(8, PRACTICES) == -1) {
                        PRACTICES.push(8);
                    }
                    if(jQuery.inArray(9, PRACTICES) == -1) {
                        PRACTICES.push(9);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="delayed customers payments")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(48, PRACTICES) == -1) {
                        PRACTICES.push(48);
                    }
                    if(jQuery.inArray(49, PRACTICES) == -1) {
                        PRACTICES.push(49);
                    }
                    if(jQuery.inArray(50, PRACTICES) == -1) {
                        PRACTICES.push(50);
                    }
                                 
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(28, PRACTICES) == -1) {
                        PRACTICES.push(28);
                    }
                    
                                      
                   }

               
            }
            else if(fac.toLowerCase()=="customers specified materials")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(45, PRACTICES) == -1) {
                        PRACTICES.push(45);
                    }
                    if(jQuery.inArray(48, PRACTICES) == -1) {
                        PRACTICES.push(48);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(2, PRACTICES) == -1) {
                        PRACTICES.push(2);
                    }
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                    if(jQuery.inArray(13, PRACTICES) == -1) {
                        PRACTICES.push(13);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="% of bespoke products")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(39, PRACTICES) == -1) {
                        PRACTICES.push(39);
                    }
                    if(jQuery.inArray(41, PRACTICES) == -1) {
                        PRACTICES.push(41);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                    if(jQuery.inArray(27, PRACTICES) == -1) {
                        PRACTICES.push(27);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(0, PRACTICES) == -1) {
                        PRACTICES.push(0);
                    }
                    if(jQuery.inArray(1, PRACTICES) == -1) {
                        PRACTICES.push(1);
                    }
                    if(jQuery.inArray(2, PRACTICES) == -1) {
                        PRACTICES.push(2);
                    }
                    if(jQuery.inArray(3, PRACTICES) == -1) {
                        PRACTICES.push(3);
                    }
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(7, PRACTICES) == -1) {
                        PRACTICES.push(7);
                    }
                    if(jQuery.inArray(8, PRACTICES) == -1) {
                        PRACTICES.push(8);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                                      
                   }
               
            }
            //here
            else if(fac.toLowerCase()=="% of products dependent on external products")
            {
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(41, PRACTICES) == -1) {
                        PRACTICES.push(41);
                    }
                    
                    
                   }
                  
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(6, PRACTICES) == -1) {
                        PRACTICES.push(6);
                    }
                    if(jQuery.inArray(7, PRACTICES) == -1) {
                        PRACTICES.push(7);
                    }
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(57, PRACTICES) == -1) {
                        PRACTICES.push(57);
                    }
                    if(jQuery.inArray(58, PRACTICES) == -1) {
                        PRACTICES.push(58);
                    }
                    if(jQuery.inArray(59, PRACTICES) == -1) {
                        PRACTICES.push(59);
                    }
                    
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="no of competitors")
            {
                
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(39, PRACTICES) == -1) {
                        PRACTICES.push(39);
                    }
                    if(jQuery.inArray(40, PRACTICES) == -1) {
                        PRACTICES.push(40);
                    }
                    if(jQuery.inArray(41, PRACTICES) == -1) {
                        PRACTICES.push(41);
                    }
                    if(jQuery.inArray(45, PRACTICES) == -1) {
                        PRACTICES.push(45);
                    }
                    if(jQuery.inArray(47, PRACTICES) == -1) {
                        PRACTICES.push(47);
                    }
                    if(jQuery.inArray(50, PRACTICES) == -1) {
                        PRACTICES.push(50);
                    }
                    if(jQuery.inArray(51, PRACTICES) == -1) {
                        PRACTICES.push(51);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                    if(jQuery.inArray(29, PRACTICES) == -1) {
                        PRACTICES.push(29);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(1, PRACTICES) == -1) {
                        PRACTICES.push(1);
                    }
                    if(jQuery.inArray(2, PRACTICES) == -1) {
                        PRACTICES.push(2);
                    }
                    if(jQuery.inArray(3, PRACTICES) == -1) {
                        PRACTICES.push(3);
                    }
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(8, PRACTICES) == -1) {
                        PRACTICES.push(8);
                    }
                    if(jQuery.inArray(9, PRACTICES) == -1) {
                        PRACTICES.push(9);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(54, PRACTICES) == -1) {
                        PRACTICES.push(54);
                    }
                    if(jQuery.inArray(56, PRACTICES) == -1) {
                        PRACTICES.push(56);
                    }
                    if(jQuery.inArray(57, PRACTICES) == -1) {
                        PRACTICES.push(57);
                    }
                    if(jQuery.inArray(58, PRACTICES) == -1) {
                        PRACTICES.push(58);
                    }
                    if(jQuery.inArray(60, PRACTICES) == -1) {
                        PRACTICES.push(60);
                    }
                    
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="no of mergers/acquisitions")
            {
               
                  
                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {

                    if(jQuery.inArray(59, PRACTICES) == -1) {
                        PRACTICES.push(59);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="Product pricing")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(42, PRACTICES) == -1) {
                        PRACTICES.push(42);
                    }
                    if(jQuery.inArray(43, PRACTICES) == -1) {
                        PRACTICES.push(43);
                    }
                    if(jQuery.inArray(44, PRACTICES) == -1) {
                        PRACTICES.push(44);
                    }
                    if(jQuery.inArray(45, PRACTICES) == -1) {
                        PRACTICES.push(45);
                    }
                    
                    
                   }


               
            }
            else if(fac.toLowerCase()=="number of new products to market and their associated services")
            {
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(39, PRACTICES) == -1) {
                        PRACTICES.push(39);
                    }
                    if(jQuery.inArray(41, PRACTICES) == -1) {
                        PRACTICES.push(41);
                    }
                   
                    if(jQuery.inArray(45, PRACTICES) == -1) {
                        PRACTICES.push(45);
                    }
                    if(jQuery.inArray(51, PRACTICES) == -1) {
                        PRACTICES.push(51);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                    if(jQuery.inArray(29, PRACTICES) == -1) {
                        PRACTICES.push(29);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(1, PRACTICES) == -1) {
                        PRACTICES.push(1);
                    }
                    if(jQuery.inArray(2, PRACTICES) == -1) {
                        PRACTICES.push(2);
                    }
                    if(jQuery.inArray(3, PRACTICES) == -1) {
                        PRACTICES.push(3);
                    }
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(8, PRACTICES) == -1) {
                        PRACTICES.push(8);
                    }
                    if(jQuery.inArray(9, PRACTICES) == -1) {
                        PRACTICES.push(9);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="average industry/sector time to market")
            {
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(35, PRACTICES) == -1) {
                        PRACTICES.push(35);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(39, PRACTICES) == -1) {
                        PRACTICES.push(39);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(27, PRACTICES) == -1) {
                        PRACTICES.push(27);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(4, PRACTICES) == -1) {
                        PRACTICES.push(4);
                    }
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(6, PRACTICES) == -1) {
                        PRACTICES.push(6);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                    if(jQuery.inArray(12, PRACTICES) == -1) {
                        PRACTICES.push(12);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="market delivery time (vs industry average)")
            {
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                   
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(26, PRACTICES) == -1) {
                        PRACTICES.push(26);
                    }
                                      
                   }

               
            }
            else if(fac.toLowerCase()=="number of markets targeted")
            {
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(40, PRACTICES) == -1) {
                        PRACTICES.push(40);
                    }
                    if(jQuery.inArray(41, PRACTICES) == -1) {
                        PRACTICES.push(41);
                    }
                    if(jQuery.inArray(45, PRACTICES) == -1) {
                        PRACTICES.push(45);
                    }
                    if(jQuery.inArray(47, PRACTICES) == -1) {
                        PRACTICES.push(47);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    
                    if(jQuery.inArray(29, PRACTICES) == -1) {
                        PRACTICES.push(29);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(0, PRACTICES) == -1) {
                        PRACTICES.push(0);
                    }
                    if(jQuery.inArray(1, PRACTICES) == -1) {
                        PRACTICES.push(1);
                    }
                    if(jQuery.inArray(8, PRACTICES) == -1) {
                        PRACTICES.push(8);
                    }
                    if(jQuery.inArray(9, PRACTICES) == -1) {
                        PRACTICES.push(9);
                    }
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                    if(jQuery.inArray(11, PRACTICES) == -1) {
                        PRACTICES.push(11);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="sales at reduced costs")
            {
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(33, PRACTICES) == -1) {
                        PRACTICES.push(33);
                    }
                    if(jQuery.inArray(42, PRACTICES) == -1) {
                        PRACTICES.push(42);
                    }
                    if(jQuery.inArray(44, PRACTICES) == -1) {
                        PRACTICES.push(44);
                    }
                    if(jQuery.inArray(49, PRACTICES) == -1) {
                        PRACTICES.push(49);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    if(jQuery.inArray(27, PRACTICES) == -1) {
                        PRACTICES.push(27);
                    }
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(1, PRACTICES) == -1) {
                        PRACTICES.push(1);
                    }
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                    
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="no of active suppliers")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }
                   
                    
                    
                   }
 
                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {

                    if(jQuery.inArray(57, PRACTICES) == -1) {
                        PRACTICES.push(57);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="% of products with only one supplier")
            {
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }
                    if(jQuery.inArray(39, PRACTICES) == -1) {
                        PRACTICES.push(39);
                    }
                    if(jQuery.inArray(41, PRACTICES) == -1) {
                        PRACTICES.push(41);
                    }
                    if(jQuery.inArray(47, PRACTICES) == -1) {
                        PRACTICES.push(47);
                    }
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(10, PRACTICES) == -1) {
                        PRACTICES.push(10);
                    }
                    
                                      
                   }

               
            }
            else if(fac.toLowerCase()=="inward supplies defects (rate)")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }
                  
                    
                    
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                   
                    if(jQuery.inArray(25, PRACTICES) == -1) {
                        PRACTICES.push(25);
                    }
                    
                                      
                   }

               
            }
            else if(fac.toLowerCase()=="% of preferred suppliers")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }
               
                    
                    
                   }
             
            }
            else if(fac.toLowerCase()=="% of suppliers’ prices negotiated")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }
                
                    
                   }

                   if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                   {

                    if(jQuery.inArray(57, PRACTICES) == -1) {
                        PRACTICES.push(57);
                    }
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="suppliers lead time")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }
                    if(jQuery.inArray(34, PRACTICES) == -1) {
                        PRACTICES.push(34);
                    }
                    
                    
                   }

               
            }
            else if(fac.toLowerCase()=="new suppliers being sourced")
            {
               
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(30, PRACTICES) == -1) {
                        PRACTICES.push(30);
                    }
                    if(jQuery.inArray(31, PRACTICES) == -1) {
                        PRACTICES.push(31);
                    }
                    if(jQuery.inArray(32, PRACTICES) == -1) {
                        PRACTICES.push(32);
                    }

                    
                    
                   }


               
            }
            else if(fac.toLowerCase()=="product technology changes")
            {
               


                   if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                   {
                    if(jQuery.inArray(5, PRACTICES) == -1) {
                        PRACTICES.push(5);
                    }
                    if(jQuery.inArray(6, PRACTICES) == -1) {
                        PRACTICES.push(6);
                    }
                    if(jQuery.inArray(7, PRACTICES) == -1) {
                        PRACTICES.push(7);
                    }
                  
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                   {
                    if(jQuery.inArray(36, PRACTICES) == -1) {
                        PRACTICES.push(36);
                    }
                    if(jQuery.inArray(50, PRACTICES) == -1) {
                        PRACTICES.push(50);
                    }
                    if(jQuery.inArray(51, PRACTICES) == -1) {
                        PRACTICES.push(51);
                    }
                  
                                      
                   }
                   if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                   {
                    if(jQuery.inArray(27, PRACTICES) == -1) {
                        PRACTICES.push(27);
                    }
        
                                      
                   }
               
            }
            else if(fac.toLowerCase()=="process technology changes")
            {
               
                if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                {
                 if(jQuery.inArray(5, PRACTICES) == -1) {
                     PRACTICES.push(5);
                 }
                 if(jQuery.inArray(6, PRACTICES) == -1) {
                     PRACTICES.push(6);
                 }
                 if(jQuery.inArray(7, PRACTICES) == -1) {
                     PRACTICES.push(7);
                 }
               
                                   
                }
                if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                {
                 if(jQuery.inArray(36, PRACTICES) == -1) {
                     PRACTICES.push(36);
                 }
                 if(jQuery.inArray(50, PRACTICES) == -1) {
                     PRACTICES.push(50);
                 }
                 if(jQuery.inArray(51, PRACTICES) == -1) {
                     PRACTICES.push(51);
                 }
               
                                   
                }
                if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                {
                 if(jQuery.inArray(27, PRACTICES) == -1) {
                     PRACTICES.push(27);
                 }
                 if(jQuery.inArray(28, PRACTICES) == -1) {
                    PRACTICES.push(28);
                }
                                   
                }
            }
            else if(fac.toLowerCase()=="% turnover spent on technology change")
            {
               
                if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                {
                 if(jQuery.inArray(5, PRACTICES) == -1) {
                     PRACTICES.push(5);
                 }
                 if(jQuery.inArray(6, PRACTICES) == -1) {
                     PRACTICES.push(6);
                 }
                
               
                                   
                }
                if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                {
                 if(jQuery.inArray(36, PRACTICES) == -1) {
                     PRACTICES.push(36);
                 }
                 if(jQuery.inArray(40, PRACTICES) == -1) {
                     PRACTICES.push(40);
                 }
                 if(jQuery.inArray(51, PRACTICES) == -1) {
                     PRACTICES.push(51);
                 }
               
                                   
                }
                if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                {
                 if(jQuery.inArray(27, PRACTICES) == -1) {
                     PRACTICES.push(27);
                 }
     
                                   
                }
               
            }
            else if(fac.toLowerCase()=="technologies available to the company")
            {
               
                if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                {
                 if(jQuery.inArray(5, PRACTICES) == -1) {
                     PRACTICES.push(5);
                 }
                 if(jQuery.inArray(6, PRACTICES) == -1) {
                     PRACTICES.push(6);
                 }
                 
               
                                   
                }
                if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                {
                 if(jQuery.inArray(36, PRACTICES) == -1) {
                     PRACTICES.push(36);
                 }
                 if(jQuery.inArray(38, PRACTICES) == -1) {
                     PRACTICES.push(38);
                 }
                 if(jQuery.inArray(50, PRACTICES) == -1) {
                    PRACTICES.push(50);
                }
                 if(jQuery.inArray(51, PRACTICES) == -1) {
                     PRACTICES.push(51);
                 }
               
                                   
                }
                if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                {
                 if(jQuery.inArray(27, PRACTICES) == -1) {
                     PRACTICES.push(27);
                 }
                 if(jQuery.inArray(28, PRACTICES) == -1) {
                    PRACTICES.push(28);
                }
                                   
                }
               
            }
            else if(fac.toLowerCase()=="support services improvements")
            {
                if($(this).attr("type").toLowerCase()=="operation" && $(this).val()==3)
                {
                 if(jQuery.inArray(33, PRACTICES) == -1) {
                     PRACTICES.push(33);
                 }
                 if(jQuery.inArray(35, PRACTICES) == -1) {
                     PRACTICES.push(35);
                 }
                 if(jQuery.inArray(36, PRACTICES) == -1) {
                     PRACTICES.push(36);
                 }
                 if(jQuery.inArray(37, PRACTICES) == -1) {
                    PRACTICES.push(37);
                }
                if(jQuery.inArray(38, PRACTICES) == -1) {
                    PRACTICES.push(38);
                }
                if(jQuery.inArray(41, PRACTICES) == -1) {
                    PRACTICES.push(41);
                }
                if(jQuery.inArray(51, PRACTICES) == -1) {
                    PRACTICES.push(51);
                }
               
                                   
                }
                if($(this).attr("type").toLowerCase()=="product" && $(this).val()==3)
                {
                 if(jQuery.inArray(5, PRACTICES) == -1) {
                     PRACTICES.push(5);
                 }
                 if(jQuery.inArray(6, PRACTICES) == -1) {
                     PRACTICES.push(6);
                 }
                 if(jQuery.inArray(7, PRACTICES) == -1) {
                     PRACTICES.push(7);
                 }
               
                                   
                }

                if($(this).attr("type").toLowerCase()=="process" && $(this).val()==3)
                {
                 if(jQuery.inArray(25, PRACTICES) == -1) {
                     PRACTICES.push(25);
                 }
                 if(jQuery.inArray(26, PRACTICES) == -1) {
                    PRACTICES.push(26);
                }
                                   
                }
                if($(this).attr("type").toLowerCase()=="organisation" && $(this).val()==3)
                {
                 if(jQuery.inArray(55, PRACTICES) == -1) {
                     PRACTICES.push(55);
                 }
                 if(jQuery.inArray(57, PRACTICES) == -1) {
                    PRACTICES.push(57);
                }
                if(jQuery.inArray(58, PRACTICES) == -1) {
                    PRACTICES.push(58);
                }
                                   
                }
               
            }
            PRACTICES.sort();
            $(".improve_actions li").remove();
            for(var i=0;i<PRACTICES.length;i++)
            {
                $(".improve_actions").append("<li>"+messages[PRACTICES[i]]+"</li>");
            }
           
            
        });
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = APP_URL + "/step9";

    $.ajax({

        type: 'POST',

        url: url,

        data: {

             factor: factor,
             score: score,
             type: type,
             feature: feature,
             messages:messages,
             PRACTICES:PRACTICES,

        },

        success: function(mymessage) {
            //$(".hideMe").css('display', 'table-cell');
            if(mymessage.background!="bg-danger"){
                toastr.success(mymessage.success);
            }
            else
            {
                toastr.error(mymessage.success);

            }


        }

    });

    return false;

}

$(document).on("change", ".worksheet_select", function() {
    var feature=$(this).attr("feature");
    var sum=0;
    $(".worksheet_select[feature='"+feature+"']").each(function(){
        sum+=parseInt($(this).val());
    });
    $(".total_"+feature).val(sum);
});
$(".accordion").click(function() {
    //$(this).siblings().children(".card").children(".collapse").removeClass("show");
    //$("html, body").animate({ scrollTop: $(this).offset().top }, "slow");
});
$(document).on("change", ".custom-control-input", function() {
  var id=$(this).attr("id");
  var length=id.length;
  var number=id.substring(13, length);
  var elements=document.getElementsByClassName("row_hidden");
  if($(this).prop("checked") == true){
  $(elements[number]).show();
  }
  else
  {
    $(elements[number]).hide(); 
  }
});