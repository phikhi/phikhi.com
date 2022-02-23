window.axios = require('axios');
// import Vue from 'vue';
// import Search from './components/Search.vue';
import hljs from 'highlight.js/lib/core';

// Syntax highlighting
hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

// Vue.config.productionTip = false;

// new Vue({
//     components: {
//         Search,
//     },
// }).$mount('#vue-search');

document.querySelector('#mlink').innerHTML = window.atob('PGEgaHJlZj0ibWFpbHRvOmhlbGxvQHBoaWtoaS5jb20/c3ViamVjdD1TYXklMjBIaSUyMSZib2R5PUhlbGxvJTIwUGhpbCUyQyUwQSUwQUklMjBnb3QlMjBhJTIwcXVpY2slMjBxdWVzdGlvbiUyMGZvciUyMHlvdS4uLiUwQSUwQSUwQSUwQSIgY2xhc3M9InVuZGVybGluZSBkZWNvcmF0aW9uLWRhc2hlZCI+aGVsbG9AcGhpa2hpLmNvbTwvYT4=');
