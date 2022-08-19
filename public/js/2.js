var r = {};
function D(v) { this['version'] = v; }
try { r["jQuery"] = new D(jQuery.fn.jquery); } catch(e) {}
try { r["jQuery UI"] = new D(jQuery.ui.version); } catch(e) {}
try { r["Vue"] = new D(Vue.version); } catch(e) {}
try { r["React"] = JSON.stringify(window.__REACT_DEVTOOLS_GLOBAL_HOOK__._renderers).match(/"version"\:"([\d\.]+)"/)[1]; } catch(e) {}
try { r["Angular"] = new D($('[ng-version]').getAttribute('ng-version')) } catch(e) {}
try { r["AngularJS"] = new D(angular.version.full) } catch(e) {}
try { r["Babel"] = new D(Babel.version) } catch(e) {}
try { r["lodash"] = new D(_.VERSION) } catch(e) {}
try { r["Moment.js"] = new D(moment.version) } catch(e) {}
try { r["Backbone.js"] = new D(Backbone.VERSION) } catch(e) {}
try { r["Riot.js"] = new D(riot.version) } catch(e) {}
try { r["Knockout.js"] = new D(ko.version) } catch(e) {}
try { r["D3.js"] = new D(d3.version) } catch(e) {}
try { r["Polymer"] = new D(Polymer.version) } catch(e) {}
console.table(r);