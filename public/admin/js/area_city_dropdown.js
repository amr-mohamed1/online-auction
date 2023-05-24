// ====== city id ======
$(document).on('change','#city_id',function() {
    var city_id = $('#city_id').val();
    $('#area_id').empty();
    if(city_id.length > 0){
        $.ajax({
            type: 'POST',
            url: get_Area_route,
            data: {
                '_token': csrf_token,
                'from' : 'add_admin',
                'city_id' : city_id
            },
            success: function(data) {
                console.log(data)
                if(data && data.length >0){
                    $('#area_id').append(' <option disabled selected value="">'+"Choose Area"+'</option>');
                    $('#area_id').empty();
                    for(var i=0;i<data.length;i++){
                        $('#area_id').append('<option value="'+ data[i]['id'] +'">'+ data[i]['name']+'</option>');
                    }
                }else{
                    $('#area_id').empty();
                    console.log('error occurred');
                }
            },
            error: function(jqXhr, textStatus, errorMessage) {

            }
        })
    }

});
