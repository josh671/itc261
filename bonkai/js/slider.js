


var $currentImage=document.getElementById('active'); 
var $middleImage=document.getElementById('middle_img'); 
var $lastImage=document.getElementById('last_img'); 
//console.log($lastImage.src) 


function firstImg(){ 
       $currentImage.classList.add('active');
       $currentImage.classList.remove('inactive'); 

       $middleImage.classList.remove('active');
       $middleImage.classList.add('inactive'); 

       $lastImage.classList.remove('active');
       $lastImage.classList.add('inactive');
     

    return $currentImage
}

function secondImg(){ 
    $currentImage.classList.remove('active'); 
    $currentImage.classList.add('inactive'); 
    $middleImage.classList.add('active'); 
    $middleImage.classList.remove('inactive'); 
    $lastImage.classList.remove('active');
       $lastImage.classList.add('inactive');

    return $currentImage
} 

function thirdImg(){ 
    $lastImage.classList.add('active');
    $lastImage.classList.remove('inactive');

    $currentImage.classList.remove('active'); 
    $currentImage.classList.add('inactive'); 
    $middleImage.classList.remove('active'); 
    $middleImage.classList.add('inactive'); 
    

    return $currentImage
} 

