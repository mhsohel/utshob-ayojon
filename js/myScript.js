$(function () {
    $("#accordion > li > div").click(function () {

        if (false == $(this).next().is(':visible')) {
            $('#accordion ul').slideUp(300);
        }
        $(this).next().slideToggle(300);
    });
})
$(document).ready(function () {
    $('.example').DataTable({
        responsive: true
    });

        $('#add_new_account').click(function () {
            var name = $('#name').val();
            var username = $('#username').val();
            var n_id = $('#n_id').val();
            var date = $('#date').val();
            var password = $('#password').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var type = $('#type').val();
            if (name == '') {
                $('#name_warning').html('Mandatry Field !');
            }
            if (username == '') {
                $('#username_warning').html('Mandatry Field !');
            }
            if (n_id == '') {
                $('#n_id_warning').html('Mandatry Field !');
            }
            if (date == '') {
                $('#date_warning').html('Mandatry Field !');
            }
            if (password == '') {
                $('#password_warning').html('Mandatry Field !');
            }
            if (email == '') {
                $('#email_warning').html('Mandatry Field !');
            }
            if (phone == '') {
                $('#phone_warning').html('Mandatry Field !');
            }
            if (type == '') {
                $('#type_warning').html('Mandatry Field !');
            }
        })
    
    $('#add_staff').click(function () {
        var name = $('#name').val();
        var f_name = $('#f_name').val();
        var designation = $('#designation').val();
        var division = $('#division').val();
        var address = $('#address').val();
        var phone = $('#phone').val();
        var n_id = $('#n_id').val();
        var date = $('#date').val();
        var email = $('#email').val();
        if (name == '') {
            $('#name_warning').html('Mandatory Field !');
        }
        if (f_name == '') {
            $('#f_name_warning').html('Mandatory Field !');
        }
        if (designation == '') {
            $('#designation_warning').html('Mandatory Field !');
        }
        if (division == '') {
            $('#division_warning').html('Mandatory Field !');
        }
        if (address == '') {
            $('#address_warning').html('Mandatory Field !');
        }
        if (phone == '') {
            $('#phone_warning').html('Mandatory Field !');
        }
        if (n_id == '') {
            $('#n_id_warning').html('Mandatory Field !');
        }
        if (date == '') {
            $('#date_warning').html('Mandatory Field !');
        }
        if (email == '') {
            $('#email_warning').html('Mandatory Field !');
        }
    })

    $('#submit_salary').click(function () {
        var name = $('#name').val();
        var date = $('#date').val();
        var salary = $('#salary').val();
        if (date == '') {
            $('#end_date_warning').html('You must fill this field');
        }
        if (name == '') {
            $('#name_warning').html('You must fill this field');
        }
        if (salary == '') {
            $('#salary_warning').html('You must fill this field');
        }
    })

    $('#add_new_product').click(function () {
        var name = $('#name').val();
        var code = $('#code').val();
        if (code == '') {
            $('#code_warning').html('You must fill this field');
        }
        if (name == '') {
            $('#name_warning').html('You must fill this field');
        }

    })

    $('#addmore').click(function () {
        $('#table').append('<tr>'
                + '<td><input type="text" class="form-control" placeholder="Product Name"></td>'
                + '<td><input type="text" class="form-control" placeholder="Unit Price"></td>'
                + '<td><input type="text" class="form-control" placeholder="Quantity"></td>'
                + '<td><input type="text" class="form-control" placeholder="Price"></td>'
                + '</tr>')
    })
    $('#add_new_stock_in').click(function () {
        var name = $('#name').val();
        var shop = $('#shop').val();
        var date = $('#date').val();
        var invoice_id = $('#invoice_id').val();
        var type = $('#type').val();
        if (name == '') {
            $('#name_warning').html('Mandatory Field !');
        }
        if (shop == '') {
            $('#shop_warning').html('Mandatory Field !');
        }
        if (date == '') {
            $('#date_warning').html('Mandatory Field !');
        }
        if (invoice_id == '') {
            $('#invoice_id_warning').html('Mandatory Field !');
        }
        if (type == '') {
            $('#type_warning').html('Mandatory Field !');
        }
    })
    $('#addmore_stock_out').click(function () {
        $('#table').append('<tr>'
                + '<td><select class="form-control">'
                + '<option value="">Select Product</option>'
                + '<option value="fried_rice">Fried Rice</option>'
                + '<option value="chiken">Chicken</option>'
                + '</select></td>'
                + '<td><input type="text" class="form-control" placeholder="Quantity"></td>'
                + '</tr>')
    })
    $('#add_new_stock_out').click(function () {
        var name = $('#name').val();
        var date = $('#date').val();
        if (name == '') {
            $('#name_warning').html('Mandatory Field !');
        }
        if (date == '') {
            $('#date_warning').html('Mandatory Field !');
        }
    })
    $('#addmore_stock_out_up').click(function () {
        $('#table2').append('<tr>'
                + '<td><select class="form-control">'
                + '<option value="">Select Product</option>'
                + '<option value="fried_rice">Fried Rice</option>'
                + '<option value="chiken">Chicken</option>'
                + '</select></td>'
                + '<td><input type="text" class="form-control" placeholder="Quantity"></td>'
                + '</tr>')
    })
    $('#date').datepicker({
        changeYear:true,
        changeMonth:true
    });

})
