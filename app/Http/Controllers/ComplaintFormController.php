<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;

class ComplaintFormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showComplaint() {
        $complaints = Complaint::all();
        return $complaints;
    }

    public function saveComplaint(Request $request)
    {
      
        $complaint = new Complaint();

        $complaint->case_date_filed = $request->_conductedDate;
        $complaint->case_time = $request->_conductedTime;
        $complaint->case_no = $request->_txtBrgyCase;
        $complaint->case_nature = $request->_txtNatureCase;
        $complaint->case_complainant = $request->_txtComplainant;
        $complaint->case_complainant_address = $request->_txtComplainantAddress;
        $complaint->case_respondent = $request->_txtRespondent;
        $complaint->case_respondent_address = $request->_txtRespondentAddress;
        $complaint->case_dispo_one = $request->_txtDisposition1;
        $complaint->case_dispo_two = $request->_txtDisposition2;
        $complaint->case_dispo_three = $request->_txtDisposition3;
        $complaint->attendance_comp_one = $request->_check1stComplainant;
        $complaint->attendance_comp_two = $request->_check2ndComplainant;
        $complaint->attendance_comp_three = $request->_check3rdComplainant;
        $complaint->attendance_resp_one = $request->_check1stRespondent;
        $complaint->attendance_resp_two = $request->_check2ndRespondent;
        $complaint->attendance_resp_three = $request->_check3rdRespondent;
        $complaint->amicably_settled = $request->_checkAmicable;
        $complaint->certificate_to_file_action = $request->_checkICTFA;
        $complaint->lack_of_ment = $request->_checkDLM;
        $complaint->lack_of_interest = $request->_checkLI;
        $complaint->case_referred_to_first = $request->_txtReffered1;
        $complaint->case_referred_to_second = $request->_txtReffered2;
        $complaint->case_description = $request->_txtSalaysay;
        $complaint->first_action_remarks = $request->_txtSummon1;
        $complaint->second_action_remarks = $request->_txtSummon2;
        $complaint->third_action_remarks = $request->_txtSummon3;
		$complaint->assisted_by = $request->_txtLagda;
        $complaint->sworn_date = $request->_txtSworn;
        $complaint->day_of = $request->_txtAffliant;
        $complaint->duty_officer = $request->_txtDutyOfficer;

        $complaint->save();

        return response()->json("Saving of Complaint is succesful",200);
    }


}
