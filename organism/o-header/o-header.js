
const gsapHeaderAnimation = (getHeader)=>{

    const tl = gsap.timeline({
        scrollTrigger: {
            scrub: 1,
            trigger: getHeader,
            endTrigger: getHeader,
            start: "+=200",
            end: "0",
        },
    })

    tl.to(getHeader, {
        duration: 3,
        backgroundColor: '#fff',
        boxShadow: '0px 10px 50px 0px rgba(0, 0, 0, 0.05)'
    }, 0);
}


window.addEventListener('load', ()=>{
    const getHeader = document.querySelector('.o-header');
    gsapHeaderAnimation(getHeader);
})