export default class CommentForm {
  static get selector() {
    return '#commentform'
  }
  constructor(element) {
    let eltFirstname, eltName
    this.authorInput = element.querySelector('.author')
    element.addEventListener('input', e => {
      if (e.target.classList.contains('comment-form__firstname-input')) {
        eltFirstname = e.target.value
      } else if (e.target.classList.contains('comment-form__name-input')) {
        eltName = e.target.value
      }
      this.authorInput.value = `${eltFirstname} ${eltName}`
    })
  }
}
