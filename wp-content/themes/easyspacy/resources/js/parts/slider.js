export default class Slider {
  static get selector() {
    return '.figure__wrapper'
  }
  constructor(element) {
    this.element = element
    this.init()
    element.addEventListener('click', e => {
      e.preventDefault()
      this.slideImg()
      this.addClass()
    })
  }
  init() {
    this.allImagesElt = this.element.querySelectorAll('.figure__image')
    this.allLinks = document.querySelectorAll('.figure__link')
    //preparing slider var
    this.imgArray = Array.from(this.allImagesElt)
    this.value = -430
    this.times = 0
    this.addClass()
  }

  checkTimes() {
    if (this.times === this.imgArray.length - 1) {
      this.times = this.imgArray.length - 1
    } else {
      this.times++
    }
  }
  slideImg() {
    /* this.checkTimes() */
    this.value = -430 * this.times
    this.imgArray.forEach(image => {
      image.style.transform = `translate(${this.value}px)`
    })
  }
  //logic for css classes
  addClass() {
    this.allLinks.forEach((link, index) => {
      link.addEventListener('click', e => {
        this.clearClasses()
        link.classList.add('figure__link_current')
        this.times = index
        this.slideImg()
        e.preventDefault()
      })
    })
  }
  clearClasses() {
    this.allLinks.forEach(link => {
      link.classList.remove('figure__link_current')
    })
  }
}
