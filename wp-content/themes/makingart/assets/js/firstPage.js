// Ajusta Splash Screen 
function splashScreen() {
  document.getElementById("divFirstLoader").style.display = "none"
  document.getElementById("divSplashScreen").style.display = "contents"

  startSlides()
}

// Código dos slides da home
function startSlides() {
  const timeOut = 3500
  const changeSlide = () => callSecondSlide()

  setTimeout(changeSlide, timeOut)
}

function callFirstSlide() {
  const timeOut = 3500
  const changeSlide = () => callInitialSlide()

  setTimeout(changeSlide, timeOut)
}

function callInitialSlide(){
  const element = document.getElementById('divSlides1')
  element.innerHTML = `
                      <div class="divSlides" id="divSlides">
                      <div class="infoSlide">
                        <div class="titleSlide">
                          <p>Puxa Saco</p>
                        </div>
                        
                        <div class="buttonSlide">
                          <a href="#">Saiba mais</a>
                        </div>
                      </div>

                      <div class="divSlidesImg">
                        <img src="./wp-content/themes/makingart/assets/images/puxa-saco.webp" class="imgSlides"/>
                      </div>
                    </div>`
  startSlides()
}

function callSecondSlide() {
  const element = document.getElementById('divSlides')
  element.innerHTML = `
  <div class="divSlides" id="divSlides1">
    <div class="divSlidesImg">
      <img src="./wp-content/themes/makingart/assets/images/puxa-saco1.webp" class="imgSlides"/>
    </div>
  
    <div class="infoSlide">
      <div class="titleSlide">
        <p>Puxa Saco</p>
      </div>
      
      <div class="buttonSlide">
        <a href="#">Saiba mais</a>
      </div>
    </div>
  </div>`

  callFirstSlide()
}