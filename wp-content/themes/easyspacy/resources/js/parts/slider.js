export default class Slider {
  static get selector() {
    return '.figure__wrapper'
  }
  constructor(element) {
    this.element = element
    this.allImagesElt = this.element.querySelectorAll('.figure__image')
    this.buttons = document.querySelectorAll('.fig-slider__nav-button')
    this.phrase = document.querySelector('.progression__phrase')
    this.rocket = document.querySelector('.progression__rocket')
    this.progress = document.querySelector('.progression__bar')
    this.allLinks = document.querySelectorAll('.figure__link')
    //
    this.times = 0
    //
    this.init()
  }
  init() {
    this.allLinks[0].classList.add('figure__link_current')
    this.estimatedTime = this.phrase.dataset.estime
    this.value = parseFloat(
      window.getComputedStyle(this.element, null).getPropertyValue('width')
    )
    //preparing slider var
    this.imgArray = Array.from(this.allImagesElt)
    this.imgLen = this.imgArray.length - 1
    this.addClass()
    this.update()
  }
  update() {
    window.addEventListener('resize', e => {
      this.value = parseFloat(
        window.getComputedStyle(this.element, null).getPropertyValue('width')
      )
    })

    this.buttons.forEach(button => {
      button.addEventListener('click', e => {
        if (button.classList.contains('fig-slider__nav-button_prev')) {
          this.checkTimes(-1)
        } else {
          this.checkTimes(1)
        }
        this.addClass()
        this.slideImg()
      })
    })

    this.allLinks.forEach((link, index) => {
      link.addEventListener('click', e => {
        this.times = index
        this.addClass()
        e.preventDefault()
      })
    })
  }

  checkTimes(value) {
    if (value > 0 && this.times < this.imgArray.length - 1) {
      this.times += value
    }
    if (value < 0 && this.times > 0) {
      this.times += value
    }
  }

  slideImg() {
    let slide = this.value * -this.times
    this.imgArray.forEach(image => {
      image.style.transform = `translate(${slide}px)`
    })
  }

  addClass() {
    this.updatePhrase()
    this.updateProgress()
    this.clearClasses()
    this.allLinks[this.times].classList.add('figure__link_current')
    this.slideImg()
  }

  clearClasses() {
    this.allLinks.forEach(link => {
      link.classList.remove('figure__link_current')
    })
  }

  updateProgress() {
    let placement
    if (this.times === 0 || this.times <= 1) {
      placement = 0
    } else {
      placement = `${((this.times - 1) / (this.imgLen - 1)) * 100}%`
    }

    if (this.times === this.imgLen || this.times <= 1) {
      this.rocket.style.opacity = 0
    } else {
      this.rocket.style.opacity = 1
    }
    this.rocket.style.left = placement
    this.progress.setAttribute('max', this.imgLen - 1)
    this.progress.value = this.times <= 1 ? 0 : this.times - 1
  }
  updatePhrase() {
    let value
    if (this.times === 0) {
      value = this.imgLen * this.estimatedTime
    } else {
      value = (this.imgLen - this.times + 1) * this.estimatedTime
    }
    this.phrase.textContent = `${value} minute(s) restantes`
  }
}
