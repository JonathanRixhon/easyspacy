import Pluton from 'whitecube-pluton'
class Easyspacy {
  constructor() {
    //TODO: complèter le constructor
    document.documentElement.classList.add('js-enabled')
  }
  load() {
    //initialiser pluton. Ça le charge
    this.pluton = new Pluton()
  }
}

window.addEventListener('load', e => {
  window.easyspacy = new Easyspacy()
  window.easyspacy.load()
})
