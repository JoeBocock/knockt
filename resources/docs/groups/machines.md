# Machines


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/machines" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/machines"
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
    'http://localhost/api/machines',
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

url = 'http://localhost/api/machines'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


<div id="execution-results-GETapi-machines" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-machines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-machines"></code></pre>
</div>
<div id="execution-error-GETapi-machines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-machines"></code></pre>
</div>
<form id="form-GETapi-machines" data-method="GET" data-path="api/machines" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-machines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-machines" onclick="tryItOut('GETapi-machines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-machines" onclick="cancelTryOut('GETapi-machines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-machines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/machines</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/machines" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","status":12}'

```

```javascript
const url = new URL(
    "http://localhost/api/machines"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "status": 12
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
    'http://localhost/api/machines',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'aut',
            'status' => 12,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/machines'
payload = {
    "name": "aut",
    "status": 12
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-POSTapi-machines" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-machines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-machines"></code></pre>
</div>
<div id="execution-error-POSTapi-machines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-machines"></code></pre>
</div>
<form id="form-POSTapi-machines" data-method="POST" data-path="api/machines" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-machines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-machines" onclick="tryItOut('POSTapi-machines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-machines" onclick="cancelTryOut('POSTapi-machines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-machines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/machines</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-machines" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status" data-endpoint="POSTapi-machines" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/machines/11650637.447028" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/machines/11650637.447028"
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
    'http://localhost/api/machines/11650637.447028',
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

url = 'http://localhost/api/machines/11650637.447028'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


<div id="execution-results-GETapi-machines--machine-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-machines--machine-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-machines--machine-"></code></pre>
</div>
<div id="execution-error-GETapi-machines--machine-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-machines--machine-"></code></pre>
</div>
<form id="form-GETapi-machines--machine-" data-method="GET" data-path="api/machines/{machine}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-machines--machine-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-machines--machine-" onclick="tryItOut('GETapi-machines--machine-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-machines--machine-" onclick="cancelTryOut('GETapi-machines--machine-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-machines--machine-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/machines/{machine}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>machine</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="machine" data-endpoint="GETapi-machines--machine-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/machines/652.2542651" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"architecto","status":15}'

```

```javascript
const url = new URL(
    "http://localhost/api/machines/652.2542651"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "status": 15
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
    'http://localhost/api/machines/652.2542651',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'architecto',
            'status' => 15,
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/machines/652.2542651'
payload = {
    "name": "architecto",
    "status": 15
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()
```


<div id="execution-results-PUTapi-machines--machine-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-machines--machine-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-machines--machine-"></code></pre>
</div>
<div id="execution-error-PUTapi-machines--machine-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-machines--machine-"></code></pre>
</div>
<form id="form-PUTapi-machines--machine-" data-method="PUT" data-path="api/machines/{machine}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-machines--machine-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-machines--machine-" onclick="tryItOut('PUTapi-machines--machine-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-machines--machine-" onclick="cancelTryOut('PUTapi-machines--machine-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-machines--machine-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/machines/{machine}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/machines/{machine}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>machine</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="machine" data-endpoint="PUTapi-machines--machine-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-machines--machine-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status" data-endpoint="PUTapi-machines--machine-" data-component="body" required  hidden>
<br>

</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/machines/6401" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/machines/6401"
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
    'http://localhost/api/machines/6401',
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

url = 'http://localhost/api/machines/6401'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


<div id="execution-results-DELETEapi-machines--machine-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-machines--machine-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-machines--machine-"></code></pre>
</div>
<div id="execution-error-DELETEapi-machines--machine-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-machines--machine-"></code></pre>
</div>
<form id="form-DELETEapi-machines--machine-" data-method="DELETE" data-path="api/machines/{machine}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-machines--machine-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-machines--machine-" onclick="tryItOut('DELETEapi-machines--machine-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-machines--machine-" onclick="cancelTryOut('DELETEapi-machines--machine-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-machines--machine-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/machines/{machine}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>machine</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="machine" data-endpoint="DELETEapi-machines--machine-" data-component="url" required  hidden>
<br>

</p>
</form>



