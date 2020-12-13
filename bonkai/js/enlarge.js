$(document).ready(()=>{ 
    $('.gallery-image').on('click',function(){ 
        let modalImg = $(this).children("img").attr("src"); 
        let myModal = document.getElementById('myModal');
        let modalContent=document.getElementById('img01')
 

    //fade in function for image 
    $('.gallery-image').on('click',function(){ 
        $('#myModal').fadeIn(); 
        myModal.style.display='block'; 
    })
    
    modalContent.src = modalImg;
    

     //CLOSES THE GALLERY OVERLAY
     $('.close').on('click', function(){
        console.log('clicked');
        let myModal = document.getElementById('myModal');
        myModal.style.display = 'none';
    })
}) //end .gallery-image
}); //end doc ready