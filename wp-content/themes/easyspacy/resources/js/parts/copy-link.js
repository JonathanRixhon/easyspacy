export default class CopyLink {
  static get selector() {
    return '.copy-link'
  }
  constructor(element) {
    element.addEventListener('click', e => {
      this.copyToClipboard(this.getUrl())
    })
  }
  getUrl() {
    return window.location.href
  }
  copyToClipboard(url) {
    let elt = document.createElement('textarea')
    elt.value = url
    //faire en sorte que le text aria input soir invisible
    elt.classList.add('sro')
    elt.setAttribute('aria-hidden', 'true')
    //ajouter l'elt au body, le sélectionner et le copier
    document.body.appendChild(elt)
    elt.select()
    document.execCommand('copy')
    document.body.removeChild(elt)
  }
}
