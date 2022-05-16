function add()
{
    if((document.f.nom.value=="")||(document.f.content.value==""))
        {alert("les deux champs sont obligatoires");
    return 0;}
var nod=document.getElementById("list");
no=document.createElement("li");
no.classList.add("list-group-item");
no.innerHTML= document.f.nom.value+":"+document.f.content.value +"<button type='button' class='btn btn-danger' onclick='supprimer(this)' style='float: right;'><i class='bi bi-trash3-fill'></i></button>";
console.log(no.innerHTML);
nod.appendChild(no);
document.f.nom.value="";
document.f.content.value="";
}
function supprimer(nod){
    

    nod.parentNode.parentNode.removeChild(nod.parentNode);
}