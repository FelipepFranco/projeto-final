let containers_vant = document.querySelectorAll('.container-p');
let buttons_show = document.querySelectorAll('.btn-show');

function showButton(index) {
    buttons_show[index].style.display = 'block';
}

function hideButton(index) {
    buttons_show[index].style.display = 'none';
}

containers_vant.forEach((container, index) => {
    
    container.addEventListener('mouseover', function() {
        // console.log('funcionou');
        showButton(index);
    });

    container.addEventListener('mouseout', function() {
        // console.log('funcionou [apagar]');
        hideButton(index);
    });
});

// Aplicando a máscara do input telefone
document.addEventListener('DOMContentLoaded', function() {
    var inputTelefone = document.getElementById('telefone');

    inputTelefone.addEventListener('input', function(e) {
        var value = e.target.value.replace(/\D/g, '');
        if (value.length > 11) {
            value = value.slice(0, 11);
        }
        if (value.length > 10) {
            e.target.value = value.replace(/(\d{2})(\d{1})(\d{4})(\d{4})/, '($1) $2$3-$4');
        } else if (value.length > 6) {
            e.target.value = value.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
        } else if (value.length > 2) {
            e.target.value = value.replace(/(\d{2})(\d{0,5})/, '($1) $2');
        } else {
            e.target.value = value.replace(/(\d*)/, '($1');
        }
    });
});
    