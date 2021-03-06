import './style.css';
import Print from './print';

function component() {

    const element = document.createElement('div');

    // Loadash installed via script tag (wordpress dependency)
    // Not using lodash as it wasn't working

    element.innerHTML = '<a href="https://twitch.tv/">Hello Twitch.tv</a>';
    element.classList.add('hello');
    element.onclick = Print.bind('Hello Twitch.tv');
    
    return element;
}

const masthead = document.getElementById('masthead');
masthead.appendChild(component());
