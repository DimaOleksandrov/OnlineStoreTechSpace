let One = document.querySelector('#One');
let Two = document.querySelector('#Two');
let Three = document.querySelector('#Three');
let pickup = document.querySelector('.pickup');
let post = document.querySelector('.post');
let сourier = document.querySelector('.сourier');




One.onclick = ()=> {
    if(pickup.classList.contains("uk-hidden")){
        pickup.classList.remove("uk-hidden");
    }
    if(!post.classList.contains("uk-hidden")){
        post.classList.add("uk-hidden");
    }
    if(!сourier.classList.contains("uk-hidden")){
        сourier.classList.add("uk-hidden");
    }
};
Three.onclick = ()=> {
    if(post.classList.contains("uk-hidden")){
        post.classList.remove("uk-hidden");
    }
    if(!сourier.classList.contains("uk-hidden")){
        сourier.classList.add("uk-hidden");
    }
    if(!pickup.classList.contains("uk-hidden")){
        pickup.classList.add("uk-hidden");
    }
};
Two.onclick = ()=> {
    if(сourier.classList.contains("uk-hidden")){
        сourier.classList.remove("uk-hidden");
    }
    if(post.classList.contains("uk-hidden")){
        post.classList.remove("uk-hidden");
    }
    if(!pickup.classList.contains("uk-hidden")){
        pickup.classList.add("uk-hidden");
    }
};