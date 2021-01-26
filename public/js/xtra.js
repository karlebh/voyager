
const btn = document.querySelector('#click')
const commentForm = document.querySelector('#commentForm')
const closeHam = document.querySelector('#closeMenu')
const mobileNav = document.querySelector('#mobileNav')
const hambuger = document.querySelector('#hambuger')

closeHam.addEventListener('click', () =>  mobileNav.style.display = 'none' )
hambuger.addEventListener('click', () =>  mobileNav.classList.toggle('hidden'))
