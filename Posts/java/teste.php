<h2>9 Answers</h2>

<p>Sorted by:</p>

<p><select>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option selected="selected" value="scoredesc">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Highest score (default)&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value="trending">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Trending (recent votes count more)&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value="modifieddesc">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Date modified (newest first)&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<option value="createdasc">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Date created (oldest first)&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</option>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</select></p>

<p><a name="6632912"></a></p>

<p>&nbsp;</p>

<p>17</p>

<p>&nbsp;</p>

<p>Short Answer.</p>

<p>Encode your code using an online&nbsp;<a href="http://www.opinionatedgeek.com/dotnet/tools/htmlencode/encode.aspx" rel="noreferrer">HTML Encoder</a>&nbsp;and then put it inside&nbsp;<code>pre</code></p>

<pre>
<code>&lt;pre&gt;
    &lt;%--your encoded code goes here--%&gt;
&lt;/pre&gt;
</code></pre>

<p>Long Answer.</p>

<p>The above will only help you to show your code. If you want proper highlighting for your code, Try something like&nbsp;<strong>SyntaxHighlighter</strong></p>

<p>Link:&nbsp;<a href="http://code.google.com/p/syntaxhighlighter/wiki/Usage" rel="noreferrer">How to use SyntaxHighlighter.</a></p>

<p><a href="https://stackoverflow.com/a/6632912" rel="nofollow" title="Short permalink to this answer">Share</a></p>

<p><a href="https://stackoverflow.com/posts/6632912/edit" title="">Improve this answer</a></p>

<p>Follow</p>

<p>answered&nbsp;Jul 9, 2011 at 5:16</p>

<p><a href="https://stackoverflow.com/users/17447/naveen"><img alt="naveen's user avatar" src="https://www.gravatar.com/avatar/167f4b56e9ba1c1660e5980a84e96bbe?s=64&amp;d=identicon&amp;r=PG" style="height:32px; width:32px" /></a></p>

<p><a href="https://stackoverflow.com/users/17447/naveen">naveen</a></p>

<p>52.6k4646 gold badges160160 silver badges247247 bronze badges</p>

<ul>
	<li>
	<p>1</p>
	Sorry naveen, but in most cases the pre tag has css styles by default. So if you use this just to make html ignore your tags inside text, the whole block gets unwanted styling. I guess this causes downvotes.&nbsp;

	<p>&ndash;&nbsp;<a href="https://stackoverflow.com/users/2122897/herr-hansen" title="2,192 reputation">Herr_Hansen</a></p>
	&nbsp;<a href="https://stackoverflow.com/questions/6632873/how-to-make-html-ignore-code-that-is-part-of-text#comment61531432_6632912">May 2, 2016 at 17:51</a>&nbsp;</li>
	<li>
	<p>1</p>
	I did, but the question is &quot;How to make html ignore code that is part of text?&quot;. &quot;part of text&quot; means to me simple copy text. E.g.: &quot;Hello world, I use the &lt;div&gt; tag often.&quot; Interpreted in this way, both of your answers don&#39;t give exactly the expected quick solutions to someone who googled after &quot;ignore html tags in text&quot;.&nbsp;

	<p>&ndash;&nbsp;<a href="https://stackoverflow.com/users/2122897/herr-hansen" title="2,192 reputation">Herr_Hansen</a></p>
	&nbsp;<a href="https://stackoverflow.com/questions/6632873/how-to-make-html-ignore-code-that-is-part-of-text#comment61548153_6632912">May 3, 2016 at 6:43</a>&nbsp;</li>
	<li>pre tag with SyntaxHighlighter still requires escaping &lt; to &amp;lt;. The true escape free method is to use a TextArea (with out without SyntaxHighligther. SyntaxHighlighter works with TextArea.) The TextArea can display the text without any escaping, but it needs to be formatted so it doesn&#39;t look weird.&nbsp;
	<p>&ndash;&nbsp;<a href="https://stackoverflow.com/users/670530/doomgoober" title="1,273 reputation">DoomGoober</a></p>
	&nbsp;<a href="https://stackoverflow.com/questions/6632873/how-to-make-html-ignore-code-that-is-part-of-text#comment112375207_6632912">Aug 23, 2020 at 17:49</a></li>
</ul>

<p><a href="https://stackoverflow.com/questions/6632873/how-to-make-html-ignore-code-that-is-part-of-text#" title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”.">Add a comment</a></p>

<p><a name="6632890"></a></p>

<p>&nbsp;</p>

<p>13</p>

<p>&nbsp;</p>

<p>You have to use&nbsp;<a href="http://www.w3schools.com/html/html_entities.asp" rel="noreferrer">html entities</a>. Example:</p>

<pre>
<code>&lt;div&gt;
   Some Stuff
&lt;/div&gt;
</code></pre>

<p>should be</p>

<pre>
<code>&amp;lt;div&amp;gt;
   Some Stuff
&amp;lt;/div&amp;gt;
</code></pre>

<p>and it will render as the first one</p>

<p><a href="https://stackoverflow.com/a/6632890" rel="nofollow" title="Short permalink to this answer">Share</a></p>

<p><a href="https://stackoverflow.com/posts/6632890/edit" title="">Improve this answer</a></p>

<p>Follow</p>

<p>answered&nbsp;Jul 9, 2011 at 5:11</p>

<p><a href="https://stackoverflow.com/users/560299/ibu"><img alt="Ibu's user avatar" src="https://www.gravatar.com/avatar/c38fe465734e8428048585e0acf6174f?s=64&amp;d=identicon&amp;r=PG" style="height:32px; width:32px" /></a></p>

<p><a href="https://stackoverflow.com/users/560299/ibu">Ibu</a></p>

<p>41.9k1313 gold badges7575 silver badges103103 bronze badges</p>

<p><a href="https://stackoverflow.com/questions/6632873/how-to-make-html-ignore-code-that-is-part-of-text#" title="Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”.">Add a comment</a></p>

<p><a name="6632897"></a></p>

<p>&nbsp;</p>

<p>4</p>

<p>&nbsp;</p>

<p>You can use&nbsp;<code>&lt;pre&gt;</code>&nbsp;tag. Each time you insert any texts within the&nbsp;<code>&lt;pre&gt;</code>&nbsp;tag it wont get parsed as html document. One caveat though, if you try to put an opening HTML tag inside the pre tag, you have to do it like this:</p>

<pre>
<code>&lt;pre&gt;
     &amp;lt;TEST&gt;
            TEST!!
     &amp;lt;/TEST&gt;
&lt;/pre&gt;</code></pre>
<!-- /** --TITULO--:teste| --LINK--:./Posts/java/teste.php| **/ -->