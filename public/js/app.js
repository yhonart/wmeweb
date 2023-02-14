// window.onscroll = function(){
//     const header = document.querySelector('nav');
//     const fixedNav = header.offsetTop; 
//     if (window.pageYOffset > fixedNav) {
//         header.classList.add('navbar-scrolled');
//         header.classList.remove('navbar-on-top');
//     } else {
//         header.classList.remove('navbar-scrolled');
//         header.classList.add('navbar-on-top');
//     }
// };
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
