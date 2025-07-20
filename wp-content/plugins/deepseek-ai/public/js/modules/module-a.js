import $ from 'jquery';

export default class ModuleA {
  constructor() {
    this.init();
  }

  init() {
    $(document).ready(() => {
      console.log('🚀 [ModuleA] Instance created, init() called.');
      this.events();
    });
  }

  events() {
    console.log('✨ [ModuleA] events() running');
    this.sayHello('world');
  }

  sayHello(who) {
    console.log(`👋 Hello, ${who}!`);
  }
}
