$("#check-conntection").on('submit',function (event) {
    event.preventDefault();
    formData = new FormData(this);
    $.ajax({
        url:"/check.php",
        method:"POST",
        data:formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
            $("#submit-button").text("BAGLANIYOR...");
        },
        success:function(data){
            if(data == "fill"){
                swal.fire('HATA','Lütfen Tüm Alanları Doldurun','error');
            }
            else if(data == "error"){
                swal.fire('BAGLANTI HATASI','' +
                    '<ul class="swal-ul">' +
                    '<li>Baglanti ayarlarınız hatalı olabilir.</li>' +
                    '<li>Websender surumunuz eski olabilir.</li>' +
                    '<li>Baglanti Portunuza erişim kapalı olabilir.</li>' +
                    '<li>Ayarları yapildiktan sonra restart atilmamıs olabilir.</li>' +
                    '<li style="margin-top: 12px">Wiki: <a href="https://mineweb.keyubu.com/sunucu-baglantisi/websender" target="_blank">WebSender</a></li>' +
                    '<li>Discord - <a href="https://discord.gg/85pzs5D" target="_blank">Keyubu</a></li>' +
                    '<li>Discord - <a href="https://discord.gg/PFKvM7z" target="_blank">MineWeb</a></li>' +
                    '</ul>' +
                    '','error');
            }else if(data == "ok"){
                swal.fire('BAGLANTI YAPILDI','Sunucunuza komut gonderimi basarili!','success');
            }
            $("#submit-button").text("TEST ET");
        },
        error: function(){
            $("#submit-button").text("TEST ET");
        },
    });
});