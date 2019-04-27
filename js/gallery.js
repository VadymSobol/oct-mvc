$('[name="photoupload"]').submit(function(event){
   var data = new FormData(document.forms.photoupload);
   $.ajax({
       url: $this.attr('action'),
       data: data,
       contentType: false,
       processData: false,
       type: $this.attr('method'),
       success:function(){
	   alert('photo upload');
       }
   });
   return false;
});

