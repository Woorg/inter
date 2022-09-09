// import svg4everybody from 'svg4everybody';
// import LazyLoad from 'vanilla-lazyload';
// import Nav from '../../components/nav/nav';
// import JustValidate from 'just-validate';
// import { heroVideo } from '../../components/hero/hero';

document.addEventListener('DOMContentLoaded', function (event) {

    // svg4everybody();

    let styles = [
        'padding: 2px 9px',
        'background: #2948ff',
        'color: #fff',
        'line-height: 1.56',
        'font-size: 16px',
    ].join('');

    console.log('%c Developed by igor gorlov https://igorlov.ru', styles);

    // Phone mask
    // inputMask();

    // Custom select

    // formValidate();

    const form = document.querySelector('.rd-mailform');
    const formElements = form.querySelectorAll('.wpcf7-form-control');
    const formName = form.querySelector('#contact-name');
    const formEmail = form.querySelector('#contact-email');
    const formPhone = form.querySelector('#contact-phone');
    const formMessage = form.querySelector('#contact-message');


    // form.removeAttribute('novalidate');
    form.setAttribute('data-form-output', 'form-output-global');
    form.setAttribute('data-form-type', 'contact');

    formName.setAttribute('data-constraints', '@Required');
    formEmail.setAttribute('data-constraints', '@Required @Email');
    formPhone.setAttribute('data-constraints', '@Required @Numeric');
    formMessage.setAttribute('data-constraints', '@Required');

    // formElements.forEach( (element) => {

    //     console.log(element);
    //     console.log(formName);

    //     element.setAttribute('data-constraints', 'required');
    // });



});
