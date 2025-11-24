let registroUsuario = document.getElementById("formUsuario");
let registroProveedor = document.getElementById("formProveedor");
let btnUsuarios = document.getElementById("btn-usuarios");
let btnProveedores = document.getElementById("btn-proveedores");

btnUsuarios.addEventListener("click", ()=>{
    registroUsuario.style.display = "flex";
    registroProveedor.style.display = "none";
})
btnProveedores.addEventListener("click", ()=>{
    registroUsuario.style.display = "none";
    registroProveedor.style.display = "flex";
})

