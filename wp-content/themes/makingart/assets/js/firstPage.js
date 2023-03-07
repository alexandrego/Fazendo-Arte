function waitThreeSeconds(){
  const timeOut = 3000
  const showHeader = () => showFirstPage()

  setTimeout(showHeader, timeOut)
}

function showLogo(){
  const element = document.getElementById('mostraLogo')
  element.innerHTML = `<div class="header">
                        <h1>Bem vindo</h1>
                      </div>`
}