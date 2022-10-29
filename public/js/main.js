let menu = document.querySelector('#menu');
let navDesktop = document.querySelector('#navDesktop');
let navMobile = document.querySelector('#navMobile');

menu.addEventListener('click', ()=>{
    if(navMobile.classList.contains('hidden')){
        navMobile.classList.remove('hidden');
    }else{
        navMobile.classList.add('hidden');
    }
})

let addANewWord = document.querySelector('.addANewWord')
let donateNowButton = document.querySelector('.donateNow')
let donateNowContent = document.querySelector('#donateNowContent')
let addWordForm = document.querySelector('#addWordForm')
let signUpForm = document.querySelector('#sign-up-form')
let signInForm = document.querySelector('#signInForm')
let signInLink = document.querySelector('#signInLink')
let signUpFormLink = document.querySelector('#signUpForm')
let signUpLink = document.querySelector('#signUpLink')
let closeModalSignUp = document.querySelector('#closeModalSignUp')

closeModalSignUp.addEventListener('click', ()=>{
    if(signUpForm.classList.contains('hidden')){
        signUpForm.classList.remove('hidden');
    }else{
        signUpForm.classList.add('hidden')
    }
})

donateNowButton.addEventListener('click', ()=>{
    if(signUpForm.classList.contains('hidden')){
        signUpForm.classList.remove('hidden');
        donateNowContent.classList.remove('hidden')
        addWordForm.classList.add('hidden')
    }else{
        signUpForm.classList.add('hidden');
        donateNowContent.classList.add('hidden')
        addWordForm.classList.remove('hidden')
    }
})

addANewWord.addEventListener('click', ()=>{
    if(signUpForm.classList.contains('hidden')){
        donateNowContent.classList.add('hidden')
        signUpForm.classList.remove('hidden');
        addWordForm.classList.remove('hidden')
    }else{
        donateNowContent.classList.remove('hidden')
        signUpForm.classList.add('hidden');
        addWordForm.classList.add('hidden')
    }
})

signInLink.addEventListener('click', ()=>{
    signUpFormLink.classList.remove('hidden')
    signInForm.classList.add('hidden')
})

signUpLink.addEventListener('click', ()=>{
    signUpFormLink.classList.add('hidden')
    signInForm.classList.remove('hidden')
})

