function animTrigger(selector, opsi = {}){
    let elm = document.querySelectorAll(selector)
    elm = Array.from(elm)
    elm.forEach(el => {
        addObserver(el, opsi)
    })
}

function addObserver(el, opsi){
    if(!('IntersectionObserver' in window)){
        if(opsi.cb){
            opsi.cb(el)
        }else{
            entry.target.classList.add('active')
        }
        return
    }
    let observer = new IntersectionObserver((entri, observer) => {
        entri.forEach(entri => {
            if(entri.isIntersecting){
                if(opsi.cb){
                    opsi.cb(el)
                }else{
                    entri.target.classList.add('animasi-kanan')
                }
                observer.observe(entri.target)
            }
        })
    }, opsi)
    observer.observe(el)
}

animTrigger('.card', {
    rootMargin: '-25px',
})