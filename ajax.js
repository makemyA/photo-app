console.log("ajax.js");

 
/*   let imageStreaming = document.getElementsByClassName("img-streaming");  */




/* 
imageStreaming.forEach(functionForEach);
function functionForEach(item){
    item-item.classList.add("hide");
} */


 
     let container = document.getElementById("container");
     let request = new XMLHttpRequest();
     let imageCurrent="";
     let imageNew="";
     let imagePast= [];
    functionAjax(); 
    function functionAjax(){
        request.open('POST', 'page_streaming.php', true);
        request.onload = function() {
        
            if (request.status >= 200 && request.status < 400) {
                container.innerHTML= request.responseText;
                console.log("ajax works");
                    let imageStreaming = document.querySelectorAll(".img-streaming");
                    console.log(imageStreaming);
                    console.log(imageStreaming.length);
                    for (let i =0; i<imageStreaming.length;i++){
                        imageStreaming[i].classList.add("hide"); 
                    }
                    let j= imageStreaming.length;
                    console.log(imageStreaming[j-1].src);
                    console.log(imageStreaming[j-2].src);
                    imageNew= imageStreaming[j-1];
                    if(imageNew.src==imageCurrent.src){
                           console.log("pas de nouvelles images");
                           imageCurrent= imageStreaming[j-1];
                           imageCurrent.classList.remove("hide");
                           /* imageCurrent.classList.add("animate");  */  
                    }else {
                        imageCurrent= imageStreaming[j-1];
                        imageCurrent.classList.remove("hide");
                        imageCurrent.classList.add("animate");
                        imagePast.push(imageNew);
                        console.log(imagePast);   
                    }

                   
                }
        };
        
        request.send();
    } 
    console.log("after animate?");
      /* setTimeout( functionAjax, 5000);  */
      let interval= setInterval( functionAjax, 15000); 
    //END
        






/* imageStreaming.forEach(showArray);
function showArray(){
    console.log(imageStreaming);
} */


/* for(let i=1; i<imageStreaming.length; i++){
    imageStreaming[i].classList.add("hide");
    console.log(imageStreaming[i].src);
} */

   /*  setInterval(function(){imageStreaming[0].src="temp/'.$donnees['image']"+ ++curImg+".";console.log(imageStreaming[0].src)},2000); */

/* imageStreaming[0].classList.remove("hide");
imageSource.src="" */