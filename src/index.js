function component() {

    const element = document.createElement('div');

    // Loadash installed via script tag (wordpress dependency)
    element.innerHTML = _.join(['Hello', 'webpack'], ' ');
    element.classList.add('hello');
    
    return element;
}

document.body.appendChild(component());
