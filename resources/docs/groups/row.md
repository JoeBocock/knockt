# Row


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/rows" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"machine_id":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/rows"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "machine_id": 18
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/rows',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'machine_id' => 18,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/rows'
payload = {
    "machine_id": 18
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-GETapi-rows" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-rows"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-rows"></code></pre>
</div>
<div id="execution-error-GETapi-rows" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-rows"></code></pre>
</div>
<form id="form-GETapi-rows" data-method="GET" data-path="api/rows" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-rows', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-rows" onclick="tryItOut('GETapi-rows');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-rows" onclick="cancelTryOut('GETapi-rows');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-rows" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/rows</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>machine_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="machine_id" data-endpoint="GETapi-rows" data-component="body" required  hidden>
<br>

</p>

</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/rows" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"numquam","machine_id":20}'

```

```javascript
const url = new URL(
    "http://localhost/api/rows"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "numquam",
    "machine_id": 20
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/rows',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'numquam',
            'machine_id' => 20,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/rows'
payload = {
    "name": "numquam",
    "machine_id": 20
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTapi-rows" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-rows"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-rows"></code></pre>
</div>
<div id="execution-error-POSTapi-rows" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-rows"></code></pre>
</div>
<form id="form-POSTapi-rows" data-method="POST" data-path="api/rows" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-rows', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-rows" onclick="tryItOut('POSTapi-rows');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-rows" onclick="cancelTryOut('POSTapi-rows');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-rows" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/rows</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-rows" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>machine_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="machine_id" data-endpoint="POSTapi-rows" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/rows/247.6751" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/rows/247.6751"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/rows/247.6751',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/rows/247.6751'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


<div id="execution-results-GETapi-rows--row-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-rows--row-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-rows--row-"></code></pre>
</div>
<div id="execution-error-GETapi-rows--row-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-rows--row-"></code></pre>
</div>
<form id="form-GETapi-rows--row-" data-method="GET" data-path="api/rows/{row}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-rows--row-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-rows--row-" onclick="tryItOut('GETapi-rows--row-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-rows--row-" onclick="cancelTryOut('GETapi-rows--row-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-rows--row-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/rows/{row}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>row</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="row" data-endpoint="GETapi-rows--row-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/rows/616065.9" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"cum","machine_id":3}'

```

```javascript
const url = new URL(
    "http://localhost/api/rows/616065.9"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "cum",
    "machine_id": 3
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/rows/616065.9',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'cum',
            'machine_id' => 3,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/rows/616065.9'
payload = {
    "name": "cum",
    "machine_id": 3
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTapi-rows--row-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-rows--row-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-rows--row-"></code></pre>
</div>
<div id="execution-error-PUTapi-rows--row-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-rows--row-"></code></pre>
</div>
<form id="form-PUTapi-rows--row-" data-method="PUT" data-path="api/rows/{row}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-rows--row-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-rows--row-" onclick="tryItOut('PUTapi-rows--row-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-rows--row-" onclick="cancelTryOut('PUTapi-rows--row-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-rows--row-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/rows/{row}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/rows/{row}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>row</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="row" data-endpoint="PUTapi-rows--row-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-rows--row-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>machine_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="machine_id" data-endpoint="PUTapi-rows--row-" data-component="body" required  hidden>
<br>

</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/rows/14.78" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/rows/14.78"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/rows/14.78',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/rows/14.78'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEapi-rows--row-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-rows--row-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-rows--row-"></code></pre>
</div>
<div id="execution-error-DELETEapi-rows--row-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-rows--row-"></code></pre>
</div>
<form id="form-DELETEapi-rows--row-" data-method="DELETE" data-path="api/rows/{row}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-rows--row-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-rows--row-" onclick="tryItOut('DELETEapi-rows--row-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-rows--row-" onclick="cancelTryOut('DELETEapi-rows--row-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-rows--row-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/rows/{row}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>row</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="row" data-endpoint="DELETEapi-rows--row-" data-component="url" required  hidden>
<br>

</p>
</form>



