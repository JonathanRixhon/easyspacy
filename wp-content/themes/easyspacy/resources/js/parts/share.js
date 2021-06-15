export default class Share {
  static get selector() {
    return '.actions__item_share'
  }
  constructor(element) {
    this.element = element
    this.button = this.element.querySelector('.actions__link_share')
    this.wrapper = this.element.querySelector('.action-share')
    this.init()
  }
  init() {
    document.addEventListener('click', e => this.bodyclick(e))
    this.button.addEventListener('focus', e => this.open(e))
    document.addEventListener('focusin', e => this.bodyclick(e))
  }
  bodyclick(e) {
    if (e.target === this.button || this.wrapper.contains(e.target)) {
      return
    }
    this.close()
  }
  open() {
    if (!this.wrapper.classList.contains('action-share_open')) {
      this.wrapper.classList.add('action-share_open')
    }
  }
  close() {
    if (this.wrapper.classList.contains('action-share_open')) {
      this.wrapper.classList.remove('action-share_open')
    }
  }
}
