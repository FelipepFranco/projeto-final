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