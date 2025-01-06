function somarValoresV2(){
  const valorCarro = document.querySelector('#valor-carro').textContent; //valor do carro
  const valorEntrada = document.querySelector('#valor-entrada').value;  // valor de entrada
  const vlCarroMenosEntrada = document.querySelector('#vlCarroMenosEntrada');  // valor do carro menos entrada
  // const vlCarroMenosEntrada = document.querySelector('#vlCarroMenosEntrada');   // valor dos radios
  const vlTotalFinanciado = document.querySelector('#vlTotalFinanciado');  // resultado final
  const juros = document.querySelector('#juros').value;  // valor de entrada

  const mult = document.querySelector('input[name="multiplicador"]:checked');
  const qtdParc = parseFloat(mult.value);

  // function formatarValor(valor) {
  //   return parseFloat(valor.replace('.', '').replace(',', '.'));
  // }
  
  if(!mult){
    alert('marque a parcela');
    return;
  } 
 
  let saldoDevedor = valorCarro - valorEntrada;
  // let valorMensali =  saldoDevedor / qtdParc;
  let jurosMensal =  ((saldoDevedor * juros)/100);
  // 90 =   900 * 10 /100

  let valorMensal = ((saldoDevedor / qtdParc) + jurosMensal);
  let valorTotalFinanciado =  saldoDevedor + jurosMensal * qtdParc;
  
  let vlEntradaMaisFinanciado = parseFloat(valorEntrada) + parseFloat(valorTotalFinanciado);
  // let valorCadaParcela = valorTotal / qtdParc;
  // for(i = 0; i < qtdParc; i++){
  //   valorParcela = saldoDevedor + jurosMensal;
  //       // 180      =    90   +     90
  //      valortotal = valorParcela * qtdParc;

  // }

  // valorParcela = saldoDevedor / qtdParc;

  // valorParcelaMJuros = jurosMensal + valorParcela;
  document.getElementById('vlCadaParcela').textContent = qtdParc +'x R$ ' + valorMensal.toFixed(2);
  document.getElementById('vlTotalFinanciado').textContent = 'R$ ' + parseFloat(valorTotalFinanciado).toFixed(2);
  document.getElementById('vlTotalEntMaisParc').textContent = 'R$ ' + vlEntradaMaisFinanciado.toFixed(2);

  console.log(vlEntradaMaisFinanciado);
  // vlCadaParcela
}
// function somarValores() {
//     function formatarValor(valor) {
//       return parseFloat(valor.replace('.', '').replace(',', '.'));
//     }

//   var valorSpan = document.getElementById('valor-carro').textContent;
//   var valorInput = document.getElementById('valor-entrada').value;

//   var valorSpanNumero = formatarValor(valorSpan);
//   var valorInputNumero = formatarValor(valorInput);

//   var resultado = valorSpanNumero - valorInputNumero;

//   document.getElementById('vlCarroMenosEntrada').textContent = 'Resultado: ' + resultado.toFixed(2);

//   if(isNaN(resultado)){
//     document.getElementById('vlCarroMenosEntrada').textContent = 'Digite um valor de entrada';
//   }  

//   teste();
// }

// function teste(){
//   var vlCarroMEntrada = document.getElementById('vlCarroMenosEntrada').value;
//   // var valorInput = document.getElementById('valor-entrada').value;
//   var mult = document.querySelector('input[name="multiplicador"]:checked');

//   if(!mult){
//     alert('marque a parcela');
//     return;
//   }

//   vlCarroMEntrada = parseFloat(vlCarroMEntrada);
//   var valorRadio = parseFloat(mult.value);

//   var resFinanciado = vlCarroMEntrada * valorRadio;


//   if(isNaN(resFinanciado)){
//      document.getElementById('vlTotalFinanciado').textContent = 'Total Financiado: '+ resFinanciado;
//   }else{
//     document.getElementById('vlTotalFinanciado').textContent = 'erro: ';
//   }

//   // somarValores();
// }











// inicio - mascara para inserir ponto e virgula
// function BlockKeybord(){
//   if((event.keyCode < 48) || (event.keyCode > 57)){
//   event.returnValue = false;
//   }
// }

// function troca(str,strsai,strentra){
//   while(str.indexOf(strsai)>-1){
//   str = str.replace(strsai,strentra);
//   }
//   return str;
// }

// function FormataMoeda(campo,tammax,teclapres,caracter){
//     if(teclapres == null || teclapres == "undefined"){
//       var tecla = -1;
//     }
//     else{
//       var tecla = teclapres.keyCode;
//     }
    
//     if(caracter == null || caracter == "undefined"){
//       caracter = ".";
//     }
    
//     vr = campo.value;
//     if(caracter != ""){
//       vr = troca(vr,caracter,"");
//     }
//       vr = troca(vr,"/","");
//       vr = troca(vr,",","");
//       vr = troca(vr,".","");
      
//       tam = vr.length;
//     if(tecla > 0){
//       if(tam < tammax && tecla != 8){
//         tam = vr.length + 1;
//       }
    
//       if(tecla == 8){
//         tam = tam - 1;
//       }
//     }
//     if(tecla == -1 || tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105)
//     {
//       if(tam <= 2){ 
//         campo.value = vr;
//       }
//       if((tam > 2) && (tam <= 5)){
//         campo.value = vr.substr(0, tam - 2) + ',' + vr.substr(tam - 2, tam);
//       }
//       if((tam >= 6) && (tam <= 8)){
//         campo.value = vr.substr(0, tam - 5) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
//       }
//       if((tam >= 9) && (tam <= 11)){
//         campo.value = vr.substr(0, tam - 8) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
//       }
//       if((tam >= 12) && (tam <= 14)){
//         campo.value = vr.substr(0, tam - 11) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
//       }
//       if((tam >= 15) && (tam <= 17)){
//         campo.value = vr.substr(0, tam - 14) + caracter + vr.substr(tam - 14, 3) + caracter + vr.substr(tam - 11, 3) + caracter + vr.substr(tam - 8, 3) + caracter + vr.substr(tam - 5, 3) + ',' + vr.substr(tam - 2, tam);
//       }
//     }
//   }

//   function maskKeyPress(objEvent) 
//   {
//    var iKeyCode;  	
//    iKeyCode = objEvent.keyCode;  	
//    if(iKeyCode>=48 && iKeyCode<=57) return true;
//    return false;
//   }
// fim - mascara para inserir ponto e virgula
