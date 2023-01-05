<blockquote>
<p>CRIAR&nbsp; E MUDAR LINHA ESPECIFICA</p>
</blockquote>

<p>$json = &#39;{</p>

<p>&nbsp; &nbsp; &quot;coluna 1&quot;: {</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &quot;key1&quot;: &quot;value1&quot;,</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &quot;key2&quot;: &quot;value2&quot;,</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &quot;key3&quot;: &quot;value3&quot;</p>

<p>&nbsp; &nbsp; },</p>

<p>&nbsp; &nbsp; &quot;coluna 2&quot;: {</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &quot;key1&quot;: &quot;value1&quot;,</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &quot;key2&quot;: &quot;value2&quot;,</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &quot;key3&quot;: &quot;value3&quot; &nbsp; &nbsp; &nbsp;</p>

<p>&nbsp; &nbsp; }</p>

<p>}&#39;;</p>

<p>&nbsp;</p>

<p>$decodificado = json_decode($json);</p>

<p>&nbsp;</p>

<p>if (!$decodificado) {</p>

<p>&nbsp; &nbsp; die(&#39;JSON invalido&#39;);</p>

<p>}</p>

<p>&nbsp;</p>

<p>//$title pega o title1 e title2, title3, etc</p>

<p>foreach ($decodificado as $keyTitle =&gt; &amp;$title) {</p>

<p>&nbsp;</p>

<p>&nbsp; &nbsp; //$value pega o valor key1, key3, key3, key4, etc</p>

<p>&nbsp; &nbsp; foreach ($title as $key =&gt; &amp;$value) {</p>

<p>&nbsp;</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; //Aqui um exemplo para alterar as chaves com nome key2 e key3 apenas</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; if ($key === &#39;key2&#39;) {</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $value = rand(0, 100);</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; } elseif ($key === &#39;key3&#39;) {</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $value = rand(200, 300);</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>

<p>&nbsp; &nbsp; }</p>

<p>}</p>

<p>file_put_contents(&#39;tabella.txt&#39;, json_encode($decodificado));</p>

<p>&nbsp;</p>

<blockquote>
<p>ESCREVER NOVA LINHA</p>
</blockquote>

<pre>
<code>// extrai a informa&ccedil;&atilde;o do ficheiro
$string = file_get_contents(&quot;config.json&quot;);
// faz o decode o json para uma variavel php que fica em array
$json = json_decode($string, true);

// aqui &eacute; onde adiciona a nova linha ao ao array assignment
$json[&quot;assignment&quot;][] = &quot;999&quot;;

// abre o ficheiro em modo de escrita
$fp = fopen(&#39;config.json&#39;, &#39;w&#39;);
// escreve no ficheiro em json
fwrite($fp, json_encode($json));
// fecha o ficheiro
fclose($fp);</code></pre>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
<!-- /** --TITULO--:gerenciar json em php| --LINK--:./Posts/json/gerenciar-json-em-php.php| **/ -->