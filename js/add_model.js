function loadManufacturer() {
    $.ajax({
        'url':'view/performAction.php',
        method: "GET",
        data: {'mode':'getManufacturers'},
        success: function(data) {
            data = JSON.parse(data);
            var manufacturer = "<option value=''>Select Manufacturer</option>";
            for(i=0; i < data.length; i++) {
                manufacturer += "<option value='"+data[i].manufacturer_id+"'>"+ data[i].name +"</option>";
            }
            $('#select-manufacturer').html(manufacturer);
        }
    });
}

loadManufacturer();

function addModel() {
    
    if($('#model-name').val().trim()=="")
    {
        alert("Please enter model name.");
        $('#model-name').val("").focus();
        return false;
    }
    if($('#select-manufacturer').val().trim()=="")
    {
        alert("Please select manufacturer.");
        $('#select-manufacturer').val("").focus();
        return false;
    }
    if($('#model-color').val().trim()=="")
    {
        alert("Please enter color.");
        $('#model-color').val("").focus();
        return false;
    }
    if($('#model-year').val().trim()=="" || isNaN($('#model-year').val().trim()))
    {
        alert("Please enter valid year.");
        $('#model-year').val("").focus();
        return false;
    }
    if($('#model-reg-no').val().trim()=="")
    {
        alert("Please enter reg-no.");
        $('#model-reg-no').val("").focus();
        return false;
    }
    if($('#model-count').val().trim()=="" || isNaN($('#model-count').val().trim()) || $('#model-count').val().trim()<=0)
    {
        alert("Please enter valid count.");
        $('#model-count').val("").focus();
        return false;
    }
    if($('#image-1').val().trim()=="")
    {
        alert("Please select image.");
        $('#image-1').val("").focus();
        return false;
    }
    if($('#image-2').val().trim()=="")
    {
        alert("Please select image.");
        $('#image-2').val("").focus();
        return false;
    }
    var image1 = $('#image-1').prop('files')[0];
    var image2 = $('#image-2').prop('files')[0];
    var form_data = new FormData();
    form_data.append('model-name', $('#model-name').val());
    form_data.append('manufacturer_id', $('#select-manufacturer').val());
    form_data.append('model-color', $('#model-color').val());
    form_data.append('model-year', $('#model-year').val());
    form_data.append('model-reg-no', $('#model-reg-no').val());
    form_data.append('model-note', $('#model-note').val());
    form_data.append('model-count', $('#model-count').val());
    form_data.append('image_file1', image1);
    form_data.append('image_file2', image2);
    form_data.append('mode', "addCarModel");
    
    
    
    $.ajax({
        'url':'view/performAction.php',
        method: "POST",
        data: form_data,
        processData: false,
        contentType: false,
        success: function(data) {
            switch(data) {
                case 'success':
                        var msg = '<div class="alert alert-success text-center">';
                            msg += '<strong>Success!</strong> Car Model added successfully.';
                            msg += '</div>';
                            
                            $('#model-name').val("").focus();
                            $('#select-manufacturer').val("");
                            $('#model-color').val("");
                            $('#model-year').val("");
                            $('#model-reg-no').val("");
                            $('#model-note').val("");
                            $('#model-count').val("");
                            $('#image-1').val("");
                            $('#image-2').val("");
                        break;
                case 'error':
                        var msg = '<div class="alert alert-danger text-center">';
                            msg += '<strong>Failed!</strong> Something went wrong, Please try again later.';
                            msg += '</div>';
                        break;
            }
            $('#alerts').html(msg);
            $("#alerts").show();
            $("#alerts").show().delay(10000).fadeOut();
        }
    });
}

