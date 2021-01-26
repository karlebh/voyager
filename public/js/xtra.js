
const btn = document.querySelector('#click')
const commentForm = document.querySelector('#commentForm')
const mobileNav = document.querySelector('#mobileNav')
const hambuger = document.querySelector('#hambuger')
const replies = document.querySelectorAll('.reply')
const commentHiddenId = document.querySelector('#commentForm input[name="parent_id"]')

hambuger.addEventListener('click', () =>  mobileNav.classList.toggle('hidden'))

replies.forEach(reply => {
    reply.addEventListener('click', (e) => {
        /* 
            This @name current might change if the position
            of the html tags are changed or rearranged
         */
        let current = e.target.parentNode.parentNode.dataset.commentId 
        commentHiddenId.value = current

        
    })
})



