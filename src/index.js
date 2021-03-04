import './style.css';

function component() {

    const element = document.createElement('div');

    // Loadash installed via script tag (wordpress dependency)
    element.innerHTML = 'Hello Facebook Live';
    element.classList.add('hello');
    
    return element;
}

document.body.appendChild(component());
