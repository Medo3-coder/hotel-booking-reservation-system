{{-- <script>
    $(document).ready(function() {
        $(document).on('submit', '.store', function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var formData = new FormData(form[0]);

            var submitButton = form.find(".submit_button");
            var errorContainer = form.find(".error");
            var inputElements = form.find('input, textarea, select');

            submitButton.html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                    )
                .prop('disabled', true);

            $.ajax({
                url: url,
                method: 'post',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function() {
                    errorContainer.empty();
                    inputElements.removeClass('border-danger');
                },
                success: function(response) {
                    if (response.status !== 'success') {
                        showErrorAlert(response.message);
                    } else {
                        submitButton.html("{{ __('admin.add') }}").prop('disabled', false);
                        showSuccessAlert(response.message);
                        setTimeout(function() {
                            window.location.replace(response.url);
                        }, 2000);
                    }
                },
                error: function(xhr) {
                    submitButton.html("{{ __('admin.add') }}").prop('disabled', false);
                    errorContainer.empty();
                    inputElements.removeClass('border-danger');

                    $.each(xhr.responseJSON.errors, function(key, value) {
                        var input = form.find(`[name^="${key}"]`);
                        var errorElement = $(
                            '<span class="mt-5 text-danger"></span>').text(
                            value);

                        errorContainer.append(errorElement);
                        input.addClass('border-danger').after(errorElement.clone());
                    });
                },
            });
        });

        function showErrorAlert(message) {
            Swal.fire({
                position: 'top-start',
                type: 'error',
                title: 'Error',
                text: message,
                showConfirmButton: false,
                timer: 1500,
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }

        function showSuccessAlert(message) {
            Swal.fire({
                position: 'top-start',
                type: 'success',
                title: 'Success',
                text: message,
                showConfirmButton: false,
                timer: 1500,
                confirmButtonClass: 'btn btn-primary',
                buttonsStyling: false,
            });
        }
    });
</script> --}}
