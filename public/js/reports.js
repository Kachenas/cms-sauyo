$(document).ready(function () {

    $('#complaintTable').DataTable({
        destroy: true,
        searching: true,
        paging: true,
        info: true,
        scrollX: true,
        ajax: {
            url: "/showComplaintsSummary",
            dataSrc: ""
        },
        columnDefs: [
            // {
            //     targets: [0,1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,24,27,29,30,32,33,34,35,36,37],
            //     className: "hideObj",
            //     searchable: false
            // },
            {
                targets: [0],
                data: "amicably_settled",
                //visible: false,
                render: function (data, type, full, meta) {
                    //return data.amicably_settled;
                    return data;
                }
            },
            {
                targets: [1],
                data: "assisted_by",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.assisted_by;
                   return data;
                }
            },
            {
                targets: [2],
                data: "attendance_comp_one",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.attendance_comp_one;
                   return data;
                }
            },
            {
                targets: [3],
                data: "attendance_comp_three",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.attendance_comp_three;
                   return data;
                }
            },
            {
                targets: [4],
                data: "attendance_comp_two",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.attendance_comp_two;
                   return data;
                }
            },
            {
                targets: [5],
                data: "attendance_resp_one",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.attendance_resp_one;
                   return data;
                }
            },
            {
                targets: [6],
                data: "attendance_resp_three",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.attendance_resp_three;
                   return data;
                }
            },
            {
                targets: [7],
                data: "attendance_resp_two",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.attendance_resp_two;
                   return data;
                }
            },
            {
                targets: [8],
                data: "brgy_captain_id",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.brgy_captain_id;
                   return data;
                }
            },
            {
                targets: [9],
                data: "case_complainant",
                render: function (data, type, full, meta) {
                   //return data.case_complainant;
                   return data;
                }
            },
            {
                targets: [10],
                data: "case_complainant_address",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_complainant_address;
                   return data;
                }
            },
            {
                targets: [11],
                data: "case_date",
                render: function (data, type, full, meta) {
                   //return data.case_date;
                   return data;
                }
            },
            {
                targets: [12],
                data: "case_date_filed",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_date_filed;
                   return data;
                }
            },
            {
                targets: [13],
                data: "case_description",
               // visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_description;
                   return data;
                }
            },
            {
                targets: [14],
                data: "case_dispo_one",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_dispo_one;
                   return data;
                }
            },
            {
                targets: [15],
                data: "case_dispo_three",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_dispo_three;
                   return data;
                }
            },
            {
                targets: [16],
                data: "case_dispo_two",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_dispo_two;
                   return data;
                }
            },
            {
                targets: [17],
                data: "case_nature",
                render: function (data, type, full, meta) {
                   //return data.case_nature;
                   return data;
                }
            },
            {
                targets: [18],
                data: "case_no",
                render: function (data, type, full, meta) {
                   //return data.case_no;
                   return data;
                }
            },
            {
                targets: [19],
                data: "case_referred_to_first",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_referred_to_first;
                   return data;
                }
            },
            {
                targets: [20],
                data: "case_referred_to_second",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_referred_to_second;
                   return data;
                }
            },
            {
                targets: [21],
                data: "case_respondent",
                render: function (data, type, full, meta) {
                   //return data.case_respondent;
                   return data;
                }
            },
            {
                targets: [22],
                data: "case_respondent_address",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_respondent_address;
                   return data;
                }
            },
            {
                targets: [23],
                data: "case_status",
                render: function (data, type, full, meta) {
                   //return data.case_status;
                   return data;
                }
            },
            {
                targets: [24],
                data: "case_time",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.case_time;
                   return data;
                }
            },
            {
                targets: [25],
                data: "certificate_to_file_action",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.certificate_to_file_action;
                   return data;
                }
            },
            {
                targets: [26],
                data: "created_at",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.created_at;
                   return data;
                }
            },
            {
                targets: [27],
                data: "day_of",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.day_of;
                   return data;
                }
            },
            {
                targets: [28],
                data: "deleted_at",
                //visible: false,
                render: function (data, type, full, meta) {
                    //return data.deleted_at;
                    return data;
                }
            },
            {
                targets: [29],
                data: "duty_officer",
                render: function (data, type, full, meta) {
                   //return data.duty_officer;
                   return data;
                }
            },
            {
                targets: [30],
                data: "first_action_remarks",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.first_action_remarks;
                   return data;
                }
            },
            {
                targets: [31],
                data: "id",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.id;
                   return data;
                }
            },
            {
                targets: [32],
                data: "lack_of_interest",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.lack_of_interest;
                   return data;
                }
            },
            {
                targets: [33],
                data: "lack_of_ment",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.lack_of_ment;
                   return data;
                }
            },
            {
                targets: [34],
                data: "second_action_remarks",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.second_action_remarks;
                   return data;
                }
            },
            {
                targets: [35],
                data: "sworn_date",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.sworn_date;
                   return data;
                }
            },
            {
                targets: [36],
                data: "third_action_remarks",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.third_action_remarks;
                   return data;
                }
            },
            {
                targets: [37],
                data: "updated_at",
                //visible: false,
                render: function (data, type, full, meta) {
                   //return data.updated_at;
                   return data;
                }
            }
            
        ]
    });

});

function pressMe() {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "GET",
        url: "/showComplaintsSummary",
        async: false,
        success: function (data) {
            console.log(typeof(data));
            console.log(data); 
        },
        error: function (e, t, m) {
            swal.fire(
                'Error in Saving',
                m,
                'error'
            )
        }
    });
}


