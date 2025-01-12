function somarValoresV2(){
  const valorCarro = document.querySelector('#valor-carro').textContent; //valor do carro
  const valorEntrada = document.querySelector('#valor-entrada').value;  // valor de entrada
  const juros = document.querySelector('#juros').value;  // valor de entrada

  const mult = document.querySelector('input[name="multiplicador"]:checked');
  const qtdParc = parseFloat(mult.value);
 
  if(!mult){
    alert('marque a parcela');
    return;
  } 
 
  let saldoDevedor = valorCarro - valorEntrada;
  let jurosMensal =  ((saldoDevedor * juros)/100);

  let valorMensal = ((saldoDevedor / qtdParc) + jurosMensal);
 

  let valorTotalFinanciado =  saldoDevedor + jurosMensal * qtdParc;  
  let vlEntradaMaisFinanciado = parseFloat(valorEntrada) + parseFloat(valorTotalFinanciado);

  document.getElementById('vlCadaParcela').textContent = qtdParc +'x R$ ' + valorMensal.toFixed(2);
  document.getElementById('resvlCadaParcela').value = valorMensal;

  document.getElementById('vlTotalFinanciado').textContent = 'R$ ' + parseFloat(valorTotalFinanciado).toFixed(2);
  document.getElementById('resvlTotalFinanciado').value = valorTotalFinanciado;

  document.getElementById('vlTotalEntMaisParc').textContent = 'R$ ' + vlEntradaMaisFinanciado.toFixed(2);
  document.getElementById('resvlTotalEntMaisParc').value = vlEntradaMaisFinanciado;

  document.getElementById('resmultiplicador').value = qtdParc;

}


