console.log("script.js");
document.addEventListener("DOMContentLoaded",functionEv);
function functionEv(){
    let form=document.getElementById("myForm");
    //get the captured media file
    let input = document.getElementById("capture");
  /*   let message=document.getElementById("message"); */
 /*    let text=document.getElementById("text"); */
    let boxImage=document.getElementById("box-image");
    let takePicture=document.getElementById("takepicture");
    let loading=document.getElementById("loading");
    let submit= document.getElementById("submit");
   /*  let inputVideo = document.getElementById("capture-video"); */
    input.addEventListener("change", functionImage);
    /* inputVideo.addEventListener("change",functionVideo); */
   /*  function functionVideo(){
        console.dir(inputVideo.files[0].type.indexOf("video/"));
        if(inputVideo.files[0].type.indexOf("video/")>-1){
            let video = document.getElementById("video");
            video.src=window.URL.createObjectURL(inputVideo.files[0]);
        }
    } */
    function functionImage(){
        console.dir(input.files[0]);
        console.dir(input.files);
        /* console.dir(input.files[0].type.indexOf("image/")); */
        console.log(input.files);
        if(input.files[0].type.indexOf("image/")>-1){
            let img= document.getElementById("img");
            img.src=window.URL.createObjectURL(input.files[0]);
            boxImage.classList.add("animate");
            takePicture.classList.add("hide");
            loading.classList.remove("hide");
            setTimeout(function(){
               /*  message.classList.remove("hide"); */
                /* text.classList.add("animate"); */
                loading.classList.add("hide");
                loading.classList.add("animate");
                submit.classList.remove("hide");
            },10000);
            
        }

}
}


