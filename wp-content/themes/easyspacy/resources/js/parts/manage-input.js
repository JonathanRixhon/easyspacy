export default class CommentForm {
  static get selector() {
    return '.form-js'
  }
  constructor(element) {
    this.element = element
    this.allInput = this.element.querySelectorAll('input')
    this.txtAreaElt = this.element.querySelector('textarea')
    this.allInput = Array.from(this.allInput)
    this.init()
  }

  init() {
    this.allInput.push(this.txtAreaElt)
    //Gestion des index si il y a quelque chose
    this.allInput.forEach(input => {
      this.manageIndex(input)
      input.addEventListener('input', e => {
        this.manageIndex(e.target)
      })
    })
  }
  manageIndex(input) {
    console.log(input)
    if (input.value) {
      input.style.zIndex = '1'
    }
    if (!input.value) {
      input.style = ''
    }
  }
}
