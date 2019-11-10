<div class="row-container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-4">
                <div class="d-flex justify-content-center">
                    <img src=" {{ asset('images/circle.png') }}" alt="Sauyo Image" class="img-responsive" style="width: 150px;height: 150px">
                </div>
            </div>
            <div class="col-4">
                <div class="header" style="text-align:center;">
                    <h4>Republika ng Pilipinas</h4>
                    <p>TANGGAPAN NG PUNONG BARANGAY</p>
                    <h5>BARANGAY SAUYO</h5>
                    <p>District 6, Sauyo Quezon City</p>
                    <p>Tel# 985-31-29 * 983-04-42</p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-center">
                    <img src=" {{ asset('images/triangle.jpg') }}" alt="Sauyo Image" class="img-responsive" style="width: 150px;height: 150px">
                </div>
            </div>
        </div>

        <div id="detailsInput" class="row-container">

            <form>
                {{csrf_field()}}
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" class="form-control" id="conductedDate" name="conductedDate" mandatory="true" fieldname="Date">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="conductedTime">Time:</label>
                                    <input type="text" class="form-control timepicker" id="conductedTime" name="conductedTime" mandatory="true" fieldname="Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="complainant">Complainant</label>
                            <input type="text" class="form-control" id="txtComplainant" mandatory="true" fieldname="Complainant">
                        </div>
                        <div class="form-group">
                            <label for="complainantAddress">Address</label>
                            <input type="text" class="form-control" id="txtComplainantAddress" mandatory="true" fieldname="Complainant Address">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="respondentAddress">Respondent</label>
                            <input type="text" class="form-control" id="txtRespondent" name="txtRespondent" mandatory="true" fieldname="Respondent">
                        </div>
                        <div class="form-group">
                            <label for="respondentAddress">Address</label>
                            <input type="text" class="form-control" id="txtRespondentAddress" name="txtRespondentAddress" mandatory="true" fieldname="Respondent Address">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="brgyCaseNo">Brgy. Case No:</label>
                                    <input type="text" class="form-control" id="txtBrgyCase" name="txtBrgyCase" mandatory="true" fieldname="Brgy. Case">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="natureCase">Nature of Case:</label>
                                    <input type="text" class="form-control" id="txtNatureCase" name="txtNatureCase" mandatory="true" fieldname="Nature of Case">
                                </div>
                            </div>
                        </div>
                        <p>Disposition of the Case:</p>
                        <div class="row">
                            <div class="col-3">1st hearing</div>
                            <div class="col-9"><input type="text" class="form-control" id="txtDisposition1" name="txtDisposition1"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">2nd hearing</div>
                            <div class="col-9"><input type="text" class="form-control" id="txtDisposition2" name="txtDisposition2"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">3rd hearing</div>
                            <div class="col-9"><input type="text" class="form-control" id="txtDisposition3" name="txtDisposition3"></div>
                        </div>
                        <hr>
                        <p>Attendance:</p>
                        <div class="row">
                            <div class="col-4">1st hearing</div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check1stComplainant">
                                    <label class="custom-control-label" for="check1stComplainant">Complainant</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check1stRespondent">
                                    <label class="custom-control-label" for="check1stRespondent">Respondent</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">2nd hearing</div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check2ndComplainant">
                                    <label class="custom-control-label" for="check2ndComplainant">Complainant</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check2ndRespondent">
                                    <label class="custom-control-label" for="check2ndRespondent">Respondent</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">3rd hearing</div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check3rdComplainant">
                                    <label class="custom-control-label" for="check3rdComplainant">Complainant</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check3rdRespondent">
                                    <label class="custom-control-label" for="check3rdRespondent">Respondent</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkAmicable">
                                <label class="custom-control-label" for="checkAmicable">Amicably Settled</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkICTFA">
                                <label class="custom-control-label" for="checkICTFA">Issued Certification to File Action</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkDLM">
                                <label class="custom-control-label" for="checkDLM">Dismmised for lack of Ment</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkLI">
                                <label class="custom-control-label" for="checkLI">Dismmised for lack of Interest</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkRefferedTo">
                                    <label class="custom-control-label" for="checkRefferedTo">Reffered to</label>
                                </div>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="txtReffered1" name="txtReffered1">
                                <input type="text" class="form-control" id="txtReffered2" name="txtReffered2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading ">
                                <h5><b>Salaysay:</b></h5>
                            </div>
                            <div class="panel-body">
                                <p>AKO/KAMI sa pamamagitan nito, ay naghahain ng sumbong laban sa ipinagsumbong, binanggit sa itaas, dahil sa paglabag sa aking/aming karapatan at kapakanan sa sumusunod na paraan:</p>
                                <div>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" rows="5" id="txtSalaysay" name="txtSalaysay" mandatory="true" fieldname="Salaysay"></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <p>
                    Dahil dito, AKO/KAMI ay namamanhik na ipagkaloob sa akin/namin ang kalunasan na alinsunod sa batas at/o pagmakatuwiran.
                </p>
                <br>
                <h4><u><b>ACTION RECOMMENDED</b></u></h4>
                <br>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">REMARKS</div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-3">1st Summon</div>
                            <div class="col-9"><input type="text" class="form-control" id="txtSummon1" name="txtSummon1"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">2nd Summon</div>
                            <div class="col-9"><input type="text" class="form-control" id="txtSummon2" name="txtSummon2"></div>
                        </div>
                        <div class="row">
                            <div class="col-3">3rd Summon</div>
                            <div class="col-9"><input type="text" class="form-control" id="txtSummon3" name="txtSummon3"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-3">Lagda</div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txtLagda" name="txtLagda" mandatory="true" fieldname="Lagda">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">Duty Officer</div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="txtDutyOfficer" name="txtDutyOfficer" mandatory="true" fieldname="Duty Officer">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2"><label for="sworn">Sworn to me this</label></div>
                    <div class="col-3"><input type="text" class="form-control" id="txtSworn" name="txtSworn" mandatory="true" fieldname="Sworn Date"></div>
                    <div class="col-1"><label for="txtAffliant">day of</label></div>
                    <div class="col-3"><input type="text" class="form-control" id="txtAffliant" name="txtAffliant" mandatory="true" fieldname="Affliant"></div>
                    <div class="col-2"><label for="affliant1">by Affliant</label></div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" onclick="getDetails();">Submit</button>
                </div>
            </form>
        </div> <!-- Jumbotron -->
    </div> <!-- container -->
</div>