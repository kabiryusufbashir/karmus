let addANewWord = document.querySelector('.addANewWord')
let signUpForm = document.querySelector('#sign-up-form')
let signInForm = document.querySelector('#signInForm')
let signInLink = document.querySelector('#signInLink')
let signUpFormLink = document.querySelector('#signUpForm')
let signUpLink = document.querySelector('#signUpLink')
let closeModalSignUp = document.querySelector('#closeModalSignUp')

closeModalSignUp.addEventListener('click', ()=>{
    alert()    
    if(signUpForm.classList.contains('hidden')){
        signUpForm.classList.remove('hidden');
    }else{
        signUpForm.classList.add('hidden')
    }
})

addANewWord.addEventListener('click', ()=>{
    if(signUpForm.classList.contains('hidden')){
        signUpForm.classList.remove('hidden');
    }else{
        signUpForm.classList.add('hidden');
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

