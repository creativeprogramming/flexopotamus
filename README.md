# A responsive, small screen first WordPress starter theme based on Twenty-Eleven.
Flexopotamus is a parent theme for developers that need an good mobile friendly starting point. All styles before media queries are tuned for small screens. The theme comes packaged with [FitVidsjs](http://fitvidsjs.com/) and a custom build of  [Modernizr](http://www.modernizr.com/). Custom Modernizr detects for audio, video, flexbox, touch and also contains [Respond.js](https://github.com/scottjehl/Respond).

## Flexopotamus Features ##
Flexopotomus takes the Twenty-Eleven theme to a more progressively enhanced approach. Notable features are:

* Toggle sliding search and menu at small screen sizes
* Click events for menu items on touch devices
* Looks good in old mobile browsers that don't understand media queries
* Media queries support for IE8 and later with javascript (defaults to single column layout without js)


## Create a child theme ##
You can edit the flexopotamus theme to fit your needs or create a child theme if that's your thing. Create a directory in the themes folder alongside the Flexopotamus parent theme and add a <code>style.css</code> file. Initialize the child theme and copy over the Flexopotamus css:

<pre>
/*
	Theme Name: your child theme
	Theme URL: http://urlhere.com
	Description: Custom theme created for url.com.
	Author: Your Name
	Version: 1.0
	
	Template: Flexopotamus
*/

// Copy and paste the css code in flexopotamus/style.css here and edit to your liking. 

</pre>