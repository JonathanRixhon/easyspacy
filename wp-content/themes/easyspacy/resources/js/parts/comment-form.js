export default class CommentForm {
  static get selector() {
    return '#commentform'
  }
  constructor(element) {
    this.element = element
    this.authorInput = element.querySelector('.author')
    this.allInput = this.element.querySelectorAll('input')
    this.txtAreaElt = this.element.querySelector('.comment-form__message-input')
    this.eltFirstname = undefined
    this.eltName = undefined
    this.init()
  }

  init() {
    this.allInput = Array.from(this.allInput)
    this.allInput.push(this.txtAreaElt)
    //Gestion du input hidden
    this.element.addEventListener('input', e => {
      this.adjustValue(e)
    })
    //Gestion des index si il y a quelque chose
    this.allInput.forEach(input => {
      input.addEventListener('input', e => {
        this.manageIndex(e.target)
      })
    })
  }

  manageIndex(input) {
    if (input.value) {
      input.style.zIndex = '1'
    }
    if (!input.value) {
      input.style = ''
    }
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
