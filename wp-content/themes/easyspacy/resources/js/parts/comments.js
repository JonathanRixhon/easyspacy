export default class Comments {
  static get selector() {
    return '.existing-comments'
  }
  constructor(element) {
    this.element = element
    this.button = document.querySelector('.existing-comments__discover')
    this.init()
  }
  init() {
    this.button.addEventListener('click', e => {
      this.element.classList.toggle('existing-comments_open')
      this.changeTextContent(e)
    })
  }
  changeTextContent(e) {
    let text
    if (this.element.classList.contains('existing-comments_open')) {
      text = 'Masquer les commentaires'
    } else {
      text = 'Lire d’autre commentaires'
    }
    e.target.textContent = text
  }
}
