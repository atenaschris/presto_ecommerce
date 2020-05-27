$(function() {

  if($("#drophere").length > 0) {
     
     let csrfToken = $("meta[name='csrf-token']").attr('content');
     let uniquesecret = $("input[name='uniquesecret']").attr('value');
  

     let myDropzone = new Dropzone('#drophere', {
        url: '/ads/images/upload',
        params: {
           _token: csrfToken,
           uniquesecret: uniquesecret
        },
        addRemoveLinks: true,
        init: function() {
           $.ajax({
              type: 'GET',
              url: '/ads/image',
              data: {
                 uniquesecret: uniquesecret
              },
              dataType: 'json'
           }).done(function(data) {
              $.each(data, function(key, value) {
                 let file = {
                    serverId: value.id
                 };
                 myDropzone.options.addedfile.call(myDropzone, file);
                 myDropzone.options.thumbnail.call(myDropzone, file, value.src);
              });
           });
        }
     });

     myDropzone.on("success", function(file, response){

        file.serverId = response.id;

     });

     myDropzone.on("removedfile", function(file){
        
        $.ajax({
              type: 'DELETE',
              url: '/ads/image/remove',
              data: {
                 _token: csrfToken,
                 uniquesecret: uniquesecret,
                 id: file.serverId
              },
           dataType: 'json'   
        });

     });

  }
  
})