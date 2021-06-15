export default class Slider {
  static get selector() {
    return '.semblable-list'
  }
  constructor(element) {
    this.element = element
    this.buttons = this.element.querySelectorAll('.semblable-list__button')
    this.capsules = this.element.querySelectorAll('.capsule')
    this.maxLen = Math.floor(this.capsules.length / 2)
    this.times = 0
    this.init()
  }
  init() {
    this.buttons.forEach(button => {
      button.addEventListener('click', e => {
        if (button.classList.contains('semblable-list__button_next')) {
          this.timesRemove()
        }
        if (button.classList.contains('semblable-list__button_prev')) {
          this.timesAdd()
        }
      })
    })
  }

  timesAdd() {
    if (this.times < this.maxLen) {
      this.times++
    }
    console.log(this.times)
    this.slide()
  }

  timesRemove() {
    if (this.times > 0) {
      this.times--
    }
    console.log(this.times)
    this.slide()
  }

  slide() {
    let slideVal = this.times * (271 + 20)
    this.capsules.forEach(capsule => {
      capsule.style.transform = `translateX(-${slideVal}px)`
    })
  }
}
