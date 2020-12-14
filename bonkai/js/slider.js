


var $firstImage=document.getElementById('firstImage'); 
var $secondImage=document.getElementById('secondImage'); 
var $thirdImage=document.getElementById('thirdImage'); 
var $fourthImage=document.getElementById('fourthImage'); 
var $fifthImage=document.getElementById('fifthImage'); 
//console.log($lastImage.src) 


function firstImg(){ 
       $firstImage.classList.add('active');
       $firstImage.classList.remove('inactive'); 

       $secondImage.classList.remove('active');
       $secondImage.classList.add('inactive'); 

       $thirdImage.classList.remove('active');
       $thirdImage.classList.add('inactive'); 

       $fourthImage.classList.remove('active');
       $fourthImage.classList.add('inactive');

       $fifthImage.classList.remove('active');
       $fifthImage.classList.add('inactive');
     

    return $firstImage
}

function secondImg(){ 
    $firstImage.classList.remove('active'); 
    $firstImage.classList.add('inactive'); 
    $secondImage.classList.add('active'); 
    $secondImage.classList.remove('inactive'); 
    $thirdImage.classList.remove('active');
    $thirdImage.classList.add('inactive');
    $fourthImage.classList.remove('active');
    $fourthImage.classList.add('inactive');
    $fifthImage.classList.remove('active');
    $fifthImage.classList.add('inactive');

    return $secondImage
} 

function thirdImg(){ 
    $thirdImage.classList.add('active');
    $thirdImage.classList.remove('inactive');

    $firstImage.classList.remove('active'); 
    $firstImage.classList.add('inactive'); 
    $secondImage.classList.remove('active'); 
    $secondImage.classList.add('inactive'); 
    $fourthImage.classList.remove('active');
      $fourthImage.classList.add('inactive');
      $fifthImage.classList.remove('active');
      $fifthImage.classList.add('inactive');
    

    return $thirdImage
} 

function fourthImg(){ 
    $thirdImage.classList.remove('active');
    $thirdImage.classList.add('inactive');

    $firstImage.classList.remove('active'); 
    $firstImage.classList.add('inactive'); 
    $secondImage.classList.remove('active'); 
    $secondImage.classList.add('inactive'); 
    $fourthImage.classList.add('active');
    $fourthImage.classList.remove('inactive');
    $fifthImage.classList.remove('active');
    $fifthImage.classList.add('inactive');


    return $fourthImage
}  

function fifthImg(){ 
    $thirdImage.classList.remove('active');
    $thirdImage.classList.add('inactive');

    $firstImage.classList.remove('active'); 
    $firstImage.classList.add('inactive'); 
    $secondImage.classList.remove('active'); 
    $secondImage.classList.add('inactive'); 
    $fourthImage.classList.remove('active');
    $fourthImage.classList.add('inactive');
    $fifthImage.classList.add('active');
    $fifthImage.classList.remove('inactive');


    return $fifthImage
} 