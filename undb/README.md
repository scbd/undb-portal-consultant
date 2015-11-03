# UNDB portal
## CSS ({less})
The CSS file is compiled using less. The file has a table of content on the top:
```
// Table of content
// Each section starts with /* NAME */ and ends with /* ///NAME */

// - RESET
// - VARIABLES
// - MIXINS and FUNCTIONS
// - TOPBAR
// - HEADER
// - MENU
// - MISC
// - FOOTER
// - HOME
// - ACTIONS
// - FORMS
// - RESPONSIVE

```
### How to use {less}
- Install node.js
- Open a terminal in this folder
- Run *npm install* (package.js have everything needed)
- Run *grunt*

grunt will now watch for any changes in the style.less file and compile it to style.css

## Javascript
A single, simple and commented script.js file is used. Sections are highlighted the same way as in CSS:

`// Each section starts with /* NAME */ and ends with /* ///NAME */`

## Libraries used
- Bootstrap (css/js)
- jQuery (js)
- Slick (css/js)
- Bootstrap select (css/js)
Version 1.6.5 max. So far ( up to 1.7.5 as of the timing of writing this ) all the versions after 1.6.5 have a bug where the select box doesn't close on mobile when touching outside.
