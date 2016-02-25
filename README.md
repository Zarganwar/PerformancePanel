# PerformancePanel
[![Build Status](https://travis-ci.org/Zarganwar/PerformancePanel.svg?branch=master)](https://travis-ci.org/Zarganwar/PerformancePanel)

Performance panel ([Nette/Tracy](https://github.com/nette/tracy)) 

![](http://i57.tinypic.com/ot234i.png)

##Installation
<pre><code>
composer require zarganwar/performance-panel
</code></pre>

##Registration
Example: instalation in Nette FW
<pre><code>
nette:
	debugger:
		bar:
			- Zarganwar\PerformancePanel\Panel
</code></pre>
##Usage
<pre><code>
Zarganwar\PerformancePanel\Register::add('A');
Zarganwar\PerformancePanel\Register::add('B');
Zarganwar\PerformancePanel\Register::add('C', 'B'); 
Zarganwar\PerformancePanel\Register::add('D');
</code></pre>
