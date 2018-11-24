
$(document).ready(function () {

    // Seleciona opcion Actual UpdateExperiencia
    $select = $('#actual').val();
    if($select == 1){
        $('#a_fin').attr('disabled', true).val(null);
    }

    $(document).on('change','#actual', function(event){
        $select = $(this).val();
        if($select == 1){
            $('#a_fin').attr('disabled', true).val(null);
        }else{
            $('#a_fin').attr('disabled', false).val(null);
        }
    });


});










