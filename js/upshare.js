const pveto = document.getElementById('deny-padrao');
const cveto = [document.getElementById('deny-compactados'), document.getElementById('deny-imagens'), document.getElementById('deny-macros'), document.getElementById('deny-audio'), document.getElementById('deny-video'), document.getElementById('deny-atalhos'), document.getElementById('deny-executaveis')]
for(var c = 0; c < cveto.length; c++) {
    cveto[c].addEventListener('click', (event) => {
        pveto.checked = true;
    })
}