$("#check-conntection").on('submit',function (event) {
    event.preventDefault();
    formData = new FormData(this);
    $.ajax({
        url:"/check.php",
        method:"POST",
        data:formData,
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
            $("#submit-button").text("BAGLANIYOR...");
        },
        success:function(data){
            console.log(data);
            if(data.status)
            {
            }
        },
        error: function(){
            $("#submit-button").text("TEST ET");
        },
    });
});