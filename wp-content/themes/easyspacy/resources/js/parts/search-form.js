export default class SearchForm {
  static get selector() {
    return '.search-form'
  }
  constructor(element) {
    this.searchForm = element
    this.button = this.searchForm.querySelector('.search-form__submit')
    this.searchInput = this.searchForm.querySelector(
      '.search-form__search-input'
    )
    this.init()
  }
  init() {
    if (!document.querySelector('.top').classList.contains('top_small')) {
      this.button.disabled = true
    } else {
      this.button.disabled = false
    }
    this.listeners()
  }
  listeners() {
    window.addEventListener('resize', e => {
      if (!document.querySelector('.top').classList.contains('top_small')) {
        this.button.disabled = true
      } else {
        this.button.disabled = false
      }
    })

    document.addEventListener('click', e => this.bodyclick(e))
    this.searchForm.addEventListener('click', e => this.open())
    this.searchInput.addEventListener('focus', e => this.open())
    this.searchForm.addEventListener('transitionend', e =>
      this.manageDisable(e)
    )
  }

  bodyclick(e) {
    if (e.target === this.searchForm || this.searchForm.contains(e.target)) {
      return
    }
    this.close()
  }
  open() {
    if (!this.searchForm.classList.contains('focused')) {
      this.searchForm.classList.add('focused')
    }
  }
  close() {
    if (this.searchForm.classList.contains('focused')) {
      this.searchForm.classList.remove('focused')
    }
  }
  manageDisable(e) {
    if (!document.querySelector('.top').classList.contains('top_small')) {
      if (e.elapsedTime === 0.5) {
        this.button.disabled = this.button.disabled ? false : true
      }
    }
  }
}
