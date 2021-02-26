$(document).ready(function() {

    $(".edit").click(function(e) {

        e.preventDefault();

        console.log($(this).parent().siblings());

        $(this).parent().attr('id', 'actions');

        $(this).parent().siblings().addClass('editable');



        var id = $(this).attr("val");

        var link = $(this).attr("link");



        $(".editable").each(function(index, element) {



            if ($(this).hasClass("selectable")) {

                var selection = $("#selection").html();

                $(this).html(selection);

            } else if ($(this).hasClass("state")) {

                var states = "<select class='form-control fillable'><option value='1'>Deplacable</option><option value='0'>Statique</option></select>";

                $(this).html(states);

            } else {

                var val = $.trim($(this).text());

                $(this).html("<input type='text' class='form-control fillable' value='" + val + "' id='field" + index + "'>");

            }



        });

        var itemArray = [];





        $(this).hide();

        $("#delete").hide();

        $('#actions').html('<a id="save"></a>');

        $("#save").addClass('btn btn-outline-info btn-sm m-0 waves-effect');

        $("#save").html('<i class="fa fa-check" aria-hidden="true"></i>');



        $('#save').click(function(e) {

            e.preventDefault();

            var fields = [];

            var reponse = {};



            $(".form-control").each(function(index, element) {

                fields.push($(this).val());

            });



            var errors = 0;

            $(".fillable").each(function(index, element) {

                if ($(this).val() == "") {

                    $(this).addClass("is-invalid");

                    errors++;

                } else fields.push($(this).val());

            });



            if (errors > 0) {

                toastr.warning("Veuillez completer tous les champs", 'Erreur', { "progressBar": true });

                fields = [];

            } else {

                $.post(link, {

                        id: id,

                        action: 'modifier',

                        champs: fields

                    },

                    function(data, textStatus, jqXHR) {

                        if (jqXHR.done()) {

                            if (data === "ok") {

                                toastr.success('Element modifié avec succè!', 'Succès', { "progressBar": true });

                                setTimeout(() => {

                                    location.reload(true);

                                }, 1500);

                            } else toastr.warning('Echec veuillez réesayer', 'Succès', { "progressBar": true });

                        } else toastr.warning(textStatus, 'Erreur', { "progressBar": true });



                    }

                );

            }

            console.info(fields);

        });

        return false;

    });

});





$(document).ready(function() {

    $("form").submit(function(e) {

        e.preventDefault();

        $('.champ + label +div').text('');

        $('.champ').removeClass('is-invalid');

        var fields = [];

        var errors = 0;

        $(".champ").each(function(index, element) {

            if ($(this).val() == "") {

                $(this).addClass("is-invalid");

                $(this).next().append("<div class='invalid-feedback'>Ce champ est requis</div>");

                errors++;

            } else fields.push($(this).val());

        });



        if (errors > 0) {


            Snackbar.show({
                text: 'Veuillez completer tous les champs',
                actionTextColor: '#fff',
                backgroundColor: '#e2a03f'
            });

            fields = [];

        } else {

            var fd = new FormData();

            console.log(fd);

            $.ajax({

                type: $(this).attr('method'),

                url: $(this).attr('action'),

                data: new FormData(this),

                contentType: false,

                cache: false,

                processData: false,

                beforeSend: function() {

                    $('button[type=submit]').attr('disabled', 'disabled').html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>Loading...");

                },

                success: function(response) {

                    if (response.status === "success") {
                        swal({
                            title: 'Good job!',
                            text: "You clicked the!",
                            type: 'success',
                            padding: '2em'
                        });

                        location.href = "../" + response.back;
                    }

                },

                error: function(data) {

                    $.each(data.responseJSON.errors, function(key, value) {

                        var input = 'form .champ[name=' + key + ']';

                        $(input).addClass('is-invalid');

                        $(input + " + label + div").html(value[0]);

                        $('div.carde').unblock();

                    });

                }

            });

        }

    });

});