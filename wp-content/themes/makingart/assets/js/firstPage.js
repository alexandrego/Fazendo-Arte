function waitThreeSeconds(){
  const timeOut = 2000
  const showHeader = () => showLogo()

  setTimeout(showHeader, timeOut)
}
 
function splashScreen() {
  document.getElementById("divFirstLoader").style.display = "none";
  document.getElementById("divSplashScreen").style.display = "contents";
}

function showLogo(){
  const element = document.getElementById('mostraLogo')
  element.innerHTML = `<div style="width:100%;background-color:antiquewhite;display:flex;flex-direction:row;align-items:center;justify-content:space-around;padding:10px 0;">
                        <a href="#">
                          <div style="display:flex;align-items:center;justify-content:center;">
                            <img src="./wp-content/themes/makingart/assets/images/fazendo-arte.png" alt="Logo Fazendo Arte" style="border-radius:50%;width:40%;">
                          </div>
                        </a>

                        <div>
                          <input type="text" style="width:400px;height:35px;border-radius:50px;padding: 5px 20px;font-size:14px;outline:none;border:none;" placeholder="Pesquise aqui o seu produto" />                    
                        </div>

                        <div style="display:flex;align-items:center;justify-content:center;">
                          <p>Área do Cliente</p>
                        </div>

                        <div style="display:flex;align-items:center;justify-content:center;">
                          <p>Carrinho</p>
                        </div>
                      </div>`
}