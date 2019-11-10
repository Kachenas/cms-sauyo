$(document).ready(function () {

    $('#complaintForm').hide();
    $('#reportSummary').hide();
    $('#registrationForm').hide();
    $('.user-cons').hide();


    $("#isUserConstituent").click(function () {
        var isChecked = $('#isUserConstituent').prop('checked');
        if (isChecked) {
            $('.user-cons').show();
        } else {
            $('.user-cons').hide();
        }
    });

});

function showComplaintForm() {
    $('#complaintForm').show();
    $('#reportSummary').hide();
    $('#registrationForm').hide();
}

function showReportSummary() {
    $('#reportSummary').show();
    $('#complaintForm').hide();
    $('#registrationForm').hide();
}

function showBarangayRegistrationForm() {
    $('#reportSummary').hide();
    $('#complaintForm').hide();
    $('#registrationForm').show();
}

function getDetails() {


    var _conductedDate = $('#conductedDate').val();
    var _conductedTime = $('#conductedTime').val();
    var _txtComplainant = $('#txtComplainant').val();
    var _txtComplainantAddress = $('#txtComplainantAddress').val();
    var _txtRespondent = $('#txtRespondent').val();
    var _txtRespondentAddress = $('#txtRespondentAddress').val();
    var _txtBrgyCase = $('#txtBrgyCase').val();
    var _txtNatureCase = $('#txtNatureCase').val();
    var _txtDisposition1 = $('#txtDisposition1').val();
    var _txtDisposition2 = $('#txtDisposition2').val();
    var _txtDisposition3 = $('#txtDisposition3').val();
    var _check1stComplainant = $('#check1stComplainant').prop('checked');
    var _check1stRespondent = $('#check1stRespondent').prop('checked');
    var _check2ndComplainant = $('#check2ndComplainant').prop('checked');
    var _check2ndRespondent = $('#check2ndRespondent').prop('checked');
    var _check3rdComplainant = $('#check3rdComplainant').prop('checked');
    var _check3rdRespondent = $('#check3rdRespondent').prop('checked');
    var _checkAmicable = $('#checkAmicable').prop('checked');
    var _checkICTFA = $('#checkICTFA').prop('checked');
    var _checkDLM = $('#checkDLM').prop('checked');
    var _checkLI = $('#checkLI').prop('checked');
    var _checkRefferedTo = $('#checkRefferedTo').val();
    var _txtReffered1 = $('#txtReffered1').val();
    var _txtReffered2 = $('#txtReffered2').val();
    var _txtSalaysay = $('#txtSalaysay').val();
    var _txtSummon1 = $('#txtSummon1').val();
    var _txtSummon2 = $('#txtSummon2').val();
    var _txtSummon3 = $('#txtSummon3').val();
    var _txtLagda = $('#txtLagda').val();
    var _txtDutyOfficer = $('#txtDutyOfficer').val();
    var _txtSworn = $('#txtSworn').val();
    var _txtAffliant = $('#txtAffliant').val();

    if (_check1stComplainant === true) {
        _check1stComplainant = 1;
    } else {
        _check1stComplainant = 0;
    }

    if (_check1stRespondent === true) {
        _check1stRespondent = 1;
    } else {
        _check1stRespondent = 0;
    }

    if (_check2ndComplainant === true) {
        _check2ndComplainant = 1;
    } else {
        _check2ndComplainant = 0;
    }

    if (_check2ndRespondent === true) {
        _check2ndRespondent = 1;
    } else {
        _check2ndRespondent = 0;
    }

    if (_check3rdComplainant === true) {
        _check3rdComplainant = 1;
    } else {
        _check3rdComplainant = 0;
    }

    if (_check3rdRespondent === true) {
        _check3rdRespondent = 1;
    } else {
        _check3rdRespondent = 0;
    }

    if (_checkAmicable === true) {
        _checkAmicable = 1;
    } else {
        _checkAmicable = 0;
    }

    if (_checkICTFA === true) {
        _checkICTFA = 1;
    } else {
        _checkICTFA = 0;
    }

    if (_checkDLM === true) {
        _checkDLM = 1;
    } else {
        _checkDLM = 0;
    }

    if (_checkLI === true) {
        _checkLI = 1;
    } else {
        _checkLI = 0;
    }

    var _message = "", _success = true;

    $("#detailsInput").find("[mandatory='true']").each(function () {
        if ($(this).val() == "") {
            _message += $(this).attr('fieldname') + " is a required field.<br>";
            $(this).attr("style", "border: 1px solid red;");
            _success = false;
        }
    });

    if (_success) {
        swal.fire({
            title: 'Are you sure you want to save this information?',
            showCancelButton: true,
            confirmButtonText: 'Yes, save information',
            allowOutsideClick: () => !swal.isLoading()
        }).then(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/submitComplaint",
                data: {
                    _conductedDate: _conductedDate,
                    _conductedTime: _conductedTime,
                    _txtComplainant: _txtComplainant,
                    _txtComplainantAddress: _txtComplainantAddress,
                    _txtRespondent: _txtRespondent,
                    _txtRespondentAddress: _txtRespondentAddress,
                    _txtBrgyCase: _txtBrgyCase,
                    _txtNatureCase: _txtNatureCase,
                    _txtDisposition1: _txtDisposition1,
                    _txtDisposition2: _txtDisposition2,
                    _txtDisposition3: _txtDisposition3,
                    _check1stComplainant: _check1stComplainant,
                    _check1stRespondent: _check1stRespondent,
                    _check2ndComplainant: _check2ndComplainant,
                    _check2ndRespondent: _check2ndRespondent,
                    _check3rdComplainant: _check3rdComplainant,
                    _check3rdRespondent: _check3rdRespondent,
                    _checkAmicable: _checkAmicable,
                    _checkICTFA: _checkICTFA,
                    _checkDLM: _checkDLM,
                    _checkLI: _checkLI,
                    _checkRefferedTo: _checkRefferedTo,
                    _txtReffered1: _txtReffered1,
                    _txtReffered2: _txtReffered2,
                    _txtSalaysay: _txtSalaysay,
                    _txtSummon1: _txtSummon1,
                    _txtSummon2: _txtSummon2,
                    _txtSummon3: _txtSummon3,
                    _txtLagda: _txtLagda,
                    _txtDutyOfficer: _txtDutyOfficer,
                    _txtSworn: _txtSworn,
                    _txtAffliant: _txtAffliant
                },
                async: false,
                success: function (data) {
                    swal.fire(
                        'Successfully Saved',
                        'Complaint has been registered',
                        'success'
                    )
                    clearDetails();
                    location.reload();
                },
                error: function (e, t, m) {
                    swal.fire(
                        'Error in Saving',
                        m,
                        'error'
                    )
                }
            });
        }).catch(error => {
            swal.fire(
                'Error in Saving',
                `Request failed: ${error}`,
                'error'
            )

        });

    } else {
        swal.fire(
            'Saving Failed',
            _message,
            'error'
        )
    }
}

function clearDetails() {
    $('#conductedDate').val('');
    $('#conductedTime').val('');
    $('#txtComplainant').val();
    $('#txtComplainantAddress').val('');
    $('#txtRespondent').val('');
    $('#txtRespondentAddress').val('');
    $('#txtBrgyCase').val('');
    $('#txtNatureCase').val('');
    $('#txtDisposition1').val('');
    $('#txtDisposition2').val('');
    $('#txtDisposition3').val('');
    $('#check1stComplainant').val('');
    $('#check1stRespondent').val('');
    $('#check2ndComplainant').val('');
    $('#check2ndRespondent').val('');
    $('#check3rdComplainant').val('');
    $('#check3rdRespondent').val('');
    $('#checkAmicable').val('');
    $('#checkICTFA').val('');
    $('#checkDLM').val('');
    $('#checkLI').val('');
    $('#checkRefferedTo').val('');
    $('#txtReffered1').val('');
    $('#txtReffered2').val('');
    $('#txtSalaysay').val('');
    $('#txtSummon1').val('');
    $('#txtSummon2').val('');
    $('#txtSummon3').val('');
    $('#txtLagda').val('');
    $('#txtDutyOfficer').val('');
    $('#txtSworn').val('');
    $('#txtAffliant').val('');

}

//For Registration of Constituents
function registerConstituents() {

    var isCheckedReg = $('#isUserConstituent').prop('checked');

    if (isCheckedReg) {
        var txtusername = $('#username').val();
        var txtemail = $('#txtemail').val();
        var txtpassword = $('#txtemail').val();
        var txtposition = $('#txtposition').val();
        var txtfirstName = $('#txtfirstName').val();
        var txtmiddleName = $('#txtmiddleName').val();
        var txtlastName = $('#txtlastName').val();
        var txtgender = $('#txtgender').val();
        var txtbirthdate = $('#txtbirthdate').val();
        var txttempAddress = $('#txttempAddress').val();
        var txtpermAddress = $('#txtpermAddress').val();
        var txtoccupation = $('#txtoccupation').val();

        //start
        swal.fire({
            title: 'Are you sure you want to save this information?',
            showCancelButton: true,
            confirmButtonText: 'Yes, save information',
            allowOutsideClick: () => !swal.isLoading()
        }).then(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/registerConstituentOfficials",
                data: {
                    _txtusername: txtusername,
                    _txtemail: txtemail,
                    _txtpassword: txtpassword,
                    _txtposition: txtposition,
                    _txtfirstName: txtfirstName,
                    _txtmiddleName: txtmiddleName,
                    _txtlastName: txtlastName,
                    _txtgender: txtgender,
                    _txtbirthdate: txtbirthdate,
                    _txttempAddress: txttempAddress,
                    _txtpermAddress: txtpermAddress,
                    _txtoccupation: txtoccupation
                },
                async: false,
                success: function (data) {
                    swal.fire(
                        'Successfully Saved',
                        data,
                        'success'
                    )
                    clearDetails();
                    location.reload();
                },
                error: function (e, t, m) {
                    swal.fire(
                        'Error in Saving',
                        m,
                        'error'
                    )
                }
            });
        }).catch(error => {
            swal.fire(
                'Error in Saving',
                `Request failed: ${error}`,
                'error'
            )

        });
        //end

    } else {
        var txtfirstName = $('#txtfirstName').val();
        var txtmiddleName = $('#txtmiddleName').val();
        var txtlastName = $('#txtlastName').val();
        var txtgender = $('#txtgender').val();
        var txtbirthdate = $('#txtbirthdate').val();
        var txttempAddress = $('#txttempAddress').val();
        var txtpermAddress = $('#txtpermAddress').val();
        var txtoccupation = $('#txtoccupation').val();

        //start
        swal.fire({
            title: 'Are you sure you want to save this information?',
            showCancelButton: true,
            confirmButtonText: 'Yes, save information',
            allowOutsideClick: () => !swal.isLoading()
        }).then(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/registerConstituents",
                data: {
                    _txtfirstName: txtfirstName,
                    _txtmiddleName: txtmiddleName,
                    _txtlastName: txtlastName,
                    _txtgender: txtgender,
                    _txtbirthdate: txtbirthdate,
                    _txttempAddress: txttempAddress,
                    _txtpermAddress: txtpermAddress,
                    _txtoccupation: txtoccupation
                },
                async: false,
                success: function (data) {
                    swal.fire(
                        'Successfully Saved',
                        data,
                        'success'
                    )
                    clearDetails();
                    location.reload();
                },
                error: function (e, t, m) {
                    swal.fire(
                        'Error in Saving',
                        m,
                        'error'
                    )
                }
            });
        }).catch(error => {
            swal.fire(
                'Error in Saving',
                `Request failed: ${error}`,
                'error'
            )

        });
        //end
    }


}

function saveConstituentDetails() {

    if (_success) {
        swal.fire({
            title: 'Are you sure you want to save this information?',
            showCancelButton: true,
            confirmButtonText: 'Yes, save information',
            allowOutsideClick: () => !swal.isLoading()
        }).then(function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/submitComplaint",
                data: {
                    _conductedDate: _conductedDate,
                    _conductedTime: _conductedTime,
                    _txtComplainant: _txtComplainant,
                    _txtComplainantAddress: _txtComplainantAddress,
                    _txtRespondent: _txtRespondent,
                    _txtRespondentAddress: _txtRespondentAddress,
                    _txtBrgyCase: _txtBrgyCase,
                    _txtNatureCase: _txtNatureCase

                },
                async: false,
                success: function (data) {
                    swal.fire(
                        'Successfully Saved',
                        data,
                        'success'
                    )
                    clearDetails();
                    location.reload();
                },
                error: function (e, t, m) {
                    swal.fire(
                        'Error in Saving',
                        m,
                        'error'
                    )
                }
            });
        }).catch(error => {
            swal.fire(
                'Error in Saving',
                `Request failed: ${error}`,
                'error'
            )

        });

    } else {
        swal.fire(
            'Saving Failed',
            _message,
            'error'
        )
    }
}