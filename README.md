# OK Expanding Panel

Once applied to your website, the Open Knowledge Foundation Ribbon will look like this:

![Screenshot](http://okfnlabs.org/ok-panel/screenshot.png)

##Usage

### Prerequisites

 * JQuery
 
### CSS

Add the below code to the `<head>` section of your webpage, to include a small stylesheet:
```html
<link rel="stylesheet" href="//okfnlabs.org/ok-panel/assets/css/frontend.css"/>
```

### JavaScript

Add the below JavaScript:
```html
<script src="//okfnlabs.org/ok-panel/assets/js/frontend.js" type="text/javascript"></script>
```

### HTML

Lastly, there is the HTML. Where and how you add this depends slightly on your website, but the are two basic options.

#### Fixed Position (TODO)

This is probably the most straightforward method, just add the following snippet immediately after the opening `<body>` tag:

```html
<div class="fixed-ok-panel"><div id="ok-panel" class="closed"><iframe src="//assets.okfn.org/themes/okfn/okf-panel.html" scrolling="no"></iframe></div><a class="ok-ribbon" href="https://okfn.org/"><img src="//okfnlabs.org/ok-panel/assets/images/ok-ribbon.png" alt="Open Knowledge"></a></div>
```
**Note:** this will cause the ribbon to appear in front of whatever is on the page. To avoid this, see below method.

#### Relative Position

This will add the ribbon into the flow of the document. First add the following immediately after the opening `<body>` tag:

```html
<div id="ok-panel" class="closed"><iframe src="//assets.okfn.org/themes/okfn/okf-panel.html" scrolling="no"></iframe></div>
```

Then add this where you want the ribbon to appear (should be near the top of the page):

```html
<a class="ok-ribbon" href="https://okfn.org/"><img src="//okfnlabs.org/ok-panel/assets/images/ok-ribbon.png" alt="Open Knowledge"></a>
```
