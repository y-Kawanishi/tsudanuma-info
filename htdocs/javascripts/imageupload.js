$(function() {
    $('input[name="pic"]').on("change",function(e){
      let fs = this.files;
      $("#preview").html("");
      if(0 < fs.length){
        let fR = new FileReader();
        fR.onload = function(e){
          let src = e.target.result;
          $('<img>', { 'class':'picture', 'alt':fs[0].name, 'src': src }
           ).appendTo('#preview');
        }
        fR.readAsDataURL(fs[0]);
      }
    });
   })