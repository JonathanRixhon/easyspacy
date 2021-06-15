export default class SortBy {
  static get selector() {
    return '.sort-capsule'
  }
  constructor(element) {
    this.element = element
    this.button = this.element.querySelector('.sort-capsule__submit')
    this.init()
  }
  init() {
    this.element.addEventListener('input', e => {
      this.button.click()
    })
  }
}
