function addInput (event) {
    const adding = document.getElementById('adding');
    adding.innerHTML = "<div class='input-group mt-1'><button type=button class='btn btn-primary' id=addinput onclick='addInput2();'>+</button><select name=op-rule2 id=op-rule2 class=form-select><option value=adduser2>+ Usuário</option><option value=addgroup2>+ Grupo</option></select><input type=text name=rule2 id=rule2 class=form-control placeholder=usuário/grupo required></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio2' name='rulefr2' value=':f'> Leitura e gravação :f<label class='form-check-label' for='radio2'></label></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio2' name='rulefr2' value=':r'> Apenas leitura :r<label class='form-check-label' for='radio2'></label></div>"
}

function addInput2 (event) {
    const adding = document.getElementById('adding3')
    adding.innerHTML = "<div class='input-group mt-1'><button type=button class='btn btn-primary' id=addinput onclick='addInput3();'>+</button><select name=op-rule3 id=op-rule3 class=form-select><option value=adduser3>+ Usuário</option><option value=addgroup3>+ Grupo</option></select><input type=text name=rule3 id=rule3 class=form-control placeholder=usuário/grupo required></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio3' name='rulefr3' value=':f'> Leitura e gravação :f<label class='form-check-label' for='radio3'></label></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio3' name='rulefr3' value=':r'> Apenas leitura :r<label class='form-check-label' for='radio3'></label></div>"
}

function addInput3 (event) {
    const adding = document.getElementById('adding4')
    adding.innerHTML = "<div class='input-group mt-1'><button type=button class='btn btn-primary' id=addinput onclick='addInput4();'>+</button><select name=op-rule4 id=op-rule4 class=form-select><option value=adduser4>+ Usuário</option><option value=addgroup4>+ Grupo</option></select><input type=text name=rule4 id=rule4 class=form-control placeholder=usuário/grupo required></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio4' name='rulefr4' value=':f'> Leitura e gravação :f<label class='form-check-label' for='radio4'></label></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio4' name='rulefr4' value=':r'> Apenas leitura :r<label class='form-check-label' for='radio4'></label></div>"
}

function addInput4 (event) {
    const adding = document.getElementById('adding5')
    adding.innerHTML = "<div class='input-group mt-1'><button type=button class='btn btn-primary' id=addinput onclick='addInput5();'>+</button><select name=op-rule5 id=op-rule5 class=form-select><option value=adduser5>+ Usuário</option><option value=addgroup5>+ Grupo</option></select><input type=text name=rule5 id=rule5 class=form-control placeholder=usuário/grupo required></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio5' name='rulefr5' value=':f'> Leitura e gravação :f<label class='form-check-label' for='radio5'></label></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio5' name='rulefr5' value=':r'> Apenas leitura :r<label class='form-check-label' for='radio5'></label></div>"
}

function addInput5 (event) {
    const adding = document.getElementById('adding6')
    adding.innerHTML = "<div class='input-group mt-1'><button type=button class='btn btn-primary' id=addinput onclick='addInput6();'>+</button><select name=op-rule6 id=op-rule6 class=form-select><option value=adduser6>+ Usuário</option><option value=addgroup6>+ Grupo</option></select><input type=text name=rule6 id=rule6 class=form-control placeholder=usuário/grupo required></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio6' name='rulefr6' value=':f'> Leitura e gravação :f<label class='form-check-label' for='radio6'></label></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio6' name='rulefr6' value=':r'> Apenas leitura :r<label class='form-check-label' for='radio6'></label></div>"
}

function addInput6 (event) {
    const adding = document.getElementById('adding7')
    adding.innerHTML = "<div class='input-group mt-1'><button type=button class='btn btn-primary' id=addinput onclick='addInput7();'>+</button><select name=op-rule7 id=op-rule7 class=form-select><option value=adduser7>+ Usuário</option><option value=addgroup7>+ Grupo</option></select><input type=text name=rule7 id=rule7 class=form-control placeholder=usuário/grupo required></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio7' name='rulefr7' value=':f'> Leitura e gravação :f<label class='form-check-label' for='radio7'></label></div><div class='form-check-inline mt-3'><input type='radio' class='form-check-input' id='radio7' name='rulefr7' value=':r'> Apenas leitura :r<label class='form-check-label' for='radio7'></label></div>"
}

const pveto = document.getElementById('deny-padrao');
pveto.addEventListener('click', (event) => {
    if(pveto.checked = true) {
        pveto.checked.disabled = true;
    }
})