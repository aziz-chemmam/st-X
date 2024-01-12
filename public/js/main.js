const btn = document.getElementById('button');
const formulaire = document.getElementById('formulaire');
const rmForm = document.getElementById('Form');

btn.addEventListener('click', (e) => {
   
    formulaire.classList.add("scale-100");
    formulaire.classList.remove("scale-0");
})
rmForm.addEventListener('click', (e) => {
    formulaire.classList.remove("scale-100");
    formulaire.classList.add("scale-0");
});