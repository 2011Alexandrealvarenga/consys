 // Função que simula pressionar Ctrl + P
 function simularCtrlP() {
  window.print(); // Chama a função de impressão do navegador
}

// Opcionalmente, você pode adicionar um ouvinte de evento para capturar o atalho de teclado
document.addEventListener("keydown", function(event) {
  // Verifica se a tecla Ctrl e a tecla P estão sendo pressionadas
  if (event.ctrlKey && event.key === "p") {
      simularCtrlP(); // Chama a função simularCtrlP
      event.preventDefault(); // Previne o comportamento padrão, que seria abrir a impressão
  }
});