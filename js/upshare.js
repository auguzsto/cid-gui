const pveto = document.getElementById('deny-padrao');
const cveto = [document.getElementById('deny-compactados'), document.getElementById('deny-imagens'), document.getElementById('deny-macros')]
for(var c = 0; c < 3; c++) {
    cveto[c].addEventListener('click', (event) => {
        pveto.checked = true;
    })
}
