$(function(){
    $('#orderButton').click(function()
    {
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    })
})

/**
 * Created by dydluk on 11.11.15.
 */
