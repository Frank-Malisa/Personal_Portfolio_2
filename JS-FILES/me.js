let element = document.querySelector("#show-login");

element.addEventListener("click", function()
{
    document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close-btn").addEventListener("click", function()
{
    document.querySelector(".popup").classList.remove("active");
});

element.addEventListener("click", function()
{
    document.getElementById("blur").classList.add("active");
});

let elements = document.querySelector("#show-login");
                elements.addEventListener("click", function()
                {
                    let blur = document.querySelector("#blur");
                    blur.classList.add("active");
                });

                let cr = document.querySelector(".popup .close-btn");
                cr.addEventListener("click", function()
                {
                    let blur = document.querySelector("#blur");
                    blur.classList.remove("active");
                });