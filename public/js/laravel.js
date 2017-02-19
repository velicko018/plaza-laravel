(function () {
    var laravel = {
        initialize: function () {
            this.methodLinks = $('a[data-method]');

            this.registerEvents();
        },
        registerEvents: function () {
            this.methodLinks.on('click', this.handleMethod);
        },

        handleMethod: function (e) {
            e.preventDefault();

            var link       = $(this);
            var httpMethod = link.data('method').toUpperCase();
            var target     = link.data('parent');
            var url        = link.data('href');
            var name       = link.data('name');

            // If the data-method attribute is not PUT or DELETE,
            // Just ignore.
            if ($.inArray(httpMethod, ['PUT', 'DELETE']) === -1) {
                return;
            }

            //If the data-confirm is set to true,
            //give the user a last chance confirmation modal.
            if (link.data('confirm')) {
                laravel.verifyConfirm(name, function (result) {
                    if (result) {
                        laravel.deleteRecord(url, target);

                        return;
                    }
                    console.log('Deletion cancelled');
                });
            }
            // Else Proceed with deletion.
            else {
                laravel.deleteRecord(url, target);
            }
        },
        verifyConfirm: function (name, callback) {
            $('#confirmDelete').on('show.bs.modal', function (event) {
                var modal = $(this);
                modal.find('#modalMessage').text('Are you sure you want to delete the ' + name + '?');
            }).modal('show');

            $('#closeButton').off().on('click', function () {
                $('#confirmDelete').modal('hide');
                if (callback) callback(false);
            });
            $('#confirmFalse').off().on('click', function () {
                $('#confirmDelete').modal('hide');
                if (callback) callback(false);
            });
            $('#confirmTrue').off().on('click', function () {
                $('#confirmDelete').modal('hide');
                if (callback) callback(true);
            });
        },
        deleteRecord: function (url, target) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                type: 'DELETE',
                success: function (result) {
                    console.log(result);
                    $(target).remove();
                },
                error: function (result) {
                    var message = "Error code: " + result.status + " " + result.responseText;
                    console.log(message);
                }
            });
        }
    };
    laravel.initialize();
})();