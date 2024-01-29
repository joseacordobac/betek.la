const leningStart = () => {

    const lenis = new Lenis({
        lerp: 0.05,
        infinite: false,
        duration: 2,
    })

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)
}

window.addEventListener('load', () => {
    // leningStart();
})