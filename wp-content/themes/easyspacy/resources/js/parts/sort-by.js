export default class SortBy {
  static get selector() {
    return '.sort-capsule'
  }
  constructor(element) {
    this.xhr = this.httpRequestInit()
    window.addEventListener('click', e => {
      this.redirect()
    })
  }
  httpRequestInit() {
    let httpRequest = false
    if (window.XMLHttpRequest) {
      // Mozilla, Safari,...
      httpRequest = new XMLHttpRequest()
      if (httpRequest.overrideMimeType) {
        httpRequest.overrideMimeType('text/xml')
      }
    } else if (window.ActiveXObject) {
      // IE
      try {
        httpRequest = new ActiveXObject('Msxml2.XMLHTTP')
      } catch (e) {
        try {
          httpRequest = new ActiveXObject('Microsoft.XMLHTTP')
        } catch (e) {}
      }
    }
    if (!httpRequest) {
      alert('Abandon :( Impossible de créer une instance XMLHTTP')
      return false
    }

    return httpRequest
  }

  redirect() {
    this.xhr.onreadystatechange = () => {
      if (this.xhr.readyState === 4) {
        console.log(this.xhr.responseText)
      }
    }
    this.xhr.open('GET', '', true)
    // On envoit un header pour indiquer au serveur que la page est appellée en Ajax
    this.xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest')
    // On lance la requête
    this.xhr.send()
  }
}
