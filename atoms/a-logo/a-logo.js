
const gsapLogoAnimation = ()=>{
    const getLogoImg = document.querySelector('.a-logo .custom-logo');

    if(getLogoImg){
        const tl = gsap.timeline({
            scrollTrigger: {
                scrub: 1,
                trigger: getLogoImg,
                start: "top top",
                end: "bottom bottom",
                toggleActions: "play reverse play reverse",
            }
        })
    
        tl.to(getLogoImg, {
            height : '50px',
            duration: 2
        })
    
    }
}


window.addEventListener('load', ()=>{
    gsapLogoAnimation();
})