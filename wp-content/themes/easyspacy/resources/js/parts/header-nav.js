export default class CommentForm {
  static get selector() {
    return '.top'
  }
  constructor(element) {
    this.element = element
    this.buttonElt = document.createElement('button')
    this.container = document.querySelector('.navigation')
    this.searchFormInput = document.querySelector('.search-form__search-input')
    this.isOpen = false
    this.init()
    this.update()
    this.openMenu()
  }
  init() {
    this.buttonElt.className = 'top__menu-button'
    this.buttonElt.textContent = 'Menu'
    //
    this.width = parseFloat(
      window.getComputedStyle(this.element, null).getPropertyValue('width')
    )
    //ecoute au resize
    window.addEventListener('resize', e => {
      this.width = parseFloat(
        window.getComputedStyle(this.element, null).getPropertyValue('width')
      )
      this.update()
      this.openMenu()
    })

    this.buttonElt.addEventListener('click', e => {
      this.isOpen = this.isOpen ? false : true
      this.openMenu()
    })
  }

  update() {
    this.checkWidth()
  }

  checkWidth() {
    if (this.width <= 1000) {
      if (!this.element.classList.contains('top_small')) {
        this.element.classList.add('top_small')
        this.element.insertAdjacentElement('beforeend', this.buttonElt)
        this.searchFormInput.setAttribute('placeholder', 'Rechercher')
      }
    } else {
      if (this.element.contains(this.buttonElt)) {
        this.element.removeChild(this.buttonElt)
      }
      this.element.classList.remove('top_small')
      this.searchFormInput.setAttribute('placeholder', '')

      if (!this.element.classList.contains('top_small')) {
        this.container.style = ''
        document.documentElement.style = ''
      }
    }
  }

  openMenu() {
    if (this.element.classList.contains('top_small')) {
      this.container.style.width = this.isOpen ? '80vw' : '0px'
      this.container.style.opacity = this.isOpen ? '1' : '0'
      document.documentElement.style.overflowY = this.isOpen ? 'hidden' : ''
      document.documentElement.style.position = this.isOpen ? 'fixed' : ''
      document.documentElement.style.width = this.isOpen ? '100vw' : ''
      this.buttonElt.textContent = this.isOpen ? 'Fermer' : 'Menu'
    }
  }
}
