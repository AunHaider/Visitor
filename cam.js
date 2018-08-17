
    var options = {
      shutter_ogg_url: "jpeg_camera/shutter.ogg",
      shutter_mp3_url: "jpeg_camera/shutter.mp3",
      swf_url: "jpeg_camera/jpeg_camera.swf",
    };
    var camera = new JpegCamera("#camera", options);
  
  $('#take_snapshots').click(function(){
    var snapshot = camera.capture();
    snapshot.show();
    
    snapshot.upload({api_url: "action.php"})
  });
  
  var pic = document.getElementById('camera');
  var canvas = document.getElementById('canvas');
  var context = canvas.getContext('2d');
  
  document.getElementById('#take_snapshots').addEventListener('click', function(){
      
      context.drawImageUrl(camera, 0, 0, 100, 150);
  });

 