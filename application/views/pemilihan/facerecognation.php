



<div class="container">
<h5>Pindai Wajah dari NIK : <?=$nik;?> </h5>
<div  style ="margin:auto;">
<div id="webcam-container" >
  <img style="width:400px; height:400px" src="..\..\imgfin\scan_face.jpg" alt="" srcset="">
</div>
<div id="label-loading" >
  Loading Camera ...
</div>
</div>
<div id="label-container" ></div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
<script type="text/javascript">
  // More API functions here:
  // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

  // the link to your model provided by Teachable Machine export panel
  const URL = base_url+'/assets/';

  let model, webcam, labelContainer, maxPredictions;

  let temp = 99;

  window.onload = init();

  // Load the image model and setup the webcam
  async function init() {
    const modelURL = URL + 'model.json';
    const metadataURL = URL + 'metadata.json';

    // load the model and metadata
    // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
    // or files from your local hard drive
    // Note: the pose library adds "tmImage" object to your window (window.tmImage)
    model = await tmImage.load(modelURL, metadataURL);
    maxPredictions = model.getTotalClasses();

    // Convenience function to setup a webcam
    const flip = true; // whether to flip the webcam
    webcam = new tmImage.Webcam(400, 400, flip); // width, height, flip
    await webcam.setup(); // request access to the webcam
    await webcam.play();
    window.requestAnimationFrame(loop);

    // append elements to the DOM
    document.getElementById('webcam-container').innerHTML='';
    document.getElementById('label-loading').innerHTML='';
    document.getElementById('webcam-container').appendChild(webcam.canvas);
    labelContainer = document.getElementById('label-container');
    for (let i = 0; i < maxPredictions; i++) {
      // and class labels
      labelContainer.appendChild(document.createElement('div'));
    }
  }

  async function loop() {
    webcam.update(); // update the webcam frame
    await predict();
    if (!$nilai) {
      window.requestAnimationFrame(loop);
    }
  }

  // run the webcam image through the image model
  async function predict() {
    // predict can take in an image, video or canvas html element
    const prediction = await model.predict(webcam.canvas);
    $nilai = 0;
    for (let i = 0; i < maxPredictions; i++) {
      if (prediction[i].probability.toFixed(2) > 0.8) {
        // labelContainer.childNodes[i].innerHTML = '';
        if (temp != 99) {
          labelContainer.childNodes[temp].innerHTML = '';
        }
        const classPrediction =
          prediction[i].className + ': ' + prediction[i].probability.toFixed(2);
        switch (prediction[i].className) {
          case 'Lukman':
            labelContainer.childNodes[i].innerHTML = classPrediction;
           // alert('lukman verified');
		    $nilai = 86;
            temp = i;
            break;

          case 'Atika':
            labelContainer.childNodes[i].innerHTML = classPrediction;
            //alert('atika verified');
            $nilai = 84;
            temp = i;
            break;

          case 'Fadli':
            labelContainer.childNodes[i].innerHTML = classPrediction;
            // alert('fadli verified');

            $nilai = 81;
            temp = i;
            break;

          case 'Heryanto':
            labelContainer.childNodes[i].innerHTML = classPrediction;
           $nilai = 83;
            temp = i;
            break;

          default:
        }
      }
    }
    if ($nilai==<?=$nik;?>){
      window.open("<?=base_url();?>pemilihan/pilihcalon/<?=$nik;?>","_self");
    }

  }
</script>

























