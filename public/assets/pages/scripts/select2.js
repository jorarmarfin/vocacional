$(document).ready(function() {

    $("#idubigeonacimiento").select2({
        allowClear: true,
        ajax: {
            url: '{{ url("applicants/ubigeo") }}',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    varsearch: params.term // search term
                };
            },
            processResults: function(data) {
                // parse the results into the format expected by Select2.
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder : 'Seleccione el distrito de nacimiento',
        minimumInputLength: 3,
        templateResult: format,
        templateSelection: format,
        escapeMarkup: function(markup) {
            return markup;
        } // let our custom formatter work
    });
    function format(res){
        var markup=res.text;
        return markup;

    }
    $("#idcolegio").select2({
        allowClear: true,
        ajax: {
            url: '{{ url("applicants/colegio") }}',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    varschool: params.term // search term
                };
            },
            processResults: function(data) {
                // parse the results into the format expected by Select2.
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data
                return {
                    results: data
                };
            },
            cache: true
        },
        placeholder : 'Seleccione su colegio',
        minimumInputLength: 3,
        templateResult: formatSchool,
        templateSelection: formatSchoolSelection,
        escapeMarkup: function(markup) {
            return markup;
        } // let our custom formatter work
    });
    function formatSchool(school){
        if (school.loading) return school.text; //Sin esta columna no carga los items dentro de los campo array

        var markup="<div class='select2-result-repository clearfix'>" +
        "<div class='select2-result-repository__title'>" + school.text + "</div>" +
        "<div class='select2-result-repository__description'>" + school.gestion.nombre + "</div>" +
        "<div class='select2-result-repository__description'>" + school.ubigeo.descripcion + "</div>" +
        "<div class='select2-result-repository__statistics'>" +
        "<div class='select2-result-repository__forks'>" + school.direccion + "</div>"
        "</div>"+
        "</div>";
        return markup;

    }
    function formatSchoolSelection(school){
        var markup =  school.text;
        return markup;
    }
    $("#idsede").select2();

});