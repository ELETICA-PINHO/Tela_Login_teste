var usuario = document.getElementById('usuario')
var senha   = document.getElementById('senha')
var resposta   = document.getElementById('res')

var banco_usuario = {}



function logar() {

resposta.innerHTML = ` usuario ${usuario.value}  senha${senha.value}`

if(usuario.value == "ale" && senha.value == "1234"){
    location = "tela-logado.html"
}else{
    alert('Dados incorretos')
}
    




}