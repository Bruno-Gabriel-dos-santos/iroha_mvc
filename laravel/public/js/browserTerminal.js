
function terminal(){
    
    document.getElementById("buscador-comum").style.display="none";
    document.getElementById("terminais").style.display="contents";
}

function buscadorcomum(){

    document.getElementById("terminais").style.display="none";
    document.getElementById("buscador-comum").style.display="contents";
}

moverJanela=0;
function moveJanela(obj){
    moverJanela=1;
}

function pauseJanela(obj){
    
    
   
    moverJanela=0;
}

window.addEventListener('mousemove',(event)=>{

    let janela=document.getElementById("terminal-1");

    let x= event.clientX;x=x-380;
    let y= event.clientY;y=y-90;
    if(x<60){x=60;}if(y<5){y=5;}
    x=x+"px";y=y+"px";
    
    s1=janela.style.top=y;
    s2=janela.style.left=x;

    if(moverJanela==1){
    janela.style.marginTop=y;
    janela.style.marginLeft=x;
    }              
    


})

terminaisdisponiveis=4;
term_1=1;term_2=0;term_3=0;term_4=0;term_5=0;
function minimizar_j1(){
    document.getElementById("terminal-1").style.display="none";
    terminaisdisponiveis=terminaisdisponiveis+1;
    if(terminaisdisponiveis==5){  document.getElementById("minimizado-janela-1").style.display="contents";}
    
}
function expand_j1(){
    document.getElementById("minimizado-janela-1").style.display="none";
    document.getElementById("terminal-1").style.display="block";
    terminaisdisponiveis=terminaisdisponiveis-1;
}

function excluir_j1(){
    document.getElementById("txt-t1").textContent="";
    
    document.getElementById("terminal-1").style.display="none";
    
    term_1=0;
}

function adicionar(){
    
    if(term_1==0){
    document.getElementById("terminal-1").style.display="block";
    document.getElementById("txt-t1").textContent="$rede-iroha || ";}
}