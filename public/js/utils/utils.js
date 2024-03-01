const estilosValidate = {
    errorElement: 'span',
    errorPlacement: (error, element) => {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
        highlight: (element) => {
        $(element).addClass('is-invalid').removeClass('is-valid');
    },
        unhighlight: (element) => {
        $(element).removeClass('is-invalid').addClass('is-valid');
    }
}
