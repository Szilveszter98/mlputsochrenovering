



if(document.getElementById('gallery')){
 
    var el = $('.splide__slide');

    if (el.length < 2) {

        new Splide('.splide', {
            clones: 0,
            autoHeight: true,
            autoWidth: true,
            width: '59.688rem',
            height: '30.188rem',
            trimSpace: false,
            type: 'slide',
            focus: 'center',
            perPage: 1,

        }).mount();

        $(".splide__arrows").hide();
        $(".splide__pagination").hide();
    }else{

   
        new Splide('.splide', {
            clones: 0,
            autoHeight: true,
            autoWidth: true,
            width: '59.688rem',
            height: '30.188rem',
            trimSpace: false,
            type: 'loop',
            focus: 'center',
            perPage: 1,


        }).mount();
    }
}

    
 
    


   



