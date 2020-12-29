// Call the dataTables jQuery plugin
$(document).ready(function() {
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "sProcessing": "กำลังดำเนินการ...",
            "sLengthMenu": "แสดง_MENU_ แถว",
            "sZeroRecords": "ไม่พบข้อมูล",
            "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
            "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
            "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
            "sInfoPostFix": "",
            "sSearch": "ค้นหา:",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "เิริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }
        }
    });

    $('#dataTable').DataTable({
        "order": [
            [0, "DESC"]
        ],
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]

    });

    $('#dataTable_news').DataTable({
        "order": [
            [1, "desc"]
        ]
    });

    $('#dataTable_aboutschool').DataTable({
        "order": [
            [1, "desc"]
        ]
    });

    $('.dataTable_personnel').DataTable({
        "order": [
            [0, "asc"]
        ]
    });


    $('.show_announce').DataTable({
        autoWidth: false,
        "columnDefs": [{
                "targets": 0,
                "width": "50px"
            },
            {
                "targets": 1,
                "padding-right": "160px"
            }
        ],
        "order": [
            [0, "asc"]
        ]
    });


    $('.tb_from').DataTable();

    $('#dataTable_facebook').DataTable();


});

$(document).on('change', '.pers_numberGroup,.pers_id', function() {

    $.ajax({
        type: "post",
        url: "../admin/control_admin_personnel/ChangeNumber_personnel",
        data: { pers_numberGroup: $(this).val(), pers_id: $(this).attr('pers_id') },
        cache: false,
        success: function(response) {
            //console.log(response);
            if (response == 1) {
                alertify.success('เปลี่ยนลำดับสำเร็จ');
            } else {
                alertify.error('เปลี่ยนลำดับผิดพลาด');
            }

        }
    });
});

$(document).on('keyup', '#pers_lastname', function() {

    $.ajax({
        type: "post",
        url: "../../admin/control_admin_personnel/CheckName_personnel",
        data: { pers_firstname: $("#pers_firstname").val(), pers_lastname: $("#pers_lastname").val() },
        cache: false,
        success: function(response) {
            console.log(response);
            if (response == 1) {
                swal("แจ้งเตือน!", "ข้อมูลผู้ใช้งานมีในระบบแล้ว", "error");
                $("#pers_firstname").val('');
                $("#pers_firstname").focus();
                $("#pers_lastname").val('');
            } else {

            }

        }
    });
});