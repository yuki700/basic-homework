function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

window.addEventListener('scroll', function() {
    const currentScrollPosition = window.scrollY;

    const scrollBtn = document.getElementById('scroll');

    if (currentScrollPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
        
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
});
//押したらフォームが出るように、出ないようにする。これはフォーム自体のものではない。
document.addEventListener('mouseup', (e) => {
    const form = document.getElementById('login');
    console.log(e.target);
    console.log(e.target.innerText);
    console.log(e);
    console.log(document.getElementById('login'));
    console.log(typeof(form));
    if (!form) { return; }
    
    if (!form.contains(e.target) && !e.target.innerText.toLowerCase().includes('login')) {
        form.style.display = '';
    }
});

function showLoginForm() {
    const form = document.getElementById('login');
    
    if (!form) { return; }
    
    form.style.display = form.style.display ? '' : 'block';
    
}
