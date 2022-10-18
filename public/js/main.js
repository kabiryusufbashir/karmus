let addANewWord = document.querySelector('.addANewWord')
let addANewWordFooter = document.querySelector('.addANewWordFooter')
let signUpForm = document.querySelector('#sign-up-form')
let closeModalSignUp = document.querySelector('#closeModalSignUp')

addANewWord.addEventListener('click', ()=>{
    if(signUpForm.classList.contains('hidden')){
        signUpForm.classList.remove('hidden');
    }else{
        signUpForm.classList.add('hidden');
    }
})

closeModalSignUp.addEventListener('click', ()=>{
    if(signUpForm.classList.contains('hidden')){
        signUpForm.classList.remove('hidden');
    }else{
        signUpForm.classList.add('hidden');
    }
})