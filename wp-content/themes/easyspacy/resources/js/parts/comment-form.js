export default class CommentForm {
  static get selector() {
    return '#commentform'
  }
  constructor(element) {
    this.element = element
    this.authorInput = element.querySelector('.author')
    this.allInput = this.element.querySelectorAll('input')
    this.eltFirstname = undefined
    this.eltName = undefined
    if (!this.element.classList.contains('comment-form_admin')) {
      this.init()
    }
  }
  init() {
    this.element.addEventListener('input', e => {
      this.adjustValue(e)
    })
  }
  adjustValue(e) {
    if (e.target.classList.contains('comment-form__firstname-input')) {
      this.eltFirstname = e.target.value
    } else if (e.target.classList.contains('comment-form__name-input')) {
      this.eltName = e.target.value
    }
    this.authorInput.value = `${this.eltFirstname} ${this.eltName}`
  }
}
