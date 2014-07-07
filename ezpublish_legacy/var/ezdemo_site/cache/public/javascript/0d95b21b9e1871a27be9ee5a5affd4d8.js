
YUI.add('ezfindautocomplete', function (Y) {
"use strict";
Y.namespace('eZ');
function initAutoComplete(conf) {
var ds = new Y.DataSource.IO({
source: conf.url
});
Y.one(conf.inputSelector).plug(Y.Plugin.AutoComplete, {
maxResults: conf.resultLimit,
minQueryLength: conf.minQueryLength,
resultHighlighter: 'phraseMatch',
resultTextLocator:  function (result) {
return result[0];
},
source: ds,
requestTemplate: "::{query}::" + conf.resultLimit + "?ContentType=json",
resultListLocator: function (response) {
if (response && response[0] && response[0].responseText){
return Y.JSON.parse(response[0].responseText).content;
} else {
return [];
}
}
});
}
Y.eZ.initAutoComplete = initAutoComplete;
}, '1.0.0', {
requires: [
'autocomplete', 'autocomplete-highlighters', 'datasource-io', 'json-parse'
]
});
