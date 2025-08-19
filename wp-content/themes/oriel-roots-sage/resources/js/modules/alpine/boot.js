import Alpine from './core.js';

export function bootAlpineOnce(...registerFns) {
  // register just the factories this block needs
  registerFns.flat().forEach(fn => fn && fn(Alpine));

  // start Alpine exactly once
  if (!window.__alpineBooted) {
    window.Alpine = Alpine;
    Alpine.start();
    window.__alpineBooted = true;
  }
}

export { Alpine };
