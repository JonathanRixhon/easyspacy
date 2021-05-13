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
    this.searchForm.addEventListener('click', e => this.open(e))
  }

  bodyclick(e) {
    if (e.target === this.searchForm || this.searchForm.contains(e.target)) {
      return
    }
    if (this.searchInput.classList.contains('focused')) {
      e.preventDefault()
      this.searchInput.classList.remove('focused')
    }
  }
  open() {
    if (!this.searchInput.classList.contains('focused')) {
      console.log('ouvert')
      this.searchInput.classList.add('focused')
    }
  }
}
