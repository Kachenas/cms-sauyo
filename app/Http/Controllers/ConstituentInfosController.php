<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConstituentInfo;

class ConstituentInfosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveOfficials(Request $request)
    {

        $constituent = new ConstituentInfo();
        
        $constituent->username = $request->_txtusername;
        $constituent->email = $request->_txtemail;
        $constituent->password = $request->_txtpassword;
        $constituent->first_name = $request->_txtfirstName;
        $constituent->middle_name = $request->_txtmiddleName;
        $constituent->last_name = $request->_txtlastName;
        $constituent->gender = $request->_txtgender;
        $constituent->birthdate = $request->_txtbirthdate;
        $constituent->temp_address = $request->_txttempAddress;
        $constituent->curr_address = $request->_txtpermAddress;
        $constituent->position = $request->_txtposition;
        $constituent->occupation = $request->_txtoccupation;
       
        $constituent->save();

         return response()->json("Saving of Public Official is successful ",200);

    }
    
    public function saveConstituents(Request $request)
    {
        $constituent = new ConstituentInfo();
    
        $constituent->first_name = $request->_txtfirstName;
        $constituent->middle_name = $request->_txtmiddleName;
        $constituent->last_name = $request->_txtlastName;
        $constituent->gender = $request->_txtgender;
        $constituent->birthdate = $request->_txtbirthdate;
        $constituent->temp_address = $request->_txttempAddress;
        $constituent->curr_address = $request->_txtpermAddress;
        $constituent->occupation = $request->_txtoccupation;

    
        $constituent->save();

        return response()->json(" Saving of constituent is Succesful ",200);
    
    }
}
