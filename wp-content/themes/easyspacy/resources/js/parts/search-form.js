export default class SearchForm {
  static get selector() {
    return '.search-form'
  }
  constructor(element) {
    //init
    this.searchForm = element
    this.searchInput = this.searchForm.querySelector(
      '.search-form__search-input'
    )

    document.addEventListener('click', e => this.bodyclick(e))
    this.searchForm.addEventListener('click', e => this.open())
    this.searchInput.addEventListener('focusin', e => this.open())
    this.searchInput.addEventListener('focusout', e => this.close())
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
}
