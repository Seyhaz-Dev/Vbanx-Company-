document.addEventListener("DOMContentLoaded",()=>{

    const toggle = document.querySelector(".nav-toggle");
    const nav = document.querySelector(".primary-nav");


    if(toggle){

        toggle.addEventListener("click",()=>{

            nav.classList.toggle("is-open");

        });

    }

});