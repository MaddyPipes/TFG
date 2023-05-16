function includeHTML() {
    let xhttp;
    const include = document.querySelectorAll('.insert-include');

    for(let i = 0; i < include.length; i++) {
        let url = include[i].getAttribute('include-url');
        const currentUrl = document.location.href;
        let list = currentUrl.split('/');
        list.pop();

        const folder = list.join('/');
        const fullPath = folder + '/' + url;

        if(fullPath) {
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        include[i].innerHTML = this.responseText;
                        unwrap(include[i]);
                    }
                    if (this.status == 404) {include[i].innerHTML = "Page not found";}
                }
            }
        }
        xhttp.open("GET", fullPath, false);
        xhttp.send();
    }
}

function unwrap(wrapper) {
    let docFrag = document.createDocumentFragment();
    while(wrapper.firstChild) {
        let child = wrapper.removeChild(wrapper.firstChild);
        docFrag.appendChild(child);
    }
    wrapper.parentNode.replaceChild(docFrag, wrapper);
}

let totalScript = [];

function parseScripts(elm) {
    let scripts = elm.querySelectorAll("script");

    let scriptsClone = [];

    for(let i = 0; i<scripts.length; i++){
        scriptsClone.push(scripts[i]);
    }

    for(let i = 0; i < scriptsClone.length; i++) {
        let currentScript = scriptsClone[i];
        let s = document.createElement("script");

        for(let j = 0; j < currentScript.attributes.length; j++) {
            let a = currentScript.attributes[j];
            s.setAttribute(a.name, a.value);
        }

        s.appendChild(document.createTextNode(currentScript.innerHTML));
        currentScript.parentNode.removeChild(s, currentScript);
    }
}

includeHTML();

