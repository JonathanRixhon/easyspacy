export default class Test {
  static get selector() {
    return '.capsule'
  }
  constructor(element) {
    element.addEventListener('click', e => {
      console.log('cliqué !')
    })
  }
}
