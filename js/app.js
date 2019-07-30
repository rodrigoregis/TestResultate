const form = document.querySelector('#main-form');
const name = document.querySelector('#name');
const email = document.querySelector('#email');
const phone = document.querySelector('#phone');
const message = document.querySelector('#message');
const errorEl = document.querySelector('#error');

loadEventListener();

function loadEventListener(){
    form.addEventListener('submit', validateForm);
}

function validateForm() {
    let msg = [];
    if(name.value === ''){
        msg.push('<div class="alert alert-warning">Por favor, nome é obrigatório.</div>');
    }

    if(email.value === '' || email.value.indexOf('@') === -1 || email.value.indexOf('.') === -1) {
        msg.push('<div class="alert alert-warning">Por favor, digite um e-mail válido.</div>');
    }

    if(phone.value === '') {
        msg.push('<div class="alert alert-warning">Por favor, digite um telefone válido.</div>');  
    }

    if(message.value === '' || message.value.length < 10) {
        msg.push('<div class="alert alert-warning">Por favor, mínimo de 10 caracteres.</div>');
    }

    if(msg.length > 0) {
        errorEl.innerHTML = msg.join(', ');
    }

    setTimeout( () => {
        document.querySelector('#error').remove();
    }, 3000);
    
    name.value = '';
    email.value = '';
    phone.value = '';
    message.value = '';

}

function changeTextBtn() {
    document.querySelector('#change').innerHTML = `
    <p><i class="fas fa-map-marker-alt"></i> Rod. 101 Norte, KM 264,91, 5030, B. Planalto de Carapina - Serra - Cep 29162-703</p>
    <p><i class="fas fa-envelope-square"></i> E-mail: vitoriawagen@grupolider.com.br</p>
    <p><i class="fas fa-phone-square-alt"></i> Tel (27) 3298-3400</p>
    `;
}

function changeText() {
    document.querySelector('#change').innerHTML = `
    <p><i class="fas fa-map-marker-alt"></i> Av.Vitória - Romão - Vitória - Cep 29041-405</p>
    <p><i class="fas fa-envelope-square"></i> E-mail: vitoriawagen@grupolider.com.br</p>
    <p><i class="fas fa-phone-square-alt"></i> Tel (27) 3331-8100</p>
    `;
}








