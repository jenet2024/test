




const Action=document.querySelector('.justify_content_center-toggle');
Action.addEventListener('click',() =>{
    $('.justify_content_center').toggleClass('is-open');
})
// if (window.matchMedia && window.matchMedia('(prefers-color-scheme:dark)').matches){
//         alert ('woow je suis en dark mode !')
//     }

// function themeNuitJour(){
//     console.log("hello");
//     const date= new date()
//     const hour = date.getHours()
//     if (hour >5 || hour < 20){
//         document.documentElement.style.setProperty(' --ecriture','#333')
//         document.documentElement.style.setProperty(' --fond','#f1f1f1')
    
//     }else{
//         document.documentElement.style.setProperty(' --ecriture','#f1f1f1')
//         document.documentElement.style.setProperty(' --fond','#333')
//     }
// 
const btnToggle = document.querySelector('.btn-toggle');
btnToggle.addEventListener('click',() =>{
    const body = document.body;
    if (body.classList.contains('dark')){
        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.innerHTML = "Go Dark"

    }else if (body.classList.contains('light')){
        body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.innerHTML = "Go Light"
    }
})



        
// const galleryContainer = document.querySelector('.gallery-container');
// const galleryControlsContainer = document.querySelector('.gallery-controls');
// const galleryControls = ['previous', 'next'];
// const galleryItems = document.querySelesctorAll('.gallery-item');

// class carousel{
//     constructor(container, items, controls){
//         this.carouselContainer = container;
//         this.carouselControls = controls;
//         this.carouselArray = [...items];
//     }
//     updateGallery(){
//         this.carouselArray.forEach(el=>{
//             el.classList.remove('gallery-item-1');
//             el.classList.remove('gallery-item-2');
//             el.classList.remove('gallery-item-3');
//             el.classList.remove('gallery-item-4');
//             el.classList.remove('gallery-item-5');
//         });
//         this.carouselArray.slice(0, 5).forEach((el ,i)=>{
//             el.classList.add(`gallery-item-${i+1}`);
//         });
//     }
//     setCurrentState(direction){
//         if (direction.className == 'gallery-controls-previous'){
//             this.carouselArray.unshift(this.carouselArray.pop());
//         } else{
//             this.carouselArray.push(this.carouselArray.shift());
//         }
//         this.updateGallery();
//     }
//     setControls(){
//         this.carouselControls.forEach(control =>{
//             galleryControlsContainer.appendChild(document.createElement('button')).className=`gallery-controls-${control}`;
//             document.querySelector(`.gallery-controls-${control}`).innerText = control;
//         });
//     }
//     useControls(){
//         const triggers = [...galleryControlsContainer.childNodes];
//         triggers.forEach(control =>{
//             control.addEventListener('click', e =>{
//                 e.preventDefault();
//                 this.setCurrentState(control);
//             });
//         });
//     }
// }
// const exampleCarousel = new carousel(galleryContainer, galleryItems, galleryControls);
// exampleCarousel.setControls();
// exampleCarousel.useControls();