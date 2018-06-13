<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EasyFood Demo</title>
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="../demos/_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../demos/js/jquery.js"></script>
	<script src="../demos/_assets/js/index.js"></script>
	<script src="../demos/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" class="jqm-header">
		<h2><img src="../demos/_assets/img/jquery-logo.png" alt="jQuery Mobile"></h2>
		<p>Demo 1.0</p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>Demos</h1>

		<p><strong>This is a demo for EasyFood using Allied Wallet as a payment Gateway and JQuery Mobile with php and mysql.</strong></p>

		<img src="../demos/_assets/img/devices.png">

		<p>New to jQuery Mobile? Get started by reading this <a href="intro/" data-ajax="false">introduction</a>. For technical info, visit the <a href="http://api.jquerymobile.com" title="jQuery Mobile API documentation" target="_blank">API documentation</a>. Downloads and info about the project can be found on <a href="http://jquerymobile.com" title="jQuery Mobile web site" target="_blank">jquerymobile.com</a>.</p>

        <div class="ui-grid-a ui-responsive">
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
        			<h3>Pages &amp; Navigation</h3>

        			<p><a href="pages/" data-ajax="false">Pages</a></p>
        			<p><a href="navigation/" data-ajax="false">Navigation</a></p>
        			<p><a href="loader/" data-ajax="false">Loader</a></p>
        			<p><a href="transitions/" data-ajax="false">Transitions</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>CSS Framework</h3>

        			<p><a href="theme-default/" data-ajax="false">Theming</a></p>
        			<p><a href="button-markup/" data-ajax="false">Buttons</a></p>
        			<p><a href="icons/" data-ajax="false">Icons</a></p>
        			<p><a href="grids/" data-ajax="false">Grids</a></p>
        			<p><a href="../body-bar-classes/" data-ajax="false">Body and bar classes</a></p>
        		</div>
        	</div>        	
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
        			<h3>Widgets</h3>

        			<p><a href="toolbar/" data-ajax="false">Toolbar</a>, <a href="navbar/" data-ajax="false">Navbar</a></p>
        			<p><a href="tabs/" data-ajax="false">Tabs</a>, <a href="panel/" data-ajax="false">Panel</a>, <a href="popup/" data-ajax="false">Popup</a></p>
        			<p><a href="listview/" data-ajax="false">Listview</a></p>
        			<p><a href="collapsible/" data-ajax="false">Collapsible</a>, <a href="collapsibleset/" data-ajax="false">Collapsible set</a></p>
        			<p><a href="table-reflow/" data-ajax="false">Table Reflow</a>, <a href="table-column-toggle/" data-ajax="false">Table Column Toggle</a></p>
        			<p><a href="filterable/" data-ajax="false">Filterable</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>Form widgets</h3>

        			<p><a href="checkboxradio-checkbox/" data-ajax="false">Checkboxes</a>, <a href="checkboxradio-radio/" data-ajax="false">Radio buttons</a></p>
        			<p><a href="selectmenu/" data-ajax="false">Selectmenu</a>, <a href="selectmenu-custom/" data-ajax="false">Custom menu</a></p>
        			<p><a href="flipswitch/" data-ajax="false">Flipswitch</a></p>
        			<p><a href="slider/" data-ajax="false">Slider</a>, <a href="rangeslider/" data-ajax="false">Rangeslider</a></p>
        			<p><a href="button/" data-ajax="false">Input button</a></p>
        			<p><a href="controlgroup/" data-ajax="false">Controlgroup</a></p>
        		</div>
        	</div>
        </div>

	</div><!-- /content -->
	    <div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
	    	<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="demos homepage" data-icon="home"><a href=".././">Home</a></li>
<li data-filtertext="introduction overview getting started"><a href="../intro/" data-ajax="false">Introduction</a></li>
<li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="../button-markup/" data-ajax="false">Buttons</a></li>
<li data-filtertext="form button widget input button submit reset"><a href="../button/" data-ajax="false">Button widget</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Checkboxradio widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="../checkboxradio-checkbox/" data-ajax="false">Checkboxes</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="../checkboxradio-radio/" data-ajax="false">Radio buttons</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Collapsible (set) widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="collapsibles content formatting"><a href="../collapsible/" data-ajax="false">Collapsible</a></li>
			<li data-filtertext="dynamic collapsible set accordion append expand"><a href="../collapsible-dynamic/" data-ajax="false">Dynamic collapsibles</a></li>
			<li data-filtertext="accordions collapsible set widget content formatting grouped collapsibles"><a href="../collapsibleset/" data-ajax="false">Collapsible set</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Controlgroup widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical"><a href="../controlgroup/" data-ajax="false">Controlgroup</a></li>
			<li data-filtertext="dynamic controlgroup dynamically add buttons"><a href="../controlgroup-dynamic/" data-ajax="false">Dynamic controlgroups</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="form datepicker widget date input"><a href="../datepicker/" data-ajax="false">Datepicker</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Events<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="swipe to delete list items listviews swipe events"><a href="../swipe-list/" data-ajax="false">Swipe list items</a></li>
			<li data-filtertext="swipe to navigate swipe page navigation swipe events"><a href="../swipe-page/" data-ajax="false">Swipe page navigation</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="filterable filter elements sorting searching listview table"><a href="../filterable/" data-ajax="false">Filterable widget</a></li>
<li data-filtertext="form flipswitch widget flip toggle switch binary select checkbox input"><a href="../flipswitch/" data-ajax="false">Flipswitch widget</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Forms<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../forms/" data-ajax="false">Forms</a></li>
			<li data-filtertext="form hide labels hidden accessible ui-hidden-accessible forms"><a href="../forms-label-hidden-accessible/" data-ajax="false">Hide labels</a></li>
			<li data-filtertext="form field containers fieldcontain ui-field-contain forms"><a href="../forms-field-contain/" data-ajax="false">Field containers</a></li>
			<li data-filtertext="forms disabled form elements"><a href="../forms-disabled/" data-ajax="false">Forms disabled</a></li>
			<li data-filtertext="forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../forms-gallery/" data-ajax="false">Forms gallery</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Grids<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="grids columns blocks content formatting rwd responsive css framework"><a href="../grids/" data-ajax="false">Grids</a></li>
			<li data-filtertext="buttons in grids css framework"><a href="../grids-buttons/" data-ajax="false">Buttons in grids</a></li>
			<li data-filtertext="custom responsive grids rwd css framework"><a href="../grids-custom-responsive/" data-ajax="false">Custom responsive grids</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="blocks content formatting sections heading"><a href="../body-bar-classes/" data-ajax="false">Grouping and dividing content</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Icons<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="button icons svg disc alt custom icon position"><a href="../icons/" data-ajax="false">Icons</a></li>
			<li data-filtertext=""><a href="../icons-grunticon/" data-ajax="false">Grunticon loader</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Listview widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="listview widget thumbnails icons nested split button collapsible ul ol"><a href="../listview/" data-ajax="false">Listview</a></li>
			<li data-filtertext="autocomplete filterable reveal listview filtertextbeforefilter placeholder"><a href="../listview-autocomplete/" data-ajax="false">Listview autocomplete</a></li>
			<li data-filtertext="autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder"><a href="../listview-autocomplete-remote/" data-ajax="false">Listview autocomplete remote data</a></li>
			<li data-filtertext="autodividers anchor jump scroll linkbars listview lists ul ol"><a href="../listview-autodividers-linkbar/" data-ajax="false">Listview autodividers linkbar</a></li>
			<li data-filtertext="listview autodividers selector autodividersselector lists ul ol"><a href="../listview-autodividers-selector/" data-ajax="false">Listview autodividers selector</a></li>
			<li data-filtertext="listview nested list items"><a href="../listview-nested-lists/" data-ajax="false">Nested Listviews</a></li>
			<li data-filtertext="listview collapsible list items flat"><a href="../listview-collapsible-item-flat/" data-ajax="false">Listview collapsible list items (flat)</a></li>
			<li data-filtertext="listview collapsible list indented"><a href="../listview-collapsible-item-indented/" data-ajax="false">Listview collapsible list items (indented)</a></li>
			<li data-filtertext="grid listview responsive grids responsive listviews lists ul"><a href="../listview-grid/" data-ajax="false">Listview responsive grid</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="loader widget page loading navigation overlay spinner"><a href="../loader/" data-ajax="false">Loader widget</a></li>
<li data-filtertext="navbar widget navmenu toolbars header footer"><a href="../navbar/" data-ajax="false">Navbar widget</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Navigation<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="ajax navigation navigate widget history event method"><a href="../navigation/" data-ajax="false">Navigation</a></li>
			<li data-filtertext="linking pages page links navigation ajax prefetch cache"><a href="../navigation-linking-pages/" data-ajax="false">Linking pages</a></li>
			<!-- <li data-filtertext="php redirect server redirection server-side navigation"><a href="../navigation-php-redirect/" data-ajax="false">PHP redirect demo</a></li>-->
			<li data-filtertext="navigation redirection hash query"><a href="../navigation-hash-processing/" data-ajax="false">Hash processing demo</a></li>
			<li data-filtertext="navigation redirection hash query"><a href="../page-events/" data-ajax="false">Page Navigation Events</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Pages<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="pages page widget ajax navigation"><a href="../pages/" data-ajax="false">Pages</a></li>
			<li data-filtertext="single page"><a href="../pages-single-page/" data-ajax="false">Single page</a></li>
			<li data-filtertext="multipage multi-page page"><a href="../pages-multi-page/" data-ajax="false">Multi-page template</a></li>
			<li data-filtertext="dialog page widget modal popup"><a href="../pages-dialog/" data-ajax="false">Dialog page</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Panel widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="panel widget sliding panels reveal push overlay responsive"><a href="../panel/" data-ajax="false">Panel</a></li>
			<li data-filtertext=""><a href="../panel-external/" data-ajax="false">External panels</a></li>
			<li data-filtertext="panel "><a href="../panel-fixed/" data-ajax="false">Fixed panels</a></li>
			<li data-filtertext="panel slide panels sliding panels shadow rwd responsive breakpoint"><a href="../panel-responsive/" data-ajax="false">Panels responsive</a></li>
			<li data-filtertext="panel custom style custom panel width reveal shadow listview panel styling page background wrapper"><a href="../panel-styling/" data-ajax="false">Custom panel style</a></li>
			<li data-filtertext="panel open on swipe"><a href="../panel-swipe-open/" data-ajax="false">Panel open on swipe</a></li>
			<li data-filtertext="panels outside page internal external toolbars"><a href="../panel-external-internal/" data-ajax="false">Panel external and internal</a></li>
		</ul>
	</div>
</li>





		     </ul>
		</div><!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2018 Allied Wallet Demo</p>
	</div><!-- /footer -->
	<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
    <div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
		<div class="jqm-search">
			<ul class="jqm-list" data-filter-placeholder="Search demos..." data-filter-reveal="true">
<li data-filtertext="demos homepage" data-icon="home"><a href=".././">Home</a></li>
<li data-filtertext="introduction overview getting started"><a href="../intro/" data-ajax="false">Introduction</a></li>
<li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="../button-markup/" data-ajax="false">Buttons</a></li>
<li data-filtertext="form button widget input button submit reset"><a href="../button/" data-ajax="false">Button widget</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
		    Checkboxradio widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="form checkboxradio widget checkbox input checkboxes controlgroups"><a href="../checkboxradio-checkbox/" data-ajax="false">Checkboxes</a></li>
			<li data-filtertext="form checkboxradio widget radio input radio buttons controlgroups"><a href="../checkboxradio-radio/" data-ajax="false">Radio buttons</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Collapsible (set) widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="collapsibles content formatting"><a href="../collapsible/" data-ajax="false">Collapsible</a></li>
			<li data-filtertext="dynamic collapsible set accordion append expand"><a href="../collapsible-dynamic/" data-ajax="false">Dynamic collapsibles</a></li>
			<li data-filtertext="accordions collapsible set widget content formatting grouped collapsibles"><a href="../collapsibleset/" data-ajax="false">Collapsible set</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Controlgroup widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical"><a href="../controlgroup/" data-ajax="false">Controlgroup</a></li>
			<li data-filtertext="dynamic controlgroup dynamically add buttons"><a href="../controlgroup-dynamic/" data-ajax="false">Dynamic controlgroups</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="form datepicker widget date input"><a href="../datepicker/" data-ajax="false">Datepicker</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Events<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="swipe to delete list items listviews swipe events"><a href="../swipe-list/" data-ajax="false">Swipe list items</a></li>
			<li data-filtertext="swipe to navigate swipe page navigation swipe events"><a href="../swipe-page/" data-ajax="false">Swipe page navigation</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="filterable filter elements sorting searching listview table"><a href="../filterable/" data-ajax="false">Filterable widget</a></li>
<li data-filtertext="form flipswitch widget flip toggle switch binary select checkbox input"><a href="../flipswitch/" data-ajax="false">Flipswitch widget</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Forms<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../forms/" data-ajax="false">Forms</a></li>
			<li data-filtertext="form hide labels hidden accessible ui-hidden-accessible forms"><a href="../forms-label-hidden-accessible/" data-ajax="false">Hide labels</a></li>
			<li data-filtertext="form field containers fieldcontain ui-field-contain forms"><a href="../forms-field-contain/" data-ajax="false">Field containers</a></li>
			<li data-filtertext="forms disabled form elements"><a href="../forms-disabled/" data-ajax="false">Forms disabled</a></li>
			<li data-filtertext="forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../forms-gallery/" data-ajax="false">Forms gallery</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Grids<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="grids columns blocks content formatting rwd responsive css framework"><a href="../grids/" data-ajax="false">Grids</a></li>
			<li data-filtertext="buttons in grids css framework"><a href="../grids-buttons/" data-ajax="false">Buttons in grids</a></li>
			<li data-filtertext="custom responsive grids rwd css framework"><a href="../grids-custom-responsive/" data-ajax="false">Custom responsive grids</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="blocks content formatting sections heading"><a href="../body-bar-classes/" data-ajax="false">Grouping and dividing content</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Icons<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="button icons svg disc alt custom icon position"><a href="../icons/" data-ajax="false">Icons</a></li>
			<li data-filtertext=""><a href="../icons-grunticon/" data-ajax="false">Grunticon loader</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Listview widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="listview widget thumbnails icons nested split button collapsible ul ol"><a href="../listview/" data-ajax="false">Listview</a></li>
			<li data-filtertext="autocomplete filterable reveal listview filtertextbeforefilter placeholder"><a href="../listview-autocomplete/" data-ajax="false">Listview autocomplete</a></li>
			<li data-filtertext="autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder"><a href="../listview-autocomplete-remote/" data-ajax="false">Listview autocomplete remote data</a></li>
			<li data-filtertext="autodividers anchor jump scroll linkbars listview lists ul ol"><a href="../listview-autodividers-linkbar/" data-ajax="false">Listview autodividers linkbar</a></li>
			<li data-filtertext="listview autodividers selector autodividersselector lists ul ol"><a href="../listview-autodividers-selector/" data-ajax="false">Listview autodividers selector</a></li>
			<li data-filtertext="listview nested list items"><a href="../listview-nested-lists/" data-ajax="false">Nested Listviews</a></li>
			<li data-filtertext="listview collapsible list items flat"><a href="../listview-collapsible-item-flat/" data-ajax="false">Listview collapsible list items (flat)</a></li>
			<li data-filtertext="listview collapsible list indented"><a href="../listview-collapsible-item-indented/" data-ajax="false">Listview collapsible list items (indented)</a></li>
			<li data-filtertext="grid listview responsive grids responsive listviews lists ul"><a href="../listview-grid/" data-ajax="false">Listview responsive grid</a></li>
		</ul>
	</div>
</li>
<li data-filtertext="loader widget page loading navigation overlay spinner"><a href="../loader/" data-ajax="false">Loader widget</a></li>
<li data-filtertext="navbar widget navmenu toolbars header footer"><a href="../navbar/" data-ajax="false">Navbar widget</a></li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Navigation<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="ajax navigation navigate widget history event method"><a href="../navigation/" data-ajax="false">Navigation</a></li>
			<li data-filtertext="linking pages page links navigation ajax prefetch cache"><a href="../navigation-linking-pages/" data-ajax="false">Linking pages</a></li>
			<!-- <li data-filtertext="php redirect server redirection server-side navigation"><a href="../navigation-php-redirect/" data-ajax="false">PHP redirect demo</a></li>-->
			<li data-filtertext="navigation redirection hash query"><a href="../navigation-hash-processing/" data-ajax="false">Hash processing demo</a></li>
			<li data-filtertext="navigation redirection hash query"><a href="../page-events/" data-ajax="false">Page Navigation Events</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Pages<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="pages page widget ajax navigation"><a href="../pages/" data-ajax="false">Pages</a></li>
			<li data-filtertext="single page"><a href="../pages-single-page/" data-ajax="false">Single page</a></li>
			<li data-filtertext="multipage multi-page page"><a href="../pages-multi-page/" data-ajax="false">Multi-page template</a></li>
			<li data-filtertext="dialog page widget modal popup"><a href="../pages-dialog/" data-ajax="false">Dialog page</a></li>
		</ul>
	</div>
</li>
<li data-role="collapsible" data-enhanced="true" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false" class="ui-collapsible ui-collapsible-themed-content ui-collapsible-collapsed">
	<h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
		<a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-carat-d">
			Panel widget<span class="ui-collapsible-heading-status"> click to expand contents</span>
		</a>
	</h3>
	<div class="ui-collapsible-content ui-body-inherit ui-collapsible-content-collapsed" aria-hidden="true">
		<ul>
			<li data-filtertext="panel widget sliding panels reveal push overlay responsive"><a href="../panel/" data-ajax="false">Panel</a></li>
			<li data-filtertext=""><a href="../panel-external/" data-ajax="false">External panels</a></li>
			<li data-filtertext="panel "><a href="../panel-fixed/" data-ajax="false">Fixed panels</a></li>
			<li data-filtertext="panel slide panels sliding panels shadow rwd responsive breakpoint"><a href="../panel-responsive/" data-ajax="false">Panels responsive</a></li>
			<li data-filtertext="panel custom style custom panel width reveal shadow listview panel styling page background wrapper"><a href="../panel-styling/" data-ajax="false">Custom panel style</a></li>
			<li data-filtertext="panel open on swipe"><a href="../panel-swipe-open/" data-ajax="false">Panel open on swipe</a></li>
			<li data-filtertext="panels outside page internal external toolbars"><a href="../panel-external-internal/" data-ajax="false">Panel external and internal</a></li>
		</ul>
	</div>
</li>







			</ul>
		</div>
	</div><!-- /panel -->


</div><!-- /page -->

</body>
</html>

