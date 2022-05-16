console.log("welcomee")
let nb=Math.floor(Math.random()*10);
let diff = prompt("entrer le nombre de tentatives");
let r = false;
let e=0;
  while((r==false) && (e <  diff )){
      let tentative= prompt("donner un numero");
      if(tentative==nb){
          r==true;

      }
      e++;
      
    }
    if(r==true)
    {          alert("bravooo ");}

    else 
    {alert("dommaageeeeee");}

