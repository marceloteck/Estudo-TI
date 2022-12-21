<h1>Modal</h1>

<p>Use Bootstrap&rsquo;s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>

<p><a href="https://srv.carbonads.net/ads/click/x/GTND42JUC6SDC5QMF6Y4YKQNCAYIK5QUFTAD4Z3JCYSI6KQNCTBIV5QKCK7IT537C6BDEK7JCE7IL5QNCTYICKJKC6SD5KQNCEBIKK3EHJNCLSIZ?segment=placement:getbootstrapcom;" rel="noopener sponsored" target="_blank"><img alt="ads via Carbon" src="https://cdn4.buysellads.net/uu/1/126868/1670623817-Frontend-Masters.png" style="height:100px; width:130px" /></a><a href="https://srv.carbonads.net/ads/click/x/GTND42JUC6SDC5QMF6Y4YKQNCAYIK5QUFTAD4Z3JCYSI6KQNCTBIV5QKCK7IT537C6BDEK7JCE7IL5QNCTYICKJKC6SD5KQNCEBIKK3EHJNCLSIZ?segment=placement:getbootstrapcom;" rel="noopener sponsored" target="_blank">Free access to 5 Frontend Masters courses! Sign up and advance your JavaScript skills. No credit card required</a><a href="http://carbonads.net/?utm_source=getbootstrapcom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" rel="noopener sponsored" target="_blank">ads via Carbon</a></p>

<p><strong>On this page</strong></p>

<hr />
<ul>
	<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#how-it-works">How it works</a></li>
	<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#examples">Examples</a>
	<ul>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#modal-components">Modal components</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#live-demo">Live demo</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#static-backdrop">Static backdrop</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#scrolling-long-content">Scrolling long content</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#vertically-centered">Vertically centered</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#tooltips-and-popovers">Tooltips and popovers</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#using-the-grid">Using the grid</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#varying-modal-content">Varying modal content</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#toggle-between-modals">Toggle between modals</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#change-animation">Change animation</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#remove-animation">Remove animation</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#dynamic-heights">Dynamic heights</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#accessibility">Accessibility</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#embedding-youtube-videos">Embedding YouTube videos</a></li>
	</ul>
	</li>
	<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#optional-sizes">Optional sizes</a></li>
	<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#fullscreen-modal">Fullscreen Modal</a></li>
	<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#css">CSS</a>
	<ul>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#variables">Variables</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#sass-variables">Sass variables</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#loop">Loop</a></li>
	</ul>
	</li>
	<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#usage">Usage</a>
	<ul>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#via-data-attributes">Via data attributes</a>
		<ul>
			<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#toggle">Toggle</a></li>
			<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#dismiss">Dismiss</a></li>
		</ul>
		</li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#via-javascript">Via JavaScript</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#options">Options</a></li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#methods">Methods</a>
		<ul>
			<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#passing-options">Passing options</a></li>
		</ul>
		</li>
		<li><a href="https://getbootstrap.com/docs/5.2/components/modal/#events">Events</a></li>
	</ul>
	</li>
</ul>

<h2>How it works&nbsp;</h2>

<p>Before getting started with Bootstrap&rsquo;s modal component, be sure to read the following as our menu options have recently changed.</p>

<ul>
	<li>Modals are built with HTML, CSS, and JavaScript. They&rsquo;re positioned over everything else in the document and remove scroll from the&nbsp;&nbsp;so that modal content scrolls instead.</li>
	<li>Clicking on the modal &ldquo;backdrop&rdquo; will automatically close the modal.</li>
	<li>Bootstrap only supports one modal window at a time. Nested modals aren&rsquo;t supported as we believe them to be poor user experiences.</li>
	<li>Modals use&nbsp;<code>position: fixed</code>, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You&rsquo;ll likely run into issues when nesting a&nbsp;<code>.modal</code>&nbsp;within another fixed element.</li>
	<li>Once again, due to&nbsp;<code>position: fixed</code>, there are some caveats with using modals on mobile devices.&nbsp;<a href="https://getbootstrap.com/docs/5.2/getting-started/browsers-devices/#modals-and-dropdowns-on-mobile">See our browser support docs</a>&nbsp;for details.</li>
	<li>Due to how HTML5 defines its semantics,&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#attr-autofocus">the&nbsp;<code>autofocus</code>&nbsp;HTML attribute</a>&nbsp;has no effect in Bootstrap modals. To achieve the same effect, use some custom JavaScript:</li>
</ul>

<p>&nbsp;</p>

<pre>
<code>const myModal = document.getElementById(&#39;myModal&#39;)
const myInput = document.getElementById(&#39;myInput&#39;)

myModal.addEventListener(&#39;shown.bs.modal&#39;, () =&gt; {
  myInput.focus()
})
</code></pre>

<p>The animation effect of this component is dependent on the&nbsp;<code>prefers-reduced-motion</code>&nbsp;media query. See the&nbsp;<a href="https://getbootstrap.com/docs/5.2/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.</p>

<p>Keep reading for demos and usage guidelines.</p>

<h2>Examples&nbsp;</h2>

<h3>Modal components&nbsp;</h3>

<p>Below is a&nbsp;<em>static</em>&nbsp;modal example (meaning its&nbsp;<code>position</code>&nbsp;and&nbsp;<code>display</code>&nbsp;have been overridden). Included are the modal header, modal body (required for&nbsp;<code>padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>

<h5>Modal title</h5>

<p>&nbsp;</p>

<p>Modal body text goes here.</p>

<p>CloseSave changes</p>

<p>&nbsp;</p>

<pre>

&nbsp;</pre>

<div class="modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5><code>Modal title</code></h5>
</div>

<div class="modal-body">
<p><code>Modal body text goes here.</code></p>
</div>

<div class="modal-footer"><code>CloseSave changes </code></div>
</div>
</div>
</div>

<p>In the above static example, we use&nbsp;</p>

<h5>, to avoid issues with the heading hierarchy in the documentation page. Structurally, however, a modal dialog represents its own separate document/context, so the&nbsp;<code>.modal-title</code>&nbsp;should ideally be an&nbsp;</h5>

<h1>. If necessary, you can use the&nbsp;<a href="https://getbootstrap.com/docs/5.2/utilities/text/#font-size">font size utilities</a>&nbsp;to control the heading&rsquo;s appearance. All the following live examples use this approach.</h1>

<p>&nbsp;</p>

<h3>Live demo&nbsp;</h3>

<p>Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>

<p>Launch demo modal</p>

<p>&nbsp;</p>

<pre>
<code><!-- Button trigger modal -->
  Launch demo modal

<!-- Modal -->
</code></pre>

<div class="fade modal" id="exampleModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1><code>Modal title</code></h1>
</div>

<div class="modal-body"><code>... </code></div>

<div class="modal-footer"><code>CloseSave changes </code></div>
</div>
</div>
</div>

<h3>Static backdrop&nbsp;</h3>

<p>When backdrop is set to static, the modal will not close when clicking outside of it. Click the button below to try it.</p>

<p>Launch static backdrop modal</p>

<p>&nbsp;</p>

<pre>
<code><!-- Button trigger modal -->
  Launch static backdrop modal

<!-- Modal -->
</code></pre>

<div class="fade modal" id="staticBackdrop">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1><code>Modal title</code></h1>
</div>

<div class="modal-body"><code>... </code></div>

<div class="modal-footer"><code>CloseUnderstood </code></div>
</div>
</div>
</div>

<h3>Scrolling long content&nbsp;</h3>

<p>When modals become too long for the user&rsquo;s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</p>

<p>Launch demo modal</p>

<p>You can also create a scrollable modal that allows scroll the modal body by adding&nbsp;<code>.modal-dialog-scrollable</code>&nbsp;to&nbsp;<code>.modal-dialog</code>.</p>

<p>Launch demo modal</p>

<p>&nbsp;</p>

<pre>
<code><!-- Scrollable modal -->
</code></pre>

<div class="modal-dialog modal-dialog-scrollable"><code>... </code></div>

<h3>Vertically centered&nbsp;</h3>

<p>Add&nbsp;<code>.modal-dialog-centered</code>&nbsp;to&nbsp;<code>.modal-dialog</code>&nbsp;to vertically center the modal.</p>

<p>Vertically centered modal&nbsp;Vertically centered scrollable modal</p>

<p>&nbsp;</p>

<pre>
<code><!-- Vertically centered modal -->
</code></pre>

<div class="modal-dialog modal-dialog-centered"><code>... </code></div>

<p><code><!-- Vertically centered scrollable modal --> </code></p>

<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"><code>... </code></div>

<h3>Tooltips and popovers&nbsp;</h3>

<p><a href="https://getbootstrap.com/docs/5.2/components/tooltips/">Tooltips</a>&nbsp;and&nbsp;<a href="https://getbootstrap.com/docs/5.2/components/popovers/">popovers</a>&nbsp;can be placed within modals as needed. When modals are closed, any tooltips and popovers within are also automatically dismissed.</p>

<p>Launch demo modal</p>

<p>&nbsp;</p>

<pre>

&nbsp;</pre>

<div class="modal-body">
<h2><code>Popover in a modal</code></h2>

<p><code>This <a class="btn btn-secondary" href="#" title="Popover title">button</a> triggers a popover on click.</code></p>

<hr />
<h2><code>Tooltips in a modal</code></h2>

<p><code><a href="#" title="Tooltip">This link</a> and <a href="#" title="Tooltip">that link</a> have tooltips on hover.</code></p>
</div>

<h3>Using the grid&nbsp;</h3>

<p>Utilize the Bootstrap grid system within a modal by nesting&nbsp;<code>.container-fluid</code>&nbsp;within the&nbsp;<code>.modal-body</code>. Then, use the normal grid system classes as you would anywhere else.</p>

<p>Launch demo modal</p>

<p>&nbsp;</p>

<pre>

&nbsp;</pre>

<div class="modal-body">
<div class="container-fluid">
<div class="row">
<div class="col-md-4"><code>.col-md-4</code></div>

<div class="col-md-4 ms-auto"><code>.col-md-4 .ms-auto</code></div>
</div>

<div class="row">
<div class="col-md-3 ms-auto"><code>.col-md-3 .ms-auto</code></div>

<div class="col-md-2 ms-auto"><code>.col-md-2 .ms-auto</code></div>
</div>

<div class="row">
<div class="col-md-6 ms-auto"><code>.col-md-6 .ms-auto</code></div>
</div>

<div class="row">
<div class="col-sm-9"><code>Level 1: .col-sm-9 </code>

<div class="row">
<div class="col-8 col-sm-6"><code>Level 2: .col-8 .col-sm-6 </code></div>

<div class="col-4 col-sm-6"><code>Level 2: .col-4 .col-sm-6 </code></div>
</div>
<code> </code></div>
</div>
</div>
</div>

<h3>Varying modal content&nbsp;</h3>

<p>Have a bunch of buttons that all trigger the same modal with slightly different contents? Use&nbsp;<code>event.relatedTarget</code>&nbsp;and&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes">HTML&nbsp;<code>data-bs-*</code>&nbsp;attributes</a>&nbsp;to vary the contents of the modal depending on which button was clicked.</p>

<p>Below is a live demo followed by example HTML and JavaScript. For more information,&nbsp;<a href="https://getbootstrap.com/docs/5.2/components/modal/#events">read the modal events docs</a>&nbsp;for details on&nbsp;<code>relatedTarget</code>.</p>

<p>Open modal for @mdo&nbsp;Open modal for @fat&nbsp;Open modal for @getbootstrap</p>

<p><small>HTML</small></p>

<p>&nbsp;</p>

<pre>
<code>Open modal for @mdoOpen modal for @fatOpen modal for @getbootstrap

</code></pre>

<div class="fade modal" id="exampleModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1><code>New message</code></h1>
</div>

<div class="modal-body">
<form>
<div class="mb-3"><code>Recipient: <input type="text" /> </code></div>

<div class="mb-3"><code>Message:<textarea></textarea></code></div>
</form>
</div>
</div>
</div>
</div>
<!-- /** --TITULO--:modal bootrap para css| --LINK--:./Posts/CSS 3/modal-bootrap-para-css.php| **/ -->