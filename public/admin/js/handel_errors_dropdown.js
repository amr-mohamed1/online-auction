

    // ====== click on supmet ======
    $(document).on('click','#submit_btn',function(e) {
        var city_id = $('#city_id').val();
        var area_id = $('#area_id').val();
        var university_id = $('#university_id').val();
        var college_id = $('#college_id').val();
        var specialist_id = $('#specialist_id').val();

        if(jQuery.inArray('all', city_id) == 0 && city_id.length > 1){
            e.preventDefault();
            Swal.fire({
                title: mulitble_select_error,
                text: mulitble_cities_error,
                icon: 'error',
            })
        }

        if(jQuery.inArray('all', area_id) == 0 && area_id.length > 1){
            e.preventDefault();
            Swal.fire({
                title: mulitble_select_error,
                text: mulitble_areas_error,
                icon: 'error',
            })
        }

        if(jQuery.inArray('all', university_id) == 0 && university_id.length > 1){
            e.preventDefault();
            Swal.fire({
                title: mulitble_select_error,
                text: mulitble_universities_error,
                icon: 'error',
            })
        }

        if(jQuery.inArray('all', college_id) == 0 && college_id.length > 1){
            e.preventDefault();
            Swal.fire({
                title: mulitble_select_error,
                text: mulitble_colleges_error,
                icon: 'error',
            })
        }

        if(jQuery.inArray('all', specialist_id) == 0 && specialist_id.length > 1){
            e.preventDefault();
            Swal.fire({
                title: mulitble_select_error,
                text: mulitble_specialists_error,
                icon: 'error',
            })
        }
        

    });